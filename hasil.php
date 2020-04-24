<?php
include 'header.php';
include 'koneksi.php';
$pilih = mysqli_query($koneksi,"SELECT potensi,status FROM hasil");
$hasil = mysqli_fetch_assoc($pilih);
?>
<style>
    body {
        background: url('bg.png');
    }
    h3 {
        color: black;
    }

    div.card {
        border-radius: 20px;
        margin-left: 700px;
        background: url('bg1.png');
        border: none;
    }

    input {
        background: none;
        width: 225px;
        height: 30px;
        color: black;
        border-color: black;
        border-top: 0px;
        border-right: 0px;
        border-left: 0px;
        border-bottom: 20px;
    }
    h2{
        color: turquoise;
    }
    hr{
        width: 200px;
    }
    h1{
        color: black;
    }
</style>

<body>
    <div class="container">
        <form action="proses-hapus.php" method="POST">
            <div class="card col-sm-8 bg-dark text-white">
                <div class="card-body">
                    <div class="form-group">
                        <center>
                            <img src="suhu.png" alt="" class="img1" sizes="50px;">
                            <h1>
                                <font face="Britannic Bold">Stay Safe</font>
                            </h1>
                            <br>
                            <br>
                            <font face="Britannic"><h1>Potensi</h1></font>
                            <input type="text" readonly><h2><font face="Britannic"><?php echo @$hasil['potensi'];?></font></h2>
                            <hr>
                            <br>                          
                             <font face="Britannic"><h1>Status</h1></font>
                            <input type="text" readonly><h2><font face="Britannic"><?php echo @$hasil['status'];?></font></h2>
                            <hr>
                        </center>
                    </div>
                    <center>
                        <button type="submit" class="btn btn-info text-white" name="oke">
                            <font face="Britannic Bold">
                                <h5>OK</h5>
                            </font>
                        </button>
                    </center>
                </div>
            </div>
        </form>
    </div>
</body>