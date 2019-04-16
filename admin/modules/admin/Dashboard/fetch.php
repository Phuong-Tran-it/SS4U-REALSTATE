<?php
//fetch.php;
if(isset($_POST["view"]))
{
 include("connect.php");

 if($_POST["view"] != '')
 {
  $update_query = "UPDATE transaction SET status=1 WHERE status=0";
  mysqli_query($connect, $update_query);
 }
 $query = "SELECT * FROM transaction ORDER BY id DESC LIMIT 5";
 $result = mysqli_query($connect, $query);
 $output = '';
 
 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
   <a class="dropdown-item preview-item" href="/SS4UREALSTATE/admin/modules/transaction/index.php">
                        <div class="preview-thumbnail">
                           <div class="preview-icon bg-primary">
                              <i class="mdi mdi-bookmark mx-0"></i>
                           </div>
                        </div>
                        <div class="preview-item-content">
                           <h6 class="preview-subject font-weight-medium text-dark" style="
                              ">Bạn Có Một Lịch Hẹn
                           </h6>
                           <p class="font-weight-light small-text">'.$row["created_at"].'
                           </p>
                        </div>
                     </a>

   ';
  }
 }
 else
 {
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
 }
 
 $query_1 = "SELECT * FROM transaction WHERE status=0";
 $result_1 = mysqli_query($connect, $query_1);
 $count = mysqli_num_rows($result_1);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}
?>