<?php session_start();
/*==========================================*\
|| ##########################################||
|| # SONHLAB.com - SONHlab Social Auth v1 #
|| ##########################################||
\*==========================================*/
$index = '../index.php';
if ( isset($_SESSION["userprofile"]) ) {
	header("Location: $index");
}
else {
	
	(!empty($_SESSION["app"]))?$app = $_SESSION["app"]:$app = $_GET['app'];
	
	if ( !empty($app) ) {
		if ( $app == 'facebook' ) { // Facebook Auth
			$_SESSION["app"] = 'facebook';
			require_once('facebook.php');
		}
		elseif ( ($app == 'twitter') ) { // Twitter Auth
			$_SESSION["app"] = 'twitter';
			require_once('twitter.php');
		}
		elseif ( $app == 'google' ) {  // Google Auth
			$_SESSION["app"] = 'google';
			require_once('google.php');
		}
		else {
			header("Location: $index");
		}
	}
	else {
		header("Location: $index");
	}
}