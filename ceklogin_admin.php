<?php
ob_start();
session_start();
    include "koneksi.php";
    $username        = mysqli_real_escape_string($conn, $_POST['username']);
    $password       =mysqli_real_escape_string($conn, $_POST['pass']);
    $op             = $_GET['op'];

    if(isset($_POST['Login'])){
        $sql = mysqli_query($conn, "SELECT * FROM data_admin WHERE username='$username' AND pass='$password'");
        if(mysqli_num_rows($sql)===1){
            $qry = mysqli_fetch_array($sql);
            $_SESSION['username']    = $qry['username'];
            $_SESSION['pass'] =     $qry['pass'];
                header("location:menu_admin.php");
        }
        else{
            ?>
            <script language="JavaScript">
                alert('Oops! Login Failed. username dan password tidak sesuai ...');
                document.location='./login_admin.php';
            </script>
            <?php
        }
    }
    else if($op=="out"){
        unset($_SESSION['username']);
        unset($_SESSION['pass']);
        header("location:./login_admin.php");
    }
?>