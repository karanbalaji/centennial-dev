<!DOCTYPE html>
<html lang="en">
<head>
	<title>form submission</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/customStyle.css">
</head>
<body>

		<!-- Navigation -->
	<header role="banner">
    <nav class="navbar navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <a class="navbar-brand" href="/index.html" >
            <img src="img/Logo-Icon.png" id="logo-icon" alt="PixelPorte Logo">Pixelporte
            </a>
            <!-- Brand and toggle get grouped for better mobile display -->
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/AboutPage.php">About</a>
                    </li>
                    <li>
                        <a href="/portfolio.php">Work</a>
                    </li>
                    <li>
                        <a href="/ContactForm.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    </header>

<div class="container" id="box3">
	<form method="POST" action="Response.php">
	<fieldset>
		<legend>
			<strong>Contact Us</strong>
		</legend>
	</fieldset>
		<div class="form-group">
		<label for="field-name">First Name:</label>
			<input id="field-name" type="text" class="form-control" name="first_name" placeholder="Your Name" autofocus>
		</div>
		
		<div class="form-group">
		<label for="field-lastName">Last Name:</label>
			<input id="field-lastName" type="text" class="form-control" name="last_name" placeholder="Your Last Name" >
		</div>
		
		<div class="form-group">
		<label for="field-email">Email:</label>
			<input id="field-email" type="email" class="form-control" name="user_email" placeholder="name@email.com" required>
		</div>
		 
		<div class="form-group">
		<label for="field-phone">Phone:</label>
			<input id="field-phone" type="tel" class="form-control" name="phone_number" placeholder="123-123-1234" title="Enter in requested format 123-123-1234" required pattern="\d{3}[\-]\d{3}[\-]\d{4}">
		 </div>
		 
    	<select class = "form-control" name="services">
    	<option value="Customer Services">Customer Service</option>
    	<option value="Design">Design</option>
    	<option value="Coding">Coding</option>
    	<option value="Content and Project Management">Content And Project Management</option>
  		</select>
  	<br>
  
 	 <input type="submit" name="submit" class="btn btn-primary form-control" value="Submit">

	</form>
	<br>
	</div>

	<!-- This is register side -->

	<div class="container" id="box2">
	<form method="POST" action="Register.php">
		<fieldset>
		<legend>
			<strong>Join Us</strong>
		</legend>
		</fieldset>
		<div class="form-group">
		<label for="field-username">User Name: </label>
			<input id="field-username" type="text" class="form-control" name="user_name" placeholder="username" required>
		</div>

		<div class="form-group">
		<label for="field-password">Password: </label>
			<input id="field-password" type="password" class="form-control" name="user_password" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
		</div>
	
		<div class="form-group">
		<label for="field-email-two">Email: </label>
			<input id="field-email-two" type="email" class="form-control" name="user_email" placeholder="example@gmail.com" required>
		</div>
	
		<div class="form-group">
		<label for="field-message">Message :</label>
			<textarea id="field-message" rows="10" cols="100" name="user_message" class="form-control" placeholder="Your Message Here"></textarea>
		</div>
		
		<div class="form-group">
			<input type="submit" class="form-control btn-secondary" value="Register" name="register">
		</div>
	</form>

	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</body>
</html>
