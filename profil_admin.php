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

a button{
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

a button:hover{
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

input[type=text]{
    width: 200px;
  padding: 12px 20px;
  margin-top: 5px;
  margin-bottom: 5px;
  box-sizing:border-box;
}

input[type=password]{
    width: 200px;
  padding: 12px 20px;
  margin-top: 5px;
  margin-bottom: 20px;
  box-sizing:border-box;
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
        $tampildat    =mysqli_query($conn, "SELECT * FROM data_admin WHERE username='$_SESSION[username]'");
        $dat    =mysqli_fetch_array($tampildat);
        $cek = $dat['username'];
    ?>
    <h2>Profil Admin</h2>
    <div class="container">
        <img src="<?=$dat['img']?>" alt="">
            <ul>
                <li>
                    <p>Username : <?=$dat['username']?></p>
                    <p>Password : <?=$dat['pass']?></p>
                    <p>Comment : <?=$dat['komen']?></p>
                </li>
                    <br><br>
            </ul>
        <a href="menu_admin.php">
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