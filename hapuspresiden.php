<?php

require "koneksi.php";
require "functions.php";

$idhpspres = $_GET['id'];

if(hapuspres($idhpspres) > 0){
    echo "
            <script>
                alert('Data berhasil dihapus!');
                document.location.href = 'datapresiden.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Data gagal dihapus!');
                document.location.href = 'datapresiden.php';
            </script>
        ";
}
?>