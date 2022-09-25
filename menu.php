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
    <title>Menu</title>
    <style>
body{
    background-color:rgb(37, 35, 39);
    font-family: "Poppins", sans-serif;
    line-height: 1.2;
    overflow-x: hidden;
}
.header{
    width: 100%;
    background-color:rgb(0, 0, 0);
    position: sticky;
    top: 0;
    color: white;
    padding: 5px;
    display: flex;
}

.header h1{
    font-weight: 400;
    font-size: 28px;
    margin-left: 10px;
}

.header img{
    display: block;
    margin-left: auto;
    border-radius: 50%;
    padding: 10px;
    width: 50px;
    height: 50px;
}

.header p{
    padding: 10px;
    text-align: center;
    margin-right: 10px;
}

.pilihan{
    background-color: rgb(179, 179, 179);
    width: auto;
    margin-left: 20px;
    margin-right: 20px;
    display: flex;
    border-radius: 20px; 
    padding: 10px 15px;
    justify-content: center;
}

.boxPresiden{
    width: 300px;
    background: #9e9e9e;
    height: 200px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);
    text-align: center;
    border: 1px solid black;      
    padding: 10px 15px;     
    border-radius: 20px; 
    word-wrap: break-word;
    margin:20px;
}

.boxDPR{
    width: 300px;
    background: #ffff00;
    height: 200px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);
    text-align: center;
    border: 1px solid black;      
    padding: 10px 15px;     
    border-radius: 20px; 
    word-wrap: break-word;
    margin:10px;
}

.boxDPD{
    width: 300px;
    background: #ff0000;
    height: 200px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);
    text-align: center;
    border: 1px solid black;      
    padding: 10px 15px;     
    border-radius: 20px; 
    word-wrap: break-word;
    margin:10px;
}

.boxDPRDProf{
    width: 300px;
    background: #1e90ff;
    height: 200px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);
    text-align: center;
    border: 1px solid black;      
    padding: 10px 15px;     
    border-radius: 20px; 
    word-wrap: break-word;
    margin:10px;
}

.boxDPRDKab{
    width: 300px;
    background: #00ff00;
    height: 200px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);
    text-align: center;
    border: 1px solid black;      
    padding: 10px 15px;     
    border-radius: 20px; 
    word-wrap: break-word;
    margin:10px;
}

.box{
    width: 300px;
    background: #ffffff;
    height: 200px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);
    text-align: center;
    border: 1px solid black;      
    padding: 10px 15px;     
    border-radius: 20px; 
    word-wrap: break-word;
    margin:10px;
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

.copyright{
    font-size: 12px;
    color: white;
    text-align: center;
    font-weight: 300;
    margin: auto;
}


.kpu{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin: auto;
    padding: 10px;
    border-radius: 20px; 
}

.kpu img{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50px;
    height: 50px;
}

a{
    text-decoration:none ;
    color: white;
}

.boxpresiden a{
    color: black;
}

    </style>
</head>
<body>
    <?php
        $tampildat    =mysqli_query($conn, "SELECT * FROM data_ktp WHERE NIK='$_SESSION[NIK]'");
        $dat    =mysqli_fetch_array($tampildat);
    ?>
    <div class="header">
        <h1 >Selamat datang!</h1>
                <img src="<?=$dat['img']?>" alt="">
                <p><?=$dat['nama']?></p>
    </div>
        <section>
        <div class="pilihan">
            <div class="boxPresiden">
                    <h1>Pemilihan Presiden</h1>
                    <p>Klik tombol untuk masuk ke form</p>
                    <a href="presiden.php">
                        <button>Klik!</button>
                    </a>
            </div>

            <div class="pilihan">
            <div class="box">
                    <h1>Profil Anda</h1>
                    <p>Klik tombol untuk melihat</p>
                    <a href="profile.php">
                        <button>Klik!</button>
                    </a>
            </div>
        </div>
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