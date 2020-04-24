<head>
    <title>Covid-19</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="http://localhost/merdeka/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/merdeka/fontawesome/css/all.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/bootstrap.js"></script>
    <style>
        hr {
            width: 225px;
            height: 5px;
            color: darkgrey;
        }

        div.card {
            margin-top: 325px;
            border-radius: 20px;
            margin-left: 725px;
            background: url('card.png');
            width: 300px;
        }

        input {

            width: 225px;
            height: 30px;
            color: black;
            border-color: black;
            border-top: 0px;
            border-right: 0px;
            border-left: 0px;
            border-bottom: 20px darkblue;
        }

        body {
            background: url('bg.png');
        }

        input.placeholder {
            color: white;

        }


        input {
            margin-left: 30px;
            color: white;
            background:none;
        }

        hr {
           margin-left: 20px;
           background-color: lightgray;
           height: 1px;
        }

        button {
            height: 40px;
        }
        i{
            margin-left: 10px;
        }
        h3{
            margin-left: 30px;
        }
        img{
            width: 500px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="proses-login.php" method="POST">
            <div class="card col-md-4 text-white">
                <div class="card-body">
                    
                    <div class="form-group">
                        <center>
                        </center>
                    </div>
                    <br>
                    <div class="form-group">

                        <h4>
                        <font face="Britannic Bold"><i class="fas fa-user"> Username</i></font>
                        </h4>
                        <input type="text" name="username" id="username" placeholder="Masukan Username">
                        <hr>
                    </div>
                    <br>
                    <div class="form-group">
                        <h4>
                            <font face="Britannic Bold"><i class="fas fa-edit"> Password</i></font>
                        </h4>
                        <input type="password" name="password" id="password" placeholder="Masukan Password">
                        <hr>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <center>
                        <button type="submit" class="btn btn-info text-white" name="login">
                            <font face="Britannic Bold">
                                <h5>Login</h5>
                            </font>
                        </button>
                        <button type="submit" class="btn btn-light text-black" name="daftar">
                            <font face="Britannic Bold">
                                <h5>Daftar</h5>
                            </font>
                        </button>
                        <br>
                        <br>
                    </center>
                </div>
                </center>
            </div>
        </form>
    </div>

</body>