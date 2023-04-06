<?php
include "../../controller/controller.php";
?>
<?php
    var_dump($_POST);
    $eventId=$_POST['event_id'];
    $question=$_POST['question'];
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $d=$_POST['d'];
    $e=$_POST['e'];
    $answer=$_POST['answer'];

    sql("insert into questions (event_id,question,question_answer,a,b,c,d,e) values ($eventId,'$question','$answer','$a','$b','$c','$d','$e')");
    header("Location: ../index.php");
?>