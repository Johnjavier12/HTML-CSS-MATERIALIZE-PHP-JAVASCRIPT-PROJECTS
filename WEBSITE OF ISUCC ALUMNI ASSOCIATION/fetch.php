<?php
//fetch.php;
include 'connection/mysqliconn.php';
$query = "SELECT * FROM parents WHERE comment_status = 0 ORDER BY id DESC";
$result = mysqli_query($connect, $query);
$output = '';
while($row = mysqli_fetch_array($result))
{
 $output .= '
 <div class="alert alert_default">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <p><strong>'.$row["user"].'</strong>
   <small>Posted AnnounceMent See it Now!</em></small>
  </p>
 </div>
 ';
}
$update_query = "UPDATE parents SET comment_status = 1 WHERE comment_status = 0";
mysqli_query($connect, $update_query);
echo $output;

?>