<!DOCTYPE html>
<?php
$errors = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Checking to see if name is left blank
    if (empty($_POST['name'])) {
        $errors[] = 'You forgot to enter your a name!!!';
    }
    else
    {
        $n = $_POST['name'];
    }
    
    // Checking to see if email if left blank
    if (empty($_POST['email'])) {
        $errors[] = 'You forgot to enter your a email!!!';
    }
    else
    {
        $e = $_POST['email'];
    }
    
    // Checking to see if message is left blank
    if (empty($_POST['message'])) {
        $errors[] = 'You forgot to enter your a message!!!';
    }
    else
    {
        $m = $_POST['message'];
    }
    
$w = $_POST['website'];
    
    // Sending the email
    mail('ciaran@cicisoft.net', 'Contact Form Submission on cicisoft.net/ciaran.php',
"$n filled out the contact form on cicisoft.net/ciaran.php,
Their information is as follows;

Name: $n
Email: $e
Website: $w

Their message is;

$m", 'From: webmaster@cicisoft.net');

    echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><center>Thank you for filling our our contact form. We'll be in touch ASAP.</center>";
}
else
{
    echo "$errors";
}
?>
<html>
<head>
	<title>Contact Us | Teaching Computer Courses To Young People</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>

<body>

	<div class="head">

		<h2 class="logo"><i class="fa fa-cogs badge"></i> <span class="kid">Kid</span><span class="tech">Tech</span></h2>

		<ul class="social-links">
			<li class="social"><a class="facebook" href="https://www.facebook.com"><i class="fa fa-facebook-square fa-2x" id="elementID"></i> </a></li>
			<li class="social"><a class="twitter" href="https://www.twitter.com"><i class="fa fa-twitter-square fa-2x" id="elementID"></i> </a></li>
			<li class="social"><a class="googleplus" href="https://plus.google.com"><i class="fa fa-google-plus-square fa-2x" id="elementID"></i> </a></li>
		</ul>

	</div>

	<ul class="navbar text-center">
		<li class="navbar"><a class="navbar" href="index.php">Home</a></li>
		<li class="navbar"><a class="navbar" href="enrol.php">Enrol Now</a></li>
		<li class="navbar"><a class="navbar" href="about.php">About</a></li>
		<li class="navbar"><a class="active" href="#">Contact</a></li>
	</ul>

	<div class="wrapper">

		<div class="contact">
			<h3 class="text-center">Please fill out this form if you want to contact us</h3>
        <center><form class="contact" method="post">
            <input type="text" name="name" placeholder="Name"><br/>
            <input type="text" name="email" placeholder="Your E-Mail"><br/>
            <input type="text" name="website" placeholder="Your Website"><br/>
            <textarea name="message" placeholder="Your Message" rows=5 cols=30></textarea><br/>
            <input type="submit" name="submit" value="Submit">
        </form></center><br/>
		</div>

		<div class="footer">

		<br>
			<p class="text-center">Copyright &copy KidTech 2014 - All Rights Reserved - Valid <a href="#">XHTML</a> And <a href="#">CSS</a> - Site Built By Developers at <a href="http://www.cicisoft.net">Cicisoft.net</a></p>

		</div>
	</div>

</body>
</html>