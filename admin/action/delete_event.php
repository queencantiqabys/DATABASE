<?php

    include "../../controller/controller.php";

        $eventId=$_GET['event'];
        if(delete($eventId)){
            header("Location: ../index.php");
        }
            var_dump($eventId);
?>