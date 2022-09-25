<?php
    ob_start();
    session_start();
    include"koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,200&display=swap" rel="stylesheet"/>
    <title>Navigasi</title>
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
    font-size: 24px;
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
    flex-wrap: wrap;
    border-radius: 20px; 
    padding: 10px 15px;
    justify-content: center;
}

.box{
    width: 300px;
    background: #ffffff;
    height: 130px;
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
    margin-top: 20px;
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
    text-decoration: none;
    color: white;
}

.box a{
    color: black;
}



    </style>
</head>
<body>
    <?php
        $tampildat    =mysqli_query($conn, "SELECT * FROM data_admin WHERE username='$_SESSION[username]'");
        $dat    =mysqli_fetch_array($tampildat);
    ?>

    <div class="header">
        <h1 >Selamat datang admin!</h1>
        <img src="<?=$dat['img']?>" alt="">
        <a href="profil_admin.php">
            <p><?=$dat['username']?></p>
        </a>
    </div>
        <section>
        <div class="pilihan">
            <div class="box">
                    <h1>Input Data Penduduk</h1>
                    <a href="datapenduduk.php">
                        <button>Masuk</button>
                    </a>
            </div>

            <div class="box">
                <h1>Input Presiden</h1>
            <a href="datapresiden.php">
                <button>Masuk</button>
            </a>
        </div>

    </div>

    <a href="logout_admin.php">
            <button>Logout</button>
      </a>

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