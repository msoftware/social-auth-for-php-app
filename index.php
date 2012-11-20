<?php ob_start(); session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SONHLAB Social Auth PHP Plugin Demo - Login</title>
<meta name="description" content="This is a demo of SONHLAB Social Auth PHP Plugin. This Plugin is free and easy to use" />

<link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8"/>

<link href='http://fonts.googleapis.com/css?family=Droid+Sans|Cuprum' rel='stylesheet' type='text/css'>


</head>

<body>
	
<div id="header">
	<h1><a href="http://docs.sonhlab.com/social-auth-for-php-app/" style="color:#1e1e1e;">SONHLAB Social Auth PHP Plugin</a></h1>
</div>


<?php if ( !isset($_SESSION["userprofile"]) ) { ?>
<div id="login_zone">
	
	<div id="login_zone_title">Use one of accounts below to login</div>
	<div id="login_zone_confirm">
    	<a href="auth/login.php?app=facebook">
           	<img src="images/facebook_login_bt.png" alt="facebook_login_button" />
		</a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="auth/login.php?app=twitter">
			<img src="images/twitter_login_bt.png" alt="twitter_login_button" />
		</a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="auth/login.php?app=google">
			<img src="images/googleplus_login_bt.png" alt="googleplus_login_button" />
		</a><br />&nbsp;
	</div>
	<div class="clearspace"></div>
</div>

<?php } else { unset ($_SESSION['app']); ?>
	
    <a href="auth/logout.php">Logout</a>
    <br /><br />
	<pre>
    	<?php print_r($_SESSION["userprofile"]); ?>
    </pre>
    
    <br /><br />
    <a href="auth/logout.php">Logout</a>
	<!--<a href="<?php echo $_SESSION["logout_url"]; ?>">Logout</a>-->


<?php } ?>

<div id="credits">
	<a href="http://docs.sonhlab.com/social-auth-for-php-app/">SONHLAB Social Auth Documentation</a>
</div>

</body>
</html>


<!-- Google Analytics -->
<script type="text/javascript" src="../../ga.js"></script>


<?php ob_end_flush(); ?>