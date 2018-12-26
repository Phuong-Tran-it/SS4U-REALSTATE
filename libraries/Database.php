<?php
   class Database
   {
       public $link;
       public function __construct()
       {
           $this->link = mysqli_connect("localhost","root","","realestate")or die();
           mysqli_set_charset($this->link,"utf8");
       }
       /*
           [insert description] hàm insert
           param $table
           param array $data
           return integer
       */
           //xóa
        public function delete($table, $id)
        {
          $sql ="DELETE FROM {$table} WHERE id = $id ";
          mysqli_query($this->link,$sql) or die ("Lỗi Truy Vấn delete --" .mysqli_error($this->link));
          return mysqli_affected_rows($this->link);
        }
       public function insert($table, array $data)
       {
           $sql = "INSERT INTO {$table}";
           $columns = implode(',',array_keys($data));
           $values  = "";
           $sql.='('.$columns.')';
           foreach($data as $field =>$value)
           {
               if(is_string($value)){
                   $values .="'". mysqli_real_escape_string($this->link,$value)."',";
               }else{
                   $values .= mysqli_real_escape_string($this->link,$value).',';
               }
           }
               $values = substr($values,0,-1);
               $sql .= "VALUES (".$values.')';
               // _debug($sql);die;
               mysqli_query($this->link,$sql) or die("lỗi query insert".mysqli_error($this->link));
               return mysqli_insert_id($this->link);
       }
       //phun hết source ra
       public function fetchAll($table)
       {
           $sql = "SELECT * FROM {$table} WHERE 1=1";
           $result = mysqli_query($this->link,$sql) or die("Lỗi Truy Vấn fetch ALL".mysqli_error($this->link));
           $data = [];
           if($result)
           {
               while($num = mysqli_fetch_assoc($result))
               {
                   $data[]=$num;
               }
           }
           return $data;
       }
       //
       public function fetchOne($table, $query)
       {
            $sql = "SELECT * FROM {$table} WHERE ";
            $sql .= $query;
            $sql .= "LIMIT 1";
            $result = mysqli_query($this->link,$sql) or die ("Lỗi truy vấn fetchOne" .mysqli_error($this->link));
            return mysqli_fetch_assoc($result);
       }
       //select tất cả các sản phẩm có id bằng id truyền vào
       public function fetchID($table,$id)
       {
            $sql="SELECT * FROM {$table} WHERE id =$id";
            $result = mysqli_query($this->link,$sql) or die("lỗi query truy vấn fetchID".mysqli_error($this->link));
            return mysqli_fetch_assoc($result);
       }
       public function update($table, array $data, array $conditions)
       {
            $sql ="UPDATE {$table}";
            $set=" SET ";
            $where=" WHERE ";
            foreach($data as $field=>$value){
                if(is_string($value)){
                    $set .= $field .'='.'\''.mysqli_real_escape_string($this->link,xss_clean($value)
                        ).'\',';
                }else{
                    $set .= $field .'='. mysqli_real_escape_string($this->link,xss_clean($value)).',';
                }
            }
            $set = substr($set,0,-1);
   
            foreach ($conditions as $field => $value) {
                if(is_string($value)){
                    $where .= $field .'='.'\''. mysqli_real_escape_string($this->link,xss_clean($value)).'\' AND ';
                }else{
                    $where .=$field .'='. mysqli_real_escape_string($this->link,xss_clean($value)).' AND ';
                }
            }
            $where = substr($where,0,-5);
            $sql.= $set . $where;
            mysqli_query($this->link, $sql)or die("Lỗi truy vấn update--".mysqli_error($this->link));
            return mysqli_affected_rows($this->link);
        }
        /*
        //phân trang
        public function fetchJone($table,$sql,$page =0,$row,$pagi = false )
        {
          $data = [];
          if ($pagi == true) 
          {
              $total = $this->countTable($table);
              $sotrang = ceil($total / $row);
              $start = ($page - 1) * $row ;
              $sql .= " LIMIT $start,$row";
              $data= [ "page" => $sotrang];

              $result = mysqli_query($this->link,$sql) or die ("Lỗi truy vấn fetchJone".
                mysqli_error($this->link));
   
          }
          else
          {
            $result = mysqli_query($this->link,$sql) or die ("lỗi truy vấn fetchJone=--".mysqli_error($this->link));
          }
          if ( $result)
          {
            while ($num = mysqli_fetch_assoc($result)) {
                $data[]=$num;
            }
          }
          return $data; 
        }
        */
        public function fetchsql( $sql )
        {
            $result = mysqli_query($this->link,$sql) or die("Lỗi  truy vấn sql " .mysqli_error($this->link));
            $data = [];
            if( $result)
            {
                while ($num = mysqli_fetch_assoc($result))
                {
                    $data[] = $num;
                }
            }
            return $data;
        }
   
    }
   ?>