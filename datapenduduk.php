<?php
ob_start();
session_start();
    include "koneksi.php";
    include "functions.php";
    
    $jumlahDataPerHalaman = 5;
    $jumlahData = count(query("SELECT * FROM data_ktp"));
    $jumlahHalaman = ceil( $jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
    $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

    $penduduk = query("SELECT * FROM data_ktp LIMIT $awalData, $jumlahDataPerHalaman");

    if(isset($_POST['cari'])){
        $penduduk = cari($_POST['keyword']);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,200&display=swap" rel="stylesheet"/>
    <title>Data Penduduk</title>
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

.nav{
    background-color: rgb(179, 179, 179);
    border-radius: 5%;
    padding: 5px 10px;
    margin: 5px;
}

.navigasi{
    margin-left: 20px;
    margin-top: 10px;
    margin-bottom: 10px;
}

    </style>
</head>
<body>
    <div class="header">
        <h1>Data Penduduk</h1>
    </div>
    <form action="" method="post">
    <input type="text" name="keyword" size="40" placeholder="Masukkan NIK yang dicari" autocomplete="off">
        <button type="submit" name="cari" class="cari">Cari</button>
    </form>
    <br>

    <div class="navigasi">
        <?php if($halamanAktif > 1) : ?>
            <a href="?halaman=<?= $halamanAktif - 1 ?>" class="nav">&laquo;</a>
        <?php endif; ?>

        <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
            <?php if($i == $halamanAktif) : ?>
            <a href="?halaman=<?= $i?>" class="nav" style="font-weight: bold; color:red"><?= $i;?></a>
            <?php else: ?>
            <a href="?halaman=<?= $i?>" class="nav"><?= $i;?></a>
            <?php endif; ?>
        <?php endfor; ?>

        <?php if($halamanAktif < $jumlahHalaman) : ?>
                <a href="?halaman=<?= $halamanAktif + 1 ?>" class="nav">&raquo;</a>
        <?php endif; ?>
    </div>   

    <a href="pendudukbaru.php">
        <button class="plus">+</button>
    </a>

    <div class="bg" style="overflow-x:auto">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>TTL</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Kecamatan</th>
                <th>Kota/Kab</th>
                <th>Provinsi</th>
                <th>Agama</th>
                <th>Sts_Kawin</th>
                <th>Pekerjaan</th>
                <th>Kewarganegaraan</th>
                <th>Golongan Darah</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach($penduduk as $row) : ?>
            <tr>
                <td><?= $row['NIK']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['TTL']; ?></td>
                <td><?= $row['jns_klmn']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['kecamatan']; ?></td>
                <td><?= $row['kotaorkab']; ?></td>
                <td><?= $row['provinsi']; ?></td>
                <td><?= $row['agama']; ?></td>
                <td><?= $row['sts_kawin']; ?></td>
                <td><?= $row['pekerjaan']; ?></td>
                <td><?= $row['kewarganegaraan']; ?></td>
                <td><?= $row['golDar']; ?></td>
                <td><img src="<?= $row['img']; ?>" alt=""></td>
                <td>
                    <div class="tomboltb">
                    <a href="ubahpenduduk.php?id=<?= $row['id']; ?>" class="button1">Ubah</a>
                    <a href="hapuspenduduk.php?id=<?= $row['id']; ?>" class="button1">Hapus</a>
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

        $query = "SELECT * FROM data_ktp WHERE NIK = '$keyword'";
        return mysqli_query($conn, $query);
    }
?>