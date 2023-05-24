<?php
session_start();
include "library/konekDB.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query ($con, "SELECT * FROM user WHERE username='$username' && password='$password' ");
$data = mysqli_fetch_array ($query);
$jml = mysqli_num_rows ($query);

if($jml > 0){

    $_SESSION['username'] = $data['username']; 
    $_SESSION['password'] = $data['password']; 

    header('location: home.php');
}else{
    echo "<p alingn ='center'>login gagal</p>"; 
    echo "<meta http-equiv='refresh' content='2;
    url=login.php'>";
    }
?>
