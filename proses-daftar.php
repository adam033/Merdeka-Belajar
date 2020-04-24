<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $id_anggota=$_POST['id_anggota'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $sql = "INSERT INTO anggota(id_anggota,username,password,nama,alamat) VALUES ('$id_anggota','$username','$password','$nama','$alamat')";
    $res = mysqli_query($koneksi,$sql);
    $count = mysqli_affected_rows($koneksi);
    
    if($count == 1)
    {
        header("Location:login.php");
    }
    else{
        header("Location:daftar.php");
    }
}else{
    header("Location:daftar.php");

}
?>    