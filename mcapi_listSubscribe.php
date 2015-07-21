<?php

require_once 'MCAPI.class.php';
//require_once 'config.inc.php'; //contains apikey



$api = new MCAPI($_POST['lpp_key']);

$merge_vars = array('FNAME'=>$_POST['lpp_fname'],'LNAME'=>$_POST['lpp_lname']);



// By default this sends a confirmation email - you will not see new members
// until the link contained in it is clicked!
$retval = $api->listSubscribe( $_POST['lpp_ed'],$_POST['lpp_email'], $merge_vars );

if ($api->errorCode){
	echo "\tCode=".$api->errorCode."\n";
	echo "\tMsg=".$api->errorMessage."\n";
} else {
    include 'subscribe_msg.php';
}

 

?>
