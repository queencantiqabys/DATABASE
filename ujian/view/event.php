<?php
    include "../../controller/controller.php";

    // INSERT ALL FILES WHICH HAS BEEN INPUTED
    // MEMASUKAN SEMUA FILE YANG TELAH DIINPUT

    if(isset($_POST['submit']))
    {
        $name=$_POST['event_name'];
        $desc=$_POST['event_description'];
        sql("insert into events (event_name,event_description) values ('$name','$desc')");
        echo "<script> alert('selesai')</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>
            event_name
            <input type = "text" name = "event_name">
        </label>

        <label>
            event_description
            <input type = "text" name = "event_description">
        </label>
        <label>
            event img
            <input type = "file" name = "event_img  ">
        </label>
        <button name="submit">submit</button>
    </form>
</body>
</html>