<?php
ob_start();
session_start();
    include "koneksi.php";
    require "functions.php";
    require "vote-count.php";
    $presiden = mysqli_query($conn, "SELECT * FROM presiden");

    $abc = mysqli_query($conn, "SELECT * FROM data_votepres WHERE NIK='$_SESSION[NIK]'");
    if(mysqli_num_rows($abc)==1){
        header("location:after_pollpres.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,200&display=swap" rel="stylesheet"/>
    <title>Pemilihan Presiden</title>
    <style>
body{
    background-color:rgb(37, 35, 39);
    font-family: "Poppins", sans-serif;
    line-height: 1.6;
}

.header{
    background-color: #c0c0c0;
    position: sticky;
    top: 0;
    display: flex;
}

.header h1{
    color: rgb(0, 0, 0);
    margin-left: 10px;
    font-size: 25px;
}

h3{
    text-align: center;
    font-size: 18px;
    color: rgb(255, 255, 255);
    font-weight: 400;
    height: 100%;
    width: 100%;
}
h2{
    display: block;
    text-align: center;
    font-size: 32px;
    color: rgb(0, 0, 0);
    font-weight: 400;
    background-color: #c0c0c0;
}
img{
    display: block;
    margin-left: auto;
    margin-right: auto;
    border-radius: 50%;
    width: 100px;
    height: auto;
}
h4{
    text-align: center;
    font-size: 48px;
    color: rgb(0, 0, 0);
    font-weight: 400;
    font-size: 20px;
}
.pilihan{
    margin: auto;
    width: 50%;
    padding: 10px;
    background-color: white;
    border-radius: 10px;
    margin-bottom: 40px;
}
.box h2{
    background: none;
}
.latarbox{
    display: flex;
    flex-wrap: wrap;
    margin: 20px;
}
.box{
    width: 250px;
    background: white;
    height: 250px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);
    text-align: center;
    border: 2px solid black;      
    padding: 10px 15px;     
    border-radius: 20px; 
    line-height: 1;
    margin:auto;
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
    font-size: 18px;
    font-weight: 300;
    margin: 0 auto;
    margin-bottom: 20px;
    display: block;
    transition: 0.2s ease-in-out 0s;
}
button:hover{
    background-color: rgb(71, 71, 71);
    border: 1px solid rgb(0, 0, 0);
    color: rgb(0, 0, 0);
    cursor: pointer;
}

.help{
    position: fixed;
    right:    3%;
    bottom:   5%;
    background-color: rgb(179, 179, 179);
    border: 1px solid rgb(0, 0, 0);
    padding: 10px 20px;
    color: rgb(0, 0, 0);
    border-radius: 50px;
    font-size: 15px;
    margin: 0 auto;
    display: block;
    transition: 0.2s ease-in-out 0s;
    font-weight: 1000;
}

.help:hover{
    background-color: rgb(71, 71, 71);
    border: 1px solid rgb(0, 0, 0);
    color: rgb(0, 0, 0);
    cursor: pointer;
}

.pilihan p{
    text-align: center;
    font-weight: 300;
    font-size: 25px;
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
    <div class="header">
        <h1>Daerah Pemilihan Presiden dan Wakil Presiden</h1>
    </div>
    <h3>Silahkan pilih salah satu yang ingin anda pilih</h3>
    <div class="bg">
        <?php $i = 1; ?>
        <?php foreach($presiden as $row) : ?>
    <div class="pilihan">
        <h2>No. <?= $row['id_opsi'];?></h2>
        <div class="latarbox">
            <div class="box">
                <img src="<?= $row['img'];?>" alt="">
                <h2>Presiden</h2>
                <h4><?= $row['nama_pres'];?></h4>
            </div>
            <div class="box">
                <img src="<?= $row['img'];?>" alt="">
                <h2>Wakil Presiden</h2>
                <h4><?= $row['nama_wapres'];?></h4>
            </div>
        </div>
        <p>Partai : <?= $row['partai'];?></p>
        <?php
            $tampildat    =mysqli_query($conn, "SELECT * FROM data_ktp WHERE NIK='$_SESSION[NIK]'");
            $dat    =mysqli_fetch_array($tampildat);
            $count = $row['id_opsi'];
            $cek = $_SESSION['NIK'];
        ?>
        <a href="vote-count.php?nomer=<?= $count?>&cek=<?= $cek?>">
                <button>Pilih</button>
        </a>
    </div>
    </div>
        <?php $i++; ?>
        <?php endforeach; ?>     
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