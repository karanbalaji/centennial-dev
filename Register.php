<!DOCTYPE html>
<html lang="en">
<head>
	<title>form submission</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/customStyle.css">

	
</head>
<body>

		<!-- Navigation -->
	<header role="banner">
    <nav class="navbar navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <a class="navbar-brand" href="#" >
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
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Work</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    </header>

	<?php
			$userName = $_POST['user_name'];
			$email = $_POST['user_email'];
			$message = $_POST['user_message'];
			
			
    if (isset($_POST[register]))
		echo " <div class='container' id='box2'>
				
				<h1>Welcome to the club, $userName!
                <br> We'll send all the information to $email.</h1>
				</div>
				";
			else
                echo "Something Went Wrong";
        ?>


	
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</body>
</html>





