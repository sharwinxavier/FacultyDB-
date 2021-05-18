<?php 
ob_start();
session_start();
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Faculty Database</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="https://licet-database.000webhostapp.com/logo-licet.png" type="image/icon">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<style>
		body { 
		  background: url('Licet Building.jpg') no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		  background-blend-mode: lighten;

		}


		.content {
			margin-top: 80px;
		}

		.navbar{
			background-color: #322d65 !important;
			position: relative;
			box-shadow: 0px 5px 2px #ff9900;
			border: none;
		}
		.navhoveer:hover{
			background-color: #ff9900 !important;
			padding-bottom:5.5%;
			border-top-left-radius:10px;
			border-top-right-radius:10px;
		}
		.pudhutitle{
		    font-size:25px;
            padding-top:5px;
		    
		}
		.active > a{
			background-color: #ff9900 !important;
		}
		.text1{
			font-size: 24px;
			padding-top:25px;
		}

		.warning{
			color: #D8000C;
  			background-color: #FFBABA;
			opacity: 1.6;
			border-radius: 10px;
			padding-top: 10px;
			padding-bottom: 10px;
			padding-left: 25px;
			padding-right: 25px;
			font-weight: bold;
			font-family: monospace;
            /*float: center;*/
			font-size: 20px;
			z-index: 1;
			margin-top:-50px;

		}

		.logo-licet {
			float: left;
			width: 125px !important ;
			height:125px !important ;
			margin-bottom:25px;
		}
		



		/*************************************Login Box Styling*****************************************/

		#text{

			height: 25px;
			border-radius: 5px;
			padding: 4px
			border: solid thin #ffcc80;
			width: 100%;
		}

		#text:hover{
			border-color: #ff9900;
			background-color: #ffcc80;
		}


		#button{

			padding: 10px;
			width: 100px;
			color: white;
			background-color:#ff9900;
			border:none;
		}

		#button:hover{
			width:90px;
			background-color: #ffcc80;
		}


		#box{
			margin: auto;
			border-radius: 5%;
			border: 2PX solid #ff9900;
			background-color: #322d65;
			height: 300px;
			width: 300px;
			padding: 20px;
		}
		hr{
			color:#ff9900;
		}

		input {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0px ;
		  box-sizing: border-box;
		  font-size: 14pt;
		  height: 40px;
		}

		/*****************************LOGIN TEXT ALLIGING TO CENTER********************************/

		::-webkit-input-placeholder {
		  text-align: center;
		}

		:-moz-placeholder {
		  text-align: center;
		}

		input{
		  text-align: center;
		      }


		/***************************************FOOTER*********************************************/
		.icons{
		    border-radius:15px; 
		}

		.footer-distributed {                       /*  /container styles/*/
		  background-color:#322d65;
		  opacity: 1;
		  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
		  box-sizing: border-box;
		  width: 100%;
		  border-radius: 10px;
		  margin-bottom: -80px;
		  position: fixed;
		  text-align: left;
		  margin-left: 0px;
		  bottom: 0px;
		  font: bold;:16px sans-serif;
		  padding: 15px 50px;
		  transition: all ease-in-out 0.6s;
		  box-shadow: 2px 0px 5px #ff9900;
		  border: none;
		}
		.footer-distributed:hover{
		    margin-bottom: 0px;
		    transition: all ease-in-out 0.6s;
		    background-color:##564db0;
		    opacity: 1;
		}

		.footer-distributed .footer-left p {         
		  color: #ff9900;
		  font-size: 17px;
		  font-family: monospace;
		  font-weight: bold;
		  margin: 0;
		}
		/* Footer links */

		.footer-distributed p.footer-links {       /*  all text styles*/
		  font-size: 18px;
		  font-weight: bold;
		  color: #878787;
		  margin: 0 0 10px;
		  padding: 0;
		  transition: ease .25s;
		  align-self: auto;
		}
		.home{
		    padding-right:35px;
		}
		.allfac{
		    padding-right:35px;
		}
		.adddata{
		    padding-right:35px;
		}
		.logout{
		    padding-right:35px;
		}
		.home:hover{
		    font-size: 20px;
		    color: #ff9900 !important;
		    transition: ease .25s;
		}
		.allfac:hover{
		    font-size: 20px;
		    color: #ff9900 !important;
		    transition: ease .25s;
		}
		.adddata:hover{
		    font-size: 20px;
		    color: #ff9900 !important;
		    transition: ease .25s;
		}
		.logout:hover{
		    font-size: 20px;
		    color: #ff9900 !important;
		    transition: ease .25s;
		}
		.alic:hover{
		    font-size: 17px;
		    color: #ff9900 !important;
		    transition: ease 0.25s;
		}



		.footer-distributed p.footer-links a {     /* link styles*/
		  display: inline-block;
		  line-height: 1.8;
		  text-decoration: none;
		  color: inherit;
		  transition: ease .25s;
		}

		.footer-distributed .footer-links a:before {     /* | tag display*/
		  content: " |   ";
		  font-size: 20px;
		  left: 0;
		  color: #878787;
		  display: inline-block;
		  padding-right: 5px;
		}
		.navhover:hover{
			background-color: #ff9900 !important;
			padding-bottom:2%;
			border-top-left-radius:10px;
			border-top-right-radius:10px;
		}

		.footer-distributed .footer-links .link-1:before {     
		  content: none;
		}

		.footer-distributed .footer-right {   /*/Icons position/*/
		  float: right;
		  margin-top: 6px;
		  max-width: 180px;
		}

		.footer-distributed .footer-right a {    /* Icons styles*/
		  display: inline-block;
		  width: 35px;
		  height: 35px;
		  background-color: #ff9900;
		  border-radius: px;
		  font-size: 20px;
		  color: #ffffff;
		  text-align: center;
		  line-height: 35px;
		  margin-left: 3px;
		  transition:all .25s;
		}

		.footer-distributed .footer-right a:hover{transform:scale(1.1); -webkit-transform:scale(1.1);}

		.footer-distributed p.footer-links a:hover{text-decoration:underline;}

		/* Media Queries */

		@media (max-width: 600px) {
		  .footer-distributed .footer-left, .footer-distributed .footer-right {
		    text-align: center;
		  }
		  .footer-distributed .footer-right {
		    float: none;
		    margin: 0 auto 20px;
		  }
		  .footer-distributed .footer-left p.footer-links {
		    line-height: 1.8;
		  }
		}
		@media (max-width: 880px) {
		.footer-distributed {                        /* /container styles/*/
		  background-color: #322d65;
		  opacity: 1;
		  margin-bottom: -85px;
		  padding: 15px 20px;
		  overflow-x: hidden;
		}
		.footer-distributed:hover{
		    margin-bottom: 0px;
		    background-color: ##564db0;
		    padding: 8px 20px;
		}

		}
		@media (max-width: 820px) {
		.footer-distributed {                       /* /container styles/*/
		  margin-bottom: -108px; 
		  padding: 16px 20px;
		  overflow-x: hidden;
		}
		.footer-distributed:hover{
		    padding: 15px 20px;
		}
		}

		@media (max-width: 802px) {
		.footer-distributed {                      /*   /container styles/*/
		  margin-bottom: -105px;
		  padding: 15px 20px;
		  overflow-x: hidden;
		}
		.footer-distributed:hover{
		    padding: 15px 20px;
		}
		@media (max-width: 768px) {
		.footer-distributed {                      /*   /container styles/*/
		  margin-bottom: -115px;
		  padding: 15px 20px;
		  overflow-x: hidden;
		}
		}

		}
		@media (max-width: 600px) {
		.footer-distributed {                        /* /container styles/*/
		  margin-bottom: -170px;
		  padding: 8px 20px;
		  padding-top: 25px;
		  overflow-x: hidden;
		}
		.allfac:hover{
		    font-size: 19px;
		    }

		}

		@media (max-width: 588px) {
		.footer-distributed {                       /* /container styles/*/
		  margin-bottom: -183px; 
		  padding: 20px 20px;
		  overflow-x: hidden;
		}
		}


	/**********Device Media Queries********************/



		/* Smartphones (portrait and landscape) ----------- */
		@media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
		/* Styles */
		.text1{
			font-size: 14px;
			margin:-10px 0px 0px 0px;
		}
		.text3{
			font-size: 9px;
			padding:100px 0px 0px 0px;
		}

		.logo-licet{
			height: 80px !important;
			width: 80px !important;
			margin-top: 15px;
			padding: 2px;
		}
		
		.titleedits{
		    margin-top:0px;
		}
		.home{
		    padding-right:2px;
		}
		.allfac{
		    padding-right:2px;
		}
		.adddata{
		    padding-right:2px;
		}
		.logout{
		    padding-right:2px;
		}
		.pudhutitle{
            font-size:11px;
            padding-top:1px;
        }

		}

		/* Smartphones (landscape) ----------- */
		@media only screen and (min-width : 321px) {
		/* Styles */
		}

		/* Smartphones (portrait) ----------- */
		@media only screen and (max-width : 320px) {
		/* Styles */
		.text1{
			font-size: 9px;
			margin:-10px 0px 0px 0px;
		}
		.text3{
			font-size: 5px;
			margin:0px 20px 0px 0px;
		}

		.logo-licet{
			height: 62.5px !important;
			width: 62.5px !important;
			margin-top: 15px;
			padding: 10px;
		}

		.footer-distributed {                       /*  /container styles/*/
		  background-color:#322d65;
		  opacity: 1;
		  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
		  box-sizing: border-box;
		  width: 100%;
		  border-radius: 10px;
		  margin-bottom: -60px;
		  position: fixed;
		  text-align: left;
		  margin-left: 0px;
		  bottom: 0px;
		  font: bold;:16px sans-serif;
		  padding: 15px 50px;
		  transition: all ease-in-out 0.6s;
		  box-shadow: 2px 0px 5px #ff9900;
		  border: none;
		}
		
		.titleedits{
		    margin-top:0px;
		}
		.home{
		    padding-right:2px;
		}
		.allfac{
		    padding-right:2px;
		}
		.adddata{
		    padding-right:2px;
		}
		.logout{
		    padding-right:2px;
		}
        .pudhutitle{
            font-size:11px;
            padding-top:1px;
        }

		}

		/* iPads (portrait and landscape) ----------- */
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
		/* Styles */
		}

		/* iPads (landscape) ----------- */
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
		/* Styles */
		}

		/* iPads (portrait) ----------- */
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
		/* Styles */
		}
		/**********
		iPad 3
		**********/
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio : 2) {
		/* Styles */
		}

		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio : 2) {
		/* Styles */
		}
		/* Desktops and laptops ----------- */
		@media only screen  and (min-width : 1224px) {
		/* Styles */
		}

		/* Large screens ----------- */
		@media only screen  and (min-width : 1824px) {
		/* Styles */
		}

		/* iPhone 4 ----------- */
		@media only screen and (min-device-width : 320px) and (max-device-width : 480px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio : 2) {
		/* Styles */
		}

		@media only screen and (min-device-width : 320px) and (max-device-width : 480px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio : 2) {
		/* Styles */
		}

		/* iPhone 5 ----------- */
		@media only screen and (min-device-width: 320px) and (max-device-height: 568px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 2){
		/* Styles */
		}

		@media only screen and (min-device-width: 320px) and (max-device-height: 568px) and (orientation : portrait) and (-webkit-device-pixel-ratio: 2){
		/* Styles */
		}

		/* iPhone 6, 7, 8 ----------- */
		@media only screen and (min-device-width: 375px) and (max-device-height: 667px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 2){
		/* Styles */
		}

		@media only screen and (min-device-width: 375px) and (max-device-height: 667px) and (orientation : portrait) and (-webkit-device-pixel-ratio: 2){
		/* Styles */
		}

		/* iPhone 6+, 7+, 8+ ----------- */
		@media only screen and (min-device-width: 414px) and (max-device-height: 736px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 2){
		/* Styles */
		}

		@media only screen and (min-device-width: 414px) and (max-device-height: 736px) and (orientation : portrait) and (-webkit-device-pixel-ratio: 2){
		/* Styles */
		}

		/* iPhone X ----------- */
		@media only screen and (min-device-width: 375px) and (max-device-height: 812px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 3){
		/* Styles */
		}

		@media only screen and (min-device-width: 375px) and (max-device-height: 812px) and (orientation : portrait) and (-webkit-device-pixel-ratio: 3){
		/* Styles */
		}

		/* iPhone XS Max, XR ----------- */
		@media only screen and (min-device-width: 414px) and (max-device-height: 896px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 3){
		/* Styles */
		}

		@media only screen and (min-device-width: 414px) and (max-device-height: 896px) and (orientation : portrait) and (-webkit-device-pixel-ratio: 3){
		/* Styles */
		}

		/* Samsung Galaxy S3 ----------- */
		@media only screen and (min-device-width: 320px) and (max-device-height: 640px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 2){
		/* Styles */
		}

		@media only screen and (min-device-width: 320px) and (max-device-height: 640px) and (orientation : portrait) and (-webkit-device-pixel-ratio: 2){
		/* Styles */
		}

		/* Samsung Galaxy S4 ----------- */
		@media only screen and (min-device-width: 320px) and (max-device-height: 640px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 3){
		/* Styles */
		}

		@media only screen and (min-device-width: 320px) and (max-device-height: 640px) and (orientation : portrait) and (-webkit-device-pixel-ratio: 3){
		/* Styles */
		}

		/* Samsung Galaxy S5 ----------- */
		@media only screen and (min-device-width: 360px) and (max-device-height: 640px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 3){
		/* Styles */
		}

		@media only screen and (min-device-width: 360px) and (max-device-height: 640px) and (orientation : portrait) and (-webkit-device-pixel-ratio: 3){
		/* Styles */
		}
		

	</style>

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" style="position: relative;">
		<div class="container">
				<div class="top-header">
	                <div class="head-text" style="color: white;">
	                  <center>
	                  <nav> 
	                  <a href="firstpagetrial.php">    
			              <img class="logo-licet" style="margin-bottom: 40px ; margin-top: 30px; " src="logo-licet.png" alt="Logo" style="width:60px; "><br></a>
			          </nav>
			          <div class="text1" style="font-family: 'Shippori Mincho B1', serif;">LOYOLA-ICAM COLLEGE OF ENGINEERING AND TECHNOLOGY(LICET)</div>
						<span class="text3"> Loyola Campus, Nungambakkam, Chennai – 600034</span>
			    <div class="pudhutitle" style="font-weight: bold; color:#ff9900;">FACULTY DATABASE SYSTEM  </div>
			          </center>
			        </div>
		    </div>
				<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
