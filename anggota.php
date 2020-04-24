<?php
include 'header.php';
include 'koneksi.php';

$sql="SELECT * FROM anggota ORDER BY id_anggota";

$res = mysqli_query($koneksi,$sql);
$milih = array();

while ($data = mysqli_fetch_assoc($res)) {
    $milih[] = $data;
}

?>
<style>
    body {
        background: url('bg1.png');
    }

    h3 {
        color:black;
    }
    div.card-header{
        background-color: black;
        border: none;
    }
    table{
        border: none;
    }
</style>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md">
                <div class="card bg-light">
                    <div class="card-header text-white">
                        <h2 class="card-title text-black">
                            <i class="fas fa-user"></i>
                            <font face="Britannic">Daftar Anggota</font>
                        </h2>
                    </div>
                    <div class="card-body bg-dark">
                        <table class="table table-striped bg-danger text-white ">
                            <thead>
                                <tr>
                                    <th scope="col" bgcolor="#000066">ID</th>
                                    <th scope="col" bgcolor="#000066">Username</th>
                                    <th scope="col" bgcolor="#000066">Password</th>
                                    <th scope="col" bgcolor="#000066">Nama</th>
                                    <th scope="col" bgcolor="#000066">Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    foreach ($milih as $m){

                                    
                                    ?>
                                    <td bgcolor="#9999FF"><?=@$m['id_anggota'];?></td>
                                    <td bgcolor="#6666FF"><?=@$m['username'];?></td>
                                    <td bgcolor="#9999FF"><?=@$m['password'];?></td>
                                    <td bgcolor="#6666FF"><?=@$m['nama'];?></td>
                                    <td bgcolor="#9999FF"><?=@$m['alamat'];?></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>