<?php
include "../../../controller/controller.php";

if(isset($_POST['submit'])){
    $user_id=$_POST['user_id'];
    $event_id=$_POST['event_id'];
    $bukti_tf=$_POST['bukti'];

    sql("INSERT INTO pending (user_id,event_id,bukti_tf) VALUES ($user_id,$event_id,'$bukti_tf')");
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
<?php

    if(isset($_GET['event_id'])):
        $event_id=$_GET['event_id'];
        $data=query("select * from events where event_id = $event_id");
        
        
?>
<form action="" method="post">
    <label>
        user_id
        <input type = "int" name = "user_id">
    </label>
    <label>
        event_id
        <input type = "hidden" name = "event_id" value="<?= $data['event_id']; ?>">
    </label>
        <label>
            bukti tf
            <input type = "text" name = "bukti">
        </label>
        <button type=submit name='submit'>sumbit</button>
</form>
<?php
    endif;
?>
</body>
</html>