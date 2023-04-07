<?php
include "../../controller/controller.php";
?>
<?php
    var_dump($_POST);
    $registerId=$_POST['register_id'];

    sql("UPDATE register SET register_acc=1 ");
    header("Location: ../index.php");
?>