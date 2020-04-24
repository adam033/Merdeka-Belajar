<?php
include 'header.php';

?>
<style>
    body{
        background: url('bg1.png');
    }
    p{
        size: 20;
    }
    div.card{
        margin-left: 225px;
    }
    h3{
        color: black;
    }
</style>
<div class="container">
    <div class="card col-sm-7">
        <div class="card-header bg-dark text-white">
           <center><font face="Britannic"><h1>About Me</h1></font></center> 
        </div>
        <div class="card-body bg-light text-black">
            <center><img src="me.jpg" alt=""></center>
            <br>
            <br>
            <h5><p>Perkenalkan Nama Saya <b>Ruqul Adam Himawan</b> , Saya berasal dari <b>Kota Blitar</b> , Saat ini saya sedang menempuh pendidikan di <b>SMK Telkom Sandy Putra Malang</b>, 
        cita cita saya ingin menjadi Gamer Profesional disini saya akan memberikan sebuah karya kecil saya berupa <b>web rapid test</b> secara online agar kita semua bisa
        menjadi terhindar dari virus corona , <b> STAY SAFE AND ENJOY!</b></h5>        
        </p>
        <br>
        <br>
        </form>
        </div>
        <div class="card-footer bg-dark text-black">
        <form action="proses-login.php" method="POST">
        <center>
        <button class="btn btn-info text-white" name="ig"><font face="Britannic"><h5>Instagram</h5></button>
        </center>
        </form>
        </div>
    </div> 
</div>