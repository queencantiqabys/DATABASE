<?php
session_start();
include "../../controller/controller.php";


$userId=$_SESSION['user'];
$eventId=$_GET['event'];

$attemp=mysqli_query($conn,"SELECT * FROM register where user_id =$userId AND event_id=$eventId ");
if(mysqli_num_rows($attemp)>0)// cek apakah telah ada di table result atau belum
{
//   header("Location: ../index.php?2");
echo "<script> alert('ANDA TELAH MENDAFTAR SILAHKAN TUNGGU AGAR DI ACC') </script>";
exit;
}
sql("INSERT INTO register (register_date,user_id,event_id) VALUES (NOW(),$userId,$eventId)");
header("Location: ../index.php?register");

?>