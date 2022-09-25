<?php

require "koneksi.php";
require "functions.php";

$idhps = $_GET['id'];

if(hapusktp($idhps) > 0){
    echo "
            <script>
                alert('Data berhasil dihapus!');
                document.location.href = 'datapenduduk.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Data gagal dihapus!');
                document.location.href = 'datapenduduk.php';
            </script>
        ";
}
?>