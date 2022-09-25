<?php
  ob_start();
  session_start();
  
    require "koneksi.php";
    require "functions.php";
    require "vote-count.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,200&display=swap" rel="stylesheet"/>
    <title>Terima Kasih!</title>
    <script src="Chart.js"></script>
    <style>
body{
    background-color:rgb(37, 35, 39);
    font-family: "Poppins", sans-serif;
    line-height: 1.6;
    color: white;
}

h1{
  text-align: center;
  font-size: 28px;
  font-weight: 300;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

.chart {
  table-layout: fixed;
  border-collapse: collapse;
  background: #f9f9f9;
  display: flex;
  flex-wrap: wrap;
  margin: auto;
  border-radius: 10px;
  margin: auto;
  width: 43%;
}

.chart caption {
  padding: 20px 0;
  font-weight: bold;
  font-size: 150%;
  text-align: center;
}

.chart td {
  vertical-align: bottom;
  text-align: center;
  height: 100%;
}

.chart tbody td {
  padding: 30px 5px;
}

.chart td span {
  display: block;
  background: firebrick;
  position: relative;
  transition: 0.2s ease-in-out 0s;
}

.chart td span:hover {
  display: block;
  background:tomato;
  position: relative;
}

.chart td span b {
  display: block;
  color: #000;
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  text-align: center;
}

.chart tbody {
  background-image: linear-gradient(rgba(0, 0, 0, 0.1) 2px, transparent 1px);
  background-size: 98% 4.5vh;
}

.chart thead th,
.chart tfoot th {
  padding: 10px 5px 20px;
}
.chart tbody td {
  height: 45vh;
}

@media screen and (max-width: 601px) {
  table.mobile-optimised {
    word-wrap: break-word;
    border-spacing: 0;
    height: auto;
  }
  table.mobile-optimised thead,
  table.mobile-optimised tfoot {
    display: none;
  }
  table.mobile-optimised td {
    display: block;
    float: left;
    width: 100%;
    clear: both;
    background: #f5f5f5;
    padding: 10px 5px;
    padding: 2px;
  }
  table.mobile-optimised tbody,
  table.mobile-optimised tr {
    display: block;
  }
  .mobile-optimised td:before {
    content: attr(data-th);
    display: block;
    font-weight: bold;
    margin: 0 0 2px;
    color: #000;
  }
  table.mobile-optimised.chart td {
    text-align: left;
    white-space: nowrap;
    height: auto;
  }
  table.mobile-optimised.chart span {
    text-align: right;
    height: 25px !important;
    line-height: 25px;
    padding: 0 5px 0 0;
    position: relative;
    white-space: nowrap;
  }
  .chart td span b{display:inline;position:static;}
  .chart tbody {
    background: none;
  }
}

.chart span {
  opacity: 1;
  animation: barchart 2s ease reverse;
}
@keyframes barchart {
  to {
    height: 0%;
    opacity: 0;
  }
}

.hasil{
    margin: 10px auto;
    width: 40%;
    padding: 5px auto;
    background-color: white;
    border-radius: 10px;
    margin: 20px auto;
    display: flex;
    justify-content: center;
}

.tekspersen{
  color: #000;
  text-align: center;
  margin:auto;
  margin-top: 20px;
  font-size: 30px;
  font-weight: 400;
}

button{
    background-color: rgb(179, 179, 179);
    border: 1px solid rgb(0, 0, 0);
    padding: 10px 20px;
    color: rgb(0, 0, 0);
    border-radius: 50px;
    font-size: 18px;
    font-weight: 300;
    margin: 0 auto;
    margin-bottom: 20px;
    display: block;
    transition: 0.2s ease-in-out 0s;
}

button:hover{
    background-color: rgb(71, 71, 71);
    border: 1px solid rgb(0, 0, 0);
    color: rgb(0, 0, 0);
    cursor: pointer;
}

a{
  text-decoration: none;
}

.copyright{
    font-size: 12px;
    color: white;
    text-align: center;
    font-weight: 300;
    margin: auto;
}


.kpu{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin: auto;
    padding: 10px;
    border-radius: 20px; 
}

.kpu img{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50px;
    height: 50px;
}

    </style>
</head>
<body>
    <h1>Anda sudah mengisi form, terima kasih, berikut hasil sekarang</h1>
    <table class="chart mobile-optimised">
        <?php
        $sql = "SELECT * FROM presiden";
        $query = $conn->query($sql);
        while ( $row = $query->fetch_assoc() ) : ?>
          <thead>
            <tr>
              <th scope="col">Jan</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th scope="col">Jan</th>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <td width="150px" data-th="jan" class="jan"><span style="height:<?php echo getPolling($row['id_opsi'])?>"><b><?php echo getPolling($row['id_opsi']);?></b></span></td>
            </tr>
          </tbody>
        <?php endwhile; ?>
    </table>

      <div class="hasil">
        <?php
        $sql = "SELECT * FROM presiden";
        $query = $conn->query($sql);
        while ( $row = $query->fetch_assoc() ) : 
        ?>
          <div class="tekspersen">
            <div class="persentase"><?php echo getPolling( $row['id_opsi'] );?></div>
            <p>Nomor : <?php echo $row['id_opsi'];?></p>
          </div>
        <?php endwhile; ?>
      </div>

      <a href="logout.php">
            <button>Logout</button>
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
