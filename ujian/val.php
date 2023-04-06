<?php
    $eventid=$_GET['event'];
    setcookie("ujian",time()+60);
    header("Location: index.php?event=$eventid");
?>