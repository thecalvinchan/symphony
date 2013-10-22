<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact | Calvin Chan - Graphic Design and Web Development</title>
<link rel="stylesheet" type="text/css" href="styles/reset.css" />
<link rel="stylesheet" type="text/css" href="styles/formalize.css" />
<link rel="stylesheet" type="text/css" href="styles/assets.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<script src="scripts/jquery.formalize.min.js" type="text/javascript"></script>
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
 <script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'clean'
 };
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
		<h2 class="centered">Contact</h2>
		<div id="form">
        <form action="scripts/contact.php" method="post">
        <p>Use the contact form below to send me a message, or just shoot me an email at <a href="mailto:calvin.chan.h@gmail.com">calvin.chan.h@gmail.com</a>.</p>
        <br />
        <p>Your Name</p>
        <p><input type="text" name="name" required placeholder='Ron Weasley'/></p>
        <p>Email</p>
        <p><input type="email" name="email" required placeholder='rdubs@hogwarts.edu'/></p>
        <p>Reason</p>
        <p>
            <select name="reason" required>
            	<option required>-- Select One --</option>
            	<option value="question">I've got a question!</option>
                <option value="job_inquiry">I've got a job for you!</option>
                <option value="networking">Let's network!</option>
            	<option value="hello">Just saying hello!</option>
            </select>
        </p>
        <p>Website (optional)</p>
        <p><input type="url" name="website" placeholder='http://www.hogwarts.edu'/></p>
        <p>Message</p>
        <p><textarea name="message" required placeholder='Help me find Scabbers!'></textarea></p>
        <p><?php
          require_once('scripts/recaptchalib.php');
          $publickey = "6Lffd9ISAAAAAFObUSXnbysOOKrgwtE_J2VFTrJZ"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        ?></p>
        <br />
        <p><input id="submit" type="submit" value="Send Email"/></p>
        </form>
        <p class="lightgrey">The placeholder text is for example purposes only. Please do not send an email as Ron Weasley, or else Molly will come after you for impersonating her son.</p>
        </div>
        
        <div id="socialmedia">
        <p>Follow me on <span class="lightgrey">Twitter</span></p>
        <h5><a href="http://www.twitter.com/upinthecloude">&#64;upinthecloude</a></h5>
        <p>&nbsp;</p>
        <p>Connect with me on <span class="lightgrey">LinkedIn</span></p>
        <h5><a href="http://www.linkedin.com/pub/calvin-chan/2a/350/260">Calvin Chan</a></h5>
        <p>&nbsp;</p>
        <p>Fork me on <span class="lightgrey">GitHub</span></p>
        <h5><a href="http://www.github.com/thecalvinchan">thecalvinchan</a></h5>
        </div>
    </div><!--content-->
    
    <div id="footer">
    	&copy; 2012 Designed and Developed by Calvin Chan.
    </div>

</div><!--wrapper-->

</body>
</html>
