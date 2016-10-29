<?php
// NOTE: this page must be saved as a .php file.
// And your server must support PHP 5.3+ PHP Mail().
// Define variables and set to empty values
$result = $name = $email = $phone = $message = $human = "";
$errName = $errEmail = $errPhone = $errMessage = $errHuman = "";
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
         //valid address on your web server
        $from = 'info@pydega.com';
        //your email address where you wish to receive mail
        $to = 'max.savin3@gmail.com'; 
        $subject = 'MESSAGE FROM MY WEB SITE';
        $headers = "From:$from\r\nReply-to:$email";
        $body = "From: $name\n E-Mail: $email\n Phone: $phone\n Message: $message";
// Check if name is entered
if (empty($_POST["name"])) {
$errName = "Proszę podać swoje imię i nazwisko.";
} else {
    $name = test_input($_POST["name"]);
}
// Check if email is entered
if (empty($_POST["email"])) {
$errEmail = "Podaj swój adres e-mail.";
} else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is valid format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errEmail = "Niewłaściwy format wiadomości email.";
    }
}
// Check if phone is entered although it is not required so we don't need error message
if (empty($_POST["phone"])) {
$phone = "Proszę wprowadzić numer";
} else {
    $phone = test_input($_POST["phone"]);
}
//Check if message is entered
if (empty($_POST["message"])) {
$errMessage = "Proszę wprowadzić swoją wiadomość.";
} else {
    $message = test_input($_POST["message"]);
}
//Check if simple anti-bot test is entered
if (empty($_POST["human"])) {
$errHuman = "Proszę podać sumę.";
} else {
     if ($human !== 24) {
     $errHuman = 'Zła odpowiedź. Proszę spróbuj ponownie.';
        }
}
// If there are no errors, send the email & output results to the form
if (!$errName && !$errEmail && !$errPhone &&  !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success"><h2><span class="glyphicon glyphicon-ok"></span> Wiadomość wysłana!</h2></div>';
    } else {
        $result='<div class="alert alert-danger"><h2><span class="glyphicon glyphicon-warning-sign"></span> Niestety wystąpił błąd przetwarzania formularzy.</h2> <h3>Spróbuj ponownie później</h3></div>';
       }
    }
}
//sanitize data inputs   
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   $data = (filter_var($data, FILTER_SANITIZE_STRING));
   return $data;
}
//end form processing script
?>





