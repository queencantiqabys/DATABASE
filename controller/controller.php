<?php
// -------------------------connect database---------------//
$host="localhost";
$username="root";
$pw="";
$db="projectdb";
$conn=mysqli_connect($host,$username,$pw,$db);
// ------------------------------------------------------ //
function error(){
    $pesan="<script> alert('email tidak tersedia')</script>";
    $script="echo '$pesan'";
    return $script;
}
















// ------------------------------------------------------ //
//read
function select($syntax){
    global $conn;
    $rows = [];
    $result = mysqli_query($conn,"$syntax");
    while($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}
function sql($syntax){
    global $conn;
    mysqli_query($conn,$syntax);
    return mysqli_affected_rows($conn);
}
function query($syntax){
    global $conn;
    $result=mysqli_query($conn,$syntax);
    $data=mysqli_fetch_assoc($result);
    return $data;
}
// ---------------------------------------------------------------
function delete($data){
    global $conn;
    $query="DELETE FROM events WHERE (event_id = $data)";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function update($table,$edit,$pk){
    global $conn;
    mysqlli_query($conn,"UPDATE $table SET $edit WHERE $pk");
    return mysqli_affected_rows($conn);
}

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
    $sayamauekstensi =['jpg','JPG','png','PNG','jpeg','JPEG','jfif','JFIF','SVG','svg'];
    $ekstensiGambar = explode('.',$namaFoto); //ambil var nama foto kalau ketemu titik maka pecah sebagai array 
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    // end artinya mengambil array yang paling akhir.
    // strtolower artinya mengubah semua data menjadi lowercase.
    
    //cek apakah ekstensi gambar yang diupload sesuai dengan yang saya mau.
    if(!in_array($ekstensiGambar,$sayamauekstensi)){ //fungsi in_array (A,B)berfungsi untuk mencari A di dalam B
        echo"
        <script>alert('yang anda upload bukan gambar')</script>
        ";
        return false;
    }

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