<?php
// -------------------------connect database---------------//
$host="localhost";
$username="root";
$pw="";
$db="finaldb";
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
function delete($table,$pk){
    sql("DELETE FROM $table WHERE $pk");
}
function update($table,$edit,$pk){
    sql("UPDATE $table SET $edit WHERE $pk");
}

?>