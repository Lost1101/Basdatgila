<?php 
    ob_start();
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
body {
    font-family: "Poppins", sans-serif;
    line-height: 1.6;
    background:rgb(37, 35, 39);
}

.header{
    font-size: 36px;
    font-weight: 600;
    letter-spacing: -1.5px;
    color: rgb(255, 255, 255);
    text-align: center;
    text-transform: capitalize;
    margin-bottom: 10px;
}

h4{
    text-align: center;
    color: white;
    font-size: 15px;
    font-weight: 300;
}

.headerp{
    display: block;
    margin: 20px;
    font-size: 15px;
    text-align: center;
    color: red;
    font-weight: 400;
    line-height: 1px;
}

.container{
    border-radius: 25px;
    border: 0 solid rgb(0, 0, 0);
    display: block;
    width: 300px;
    height: auto;
    background: rgb(255, 255, 255);
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);
    margin: auto;
    padding: 10px;
    justify-content: center;
}

.datainput{
    text-align: center;
    color: black;
    font-weight: 100;
}

input[type=number]{
    width: 200px;
  padding: 12px 20px;
  margin-top: 20px;
  margin-bottom: 20px;
  box-sizing:border-box;
}

button[type=submit]{
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

button[type=submit]:hover {
    background-color: rgb(71, 71, 71);
    border: 1px solid rgb(0, 0, 0);
    color: rgb(0, 0, 0);
    cursor: pointer;
}

h3 label{
    text-align: center;
    margin: 0;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
input[type=number] {
  -moz-appearance: textfield;
}

.bg{
    background-color: rgb(134, 134, 134);
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang!</title>
    <link 
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,200&display=swap" 
    rel="stylesheet"/>
</head>
<body>
    <div class="login">
        <h1 class="header">Selamat Datang Di Aplikasi Pemilihan Umum!</h1>
        <h4>Langsung - Umum - Bebas - Jujur - Adil</h4>
        <div class="bg">
            <div class="container">
                <p class="headerp">Silahkan login terlebih dahulu.</p>
                    <div class="datainput">
                        <form action="ceklogin.php?op=in" method="post" autocomplete="off">
                                    <h3><label for="NIK">NIK </label></h3>
                                    <input type="number" name="NIK"><br>
                                    <button type="submit" name="Login">Login</button>
                        </form>
                    </div>
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