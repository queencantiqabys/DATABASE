<?php
include "../../controller/controller.php";
//root redirect
$iftrue="../index.php";
$iffalse="../login/login.html";


if(isset($_POST['submit']))
{

//mengambil semua data user dari database
// ======================================>
$input=$_POST['input'];//mendeklarasikan input
// ======================================>


// ======================================>
$data = mysqli_query($conn,"SELECT*FROM users WHERE user_name='$input' or user_email='$input'");
// ======================================>
$password=$_POST['password'];//mendeklarasikan password
// ======================================>

if(mysqli_num_rows($data)===1) //cek apakah data ada atau tidak fungsi ini akan menngembalikan nilai boolean
{
    //username telah masuk
    $row = mysqli_fetch_assoc($data);
    if(password_verify($password,$row['user_password']))//cek apakah password yang diinput sama dengan password yang di database
{
echo"
<script>
alert('SELAMAT DATANG');
document.location.href='$iftrue';
</script>
";
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