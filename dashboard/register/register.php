<?php
session_start();
include "../../controller/controller.php";


$userId=$_POST['user_id'];
$eventId=$_POST['event_id'];
// var_dump($_FILES); die;
$req=upload('../../directory/users');

$attemp=mysqli_query($conn,"SELECT * FROM register where user_id =$userId AND event_id=$eventId ");
if(mysqli_num_rows($attemp)>0)// cek apakah telah ada di table result atau belum atau cek dia sudah pernah mengikuti ujian atau belum
{
//   header("Location: ../index.php?2");

echo"
<script>
alert('ANDA TELAH MENDAFTAR SILAHKAN TUNGGU AGAR DI ACC');
document.location.href='../index.php';
</script>
";
exit;
}
sql("INSERT INTO register (register_acc,register_date,user_id,event_id,register_req) VALUES (0,NOW(),$userId,$eventId,'$req')");
header("Location: ../index.php?register");





// ============================================================================================================================================
function upload($directory){
    $namaFoto=$_FILES['foto']['name'];
    $tmp_name=$_FILES['foto']['tmp_name'];
    $errorFoto=$_FILES['foto']['error'];
    $ukuranFoto=$_FILES['foto']['size'];
    //cek apakah ada foto yg diupload atau tidak ,kode error = "4" menunjukan data kosong
    if($errorFoto === 4){
        echo"
        <script>alert('pilih gambar terlebih dahulu')</script>
        ";
        return false;
    }

    //memastikan yang diupload adalah gambar
    $sayamauekstensi =['jpg','png','jpeg','jfif'];
    $ekstensiGambar = explode('.',$namaFoto); //ambil var nama foto kalau ketemu titik maka pecah sebagai array 
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    //end artinya mengambil array yang paling akhir.
    //strtolower artinya mengubah semua data menjadi lowercase.
    
    //cek apakah ekstensi gambar yang diupload sesuai dengan yang saya mau.
    // if(!in_array($ekstensiGambar,$sayamauekstensi)){ //fungsi in_array (A,B)berfungsi untuk mencari A di dalam B
    //     echo"
    //     <script>alert('yang anda upload bukan gambar')</script>
    //     ";
    //     return false;
    // }

    //cek ukuran file sesuai dengan yang saya bataskan
    if($ukuranFoto>1000000){
        echo"
        <script>alert('ukuran file terlalu besar')</script>
        ";
        return false;
    }

    //generate nama yang random
    $namabaru =uniqid();
    $namabaru.=".";
    $namabaru.=$ekstensiGambar;
    //upload gambar
    move_uploaded_file($tmp_name,$directory.$namabaru);
    return $namabaru;
}

?>