<?php
session_start();
include "../../controller/controller.php";


$userId=$_POST['user_id'];
$eventId=$_POST['event_id'];
// var_dump($_FILES); die;
$req=upload('../../directory/users/');

$attemp=mysqli_query($conn,"SELECT * FROM register where user_id =$userId AND event_id=$eventId ");
if(mysqli_num_rows($attemp)>0)// cek apakah telah ada di table result atau belum atau cek dia sudah pernah mengikuti ujian atau belum
{
//   header("Location: ../index.php?2");

echo"
<script>
alert('ANDA TELAH MENDAFTAR SILAHKAN TUNGGU AGAR DI ACC');
document.location.href='../index.php';
</script>
";
exit;
}
sql("INSERT INTO register (register_acc,register_date,user_id,event_id,register_req) VALUES (0,NOW(),$userId,$eventId,'$req')");
header("Location: ../index.php?register");





// ============================================================================================================================================

?>