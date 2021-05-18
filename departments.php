<?php 
session_start();
	include("connection.php");
	include("functions.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Departments</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="logo-licet.png" type="image/icon type">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<style>
		body { 
		  background: url('https://i.pinimg.com/originals/e8/03/9c/e8039c7c4fc7e4f5a869a2e6c513df37.jpg') no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		  background-blend-mode: lighten;
		}
		.pudhutitle{
		    font-size:25px;
		    padding-top:5px;
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
		.navhover:hover{
			background-color: #ff9900 !important;
			padding-bottom:3%;
			border-top-left-radius:10px;
			border-top-right-radius:10px;
		}
		.active > a{
			background-color: #ff9900 !important;
		}

		.text1{
			font-size: 24px;
			padding-top:25px;
		}

		.logo-licet {
			float: left;
			width: 125px !important ;
			height:125px !important ;
		}



		body {
		  margin: 0;
		  font-family: 'Muli', sans-serif;
		  -webkit-box-sizing: border-box;
		  box-sizing: border-box;
		  overflow-x: hidden;
		}


		.carousel {
		  width: 100%;
		  overflow-x: auto;
		  padding:0px;
		  padding-bottom: 50px;
		  position: relative;
		  -webkit-box-sizing: border-box;
		  box-sizing: border-box;
		}

		.carousel__container {
		  white-space: nowrap;
		  margin: 0px 0px;
		  padding-bottom: 10px;
		  display: inline-block;
		  
		}

		.categories__title {
		  color: #322d65;
		  font-size: 40px;
		  font-weight: bold;
		  position:relative;
		  stroke: 5px;
		  stroke-color: black;
		  text-align: center;
		  margin-bottom: -50px;
          margin-top: -30px;
		}

		.carousel-item-left {
		  width: 150px;
		  height: 200px;
		  border-radius: 20px;
		  background-color: #95bcd6;
		  overflow: hidden;
		  margin-left: 10px;
		  margin-top: 70px;
		  display: inline-block;
		  cursor: pointer;
		  -webkit-transition: 1000ms all;
		  transition: 1000ms all;
		  -webkit-transform-origin: center center;
		  transform-origin: center center;
		  position: relative;
		  border: 1px solid #ff9900;
		}

		.carousel-item:hover ~ .carousel-item {
		  -webkit-transform: translate3d(100px, 0, 0);
		  transform: translate3d(100px, 0, 0);
		}

		.carousel__container:hover .carousel-item {
		  opacity: 0.3;
		}

		.carousel__container:hover .carousel-item:hover {
		  -webkit-transform: scale(1.2);
		  transform: scale(1.2);
		  opacity: 1;
		  z-index:2;
		}

		.carousel-item-left:hover ~ .carousel-item-left {
		  -webkit-transform: translate3d(-100px, 0, 0);
		  transform: translate3d(-100px, 0, 0);
		}

		.carousel__container:hover .carousel-item-left {
		  opacity: 0.3;
		}

		.carousel__container:hover .carousel-item-left:hover {
		  -webkit-transform: scale(1.2);
		  transform: scale(1.2);
		  opacity: 1;
		  z-index:2;
		}

		.carousel-item__img {
		  width: 150px;
		  height: 200px;
		  -o-object-fit: cover;
		  object-fit: cover;
		}

		.carousel-item__details {
		  background: -webkit-gradient(
		    linear,
		    left bottom,
		    left top,
		    from(rgba(0, 0, 0, 0.9)),
		    to(rgba(0, 0, 0, 0))
		  );
		  background: linear-gradient(
		    to top,
		    rgba(0, 0, 0, 0.9) 0%,
		    rgba(0, 0, 0, 0) 100%
		  );
		  font-size: 10px;
		  -webkit-transition: 450ms opacity;
		  transition: 450ms opacity;
		  position: absolute;
		  top: 0;
		  left: 0;
		  right: 0;
		  bottom: 0;
		  padding-top:130px;
		}

		.carousel-item__details:hover {
		  opacity: 1;
		}

		.carousel-item__details span {
		  font-size: 0.9em;
		  color: #2ecc71;

		}

		/*.carousel-item__details .controls {*/
		/*  padding-top: 180px;*/
		/*}*/

		.carousel-item__details .carousel-item__details--title,
		.carousel-item__details--subtitle {
		  color: #fff;
		 
		}	


/*section {                                     
  width: 100%;
  display: inline-block;
  background: #322d65;
  height: 60vh;
  text-align: center;
  font-size: 22px;
  font-weight: 700;

  text-decoration: underline;
}*/
/******************************************************FOOTER**************************************************************/
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


/*.adddata{
    display: none;
}
.allfac{
    display: none;
}*/
}
@media (max-width: 588px) {
.footer-distributed {                       /* /container styles/*/
  margin-bottom: -183px; 
  padding: 20px 20px;
  overflow-x: hidden;
}
}
/*@media (max-width: 1380px){
.scrollx{
	overflow-x: scroll;

}
.scrollx::-webkit-scrollbar {
    display: none;
}
}*/

/***Device Media Queries*******/



		/* Smartphones (portrait and landscape) ----------- */
		@media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
		/* Styles */
		.text1{
			font-size: 14px;
			margin:-10px 0px 0px 0px;
		}
		.text3{
			font-size: 9px;
			margin:0px 20px 0px 0px;
		}

		.logo-licet{
			height: 80px !important;
			width: 80px !important;
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
		#Menualign{
		    display:none;
		}
		.navbar{
			box-shadow: 0px 3px 2px #ff9900;
		}
		.navhover:hover{
			padding-bottom:0px;
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
		#Menualign{
		    display:none;
		}
		.navbar{
			box-shadow: 0px 3px 2px #ff9900;
		}
		.navhover:hover{
			padding-bottom:0px;
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
		/****
		iPad 3
		****/
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
		<nav class="navbar navbar-inverse navbar-fixed-top">
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
                    
				<div id="navbar" class="navbar-collapse collapse" >	
					
					<ul class="nav navbar-nav" style="float:right; ">				
						<li class="navhover" style="color: white; font-weight: bold;"><a href="staff.php">All Faculty</a></li>
						<li class="navhover" style="color: white; font-weight: bold;"><a href="login.php">Login</a></li>
                        <li class="navhover" style="color: white; font-weight: bold;"><a href="departments.php">
                          <span class="glyphicon glyphicon-home"></span></a>
                        </li>						
					</ul>
				</div><!--/.nav-collapse -->			
			</div>
		</nav>
		


<div  style="font-weight: bold; color:#322d6f; font-size: 30px; padding-top:25px;">
    
<center>DEPARTMENTS</center>
</div>
<hr style="color: white; width:50% ; margin-bottom:-30px;">


	    <section class="carousel">
	    	<center style="color: white;">
	      


<!--  CSE DEPARMENT -->
<div class="scrollx">
	
		
		<div class="carousel__container">
		<span>
        <a href="staff.php?filter=CSE">   
	        <div class="carousel-item-left">	          
				<img
	            class="carousel-item__img"
	            src="https://img.freepik.com/free-psd/mockup-electronic-devices_23-2147864575.jpg?size=626&ext=jpg&ga=GA1.2.1773727020.1615800926"             
	            alt="people"
	          />
	          <div class="carousel-item__details">
	            <div class="controls">
<!-- 	              <span class="fas fa-play-circle"></span>
	              <span class="fas fa-plus-circle"></span> -->
	            </div>
	        
	            <center class="carousel-item__details--title"><h6>Computer Science &</h6></center>
	            <center class="carousel-item__details--title"><h6>Engineering</h6></center>
	            
<!-- 	            <h6 class="carousel-item__details--subtitle">Prof. Gopalakrishnan</h6>  -->  
	          </div>
	        </div>
	        </a>
	    </span>
	


<!--  IT DEPARMENT -->
		<span>
	        <a href="staff.php?filter=IT">
	        <div class="carousel-item-left">
	          <img
	            class="carousel-item__img"
	            src="https://image.freepik.com/free-vector/cloud-storage-concept_1325-30.jpg"         
	            alt="people"
	          />
	          <div class="carousel-item__details">
	            <div class="controls">
<!-- 	              <span class="fas fa-play-circle"></span>
	              <span class="fas fa-plus-circle"></span> -->
	            </div>
	        
	            <center class="carousel-item__details--title"><h6>Information Technology</h6></center>
	            
<!-- 	            <h6 class="carousel-item__details--subtitle">Dr.Juliana</h6> -->
	          </div>
	        </div>
	        </a>
	    </span>    

<!--  ECE DEPARMENT -->
		<span>
	        <a href="staff.php?filter=ECE">
	        <div class="carousel-item-left">
	          <img
	            class="carousel-item__img"
	            src="https://image.freepik.com/free-vector/illustration-circuit_53876-5583.jpg"
	            alt="people"
	          />
	          <div class="carousel-item__details">
	            <div class="controls">
<!-- 	              <span class="fas fa-play-circle"></span>
	              <span class="fas fa-plus-circle"></span> -->
	            </div>
	        
	            <center class="carousel-item__details--title" style="margin-top:-20px"><h6>Electronics &</h6></center>
	            <center class="carousel-item__details--title"><h6>Communication</h6></center>
	            <center class="carousel-item__details--title"><h6>Engineering</h6></center>
<!-- 	            <h6 class="carousel-item__details--subtitle">Dr.Egfin Nirmala</h6> -->
	          </div>
	        </div>
	        </a>
	</span>




<!--  EEE DEPARMENT -->
	      
	<span>
	    <a href="staff.php?filter=EEE">    		        
	        <div class="carousel-item-left">
	          <img
	            class="carousel-item__img"
	            src="https://image.freepik.com/free-photo/electricians-hands-testing-current-electric-control-panel_34936-1561.jpg"
	            alt="people"
	          />
	          <div class="carousel-item__details">
	            <div class="controls">
<!-- 	              <span class="fas fa-play-circle"></span>
	              <span class="fas fa-plus-circle"></span> -->
	            </div>
	        
	            <center class="carousel-item__details--title" style="margin-top:-20px"><h6>Electricals &</h6></center>
	            <center class="carousel-item__details--title"><h6>Electronics</h6></center>
	            <center class="carousel-item__details--title"><h6>Engineering</h6></center>	          

	          </div>
	        </div>
	        </a>
	</span>
<!--  MECH DEPARMENT -->
		<span>
	        <a href="staff.php?filter=MECH">
	        <div class="carousel-item-left">
	          <img
	            class="carousel-item__img"
	            src="https://image.freepik.com/free-photo/muscular-car-service-worker-repairing-vehicle_146671-19605.jpg"
	            alt="people"
	          />
	          <div class="carousel-item__details">
	            <div class="controls">
<!-- 	              <span class="fas fa-play-circle"></span>
	              <span class="fas fa-plus-circle"></span> -->
	            </div>
	        
	            <center class="carousel-item__details--title"><h6>Mechanical</h6></center>
	            <center class="carousel-item__details--title"><h6>Engineering</h6></center>
<!-- 	            <h6 class="carousel-item__details--subtitle">Dr.Queen Florence Mary</h6> -->
	          </div>
	        </div>
	        </a>
	    </span>


<!--  SCIENCE & HUMANITIES DEPARMENT -->
		<span>
	        <a href="staff.php?filter=S%26H">
	        <div class="carousel-item-left">
	          <img
	            class="carousel-item__img"
	            src="https://image.freepik.com/free-photo/human-resources-people-networking-concept_31965-7402.jpg"
	            alt="people"
	          />
	          <div class="carousel-item__details">
	            <div class="controls">
<!-- 	              <span class="fas fa-play-circle"></span>
	              <span class="fas fa-plus-circle"></span> -->
	            </div>
	        
	            <center class="carousel-item__details--title"><h6>Science &</h6></center>
	            <center class="carousel-item__details--title"><h6>Humanities</h6></center>
<!-- 	            <h6 class="carousel-item__details--subtitle">Dr.Josephine</h6> -->
	          </div>
	        </div>
	        </a>
	    </span>
	    
<!--  NON TEACHING FACULTY -->
<span>
    <a href="staff.php?filter=Non-Teaching+Faculty">
    <div class="carousel-item-left">
      <img
        class="carousel-item__img"
        src="https://image.freepik.com/free-vector/laboratory-assistants-work-scientific-medical-chemical-biological-lab-setting-experiments_1284-16857.jpg"
        alt="people"
      />
      <div class="carousel-item__details">
        <div class="controls">
<!-- 	              <span class="fas fa-play-circle"></span>
          <span class="fas fa-plus-circle"></span> -->
        </div>
    
        <center class="carousel-item__details--title"><h6>Non-Teaching</h6></center>
	    <center class="carousel-item__details--title"><h6>Faculty</h6></center>
      </div>
    </div>
    </a>
</span>
</div>
</center>
	</section>
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
                    <a class="logout" href="login.php">Login</a>
                </p>
                <center>
                <h5 class="alic" style="font-family: monospace;color: #878787;font-weight: bold"> A   LICET   IT   Design   ©   2021 </h5>
            </center>
            </div>

        </footer>



	</body>
	</html>