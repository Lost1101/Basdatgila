<?php
ob_start();
session_start();
    include "koneksi.php";
    $NIK        = mysqli_real_escape_string($conn, $_POST['NIK']);
    $op             = $_GET['op'];

    if($op=="in"){
        $sql = mysqli_query($conn, "SELECT * FROM data_ktp WHERE NIK='$NIK'");
        if(mysqli_num_rows($sql)===1){
            $qry = mysqli_fetch_array($sql);
            $_SESSION['NIK']    = $qry['NIK'];
                header("location:menu.php");
        }
        else{
            ?>
            <script language="JavaScript">
                alert('Oops! Login Failed. NIK tidak sesuai ...');
                document.location='./login.php';
            </script>
            <?php
        }
    }
    else if($op=="out"){
        unset($_SESSION['NIK']);
        header("location:./login.php");
    }
?>