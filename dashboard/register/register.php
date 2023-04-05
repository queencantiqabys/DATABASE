<?php
session_start();
include "../../controller/controller.php";


$userId=$_SESSION['user'];
$eventID=$_GET['event'];
    sql("INSERT INTO register (register_date,user_id,event_id) VALUES (NOW(),$userId,$eventID)");
    header("Location: ../index.php?register");

?>