<?php
function getPolling($id)
{
    global $conn;

    // sql untuk mengambil semua data;
    $sql = "SELECT * FROM jumlah_votepres";
    $query = $conn->query($sql);
    
    // total seluruh voting
    $totalVote = $query->num_rows;
    $query->close();

    // sql untuk mengabil data yang spesifik (sesuai $id) 
    $sqlSpesifik = "SELECT * FROM jumlah_votepres WHERE id_opsi = '$id'";
    $querySpesifik = $conn->query($sqlSpesifik);
    
    // total voting dari $id (satu opsi)
    $voteOpsi = $querySpesifik->num_rows;
    $querySpesifik->close();

    $hitungVote = '';
    if ($totalVote) {
        // round() adalah fungsi pembulatan
        $hitungVote = round( ($voteOpsi/$totalVote) * 100,2 );
    }

    return  empty($hitungVote) ?  '0%' : $hitungVote . '%'; 
}

function ubahktp($data){
    global $conn;

    $idktp = $data['id'];
    $NIK = htmlspecialchars($data['NIK']);
    $nama = htmlspecialchars($data['nama']);
    $TTL = htmlspecialchars($data['TTL']);
    $jns_klmn = htmlspecialchars($data['jns_klmn']);
    $alamat = htmlspecialchars($data['alamat']);
    $kecamatan = htmlspecialchars($data['kecamatan']);
    $kotaorkab = htmlspecialchars($data['kotaorkab']);
    $provinsi = htmlspecialchars($data['provinsi']);
    $agama = htmlspecialchars($data['agama']);
    $sts_kawin = htmlspecialchars($data['sts_kawin']);
    $pekerjaan = htmlspecialchars($data['pekerjaan']);
    $kewarganegaraan = htmlspecialchars($data['kewarganegaraan']);
    $golDar = htmlspecialchars($data['golDar']);

    $query = "UPDATE data_ktp SET
        NIK = '$NIK',
        nama = '$nama',
        TTL = '$TTL',
        jns_klmn = '$jns_klmn',
        alamat = '$alamat',
        kecamatan = '$kecamatan',
        kotaorkab = '$kotaorkab',
        provinsi = '$provinsi',
        agama = '$agama',
        sts_kawin = '$sts_kawin',
        pekerjaan = '$pekerjaan',
        kewarganegaraan = '$kewarganegaraan',
        golDar = '$golDar'
        WHERE id = $idktp
    ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambahktp($datau){
    global $conn;


    $NIK = htmlspecialchars($datau['NIK']);
    $nama = htmlspecialchars($datau['nama']);
    $TTL = htmlspecialchars($datau['TTL']);
    $jns_klmn = htmlspecialchars($datau['jns_klmn']);
    $alamat = htmlspecialchars($datau['alamat']);
    $kecamatan = htmlspecialchars($datau['kecamatan']);
    $kotaorkab = htmlspecialchars($datau['kotaorkab']);
    $provinsi = htmlspecialchars($datau['provinsi']);
    $agama = htmlspecialchars($datau['agama']);
    $sts_kawin = htmlspecialchars($datau['sts_kawin']);
    $pekerjaan = htmlspecialchars($datau['pekerjaan']);
    $kewarganegaraan = htmlspecialchars($datau['kewarganegaraan']);
    $golDar = htmlspecialchars($datau['golDar']);

    $query = "INSERT INTO data_ktp VALUES
        ('', '$NIK', '$nama','$TTL','$jns_klmn','$alamat','$kecamatan','$kotaorkab','$provinsi','$agama','$sts_kawin','$pekerjaan','$kewarganegaraan','$golDar','default_img.jpeg')
    ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapusktp($idhps){
    global $conn;
    $hapus = "DELETE FROM data_ktp WHERE id =$idhps";
    mysqli_query($conn, $hapus);

    return mysqli_affected_rows($conn);
}

function ubahpres($datpres){
    global $conn;

    $idpres = $datpres['id'];
    $namap = htmlspecialchars($datpres['nama_pres']);
    $namaw = htmlspecialchars($datpres['nama_wapres']);
    $partai = htmlspecialchars($datpres['partai']);
    $idopsi = htmlspecialchars($datpres['id_opsi']);

    $qeri = "UPDATE presiden SET
        nama_pres = '$namap',
        nama_wapres = '$namaw',
        partai = '$partai',
        id_opsi = '$idopsi'
        WHERE id = $idpres
    ";

    mysqli_query($conn, $qeri);
    return mysqli_affected_rows($conn);
}

function hapuspres($idhpspres){
    global $conn;
    $hpus = "DELETE FROM presiden WHERE id =$idhpspres";
    mysqli_query($conn, $hpus);

    return mysqli_affected_rows($conn);
}

function tambahpres($datpt){
    global $conn;

    $namap = htmlspecialchars($datpt['nama_pres']);
    $namaw = htmlspecialchars($datpt['nama_wapres']);
    $partai = htmlspecialchars($datpt['partai']);
    $idopsi = htmlspecialchars($datpt['id_opsi']);

    $qri = "INSERT INTO presiden VALUES
        ('', '$idopsi', '$namap','$namaw','$partai','default_img.jpeg')
    ";

    mysqli_query($conn, $qri);
    return mysqli_affected_rows($conn);
}

function query($query){
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

?>