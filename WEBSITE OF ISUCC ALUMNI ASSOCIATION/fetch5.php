<?php
//fetch.php;
if(isset($_POST["view"]))
{
 include 'connection/mysqliconn.php';
 if($_POST["view"] != '')
 {
  $update_query = "UPDATE alumni_records SET comment_status=1 WHERE comment_status=0";
  mysqli_query($connect, $update_query);
 }
 $query = "SELECT * FROM alumni_records ORDER BY id DESC";
 $result = mysqli_query($connect, $query);
 $output = '';
 $title = '';
 
 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
    $timeStamp = $row['date'];
    $dt = new DateTime($timeStamp);
   $output .= '
   <li>
    <a href="alumnirecords.php">
     <strong>'.$row["fname"].' '.$row["mname"].' '.$row["lname"].'</strong><br/>
     <small id="small"> From  '.$row["address"].'</small><br/>
     <small><em><i class="fa fa-clock-o"></i> '.$dt->format('M/y/d : H:i:s').'</em></small>
    </a>
   </li>
  <li class="divider"></li>
   ';
  }
 }
 else
 {
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
 }
 
 $query_1 = "SELECT * FROM alumni_records WHERE comment_status=0";
 $result_1 = mysqli_query($connect, $query_1);
 $count = mysqli_num_rows($result_1);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}
?>
