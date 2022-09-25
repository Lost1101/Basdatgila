<?php
ob_start();
session_start();
    include "koneksi.php";
    $presiden = mysqli_query($conn, "SELECT * FROM presiden");

    if(isset($_POST['cari'])){
        $presiden = cari($_POST['keyword']);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,200&display=swap" rel="stylesheet"/>
    <title>Data Presiden</title>
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

img{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 100px;
    height: auto;
}

a{
    text-decoration: none;
    color: black;
}


table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

input[type=text]{
    width: 200px;
  padding: 12px 20px;
  margin-top: 20px;
  margin-bottom: 5px;
  box-sizing:border-box;
}

.cari{
    background-color: rgb(179, 179, 179);
    border: 1px solid rgb(0, 0, 0);
    padding: 10px 20px;
    color: rgb(0, 0, 0);
    border-radius: 50px;
    font-size: 12px;
    transition: 0.2s ease-in-out 0s;
}

.cari:hover{
    background-color: rgb(71, 71, 71);
    border: 1px solid rgb(0, 0, 0);
    color: rgb(0, 0, 0);
    cursor: pointer;
}

.back{
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

.back:hover{
    background-color: rgb(71, 71, 71);
    border: 1px solid rgb(0, 0, 0);
    color: rgb(0, 0, 0);
    cursor: pointer;
}

.bg{
    border: 1px solid rgb(0, 0, 0);
    background-color: white;
}

table{
    border: 1px solid rgb(0, 0, 0);
}

.button1{
    background-color: rgb(179, 179, 179);
    border: 1px solid rgb(0, 0, 0);
    padding: 10px 20px;
    color: rgb(0, 0, 0);
    border-radius: 50px;
    font-size: 12px;
    margin: 10px;
    display: block;
    transition: 0.2s ease-in-out 0s;
}

.button1:hover{
    background-color: rgb(71, 71, 71);
    border: 1px solid rgb(0, 0, 0);
    color: rgb(0, 0, 0);
    cursor: pointer;
}

td{
    text-align: center;
}

.tomboltb{
    display: flex;
    margin: 10px;
    padding: 5px;
}

.plus{
    position: fixed;
    right:    3%;
    bottom:   5%;
    background-color: rgb(179, 179, 179);
    border: 1px solid rgb(0, 0, 0);
    padding: 10px 20px;
    color: rgb(0, 0, 0);
    border-radius: 50px;
    font-size: 25px;
    margin: 0 auto;
    display: block;
    transition: 0.2s ease-in-out 0s;
    font-weight: 1000;
}

.plus:hover{
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
    <div class="header">
        <h1>Data Presiden</h1>
    </div>
    
    <form action="" method="post">
    <input type="text" name="keyword" size="40" placeholder="Masukkan Capres yang dicari" autocomplete="off">
        <button type="submit" name="cari" class="cari">Cari</button>
    </form>
    <br>

    <a href="presidenbaru.php">
        <button class="plus">+</button>
    </a>

    <div class="bg" style="overflow-x:auto">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Nama Capres</th>
                <th>Nama Cawapres</th>
                <th>Partai</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach($presiden as $row) : ?>
            <tr>
                <td><?= $row['id_opsi']; ?></td>
                <td><?= $row['nama_pres']; ?></td>
                <td><?= $row['nama_wapres']; ?></td>
                <td><?= $row['partai']; ?></td>
                <td><img src="<?= $row['img']; ?>" alt=""></td>
                <td>
                    <div class="tomboltb">
                    <a href="ubahpresiden.php?id=<?= $row['id']; ?>" class="button1">Ubah</a>
                    <a href="hapuspresiden.php?id=<?= $row['id']; ?>" class="button1">Hapus</a>
                    </div>
                </td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
        </table>
    </div>
    <a href="menu_admin.php">
        <button class="back">Kembali</button>
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

<?php 
    function cari($keyword){

        global $conn;

        $query = "SELECT * FROM presiden WHERE nama_pres = '$keyword'";
        return mysqli_query($conn, $query);
    }
?>