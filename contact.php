<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
	<head>
		<title>Alex Liow</title>
		<link rel="shortcut icon" href="https://s3.amazonaws.com/aliow-personal-site/favicon.png" type="image/png">
		<link rel="stylesheet" type="text/css" href="stylesheets/contact.css">
		<script src="js/googleAnalytics.js"></script>
	</head>

	<body>
		<div id="personalBackground">
			<a href="index.html"><img src="images/navface.png" class="navface" alt="profile"></a>

			<ul class="navbar">
				<li><a href="contact.php"><img class="icon" src="images/contact.png" alt="contact"></a></li>
				<li><a href="interests.html"><img class="icon" src="images/interests.png" alt="interests"></a></li>
				<li><a href="personal.html"><img class="icon" src="images/personal.png" alt="personal"></a></li>
				<li><a href="index.html"><img class="icon" src="images/home.png" alt="home"></a></li>
			</ul>
			
			<br>
			<br>
			<p id="heading">CONTACT</p>

		</div>

		<div id="contactForm"> 

				<?php 
				function addQuiz($a, $b, $c) {
					return ($a + $b + $c)/3*100;
				}

				if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"]) && isset($_POST["hometown"]) && isset($_POST["do"]) && isset($_POST["major"])){
					$name = $_POST["name"];
					$email = $_POST["email"];
					$message = $_POST["message"];
					$home = 0;
					$do = 0;
					$major = 0;

					mail('gll34@cornell.edu', $name . "," . $email, $message);

					if (strcmp($_POST["hometown"],"Los Angeles") == 0) {
						$home = 1;
					}

					if (strcmp($_POST["do"],"film") == 0){
						$do = 1;
					}

					if (strcmp($_POST["major"],"cs") == 0){
						$major = 1;
					}
					echo "<p>Thanks for filling out the form! I look forward to reading your message," . " " . htmlentities($name) . "</p>";

					echo "<p>You got a " . (string)(addQuiz($home, $major, $do)) . "%</p>";
				}

				else{

			?>
			<form action="contact.php" method="post">
				Name:
				<input type="text" name="name"><br>

				Email:
				<input type="email" name="email"><br>

				Message:

			<input type="text" name="message"><br>

			<h3>Short Quiz to see what you learned about me!</h3>
				
				1. What is my hometown?
				<input type="radio" name="hometown" value="Mexico"> Mexico City
				<input type="radio" name="hometown" value="Paris"> Paris
				<input type="radio" name="hometown" value="Los Angeles"> Los Angeles
				<input type="radio" name="hometown" value="Tokyo"> Tokyo<br>

				2. What do I like to do?
				<input type="radio" name="do" value="hop"> Hop
				<input type="radio" name="do" value="film"> Make Films
				<input type="radio" name="do" value="sleep"> Sleep
				<input type="radio" name="do" value="suntan"> Suntan<br>
				
				3. What major am I?
				<input type="radio" name="major" value="wine"> Wines and viticulture
				<input type="radio" name="major" value="art"> Fine Arts
				<input type="radio" name="major" value="phil"> Philosophy
				<input type="radio" name="major" value="cs"> Computer Science<br>

				<input type="submit">
			</form>
			<?php } ?>
		</div>

		<div id="footer">
      		<br>
      		<br>
      		<span>Designed and Built by Alex Liow | Cornell University | Class of 2016</span>
        </div>
	</body>
</html>
