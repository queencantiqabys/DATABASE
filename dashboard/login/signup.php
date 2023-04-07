<?php
    include "../../controller/controller.php";
//root redirect 
$iftrue="../login/login.html";
$iffalse="../login/signup.html";

    if(isset($_POST['submit']))
    {
        global $conn;

        $name = strtolower(stripslashes($_POST['name']));            //
        $email = strtolower(stripslashes($_POST['email']));          //
        $number = strtolower(stripslashes($_POST['number']));      //
        $school = strtolower(stripslashes($_POST['school']));        //

        $password = mysqli_real_escape_string($conn,$_POST["password"]);  //untuk memungkinkan user memasukan dengan tanda kutip
        $password2 = mysqli_real_escape_string($conn,$_POST["password2"]);//untuk memungkinkan user memasukan dengan tanda kutip

        if($password!== $password2)//cek apakah password dan confirm password telah sesuai
        {
            echo"
            <script>
            alert('konfirmasi password tidak sesuai');
            document.location.href='$iffalse';
            </script>
            ";
            return 0;
        }

 
        $password = password_hash($password,PASSWORD_DEFAULT);//password encrypt

        $data = mysqli_query($conn,"SELECT*FROM users WHERE user_email='$email'");//mengeluarkan data dengan email yang diinput

        if(mysqli_fetch_assoc($data))//cek apakah data email yang diinput sudah ada di databse atau belum
        {
            echo"
            <script>
            alert('USERNAME ATAU EMAIL SUDAH TERDAFTAR'); 
            document.location.href='$iffalse';
            </script>
            ";
            return 0;
        }
        if($email='admin@admin.com'){        sql("INSERT INTO admin (admin_name,admin_num,admin_email,admin_password) VALUES ('$name','$number','$email','$password')");
        }
        sql("INSERT INTO users (user_name,user_num,user_email,user_password,user_school) VALUES ('$name','$number','$email','$password','$school')");
        echo"
        <script>
            alert('BERHASIL'); 
            document.location.href='$iftrue';
        </script>
        ";
    }
?>