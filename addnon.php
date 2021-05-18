<?php
include("connection.php");
include("functions.php");
session_start();
if(!isset($_SESSION['userid']))
{
	$user_data=check_login($con);
}
else
{

}
$id = $_SESSION['userid'];
$query = "SELECT * from users where userid = '$id' limit 1";
$result = mysqli_query($con,$query);
$user_data = mysqli_fetch_assoc($result);
$dept = $user_data["Department"];



if($dept=="ADMIN" or $dept=="NTF"){
                // echo'<style>body{display:initial;}</style>';
            }else{
                header("Location: index.php");
                // echo'<style>body{display:none;}</style>';
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Data</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">
	<link rel="icon" href="logo-licet.png" type="image/icon type">
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
		.navhover:hover{
			background-color: #ff9900 !important;
			padding-bottom:2.8%;
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
		.logo-licet {
			float: left;
			width: 125px !important ;
			height:125px !important ;

		}
        
        .text1{
            font-size:24px;
            padding-top:25px;

        }
        

		.categories__title {
          color: #322d65;
          font-size: 40px;
          font-weight: bold;
          position:relative;
          padding-bottom:10px;
      }
      
      .choose{
          padding-bottom:40px;
          margin-top:-15px;
      }
      .NTFTF{
          font-weight:bold;
          font-size:20px;
          background-color:#4BB543;
          padding:10px 30px;
          color:white;
          border:solid white 2px;
          border-radius:10px;
      }
      .NTFTF:hover{
          font-weight:bold;
          font-size:20px;
          background-color:#008080;
          padding:10px 30px;
          color:#FFD700;
          text-decoration:none;
          border:solid #FFD700 2px;
          border-radius:10px;
          transition: ease .25s;
      }
            .NTFTF:visited{
         text-decoration:none; 
      }
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
  transition:all ease-in-out 0.6s;
  font: bold 16px sans-serif;
  padding: 15px 50px;
  box-shadow: 2px 0px 5px #ff9900;
  border: none;
}
.footer-distributed:hover{
	margin-bottom: 0px;
	transition:all ease-in-out 0.6s;
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

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
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
					<ul class="nav navbar-nav" style="float:right;">					
						<li class="navhover" style="color: white; font-weight: bold;"><a href="index.php?filter=">All Faculty</a></li>
						<li class="navhover" style="color: white; font-weight: bold;"><a href="logout.php">Logout</a></li>
						<li class="navhover" style="color: white; font-weight: bold;"><a href="firstpagetrial.php">
                          <span class="glyphicon glyphicon-home"></span></a>
                        </li>
						<!-- <li><a href="add.php">Add Data</a></li>	 -->					
					</ul>
				</div>
		</div>
	</nav>
	<div class="container">
		<div class="content">
			    
			    <h2 class="categories__title">Staff Details &raquo; Add Data &raquo; Non-Teaching Staff<?php
			    if ($dept=='ADMIN'){
			    echo'<a href="add.php" class="NTFTF" style="float:right;" ><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span> &nbsp;Teaching</a><br>';
			    }
			    else{}
			    ?></h2>
			    <hr>



			<?php
			if(isset($_POST['add'])){
			    $file=$_FILES['file'];
                $fileName=$_FILES['file']['name'];
                $fileTmpName=$_FILES['file']['tmp_name'];
                $fileSize=$_FILES['file']['size'];
                $fileError=$_FILES['file']['error'];
                $fileType=$_FILES['file']['type'];
                
                $fileExt=explode('.',$fileName);
                $fileActualExt=strtolower(end($fileExt));
                
                $allowed=array('jpg','jpeg','png');
                // $insert = mysqli_query($con, "INSERT INTO faculty_basic_details(prof_img) VALUES('$fileName')");
                
                if(in_array($fileActualExt,$allowed)){
                    if($fileError===0){
                        if($fileSize<1000000){
                            // $fileNameNew =uniqid('',true).".".$fileActualExt;
                            // $fileDestination = 'uploads/'.$fileNameNew;
                            $fileDestination = 'uploads/'.$fileName;
                            move_uploaded_file($fileTmpName,$fileDestination);
                        }else{
                             echo"You cannot upload files because of bigger size";
                        }
                    }else{
                        echo"You cannot upload files because of an error";
                    }
                }else{
                    // echo"You cannot upload files of this type!";
                }
                
                $prof_url        = $_POST['prof_url'];
                $prof_url =str_replace("'", "\'", $prof_url);
                $ID              = $_POST['ID'];
                $name            = $_POST['name'];
                $name =str_replace("'", "\'", $name);
                $Gender          = $_POST['Gender'];
                $DOB             = $_POST['DOB'];
                $Position        = $_POST['Position'];
                $Position =str_replace("'", "\'", $Position);
                $Mailid          = $_POST['Mailid'];
                $Mailid =str_replace("'", "\'", $Mailid);
                $Qualification   = $_POST['Qualification'];
                $Qualification =str_replace("'", "\'", $Qualification);
                // $Department      = $_POST['Department'];
                $Reg_Adj         = $_POST['Reg_Adj'];
                $Com_Add         = $_POST['Com_Add'];
                $Com_Add =str_replace("'", "\'", $Com_Add);
                $Per_Add         = $_POST['Per_Add'];
                $Per_Add =str_replace("'", "\'", $Per_Add);
                $Old_Add         = $_POST['Old_Add'];
                $Old_Add =str_replace("'", "\'", $Old_Add);
                $mot_ton         = $_POST['mot_ton'];
                $mot_ton =str_replace("'", "\'", $mot_ton);
                $Dist            = $_POST['Dist'];
                $Dist =str_replace("'", "\'", $Dist);
                $Mob_No          = $_POST['Mob_No'];
                $emg_mob_no      = $_POST['emg_mob_no'];
                $landline_no     = $_POST['landline_no'];
                $Email           = $_POST['Email'];
                $Email  =str_replace("'", "\'", $Email);
                $Community       = $_POST['Community'];
                $iob_acc_no      = $_POST['iob_acc_no'];
                $PAN_No          = $_POST['PAN_No'];
                $Passport_No     = $_POST['Passport_No'];
                $Aadhar_No       = $_POST['Aadhar_No'];
                
               
                $Marital_status  = $_POST['Marital_status'];
                $Birth_place     = $_POST['Birth_place'];
                $Birth_place =str_replace("'", "\'", $Birth_place);
                $Catholic        = $_POST['Catholic'];
                $diocese_name    = $_POST['diocese_name'];
                $diocese_name =str_replace("'", "\'", $diocese_name);
                $church_name_place=$_POST['church_name_place'];
                $church_name_place =str_replace("'", "\'", $church_name_place);
                $Religion        = $_POST['Religion'];
                $Caste           = $_POST['Caste'];
                $Caste =str_replace("'", "\'", $Caste);
                $dalit           = $_POST['dalit'];
                $Lang_Known_1    = $_POST['Lang_Known_1'];
                $Lang_Known_1 =str_replace("'", "\'", $Lang_Known_1);
                $Lang_Known_2    = $_POST['Lang_Known_2'];
                $Lang_Known_2 =str_replace("'", "\'", $Lang_Known_2);
                $Lang_Known_3    = $_POST['Lang_Known_3'];
                $Lang_Known_3 =str_replace("'", "\'", $Lang_Known_3);
                $Lang_Known_4   = $_POST['Lang_Known_4'];
                $Lang_Known_4 =str_replace("'", "\'", $Lang_Known_4);
                $Lang_Known_5    = $_POST['Lang_Known_5'];
                $Lang_Known_5 =str_replace("'", "\'", $Lang_Known_5);
                $Lang_Known_6    = $_POST['Lang_Known_6'];
                $Lang_Known_6 =str_replace("'", "\'", $Lang_Known_6);
                $Lang_Known_7    = $_POST['Lang_Known_7'];
                $Lang_Known_7 =str_replace("'", "\'", $Lang_Known_7);
                $Lang_Known_8    = $_POST['Lang_Known_8'];
                $Lang_Known_8 =str_replace("'", "\'", $Lang_Known_8);

                
                $profic_1=$_POST['profic_1'];
                $profic_2=$_POST['profic_2'];
                $profic_3=$_POST['profic_3'];
                $profic_4=$_POST['profic_4'];
                $profic_5=$_POST['profic_5'];
                $profic_6=$_POST['profic_6'];
                $profic_7=$_POST['profic_7'];
                $profic_8=$_POST['profic_8'];
                
                
                $prof_mem_det =$_POST['prof_mem_det'];
                $prof_mem_det =str_replace("'", "\'", $prof_mem_det);
                $other_mem_det =$_POST['other_mem_det'];
                $other_mem_det =str_replace("'", "\'", $other_mem_det);
                
                $Extracurricular = $_POST['Extracurricular'];
                $Extracurricular =str_replace("'", "\'", $Extracurricular);
                $Father_Name     = $_POST['Father_Name'];
                $Father_Name =str_replace("'", "\'", $Father_Name);
                $Mother_Name     = $_POST['Mother_Name'];
                $Mother_Name =str_replace("'", "\'", $Mother_Name);
                $Spouse_name     = $_POST['Spouse_name'];
                $Spouse_name =str_replace("'", "\'", $Spouse_name);
                $Spouse_Occupation   = $_POST['Spouse_Occupation'];
                $Spouse_Occupation =str_replace("'", "\'", $Spouse_Occupation);
                $Blood_grp       = $_POST['Blood_grp'];
                $Postal_code     = $_POST['Postal_code'];
                $STD_Code        = $_POST['STD_Code'];
                $initial_salary  = $_POST['initial_salary'];
                $increment_salary= $_POST['increment_salary'];
                $GPM             = $_POST['GPM'];
                $Joining_Date    = $_POST['Joining_Date'];
                $add_resp        = $_POST['add_resp'];
                $add_resp =str_replace("'", "\'", $add_resp);
               
                $PG_deg          = $_POST['PG_deg'];
                $PG_deg =str_replace("'", "\'", $PG_deg);
                $UG_deg          = $_POST['UG_deg'];
                $UG_deg =str_replace("'", "\'", $UG_deg);
                $Phy_Chl         = $_POST['Phy_Chl'];
                


                $Schl_Qual_1     = $_POST['Schl_Qual_1'];
                $Schl_name_1     = $_POST['Schl_name_1'];
                $Schl_name_1 =str_replace("'", "\'", $Schl_name_1);
                $Schl_mode_1     = $_POST['Schl_mode_1'];
                $Schl_medium_1   = $_POST['Schl_medium_1'];
                $Schl_medium_1 =str_replace("'", "\'", $Schl_medium_1);
                $schl_per_1      = $_POST['schl_per_1'];
                $Schl_Qual_2     = $_POST['Schl_Qual_2'];
                $Schl_name_2     = $_POST['Schl_name_2'];
                $Schl_name_2 =str_replace("'", "\'", $Schl_name_2);
                $Schl_mode_2     = $_POST['Schl_mode_2'];
                $Schl_medium_2   = $_POST['Schl_medium_2'];
                $Schl_medium_2 =str_replace("'", "\'", $Schl_medium_2);
                $schl_per_2      = $_POST['schl_per_2'];
                


                $Category_1      = $_POST['Category_1'];
                $Deg_Name_1      = $_POST['Deg_Name_1'];
                $Deg_Name_1 =str_replace("'", "\'", $Deg_Name_1);
                $Specialization_1        = $_POST['Specialization_1'];
                $Specialization_1 =str_replace("'", "\'", $Specialization_1);
                $Year_of_passing_1       = $_POST['Year_of_passing_1'];
                $Name_of_the_college_1       = $_POST['Name_of_the_college_1'];
                $Name_of_the_college_1 =str_replace("'", "\'", $Name_of_the_college_1);
                $Name_of_the_University_1        = $_POST['Name_of_the_University_1'];
                $Name_of_the_University_1 =str_replace("'", "\'", $Name_of_the_University_1);
                $Percentage_1        = $_POST['Percentage_1'];
                $Class_Obtained_1        = $_POST['Class_Obtained_1'];
                $Clg_mode_1      = $_POST['Clg_mode_1'];
                $Clg_medium_1        = $_POST['Clg_medium_1'];
                $Clg_medium_1 =str_replace("'", "\'", $Clg_medium_1);

                $Category_2      = $_POST['Category_2'];
                $Deg_Name_2      = $_POST['Deg_Name_2'];
                $Deg_Name_2 =str_replace("'", "\'", $Deg_Name_2);
                $Specialization_2        = $_POST['Specialization_2'];
                $Specialization_2 =str_replace("'", "\'", $Specialization_2);
                $Year_of_passing_2       = $_POST['Year_of_passing_2'];
                $Name_of_the_college_2       = $_POST['Name_of_the_college_2'];
                $Name_of_the_college_2 =str_replace("'", "\'", $Name_of_the_college_2);
                $Name_of_the_University_2        = $_POST['Name_of_the_University_2'];
                $Name_of_the_University_2 =str_replace("'", "\'", $Name_of_the_University_2);
                $Percentage_2        = $_POST['Percentage_2'];
                $Class_Obtained_2        = $_POST['Class_Obtained_2'];
                $Clg_mode_2      = $_POST['Clg_mode_2'];
                $Clg_medium_2        = $_POST['Clg_medium_2'];
                $Clg_medium_2 =str_replace("'", "\'", $Clg_medium_2);


                $Category_3      = $_POST['Category_3'];
                $Deg_Name_3      = $_POST['Deg_Name_3'];
                $Deg_Name_3 =str_replace("'", "\'", $Deg_Name_3);
                $Specialization_3        = $_POST['Specialization_3'];
                $Specialization_3 =str_replace("'", "\'", $Specialization_3);
                $Year_of_passing_3       = $_POST['Year_of_passing_3'];
                $Name_of_the_college_3       = $_POST['Name_of_the_college_3'];
                $Name_of_the_college_3 =str_replace("'", "\'", $Name_of_the_college_3);
                $Name_of_the_University_3        = $_POST['Name_of_the_University_3'];
                $Name_of_the_University_3 =str_replace("'", "\'", $Name_of_the_University_3);
                $Percentage_3        = $_POST['Percentage_3'];
                $Class_Obtained_3        = $_POST['Class_Obtained_3'];
                $Clg_mode_3      = $_POST['Clg_mode_3'];
                $Clg_medium_3        = $_POST['Clg_medium_3'];
                $Clg_medium_3 =str_replace("'", "\'", $Clg_medium_3);

                $Category_4      = $_POST['Category_4'];
                $Deg_Name_4      = $_POST['Deg_Name_4'];
                $Deg_Name_4 =str_replace("'", "\'", $Deg_Name_4);
                $Specialization_4        = $_POST['Specialization_4'];
                $Specialization_4 =str_replace("'", "\'", $Specialization_4);
                $Year_of_passing_4       = $_POST['Year_of_passing_4'];
                $Name_of_the_college_4       = $_POST['Name_of_the_college_4'];
                $Name_of_the_college_4 =str_replace("'", "\'", $Name_of_the_college_4);
                $Name_of_the_University_4        = $_POST['Name_of_the_University_4'];
                $Name_of_the_University_4 =str_replace("'", "\'", $Name_of_the_University_4);
                $Percentage_4        = $_POST['Percentage_4'];
                $Class_Obtained_4        = $_POST['Class_Obtained_4'];
                $Clg_mode_4      = $_POST['Clg_mode_4'];
                $Clg_medium_4        = $_POST['Clg_medium_4'];
                $Clg_medium_4 =str_replace("'", "\'", $Clg_medium_4);


                $Category_5      = $_POST['Category_5'];
                $Deg_Name_5      = $_POST['Deg_Name_5'];
                $Deg_Name_5 =str_replace("'", "\'", $Deg_Name_5);
                $Specialization_5        = $_POST['Specialization_5'];
                $Specialization_5 =str_replace("'", "\'", $Specialization_5);
                $Year_of_passing_5       = $_POST['Year_of_passing_5'];
                $Name_of_the_college_5       = $_POST['Name_of_the_college_5'];
                $Name_of_the_college_5 =str_replace("'", "\'", $Name_of_the_college_5);
                $Name_of_the_University_5        = $_POST['Name_of_the_University_5'];
                $Name_of_the_University_5 =str_replace("'", "\'", $Name_of_the_University_5);
                $Percentage_5        = $_POST['Percentage_5'];
                $Class_Obtained_5        = $_POST['Class_Obtained_5'];
                $Clg_mode_5      = $_POST['Clg_mode_5'];
                $Clg_medium_5        = $_POST['Clg_medium_5'];
                $Clg_medium_5 =str_replace("'", "\'", $Clg_medium_5);


                $Category_6      = $_POST['Category_6'];
                $Deg_Name_6      = $_POST['Deg_Name_6'];
                $Deg_Name_6 =str_replace("'", "\'", $Deg_Name_6);
                $Specialization_6        = $_POST['Specialization_6'];
                $Specialization_6 =str_replace("'", "\'", $Specialization_6);
                $Year_of_passing_6       = $_POST['Year_of_passing_6'];
                $Name_of_the_college_6       = $_POST['Name_of_the_college_6'];
                $Name_of_the_college_6 =str_replace("'", "\'", $Name_of_the_college_6);
                $Name_of_the_University_6        = $_POST['Name_of_the_University_6'];
                $Name_of_the_University_6 =str_replace("'", "\'", $Name_of_the_University_6);
                $Percentage_6        = $_POST['Percentage_6'];
                $Class_Obtained_6        = $_POST['Class_Obtained_6'];
                $Clg_mode_6      = $_POST['Clg_mode_6'];
                $Clg_medium_6        = $_POST['Clg_medium_6'];
                $Clg_medium_6 =str_replace("'", "\'", $Clg_medium_6);


                $Category_7      = $_POST['Category_7'];
                $Deg_Name_7      = $_POST['Deg_Name_7'];
                $Deg_Name_7 =str_replace("'", "\'", $Deg_Name_7);
                $Specialization_7        = $_POST['Specialization_7'];
                $Specialization_7 =str_replace("'", "\'", $Specialization_7);
                $Year_of_passing_7       = $_POST['Year_of_passing_7'];
                $Name_of_the_college_7       = $_POST['Name_of_the_college_7'];
                $Name_of_the_college_7 =str_replace("'", "\'", $Name_of_the_college_7);
                $Name_of_the_University_7        = $_POST['Name_of_the_University_7'];
                $Name_of_the_University_7 =str_replace("'", "\'", $Name_of_the_University_7);
                $Percentage_7        = $_POST['Percentage_7'];
                $Class_Obtained_7        = $_POST['Class_Obtained_7'];
                $Clg_mode_7      = $_POST['Clg_mode_7'];
                $Clg_medium_7        = $_POST['Clg_medium_7'];
                $Clg_medium_7 =str_replace("'", "\'", $Clg_medium_7);


                $Specialization_area = $_POST['Specialization_area'];
                $Specialization_area =str_replace("'", "\'", $Specialization_area);
                $Add_Qual=$_POST['Add_Qual'];
                $Add_Qual =str_replace("'", "\'", $Add_Qual);
               

                


                $Clg_Name_1=$_POST['Clg_Name_1'];
                $Clg_Name_1 =str_replace("'", "\'", $Clg_Name_1);
                $Designation_1=$_POST['Designation_1'];
                $Designation_1 =str_replace("'", "\'", $Designation_1);
                $Joining_Date_1=$_POST['Joining_Date_1'];
                $Rel_Cur_Date_1=$_POST['Rel_Cur_Date_1'];
                $Work_type_1=$_POST['Work_type_1'];
                $Salary_drawn_1=$_POST['Salary_drawn_1'];

                $Clg_Name_2=$_POST['Clg_Name_2'];
                $Clg_Name_2 =str_replace("'", "\'", $Clg_Name_2);
                $Designation_2=$_POST['Designation_2'];
                $Designation_2 =str_replace("'", "\'", $Designation_2);
                $Joining_Date_2=$_POST['Joining_Date_2'];
                $Rel_Cur_Date_2=$_POST['Rel_Cur_Date_2'];
                $Work_type_2=$_POST['Work_type_2'];
                $Salary_drawn_2=$_POST['Salary_drawn_2'];


                $Clg_Name_3=$_POST['Clg_Name_3'];
                $Clg_Name_3 =str_replace("'", "\'", $Clg_Name_3);
                $Designation_3=$_POST['Designation_3'];
                $Designation_3 =str_replace("'", "\'", $Designation_3);
                $Joining_Date_3=$_POST['Joining_Date_3'];
                $Rel_Cur_Date_3=$_POST['Rel_Cur_Date_3'];
                $Work_type_3=$_POST['Work_type_3'];
                $Salary_drawn_3=$_POST['Salary_drawn_3'];


                $Clg_Name_4=$_POST['Clg_Name_4'];
                $Clg_Name_4 =str_replace("'", "\'", $Clg_Name_4);
                $Designation_4=$_POST['Designation_4'];
                $Designation_4 =str_replace("'", "\'", $Designation_4);
                $Joining_Date_4=$_POST['Joining_Date_4'];
                $Rel_Cur_Date_4=$_POST['Rel_Cur_Date_4'];
                $Work_type_4=$_POST['Work_type_4'];
                $Salary_drawn_4=$_POST['Salary_drawn_4'];


                $Clg_Name_5=$_POST['Clg_Name_5'];
                $Clg_Name_5 =str_replace("'", "\'", $Clg_Name_5);
                $Designation_5=$_POST['Designation_5'];
                $Designation_5 =str_replace("'", "\'", $Designation_5);
                $Joining_Date_5=$_POST['Joining_Date_5'];
                $Rel_Cur_Date_5=$_POST['Rel_Cur_Date_5'];
                $Work_type_5=$_POST['Work_type_5'];
                $Salary_drawn_5=$_POST['Salary_drawn_5'];

                $Clg_Name_6=$_POST['Clg_Name_6'];
                $Clg_Name_6 =str_replace("'", "\'", $Clg_Name_6);
                $Designation_6=$_POST['Designation_6'];
                $Designation_6 =str_replace("'", "\'", $Designation_6);
                $Joining_Date_6=$_POST['Joining_Date_6'];
                $Rel_Cur_Date_6=$_POST['Rel_Cur_Date_6'];
                $Work_type_6=$_POST['Work_type_6'];
                $Salary_drawn_6=$_POST['Salary_drawn_6'];

                $Clg_Name_7=$_POST['Clg_Name_7'];
                $Clg_Name_7 =str_replace("'", "\'", $Clg_Name_7);
                $Designation_7=$_POST['Designation_7'];
                $Designation_7 =str_replace("'", "\'", $Designation_7);
                $Joining_Date_7=$_POST['Joining_Date_7'];
                $Rel_Cur_Date_7=$_POST['Rel_Cur_Date_7'];
                $Work_type_7=$_POST['Work_type_7'];
                $Salary_drawn_7=$_POST['Salary_drawn_7'];                       
                                        

                

                $Org_Name_1=$_POST['Org_Name_1'];
                $Org_Name_1 =str_replace("'", "\'", $Org_Name_1);
                $DesignationIN_1=$_POST['DesignationIN_1'];
                $DesignationIN_1 =str_replace("'", "\'", $DesignationIN_1);
                $Nature_of_work_1=$_POST['Nature_of_work_1'];
                $Joining_DateIN_1=$_POST['Joining_DateIN_1'];
                $Rel_Date_1=$_POST['Rel_Date_1'];

                $Org_Name_2=$_POST['Org_Name_2'];
                $Org_Name_2 =str_replace("'", "\'", $Org_Name_2);
                $DesignationIN_2=$_POST['DesignationIN_2'];
                $DesignationIN_2 =str_replace("'", "\'", $DesignationIN_2);
                $Nature_of_work_2=$_POST['Nature_of_work_2'];
                $Joining_DateIN_2=$_POST['Joining_DateIN_2'];
                $Rel_Date_2=$_POST['Rel_Date_2'];
                
                $Org_Name_3=$_POST['Org_Name_3'];
                $Org_Name_3 =str_replace("'", "\'", $Org_Name_3);
                $DesignationIN_3=$_POST['DesignationIN_3'];
                $DesignationIN_3 =str_replace("'", "\'", $DesignationIN_3);
                $Nature_of_work_3=$_POST['Nature_of_work_3'];
                $Joining_DateIN_3=$_POST['Joining_DateIN_3'];
                $Rel_Date_3=$_POST['Rel_Date_3'];
                
                $Org_Name_4=$_POST['Org_Name_4'];
                $Org_Name_4 =str_replace("'", "\'", $Org_Name_4);
                $DesignationIN_4=$_POST['DesignationIN_4'];
                $DesignationIN_4 =str_replace("'", "\'", $DesignationIN_4);
                $Nature_of_work_4=$_POST['Nature_of_work_4'];
                $Joining_DateIN_4=$_POST['Joining_DateIN_4'];
                $Rel_Date_4=$_POST['Rel_Date_4'];
                
                $Org_Name_5=$_POST['Org_Name_5'];
                $Org_Name_5 =str_replace("'", "\'", $Org_Name_5);
                $DesignationIN_5=$_POST['DesignationIN_5'];
                $DesignationIN_5 =str_replace("'", "\'", $DesignationIN_5);
                $Nature_of_work_5=$_POST['Nature_of_work_5'];
                $Joining_DateIN_5=$_POST['Joining_DateIN_5'];
                $Rel_Date_5=$_POST['Rel_Date_5'];


               

                $Mem_Name_1=$_POST['Mem_Name_1'];
                $Rel_1=$_POST['Rel_1'];
                $DOB_1=$_POST['DOB_1'];
                $HEduQual_1=$_POST['HEduQual_1'];                
                $Emp_status_1=$_POST['Emp_status_1'];                
                $Inc_mont_1=$_POST['Inc_mont_1'];
                $Mem_Name_1 =str_replace("'", "\'", $Mem_Name_1);
                $HEduQual_1 =str_replace("'", "\'", $HEduQual_1);
                $Emp_status_1 =str_replace("'", "\'", $Emp_status_1);
                $Rel_1 =str_replace("'", "\'", $Rel_1);


                $Mem_Name_2=$_POST['Mem_Name_2'];
                $Rel_2=$_POST['Rel_2'];
                $DOB_2=$_POST['DOB_2'];
                $HEduQual_2=$_POST['HEduQual_2'];
                $Emp_status_2=$_POST['Emp_status_2'];
                $Inc_mont_2=$_POST['Inc_mont_2'];
                $Mem_Name_2 =str_replace("'", "\'", $Mem_Name_2);
                $HEduQual_2 =str_replace("'", "\'", $HEduQual_2);
                $Emp_status_2 =str_replace("'", "\'", $Emp_status_2);
                $Rel_2 =str_replace("'", "\'", $Rel_2);


                $Mem_Name_3=$_POST['Mem_Name_3'];
                $Rel_3=$_POST['Rel_3'];
                $DOB_3=$_POST['DOB_3'];
                $HEduQual_3=$_POST['HEduQual_3'];
                $Emp_status_3=$_POST['Emp_status_3'];
                $Inc_mont_3=$_POST['Inc_mont_3'];
                $Mem_Name_3 =str_replace("'", "\'", $Mem_Name_3);
                $HEduQual_3 =str_replace("'", "\'", $HEduQual_3);
                $Emp_status_3 =str_replace("'", "\'", $Emp_status_3);
                $Rel_3 =str_replace("'", "\'", $Rel_3);

                $Mem_Name_4=$_POST['Mem_Name_4'];
                $Rel_4=$_POST['Rel_4'];
                $DOB_4=$_POST['DOB_4'];
                $HEduQual_4=$_POST['HEduQual_4'];
                $Emp_status_4=$_POST['Emp_status_4'];
                $Inc_mont_4=$_POST['Inc_mont_4'];
                $Mem_Name_4 =str_replace("'", "\'", $Mem_Name_4);
                $HEduQual_4 =str_replace("'", "\'", $HEduQual_4);
                $Emp_status_4 =str_replace("'", "\'", $Emp_status_4);
                $Rel_4 =str_replace("'", "\'", $Rel_4);

                $Mem_Name_5=$_POST['Mem_Name_5'];
                $Rel_5=$_POST['Rel_5'];
                $DOB_5=$_POST['DOB_5'];
                $HEduQual_5=$_POST['HEduQual_5'];
                $Emp_status_5=$_POST['Emp_status_5'];
                $Inc_mont_5=$_POST['Inc_mont_5'];
                $Mem_Name_5 =str_replace("'", "\'", $Mem_Name_5);
                $HEduQual_5 =str_replace("'", "\'", $HEduQual_5);
                $Emp_status_5 =str_replace("'", "\'", $Emp_status_5);
                $Rel_5 =str_replace("'", "\'", $Rel_5);

                $Mem_Name_6=$_POST['Mem_Name_6'];
                $Rel_6=$_POST['Rel_6'];
                $DOB_6=$_POST['DOB_6'];
                $HEduQual_6=$_POST['HEduQual_6'];
                $Emp_status_6=$_POST['Emp_status_6'];
                $Inc_mont_6=$_POST['Inc_mont_6'];
                $Mem_Name_6 =str_replace("'", "\'", $Mem_Name_6);
                $HEduQual_6 =str_replace("'", "\'", $HEduQual_6);
                $Emp_status_6 =str_replace("'", "\'", $Emp_status_6);
                $Rel_6 =str_replace("'", "\'", $Rel_6);

                $Mem_Name_7=$_POST['Mem_Name_7'];
                $Rel_7=$_POST['Rel_7'];
                $DOB_7=$_POST['DOB_7'];
                $HEduQual_7=$_POST['HEduQual_7'];
                $Emp_status_7=$_POST['Emp_status_7'];
                $Inc_mont_7=$_POST['Inc_mont_7'];
                $Mem_Name_7 =str_replace("'", "\'", $Mem_Name_7);
                $HEduQual_7 =str_replace("'", "\'", $HEduQual_7);
                $Emp_status_7 =str_replace("'", "\'", $Emp_status_7);
                $Rel_7 =str_replace("'", "\'", $Rel_7);

                $Mem_Name_8=$_POST['Mem_Name_8'];
                $Rel_8=$_POST['Rel_8'];
                $DOB_8=$_POST['DOB_8'];
                $HEduQual_8=$_POST['HEduQual_8'];
                $Emp_status_8=$_POST['Emp_status_8'];
                $Inc_mont_8=$_POST['Inc_mont_8'];
                $Mem_Name_8 =str_replace("'", "\'", $Mem_Name_8);
                $HEduQual_8 =str_replace("'", "\'", $HEduQual_8);
                $Emp_status_8 =str_replace("'", "\'", $Emp_status_8);
                $Rel_8 =str_replace("'", "\'", $Rel_8);

                $Mem_Name_9=$_POST['Mem_Name_9'];
                $Rel_9=$_POST['Rel_9'];
                $DOB_9=$_POST['DOB_9'];
                $HEduQual_9=$_POST['HEduQual_9'];
                $Emp_status_9=$_POST['Emp_status_9'];
                $Inc_mont_9=$_POST['Inc_mont_9'];
                $Mem_Name_9 =str_replace("'", "\'", $Mem_Name_9);
                $HEduQual_9 =str_replace("'", "\'", $HEduQual_9);
                $Emp_status_9 =str_replace("'", "\'", $Emp_status_9);
                $Rel_9 =str_replace("'", "\'", $Rel_9);



				$check = mysqli_query($con, "SELECT * FROM faculty_basic_details WHERE ID='$ID'");
				if(mysqli_num_rows($check) == 0){
					/*if($pass1 == $pass2){
						/*$pass = md5($pass1)
						$pass = $pass1;*/
						$insert = mysqli_query($con, "INSERT INTO faculty_basic_details(prof_img,prof_url,ID, name, Gender, DOB, Position, Mailid, Qualification, Department, Reg_Adj, Com_Add, Per_Add, Dist, Mob_No, Community, PAN_No, Passport_No,Aadhar_No,Marital_status ,Birth_place ,Religion ,Blood_grp ,Catholic,Caste,Lang_Known_1,Extracurricular,Father_Name,Mother_Name,Spouse_name,Spouse_Occupation,Postal_code,STD_Code,GPM,Joining_Date,PG_deg,UG_deg,Phy_Chl,Schl_Qual_1,Schl_name_1,Schl_mode_1,Schl_medium_1,schl_per_1,Schl_Qual_2,Schl_name_2,Schl_mode_2,Schl_medium_2,schl_per_2,Category_1,Deg_Name_1,Specialization_1,Year_of_passing_1,Name_of_the_college_1,Name_of_the_University_1,Percentage_1,Class_Obtained_1,Clg_mode_1,Clg_medium_1,Category_2,Deg_Name_2,Specialization_2,Year_of_passing_2,Name_of_the_college_2,Name_of_the_University_2,Percentage_2,Class_Obtained_2,Clg_mode_2,Clg_medium_2,Category_3,Deg_Name_3,Specialization_3,Year_of_passing_3,Name_of_the_college_3,Name_of_the_University_3,Percentage_3,Class_Obtained_3,Clg_mode_3,Clg_medium_3,Category_4,Deg_Name_4,Specialization_4,Year_of_passing_4,Name_of_the_college_4,Name_of_the_University_4,Percentage_4,Class_Obtained_4,Clg_mode_4,Clg_medium_4,
Category_5,Deg_Name_5,Specialization_5,Year_of_passing_5,Name_of_the_college_5,Name_of_the_University_5,Percentage_5,Class_Obtained_5,Clg_mode_5,Clg_medium_5,
Category_6,Deg_Name_6,Specialization_6,Year_of_passing_6,Name_of_the_college_6,Name_of_the_University_6,Percentage_6,Class_Obtained_6,Clg_mode_6,Clg_medium_6,
Category_7,Deg_Name_7,Specialization_7,Year_of_passing_7,Name_of_the_college_7,Name_of_the_University_7,Percentage_7,Class_Obtained_7,Clg_mode_7,Clg_medium_7,Specialization_area,Add_Qual,Clg_Name_1,Designation_1,Joining_Date_1,Rel_Cur_Date_1,
Work_type_1,Salary_drawn_1,Clg_Name_2,Designation_2,Joining_Date_2,Rel_Cur_Date_2,
Work_type_2,Salary_drawn_2,
Clg_Name_3,Designation_3,Joining_Date_3,Rel_Cur_Date_3,
Work_type_3,Salary_drawn_3,
Clg_Name_4,Designation_4,Joining_Date_4,Rel_Cur_Date_4,
Work_type_4,Salary_drawn_4,
Clg_Name_5,Designation_5,Joining_Date_5,Rel_Cur_Date_5,
Work_type_5,Salary_drawn_5,
Clg_Name_6,Designation_6,Joining_Date_6,Rel_Cur_Date_6,
Work_type_6,Salary_drawn_6,
Clg_Name_7,Designation_7,Joining_Date_7,Rel_Cur_Date_7,
Work_type_7,Salary_drawn_7,
Org_Name_1 , DesignationIN_1 ,Nature_of_work_1 ,Joining_DateIN_1,
Rel_Date_1,
Org_Name_2 , DesignationIN_2 ,Nature_of_work_2 ,Joining_DateIN_2 ,
Rel_Date_2 ,
Mem_Name_1 ,Rel_1 , DOB_1 ,HEduQual_1 ,
Emp_status_1 ,Inc_mont_1 ,
Mem_Name_2 ,Rel_2 , DOB_2 ,HEduQual_2 ,
Emp_status_2 ,Inc_mont_2 ,
Mem_Name_3 ,Rel_3 , DOB_3  ,HEduQual_3 ,
Emp_status_3 ,Inc_mont_3 ,
Mem_Name_4 ,Rel_4 , DOB_4 ,HEduQual_4 ,
Emp_status_4 ,Inc_mont_4 ,
Mem_Name_5 ,Rel_5 , DOB_5  ,HEduQual_5 ,
Emp_status_5 ,Inc_mont_5 ,
Mem_Name_6 ,Rel_6 , DOB_6 ,HEduQual_6 ,
Emp_status_6 ,Inc_mont_6 ,
Mem_Name_7 ,Rel_7 , DOB_7  ,HEduQual_7 ,
Emp_status_7 ,Inc_mont_7 ,
Mem_Name_8 ,Rel_8 , DOB_8 ,HEduQual_8 ,
Emp_status_8 ,Inc_mont_8 ,
Mem_Name_9 ,Rel_9 , DOB_9  ,HEduQual_9 ,
Emp_status_9 ,Inc_mont_9 ,emg_mob_no ,landline_no ,mot_ton ,
Old_Add ,dalit ,iob_acc_no ,
initial_salary ,increment_salary ,add_resp ,diocese_name ,
church_name_place ,Email,Lang_Known_2,Lang_Known_3,Lang_Known_4,
Lang_Known_5,Lang_Known_6,Lang_Known_7,Lang_Known_8,profic_1,profic_2,profic_3,profic_4,profic_5,profic_6,profic_7,profic_8,prof_mem_det,other_mem_det,Org_Name_3 , DesignationIN_3 ,Nature_of_work_3 ,Joining_DateIN_3,Rel_Date_3,Org_Name_4 , DesignationIN_4 ,Nature_of_work_4 ,Joining_DateIN_4,
Rel_Date_4,Org_Name_5 , DesignationIN_5 ,Nature_of_work_5 ,Joining_DateIN_5,
Rel_Date_5
)

VALUES('$fileName','$prof_url','$ID','$name', '$Gender', '$DOB', '$Position', '$Mailid', '$Qualification', '$dept', '$Reg_Adj', '$Com_Add', '$Per_Add', '$Dist' ,'$Mob_No','$Community', '$PAN_No','$Passport_No','$Aadhar_No' ,'$Marital_status' ,'$Birth_place','$Religion ','$Blood_grp','$Catholic','$Caste','$Lang_Known_1','$Extracurricular','$Father_Name','$Mother_Name','$Spouse_name','$Spouse_Occupation','$Postal_code','$STD_Code','$GPM','$Joining_Date','$PG_deg','$UG_deg','$Phy_Chl','$Schl_Qual_1','$Schl_name_1','$Schl_mode_1','$Schl_medium_1','$schl_per_1','$Schl_Qual_2','$Schl_name_2','$Schl_mode_2','$Schl_medium_2','$schl_per_2','$Category_1','$Deg_Name_1','$Specialization_1','$Year_of_passing_1','$Name_of_the_college_1','$Name_of_the_University_1','$Percentage_1','$Class_Obtained_1','$Clg_mode_1','$Clg_medium_1','$Category_2','$Deg_Name_2','$Specialization_2','$Year_of_passing_2','$Name_of_the_college_2','$Name_of_the_University_2','$Percentage_2','$Class_Obtained_2','$Clg_mode_2','$Clg_medium_2','$Category_3','$Deg_Name_3','$Specialization_3','$Year_of_passing_3','$Name_of_the_college_3','$Name_of_the_University_3','$Percentage_3','$Class_Obtained_3','$Clg_mode_3','$Clg_medium_3','$Category_4','$Deg_Name_4','$Specialization_4','$Year_of_passing_4','$Name_of_the_college_4','$Name_of_the_University_4','$Percentage_4','$Class_Obtained_4','$Clg_mode_4','$Clg_medium_4','$Category_5','$Deg_Name_5','$Specialization_5','$Year_of_passing_5','$Name_of_the_college_5','$Name_of_the_University_5','$Percentage_5','$Class_Obtained_5','$Clg_mode_5','$Clg_medium_5','$Category_6','$Deg_Name_6','$Specialization_6','$Year_of_passing_6','$Name_of_the_college_6','$Name_of_the_University_6','$Percentage_6','$Class_Obtained_6','$Clg_mode_6','$Clg_medium_6','$Category_7','$Deg_Name_7','$Specialization_7','$Year_of_passing_7','$Name_of_the_college_7','$Name_of_the_University_7','$Percentage_7','$Class_Obtained_7','$Clg_mode_7','$Clg_medium_7','$Specialization_area','$Add_Qual','$Clg_Name_1','$Designation_1','$Joining_Date_1','$Rel_Cur_Date_1','$Work_type_1','$Salary_drawn_1','$Clg_Name_2','$Designation_2','$Joining_Date_2','$Rel_Cur_Date_2','$Work_type_2','$Salary_drawn_2','$Clg_Name_3','$Designation_3','$Joining_Date_3','$Rel_Cur_Date_3','$Work_type_3','$Salary_drawn_3','$Clg_Name_4','$Designation_4','$Joining_Date_4','$Rel_Cur_Date_4','$Work_type_4','$Salary_drawn_4','$Clg_Name_5','$Designation_5','$Joining_Date_5','$Rel_Cur_Date_5','$Work_type_5','$Salary_drawn_5','$Clg_Name_6','$Designation_6','$Joining_Date_6','$Rel_Cur_Date_6','$Work_type_6','$Salary_drawn_6','$Clg_Name_7','$Designation_7','$Joining_Date_7','$Rel_Cur_Date_7','$Work_type_7','$Salary_drawn_7','$Org_Name_1' , '$DesignationIN_1' ,'$Nature_of_work_1' ,'$Joining_DateIN_1',
'$Rel_Date_1',
'$Org_Name_2' , '$DesignationIN_2' ,'$Nature_of_work_2' ,'$Joining_DateIN_2' ,
'$Rel_Date_2' ,
'$Mem_Name_1' ,'$Rel_1' , '$DOB_1' ,'$HEduQual_1' ,
'$Emp_status_1' ,'$Inc_mont_1' ,'$Mem_Name_2' ,'$Rel_2' , '$DOB_2' ,'$HEduQual_2' ,
'$Emp_status_2' ,'$Inc_mont_2' ,
'$Mem_Name_3' ,'$Rel_3' , '$DOB_3' ,'$HEduQual_3' ,
'$Emp_status_3' ,'$Inc_mont_3' ,
'$Mem_Name_4' ,'$Rel_4' , '$DOB_4' ,'$HEduQual_4' ,
'$Emp_status_4' ,'$Inc_mont_4' ,
'$Mem_Name_5' ,'$Rel_5' , '$DOB_5' ,'$HEduQual_5' ,
'$Emp_status_5' ,'$Inc_mont_5' ,
'$Mem_Name_6' ,'$Rel_6' , '$DOB_6' ,'$HEduQual_6' ,
'$Emp_status_6' ,'$Inc_mont_6' ,
'$Mem_Name_7' ,'$Rel_7' , '$DOB_7' ,'$HEduQual_7' ,
'$Emp_status_7' ,'$Inc_mont_7' ,
'$Mem_Name_7' ,'$Rel_7' , '$DOB_7' ,'$HEduQual_7' ,
'$Emp_status_7' ,'$Inc_mont_7' ,
'$Mem_Name_9' ,'$Rel_9' , '$DOB_9' ,'$HEduQual_9' ,
'$Emp_status_9' ,'$Inc_mont_9' , '$emg_mob_no' ,'$landline_no' ,'$mot_ton' ,'$Old_Add' ,'$dalit' ,'$iob_acc_no' ,'$initial_salary' ,'$increment_salary' ,'$add_resp' ,'$diocese_name' ,'$church_name_place' ,'$Email','$Lang_Known_2','$Lang_Known_3','$Lang_Known_4',
'$Lang_Known_5','$Lang_Known_6','$Lang_Known_7','$Lang_Known_8','$profic_1','$profic_2','$profic_3','$profic_4','$profic_5','$profic_6','$profic_7','$profic_8','$prof_mem_det','$other_mem_det','$Org_Name_3' , '$DesignationIN_3' ,'$Nature_of_work_3' ,'$Joining_DateIN_3','$Rel_Date_3','$Org_Name_4' , '$DesignationIN_4' ,'$Nature_of_work_4' ,'$Joining_DateIN_4',
'$Rel_Date_4','$Org_Name_5' , '$DesignationIN_5' ,'$Nature_of_work_5' ,'$Joining_DateIN_5',
'$Rel_Date_5'



)")

 or die(mysqli_error($con));
						if($insert){
							echo '<br><div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Employee Data saved successfully.</div>';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Oops! Employee data failed to save</div>';
						}
					 
				}else{
					echo '<br><div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>ID already exists</div>';
				}
			}
			
			?>


			<!--Photo upload files-->
			<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
            	<label class="col-sm-3 control-label">Profile Image Upload</label>
            	<div class="col-sm-6">
            	    <input type="file" name="file">&nbsp;<h5 style="font-weight:bold;">(OR)</h5>
                    <!--<button type="submit" name="add">UPLOAD</button>-->
                </div>
            </div>
   <!--         </form>-->
			<!--<form class="form-horizontal" action="" method="post">-->
				<div class="form-group">
					<label class="col-sm-3 control-label">Profile image URL</label>
					<div class="col-sm-6">
						<input type="text" name="prof_url" class="form-control" placeholder="Please Enter The complete https://www.image.in/link " >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">ID</label>
					<div class="col-sm-2">
						<input type="number" name="ID" class="form-control" placeholder="ID" required="required">
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-3 control-label">Name</label>
					<div class="col-sm-4">
						<input type="text" name="name" class="form-control" placeholder="name" required="required">
					</div>
				</div>

				<div class="form-group">
                    <label class="col-sm-3 control-label">Gender</label>
                    <div class="col-sm-2">
                        <select name="Gender" class="form-control" required="required">
                            <option value="">Select gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>
				<div class="form-group">
					<label class="col-sm-3 control-label">D.O.B</label>
					<div class="col-sm-3">
						<input type="date" name="DOB" class="form-control" placeholder="DOB" required="required">
					</div>
				</div>

				<!--<div class="form-group">
					<label class="col-sm-3 control-label">DOB</label>
					<div class="col-sm-4">
						<input type="text" name="DOB" class="input-group date form-control" date data-date-format="yyyy-mm-dd" placeholder="0000-00-00" >
					</div>
				</div>-->

				<div class="form-group">
					<label class="col-sm-3 control-label">Position</label>
					<div class="col-sm-4">
						<input type="text" name="Position" class="form-control" placeholder="Position" >
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Official Mail</label>
					<div class="col-sm-3">
						<input type="text" name="Mailid" class="form-control" placeholder="Official mail" >
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Personal Mail</label>
					<div class="col-sm-3">
						<input type="text" name="Email" class="form-control" placeholder="Personal mail" >
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Qualification</label>
					<div class="col-sm-2">
						<input type="text" name="Qualification" class="form-control" placeholder="Qualification" >
					</div>
				</div>


			 	<div class="form-group">
                    <label class="col-sm-3 control-label">Faculty type</label>
					<div class="col-sm-2">
						<select name="Reg_Adj" class="form-control">
							<option value> ----- </option>
                            <option value="Regular">Regular</option>
							<option value="Adjunct">Adjunct</option>
						</select>
					</div>
                </div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Communication Address</label>
					<div class="col-sm-8">
						<input type="text" name="Com_Add" class="form-control" placeholder="Communication address" >						
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Permanant Address</label>
					<div class="col-sm-8">
						<input type="text" name="Per_Add" class="form-control" placeholder="Permanent address" >						
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Old Address</label>
					<div class="col-sm-8">
						<input type="text" name="Old_Add" class="form-control" placeholder="Old address" >						
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Mother tongue</label>
					<div class="col-sm-4">
						<input type="text" name="mot_ton" class="form-control" placeholder="Mother tongue" >						
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">District</label>
					<div class="col-sm-4">
						<input type="text" name="Dist" class="form-control" placeholder="District" >
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-3 control-label">Mobile Number</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="Mob_No" pattern="[6-9]{1}[0-9]{9}" 
       						title="Phone number with 7-9 and remaing 9 digit with 0-9" placeholder="Mobile" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Emergency mobile Number</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="emg_mob_no" placeholder="Emergency number" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Landline number</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="landline_no"  placeholder="Landline no" >
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Community</label>
					<div class="col-sm-2">
						<select name="Community" class="form-control">
							<option value> ----- </option>
                            <option value="General-FC">General-FC</option>
							<option value="BC">BC</option>
							<option value="MBC">MBC</option>
							<option value="OBC">OBC</option>
							<option value="SC">SC</option>
							<option value="OC">OC</option>
						</select>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">IOB Account number</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="iob_acc_no"  placeholder="IOB Account number" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Permanent Account Number-PAN</label>
					<div class="col-sm-4">
						<input type="text" name="PAN_No" class="form-control" placeholder="PAN number" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}$">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Passport Number</label>
					<div class="col-sm-2">
						<input type="text" name="Passport_No" class="form-control" placeholder="Passport Number" >
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Aadhar Number</label>
					<div class="col-sm-2">
						<input type="text" name="Aadhar_No" class="form-control" placeholder="Aadhar Number" >
					</div>
				</div>

			

				<div class="form-group">
                    <label class="col-sm-3 control-label">Marital_status</label>
                    <div class="col-sm-2">
                        <select name="Marital_status" class="form-control">
                            <option value>-----</option>
                            <option value="Married">Married</option>
                            <option value="Unmarried">Unmarried</option>
                        </select>
                    </div>
                </div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Place of Birth</label>
					<div class="col-sm-3">
						<input type="text" name="Birth_place" class="form-control" placeholder="Place of Birth" >
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-3 control-label">Religion</label>
					<div class="col-sm-2">
						<select name="Religion" class="form-control">
							<option value> ----- </option>
                            <option value="Christian">Christian</option>
							<option value="Hindu">Hindu</option>
							<option value="Muslim">Muslim</option>
							<option value="Sikhism">Sikhism</option>
							<option value="Budshism">Buddhism</option>
							<option value="Jainism">Jainism</option>
							<option value="Others">Others</option>
						</select>
					</div>
				</div>

				<div class="form-group">
                    <label class="col-sm-3 control-label">Catholic</label>
                    <div class="col-sm-2">
                        <select name="Catholic" class="form-control">
                            <option value>-----</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
					<label class="col-sm-3 control-label">If Catholic, Mention the name of the diocese</label>
					<div class="col-sm-3">
						<input type="text" name="diocese_name" class="form-control" placeholder="Name of the diocese if catholic" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Church name and place</label>
					<div class="col-sm-3">
						<input type="text" name="church_name_place" class="form-control" placeholder="Church name and place" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Caste</label>
					<div class="col-sm-3">
						<input type="text" name="Caste" class="form-control" placeholder="Caste" >
					</div>
				</div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Dalit</label>
                    <div class="col-sm-2">
                        <select name="dalit" class="form-control">
                            <option value>-----</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>


				<!--<div class="form-group">-->
				<!--	<label class="col-sm-3 control-label">Languages Known</label>-->
				<!--	<div class="col-sm-4">-->
				<!--		<input type="text" name="Lang_Known_1" class="form-control" placeholder="Language1/Proficiency,Language2/Proficiency,..." title="Format For Entering(Language1/Proficiency,Language2/Proficiency,...)" >-->
				<!--	</div>-->
				<!--</div>-->
				
				<div class="form-group">
					<label class="col-sm-3 control-label">Languages Known</label>
					<div class="col-sm-2">
						<input type="text" name="Lang_Known_1" class="form-control" placeholder="Language 1">
					</div>
					<div class="col-xs-1 form-check">
					    <select name="profic_1" class="form-control">
                            <option value>-----</option>
                            <option value="R/W/S">R/W/S</option>
                            <option value="R/W">R/W</option>
                            <option value="W/S">W/S</option>
                            <option value="R/S">R/S</option>
                            <option value="R">R</option>
                            <option value="W">W</option>
                            <option value="S">S</option>
                            
                            
                        </select>
						
					</div>


				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"></label>
					<div class="col-sm-2">
						<input type="text" name="Lang_Known_2" class="form-control" placeholder="Language 2">
					</div>
					<div class="col-xs-1">
						<select name="profic_2" class="form-control">
                            <option value>-----</option>
                            <option value="R/W/S">R/W/S</option>
                            <option value="R/W">R/W</option>
                            <option value="W/S">W/S</option>
                            <option value="R/S">R/S</option>
                            <option value="R">R</option>
                            <option value="W">W</option>
                            <option value="S">S</option>
                            
                            
                        </select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"></label>
					<div class="col-sm-2">
						<input type="text" name="Lang_Known_3" class="form-control" placeholder="Language 3">
					</div>
					<div class="col-xs-1">
						<select name="profic_3" class="form-control">
                            <option value>-----</option>
                            <option value="R/W/S">R/W/S</option>
                            <option value="R/W">R/W</option>
                            <option value="W/S">W/S</option>
                            <option value="R/S">R/S</option>
                            <option value="R">R</option>
                            <option value="W">W</option>
                            <option value="S">S</option>
                            
                            
                        </select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"></label>
					<div class="col-sm-2">
						<input type="text" name="Lang_Known_4" class="form-control" placeholder="Language 4">
					</div>
					<div class="col-xs-1">
						<select name="profic_4" class="form-control">
                            <option value>-----</option>
                            <option value="R/W/S">R/W/S</option>
                            <option value="R/W">R/W</option>
                            <option value="W/S">W/S</option>
                            <option value="R/S">R/S</option>
                            <option value="R">R</option>
                            <option value="W">W</option>
                            <option value="S">S</option>
                            
                            
                        </select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"></label>
					<div class="col-sm-2">
						<input type="text" name="Lang_Known_5" class="form-control" placeholder="Language 5">
					</div>
					<div class="col-xs-1">
						<select name="profic_5" class="form-control">
                            <option value>-----</option>
                            <option value="R/W/S">R/W/S</option>
                            <option value="R/W">R/W</option>
                            <option value="W/S">W/S</option>
                            <option value="R/S">R/S</option>
                            <option value="R">R</option>
                            <option value="W">W</option>
                            <option value="S">S</option>
                            
                            
                        </select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"></label>
					<div class="col-sm-2">
						<input type="text" name="Lang_Known_6" class="form-control" placeholder="Language 6">
					</div>
					<div class="col-xs-1">
						<select name="profic_6" class="form-control">
                            <option value>-----</option>
                            <option value="R/W/S">R/W/S</option>
                            <option value="R/W">R/W</option>
                            <option value="W/S">W/S</option>
                            <option value="R/S">R/S</option>
                            <option value="R">R</option>
                            <option value="W">W</option>
                            <option value="S">S</option>
                            
                            
                        </select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"></label>
					<div class="col-sm-2">
						<input type="text" name="Lang_Known_7" class="form-control" placeholder="Language 7">
					</div>
					<div class="col-xs-1">
						<select name="profic_7" class="form-control">
                            <option value>-----</option>
                            <option value="R/W/S">R/W/S</option>
                            <option value="R/W">R/W</option>
                            <option value="W/S">W/S</option>
                            <option value="R/S">R/S</option>
                            <option value="R">R</option>
                            <option value="W">W</option>
                            <option value="S">S</option>
                            
                            
                        </select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"></label>
					<div class="col-sm-2">
						<input type="text" name="Lang_Known_8" class="form-control" placeholder="Language 8">
					</div>
					<div class="col-xs-1">
						<select name="profic_8" class="form-control">
                            <option value>-----</option>
                            <option value="R/W/S">R/W/S</option>
                            <option value="R/W">R/W</option>
                            <option value="W/S">W/S</option>
                            <option value="R/S">R/S</option>
                            <option value="R">R</option>
                            <option value="W">W</option>
                            <option value="S">S</option>
                            
                            
                        </select>
					</div>
				</div>
				
				


				<div class="form-group">
					<label class="col-sm-3 control-label">Extracurricular Activities</label>
					<div class="col-sm-3">
						<input type="text" name="Extracurricular" class="form-control" placeholder="Extracurricular" >
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Father Name</label>
					<div class="col-sm-3">
						<input type="text" name="Father_Name" class="form-control" placeholder="Father Name" >
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Mother Name</label>
					<div class="col-sm-3">
						<input type="text" name="Mother_Name" class="form-control" placeholder="Mother Name" >
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-3 control-label">Spouse Name</label>
					<div class="col-sm-3">
						<input type="text" name="Spouse_name" class="form-control" placeholder="Spouse Name" >
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Spouse Occupation</label>
					<div class="col-sm-3">
						<input type="text" name="Spouse_Occupation" class="form-control" placeholder="Spouse Occupation" >
					</div>
				</div>



				<div class="form-group">
					<label class="col-sm-3 control-label">Blood Group</label>
					<div class="col-sm-2">
						<select name="Blood_grp" class="form-control">
							<option value> ----- </option>
                            <option value="A+">A+</option>
							<option value="B+">B+</option>
							<option value="AB+">AB+</option>
							<option value="O+">O+</option>							
							<option value="A-">A-</option>
							<option value="B-">B-</option>
							<option value="AB-">AB-</option>
							<option value="O-">O-</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Postal Code</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="Postal_code" pattern="[1-9]{1}[0-9]{5}" 
       						title="Enter Pincode" placeholder="Postal Code">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">STD Code</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="STD_Code" title="Enter STD" placeholder="STD" >
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Initial salary</label>
					<div class="col-sm-4">
						<input type="number" class="form-control" name="initial_salary" title="Enter Monthly Pay" placeholder="Initial salary" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Increment salary</label>
					<div class="col-sm-4">
						<input type="number" class="form-control" name="increment_salary" title="Enter Monthly Pay" placeholder="Increment salary" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Gross Pay per Month</label>
					<div class="col-sm-4">
						<input type="number" class="form-control" name="GPM" title="Enter Monthly Pay" placeholder="Monthly Income" >
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Joining Date</label>
					<div class="col-sm-4">
						<input type="date" class="form-control" name="Joining_Date" title="College Join Date" placeholder="LICET JOINING DATE" >
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Additional responsibilities in college</label>
					<div class="col-sm-3">
						<input type="text" name="add_resp" class="form-control" placeholder="Additional responsibilities" >
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">UG Degree</label>
					<div class="col-sm-3">
						<input type="text" name="UG_deg" class="form-control" placeholder="UG degree" >
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-3 control-label">PG Degree</label>
					<div class="col-sm-3">
						<input type="text" name="PG_deg" class="form-control" placeholder="PG degree">
					</div>
				</div>

			    <div class="form-group">
                    <label class="col-sm-3 control-label">Physically  challenged</label>
                    <div class="col-sm-2">
                        <select name="Phy_Chl" class="form-control">
                            <option value>-----</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label">Professional Membership Details</label>
					<div class="col-sm-6">
						<input type="text" name="prof_mem_det" class="form-control" placeholder="Professional Membership" >
					</div>
				</div>
                    
                <div class="form-group">
                    <label class="col-sm-3 control-label">Other Membership Details</label>
					<div class="col-sm-6">
						<input type="text" name="other_mem_det" class="form-control" placeholder="Other Membership" >
					</div>
				</div>
				
				<br><br>

				<hr>
				<center><h3 style="text-align: center;font-family: monospace; color: #322d65; font-weight: bold;">School Details</h3></center>
				<hr>
				<br>


				<div>
				<!-- <center><h3>1</h3></center> -->
				<div class="form-group">
					<label class="col-sm-2 control-label">1.  School Qualification</label>
					<div class="col-sm-2">
						<select name="Schl_Qual_1" class="form-control">
							<option value> ----- </option>
                            <option value="10th">10th Grade</option>
							<option value="12th">12th Grade</option>
						</select>
					</div>
					<label class="col-sm-2 control-label">School Name</label>
					<div class="col-sm-2">
						<input type="text" name="Schl_name_1" class="form-control" placeholder="School Name" >
					</div>
					<label class="col-sm-2 control-label">School Mode</label>
					<div class="col-sm-2">
						<select name="Schl_mode_1" class="form-control">
							<option value> ----- </option>
                            <option value="State board">State Board</option>
							<option value="CBSE">CBSE</option>
							<option value="ICSE">ICSE</option>
							<option value="IB">IB</option>							
							<option value="IGCSE">IGCSE</option>
							<option value="Matriculation">Matriculation</option>
						</select>
					</div>
				</div>
				<div class="form-group">	
					<label class="col-sm-2 control-label">School Medium</label>
					<div class="col-sm-2">
						<input type="text" name="Schl_medium_1" class="form-control" placeholder="School Medium" >
					</div>
					<label class="col-sm-2 control-label">Percentage Scored</label>
					<div class="col-sm-2">				
						<input type="number" name="schl_per_1" class="form-control" placeholder="School Percentage" >
					</div>
				</div>
				</div>

				<br><br>
<!-- 
				Second School -->

				<div>
				<!-- <center><h3>1</h3></center> -->
				<div class="form-group">

					<label class="col-sm-2 control-label">2.  School Qualification</label>
					<div class="col-sm-2">
						<select name="Schl_Qual_2" class="form-control">
							<option value> ----- </option>
                            <option value="10th">10th Grade</option>
							<option value="12th">12th Grade</option>
						</select>
					</div>
					<label class="col-sm-2 control-label">School Name</label>
					<div class="col-sm-2">
						<input type="text" name="Schl_name_2" class="form-control" placeholder="School Name" >
					</div>
					<label class="col-sm-2 control-label">School Mode</label>
					<div class="col-sm-2">
						<select name="Schl_mode_2" class="form-control">
							<option value> ----- </option>
                            <option value="State board">State Board</option>
							<option value="CBSE">CBSE</option>
							<option value="ICSE">ICSE</option>
							<option value="IB">IB</option>							
							<option value="IGCSE">IGCSE</option>
							<option value="Matriculation">Matriculation</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">School Medium</label>
					<div class="col-sm-2">
						<input type="text" name="Schl_medium_2" class="form-control" placeholder="School Medium" >
					</div>
					<label class="col-sm-2 control-label">Percentage Scored</label>
					<div class="col-sm-2">				
						<input type="number" name="schl_per_2" class="form-control" placeholder="School Percentage" >
					</div>
				</div>
				</div>

				<br><br><br>
				<hr>
				<center><h3 style="text-align: center;font-family: monospace; color: #322d65; font-weight: bold;">College Details</h3></center>
				<hr>
				<br>


				<div>
				<!-- <center><h3>1</h3></center> -->
				<div class="form-group">

					<label class="col-sm-2 control-label">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Category</label>
					<div class="col-sm-2">
						<select name="Category_1" class="form-control">
							<option value=""> ----- </option>
                            <option value="Diploma">Diploma</option>
							<option value="Arts & Science">Arts & Science</option>
							<option value="Engineering">Engineering</option>
						</select>
					</div>
					<label class="col-sm-2 control-label">Degree Name</label>
					<div class="col-sm-2">
						<input type="text" name="Deg_Name_1" class="form-control" placeholder="Degree Name" >
					</div>
					<label class="col-sm-2 control-label">Specialization</label>
					<div class="col-sm-2">
						<input type="text" name="Specialization_1" class="form-control" placeholder="Specialization" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Year of Passing</label>
					<div class="col-sm-2">
						<input type="number" name="Year_of_passing_1" class="form-control" placeholder="Year of Passing">
					</div>
					<label class="col-sm-2 control-label">College Name</label>
					<div class="col-sm-2">
						<input type="text" name="Name_of_the_college_1" class="form-control" placeholder="College Name" >
					</div>
					<label class="col-sm-2 control-label">University Name</label>
					<div class="col-sm-2">
						<input type="text" name="Name_of_the_University_1" class="form-control" placeholder="University Name" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Percentage</label>
					<div class="col-sm-2">
						<input type="text" name="Percentage_1" class="form-control" placeholder="Percentage" >
					</div>
					<label class="col-sm-2 control-label">Class Obtained</label>
					<div class="col-sm-2">
						<select name="Class_Obtained_1" class="form-control">
							<option value> ----- </option>
                            <option value="First Class with Distinction">First Class with Distinction</option>
							<option value="First Class">First Class</option>
							<option value="Second Class">Second Class</option>
						</select>
					</div>
					<label class="col-sm-2 control-label">College Mode</label>
					<div class="col-sm-2">
						<select name="Clg_mode_1" class="form-control">
							<option value> ----- </option>
                            <option value="Regular">Regular</option>
							<option value="Correspondence">Correspondence</option>
						</select>
					</div>	
				</div>
				<div class="form-group">				
					<label class="col-sm-2 control-label">College Medium</label>
					<div class="col-sm-2">
						<input type="text" name="Clg_medium_1" class="form-control" placeholder="College Medium" >
					</div>
				</div>
				</div>
				<br><br>

				<div>
				<!-- <center><h3>1</h3></center> -->
				<div class="form-group">

					<label class="col-sm-2 control-label">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Category</label>
					<div class="col-sm-2">
						<select name="Category_2" class="form-control">
							<option value=""> ----- </option>
                            <option value="Diploma">Diploma</option>
							<option value="Arts & Science">Arts & Science</option>
							<option value="Engineering">Engineering</option>
						</select>
					</div>
					<label class="col-sm-2 control-label">Degree Name</label>
					<div class="col-sm-2">
						<input type="text" name="Deg_Name_2" class="form-control" placeholder="Degree Name" >
					</div>
					<label class="col-sm-2 control-label">Specialization</label>
					<div class="col-sm-2">
						<input type="text" name="Specialization_2" class="form-control" placeholder="Specialization" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Year of Passing</label>
					<div class="col-sm-2">
						<input type="number" name="Year_of_passing_2" class="form-control" placeholder="Year of Passing" >
					</div>
					<label class="col-sm-2 control-label">College Name</label>
					<div class="col-sm-2">
						<input type="text" name="Name_of_the_college_2" class="form-control" placeholder="College Name" >
					</div>
					<label class="col-sm-2 control-label">University Name</label>
					<div class="col-sm-2">
						<input type="text" name="Name_of_the_University_2" class="form-control" placeholder="University Name" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Percentage</label>
					<div class="col-sm-2">
						<input type="text" name="Percentage_2" class="form-control" placeholder="Percentage" >
					</div>
					<label class="col-sm-2 control-label">Class Obtained</label>
					<div class="col-sm-2">
						<select name="Class_Obtained_2" class="form-control">
							<option value> ----- </option>
                            <option value="First Class with Distinction">First Class with Distinction</option>
							<option value="First Class">First Class</option>
							<option value="Second Class">Second Class</option>
						</select>
					</div>
					<label class="col-sm-2 control-label">College Mode</label>
					<div class="col-sm-2">
						<select name="Clg_mode_2" class="form-control">
							<option value> ----- </option>
                            <option value="Regular">Regular</option>
							<option value="Correspondence">Correspondence</option>
						</select>
					</div>	
				</div>
				<div class="form-group">				
					<label class="col-sm-2 control-label">College Medium</label>
					<div class="col-sm-2">
						<input type="text" name="Clg_medium_2" class="form-control" placeholder="College Medium" >
					</div>
				</div>
				</div>
				<br><br>
				

				<div>
				<!-- <center><h3>1</h3></center> -->
				<div class="form-group">

					<label class="col-sm-2 control-label">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Category</label>
					<div class="col-sm-2">
						<select name="Category_3" class="form-control">
							<option value=""> ----- </option>
                            <option value="Diploma">Diploma</option>
							<option value="Arts & Science">Arts & Science</option>
							<option value="Engineering">Engineering</option>
						</select>
					</div>
					<label class="col-sm-2 control-label">Degree Name</label>
					<div class="col-sm-2">
						<input type="text" name="Deg_Name_3" class="form-control" placeholder="Degree Name" >
					</div>
					<label class="col-sm-2 control-label">Specialization</label>
					<div class="col-sm-2">
						<input type="text" name="Specialization_3" class="form-control" placeholder="Specialization" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Year of Passing</label>
					<div class="col-sm-2">
						<input type="number" name="Year_of_passing_3" class="form-control" placeholder="Year of Passing" >
					</div>
					<label class="col-sm-2 control-label">College Name</label>
					<div class="col-sm-2">
						<input type="text" name="Name_of_the_college_3" class="form-control" placeholder="College Name" >
					</div>
					<label class="col-sm-2 control-label">University Name</label>
					<div class="col-sm-2">
						<input type="text" name="Name_of_the_University_3" class="form-control" placeholder="University Name" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Percentage</label>
					<div class="col-sm-2">
						<input type="text" name="Percentage_3" class="form-control" placeholder="Percentage">
					</div>
					<label class="col-sm-2 control-label">Class Obtained</label>
					<div class="col-sm-2">
						<select name="Class_Obtained_3" class="form-control">
							<option value> ----- </option>
                            <option value="First Class with Distinction">First Class with Distinction</option>
							<option value="First Class">First Class</option>
							<option value="Second Class">Second Class</option>
						</select>
					</div>
					<label class="col-sm-2 control-label">College Mode</label>
					<div class="col-sm-2">
						<select name="Clg_mode_3" class="form-control">
							<option value> ----- </option>
                            <option value="Regular">Regular</option>
							<option value="Correspondence">Correspondence</option>
						</select>
					</div>	
				</div>
				<div class="form-group">				
					<label class="col-sm-2 control-label">College Medium</label>
					<div class="col-sm-2">
						<input type="text" name="Clg_medium_3" class="form-control" placeholder="College Medium" >
					</div>
				</div>
				</div>
				<br><br>

								<div>
				<!-- <center><h3>1</h3></center> -->
				<div class="form-group">

					<label class="col-sm-2 control-label">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Category</label>
					<div class="col-sm-2">
						<select name="Category_4" class="form-control">
							<option value=""> ----- </option>
                            <option value="Diploma">Diploma</option>
							<option value="Arts & Science">Arts & Science</option>
							<option value="Engineering">Engineering</option>
						</select>
					</div>
					<label class="col-sm-2 control-label">Degree Name</label>
					<div class="col-sm-2">
						<input type="text" name="Deg_Name_4" class="form-control" placeholder="Degree Name" >
					</div>
					<label class="col-sm-2 control-label">Specialization</label>
					<div class="col-sm-2">
						<input type="text" name="Specialization_4" class="form-control" placeholder="Specialization" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Year of Passing</label>
					<div class="col-sm-2">
						<input type="number" name="Year_of_passing_4" class="form-control" placeholder="Year of Passing" >
					</div>
					<label class="col-sm-2 control-label">College Name</label>
					<div class="col-sm-2">
						<input type="text" name="Name_of_the_college_4" class="form-control" placeholder="College Name" >
					</div>
					<label class="col-sm-2 control-label">University Name</label>
					<div class="col-sm-2">
						<input type="text" name="Name_of_the_University_4" class="form-control" placeholder="University Name">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Percentage</label>
					<div class="col-sm-2">
						<input type="text" name="Percentage_4" class="form-control" placeholder="Percentage" >
					</div>
					<label class="col-sm-2 control-label">Class Obtained</label>
					<div class="col-sm-2">
						<select name="Class_Obtained_4" class="form-control">
							<option value> ----- </option>
                            <option value="First Class with Distinction">First Class with Distinction</option>
							<option value="First Class">First Class</option>
							<option value="Second Class">Second Class</option>
						</select>
					</div>
					<label class="col-sm-2 control-label">College Mode</label>
					<div class="col-sm-2">
						<select name="Clg_mode_4" class="form-control">
							<option value> ----- </option>
                            <option value="Regular">Regular</option>
							<option value="Correspondence">Correspondence</option>
						</select>
					</div>	
				</div>
				<div class="form-group">				
					<label class="col-sm-2 control-label">College Medium</label>
					<div class="col-sm-2">
						<input type="text" name="Clg_medium_4" class="form-control" placeholder="College Medium" >
					</div>
				</div>
				</div>
				<br><br>

								<div>
				<!-- <center><h3>1</h3></center> -->
				<div class="form-group">

					<label class="col-sm-2 control-label">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Category</label>
					<div class="col-sm-2">
						<select name="Category_5" class="form-control">
							<option value=""> ----- </option>
                            <option value="Diploma">Diploma</option>
							<option value="Arts & Science">Arts & Science</option>
							<option value="Engineering">Engineering</option>
						</select>
					</div>
					<label class="col-sm-2 control-label">Degree Name</label>
					<div class="col-sm-2">
						<input type="text" name="Deg_Name_5" class="form-control" placeholder="Degree Name" >
					</div>
					<label class="col-sm-2 control-label">Specialization</label>
					<div class="col-sm-2">
						<input type="text" name="Specialization_5" class="form-control" placeholder="Specialization" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Year of Passing</label>
					<div class="col-sm-2">
						<input type="number" name="Year_of_passing_5" class="form-control" placeholder="Year of Passing" >
					</div>
					<label class="col-sm-2 control-label">College Name</label>
					<div class="col-sm-2">
						<input type="text" name="Name_of_the_college_5" class="form-control" placeholder="College Name" >
					</div>
					<label class="col-sm-2 control-label">University Name</label>
					<div class="col-sm-2">
						<input type="text" name="Name_of_the_University_5" class="form-control" placeholder="University Name" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Percentage</label>
					<div class="col-sm-2">
						<input type="text" name="Percentage_5" class="form-control" placeholder="Percentage" >
					</div>
					<label class="col-sm-2 control-label">Class Obtained</label>
					<div class="col-sm-2">
						<select name="Class_Obtained_5" class="form-control">
							<option value> ----- </option>
                            <option value="First Class with Distinction">First Class with Distinction</option>
							<option value="First Class">First Class</option>
							<option value="Second Class">Second Class</option>
						</select>
					</div>
					<label class="col-sm-2 control-label">College Mode</label>
					<div class="col-sm-2">
						<select name="Clg_mode_5" class="form-control">
							<option value> ----- </option>
                            <option value="Regular">Regular</option>
							<option value="Correspondence">Correspondence</option>
						</select>
					</div>	
				</div>
				<div class="form-group">				
					<label class="col-sm-2 control-label">College Medium</label>
					<div class="col-sm-2">
						<input type="text" name="Clg_medium_5" class="form-control" placeholder="College Medium" >
					</div>
				</div>
				</div>
				<br><br>

								<div>
				<!-- <center><h3>1</h3></center> -->
				<div class="form-group">

					<label class="col-sm-2 control-label">6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Category</label>
					<div class="col-sm-2">
						<select name="Category_6" class="form-control">
							<option value=""> ----- </option>
                            <option value="Diploma">Diploma</option>
							<option value="Arts & Science">Arts & Science</option>
							<option value="Engineering">Engineering</option>
						</select>
					</div>
					<label class="col-sm-2 control-label">Degree Name</label>
					<div class="col-sm-2">
						<input type="text" name="Deg_Name_6" class="form-control" placeholder="Degree Name">
					</div>
					<label class="col-sm-2 control-label">Specialization</label>
					<div class="col-sm-2">
						<input type="text" name="Specialization_6" class="form-control" placeholder="Specialization">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Year of Passing</label>
					<div class="col-sm-2">
						<input type="number" name="Year_of_passing_6" class="form-control" placeholder="Year of Passing">
					</div>
					<label class="col-sm-2 control-label">College Name</label>
					<div class="col-sm-2">
						<input type="text" name="Name_of_the_college_6" class="form-control" placeholder="College Name">
					</div>
					<label class="col-sm-2 control-label">University Name</label>
					<div class="col-sm-2">
						<input type="text" name="Name_of_the_University_6" class="form-control" placeholder="University Name" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Percentage</label>
					<div class="col-sm-2">
						<input type="text" name="Percentage_6" class="form-control" placeholder="Percentage" >
					</div>
					<label class="col-sm-2 control-label">Class Obtained</label>
					<div class="col-sm-2">
						<select name="Class_Obtained_6" class="form-control">
							<option value> ----- </option>
                            <option value="First Class with Distinction">First Class with Distinction</option>
							<option value="First Class">First Class</option>
							<option value="Second Class">Second Class</option>
						</select>
					</div>
					<label class="col-sm-2 control-label">College Mode</label>
					<div class="col-sm-2">
						<select name="Clg_mode_6" class="form-control">
							<option value> ----- </option>
                            <option value="Regular">Regular</option>
							<option value="Correspondence">Correspondence</option>
						</select>
					</div>	
				</div>
				<div class="form-group">				
					<label class="col-sm-2 control-label">College Medium</label>
					<div class="col-sm-2">
						<input type="text" name="Clg_medium_6" class="form-control" placeholder="College Medium" >
					</div>
				</div>
				</div>
				<br><br>

								<div>
				<!-- <center><h3>1</h3></center> -->
				<div class="form-group">

					<label class="col-sm-2 control-label">7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Category</label>
					<div class="col-sm-2">
						<select name="Category_7" class="form-control">
							<option value=""> ----- </option>
                            <option value="Diploma">Diploma</option>
							<option value="Arts & Science">Arts & Science</option>
							<option value="Engineering">Engineering</option>
						</select>
					</div>
					<label class="col-sm-2 control-label">Degree Name</label>
					<div class="col-sm-2">
						<input type="text" name="Deg_Name_7" class="form-control" placeholder="Degree Name" >
					</div>
					<label class="col-sm-2 control-label">Specialization</label>
					<div class="col-sm-2">
						<input type="text" name="Specialization_7" class="form-control" placeholder="Specialization" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Year of Passing</label>
					<div class="col-sm-2">
						<input type="number" name="Year_of_passing_7" class="form-control" placeholder="Year of Passing" >
					</div>
					<label class="col-sm-2 control-label">College Name</label>
					<div class="col-sm-2">
						<input type="text" name="Name_of_the_college_7" class="form-control" placeholder="College Name" >
					</div>
					<label class="col-sm-2 control-label">University Name</label>
					<div class="col-sm-2">
						<input type="text" name="Name_of_the_University_7" class="form-control" placeholder="University Name" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Percentage</label>
					<div class="col-sm-2">
						<input type="text" name="Percentage_7" class="form-control" placeholder="Percentage" >
					</div>
					<label class="col-sm-2 control-label">Class Obtained</label>
					<div class="col-sm-2">
						<select name="Class_Obtained_7" class="form-control">
							<option value> ----- </option>
                            <option value="First Class with Distinction">First Class with Distinction</option>
							<option value="First Class">First Class</option>
							<option value="Second Class">Second Class</option>
						</select>
					</div>
					<label class="col-sm-2 control-label">College Mode</label>
					<div class="col-sm-2">
						<select name="Clg_mode_7" class="form-control">
							<option value> ----- </option>
                            <option value="Regular">Regular</option>
							<option value="Correspondence">Correspondence</option>
						</select>
					</div>	
				</div>
				<div class="form-group">				
					<label class="col-sm-2 control-label">College Medium</label>
					<div class="col-sm-2">
						<input type="text" name="Clg_medium_7" class="form-control" placeholder="College Medium" >
					</div>
				</div>
				</div>
				<br><br>

				<div class="form-group">
                <label class="col-sm-2 control-label">Area of Speacialization </label>
                    <div class="col-sm-10">
                        <input type="text" name="Specialization_area" class="form-control"  placeholder="Area of Speacialization " >
                    </div>	
				</div>
			
				<div class="form-group">
				<label class="col-sm-2 control-label">Additional Qualification</label>
					<div class="col-sm-10">
						<input type="text" name="Add_Qual" class="form-control" placeholder="Additional Qualification" >
					</div>
				</div>	
				
				<br><br>
			
				<hr>
				<center><h3 style="text-align: center;font-family: monospace; color: #322d65; font-weight: bold;">Academic Experience</h3></center>
				<hr>
				<div>
				<!-- <center><h3>1</h3></center> -->
				<div class="form-group">
					<label class="col-sm-2 control-label">1.  College Name</label>
					<div class="col-sm-2">
						<input type="text" name="Clg_Name_1" class="form-control" placeholder="College Name">
					</div>
					<label class="col-sm-2 control-label">Designation</label>
					<div class="col-sm-2">
						<input type="text" name="Designation_1" class="form-control" placeholder="Designation" >
					</div>
					<label class="col-sm-2 control-label">Joining Date</label>
					<div class="col-sm-2">
						<input type="date" name="Joining_Date_1" class="form-control" placeholder="Joining Date" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Releiving date/Current date for presently working Institutions</label>
					<div class="col-sm-2">
						<input type="date" name="Rel_Cur_Date_1" class="form-control" placeholder="Relieving/Current date" >
					</div>

					<label class="col-sm-2 control-label">Work Type</label>
					<div class="col-sm-2">
						<select name="Work_type_1" class="form-control">
							<option value> ----- </option>
                            <option value="Regular">Regular</option>
							<option value="Part Time">Part Time</option>
						</select>
					</div>
				<label class="col-sm-2 control-label">Salary Drawn</label>
					<div class="col-sm-2">				
						<input type="number" name="Salary_drawn_1" class="form-control" placeholder="Salary Drawn">
					</div>
				</div>
				</div>
				<br>
				<br>

				<div>
				<!-- <center><h3>1</h3></center> -->
				<div class="form-group">
					<label class="col-sm-2 control-label">2.  College Name</label>
					<div class="col-sm-2">
						<input type="text" name="Clg_Name_2" class="form-control" placeholder="College Name">
					</div>
					<label class="col-sm-2 control-label">Designation</label>
					<div class="col-sm-2">
						<input type="text" name="Designation_2" class="form-control" placeholder="Designation" >
					</div>
					<label class="col-sm-2 control-label">Joining Date</label>
					<div class="col-sm-2">
						<input type="date" name="Joining_Date_2" class="form-control" placeholder="Joining Date" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Releiving date/Current date for presently working Institutions</label>
					<div class="col-sm-2">
						<input type="date" name="Rel_Cur_Date_2" class="form-control" placeholder="Relieving/Current date" >
					</div>
					<label class="col-sm-2 control-label">Work Type</label>
					<div class="col-sm-2">
						<select name="Work_type_2" class="form-control">
							<option value> ----- </option>
                            <option value="Regular">Regular</option>
							<option value="Part Time">Part Time</option>
						</select>
					</div>
				<label class="col-sm-2 control-label">Salary Drawn</label>
					<div class="col-sm-2">				
						<input type="number" name="Salary_drawn_2" class="form-control" placeholder="Salary Drawn">
					</div>
				</div>
				</div>
				<br>
				<br>


			<div>
				<!-- <center><h3>1</h3></center> -->
				<div class="form-group">
					<label class="col-sm-2 control-label">3.  College Name</label>
					<div class="col-sm-2">
						<input type="text" name="Clg_Name_3" class="form-control" placeholder="College Name">
					</div>
					<label class="col-sm-2 control-label">Designation</label>
					<div class="col-sm-2">
						<input type="text" name="Designation_3" class="form-control" placeholder="Designation" >
					</div>
					<label class="col-sm-2 control-label">Joining Date</label>
					<div class="col-sm-2">
						<input type="date" name="Joining_Date_3" class="form-control" placeholder="Joining Date" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Releiving date/Current date for presently working Institutions</label>
					<div class="col-sm-2">
						<input type="date" name="Rel_Cur_Date_3" class="form-control" placeholder="Relieving/Current date" >
					</div>
					<label class="col-sm-2 control-label">Work Type</label>
					<div class="col-sm-2">
						<select name="Work_type_3" class="form-control">
							<option value> ----- </option>
                            <option value="Regular">Regular</option>
							<option value="Part Time">Part Time</option>
						</select>
					</div>
					<label class="col-sm-2 control-label">Salary Drawn</label>
					<div class="col-sm-2">				
						<input type="number" name="Salary_drawn_3" class="form-control" placeholder="Salary Drawn">
					</div>
				</div>
				</div>
				<br>
				<br>


				<div>
				<!-- <center><h3>1</h3></center> -->
				<div class="form-group">
					<label class="col-sm-2 control-label">4.  College Name</label>
					<div class="col-sm-2">
						<input type="text" name="Clg_Name_4" class="form-control" placeholder="College Name">
					</div>
					<label class="col-sm-2 control-label">Designation</label>
					<div class="col-sm-2">
						<input type="text" name="Designation_4" class="form-control" placeholder="Designation" >
					</div>
					<label class="col-sm-2 control-label">Joining Date</label>
					<div class="col-sm-2">
						<input type="date" name="Joining_Date_4" class="form-control" placeholder="Joining Date" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Releiving date/Current date for presently working Institutions</label>
					<div class="col-sm-2">
						<input type="date" name="Rel_Cur_Date_4" class="form-control" placeholder="Relieving/Current date" >
					</div>
					<label class="col-sm-2 control-label">Work Type</label>
					<div class="col-sm-2">
						<select name="Work_type_4" class="form-control">
							<option value> ----- </option>
                            <option value="Regular">Regular</option>
							<option value="Part Time">Part Time</option>
						</select>
					</div>
					<label class="col-sm-2 control-label">Salary Drawn</label>
					<div class="col-sm-2">				
						<input type="number" name="Salary_drawn_4" class="form-control" placeholder="Salary Drawn">
					</div>
				</div>
				</div>
				<br>
				<br>


				<div>
				<!-- <center><h3>1</h3></center> -->
				<div class="form-group">
					<label class="col-sm-2 control-label">5.  College Name</label>
					<div class="col-sm-2">
						<input type="text" name="Clg_Name_5" class="form-control" placeholder="College Name">
					</div>
					<label class="col-sm-2 control-label">Designation</label>
					<div class="col-sm-2">
						<input type="text" name="Designation_5" class="form-control" placeholder="Designation" >
					</div>
					<label class="col-sm-2 control-label">Joining Date</label>
					<div class="col-sm-2">
						<input type="date" name="Joining_Date_5" class="form-control" placeholder="Joining Date" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Releiving date/Current date for presently working Institutions</label>
					<div class="col-sm-2">
						<input type="date" name="Rel_Cur_Date_5" class="form-control" placeholder="Relieving/Current date" >
					</div>
					<label class="col-sm-2 control-label">Work Type</label>
					<div class="col-sm-2">
						<select name="Work_type_5" class="form-control">
							<option value> ----- </option>
                            <option value="Regular">Regular</option>
							<option value="Part Time">Part Time</option>
						</select>
					</div>
					<label class="col-sm-2 control-label">Salary Drawn</label>
					<div class="col-sm-2">				
						<input type="number" name="Salary_drawn_5" class="form-control" placeholder="Salary Drawn">
					</div>
				</div>
				</div>
				<br>
				<br>


				<div>
				<!-- <center><h3>1</h3></center> -->
				<div class="form-group">
					<label class="col-sm-2 control-label">6.  College Name</label>
					<div class="col-sm-2">
						<input type="text" name="Clg_Name_6" class="form-control" placeholder="College Name">
					</div>
					<label class="col-sm-2 control-label">Designation</label>
					<div class="col-sm-2">
						<input type="text" name="Designation_6" class="form-control" placeholder="Designation" >
					</div>
					<label class="col-sm-2 control-label">Joining Date</label>
					<div class="col-sm-2">
						<input type="date" name="Joining_Date_6" class="form-control" placeholder="Joining Date" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Releiving date/Current date for presently working Institutions</label>
					<div class="col-sm-2">
						<input type="date" name="Rel_Cur_Date_6" class="form-control" placeholder="Relieving/Current date" >
					</div>
					<label class="col-sm-2 control-label">Work Type</label>
					<div class="col-sm-2">
						<select name="Work_type_6" class="form-control">
							<option value> ----- </option>
                            <option value="Regular">Regular</option>
							<option value="Part Time">Part Time</option>
						</select>
					</div>
					<label class="col-sm-2 control-label">Salary Drawn</label>
					<div class="col-sm-2">				
						<input type="number" name="Salary_drawn_6" class="form-control" placeholder="Salary Drawn">
					</div>
				</div>
				</div>
				<br>
				<br>


				<div>
				<!-- <center><h3>1</h3></center> -->
				<div class="form-group">
					<label class="col-sm-2 control-label">7.  College Name</label>
					<div class="col-sm-2">
						<input type="text" name="Clg_Name_7" class="form-control" placeholder="College Name">
					</div>
					<label class="col-sm-2 control-label">Designation</label>
					<div class="col-sm-2">
						<input type="text" name="Designation_7" class="form-control" placeholder="Designation" >
					</div>
					<label class="col-sm-2 control-label">Joining Date</label>
					<div class="col-sm-2">
						<input type="date" name="Joining_Date_7" class="form-control" placeholder="Joining Date" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Releiving date/Current date for presently working Institutions</label>
					<div class="col-sm-2">
						<input type="date" name="Rel_Cur_Date_7" class="form-control" placeholder="Relieving/Current date" >
					</div>
					<label class="col-sm-2 control-label">Work Type</label>
					<div class="col-sm-2">
						<select name="Work_type_7" class="form-control">
							<option value> ----- </option>
                            <option value="Regular">Regular</option>
							<option value="Part Time">Part Time</option>
						</select>
					</div>
					<label class="col-sm-2 control-label">Salary Drawn</label>
					<div class="col-sm-2">				
						<input type="number" name="Salary_drawn_7" class="form-control" placeholder="Salary Drawn">
					</div>
				</div>
				</div>
								
                <br>



				<br>
				<br>

				<hr>
				<center><h3 style="text-align: center;font-family: monospace; color: #322d65; font-weight: bold;">Industrial Experience</h3></center>
				<hr>
				<br><br>
				<div class="form-group">
					<label class="col-sm-2 control-label">1. Organisation Name</label>
					<div class="col-sm-2">
						<input type="text" name="Org_Name_1" class="form-control" placeholder="Organisation name" >
					</div>	
				
				<label class="col-sm-2 control-label">Designation</label>
					<div class="col-sm-2">
						<input type="text" name="DesignationIN_1" class="form-control" placeholder="Designation" >
					</div>	
				
				<label class="col-sm-2 control-label">Nature of Work</label>
					<div class="col-sm-2">
						<input type="text" name="Nature_of_work_1" class="form-control" placeholder="Nature of work" >
					</div>	
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Joining Date</label>
					<div class="col-sm-2">
						<input type="date" name="Joining_DateIN_1" class="form-control" placeholder="Joining Date" >
					</div>	
				
				<label class="col-sm-2 control-label">Relieving Date</label>
					<div class="col-sm-2">
						<input type="date" name="Rel_Date_1" class="form-control" placeholder="Relieving Date" >
					</div>	
				
				</div>
				<br><br>
				<div class="form-group">
					<label class="col-sm-2 control-label">2. Organisation Name</label>
					<div class="col-sm-2">
						<input type="text" name="Org_Name_2" class="form-control" placeholder="Organisation Name" >
					</div>	
				
				<label class="col-sm-2 control-label">Designation</label>
					<div class="col-sm-2">
						<input type="text" name="DesignationIN_2" class="form-control" placeholder="Designation" >
					</div>	
				
				<label class="col-sm-2 control-label">Nature of Work</label>
					<div class="col-sm-2">
						<input type="text" name="Nature_of_work_2" class="form-control" placeholder="Nature of work" >
					</div>	
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Joining Date</label>
					<div class="col-sm-2">
						<input type="date" name="Joining_DateIN_2" class="form-control" placeholder="Joining Date" >
					</div>	
				
				<label class="col-sm-2 control-label">Relieving Date</label>
					<div class="col-sm-2">
						<input type="date" name="Rel_Date_2" class="form-control" placeholder="Relieving Date" >
					</div>	
				
				</div>
				<br><br>
				
				
				
				<div class="form-group">
					<label class="col-sm-2 control-label">3. Organisation Name</label>
					<div class="col-sm-2">
						<input type="text" name="Org_Name_3" class="form-control" placeholder="Organisation name" >
					</div>	
				
				<label class="col-sm-2 control-label">Designation</label>
					<div class="col-sm-2">
						<input type="text" name="DesignationIN_3" class="form-control" placeholder="Designation" >
					</div>	
				
				<label class="col-sm-2 control-label">Nature of Work</label>
					<div class="col-sm-2">
						<input type="text" name="Nature_of_work_3" class="form-control" placeholder="Nature of work" >
					</div>	
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Joining Date</label>
					<div class="col-sm-2">
						<input type="date" name="Joining_DateIN_3" class="form-control" placeholder="Joining Date" >
					</div>	
				
				<label class="col-sm-2 control-label">Relieving Date</label>
					<div class="col-sm-2">
						<input type="date" name="Rel_Date_3" class="form-control" placeholder="Relieving Date" >
					</div>	
				
				</div>
				<br><br><div class="form-group">
					<label class="col-sm-2 control-label">4. Organisation Name</label>
					<div class="col-sm-2">
						<input type="text" name="Org_Name_4" class="form-control" placeholder="Organisation name" >
					</div>	
				
				<label class="col-sm-2 control-label">Designation</label>
					<div class="col-sm-2">
						<input type="text" name="DesignationIN_4" class="form-control" placeholder="Designation" >
					</div>	
				
				<label class="col-sm-2 control-label">Nature of Work</label>
					<div class="col-sm-2">
						<input type="text" name="Nature_of_work_4" class="form-control" placeholder="Nature of work" >
					</div>	
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Joining Date</label>
					<div class="col-sm-2">
						<input type="date" name="Joining_DateIN_4" class="form-control" placeholder="Joining Date" >
					</div>	
				
				<label class="col-sm-2 control-label">Relieving Date</label>
					<div class="col-sm-2">
						<input type="date" name="Rel_Date_4" class="form-control" placeholder="Relieving Date" >
					</div>	
				
				</div>
				<br><br>
				<div class="form-group">
					<label class="col-sm-2 control-label">5. Organisation Name</label>
					<div class="col-sm-2">
						<input type="text" name="Org_Name_5" class="form-control" placeholder="Organisation name" >
					</div>	
				
				<label class="col-sm-2 control-label">Designation</label>
					<div class="col-sm-2">
						<input type="text" name="DesignationIN_5" class="form-control" placeholder="Designation" >
					</div>	
				
				<label class="col-sm-2 control-label">Nature of Work</label>
					<div class="col-sm-2">
						<input type="text" name="Nature_of_work_5" class="form-control" placeholder="Nature of work" >
					</div>	
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Joining Date</label>
					<div class="col-sm-2">
						<input type="date" name="Joining_DateIN_5" class="form-control" placeholder="Joining Date" >
					</div>	
				
				<label class="col-sm-2 control-label">Relieving Date</label>
					<div class="col-sm-2">
						<input type="date" name="Rel_Date_5" class="form-control" placeholder="Relieving Date" >
					</div>	
				
				</div>
				<br><br><br>

				
				<br><br><br>

				












				
			


				<hr>
				<center><h3 style="text-align: center;font-family: monospace; color: #322d65; font-weight: bold;">Family Details</h3></center>
				<hr>

				<div>
				<!-- <center><h3>1</h3></center> -->
				<div class="form-group">

					<label class="col-sm-2 control-label">1.  Member Name</label>
					<div class="col-sm-2">
						<input type="text" name="Mem_Name_1" class="form-control" placeholder="Member Name" >
					</div>
					<label class="col-sm-2 control-label">Relation</label>
					<div class="col-sm-2">
						<input type="text" name="Rel_1" class="form-control" placeholder="Relation" >
					</div>
					<label class="col-sm-2 control-label">Date of Birth</label>
					<div class="col-sm-2">
						<input type="date" name="DOB_1" class="form-control" placeholder="Date of Birth" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Highest Educational Qualification</label>
					<div class="col-sm-2">
						<input type="text" name="HEduQual_1" class="form-control" placeholder="Educational Qualification" >
					</div>
					<label class="col-sm-2 control-label">Employment Status</label>
					<div class="col-sm-2">				
						<input type="text" name="Emp_status_1" class="form-control" placeholder="Employment Status" >
					</div>
					<label class="col-sm-2 control-label">Monthly Income</label>
					<div class="col-sm-2">				
						<input type="text" name="Inc_mont_1" class="form-control" placeholder="Monthly Income" >
					</div>
				</div>
				</div>
				<br>

								<div>
				<!-- <center><h3>1</h3></center> -->
				<div class="form-group">

					<label class="col-sm-2 control-label">2.  Member Name</label>
					<div class="col-sm-2">
						<input type="text" name="Mem_Name_2" class="form-control" placeholder="Member Name" >
					</div>
					<label class="col-sm-2 control-label">Relation</label>
					<div class="col-sm-2">
						<input type="text" name="Rel_2" class="form-control" placeholder="Relation" >
					</div>
					<label class="col-sm-2 control-label">Date of Birth</label>
					<div class="col-sm-2">
						<input type="date" name="DOB_2" class="form-control" placeholder="Date of Birth" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Highest Educational Qualification</label>
					<div class="col-sm-2">
						<input type="text" name="HEduQual_2" class="form-control" placeholder="Educational Qualification" >
					</div>
					<label class="col-sm-2 control-label">Employment Status</label>
					<div class="col-sm-2">				
						<input type="text" name="Emp_status_2" class="form-control" placeholder="Employment Status" >
					</div>
					<label class="col-sm-2 control-label">Monthly Income</label>
					<div class="col-sm-2">				
						<input type="text" name="Inc_mont_2" class="form-control" placeholder="Monthly Income" >
					</div>
				</div>
				</div>
				<br>

								<div>
				<!-- <center><h3>1</h3></center> -->
				<div class="form-group">

					<label class="col-sm-2 control-label">3.  Member Name</label>
					<div class="col-sm-2">
						<input type="text" name="Mem_Name_3" class="form-control" placeholder="Member Name" >
					</div>
					<label class="col-sm-2 control-label">Relation</label>
					<div class="col-sm-2">
						<input type="text" name="Rel_3" class="form-control" placeholder="Relation" >
					</div>
					<label class="col-sm-2 control-label">Date of Birth</label>
					<div class="col-sm-2">
						<input type="date" name="DOB_3" class="form-control" placeholder="Date of Birth" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Highest Educational Qualification</label>
					<div class="col-sm-2">
						<input type="text" name="HEduQual_3" class="form-control" placeholder="Educational Qualification" >
					</div>
					<label class="col-sm-2 control-label">Employment Status</label>
					<div class="col-sm-2">				
						<input type="text" name="Emp_status_3" class="form-control" placeholder="Employment Status" >
					</div>
					<label class="col-sm-2 control-label">Monthly Income</label>
					<div class="col-sm-2">				
						<input type="text" name="Inc_mont_3" class="form-control" placeholder="Monthly Income" >
					</div>
				</div>
				</div>
				<br>

				<div>
				<!-- <center><h3>1</h3></center> -->
				<div class="form-group">

					<label class="col-sm-2 control-label">4.  Member Name</label>
					<div class="col-sm-2">
						<input type="text" name="Mem_Name_4" class="form-control" placeholder="Member Name" >
					</div>
					<label class="col-sm-2 control-label">Relation</label>
					<div class="col-sm-2">
						<input type="text" name="Rel_4" class="form-control" placeholder="Relation" >
					</div>
					<label class="col-sm-2 control-label">Date of Birth</label>
					<div class="col-sm-2">
						<input type="date" name="DOB_4" class="form-control" placeholder="Date of Birth" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Highest Educational Qualification</label>
					<div class="col-sm-2">
						<input type="text" name="HEduQual_4" class="form-control" placeholder="Educational Qualification" >
					</div>
					<label class="col-sm-2 control-label">Employment Status</label>
					<div class="col-sm-2">				
						<input type="text" name="Emp_status_4" class="form-control" placeholder="Employment Status" >
					</div>
					<label class="col-sm-2 control-label">Monthly Income</label>
					<div class="col-sm-2">				
						<input type="text" name="Inc_mont_4" class="form-control" placeholder="Monthly Income" >
					</div>
				</div>
				</div>
				<br>

				<div>
				<!-- <center><h3>1</h3></center> -->
				<div class="form-group">

					<label class="col-sm-2 control-label">5.  Member Name</label>
					<div class="col-sm-2">
						<input type="text" name="Mem_Name_5" class="form-control" placeholder="Member Name" >
					</div>
					<label class="col-sm-2 control-label">Relation</label>
					<div class="col-sm-2">
						<input type="text" name="Rel_5" class="form-control" placeholder="Relation" >
					</div>
					<label class="col-sm-2 control-label">Date of Birth</label>
					<div class="col-sm-2">
						<input type="date" name="DOB_5" class="form-control" placeholder="Date of Birth" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Highest Educational Qualification</label>
					<div class="col-sm-2">
						<input type="text" name="HEduQual_5" class="form-control" placeholder="Educational Qualification" >
					</div>
					<label class="col-sm-2 control-label">Employment Status</label>
					<div class="col-sm-2">				
						<input type="text" name="Emp_status_5" class="form-control" placeholder="Employment Status" >
					</div>
					<label class="col-sm-2 control-label">Monthly Income</label>
					<div class="col-sm-2">				
						<input type="text" name="Inc_mont_5" class="form-control" placeholder="Monthly Income" >
					</div>
				</div>
				</div>
				<br>

				<div>
				<!-- <center><h3>1</h3></center> -->
				<div class="form-group">

					<label class="col-sm-2 control-label">6.  Member Name</label>
					<div class="col-sm-2">
						<input type="text" name="Mem_Name_6" class="form-control" placeholder="Member Name" >
					</div>
					<label class="col-sm-2 control-label">Relation</label>
					<div class="col-sm-2">
						<input type="text" name="Rel_6" class="form-control" placeholder="Relation" >
					</div>
					<label class="col-sm-2 control-label">Date of Birth</label>
					<div class="col-sm-2">
						<input type="date" name="DOB_6" class="form-control" placeholder="Date of Birth" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Highest Educational Qualification</label>
					<div class="col-sm-2">
						<input type="text" name="HEduQual_6" class="form-control" placeholder="Educational Qualification" >
					</div>
					<label class="col-sm-2 control-label">Employment Status</label>
					<div class="col-sm-2">				
						<input type="text" name="Emp_status_6" class="form-control" placeholder="Employment Status" >
					</div>
					<label class="col-sm-2 control-label">Monthly Income</label>
					<div class="col-sm-2">				
						<input type="text" name="Inc_mont_6" class="form-control" placeholder="Monthly Income" >
					</div>
				</div>
				</div>
				<br>

				<div>
				<!-- <center><h3>1</h3></center> -->
				<div class="form-group">

					<label class="col-sm-2 control-label">7.  Member Name</label>
					<div class="col-sm-2">
						<input type="text" name="Mem_Name_7" class="form-control" placeholder="Member Name" >
					</div>
					<label class="col-sm-2 control-label">Relation</label>
					<div class="col-sm-2">
						<input type="text" name="Rel_7" class="form-control" placeholder="Relation" >
					</div>
					<label class="col-sm-2 control-label">Date of Birth</label>
					<div class="col-sm-2">
						<input type="date" name="DOB_7" class="form-control" placeholder="Date of Birth" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Highest Educational Qualification</label>
					<div class="col-sm-2">
						<input type="text" name="HEduQual_7" class="form-control" placeholder="Educational Qualification" >
					</div>
					<label class="col-sm-2 control-label">Employment Status</label>
					<div class="col-sm-2">				
						<input type="text" name="Emp_status_7" class="form-control" placeholder="Employment Status" >
					</div>
					<label class="col-sm-2 control-label">Monthly Income</label>
					<div class="col-sm-2">				
						<input type="text" name="Inc_mont_7" class="form-control" placeholder="Monthly Income" >
					</div>
				</div>
				</div>
				<br>

				<div>
				<!-- <center><h3>1</h3></center> -->
				<div class="form-group">

					<label class="col-sm-2 control-label">8.  Member Name</label>
					<div class="col-sm-2">
						<input type="text" name="Mem_Name_8" class="form-control" placeholder="Member Name" >
					</div>
					<label class="col-sm-2 control-label">Relation</label>
					<div class="col-sm-2">
						<input type="text" name="Rel_8" class="form-control" placeholder="Relation" >
					</div>
					<label class="col-sm-2 control-label">Date of Birth</label>
					<div class="col-sm-2">
						<input type="date" name="DOB_8" class="form-control" placeholder="Date of Birth" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Highest Educational Qualification</label>
					<div class="col-sm-2">
						<input type="text" name="HEduQual_8" class="form-control" placeholder="Educational Qualification" >
					</div>
					<label class="col-sm-2 control-label">Employment Status</label>
					<div class="col-sm-2">				
						<input type="text" name="Emp_status_8" class="form-control" placeholder="Employment Status" >
					</div>
					<label class="col-sm-2 control-label">Monthly Income</label>
					<div class="col-sm-2">				
						<input type="text" name="Inc_mont_8" class="form-control" placeholder="Monthly Income" >
					</div>
				</div>
				</div>
				<br>

				<div>
				<!-- <center><h3>1</h3></center> -->
				<div class="form-group">

					<label class="col-sm-2 control-label">9.  Member Name</label>
					<div class="col-sm-2">
						<input type="text" name="Mem_Name_9" class="form-control" placeholder="Member Name" >
					</div>
					<label class="col-sm-2 control-label">Relation</label>
					<div class="col-sm-2">
						<input type="text" name="Rel_9" class="form-control" placeholder="Relation" >
					</div>
					<label class="col-sm-2 control-label">Date of Birth</label>
					<div class="col-sm-2">
						<input type="date" name="DOB_9" class="form-control" placeholder="Date of Birth" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Highest Educational Qualification</label>
					<div class="col-sm-2">
						<input type="text" name="HEduQual_9" class="form-control" placeholder="Educational Qualification">
					</div>
					<label class="col-sm-2 control-label">Employment Status</label>
					<div class="col-sm-2">				
						<input type="text" name="Emp_status_9" class="form-control" placeholder="Employment Status" >
					</div>
					<label class="col-sm-2 control-label">Monthly Income</label>
					<div class="col-sm-2">				
						<input type="text" name="Inc_mont_9" class="form-control" placeholder="Monthly Income" >
					</div>
				</div>
				</div>
				<br>

				<br><br>
				<center>
				<div class="form-group">
					<div>
						<?php
                        if($dept=="ADMIN" or $dept='NTF'){ 
                        echo'<input type="submit" name="add" class="btn btn-sm btn-primary" value="Save"  onclick="return confirm(\'Are you sure to continue saving data? ">';
                        }else{
                        echo'<a title="Warning" onclick="return confirm(\'You need Admin rights to Add this Data !\')" class="btn btn-primary btn-sm">Save</a>';
                        }
                        ?>
						<a href="index.php" class="btn btn-sm btn-danger">Cancel</a>
					</div>
				</div>
				</center>
				
			</form>
			<br><br><br><br>
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
					<a class="home" href="firstpagetrial.php">Home</a>
					<a class="allfac" href="index.php">All Faculties</a>
					<?php
					if($dept=="NTF"){
					echo'<a class="adddata" href="addnon.php">Add Data</a>';
					}else{
					echo'<a class="adddata" href="add.php">Add Data</a>';    
					}
					?>
					<a class="logout" href="logout.php">Logout</a>
				</p>
				<center>
				<h5 class="alic" style="font-family: monospace;color: #878787;font-weight: bold"> A   LICET   IT   Design   ©   2021 </h5>
			</center>
			</div>

		</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	$('.date').datepicker({
		format: 'yyyy-mm-dd',
	})
	</script>
</body>
</html>