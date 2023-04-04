<?php
    include "../../controller/controller.php";

    // INSERT ALL FILES WHICH HAS BEEN INPUTED
    // MEMASUKAN SEMUA FILE YANG TELAH DIINPUT

    if(isset($_POST['submit']))
    {
        $exam_id=$_POST['exam_id'];
        $question_num=$_POST['question_num'];
        $question=$_POST['question'];
        $question_answer=$_POST['question_answer'];
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];
        $d=$_POST['d'];
        $e=$_POST['e'];
        sql("INSERT INTO `questions` (`exam_id`, `question_num`, `question`, `question_answer`, `question_img`, `a`, `b`, `c`, `d`, `e`) VALUES
        ($exam_id, $question_num, '$question', '$question_answer', NULL, '$a', '$b', '$c', '$d', '$e')");
        echo "<script> alert('selesai')</script>";   
    }

    // QUERY SEMUA EVENT ID DIDALAM OPTION
    $files=select("SELECT exams.exam_id,exams.exam_name,events.event_name FROM exams,events where exams.event_id = events.event_id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        form{
            display:flex;
            flex-direction:column;
            align-items:center; 
            background-color: red;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <form action="" method="post">

        <select name="exam_id" id="" class="input">
            <?php
                foreach($files as $data) :
            ?>
            <option value="<?= $data['exam_id']; ?>"><?= $data['exam_name']; ?> - <?= $data['event_name']; ?></option>
            <?php
                endforeach;
            ?>
        </select>

        <label>
            nomor soal
            <input type = "number" name = "question_num">
        </label> 


        <label>
            <textarea name="question" rows="4" cols="50"></textarea>
        </label>


        <label>
            soal bergambar (optional)
            <input type = "file" name = "question_img">
        </label>

        <label for="">A<input type="radio" name="question_answer" value="a" required><input type="text" name="a"></label>
        <label for="">B<input type="radio" name="question_answer" value="b" required><input type="text" name="b"></label>
        <label for="">C<input type="radio" name="question_answer" value="c" required><input type="text" name="c"></label>
        <label for="">D<input type="radio" name="question_answer" value="d" required><input type="text" name="d"></label>
        <label for="">E<input type="radio" name="question_answer" value="e" required><input type="text" name="e"></label>

        
        <button name="submit">submit</button>
    </form>
    
</body>

</html>