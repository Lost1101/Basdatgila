<?php
include 'koneksi.php';

if (isset($_GET['cek'])){
    $ID = $_GET['cek'];
    $abc = "INSERT INTO data_votepres (date_create, NIK) VALUES (NOW(), '$ID')";
    $conn->query($abc);
}

if (isset($_GET['nomer']) && ! empty($_GET['nomer'])) {


    $nomerVote = $_GET['nomer'];
    // sql untuk menambahkan vote kedatabase
    $sql = "INSERT INTO jumlah_votepres (id_opsi, date_create) VALUES ('$nomerVote', NOW())";

    $insert = $conn->query($sql);
    if ($insert) {
        header("location:after_pollpres.php");
        exit();
    } else {
        die('Oops!! Internal Error');
    }
}

?>