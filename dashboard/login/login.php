<?php
include "../../controller/controller.php";
// ==============================================================================================================================
// ==============================================================================================================================

session_start();



//root redirect
$iftrue="../index.php";
$iffalse="../login/login.html";

if(isset( $_SESSION['login'])){header("Location: ../index.php");}


if(isset($_POST['submit']))
{

//mengambil semua data user dari database
// ======================================>
$input=$_POST['input'];//mendeklarasikan input
// ======================================>


// ======================================>
$user = mysqli_query($conn,"SELECT*FROM users WHERE user_name='$input' or user_email='$input'");
// ======================================>
$password=$_POST['password'];//mendeklarasikan password
// ======================================>

if(mysqli_num_rows($user)===1) //cek apakah data ada atau tidak fungsi ini akan menngembalikan nilai boolean
{
    //username telah masuk
    $row = mysqli_fetch_assoc($user);
    if(password_verify($password,$row['user_password']))//cek apakah password yang diinput sama dengan password yang di database
{
    
    $_SESSION['login']=true; //deklarasi login session
    $_SESSION['user'] =  $row['user_id'];
    

    header("Location: ../index.php?");
    exit;
exit;
}
}

//membuat alert
echo"
<script>
alert('username atau password salah');
document.location.href='$iffalse';
</script>
";


}
?>