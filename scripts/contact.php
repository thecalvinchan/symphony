<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width">
<meta http-equiv="REFRESH" content="5;url=http://www.thecalvinchan.com/contact.php">
<title>Contact Confirmation | Calvin Chan - Graphic Design and Web Development</title>
<link rel="stylesheet" type="text/css" href="../styles/reset.css" />
<link rel="stylesheet" type="text/css" href="../styles/assets.css" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35007967-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>

<div id="wrapper">

    <div id="header">
    	<div id="title">
        <h1>Calvin Chan</h1>
        <h2>graphic design & web development</h2>
        </div>
        <div id="slogan">
        <h2>Simplicity is Elegance.</h2>
        </div>
     
    </div><!--header-->

    <div id="nav">
    	<ul>
        	<li><a href="index.html">Home</a></li>
            <li><a href="profile.html">Profile</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="blog">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
		<hr />
    </div>
    
    <div id="content">
    	<div class="body">
<?php 

$to = "calvin.chan.h@gmail.com";
$name = $_POST['name'];
$from = $_POST['email'];
$website = $_POST['website'];
$reason = $_POST['reason'];
$subject = "Contact from thecalvinchan: " . $reason;
$message = $_POST['message'];
$emailcontent = "	From: $name \n
					Subject: $reason \n
					Website: $website \n
					Message: \n
					$message \n ";
$headers = 'From: ' . strip_tags($_POST['name']) . "\r\n";
$headers .= 'Reply-To: '. strip_tags($_POST['email']) . "\r\n";

require_once('recaptchalib.php');
$privatekey = "6Lffd9ISAAAAAH-6MY4GnMVCMbdQdkvjBTb0Nbu4";
$resp = recaptcha_check_answer ($privatekey,
                            $_SERVER["REMOTE_ADDR"],
                            $_POST["recaptcha_challenge_field"],
                            $_POST["recaptcha_response_field"]);

if (!$resp->is_valid) {
// What happens when the CAPTCHA was entered incorrectly
die ("<h2 class='centered'>Sorry!</h2><p class='centered'>The reCAPTCHA wasn't entered correctly. Please, go back and try it again.</p>" .
     "(reCAPTCHA said: " . $resp->error . ")");
} else {
echo '<h2 class="centered">Thanks,' . $name . '!</h2><p class="centered">Your email has been successfully sent. You will be redirected shortly.</p>';
mail($to, $subject, $emailcontent, $headers);

}
?>

<p class="centered">If you see this message for more than 5 seconds, please click <a href="http://www.thecalvinchan.com/contact.php">here</a></p>

        </div><!--body-->
    </div><!--content-->
    
    <div id="footer">
    	&copy; 2012 Designed and Developed by Calvin Chan.
    </div>

</div><!--wrapper-->

</body>
</html>


