<?php
include "../controller/controller.php";
session_start();
$userId=$_SESSION['user'];
$eventId=$_GET['event'];

$user=$_POST;//data user dengan format (user[nomor soal])
$score=0.0;
$totalHalaman=count(select("SELECT * FROM questions where event_id=$eventId")); // varibel untuk menampilkan halaman
// var_dump($totalHalaman); die;
$result=select("select * from questions where event_id=$eventId");
$i=1;

foreach($result as $row) :
    if(isset($user["$i"])){
        if($user["$i"]==$row["question_answer"]){
            $score++;
        }
    }

    $i++;
endforeach;
// var_dump($score);
$score=$score/$totalHalaman*100;


$grade="E";
if($score>=80){$grade="A";}
if($score>=60 && $score<80 ){$grade="B";}
if($score>=40 && $score<60 ){$grade="c";}
if($score>=20 && $score<40 ){$grade="D";}
if($score>=0 && $score<20 ){$grade="E";}

var_dump($score);
    $query ="INSERT INTO result (score , grade , user_id , event_id,result_date,result_time) VALUES ($score,'$grade',$userId,$eventId,CURDATE(),NOW())";
    mysqli_query($conn,$query);
    header("Location: ../dashboard");
?>