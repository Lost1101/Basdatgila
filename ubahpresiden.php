<?php
session_start();
ob_start();
include "koneksi.php";
include "functions.php";

$ID = $_GET['id'];

$presiden = query("SELECT * FROM presiden WHERE id = $ID")[0];


if( isset($_POST['submit']) ){


    if(ubahpres($_POST) > 0 ){
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'datapresiden.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href = 'datapresiden.php';
            </script>
        ";
    }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah</title>
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,200&display=swap" 
    rel="stylesheet"/>
    <style>
body{
    background-color:rgb(37, 35, 39);
    font-family: "Poppins", sans-serif;
    line-height: 1.6;
}

a{
    text-decoration: none;
    color: black;
}

input[type=text]{
    width: 200px;
  padding: 12px 20px;
  margin-top: 20px;
  margin-bottom: 5px;
  box-sizing:border-box;
}

h1{
    color: white;
    text-align: center;
    margin-left: 10px;
    font-size: 25px;
}

label{
    text-align: center;
    margin: 0;
    font-weight: 400;
}

.datainput{
    text-align: center;
    color: black;
    font-weight: 100;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.container{
    border-radius: 25px;
    border: 0 solid rgb(0, 0, 0);
    display: flex;
    flex-wrap: wrap;
    width: auto;
    height: auto;
    background: rgb(255, 255, 255);
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);
    margin: auto;
    padding: 20px;
    justify-content: center;
}

.form-group{
    margin: 10px;
    width: 300px;
    height: auto;
    display: block;
}

button[type=submit]{
    background-color: rgb(179, 179, 179);
    border: 1px solid rgb(0, 0, 0);
    padding: 10px 20px;
    color: rgb(0, 0, 0);
    border-radius: 50px;
    font-size: 12px;
    font-weight: 300;
    margin: 0 auto;
    margin-top: 20px;
    margin-bottom: 20px;
    display: block;
    transition: 0.2s ease-in-out 0s;
}
button[type=submit]:hover{
    background-color: rgb(71, 71, 71);
    border: 1px solid rgb(0, 0, 0);
    color: rgb(0, 0, 0);
    cursor: pointer;
}

.button1{
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

.button1:hover{
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

<h1>Ubah Data Presiden</h1>

        <div class="container">
            <form action="" method="post" enctype="multipart/form-data">
            <div class="datainput">
            <input type="hidden" name="id" value="<?= $presiden['id']; ?>">

                <div class="form-group">
                    <div>
                    <label for="id_opsi">Nomor :</label>
                    </div>
                    <input type="text" name="id_opsi" id="id_opsi" required value="<?= $presiden['id_opsi']; ?>" 
                    class="form-control" aria-describedby="helpId">
                    <br><br>
                </div>

                <div class="form-group">
                    <div>
                    <label for="nama_pres">Nama Capres :</label>
                    </div>
                    <input type="text" name="nama_pres" id="nama_pres" required value="<?= $presiden['nama_pres']; ?>" 
                    class="form-control"  aria-describedby="helpId">
                    <br><br>
                </div>

                <div class="form-group">
                    <div>
                    <label for="nama_wapres">Nama Cawapres :</label>
                    </div>
                    <input type="text" name="nama_wapres" id="nama_wapres" required value="<?= $presiden['nama_wapres']; ?>" 
                    class="form-control" aria-describedby="helpId">
                    <br><br>
                </div>

                <div class="form-group">
                    <div>
                    <label for="partai">Partai :</label>
                    </div>
                    <input type="text" name="partai" id="partai" required value="<?= $presiden['partai']; ?>" 
                    class="form-control" aria-describedby="helpId">
                    <br><br>
                </div>

                    <br>
            </div>

                    <button type="submit" name="submit">Ubah</button>
            </form>
        </div>

    <a href="datapresiden.php">
        <button class="button1">Kembali</button> 
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