<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Maksym Savin></title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="Maksym Savin" content="Presentation website">
			 <!-- css -->
			<link rel="stylesheet" type="text/css" href="contacts.css">
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<style>
			.required {color:red; font-weight:bold}
			.center-block {float:none}
			.human {margin: 0 0 0 12px}
			</style>
			
			<!--[if lt IE 9]>
			<script type="text/javascript">alert("Your browser does not support the canvas tag.");</script>
			<![endif]-->
			<script src="processing.js" type="text/javascript"></script>
			<script type="text/javascript">
			// convenience function to get the id attribute of generated sketch html element
			function getProcessingSketchId () { return 'w304edited'; }
			</script>
			
	</head>

	<body>
				
		<header>
			<div id="content">
				<canvas id="w304edited" data-processing-sources="w3_04_edited.pde">	</canvas>
			</div>
			<a name="top"></a> 
			<ul class="topnav" id="myTopnav">
			
			  <li><a href="indexPl.html">Resume</a></li>
			  <li><a href="portfolio_Pl.html">Portfolio</a></li>
			  <li><a class="active" href="contacts_Pl.php">Kontakt</a></li>
			  <li class="languages"><a href="contactsUa.php">UA</a></li>
			  <li class="languages"><a href="contacts_Pl.php">Pl</a></li>
			  <li class="languages"><a href="contacts.php">En</a></li>
			  <li class="icon">
				<a href="javascript:void(0);" onclick="myFunction()">
					<img src="imForSite/glyphicons-114-justify.png" alt="glyphicon menu">
				</a>
			  </li>
			</ul>

	</header>	
		
	<section class="main">
			
			<div class="container-fluid text-center">
				<div class="col-sm-2">
					<a href="#top" class="goUpButton">	
						<p><span class="glyphicon glyphicon-menu-up"></span> </p>
						<p><span class="glyphicon glyphicon-menu-up"></span> </p>
					</a>	
				</div>
				
				
				<div class="col-sm-8 text-left">
				<h2> skontaktuj się...</h2>
					<div class="row">
						<div class="col-sm-4 contact">
							<ul class="contactList">
								<li id="mailIcon">
									<img src="imForSite/mail.png">
								</li>
								<li id="myEmail">
									<p><h4>max.savin3@gmail.com</h4></p>
								</li>
							</ul>
						</div>
						
						<div class="col-sm-4 contact">
							<ul class="contactList">
								<li id="phoneGlyph">
									<img src="imForSite/smartphone-white.png">
								</li>
								<li class="phone">
									<p><h4>+48 739 429 555</h4></p>
								</li>
								<li class="phone">
									<p><h4>+38 050 703 48 31</h4></p>
								</li>
							</ul>
						</div>
						
						
						<div class="col-sm-4 contact">
							<ul class="contactList">
								<li id="skypeIcon">
									<img src="imForSite/skype_circle.png">
								</li>
								<li id="mySkype">
									<p><h4>maximua3</h4></p>
								</li>
							</ul>
						</div>
					
					</div>
					<h3> lub napisz wiadomość tutaj</h3>	
					<p class="required small">* = Do wypelnienia</p>	
					<form class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
						<!--when submit button is clicked, show results here-->
						<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
						<?php echo $result;?>
						</div>
						</div> 

						<div class="form-group">
						<label for="name" class="col-sm-3 control-label"><span class="required">*</span> Imię i Nazwisko:</label>
						<div class="col-sm-7">
						<input type="text" class="form-control" id="name" name="name" placeholder="First & Last" value="<?php echo $name;?>">
						<span class="required small"><?php echo $errName;?></span> 
						</div>
						</div>

						<div class="form-group">
						<label for="email" class="col-sm-3 control-label"><span class="required">*</span> Email: </label>
						<div class="col-sm-7">
						<input type="email" class="form-control" id="email" name="email" placeholder="your@domain.com" value="<?php echo $email;?>">
						<span class="required small"><?php echo $errEmail;?></span>
						</div>
						</div>

						<div class="form-group">
						<label for="phone" class="col-sm-3 control-label">Numer Telefonu: </label>
						<div class="col-sm-7">
						<input type="tel" class="form-control" id="phone" name="phone" placeholder="(123) 456-7890" value="<?php echo $phone;?>">
						<span class="required small"><?php echo $errPhone;?></span>
						</div>
						</div>

						<div class="form-group">
						<label for="message" class="col-sm-3 control-label"><span class="required">*</span> Wiadomość:</label>
						<div class="col-sm-7">
						<textarea class="form-control" row="4" name="message" placeholder="Wiadomość"><?php echo $message;?></textarea>
						<span class="required small"><?php echo $errMessage;?></span>
						</div>
						</div>

						<div class="form-group">
						<label for="human" class="col-sm-3 control-label"><span class="required">*</span>Test:</label>
						<div class="col-sm-4">
						<h3 class="human">(6 + 6) * 2= ?</h3>
						<input type="text" class="form-control" id="human" name="human" placeholder="Twoja odpowiedź" value="<?php echo $human;?>">
						<span class="required small"><?php echo $errHuman;?></span>
						</div>
						</div>

						<div class="form-group">
						<div class="col-sm-offset-3 col-sm-2 col-sm-offset-3">
						<button type="submit" id="submit" name="submit" class="btn-lg btn-primary btn-block">Wyślij</button>
						</div>
						</div>
					</form>
						
				</div>
				<div class="col-sm-2">
				</div>
			</div>
		</section>	
		
		
			<footer class="container-fluid">
				<div class="row">
					<div class="col-sm-4">
					
					</div>
					<div class="col-sm-4">
						<ul>
							<li class="col-sm-2">
							  <a href="mailto:max.savin3@gmail.com">
								<img src="imForSite/Envelope_white.jpg" alt="envelope icon">
							  </a>
							</li>
							<li class="col-sm-2">
								<a href="https://ua.linkedin.com/in/maksim-savin-56355769" target="_blank">
									<img src="http://www.citi.com/ventures/images/logos/linkedin.png" alt="icon of LinkedIn service">
								</a>
							</li>
							
						</ul>
					</div>
					
					<div class="col-sm-4">
						<div id="qoo-counter">
							<a href="http://studylance.ru/" title="Биржа студенческих работ - курсовые, дипломные, рефераты, контрольные, репетиторы">
								<img src="http://studylance.ru/counter/standard/016.png" alt="Биржа студенческих работ - курсовые, дипломные, рефераты, контрольные, репетиторы">
								<div id="qoo-counter-visits"></div>
								<div id="qoo-counter-views"></div>
							</a>
						</div>
					</div>
				</div>
			</footer>
			
			<!-- script -->
		      			
		<script type="text/javascript" src="http://qoo.by/counter.js"></script>	
		<script type='text/javascript' src='animation.js'></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
		<script>
			function myFunction() {
				var x = document.getElementById("myTopnav");
				if (x.className === "topnav") {
					x.className += " responsive";
				} else {
					x.className = "topnav";
				}
			}
		</script>
		
	</body>
</html>