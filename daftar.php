<head>
    <title>Covid-19</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/bootstrap.js"></script>
    <style>
        hr {
            width: 225px;
            height: 5px;
            color: darkgrey;
        }

        img {
            width: 75px;
        }

        div.card {
            margin-top: 175px;
            border-radius: 20px;
            border-color: black;
            background: url('card1.png');
            margin-left: 725px;
        }

        input {
            background: none;
            width: 225px;
            height: 30px;
            color: white;
            border-color: black;
            border-top: 0px;
            border-right: 0px;
            border-left: 0px;
            border-bottom: 20px;
        }

        body {
            background: url('bg.png');
        }

        input.placeholder {
            color: black;

        }

        h3 {
            margin-left: 55px;
        }

        input {
            margin-left: 55px;
        }

        hr {
            margin-left: 55px;
            background-color: lightgray;
            height: 1px;
        }

        button {
            height: 40px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="proses-daftar.php" method="POST">
            <div class="card col-md-5 bg-dark text-white">
                <div class="card-body">
                    <div class="form-group">
                        <center><a><img src="kunci.png" alt=""></a></center>
                        <center>
                            <h1>
                                <font face="Britannic Bold">Register</font>
                            </h1>
                        </center>
                    </div>
                    <br>
                    <div class="form-group">
                        <h3>
                            <font face="Britannic Bold">ID</font>
                        </h3>
                        <input type="text" name="id_anggota" id="id_anggota" placeholder="Masukan ID anggota">
                        <hr size="20px">
                    </div>
                    <br>
                    <div class="form-group">
                        <h3>
                            <font face="Britannic Bold">Username</font>
                        </h3>
                        <input type="text" name="username" id="user" placeholder="Masukan Username">
                        <hr size="20px">
                    </div>
                    <br>
                    <div class="form-group">
                        <h3>
                            <font face="Britannic Bold">Password</font>
                        </h3>
                        <input type="password" name="password" id="pass" placeholder="Masukan Password">
                        <hr size="20px">
                    </div>
                    <br>
                    <div class="form-group">
                        <h3>
                            <font face="Britannic Bold">Nama</font>
                        </h3>
                        <input type="text" name="nama" id="nama" placeholder="Masukan Nama">
                        <hr size="20px">
                    </div>
                    <br>
                    <div class="form-group">
                        <h3>
                            <font face="Britannic Bold">Alamat</font>
                        </h3>
                        <input type="text" name="alamat" id="alamat" placeholder="Masukan Alamat">
                        <hr size="20px">
                    </div>
                    <br>
                    <center>
                        <button type="submit" class="btn btn-info text-white" name="simpan">
                            <font face="Britannic Bold">
                                <h5>Daftar</h5>
                            </font>
                        </button>
                    </center>
                </div>
            </div>
        </form>
    </div>

</body>