<div id="Menualign"></div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav" style="float: right;">
				    <li class="navhoveer" style="color: white; font-weight: bold;"><a href="departments.php">
                          Departments</a>
                        </li>
                        
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
	</nav>


	<div class="container">
		<div class="content">
			<?php
			include("functions.php");


			if($_SERVER['REQUEST_METHOD'] == "POST")
			{
				//something was posted
				$username = $_POST['username'];
				$password = $_POST['password'];

				if(!empty($username) && !empty($password) && !is_numeric($username))
				{

					//read from database
					$query = "SELECT * from users where username = '$username' limit 1";
					$result = mysqli_query($con, $query);

					if($result)
					{
						if($result && mysqli_num_rows($result) > 0)
						{

							$user_data = mysqli_fetch_assoc($result);
							
							if($user_data['password'] === $password)
							{

								$_SESSION['userid'] = $user_data['userid'];
								header("Location: firstpagetrial.php");
								ob_end_flush();
								die;
							}
						}
					}
					
					echo '<br><br><br><br><strong><center><h4 class="warning">Enter correct credentials </h4></center></strong>';
				}else
				{
					echo '<br><br><br><br><strong><center><h4 class="warning">Enter correct credentials </h4></center></strong>';
				}
			}
			?>

			<div style="margin-top: 40px; margin-bottom:80px;" id="box">		
				<form method="post">
					<center><div style="font-size: 20px;margin: 20px;color: white;"><h4>LOGIN</h4></div></center>
					<center><div style="font-size: 20px;margin-bottom:20px;color: white;"><hr></div></center>

					<input id="text" type="text" name="username" placeholder="Username"><br>
					<input id="text" type="password" name="password" placeholder="Password"><br><br>

					<center><input id="button" type="submit" style="border-radius:10px; font-size: 10pt;" value="Log in"><br><br></center>

				
				</form>
			</div>
		</div>
	</div>



<footer class="footer-distributed">

    <div class="footer-right">

        <a class="icons" href="https://www.facebook.com/LICETStud/"><i class="fa fa-facebook-square"></i></a>
        <a class="icons" href="https://www.instagram.com/loyolaicam_official/"><i class="fa fa-instagram"></i></a>
        <a class="icons"  href="https://www.linkedin.com/school/loyola-icam-college-of-engineering-and-technology/"><i class="fa fa-linkedin"></i></a>
        <a class="icons" href="https://www.youtube.com/channel/UCR13QxRq4JDFMsy4c-bKuww"><i class="fa fa-youtube"></i></a>

    </div>

    <div class="footer-left">

        <p class="footer-links">
            <a class="home" href="departments.php">Home</a>
            <a class="allfac" href="staff.php">All Faculties</a>
            <!--<a class="adddata" href="add.php">Add Data</a>-->
            <!--<a class="logout" href="logout.php">Logout</a>-->
        </p>
        <center>
        <h5 class="alic" style="font-family: monospace;color: #878787;font-weight: bold"> A   LICET   IT   Design   ©   2021 </h5>
    </center>
    </div>

</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
			
</body>
</html>