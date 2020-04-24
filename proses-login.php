<?php
include 'koneksi.php';
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT username,password FROM anggota WHERE username = $username AND password = $password";
    $pilih = mysqli_query($koneksi,$sql);
    $login = mysqli_affected_rows($pilih);
    
        if($username == $username && $password == $password){
            header("Location:index.php");
        }else if($username != $username && $password != $password ){
            header("Location:login.php");
        }else if($username == ""){
            header("Location:login.php");
        }else if($password == ""){
            header("Location:login.php");
        }else if($username == "" && $password == ""){
            header("Location:login.php");
}
}
if(isset($_POST['daftar'])){
    header("Location:daftar.php");
}
if(isset($_POST['ig'])){
    header("Location:https://instagram.com/admhmwan");
}
?>

