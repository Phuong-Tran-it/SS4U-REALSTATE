<?php require_once __DIR__. "/admin/autoload/autoload.php";?>
<?php 

    $dbstr ="(DESCRIPTION =(ADDRESS= (PROTOCOL = TCP)(HOST = 103.57.209.221)(PORT=1526))
    (CONNECT_DATA = (SERVER = DEDICATED)(SERVICE_NAME = orcle)(INSTANCE_NAME = orcle)))";
    
    global $conn;
    
    $conn = oci_connect('hr','hr', $dbstr,'AL32UTF8');
    if(!$conn){
        $e = oci_error();
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    
    <?php
    global $conn;
    $result =  oci_parse($conn, "
            SELECT 
            IDV.PORTION_CODE,
            ROUND (pl.PRICE, 6) AS PRICE,
            IDV.BUILDING_CODE,
            idv.DT_LODAT_DSP,
            idv.DT_SAN_DSP,
            idv.HOUSE_DETAIL_NAME,
            idv.HOUSE_DETAIL_CODE,
            idv.BUILDING_NAME,
            IDV.WC_ROOM_QUANTITY,
            IDV.ROOM_QUANTITY,
            IDV.FLOOR_QUANTITY,
            to_char(idv.OPENING_DAY,'YYYY-MM-DD'),
            to_char(idv.FINAL_DAY,'YYYY-MM-DD'),
            idv.HOUSE_DIRECTION,
            idv.DT_TIMTUONG,
            idv.DT_THONGTHUY,
            idv.TTCANHO_NAME,
            idv.BUILDING_ID,
            IDV.ITEM_ID,
            PTH.DIACHI
       FROM OM.OM_PRICELIST_HEADERS ph,
            OM.OM_PRICELIST_LINES pl,
            INV.INV_HOUSE_DETAIL_V idv,
            OM.OM_PROJECT_TECH_HEADERS pth
      WHERE     PH.HEADER_ID = PL.HEADER_ID(+)
            AND PH.ENABLE_FLAG = 'Y'
            AND PL.STATUS = 'Complete'
            AND PL.ENABLE_FLAG = 'Y'
            AND PL.ITEM_ID = IDV.ITEM_ID(+)
            AND IDV.PORTION_NAME= PTH.CUS_CHAR1 (+)
            AND rownum <= 10");
    oci_execute($result);
    /*
    $nrows = oci_fetch_all($result, $res);
    var_dump($res);

    echo "<table border='1'>\n";
foreach ($res as $col) {
    echo "<tr>\n";
    foreach ($col as $item) {
        echo "    <td>".($item !== null ? htmlentities($item, ENT_QUOTES) : "")."</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

oci_free_statement($result);
oci_close($conn);*/
while (($row = oci_fetch_array($result, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
    
      $data=
      [
         "PORTION_CODE" => $row[0],
         "price" => $row[1],
         
         "BUILDING_CODE" => $row[2],
         /*
         */
         "HOUSE_DETAIL_NAME" => $row[5],
         "HOUSE_DETAIL_CODE" => $row[6],
         
         "BUILDING_NAME" => $row[7],
         /*
         */
         "OPENING_DAY" => $row[11],
         
         "FINAL_DAY" => $row[12],
         "HOUSE_DIRECTION" => $row[13],
         "DT_TIMTUONG" => $row[14],
         "DT_THONGTHUY" => $row[15],
         "TTCANHO_NAME" => $row[16],
         "BUILDING_ID" =>$row[17],
         "ITEM_ID" =>$row[18],
         "DIA_CHI" =>$row[19]
      ];
      $is_check = $db->fetchOne("product"," ITEM_ID = '".$data['ITEM_ID']."' ");
      if($is_check == NULL){
      $id_insert = $db->insert("product",$data);
      }

}

oci_free_statement($result);
oci_close($conn);

?>
    
</body>
</html>