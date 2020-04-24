<?php
include 'koneksi.php';

if(isset($_POST['gasken'])){
    $suhu = $_POST['suhu'];
    $interaksi = $_POST['interaksi'];
    $flu = $_POST['flu'];
    $batuk = $_POST['batuk'];
    $potensi = 0;
    if($suhu >= 38){
        $potensi = 25;
    }
    if($interaksi == "pernah"){
        $potensi = ($potensi + 25);
    }
    if($interaksi == "ya"){
        $potensi = ($potensi + 25);
    }
    if($interaksi == "ya"){
        $potensi = ($potensi + 24);
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



    $sql = "INSERT INTO hasil(suhu,potensi,status) VALUES ('$suhu','$potensi','$status')";
    $res = mysqli_query($koneksi,$sql);
    $count = mysqli_affected_rows($koneksi);

    if($count == 1){
        header("Location:hasil.php");
    }else{
        header("Location:index.php");
    }
}

?>