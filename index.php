<?php
include 'koneksi.php';
include 'header.php';
?>
<style>
    body {
        background: url('bg.png');
    }
    hr{
        background-color: darkblue;
    }


    h3{
        color: black;
    }

    div.card {
        border-radius: 20px;
        margin-top: 0px;
        margin-left: 625px;
        background: url('bg1.png');
        border: none;
    }
    h1{
        color: black;
    }
    h4{
        color: black;
    }

    input {
        background: none;
        width: 225px;
        height: 30px;
        color: black;
        border-color: black;
        border-top : 0px;
        border-left: 0px;
        border-right: 0px;
        border-bottom: 5px;

     
    }
    img{
        margin-left: 60px;
    }
    h2{
        margin-left: 80px;
    }
</style>

<body>
    <div class="container">
        <form action="proses-rapid.php" method="POST">
            <div class="card col-sm-6 bg-dark text-white">
                <div class="card-body">
                    <div class="form-group">
                        <center>
                            <h1>
                                <img src="masker.png" alt="">
                                <br>
                                <font face="Britannic Bold">Rapid Test</font>
                            </h1>
                            
                            <br>
                            <br>
                        </center>
                    </div>
                    <br>
                    <div class="form-group">
                        <h4>
                            <font face="Britannic Bold">Berapa Suhu Tubuh Anda?</font>
                        </h4>
                        <input type="text" name="suhu" id="suhu" placeholder="Jawaban">
                        <hr size="20px">
                    </div>
                    <br>
                    <div class="form-group">
                        <h4>
                            <font face="Britannic Bold">Pernah Berinteraksi Dengan Pendatang ?</font>
                        </h4>
                        <input type="text" name="interaksi" id="interaksi" placeholder="Jawaban">
                        <hr size="20px">
                    </div>
                    <br>
                    <div class="form-group">
                        <h4>
                            <font face="Britannic Bold">Apakah Anda Merasakan Flu?</font>
                        </h4>
                        <input type="text" name="flu" id="flu" placeholder="Jawaban">
                        <hr size="20px">
                    </div>
                    <br>
                    <div class="form-group">
                        <h4>
                            <font face="Britannic Bold">Apakah Anda Merasakan Batuk Kering ?</font>
                        </h4>
                        <input type="text" name="batuk" id="batuk" placeholder="Jawaban">
                        <hr size="20px">
                    </div>
                    <br>
                    <center>
                        <button type="submit" class="btn btn-info text-white" name="gasken">
                            <font face="Britannic Bold">
                                <h5>Submit</h5>
                            </font>
                        </button>
                    </center>
                </div>
            </div>
        </form>
        <br>
        <br>
        <br>
</body>