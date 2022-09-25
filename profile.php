<?php
ob_start();
session_start();
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,200&display=swap" rel="stylesheet"/>
    <title>Profil Anda</title>
    <style>
body{
    background-color:rgb(37, 35, 39);
    font-family: "Poppins", sans-serif;
    line-height: 1.2;
    overflow-x: hidden;
    color: white;
}

li{
    list-style-type: none;
}
img{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 170px;
    height: auto;
}

a{
    text-decoration: none;
}

button{
    background-color: rgb(179, 179, 179);
    border: 1px solid rgb(0, 0, 0);
    padding: 10px 20px;
    color: rgb(0, 0, 0);
    border-radius: 50px;
    font-size: 12px;
    margin: 0 auto;
    display: block;
    transition: 0.2s ease-in-out 0s;
}

button:hover{
    background-color: rgb(71, 71, 71);
    border: 1px solid rgb(0, 0, 0);
    color: rgb(0, 0, 0);
    cursor: pointer;
}

h2{
    text-align: center;
    font-size: 40px;
}

.container{
    background-color: rgb(90, 90, 90);
    padding: 40px;
}

.copyright{
    font-size: 12px;
    color: white;
    text-align: center;
    font-weight: 300;
    margin: auto;
}

.kpu img{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50px;
    height: 50px;
}

.kpu{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin: auto;
    padding: 10px;
    border-radius: 20px; 
}

    </style>
</head>
<body>
    <?php
        $tampildat    =mysqli_query($conn, "SELECT * FROM data_ktp WHERE NIK='$_SESSION[NIK]'");
        $dat    =mysqli_fetch_array($tampildat);
    ?>
    <h2>Profil Anda</h2>
    <div class="container">
        <img src="<?=$dat['img']?>" alt="">
            <ul>
                <li>
                    <p>NIK : <?=$dat['NIK']?></p>
                    <p>Nama : <?=$dat['nama']?></p>
                    <p>Tanggal lahir : <?=$dat['TTL']?></p>
                    <p>Jenis Kelamin : <?=$dat['jns_klmn']?></p>
                    <p>Alamat : <?=$dat['alamat']?>, <?=$dat['kecamatan']?>, <?=$dat['kotaorkab']?>, <?=$dat['provinsi']?></p>
                    <p>Agama : <?=$dat['agama']?></p>
                    <p>Status Kawin : <?=$dat['sts_kawin']?></p>
                    <p>Pekerjaan : <?=$dat['pekerjaan']?></p>
                    <p>Kewarganegaraan : <?=$dat['kewarganegaraan']?></p>
                    <p>Golongan Darah : <?=$dat['golDar']?></p>
                </li>
            </ul>
        <a href="menu.php">
            <button>Kembali</button>
        </a>
    </div>

    <div class="kpu">
        <div class="img">
            <img src="KPU.png" alt="">
        </div>
        <div class="img">
            <img src="kotak.png" alt="">
        </div>
    </div>
    <h3 class="copyright">©Kelompok_7_C all right reserved</h3>
</body>
</html>