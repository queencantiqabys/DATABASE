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
    sql("INSERT INTO events (event_name,event_date,event_description,event_img,waktu_mulai,waktu_selesai) values('$eventName','$eventDate','$eventDesc','$img','$waktuMulai','$waktuSelesai')");
    header("Location: ../index.php");
?>