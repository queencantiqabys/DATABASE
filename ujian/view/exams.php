<?php
    include "../../controller/controller.php";

    // INSERT ALL FILES WHICH HAS BEEN INPUTED
    // MEMASUKAN SEMUA FILE YANG TELAH DIINPUT

    if(isset($_POST['submit']))
    {
        $name=$_POST['exam_name'];
        $eventid=$_POST['event_id'];
        $roleid=$_POST['role_id'];
        sql("insert into exams (exam_name,event_id,role_id) values ('$name',$eventid,$roleid)");
        echo "<script> alert('selesai')</script>";
    }

    // QUERY SEMUA EVENT ID DIDALAM OPTION
    $files=select("SELECT * FROM events");
    $rows=select("SELECT * FROM roles");

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

        <select name="event_id" id="" class="input">
            <?php
                foreach($files as $data) :
            ?>
            <option value="<?= $data['event_id']; ?>"><?= $data['event_name']; ?></option>
            <?php
                endforeach;
            ?>
        </select>
            <select name="role_id" id="" class="input">
                <?php
                    foreach($rows as $row) :
                ?>
                <option value="<?= $row['role_id']; ?>"><?= $row['role_level']; ?></option>
                <?php
                    endforeach;
                ?>
            </select>

        <label>
            exam name
            <input type = "text" name = "exam_name">
        </label>      

        <button name="submit">submit</button>
    </form>
</body>
</html>