<?php
include 'koneksi.php';

if(isset($_POST['oke'])){
    $suhu = $_POST['suhu'];
    $interaksi = $_POST['interaksi'];
    $flu = $_POST['flu'];
    $batuk = $_POST['batuk'];
    $potensi = 0;
    if($suhu >= 38){
        $potensi = 25;
    }else if($suhu < 38){
        $potensi + 0;
    }
    if($interaksi == "pernah"){
        $potensi =+ 25;
    }else if($interaksi == "tidak"){
        $potensi + 0;
    }
    if($flu == "ya"){
        $potensi =+ 25;
    }else if($flu == "tidak"){
        $potensi + 0;
    }
    if($batuk == "ya"){
        $potensi =+ 25;
    }else if($batuk == "tidak"){
        $potensi + 0;
    }
    $status;
    if($potensi == 0){
        $status = "Negatif";
    }
    else if($potensi <= 50){
        $status = "ODP";
    }
    else if($potensi <= 50 || $potensi < 76){
        $status = "PDP";
    }
    else if($potensi <= 75 || $potensi < 100){
        $status = "Positif";
    }



    $sql = "DELETE FROM hasil";
    $res = mysqli_query($koneksi,$sql);
    $count = mysqli_affected_rows($koneksi);

    if($count == 1){
        header("Location:login.php");
    }else{
        header("Location:hasil.php");
    }
}
?>