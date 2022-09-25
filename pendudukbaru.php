<?php
session_start();
ob_start();
include "koneksi.php";
include "functions.php";


if( isset($_POST['submit']) ){


    if(tambahktp($_POST) > 0 ){
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'datapenduduk.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'datapenduduk.php';
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
    <title>Baru</title>
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

<h1>Tambah Data Penduduk</h1>

        <div class="container">
            <form action="" method="post" enctype="multipart/form-data">
            <div class="datainput">
            <input type="hidden" name="id">

                <div class="form-group">
                    <div>
                    <label for="nik">NIK :</label>
                    </div>
                    <input type="text" name="NIK" id="NIK" 
                    class="form-control" aria-describedby="helpId" required>
                    <br><br>
                </div>

                <div class="form-group">
                    <div>
                    <label for="nama">Nama :</label>
                    </div>
                    <input type="text" name="nama" id="nama"
                    class="form-control"  aria-describedby="helpId" required>
                    <br><br>
                </div>

                <div class="form-group">
                    <div>
                    <label for="ttl">TTL :</label>
                    </div>
                    <input type="text" name="TTL" id="TTL"
                    class="form-control" aria-describedby="helpId" required>
                    <br><br>
                </div>

                <div class="form-group">
                    <div>
                    <label for="jns_klmn">Jenis Kelamin :</label>
                    </div>
                    <input type="text" name="jns_klmn" id="jns_klmn"
                    class="form-control" aria-describedby="helpId" required>
                    <br><br>
                </div>

                <div class="form-group">
                    <div>
                    <label for="alamat">Alamat :</label>
                    </div>
                    <input type="text" name="alamat" id="alamat"
                    class="form-control" aria-describedby="helpId" required>
                    <br><br>
                </div>

                <div class="form-group">
                    <div>
                    <label for="kecamatan">Kecamatan :</label>
                    </div>
                    <input type="text" name="kecamatan" id="kecamatan"
                    class="form-control" aria-describedby="helpId" required>
                    <br><br>
                </div>

                <div class="form-group">
                    <div>
                    <label for="kotaorkab">Kota/Kabupaten :</label>
                    </div>
                    <input type="text" name="kotaorkab" id="kotaorkab"
                    class="form-control" aria-describedby="helpId" required>
                    <br><br>
                </div>

                <div class="form-group">
                    <div>
                    <label for="provinsi">Provinsi :</label>
                    </div>
                    <input type="text" name="provinsi" id="provinsi" 
                    class="form-control" aria-describedby="helpId" required>
                    <br><br>
                </div>

                <div class="form-group">
                    <div>
                    <label for="agama">Agama :</label>
                    </div>
                    <input type="text" name="agama" id="agama"
                    class="form-control" aria-describedby="helpId" required>
                    <br><br>
                </div>

                <div class="form-group">
                    <div>
                    <label for="sts_kawin">Status Kawin :</label>
                    </div>
                    <input type="text" name="sts_kawin" id="sts_kawin"
                    class="form-control" aria-describedby="helpId" required>
                    <br><br>
                </div>

                <div class="form-group">
                    <div>
                    <label for="pekerjaan">Pekerjaan :</label>
                    </div>
                    <input type="text" name="pekerjaan" id="pekerjaan" 
                    class="form-control" aria-describedby="helpId" required>
                    <br><br>
                </div>

                <div class="form-group">
                    <div>
                    <label for="kewarganegaraan">Kewarganegaraan :</label>
                    </div>
                    <input type="text" name="kewarganegaraan" id="kewarganegaraan"
                    class="form-control" aria-describedby="helpId" required>
                    <br><br>
                </div>

                <div class="form-group">
                    <div>
                    <label for="golDar">Golongan Darah :</label>
                    </div>
                    <input type="text" name="golDar" id="golDar"
                    class="form-control" aria-describedby="helpId" required>
                    <br><br>
                </div>

                    <br>
            </div>

                    <button type="submit" name="submit">Tambah</button>
            </form>
        </div>

    <a href="datapenduduk.php">
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