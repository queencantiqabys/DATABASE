<?php
include "../../controller/controller.php";
?>
<?php
    // var_dump($_POST);
    $eventId=$_POST['event_id'];
    $eventName=$_POST['event_name'];
    $eventDate=$_POST['event_date'];
    $eventDesc=$_POST['event_description'];
    $waktuMulai=$_POST['waktu_mulai'];
    $waktuSelesai=$_POST['waktu_selesai'];
    $img=upload("../../directory/events/");
    // $img="img1.jpg";
    sql("UPDATE events SET event_name='$eventName',event_date='$eventDate',event_description='$eventDesc',event_img='$img',waktu_mulai='$waktuMulai',waktu_selesai='$waktuSelesai' where event_id=$eventId");
    header("Location: ../index.php");
?>