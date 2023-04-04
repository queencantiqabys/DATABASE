<?php
include "../controller/controller.php";
$user=$_POST;
$score=0;
$totalHalaman=count(select("SELECT * FROM questions")); // varibel untuk menampilkan halaman
$result=select("select * from questions");
$i=1;


foreach($result as $row) :
    if(isset($user["$i"])){
        if($user["$i"]==$row["question_answer"]){
            $score++;
        }
    }

    $i++;
endforeach;
$score=$score/$totalHalaman*100;


sql("insert into result (result_answer) values ($score)");
header("Location: ../dashboard");
?>