<?php
ob_start();
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
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data</title>

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
      padding-bottom:2%;
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
            font-size:24px;
            padding-top:25px;
        }
        .logo-licet {
            float: left;
            width: 125px !important ;
            height:125px !important ;

        }

        .text_style {
          color: #322d65;
          font-size: 40px;
          font-weight: bold;
          position:relative;
        }
        .categories__title {
          color: #322d65;
          font-size: 40px;
          font-weight: bold;
          position:relative;
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
  font: bold 16px sans-serif;
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
                <div id="navbar" class="navbar-collapse collapse">                      
                    <ul class="nav navbar-nav" style="float:right; ">               
                        <li class="navhover" style="color: white; font-weight: bold;"><a href="index.php">All Faculty</a></li>
                        <?php
                        if($dept=="NTF"){
                        echo'<li class="navhover" style="color: white; font-weight: bold;"><a href="addnon.php">Add Data</a></li>';
                        }else{
                        echo'<li class="navhover" style="color: white; font-weight: bold;"><a href="add.php">Add Data</a></li>'; 
                        }
                        ?>
                        <li class="navhover" style="color: white; font-weight: bold;"><a href="logout.php">Logout</a></li>
                        <li class="navhover" style="color: white; font-weight: bold;"><a href="firstpagetrial.php">
                          <span class="glyphicon glyphicon-home"></span></a>
                        </li>                     
                    </ul>
                </div><!--/.nav-collapse -->            
            </div>
        </nav>



    <div class="container">
        <div class="content">
            <h2 class="text_style" >Staff Details &raquo; Edit Data</h2>
            <hr />

            
            <?php
            $ID = $_GET['ID'];
            $sql = mysqli_query($con, "SELECT * FROM faculty_basic_details WHERE ID='$ID'");
            if(mysqli_num_rows($sql) == 0){
                header("Location: firstpagetrial.php");
            }else{
                $row = mysqli_fetch_assoc($sql);
            }
            if(isset($_POST['save'])){
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
                            
                            // header("Location: add.php?uploadsuccess");
                        }else{
                             echo"You cannot upload files because of bigger size";
                        }
                    }else{
                        echo"You cannot upload files because of an error";
                    }
                }else{
                    echo"You cannot upload files of this type!";
                }

                $prof_url        = $_POST['prof_url'];
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
                $Department      = $_POST['Department'];
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
                $COE_Fac_Code    = $_POST['COE_Fac_Code'];
                $AICTE_Fac_code  = $_POST['AICTE_Fac_code'];
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
                $Father_name     = $_POST['Father_name'];
                $Father_name =str_replace("'", "\'", $Father_name);
                $Mother_name     = $_POST['Mother_name'];
                $Mother_name =str_replace("'", "\'", $Mother_name);
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
                $Dr_deg          = $_POST['Dr_deg'];
                $Dr_deg =str_replace("'", "\'", $Dr_deg);
                $PG_deg          = $_POST['PG_deg'];
                $PG_deg =str_replace("'", "\'", $PG_deg);
                $UG_deg          = $_POST['UG_deg'];
                $UG_deg =str_replace("'", "\'", $UG_deg);
                $Phy_Chl         = $_POST['Phy_Chl'];
                $AICTE_ex_mem    = $_POST['AICTE_ex_mem'];


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
                $Phd_title=$_POST['Phd_title'];
                $Phd_title =str_replace("'", "\'", $Phd_title);
                $Fac_Phd_award=$_POST['Fac_Phd_award'];
                $Fac_Phd_award =str_replace("'", "\'", $Fac_Phd_award);
                $phd_univ=$_POST['phd_univ'];
                $phd_univ =str_replace("'", "\'", $phd_univ);
                $phd_comp=$_POST['phd_comp'];
                $phd_comp =str_replace("'", "\'", $phd_comp);

                $Year_1=$_POST['Year_1'];
                $Ntl_paper_1=$_POST['Ntl_paper_1'];
                $Intl_paper_1=$_POST['Intl_paper_1'];
                $Ntl_Journal_1=$_POST['Ntl_Journal_1'];
                $Intl_journal_1=$_POST['Intl_journal_1'];
                $Ntl_con_1=$_POST['Ntl_con_1'];
                $Intl_con_1=$_POST['Intl_con_1'];

                $Year_2=$_POST['Year_2'];
                $Ntl_paper_2=$_POST['Ntl_paper_2'];
                $Intl_paper_2=$_POST['Intl_paper_2'];
                $Ntl_Journal_2=$_POST['Ntl_Journal_2'];
                $Intl_journal_2=$_POST['Intl_journal_2'];
                $Ntl_con_2=$_POST['Ntl_con_2'];
                $Intl_con_2=$_POST['Intl_con_2'];

                $Year_3=$_POST['Year_3'];
                $Ntl_paper_3=$_POST['Ntl_paper_3'];
                $Intl_paper_3=$_POST['Intl_paper_3'];
                $Ntl_Journal_3=$_POST['Ntl_Journal_3'];
                $Intl_journal_3=$_POST['Intl_journal_3'];
                $Ntl_con_3=$_POST['Ntl_con_3'];
                $Intl_con_3=$_POST['Intl_con_3'];

                $Year_4=$_POST['Year_4'];
                $Ntl_paper_4=$_POST['Ntl_paper_4'];
                $Intl_paper_4=$_POST['Intl_paper_4'];
                $Ntl_Journal_4=$_POST['Ntl_Journal_4'];
                $Intl_journal_4=$_POST['Intl_journal_4'];
                $Ntl_con_4=$_POST['Ntl_con_4'];
                $Intl_con_4=$_POST['Intl_con_4'];

                $Year_5=$_POST['Year_5'];
                $Ntl_paper_5=$_POST['Ntl_paper_5'];
                $Intl_paper_5=$_POST['Intl_paper_5'];
                $Ntl_Journal_5=$_POST['Ntl_Journal_5'];
                $Intl_journal_5=$_POST['Intl_journal_5'];
                $Ntl_con_5=$_POST['Ntl_con_5'];
                $Intl_con_5=$_POST['Intl_con_5'];


                $Year_6=$_POST['Year_6'];
                $Ntl_paper_6=$_POST['Ntl_paper_6'];
                $Intl_paper_6=$_POST['Intl_paper_6'];
                $Ntl_Journal_6=$_POST['Ntl_Journal_6'];
                $Intl_journal_6=$_POST['Intl_journal_6'];
                $Ntl_con_6=$_POST['Ntl_con_6'];
                $Intl_con_6=$_POST['Intl_con_6'];


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
                                        

                $Total_work_exp=$_POST['Total_work_exp'];
                $ybefme        =$_POST['ybefme'];
                $yafme        =$_POST['yafme'];
                $books_published=$_POST['books_published'];
                $Nof_Intl_papers=$_POST['Nof_Intl_papers'];
                $Nof_Ntl_papers=$_POST['Nof_Ntl_papers'];
                $Nof_Intl_journals=$_POST['Nof_Intl_journals'];
                $Nof_Ntl_journals=$_POST['Nof_Ntl_journals'];
                $Nof_PGpro_guided=$_POST['Nof_PGpro_guided'];
                $Nof_drstu_guided=$_POST['Nof_drstu_guided'];
                $projects        =$_POST['projects'];
                $projects =str_replace("'", "\'", $projects);

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






                $Research_Exp=$_POST['Research_Exp'];
                $Patents=$_POST['Patents'];


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



        if(empty($fileName)){
                $update = mysqli_query($con, "UPDATE faculty_basic_details SET prof_url='$prof_url', ID='$ID',name='$name', Gender='$Gender', DOB='$DOB' , Position='$Position', Mailid='$Mailid',  Qualification='$Qualification',Department='$Department' ,Reg_Adj='$Reg_Adj' , Com_Add='$Com_Add', Per_Add='$Per_Add' , Dist='$Dist' , Mob_No='$Mob_No' , Community='$Community' , PAN_No='$PAN_No' , Passport_No='$Passport_No' , Aadhar_No='$Aadhar_No' , COE_Fac_Code='$COE_Fac_Code' , AICTE_Fac_code='$AICTE_Fac_code' , Marital_status='$Marital_status' , Birth_place='$Birth_place' , Catholic='$Catholic' , Caste='$Caste' , Lang_Known_1='$Lang_Known_1', Extracurricular='$Extracurricular' , Father_name='$Father_name' , Mother_name='$Mother_name' , Religion='$Religion' , Spouse_name='$Spouse_name' , Spouse_Occupation='$Spouse_Occupation' , 
                    Blood_grp='$Blood_grp' , Postal_code='$Postal_code' , STD_Code='$STD_Code' , GPM='$GPM' ,  Joining_Date='$Joining_Date',
                    Dr_deg='$Dr_deg' , PG_deg='$PG_deg' , UG_deg='$UG_deg' , Phy_Chl='$Phy_Chl' , AICTE_ex_mem='$AICTE_ex_mem' , 


                    Schl_Qual_1='$Schl_Qual_1' , Schl_name_1='$Schl_name_1' , Schl_mode_1='$Schl_mode_1' , Schl_medium_1='$Schl_medium_1' ,schl_per_1='$schl_per_1' ,
                    Schl_Qual_2='$Schl_Qual_2' , Schl_name_2='$Schl_name_2' , Schl_mode_2='$Schl_mode_2' , Schl_medium_2='$Schl_medium_2' , schl_per_2='$schl_per_2' ,


                    Category_1='$Category_1' , Deg_Name_1='$Deg_Name_1' , Specialization_1='$Specialization_1' , Year_of_passing_1='$Year_of_passing_1' , Name_of_the_college_1='$Name_of_the_college_1' , Name_of_the_University_1='$Name_of_the_University_1' , Percentage_1='$Percentage_1' , Class_Obtained_1='$Class_Obtained_1' , Clg_mode_1='$Clg_mode_1' , Clg_medium_1='$Clg_medium_1' , 
                    Category_2='$Category_2' , Deg_Name_2='$Deg_Name_2' , Specialization_2='$Specialization_2' , Year_of_passing_2='$Year_of_passing_2' , Name_of_the_college_2='$Name_of_the_college_2' , Name_of_the_University_2='$Name_of_the_University_2' , Percentage_2='$Percentage_2' , Class_Obtained_2='$Class_Obtained_2' , Clg_mode_2='$Clg_mode_2' , Clg_medium_2='$Clg_medium_2' , 
                    Category_3='$Category_3' , Deg_Name_3='$Deg_Name_3' , Specialization_3='$Specialization_3' , Year_of_passing_3='$Year_of_passing_3' , Name_of_the_college_3='$Name_of_the_college_3' , Name_of_the_University_3='$Name_of_the_University_3' , Percentage_3='$Percentage_3' , Class_Obtained_3='$Class_Obtained_3' , Clg_mode_3='$Clg_mode_3' , Clg_medium_3='$Clg_medium_3' ,
                    Category_4='$Category_4' , Deg_Name_4='$Deg_Name_4' , Specialization_4='$Specialization_4' , Year_of_passing_4='$Year_of_passing_4' , Name_of_the_college_4='$Name_of_the_college_4' , Name_of_the_University_4='$Name_of_the_University_4' , Percentage_4='$Percentage_4' , Class_Obtained_4='$Class_Obtained_4' , Clg_mode_4='$Clg_mode_4' , Clg_medium_4='$Clg_medium_4' ,
                    Category_5='$Category_5' , Deg_Name_5='$Deg_Name_5' , Specialization_5='$Specialization_5' , Year_of_passing_5='$Year_of_passing_5' , Name_of_the_college_5='$Name_of_the_college_5' , Name_of_the_University_5='$Name_of_the_University_5' , Percentage_5='$Percentage_5' , Class_Obtained_5='$Class_Obtained_5' , Clg_mode_5='$Clg_mode_5' , Clg_medium_5='$Clg_medium_5' , 
                    Category_6='$Category_6' , Deg_Name_6='$Deg_Name_6' , Specialization_6='$Specialization_6' , Year_of_passing_6='$Year_of_passing_6' , Name_of_the_college_6='$Name_of_the_college_6' , Name_of_the_University_6='$Name_of_the_University_6' , Percentage_6='$Percentage_6' , Class_Obtained_6='$Class_Obtained_6' , Clg_mode_6='$Clg_mode_6' , Clg_medium_6='$Clg_medium_6' ,  
                    Category_7='$Category_7' , Deg_Name_7='$Deg_Name_7' , Specialization_7='$Specialization_7' , Year_of_passing_7='$Year_of_passing_7' , Name_of_the_college_7='$Name_of_the_college_7' , Name_of_the_University_7='$Name_of_the_University_7' , Percentage_7='$Percentage_7' , Class_Obtained_7='$Class_Obtained_7' , Clg_mode_7='$Clg_mode_7' , Clg_medium_7='$Clg_medium_7' , 
                    Specialization_area='$Specialization_area' , Add_Qual='$Add_Qual' , Phd_title='$Phd_title' , Fac_Phd_award='$Fac_Phd_award',


                    Year_1='$Year_1',Ntl_paper_1='$Ntl_paper_1',Intl_paper_1='$Intl_paper_1',Ntl_Journal_1='$Ntl_Journal_1',
                    Intl_journal_1='$Intl_journal_1',Ntl_con_1='$Ntl_con_1',Intl_con_1='$Intl_con_1',

                    Year_2='$Year_2',Ntl_paper_2='$Ntl_paper_2',Intl_paper_2='$Intl_paper_2',Ntl_Journal_2='$Ntl_Journal_2',
                    Intl_journal_2='$Intl_journal_2',Ntl_con_2='$Ntl_con_2',Intl_con_2='$Intl_con_2',

                    Year_3='$Year_3',Ntl_paper_3='$Ntl_paper_3',Intl_paper_3='$Intl_paper_3',Ntl_Journal_3='$Ntl_Journal_3',
                    Intl_journal_3='$Intl_journal_3',Ntl_con_3='$Ntl_con_3',Intl_con_3='$Intl_con_3',

                    Year_4='$Year_4',Ntl_paper_4='$Ntl_paper_4',Intl_paper_4='$Intl_paper_4',Ntl_Journal_4='$Ntl_Journal_4',
                    Intl_journal_4='$Intl_journal_4',Ntl_con_4='$Ntl_con_4',Intl_con_4='$Intl_con_4',

                    Year_5='$Year_5',Ntl_paper_5='$Ntl_paper_5',Intl_paper_5='$Intl_paper_5',Ntl_Journal_5='$Ntl_Journal_5',
                    Intl_journal_5='$Intl_journal_5',Ntl_con_5='$Ntl_con_5',Intl_con_5='$Intl_con_5',

                    Year_6='$Year_6',Ntl_paper_6='$Ntl_paper_6',Intl_paper_6='$Intl_paper_6',Ntl_Journal_6='$Ntl_Journal_6',
                    Intl_journal_6='$Intl_journal_6',Ntl_con_6='$Ntl_con_6',Intl_con_6='$Intl_con_6',


                    Clg_Name_1='$Clg_Name_1',Designation_1='$Designation_1',Joining_Date_1='$Joining_Date_1',Rel_Cur_Date_1='$Rel_Cur_Date_1',Work_type_1='$Work_type_1',Salary_drawn_1='$Salary_drawn_1',

                    Clg_Name_2='$Clg_Name_2',Designation_2='$Designation_2',Joining_Date_2='$Joining_Date_2',Rel_Cur_Date_2='$Rel_Cur_Date_2',Work_type_2='$Work_type_2',Salary_drawn_2='$Salary_drawn_2',

                    Clg_Name_3='$Clg_Name_3',Designation_3='$Designation_3',Joining_Date_3='$Joining_Date_3',Rel_Cur_Date_3='$Rel_Cur_Date_3',Work_type_3='$Work_type_3',Salary_drawn_3='$Salary_drawn_3',

                    Clg_Name_4='$Clg_Name_4',Designation_4='$Designation_4',Joining_Date_4='$Joining_Date_4',Rel_Cur_Date_4='$Rel_Cur_Date_4',Work_type_4='$Work_type_4',Salary_drawn_4='$Salary_drawn_4',

                    Clg_Name_5='$Clg_Name_5',Designation_5='$Designation_5',Joining_Date_5='$Joining_Date_5',Rel_Cur_Date_5='$Rel_Cur_Date_5',Work_type_5='$Work_type_5',Salary_drawn_5='$Salary_drawn_5',

                    Clg_Name_6='$Clg_Name_6',Designation_6='$Designation_6',Joining_Date_6='$Joining_Date_6',Rel_Cur_Date_6='$Rel_Cur_Date_6',Work_type_6='$Work_type_6',Salary_drawn_6='$Salary_drawn_6',

                    Clg_Name_7='$Clg_Name_7',Designation_7='$Designation_7',Joining_Date_7='$Joining_Date_7',Rel_Cur_Date_7='$Rel_Cur_Date_7',Work_type_7='$Work_type_7',Salary_drawn_7='$Salary_drawn_7',

                    Total_work_exp='$Total_work_exp',books_published='$books_published',Nof_Intl_papers='$Nof_Intl_papers',Nof_Ntl_papers='$Nof_Ntl_papers',Nof_Intl_journals='$Nof_Intl_journals',Nof_Ntl_journals='$Nof_Ntl_journals',Nof_PGpro_guided='$Nof_PGpro_guided',Nof_drstu_guided='$Nof_drstu_guided',


                    Org_Name_1='$Org_Name_1' , DesignationIN_1='$DesignationIN_1' , Nature_of_work_1='$Nature_of_work_1' , Joining_DateIN_1='$Joining_DateIN_1' , Rel_Date_1='$Rel_Date_1' ,

                    Org_Name_2='$Org_Name_2' , DesignationIN_2='$DesignationIN_2' , Nature_of_work_2='$Nature_of_work_2' , Joining_DateIN_2='$Joining_DateIN_2' , Rel_Date_2='$Rel_Date_2' ,
                    Org_Name_3='$Org_Name_3' , DesignationIN_3='$DesignationIN_3' , Nature_of_work_3='$Nature_of_work_3' , Joining_DateIN_3='$Joining_DateIN_3' , Rel_Date_3='$Rel_Date_3' ,

                    Org_Name_4='$Org_Name_4' , DesignationIN_4='$DesignationIN_4' , Nature_of_work_4='$Nature_of_work_4' , Joining_DateIN_4='$Joining_DateIN_4' , Rel_Date_4='$Rel_Date_4' ,

                    Org_Name_5='$Org_Name_5' , DesignationIN_5='$DesignationIN_5' , Nature_of_work_5='$Nature_of_work_5' , Joining_DateIN_5='$Joining_DateIN_5' , Rel_Date_5='$Rel_Date_5' ,


                    Research_Exp='$Research_Exp' , Patents='$Patents',


                    Mem_Name_1='$Mem_Name_1',Rel_1='$Rel_1',DOB_1='$DOB_1',HEduQual_1='$HEduQual_1',Emp_status_1='$Emp_status_1',
                        Inc_mont_1='$Inc_mont_1',

                    Mem_Name_2='$Mem_Name_2',Rel_2='$Rel_2',DOB_2='$DOB_2',HEduQual_2='$HEduQual_2',Emp_status_2='$Emp_status_2',
                        Inc_mont_2='$Inc_mont_2',

                    Mem_Name_3='$Mem_Name_3',Rel_3='$Rel_3',DOB_3='$DOB_3',HEduQual_3='$HEduQual_3',Emp_status_3='$Emp_status_3',
                        Inc_mont_3='$Inc_mont_3',

                    Mem_Name_4='$Mem_Name_4',Rel_4='$Rel_4',DOB_4='$DOB_4',HEduQual_4='$HEduQual_4',Emp_status_4='$Emp_status_4',Inc_mont_4='$Inc_mont_4',

                    Mem_Name_5='$Mem_Name_5',Rel_5='$Rel_5',DOB_5='$DOB_5',HEduQual_5='$HEduQual_5',Emp_status_5='$Emp_status_5',Inc_mont_5='$Inc_mont_5',

                    Mem_Name_6='$Mem_Name_6',Rel_6='$Rel_6',DOB_6='$DOB_6',HEduQual_6='$HEduQual_6',Emp_status_6='$Emp_status_6',Inc_mont_6='$Inc_mont_6',

                    Mem_Name_7='$Mem_Name_7',Rel_7='$Rel_7',DOB_7='$DOB_7',HEduQual_7='$HEduQual_7',Emp_status_7='$Emp_status_7',Inc_mont_7='$Inc_mont_7',

                    Mem_Name_8='$Mem_Name_8',Rel_8='$Rel_8',DOB_8='$DOB_8',HEduQual_8='$HEduQual_8',Emp_status_8='$Emp_status_8',Inc_mont_8='$Inc_mont_8',

                    Mem_Name_9='$Mem_Name_9',Rel_9='$Rel_9',DOB_9='$DOB_9',HEduQual_9='$HEduQual_9',Emp_status_9='$Emp_status_9',Inc_mont_9='$Inc_mont_9' ,emg_mob_no='$emg_mob_no' ,landline_no='$landline_no' ,mot_ton='$mot_ton' ,Old_Add ='$Old_Add' ,dalit = '$dalit' ,phd_univ='$phd_univ' ,phd_comp='$phd_comp' ,ybefme='$ybefme' ,yafme ='$yafme', iob_acc_no='$iob_acc_no' ,initial_salary='$initial_salary' ,increment_salary='$increment_salary' ,projects='$projects', add_resp='$add_resp',
                    diocese_name='$diocese_name' ,church_name_place='$church_name_place',Email ='$Email',
                Lang_Known_2    ='$Lang_Known_2',
                Lang_Known_3    ='$Lang_Known_3',
                Lang_Known_4    ='$Lang_Known_4',
                Lang_Known_5    ='$Lang_Known_5',
                Lang_Known_6    ='$Lang_Known_6',
                Lang_Known_7    ='$Lang_Known_7',
                Lang_Known_8    ='$Lang_Known_8',
               
                profic_1='$profic_1',
                profic_2='$profic_2',
                profic_3='$profic_3',
                profic_4='$profic_4',
                profic_5='$profic_5',
                profic_6='$profic_6',
                profic_7='$profic_7',
                profic_8='$profic_8',
                
                prof_mem_det ='$prof_mem_det',
                other_mem_det ='$other_mem_det'
 WHERE ID='$ID'") or die (mysqli_error($con));}
    else{
        $update = mysqli_query($con, "UPDATE faculty_basic_details SET prof_img='$fileName' ,prof_url='$prof_url', ID='$ID',name='$name', Gender='$Gender', DOB='$DOB' , Position='$Position', Mailid='$Mailid',  Qualification='$Qualification',Department='$Department' ,Reg_Adj='$Reg_Adj' , Com_Add='$Com_Add', Per_Add='$Per_Add' , Dist='$Dist' , Mob_No='$Mob_No' , Community='$Community' , PAN_No='$PAN_No' , Passport_No='$Passport_No' , Aadhar_No='$Aadhar_No' , COE_Fac_Code='$COE_Fac_Code' , AICTE_Fac_code='$AICTE_Fac_code' , Marital_status='$Marital_status' , Birth_place='$Birth_place' , Catholic='$Catholic' , Caste='$Caste' , Lang_Known_1='$Lang_Known_1', Extracurricular='$Extracurricular' , Father_name='$Father_name' , Mother_name='$Mother_name' , Religion='$Religion' , Spouse_name='$Spouse_name' , Spouse_Occupation='$Spouse_Occupation' , 
                    Blood_grp='$Blood_grp' , Postal_code='$Postal_code' , STD_Code='$STD_Code' , GPM='$GPM' ,  Joining_Date='$Joining_Date',
                    Dr_deg='$Dr_deg' , PG_deg='$PG_deg' , UG_deg='$UG_deg' , Phy_Chl='$Phy_Chl' , AICTE_ex_mem='$AICTE_ex_mem' , 


                    Schl_Qual_1='$Schl_Qual_1' , Schl_name_1='$Schl_name_1' , Schl_mode_1='$Schl_mode_1' , Schl_medium_1='$Schl_medium_1' ,schl_per_1='$schl_per_1' ,
                    Schl_Qual_2='$Schl_Qual_2' , Schl_name_2='$Schl_name_2' , Schl_mode_2='$Schl_mode_2' , Schl_medium_2='$Schl_medium_2' , schl_per_2='$schl_per_2' ,


                    Category_1='$Category_1' , Deg_Name_1='$Deg_Name_1' , Specialization_1='$Specialization_1' , Year_of_passing_1='$Year_of_passing_1' , Name_of_the_college_1='$Name_of_the_college_1' , Name_of_the_University_1='$Name_of_the_University_1' , Percentage_1='$Percentage_1' , Class_Obtained_1='$Class_Obtained_1' , Clg_mode_1='$Clg_mode_1' , Clg_medium_1='$Clg_medium_1' , 
                    Category_2='$Category_2' , Deg_Name_2='$Deg_Name_2' , Specialization_2='$Specialization_2' , Year_of_passing_2='$Year_of_passing_2' , Name_of_the_college_2='$Name_of_the_college_2' , Name_of_the_University_2='$Name_of_the_University_2' , Percentage_2='$Percentage_2' , Class_Obtained_2='$Class_Obtained_2' , Clg_mode_2='$Clg_mode_2' , Clg_medium_2='$Clg_medium_2' , 
                    Category_3='$Category_3' , Deg_Name_3='$Deg_Name_3' , Specialization_3='$Specialization_3' , Year_of_passing_3='$Year_of_passing_3' , Name_of_the_college_3='$Name_of_the_college_3' , Name_of_the_University_3='$Name_of_the_University_3' , Percentage_3='$Percentage_3' , Class_Obtained_3='$Class_Obtained_3' , Clg_mode_3='$Clg_mode_3' , Clg_medium_3='$Clg_medium_3' ,
                    Category_4='$Category_4' , Deg_Name_4='$Deg_Name_4' , Specialization_4='$Specialization_4' , Year_of_passing_4='$Year_of_passing_4' , Name_of_the_college_4='$Name_of_the_college_4' , Name_of_the_University_4='$Name_of_the_University_4' , Percentage_4='$Percentage_4' , Class_Obtained_4='$Class_Obtained_4' , Clg_mode_4='$Clg_mode_4' , Clg_medium_4='$Clg_medium_4' ,
                    Category_5='$Category_5' , Deg_Name_5='$Deg_Name_5' , Specialization_5='$Specialization_5' , Year_of_passing_5='$Year_of_passing_5' , Name_of_the_college_5='$Name_of_the_college_5' , Name_of_the_University_5='$Name_of_the_University_5' , Percentage_5='$Percentage_5' , Class_Obtained_5='$Class_Obtained_5' , Clg_mode_5='$Clg_mode_5' , Clg_medium_5='$Clg_medium_5' , 
                    Category_6='$Category_6' , Deg_Name_6='$Deg_Name_6' , Specialization_6='$Specialization_6' , Year_of_passing_6='$Year_of_passing_6' , Name_of_the_college_6='$Name_of_the_college_6' , Name_of_the_University_6='$Name_of_the_University_6' , Percentage_6='$Percentage_6' , Class_Obtained_6='$Class_Obtained_6' , Clg_mode_6='$Clg_mode_6' , Clg_medium_6='$Clg_medium_6' ,  
                    Category_7='$Category_7' , Deg_Name_7='$Deg_Name_7' , Specialization_7='$Specialization_7' , Year_of_passing_7='$Year_of_passing_7' , Name_of_the_college_7='$Name_of_the_college_7' , Name_of_the_University_7='$Name_of_the_University_7' , Percentage_7='$Percentage_7' , Class_Obtained_7='$Class_Obtained_7' , Clg_mode_7='$Clg_mode_7' , Clg_medium_7='$Clg_medium_7' , 
                    Specialization_area='$Specialization_area' , Add_Qual='$Add_Qual' , Phd_title='$Phd_title' , Fac_Phd_award='$Fac_Phd_award',


                    Year_1='$Year_1',Ntl_paper_1='$Ntl_paper_1',Intl_paper_1='$Intl_paper_1',Ntl_Journal_1='$Ntl_Journal_1',
                    Intl_journal_1='$Intl_journal_1',Ntl_con_1='$Ntl_con_1',Intl_con_1='$Intl_con_1',

                    Year_2='$Year_2',Ntl_paper_2='$Ntl_paper_2',Intl_paper_2='$Intl_paper_2',Ntl_Journal_2='$Ntl_Journal_2',
                    Intl_journal_2='$Intl_journal_2',Ntl_con_2='$Ntl_con_2',Intl_con_2='$Intl_con_2',

                    Year_3='$Year_3',Ntl_paper_3='$Ntl_paper_3',Intl_paper_3='$Intl_paper_3',Ntl_Journal_3='$Ntl_Journal_3',
                    Intl_journal_3='$Intl_journal_3',Ntl_con_3='$Ntl_con_3',Intl_con_3='$Intl_con_3',

                    Year_4='$Year_4',Ntl_paper_4='$Ntl_paper_4',Intl_paper_4='$Intl_paper_4',Ntl_Journal_4='$Ntl_Journal_4',
                    Intl_journal_4='$Intl_journal_4',Ntl_con_4='$Ntl_con_4',Intl_con_4='$Intl_con_4',

                    Year_5='$Year_5',Ntl_paper_5='$Ntl_paper_5',Intl_paper_5='$Intl_paper_5',Ntl_Journal_5='$Ntl_Journal_5',
                    Intl_journal_5='$Intl_journal_5',Ntl_con_5='$Ntl_con_5',Intl_con_5='$Intl_con_5',

                    Year_6='$Year_6',Ntl_paper_6='$Ntl_paper_6',Intl_paper_6='$Intl_paper_6',Ntl_Journal_6='$Ntl_Journal_6',
                    Intl_journal_6='$Intl_journal_6',Ntl_con_6='$Ntl_con_6',Intl_con_6='$Intl_con_6',


                    Clg_Name_1='$Clg_Name_1',Designation_1='$Designation_1',Joining_Date_1='$Joining_Date_1',Rel_Cur_Date_1='$Rel_Cur_Date_1',Work_type_1='$Work_type_1',Salary_drawn_1='$Salary_drawn_1',

                    Clg_Name_2='$Clg_Name_2',Designation_2='$Designation_2',Joining_Date_2='$Joining_Date_2',Rel_Cur_Date_2='$Rel_Cur_Date_2',Work_type_2='$Work_type_2',Salary_drawn_2='$Salary_drawn_2',

                    Clg_Name_3='$Clg_Name_3',Designation_3='$Designation_3',Joining_Date_3='$Joining_Date_3',Rel_Cur_Date_3='$Rel_Cur_Date_3',Work_type_3='$Work_type_3',Salary_drawn_3='$Salary_drawn_3',

                    Clg_Name_4='$Clg_Name_4',Designation_4='$Designation_4',Joining_Date_4='$Joining_Date_4',Rel_Cur_Date_4='$Rel_Cur_Date_4',Work_type_4='$Work_type_4',Salary_drawn_4='$Salary_drawn_4',

                    Clg_Name_5='$Clg_Name_5',Designation_5='$Designation_5',Joining_Date_5='$Joining_Date_5',Rel_Cur_Date_5='$Rel_Cur_Date_5',Work_type_5='$Work_type_5',Salary_drawn_5='$Salary_drawn_5',

                    Clg_Name_6='$Clg_Name_6',Designation_6='$Designation_6',Joining_Date_6='$Joining_Date_6',Rel_Cur_Date_6='$Rel_Cur_Date_6',Work_type_6='$Work_type_6',Salary_drawn_6='$Salary_drawn_6',

                    Clg_Name_7='$Clg_Name_7',Designation_7='$Designation_7',Joining_Date_7='$Joining_Date_7',Rel_Cur_Date_7='$Rel_Cur_Date_7',Work_type_7='$Work_type_7',Salary_drawn_7='$Salary_drawn_7',

                    Total_work_exp='$Total_work_exp',books_published='$books_published',Nof_Intl_papers='$Nof_Intl_papers',Nof_Ntl_papers='$Nof_Ntl_papers',Nof_Intl_journals='$Nof_Intl_journals',Nof_Ntl_journals='$Nof_Ntl_journals',Nof_PGpro_guided='$Nof_PGpro_guided',Nof_drstu_guided='$Nof_drstu_guided',


                    Org_Name_1='$Org_Name_1' , DesignationIN_1='$DesignationIN_1' , Nature_of_work_1='$Nature_of_work_1' , Joining_DateIN_1='$Joining_DateIN_1' , Rel_Date_1='$Rel_Date_1' ,

                    Org_Name_2='$Org_Name_2' , DesignationIN_2='$DesignationIN_2' , Nature_of_work_2='$Nature_of_work_2' , Joining_DateIN_2='$Joining_DateIN_2' , Rel_Date_2='$Rel_Date_2' ,
                    
                    Org_Name_3='$Org_Name_3' , DesignationIN_3='$DesignationIN_3' , Nature_of_work_3='$Nature_of_work_3' , Joining_DateIN_3='$Joining_DateIN_3' , Rel_Date_3='$Rel_Date_3' ,

                    Org_Name_4='$Org_Name_4' , DesignationIN_4='$DesignationIN_4' , Nature_of_work_4='$Nature_of_work_4' , Joining_DateIN_4='$Joining_DateIN_4' , Rel_Date_4='$Rel_Date_4' ,
                    
                    Org_Name_5='$Org_Name_5' , DesignationIN_5='$DesignationIN_5' , Nature_of_work_5='$Nature_of_work_5' , Joining_DateIN_5='$Joining_DateIN_5' , Rel_Date_5='$Rel_Date_5' ,


                    Research_Exp='$Research_Exp' , Patents='$Patents',


                    Mem_Name_1='$Mem_Name_1',Rel_1='$Rel_1',DOB_1='$DOB_1',HEduQual_1='$HEduQual_1',Emp_status_1='$Emp_status_1',
                        Inc_mont_1='$Inc_mont_1',

                    Mem_Name_2='$Mem_Name_2',Rel_2='$Rel_2',DOB_2='$DOB_2',HEduQual_2='$HEduQual_2',Emp_status_2='$Emp_status_2',
                        Inc_mont_2='$Inc_mont_2',

                    Mem_Name_3='$Mem_Name_3',Rel_3='$Rel_3',DOB_3='$DOB_3',HEduQual_3='$HEduQual_3',Emp_status_3='$Emp_status_3',
                        Inc_mont_3='$Inc_mont_3',

                    Mem_Name_4='$Mem_Name_4',Rel_4='$Rel_4',DOB_4='$DOB_4',HEduQual_4='$HEduQual_4',Emp_status_4='$Emp_status_4',Inc_mont_4='$Inc_mont_4',

                    Mem_Name_5='$Mem_Name_5',Rel_5='$Rel_5',DOB_5='$DOB_5',HEduQual_5='$HEduQual_5',Emp_status_5='$Emp_status_5',Inc_mont_5='$Inc_mont_5',

                    Mem_Name_6='$Mem_Name_6',Rel_6='$Rel_6',DOB_6='$DOB_6',HEduQual_6='$HEduQual_6',Emp_status_6='$Emp_status_6',Inc_mont_6='$Inc_mont_6',

                    Mem_Name_7='$Mem_Name_7',Rel_7='$Rel_7',DOB_7='$DOB_7',HEduQual_7='$HEduQual_7',Emp_status_7='$Emp_status_7',Inc_mont_7='$Inc_mont_7',

                    Mem_Name_8='$Mem_Name_8',Rel_8='$Rel_8',DOB_8='$DOB_8',HEduQual_8='$HEduQual_8',Emp_status_8='$Emp_status_8',Inc_mont_8='$Inc_mont_8',

                    Mem_Name_9='$Mem_Name_9',Rel_9='$Rel_9',DOB_9='$DOB_9',HEduQual_9='$HEduQual_9',Emp_status_9='$Emp_status_9',Inc_mont_9='$Inc_mont_9' ,emg_mob_no='$emg_mob_no' ,landline_no='$landline_no' ,mot_ton='$mot_ton' ,Old_Add ='$Old_Add' ,dalit = '$dalit' ,phd_univ='$phd_univ' ,phd_comp='$phd_comp' ,ybefme='$ybefme' ,yafme ='$yafme', iob_acc_no='$iob_acc_no' ,initial_salary='$initial_salary' ,increment_salary='$increment_salary' ,projects='$projects', add_resp='$add_resp',
                    diocese_name='$diocese_name' ,church_name_place='$church_name_place',Email ='$Email',
                Lang_Known_2    ='$Lang_Known_2',
                Lang_Known_3    ='$Lang_Known_3',
                Lang_Known_4    ='$Lang_Known_4',
                Lang_Known_5    ='$Lang_Known_5',
                Lang_Known_6    ='$Lang_Known_6',
                Lang_Known_7    ='$Lang_Known_7',
                Lang_Known_8    ='$Lang_Known_8',
               
                profic_1='$profic_1',
                profic_2='$profic_2',
                profic_3='$profic_3',
                profic_4='$profic_4',
                profic_5='$profic_5',
                profic_6='$profic_6',
                profic_7='$profic_7',
                profic_8='$profic_8',
                
                prof_mem_det ='$prof_mem_det',
                other_mem_det ='$other_mem_det'
 WHERE ID='$ID'") or die (mysqli_error($con));
    }
 
 
                

            //   if($update){
            //         ("&message=success");
            //     }else{
            //         echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data failed to save, please try again.</div>';
            //     }
            // }

              if($update){
                    header("Location: profile.php?ID=".$ID."&message=success");
                    ob_end_flush();
                }else{
                    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data failed to save, please try again.</div>';
                }
                
                
            }
            
            if(isset($_GET['message']) == 'success'){
                echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data saved successfully</div>';
            }
            ?>
            
            <?php
            if($dept=="ADMIN" or $dept==$row ['Department']){
                // echo'<style>body{display:initial;}</style>';
            }else{
                header("Location: index.php");
                // echo'<style>body{display:none;}</style>';
            }
            ?>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Profile image upload</label>
                    <div class="col-sm-6">
                        <input type="file" name="file" class="form-control" value="<?php echo "uploads/". $row ['prof_img']; ?>" placeholder="Please Upload file" >&nbsp;<h5 style="font-weight:bold;">(OR)</h5>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Profile image URL</label>
                    <div class="col-sm-6">
                        <input type="text" name="prof_url" class="form-control" value="<?php echo $row ['prof_url']; ?>" placeholder="Please Enter the complete https://www.image.in/link" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">ID</label>
                    <div class="col-sm-2">
                        <input type="text" name="ID" value="<?php echo $row ['ID']; ?>" class="form-control" placeholder="ID" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-4">
                        <input type="text" name="name" value="<?php echo $row ['name']; ?>" class="form-control" placeholder="name" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Gender</label>
                    <div class="col-sm-2">
                        <select name="Gender" class="form-control">
                            <option value="<?php echo $row ['Gender']; ?>"><?php echo $row ['Gender']; ?></option>
                            <option value="">------</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-3 control-label">DOB</label>
                    <div class="col-sm-4">
                        <input type="text" name="DOB" value="<?php echo $row ['DOB']; ?>" class="input-group date form-control" date data-date-format="yyyy-mm-dd" placeholder="DOB" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Position</label>
                    <div class="col-sm-4">
                        <input type="text" name="Position" value="<?php echo $row ['Position']; ?>" class="form-control" placeholder="Position" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Official Mail ID</label>
                    <div class="col-sm-3">
                        <input type="text" name="Mailid" value="<?php echo $row ['Mailid']; ?>" class="form-control" placeholder="Official mail" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Personal mail</label>
                    <div class="col-sm-3">
                        <input type="text" name="Email" value="<?php echo $row ['Email']; ?>" class="form-control" placeholder="Personal mail" >
                    </div>
                </div>
                <!--<div class="form-group">
                    <label class="col-sm-3 control-label">Position</label>
                    <div class="col-sm-2">
                        <select name="Position" class="form-control" >
                            <option value> - Latest Position - </option>
                            <option value="Operator">Operator</option>
                            <option value="Leader">Leader</option>
                            <option value="Supervisor">Supervisor</option>
                            <option value="Manager">Manager</option>
                        </select>
                    </div>-->
                    <div class="form-group">
                    <label class="col-sm-3 control-label">Qualification</label>
                    <div class="col-sm-3">
                        <input type="text" name="Qualification" value="<?php echo $row ['Qualification']; ?>" class="form-control" placeholder="Qualification" >
                    </div>
                </div>
<!--                <div class="form-group">
                    <label class="col-sm-3 control-label">Current position</label>
                    <div class="col-sm-3">
                    <b>Current Position :</b> <span class="label label-success"><?php echo $row['Position']; ?></span>
                    </div>
                </div> -->
                <div class="form-group">
                    <label class="col-sm-3 control-label">Department</label>
                    <div class="col-sm-2">
                        <?php
                        if($dept=="ADMIN"){
                        echo'<select name="Department" class="form-control" >
                            <option value="'.$row ['Department'].'">'.$row ['Department'].'</option>
                            <option value="">------</option>
                            <option value="CSE">CSE</option>
                            <option value="ECE">ECE</option>
                            <option value="EEE">EEE</option>
                            <option value="IT">IT</option>
                            <option value="MECH">MECH</option>
                            <option value="S&H">S&H</option>
                            <option value="Non-Teaching Faculty">Non-Teaching Faculty</option>
                        </select> ';
                        }elseif($dept=="CSE"){
                        echo'<select name="Department" class="form-control" >
                            <option value="'.$row ['Department'].'">'.$row ['Department'].'</option>
                            <option value="">------</option>
                            <option value="CSE">CSE</option>
                        </select> ';
                        }elseif($dept=="IT"){
                        echo'<select name="Department" class="form-control" >
                            <option value="'.$row ['Department'].'">'.$row ['Department'].'</option>
                            <option value="">------</option>
                            <option value="IT">IT</option>
                        </select> ';
                        }elseif($dept=="ECE"){
                        echo'<select name="Department" class="form-control" >
                            <option value="'.$row ['Department'].'">'.$row ['Department'].'</option>
                            <option value="">------</option>
                            <option value="ECE">ECE</option>
                        </select> ';
                        }elseif($dept=="EEE"){
                        echo'<select name="Department" class="form-control" >
                            <option value="'.$row ['Department'].'">'.$row ['Department'].'</option>
                            <option value="">------</option>
                            <option value="EEE">EEE</option>
                        </select> ';
                        }elseif($dept=="MECH"){
                        echo'<select name="Department" class="form-control" >
                            <option value="'.$row ['Department'].'">'.$row ['Department'].'</option>
                            <option value="">------</option>
                            <option value="MECH">MECH</option>
                        </select> ';
                        }elseif($dept=="S&H"){
                        echo'<select name="Department" class="form-control" >
                            <option value="'.$row ['Department'].'">'.$row ['Department'].'</option>
                            <option value="">------</option>
                            <option value="S&H">S&H</option>
                        </select> ';
                        }else{
                        echo'<select name="Department" class="form-control" >
                            <option value="'.$row ['Department'].'">'.$row ['Department'].'</option>
                            <option value="">------</option>
                            <option value="NTF">Non-Teaching Faculty</option>
                        </select> ';    
                        }
                        ?>
                    </div>
                    <div class="col-sm-3">
                    <b>Department :</b> <span class="label label-info"><?php echo $row['Department']; ?></span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label">Faculty type</label>
                    <div class="col-sm-2">
                        <select name="Reg_Adj" class="form-control">
                            <option value="">------</option>
                            <option value="<?php echo $row ['Reg_Adj']; ?>"><?php echo $row ['Reg_Adj']; ?></option>
                            <option value="Regular">Regular</option>
                            <option value="Adjunct">Adjunct</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Communication Address</label>
                    <div class="col-sm-3">
                        <input type="text" name="Com_Add" value="<?php echo $row ['Com_Add']; ?>" class="form-control" placeholder="Communication Address" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Permanent Address</label>
                    <div class="col-sm-3">
                        <input type="text" name="Per_Add" value="<?php echo $row ['Per_Add']; ?>" class="form-control" placeholder="Permanent Address" >
                    </div>
                </div>
             <div class="form-group">
          <label class="col-sm-3 control-label">Old Address</label>
          <div class="col-sm-8">
            <input type="text" name="Old_Add" value="<?php echo $row ['Old_Add']; ?>" class="form-control" placeholder="Old address" >            
          </div>
        </div>
                <div class="form-group">
          <label class="col-sm-3 control-label">Mother tongue</label>
          <div class="col-sm-4">
            <input type="text" name="mot_ton" value="<?php echo $row ['mot_ton']; ?>" class="form-control" placeholder="Mother tongue" >            
          </div>
        </div>


                <div class="form-group">
                    <label class="col-sm-3 control-label">District</label>
                    <div class="col-sm-3">
                        <input type="text" name="Dist" value="<?php echo $row ['Dist']; ?>" class="form-control"
                         value="<?php echo $row ['Dist']; ?>" placeholder="District" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Mobile Number</label>
                    <div class="col-sm-3">
                        <input type="text" name="Mob_No" value="<?php echo $row ['Mob_No']; ?>" class="form-control" placeholder="Mobile Number" pattern="(0/91)?[6-9][0-9]{9}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Emergency mobile Number</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="emg_mob_no" value="<?php echo $row ['emg_mob_no']; ?>" placeholder="Emergency number" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Landline number</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="landline_no" value="<?php echo $row ['landline_no']; ?>"placeholder="Landline no" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Community</label>
                    <div class="col-sm-2">
                        <select name="Community" class="form-control">
                            <option value="<?php echo $row ['Community']; ?>"><?php echo $row ['Community']; ?></option>
                            <option value="">------</option>
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
            <input type="text" class="form-control" name="iob_acc_no" value="<?php echo $row ['iob_acc_no']; ?>" placeholder="IOB Account number" >
          </div>
        </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Permanent Account Number-PAN</label>
                    <div class="col-sm-4">
                        <input type="text" name="PAN_No" class="form-control" value="<?php echo $row ['PAN_No']; ?>" placeholder="PAN number" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}$">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Passport Number</label>
                    <div class="col-sm-2">
                        <input type="text" name="Passport_No" class="form-control" value="<?php echo $row ['Passport_No']; ?>" placeholder="Passport Number" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Aadhar Number</label>
                    <div class="col-sm-2">
                        <input type="text" name="Aadhar_No" class="form-control" value="<?php echo $row ['Aadhar_No']; ?>" placeholder="Aadhar Number" >
                    </div>
                </div>
                <?php
                $a=$row['Department'];
                if($a!='Non-Teaching Faculty'){
                  echo '
                <div class="form-group">
                    <label class="col-sm-3 control-label">COE Faculty Code</label>
                    <div class="col-sm-3">
                        <input type="text" name="COE_Fac_Code" class="form-control" placeholder="COE Faculty Code" value='.$row ['COE_Fac_Code'].'  >
                    </div>
                </div>  ';
                }
                else{}
                ?>            

                <?php
                $a=$row['Department'];
                if($a!='Non-Teaching Faculty'){
                  echo '
                <div class="form-group">
                    <label class="col-sm-3 control-label">AICTE Faculty Code</label>
                    <div class="col-sm-3">
                        <input type="text" name="AICTE_Fac_code" class="form-control" placeholder="AICTE Faculty Code"  value='.$row ['AICTE_Fac_code'].' >
                    </div>
                </div>  ';
                }
                else{}
                ?>         

                <div class="form-group">
                    <label class="col-sm-3 control-label">Marital_status</label>
                    <div class="col-sm-2">
                        <select name="Marital_status" class="form-control">
                            <option value="<?php echo $row ['Marital_status']; ?>"><?php echo $row ['Marital_status']; ?></option>
                            <option value="">------</option>
                            <option value="Married">Married</option>
                            <option value="Unmarried">Unmarried</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Place of Birth</label>
                    <div class="col-sm-3">
                        <input type="text" name="Birth_place" class="form-control" value="<?php echo $row ['Birth_place']; ?>" placeholder="Place of Birth" >
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-3 control-label">Religion</label>
                    <div class="col-sm-2">
                        <select name="Religion" class="form-control">
                            <option value="<?php echo $row ['Religion']; ?>"><?php echo $row ['Religion']; ?></option>
                            <option value="">------</option>
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
                            <option value="<?php echo $row ['Catholic']; ?>"><?php echo $row ['Catholic']; ?></option>
                            <option value="">------</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
          <label class="col-sm-3 control-label">If Catholic, Mention the name of the diocese</label>
          <div class="col-sm-3">
            <input type="text" name="diocese_name" class="form-control" value="<?php echo $row ['diocese_name']; ?>" placeholder="Name of the diocese if catholic" >
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Church name and place</label>
          <div class="col-sm-3">
            <input type="text" name="church_name_place" class="form-control" value="<?php echo $row ['church_name_place']; ?>" placeholder="Church name and place" >
          </div>
        </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Caste</label>
                    <div class="col-sm-3">
                        <input type="text" name="Caste" class="form-control" value="<?php echo $row ['Caste']; ?>" placeholder="Caste" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Dalit</label>
                    <div class="col-sm-2">
                        <select name="dalit" class="form-control">
                            <option value="<?php echo $row ['dalit']; ?>"><?php echo $row ['dalit']; ?></option>
                            <option value="">------</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Languages Known</label>
                  <div class="col-sm-2">
                    <input type="text" name="Lang_Known_1" class="form-control" value="<?php echo $row ['Lang_Known_1']; ?>" placeholder="Language 1">
                  </div>
                  <div class="col-xs-1 form-check">
            <select name="profic_1" class="form-control">
                            <option value="<?php echo $row ['profic_1']; ?>"><?php echo $row ['profic_1']; ?></option>
                            <option value="">------</option>
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
            <input type="text" name="Lang_Known_2" value="<?php echo $row ['Lang_Known_2']; ?>" class="form-control" placeholder="Language 2">
          </div>
          <div class="col-xs-1">
            <select name="profic_2" class="form-control">
                            <option value="<?php echo $row ['profic_2']; ?>"><?php echo $row ['profic_2']; ?></option>
                            <option value="">------</option>
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
            <input type="text" name="Lang_Known_3" value="<?php echo $row ['Lang_Known_3']; ?>" class="form-control" placeholder="Language 3">
          </div>
          <div class="col-xs-1">
            <select name="profic_3" class="form-control">
                            <option value="<?php echo $row ['profic_3']; ?>"><?php echo $row ['profic_3']; ?></option>
                            <option value="">------</option>
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
            <input type="text" name="Lang_Known_4" class="form-control" value="<?php echo $row ['Lang_Known_4']; ?>" placeholder="Language 4">
          </div>
          <div class="col-xs-1">
            <select name="profic_4" class="form-control">
                            <option value="<?php echo $row ['profic_4']; ?>"><?php echo $row ['profic_4']; ?></option>
                            <option value="">------</option>
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
            <input type="text" name="Lang_Known_5" class="form-control" value="<?php echo $row ['Lang_Known_5']; ?>" placeholder="Language 5">
          </div>
          <div class="col-xs-1">
            <select name="profic_5" class="form-control">
                            <option value="<?php echo $row ['profic_5']; ?>"><?php echo $row ['profic_5']; ?></option>
                            <option value="">------</option>
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
            <input type="text" name="Lang_Known_6" class="form-control" value="<?php echo $row ['Lang_Known_6']; ?>" placeholder="Language 6">
          </div>
          <div class="col-xs-1">
            <select name="profic_6" class="form-control">
                            <option value="<?php echo $row ['profic_6']; ?>"><?php echo $row ['profic_6']; ?></option>
                            <option value="">------</option>
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
            <input type="text" name="Lang_Known_7" class="form-control" value="<?php echo $row ['Lang_Known_7']; ?>" placeholder="Language 7">
          </div>
          <div class="col-xs-1">
            <select name="profic_7" class="form-control">
                            <option value="<?php echo $row ['profic_7']; ?>"><?php echo $row ['profic_7']; ?></option>
                            <option value="">------</option>
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
            <input type="text" name="Lang_Known_8" class="form-control" value="<?php echo $row ['Lang_Known_8']; ?>"placeholder="Language 8">
          </div>
          <div class="col-xs-1">
            <select name="profic_8" class="form-control">
                            <option value="<?php echo $row ['profic_8']; ?>"><?php echo $row ['profic_8']; ?></option>
                            <option value="">------</option>
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
                        <input type="text" name="Extracurricular" class="form-control" value="<?php echo $row ['Extracurricular']; ?>" placeholder="Extracurricular" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Father Name</label>
                    <div class="col-sm-3">
                        <input type="text" name="Father_name" class="form-control" value="<?php echo $row ['Father_name']; ?>" placeholder="Father Name" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Mother Name</label>
                    <div class="col-sm-3">
                        <input type="text" name="Mother_name" class="form-control" value="<?php echo $row ['Mother_name']; ?>" placeholder="Mother Name" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Spouse Name</label>
                    <div class="col-sm-3">
                        <input type="text" name="Spouse_name" class="form-control" value="<?php echo $row ['Spouse_name']; ?>" placeholder="Spouse name" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Spouse Occupation</label>
                    <div class="col-sm-3">
                        <input type="text" name="Spouse_Occupation" class="form-control" value="<?php echo $row ['Spouse_Occupation']; ?>" placeholder="Spouse Occupation" >
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-sm-3 control-label">Blood Group</label>
                    <div class="col-sm-2">
                        <select name="Blood_grp" class="form-control">
                            <option value="<?php echo $row ['Blood_grp']; ?>"> <?php echo $row ['Blood_grp']; ?> </option>
                            <option value="">------</option>
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
                            title="Enter Pincode" value="<?php echo $row ['Postal_code']; ?>" placeholder="Postal code" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">STD Code</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php echo $row ['STD_Code']; ?>" name="STD_Code" title="Enter STD" placeholder="STD" >
                    </div>
                </div>
                <div class="form-group">
          <label class="col-sm-3 control-label">Initial salary</label>
          <div class="col-sm-4">
            <input type="number" class="form-control" name="initial_salary" value="<?php echo $row ['initial_salary']; ?>" title="Enter Monthly Pay" placeholder="Initial salary" >
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Increment salary</label>
          <div class="col-sm-4">
            <input type="number" class="form-control" name="increment_salary" value="<?php echo $row ['increment_salary']; ?>" title="Enter Monthly Pay" placeholder="Increment salary" >
          </div>
        </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Gross Pay per Month</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="GPM" value="<?php echo $row ['GPM']; ?>" title="Enter Monthly Pay" placeholder="Monthly Income" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Joining Date</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" name="Joining_Date" value="<?php echo $row ['Joining_Date']; ?>"title="College Join Date" placeholder="LICET JOINING DATE" >
                    </div>
                </div>
                <div class="form-group">
          <label class="col-sm-3 control-label">Additional responsibilities in college</label>
          <div class="col-sm-3">
            <input type="text" name="add_resp" class="form-control" value="<?php echo $row ['add_resp']; ?>" placeholder="Additional responsibilities" >
          </div>
        </div>


                <div class="form-group">
                    <label class="col-sm-3 control-label">UG Degree</label>
                    <div class="col-sm-3">
                        <input type="text" name="UG_deg" class="form-control" value="<?php echo $row ['UG_deg']; ?>" placeholder="UG degree" >
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-3 control-label">PG Degree</label>
                    <div class="col-sm-3">
                        <input type="text" name="PG_deg" class="form-control" value="<?php echo $row ['PG_deg']; ?>" placeholder="PG degree">
                    </div>
                </div>

                <?php
                $a=$row['Department'];
                if($a!='Non-Teaching Faculty'){
                  echo '
                <div class="form-group">
                    <label class="col-sm-3 control-label">Doctorate Degree</label>
                    <div class="col-sm-3">
                        <input type="text" name="Dr_deg" class="form-control" placeholder="Doctorate degree"  value='.$row ['Dr_deg'].' >
                    </div>
                </div>  ';
                }
                else{}
                ?>            



                <div class="form-group">
                    <label class="col-sm-3 control-label">Physically  challenged</label>
                    <div class="col-sm-2">
                        <select name="Phy_Chl" class="form-control">
                            <option value="<?php echo $row ['Phy_Chl']; ?>"><?php echo $row ['Phy_Chl']; ?></option>
                            <option value="">------</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label">Professional Membership Details</label>
          <div class="col-sm-6">
            <input type="text" name="prof_mem_det" class="form-control" placeholder="Professional Membership" value="<?php echo $row ['prof_mem_det']; ?>">
          </div>
        </div>
                    
                <div class="form-group">
                    <label class="col-sm-3 control-label">Other Membership Details</label>
          <div class="col-sm-6">
            <input type="text" name="other_mem_det" class="form-control" placeholder="Other Membership" value="<?php echo $row ['other_mem_det']; ?>">
          </div>
        </div>
            <?php 
                $a=$row['Department'];
                if($a!='Non-Teaching Faculty'){
                  echo'
                <div class="form-group">
                    <label class="col-sm-3 control-label">Are you an expert member of AICTE committees</label>
                    <div class="col-sm-2">
                        <select name="AICTE_ex_mem" class="form-control">
                        <option value="">------</option>
                            <option value= '.$row ['AICTE_ex_mem'].'><'. $row ['AICTE_ex_mem'].'></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>';
              }
              else{}
                ?>
                <br><br>

                <hr>
                <div class= "text_syle" >
                <center><h3 style="text-align: center;font-family: monospace; color: #322d65; font-weight: bold;">School Details</h3></center>
                </div>
                <hr>


                <div>
                <!-- <center><h3>1</h3></center> -->
                <div class="form-group">
                    <label class="col-sm-2 control-label">1.  School Qualification</label>
                    <div class="col-sm-2">
                        <select name="Schl_Qual_1" class="form-control">
                            <option value="<?php echo $row ['Schl_Qual_1']; ?>"> <?php echo $row ['Schl_Qual_1']; ?> </option>
                            <option value="">------</option>
                            <option value="10th">10th Grade</option>
                            <option value="12th">12th Grade</option>
                        </select>
                    </div>
                    <label class="col-sm-2 control-label">School Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Schl_name_1" class="form-control" value="<?php echo $row ['Schl_name_1']; ?>"placeholder="School Name" >
                    </div>
                    <label class="col-sm-2 control-label">School Mode</label>
                    <div class="col-sm-2">
                        <select name="Schl_mode_1" class="form-control">
                            <option value="<?php echo $row ['Schl_mode_1']; ?>"><?php echo $row ['Schl_mode_1']; ?></option>
                            <option value="">------</option>
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
                        <input type="text" name="Schl_medium_1" class="form-control" value="<?php echo $row ['Schl_medium_1']; ?>"placeholder="School Medium" >
                    </div>
                    <label class="col-sm-2 control-label">Percentage Scored</label>
                    <div class="col-sm-2">              
                        <input type="number" name="schl_per_1" class="form-control" value="<?php echo $row ['schl_per_1']; ?>" placeholder="School Percentage" >
                    </div>
                </div>
                </div>

                <br><br>
<!-- Second School -->

                <div>
                <!-- <center><h3>1</h3></center> -->
                <div class="form-group">

                    <label class="col-sm-2 control-label">2.  School Qualification</label>
                    <div class="col-sm-2">
                        <select name="Schl_Qual_2" class="form-control">
                            <option value="<?php echo $row ['Schl_Qual_2']; ?>"> <?php echo $row ['Schl_Qual_2']; ?> </option>
                            <option value="">------</option>
                            <option value="10th">10th Grade</option>
                            <option value="12th">12th Grade</option>
                        </select>
                    </div>
                    <label class="col-sm-2 control-label">School Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Schl_name_2" class="form-control" value="<?php echo $row ['Schl_name_2']; ?>" placeholder="School Name" >
                    </div>
                    <label class="col-sm-2 control-label">School Mode</label>
                    <div class="col-sm-2">
                        <select name="Schl_mode_2" class="form-control">
                            <option value="<?php echo $row ['Schl_mode_2']; ?>"> <?php echo $row ['Schl_mode_2']; ?> </option>
                            <option value="">------</option>
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
                        <input type="text" name="Schl_medium_2" class="form-control" value="<?php echo $row ['Schl_medium_2']; ?>"placeholder="School Medium" >
                    </div>
                    <label class="col-sm-2 control-label">Percentage Scored</label>
                    <div class="col-sm-2">              
                        <input type="number" name="schl_per_2" class="form-control" value="<?php echo $row ['schl_per_2']; ?>" placeholder="School Percentage" >
                    </div>
                </div>
                </div>

                <br><br><br>
                <hr>
                <center><h3 style="text-align: center;font-family: monospace; color: #322d65; font-weight: bold;">College Details</h3></center>
                <hr>


                <div>
                <!-- <center><h3>1</h3></center> -->
                <div class="form-group">
                    <label class="col-sm-2 control-label">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Category</label>
                    <div class="col-sm-2">
                        <select name="Category_1" class="form-control">
                            <option value="<?php echo $row ['Category_1']; ?>"> <?php echo $row ['Category_1']; ?> </option>
                            <option value="">------</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Arts & Science">Arts & Science</option>
                            <option value="Engineering">Engineering</option>
                        </select>
                    </div>
                    <label class="col-sm-2 control-label">Degree Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Deg_Name_1" class="form-control" value="<?php echo $row ['Deg_Name_1']; ?>"placeholder="Degree Name" >
                    </div>
                    <label class="col-sm-2 control-label">Specialization</label>
                    <div class="col-sm-2">
                        <input type="text" name="Specialization_1" class="form-control" value="<?php echo $row ['Specialization_1']; ?>"placeholder="Specialization" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Year of Passing</label>
                    <div class="col-sm-2">
                        <input type="text" name="Year_of_passing_1" class="form-control" value="<?php echo $row ['Year_of_passing_1']; ?>" placeholder="Year of Passing" >
                    </div>
                    <label class="col-sm-2 control-label">College Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Name_of_the_college_1" class="form-control" value="<?php echo $row ['Name_of_the_college_1']; ?>" placeholder="College Name">
                    </div>
                    <label class="col-sm-2 control-label">University Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Name_of_the_University_1" class="form-control" value="<?php echo $row ['Name_of_the_University_1']; ?>" placeholder="University Name" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Percentage</label>
                    <div class="col-sm-2">
                        <input type="text" name="Percentage_1" class="form-control" value="<?php echo $row ['Percentage_1']; ?>" placeholder="Percentage" >
                    </div>
                    <label class="col-sm-2 control-label">Class Obtained</label>
                    <div class="col-sm-2">
                        <select name="Class_Obtained_1" class="form-control">
                            <option value="<?php echo $row ['Class_Obtained_1']; ?>"> <?php echo $row ['Class_Obtained_1']; ?> </option>
                            <option value="">------</option>
                            <option value="First Class with Distinction">First Class with Distinction</option>
                            <option value="First Class">First Class</option>
                            <option value="Second Class">Second Class</option>
                        </select>
                    </div>
                    <label class="col-sm-2 control-label">College Mode</label>
                    <div class="col-sm-2">
                        <select name="Clg_mode_1" class="form-control">
                            <option value="<?php echo $row ['Clg_mode_1']; ?>"> <?php echo $row ['Clg_mode_1']; ?> </option>
                            <option value="">------</option>
                            <option value="Regular">Regular</option>
                            <option value="Correspondence">Correspondence</option>
                        </select>
                    </div> 
                </div>
                <div class="form-group">                 
                    <label class="col-sm-2 control-label">College Medium</label>
                    <div class="col-sm-2">
                        <input type="text" name="Clg_medium_1" class="form-control" value="<?php echo $row ['Clg_medium_1']; ?>" placeholder="College Medium" >
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
                            <option value="<?php echo $row ['Category_2']; ?>"> <?php echo $row ['Category_2']; ?> </option>
                            <option value="">------</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Arts & Science">Arts & Science</option>
                            <option value="Engineering">Engineering</option>
                        </select>
                    </div>
                    <label class="col-sm-2 control-label">Degree Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Deg_Name_2" class="form-control" value="<?php echo $row ['Deg_Name_2']; ?>" placeholder="Degree Name" >
                    </div>
                    <label class="col-sm-2 control-label">Specialization</label>
                    <div class="col-sm-2">
                        <input type="text" name="Specialization_2" class="form-control" value="<?php echo $row ['Specialization_2']; ?>" placeholder="Specialization" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Year of Passing</label>
                    <div class="col-sm-2">
                        <input type="text" name="Year_of_passing_2" class="form-control" value="<?php echo $row ['Year_of_passing_2']; ?>" placeholder="Year of Passing" >
                    </div>
                    <label class="col-sm-2 control-label">College Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Name_of_the_college_2" class="form-control" value="<?php echo $row ['Name_of_the_college_2']; ?>" placeholder="College Name">
                    </div>
                    <label class="col-sm-2 control-label">University Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Name_of_the_University_2" class="form-control" value="<?php echo $row ['Name_of_the_University_2']; ?>" placeholder="University Name" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Percentage</label>
                    <div class="col-sm-2">
                        <input type="text" name="Percentage_2" class="form-control" value="<?php echo $row ['Percentage_2']; ?>" placeholder="Percentage" >
                    </div>
                    <label class="col-sm-2 control-label">Class Obtained</label>
                    <div class="col-sm-2">
                        <select name="Class_Obtained_2" class="form-control">
                            <option value="<?php echo $row ['Class_Obtained_2']; ?>"> <?php echo $row ['Class_Obtained_2']; ?> </option>
                            <option value="">------</option>
                            <option value="First Class with Distinction">First Class with Distinction</option>
                            <option value="First Class">First Class</option>
                            <option value="Second Class">Second Class</option>
                        </select>
                    </div>
                    <label class="col-sm-2 control-label">College Mode</label>
                    <div class="col-sm-2">
                        <select name="Clg_mode_2" class="form-control">
                            <option value="<?php echo $row ['Clg_mode_2']; ?>"> <?php echo $row ['Clg_mode_2']; ?> </option>
                            <option value="">------</option>
                            <option value="Regular">Regular</option>
                            <option value="Correspondence">Correspondence</option>
                        </select>
                    </div> 
                </div>
                <div class="form-group">                 
                    <label class="col-sm-2 control-label">College Medium</label>
                    <div class="col-sm-2">
                        <input type="text" name="Clg_medium_2" class="form-control" value="<?php echo $row ['Clg_medium_2']; ?>" placeholder="College Medium" >
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
                            <option value="<?php echo $row ['Category_3']; ?>"> <?php echo $row ['Category_3']; ?> </option>
                            <option value="">------</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Arts & Science">Arts & Science</option>
                            <option value="Engineering">Engineering</option>
                        </select>
                    </div>
                    <label class="col-sm-2 control-label">Degree Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Deg_Name_3" class="form-control" value="<?php echo $row ['Deg_Name_3']; ?>" placeholder="Degree Name" >
                    </div>
                    <label class="col-sm-2 control-label">Specialization</label>
                    <div class="col-sm-2">
                        <input type="text" name="Specialization_3" class="form-control" value="<?php echo $row ['Specialization_3']; ?>"placeholder="Specialization" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Year of Passing</label>
                    <div class="col-sm-2">
                        <input type="text" name="Year_of_passing_3" class="form-control" value="<?php echo $row ['Year_of_passing_3']; ?>" placeholder="Year of Passing" >
                    </div>
                    <label class="col-sm-2 control-label">College Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Name_of_the_college_3" class="form-control" value="<?php echo $row ['Name_of_the_college_3']; ?>" placeholder="College Name" >
                    </div>
                    <label class="col-sm-2 control-label">University Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Name_of_the_University_3" class="form-control" value="<?php echo $row ['Name_of_the_University_3']; ?>" placeholder="University Name" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Percentage</label>
                    <div class="col-sm-2">
                        <input type="text" name="Percentage_3" class="form-control" value="<?php echo $row ['Percentage_3']; ?>"placeholder="Percentage" >
                    </div>
                    <label class="col-sm-2 control-label">Class Obtained</label>
                    <div class="col-sm-2">
                        <select name="Class_Obtained_3" class="form-control">
                            <option value="<?php echo $row ['Class_Obtained_3']; ?>"> <?php echo $row ['Class_Obtained_3']; ?> </option>
                            <option value="">------</option>
                            <option value="First Class with Distinction">First Class with Distinction</option>
                            <option value="First Class">First Class</option>
                            <option value="Second Class">Second Class</option>
                        </select>
                    </div>
                    <label class="col-sm-2 control-label">College Mode</label>
                    <div class="col-sm-2">
                        <select name="Clg_mode_3" class="form-control">
                            <option value="<?php echo $row ['Clg_mode_3']; ?>"> <?php echo $row ['Clg_mode_3']; ?> </option>
                            <option value="">------</option>
                            <option value="Regular">Regular</option>
                            <option value="Correspondence">Correspondence</option>
                        </select>
                    </div> 
                </div>
                <div class="form-group">                 
                    <label class="col-sm-2 control-label">College Medium</label>
                    <div class="col-sm-2">
                        <input type="text" name="Clg_medium_3" class="form-control" value="<?php echo $row ['Clg_medium_3']; ?>" placeholder="College Medium" >
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
                            <option value="<?php echo $row ['Category_4']; ?>"> <?php echo $row ['Category_4']; ?> </option>
                            <option value="">------</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Arts & Science">Arts & Science</option>
                            <option value="Engineering">Engineering</option>
                        </select>
                    </div>
                    <label class="col-sm-2 control-label">Degree Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Deg_Name_4" class="form-control" value="<?php echo $row ['Deg_Name_4']; ?>" placeholder="Degree Name" >
                    </div>
                    <label class="col-sm-2 control-label">Specialization</label>
                    <div class="col-sm-2">
                        <input type="text" name="Specialization_4" class="form-control" value="<?php echo $row ['Specialization_4']; ?>"placeholder="Specialization" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Year of Passing</label>
                    <div class="col-sm-2">
                        <input type="text" name="Year_of_passing_4" class="form-control" value="<?php echo $row ['Year_of_passing_4']; ?>" placeholder="Year of Passing" >
                    </div>
                    <label class="col-sm-2 control-label">College Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Name_of_the_college_4" class="form-control" value="<?php echo $row ['Name_of_the_college_4']; ?>" placeholder="College Name" >
                    </div>
                    <label class="col-sm-2 control-label">University Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Name_of_the_University_4" class="form-control" value="<?php echo $row ['Name_of_the_University_4']; ?>" placeholder="University Name" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Percentage</label>
                    <div class="col-sm-2">
                        <input type="text" name="Percentage_4" class="form-control" value="<?php echo $row ['Percentage_4']; ?>"placeholder="Percentage" >
                    </div>
                    <label class="col-sm-2 control-label">Class Obtained</label>
                    <div class="col-sm-2">
                        <select name="Class_Obtained_4" class="form-control">
                            <option value="">------</option>
                            <option value="<?php echo $row ['Class_Obtained_4']; ?>"> <?php echo $row ['Class_Obtained_4']; ?> </option>
                            <option value="First Class with Distinction">First Class with Distinction</option>
                            <option value="First Class">First Class</option>
                            <option value="Second Class">Second Class</option>
                        </select>
                    </div>
                    <label class="col-sm-2 control-label">College Mode</label>
                    <div class="col-sm-2">
                        <select name="Clg_mode_4" class="form-control">
                            <option value="<?php echo $row ['Clg_mode_4']; ?>"> <?php echo $row ['Clg_mode_4']; ?> </option>
                            <option value="">------</option>
                            <option value="Regular">Regular</option>
                            <option value="Correspondence">Correspondence</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">                  
                    <label class="col-sm-2 control-label">College Medium</label>
                    <div class="col-sm-2">
                        <input type="text" name="Clg_medium_4" class="form-control" value="<?php echo $row ['Clg_medium_4']; ?>" placeholder="College Medium" >
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
                            <option value="<?php echo $row ['Category_5']; ?>"> <?php echo $row ['Category_5']; ?> </option>
                            <option value="">------</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Arts & Science">Arts & Science</option>
                            <option value="Engineering">Engineering</option>
                        </select>
                    </div>
                    <label class="col-sm-2 control-label">Degree Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Deg_Name_5" class="form-control" value="<?php echo $row ['Deg_Name_5']; ?>" placeholder="Degree Name" >
                    </div>
                    <label class="col-sm-2 control-label">Specialization</label>
                    <div class="col-sm-2">
                        <input type="text" name="Specialization_5" class="form-control" value="<?php echo $row ['Specialization_5']; ?>"placeholder="Specialization" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Year of Passing</label>
                    <div class="col-sm-2">
                        <input type="text" name="Year_of_passing_5" class="form-control" value="<?php echo $row ['Year_of_passing_5']; ?>" placeholder="Year of Passing" >
                    </div>
                    <label class="col-sm-2 control-label">College Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Name_of_the_college_5" class="form-control" value="<?php echo $row ['Name_of_the_college_5']; ?>" placeholder="College Name" >
                    </div>
                    <label class="col-sm-2 control-label">University Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Name_of_the_University_5" class="form-control" value="<?php echo $row ['Name_of_the_University_5']; ?>" placeholder="University Name" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Percentage</label>
                    <div class="col-sm-2">
                        <input type="text" name="Percentage_5" class="form-control" value="<?php echo $row ['Percentage_5']; ?>"placeholder="Percentage" >
                    </div>
                    <label class="col-sm-2 control-label">Class Obtained</label>
                    <div class="col-sm-2">
                        <select name="Class_Obtained_5" class="form-control">
                            <option value="<?php echo $row ['Class_Obtained_5']; ?>"> <?php echo $row ['Class_Obtained_5']; ?> </option>
                            <option value="">------</option>
                            <option value="First Class with Distinction">First Class with Distinction</option>
                            <option value="First Class">First Class</option>
                            <option value="Second Class">Second Class</option>
                        </select>
                    </div>
                    <label class="col-sm-2 control-label">College Mode</label>
                    <div class="col-sm-2">
                        <select name="Clg_mode_5" class="form-control">
                            <option value="<?php echo $row ['Clg_mode_5']; ?>"> <?php echo $row ['Clg_mode_5']; ?> </option>
                            <option value="">------</option>
                            <option value="Regular">Regular</option>
                            <option value="Correspondence">Correspondence</option>
                        </select>
                    </div> 
                </div>
                <div class="form-group">                 
                    <label class="col-sm-2 control-label">College Medium</label>
                    <div class="col-sm-2">
                        <input type="text" name="Clg_medium_5" class="form-control" value="<?php echo $row ['Clg_medium_5']; ?>" placeholder="College Medium" >
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
                            <option value="<?php echo $row ['Category_6']; ?>"> <?php echo $row ['Category_6']; ?> </option>
                            <option value="">------</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Arts & Science">Arts & Science</option>
                            <option value="Engineering">Engineering</option>
                        </select>
                    </div>
                    <label class="col-sm-2 control-label">Degree Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Deg_Name_6" class="form-control" value="<?php echo $row ['Deg_Name_6']; ?>" placeholder="Degree Name" >
                    </div>
                    <label class="col-sm-2 control-label">Specialization</label>
                    <div class="col-sm-2">
                        <input type="text" name="Specialization_6" class="form-control" value="<?php echo $row ['Specialization_6']; ?>"placeholder="Specialization" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Year of Passing</label>
                    <div class="col-sm-2">
                        <input type="text" name="Year_of_passing_6" class="form-control" value="<?php echo $row ['Year_of_passing_6']; ?>" placeholder="Year of Passing" >
                    </div>
                    <label class="col-sm-2 control-label">College Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Name_of_the_college_6" class="form-control" value="<?php echo $row ['Name_of_the_college_6']; ?>" placeholder="College Name" >
                    </div>
                    <label class="col-sm-2 control-label">University Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Name_of_the_University_6" class="form-control" value="<?php echo $row ['Name_of_the_University_6']; ?>" placeholder="University Name" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Percentage</label>
                    <div class="col-sm-2">
                        <input type="text" name="Percentage_6" class="form-control" value="<?php echo $row ['Percentage_6']; ?>"placeholder="Percentage" >
                    </div>
                    <label class="col-sm-2 control-label">Class Obtained</label>
                    <div class="col-sm-2">
                        <select name="Class_Obtained_6" class="form-control">
                            <option value="<?php echo $row ['Class_Obtained_6']; ?>"> <?php echo $row ['Class_Obtained_6']; ?> </option>
                            <option value="">------</option>
                            <option value="First Class with Distinction">First Class with Distinction</option>
                            <option value="First Class">First Class</option>
                            <option value="Second Class">Second Class</option>
                        </select>
                    </div>
                    <label class="col-sm-2 control-label">College Mode</label>
                    <div class="col-sm-2">
                        <select name="Clg_mode_6" class="form-control">
                            <option value="<?php echo $row ['Clg_mode_6']; ?>"> <?php echo $row ['Clg_mode_6']; ?> </option>
                            <option value="">------</option>
                            <option value="Regular">Regular</option>
                            <option value="Correspondence">Correspondence</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">                  
                    <label class="col-sm-2 control-label">College Medium</label>
                    <div class="col-sm-2">
                        <input type="text" name="Clg_medium_6" class="form-control" value="<?php echo $row ['Clg_medium_6']; ?>" placeholder="College Medium" >
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
                            <option value="<?php echo $row ['Category_7']; ?>"> <?php echo $row ['Category_7']; ?> </option>
                            <option value="">------</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Arts & Science">Arts & Science</option>
                            <option value="Engineering">Engineering</option>
                        </select>
                    </div>
                    <label class="col-sm-2 control-label">Degree Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Deg_Name_7" class="form-control" value="<?php echo $row ['Deg_Name_7']; ?>" placeholder="Degree Name" >
                    </div>
                    <label class="col-sm-2 control-label">Specialization</label>
                    <div class="col-sm-2">
                        <input type="text" name="Specialization_7" class="form-control" value="<?php echo $row ['Specialization_7']; ?>"placeholder="Specialization" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Year of Passing</label>
                    <div class="col-sm-2">
                        <input type="text" name="Year_of_passing_7" class="form-control" value="<?php echo $row ['Year_of_passing_7']; ?>" placeholder="Year of Passing" >
                    </div>
                    <label class="col-sm-2 control-label">College Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Name_of_the_college_7" class="form-control" value="<?php echo $row ['Name_of_the_college_7']; ?>" placeholder="College Name" >
                    </div>
                    <label class="col-sm-2 control-label">University Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Name_of_the_University_7" class="form-control" value="<?php echo $row ['Name_of_the_University_7']; ?>" placeholder="University Name" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Percentage</label>
                    <div class="col-sm-2">
                        <input type="text" name="Percentage_7" class="form-control" value="<?php echo $row ['Percentage_7']; ?>"placeholder="Percentage" >
                    </div>
                    <label class="col-sm-2 control-label">Class Obtained</label>
                    <div class="col-sm-2">
                        <select name="Class_Obtained_7" class="form-control">
                            <option value="<?php echo $row ['Class_Obtained_7']; ?>"> <?php echo $row ['Class_Obtained_7']; ?> </option>
                            <option value="">------</option>
                            <option value="First Class with Distinction">First Class with Distinction</option>
                            <option value="First Class">First Class</option>
                            <option value="Second Class">Second Class</option>
                        </select>
                    </div>
                    <label class="col-sm-2 control-label">College Mode</label>
                    <div class="col-sm-2">
                        <select name="Clg_mode_7" class="form-control">
                            <option value="<?php echo $row ['Clg_mode_7']; ?>"> <?php echo $row ['Clg_mode_7']; ?> </option>
                            <option value="">------</option>
                            <option value="Regular">Regular</option>
                            <option value="Correspondence">Correspondence</option>
                        </select>
                    </div>  
                </div>
                <div class="form-group">               
                    <label class="col-sm-2 control-label">College Medium</label>
                    <div class="col-sm-2">
                        <input type="text" name="Clg_medium_7" class="form-control" value="<?php echo $row ['Clg_medium_7']; ?>" placeholder="College Medium" >
                    </div>
                </div>
                </div>


                <div class="form-group">
                <label class="col-sm-2 control-label">Area of Speacialization </label>
                    <div class="col-sm-10">
                        <input type="text" name="Specialization_area" class="form-control" 
                        value="<?php echo $row ['Specialization_area']; ?>" placeholder="Area of Speacialization " >
                    </div>  
                </div>

                <div class="form-group">
                <label class="col-sm-2 control-label">Additional Qualification</label>
                    <div class="col-sm-10">
                        <input type="text" name="Add_Qual" class="form-control" value="<?php echo $row ['Add_Qual']; ?>" placeholder="Additional Qualification" >
                    </div>
                </div>

                <?php
                $a=$row['Department'];
                if($a!='Non-Teaching Faculty'){
                  echo '
                <div class="form-group">
                    <label class="col-sm-3 control-label">Ph.D Title</label>
                    <div class="col-sm-3">
                        <input type="text" name="Phd_title" class="form-control" placeholder="Thesis title" value='.$row ['Phd_title'].' >
                    </div>
                </div>  ';
                }
                else{}
                ?>
                <?php
                $a=$row['Department'];
                if($a!='Non-Teaching Faculty'){
                  echo '
                <div class="form-group">
                    <label class="col-sm-3 control-label">Faculty in which PhD was awarded</label>
                    <div class="col-sm-3">
                        <input type="text" name="Fac_Phd_award" class="form-control" placeholder="Faculty in which PhD was awarded" value='.$row ['Fac_Phd_award'].'>
                    </div>
                </div>  ';
                }
                else{}
                ?>
              <?php
                $a=$row['Department'];
                if($a!='Non-Teaching Faculty'){
                  echo '
                <div class="form-group">
                    <label class="col-sm-3 control-label">Ph.D University</label>
                    <div class="col-sm-3">
                        <input type="text" name="phd_univ" class="form-control" placeholder="Ph.D University" value='.$row ['phd_univ'].'>
                    </div>
                </div>  ';
                }
                else{}
                ?>
        <?php
                $a=$row['Department'];
                if($a!='Non-Teaching Faculty'){
                  echo '
                <div class="form-group">
                    <label class="col-sm-3 control-label">Ph.D Year of completion</label>
                    <div class="col-sm-3">
                        <input type="text" name="phd_comp" class="form-control" placeholder="Ph.D Year of completion"  value='.$row ['phd_comp'].' >
                    </div>
                </div>  ';
                }
                else{}
                ?>        
              <br><br>
                <hr>

<!-- *******************************************************Academic Experience********************************************************** -->

                
                <center><h3 style="text-align: center;font-family: monospace; color: #322d65; font-weight: bold;">Academic Experience</h3></center>
                <hr>
                
                <div>
                <!-- <center><h3>1</h3></center> -->
                <div class="form-group">

                    <label class="col-sm-2 control-label">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  College Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Clg_Name_1" class="form-control" value="<?php echo $row ['Clg_Name_1']; ?>" placeholder="College Name">
                    </div>
                    <label class="col-sm-2 control-label">Designation</label>
                    <div class="col-sm-2">
                        <input type="text" name="Designation_1" class="form-control" value="<?php echo $row ['Designation_1']; ?>" placeholder="Designation" >
                    </div>
                    <label class="col-sm-2 control-label">Joining Date</label>
                    <div class="col-sm-2">
                        <input type="date" name="Joining_Date_1" class="form-control" value="<?php echo $row ['Joining_Date_1']; ?>" placeholder="Joining Date" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Releiving date/Current date for presently working Institutions</label>
                    <div class="col-sm-2">
                        <input type="date" name="Rel_Cur_Date_1" class="form-control" value="<?php echo $row ['Rel_Cur_Date_1']; ?>" placeholder="Relieving/Current date" >
                    </div>

                    <label class="col-sm-2 control-label">Work Type</label>
                    <div class="col-sm-2">
                        <select name="Work_type_1" class="form-control">
                            <option value="<?php echo $row ['Work_type_1']; ?>"><?php echo $row ['Work_type_1']; ?> </option>
                            <option value="">------</option>
                            <option value="Regular">Regular</option>
                            <option value="Part Time">Part Time</option>
                        </select>
                    </div>
                    <label class="col-sm-2 control-label">Salary Drawn</label>
                    <div class="col-sm-2">              
                        <input type="number" name="Salary_drawn_1" class="form-control" value="<?php echo $row ['Salary_drawn_1']; ?>" placeholder="Salary Drawn">
                    </div>
                </div>
                </div>
                <br>

                <div>
                <!-- <center><h3>1</h3></center> -->
                <div class="form-group">

                    <label class="col-sm-2 control-label">2. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; College Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Clg_Name_2" class="form-control" value="<?php echo $row ['Clg_Name_2']; ?>" placeholder="College Name">
                    </div>
                    <label class="col-sm-2 control-label">Designation</label>
                    <div class="col-sm-2">
                        <input type="text" name="Designation_2" class="form-control" value="<?php echo $row ['Designation_2']; ?>" placeholder="Designation" >
                    </div>
                    <label class="col-sm-2 control-label">Joining Date</label>
                    <div class="col-sm-2">
                        <input type="date" name="Joining_Date_2" class="form-control" value="<?php echo $row ['Joining_Date_2']; ?>" placeholder="Joining Date" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Releiving date/Current date for presently working Institutions</label>
                    <div class="col-sm-2">
                        <input type="date" name="Rel_Cur_Date_2" class="form-control" value="<?php echo $row ['Rel_Cur_Date_2']; ?>" placeholder="Relieving/Current date" >
                    </div>
                    <label class="col-sm-2 control-label">Work Type</label>
                    <div class="col-sm-2">
                        <select name="Work_type_2" class="form-control">
                            <option value="<?php echo $row ['Work_type_2']; ?>"><?php echo $row ['Work_type_2']; ?> </option>
                            <option value="">------</option>
                            <option value="Regular">Regular</option>
                            <option value="Part Time">Part Time</option>
                        </select>
                    </div>
                    <label class="col-sm-2 control-label">Salary Drawn</label>
                    <div class="col-sm-2">              
                        <input type="number" name="Salary_drawn_2" class="form-control" value="<?php echo $row ['Salary_drawn_2']; ?>" placeholder="Salary Drawn">
                    </div>
                </div>
                </div>
                <br>




                <div>
                <!-- <center><h3>1</h3></center> -->
                <div class="form-group">

                    <label class="col-sm-2 control-label">3. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; College Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Clg_Name_3" class="form-control" value="<?php echo $row ['Clg_Name_3']; ?>" placeholder="College Name">
                    </div>
                    <label class="col-sm-2 control-label">Designation</label>
                    <div class="col-sm-2">
                        <input type="text" name="Designation_3" class="form-control" value="<?php echo $row ['Designation_3']; ?>" placeholder="Designation" >
                    </div>
                    <label class="col-sm-2 control-label">Joining Date</label>
                    <div class="col-sm-2">
                        <input type="date" name="Joining_Date_3" class="form-control" value="<?php echo $row ['Joining_Date_3']; ?>" placeholder="Joining Date" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Releiving date/Current date for presently working Institutions</label>
                    <div class="col-sm-2">
                        <input type="date" name="Rel_Cur_Date_3" class="form-control" value="<?php echo $row ['Rel_Cur_Date_3']; ?>" placeholder="Relieving/Current date" >
                    </div>
                    <label class="col-sm-2 control-label">Work Type</label>
                    <div class="col-sm-2">
                        <select name="Work_type_3" class="form-control">
                            <option value="<?php echo $row ['Work_type_3']; ?>"><?php echo $row ['Work_type_3']; ?> </option>
                            <option value="">------</option>
                            <option value="Regular">Regular</option>
                            <option value="Part Time">Part Time</option>
                        </select>
                    </div>
                    <label class="col-sm-2 control-label">Salary Drawn</label>
                    <div class="col-sm-2">              
                        <input type="number" name="Salary_drawn_3" class="form-control" value="<?php echo $row ['Salary_drawn_3']; ?>" placeholder="Salary Drawn">
                    </div>
                </div>
                </div>
                <br>



                <div>
                <!-- <center><h3>1</h3></center> -->
                <div class="form-group">

                    <label class="col-sm-2 control-label">4. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; College Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Clg_Name_4" class="form-control" value="<?php echo $row ['Clg_Name_4']; ?>" placeholder="College Name">
                    </div>
                    <label class="col-sm-2 control-label">Designation</label>
                    <div class="col-sm-2">
                        <input type="text" name="Designation_4" class="form-control" value="<?php echo $row ['Designation_4']; ?>" placeholder="Designation" >
                    </div>
                    <label class="col-sm-2 control-label">Joining Date</label>
                    <div class="col-sm-2">
                        <input type="date" name="Joining_Date_4" class="form-control" value="<?php echo $row ['Joining_Date_4']; ?>" placeholder="Joining Date" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Releiving date/Current date for presently working Institutions</label>
                    <div class="col-sm-2">
                        <input type="date" name="Rel_Cur_Date_4" class="form-control" value="<?php echo $row ['Rel_Cur_Date_4']; ?>" placeholder="Relieving/Current date" >
                    </div>
                    <label class="col-sm-2 control-label">Work Type</label>
                    <div class="col-sm-2">
                        <select name="Work_type_4" class="form-control">
                            <option value="<?php echo $row ['Work_type_4']; ?>"> <?php echo $row ['Work_type_4']; ?> </option>
                            <option value="Regular">Regular</option>
                            <option value="Part Time">Part Time</option>
                        </select>
                    </div>
                    <label class="col-sm-2 control-label">Salary Drawn</label>
                    <div class="col-sm-2">              
                        <input type="number" name="Salary_drawn_4" class="form-control" value="<?php echo $row ['Salary_drawn_4']; ?>" placeholder="Salary Drawn">
                    </div>
                </div>
                </div>
                <br>



                <div>
                <!-- <center><h3>1</h3></center> -->
                <div class="form-group">

                    <label class="col-sm-2 control-label">5. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; College Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Clg_Name_5" class="form-control" value="<?php echo $row ['Clg_Name_5']; ?>" placeholder="College Name">
                    </div>
                    <label class="col-sm-2 control-label">Designation</label>
                    <div class="col-sm-2">
                        <input type="text" name="Designation_5" class="form-control" value="<?php echo $row ['Designation_5']; ?>" placeholder="Designation" >
                    </div>
                    <label class="col-sm-2 control-label">Joining Date</label>
                    <div class="col-sm-2">
                        <input type="date" name="Joining_Date_5" class="form-control" value="<?php echo $row ['Joining_Date_5']; ?>" placeholder="Joining Date" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Releiving date/Current date for presently working Institutions</label>
                    <div class="col-sm-2">
                        <input type="date" name="Rel_Cur_Date_5" class="form-control" value="<?php echo $row ['Rel_Cur_Date_5']; ?>" placeholder="Relieving/Current date" >
                    </div>
                    <label class="col-sm-2 control-label">Work Type</label>
                    <div class="col-sm-2">
                        <select name="Work_type_5" class="form-control">
                            <option value="<?php echo $row ['Work_type_5']; ?>"> <?php echo $row ['Work_type_5']; ?> </option>
                            <option value="">------</option>
                            <option value="Regular">Regular</option>
                            <option value="Part Time">Part Time</option>
                        </select>
                    </div>
                    <label class="col-sm-2 control-label">Salary Drawn</label>
                    <div class="col-sm-2">              
                        <input type="number" name="Salary_drawn_5" class="form-control" value="<?php echo $row ['Salary_drawn_5']; ?>" placeholder="Salary Drawn">
                    </div>
                </div>
                </div>
                <br>



                <div>
                <!-- <center><h3>1</h3></center> -->
                <div class="form-group">

                    <label class="col-sm-2 control-label">6. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; College Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Clg_Name_6" class="form-control" value="<?php echo $row ['Clg_Name_6']; ?>" placeholder="College Name">
                    </div>
                    <label class="col-sm-2 control-label">Designation</label>
                    <div class="col-sm-2">
                        <input type="text" name="Designation_6" class="form-control" value="<?php echo $row ['Designation_6']; ?>" placeholder="Designation" >
                    </div>
                    <label class="col-sm-2 control-label">Joining Date</label>
                    <div class="col-sm-2">
                        <input type="date" name="Joining_Date_6" class="form-control" value="<?php echo $row ['Joining_Date_6']; ?>" placeholder="Joining Date" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Releiving date/Current date for presently working Institutions</label>
                    <div class="col-sm-2">
                        <input type="date" name="Rel_Cur_Date_6" class="form-control" value="<?php echo $row ['Rel_Cur_Date_6']; ?>" placeholder="Relieving/Current date" >
                    </div>
                    <label class="col-sm-2 control-label">Work Type</label>
                    <div class="col-sm-2">
                        <select name="Work_type_6" class="form-control">
                            <option value="<?php echo $row ['Work_type_6']; ?>"> <?php echo $row ['Work_type_6']; ?> </option>
                            <option value="">------</option>
                            <option value="Regular">Regular</option>
                            <option value="Part Time">Part Time</option>
                        </select>
                    </div>
                    <label class="col-sm-2 control-label">Salary Drawn</label>
                    <div class="col-sm-2">              
                        <input type="number" name="Salary_drawn_6" class="form-control" value="<?php echo $row ['Salary_drawn_6']; ?>" placeholder="Salary Drawn">
                    </div>
                </div>
                </div>
                <br>




                <div>
                <!-- <center><h3>1</h3></center> -->
                <div class="form-group">

                    <label class="col-sm-2 control-label">7. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; College Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Clg_Name_7" class="form-control" value="<?php echo $row ['Clg_Name_7']; ?>" placeholder="College Name">
                    </div>
                    <label class="col-sm-2 control-label">Designation</label>
                    <div class="col-sm-2">
                        <input type="text" name="Designation_7" class="form-control" value="<?php echo $row ['Designation_7']; ?>" placeholder="Designation" >
                    </div>
                    <label class="col-sm-2 control-label">Joining Date</label>
                    <div class="col-sm-2">
                        <input type="date" name="Joining_Date_7" class="form-control" value="<?php echo $row ['Joining_Date_7']; ?>" placeholder="Joining Date" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Releiving date/Current date for presently working Institutions</label>
                    <div class="col-sm-2">
                        <input type="date" name="Rel_Cur_Date_7" class="form-control" value="<?php echo $row ['Rel_Cur_Date_7']; ?>" placeholder="Relieving/Current date" >
                    </div>
                    <label class="col-sm-2 control-label">Work Type</label>
                    <div class="col-sm-2">
                        <select name="Work_type_7" class="form-control">
                            <option value="<?php echo $row ['Work_type_7']; ?>"> <?php echo $row ['Work_type_7']; ?> </option>
                            <option value="">------</option>
                            <option value="Regular">Regular</option>
                            <option value="Part Time">Part Time</option>
                        </select>
                    </div>
                    <label class="col-sm-2 control-label">Salary Drawn</label>
                    <div class="col-sm-2">              
                        <input type="number" name="Salary_drawn_7" class="form-control" value="<?php echo $row ['Salary_drawn_7']; ?>" placeholder="Salary Drawn">
                    </div>
                </div>
                </div>
                <br>
                <?php 
                $a=$row['Department'];
                if($a!='Non-Teaching Faculty'){
                  echo '<div class="form-group">
                <label class="col-sm-2 control-label">Total Work Experience</label>
                    <div class="col-sm-2">
                        <input type="number" name="Total_work_exp" class="form-control" placeholder="Total Work Experience" value='. $row ['Total_work_exp'].' >
                    </div>
                    <label class="col-sm-2 control-label">Years of experience before ME</label>
                    <div class="col-sm-2">
                        <input type="number" name="ybefme" class="form-control" placeholder="Experience before ME" value='. $row ['ybefme'].' >
                    </div>
                    <label class="col-sm-2 control-label">Years of experience after ME</label>
                    <div class="col-sm-2">
                        <input type="number" name="yafme" class="form-control" placeholder="Experience after ME" value='. $row ['yafme'].' >
                    </div>
                </div>
                <div class="form-group">
                <label class="col-sm-2 control-label">Books Published</label>
                    <div class="col-sm-2">
                        <input type="number" name="books_published" class="form-control" placeholder="Books Published" value='. $row ['books_published'].'  >
                    </div>
                <label class="col-sm-2 control-label">No of International Papers</label>
                    <div class="col-sm-2">
                        <input type="number" name="Nof_Intl_papers" class="form-control"  placeholder="No of International Papers" value='.$row ['Nof_Intl_papers'].' >
                    </div>
                <label class="col-sm-2 control-label">No of National Papers</label>
                    <div class="col-sm-2">
                        <input type="number" name="Nof_Ntl_papers" class="form-control" placeholder="No of National Papers"  value='. $row ['Nof_Ntl_papers'].' >
                    </div>  
                </div>
                <div class="form-group">
                <label class="col-sm-2 control-label">No of International Journals</label>
                    <div class="col-sm-2">
                        <input type="text" name="Nof_Intl_journals" class="form-control" placeholder="No of International Journals"  value='.$row ['Nof_Intl_journals'].' >
                    </div>  
                <label class="col-sm-2 control-label">No of National Journals</label>
                    <div class="col-sm-2">
                        <input type="text" name="Nof_Ntl_journals" class="form-control" placeholder="No of National Journals"  value='. $row ['Nof_Ntl_journals'].' >
                    </div>
                
                <label class="col-sm-2 control-label">No of UG/PG Projects Guided</label>
                    <div class="col-sm-2">
                        <input type="text" name="Nof_PGpro_guided" class="form-control" placeholder="UG projects / PG Projects"  value='. $row ['Nof_PGpro_guided'].' >
                    </div>  
               </div>
               <div class="form-group"> 
                <label class="col-sm-2 control-label">No of Doctorate Students Guided</label>
                    <div class="col-sm-2">
                        <input type="text" name="Nof_drstu_guided" class="form-control" placeholder="No of Doctorate Students Guided"  value='. $row ['Nof_drstu_guided'].' >
                    </div>
                    <label class="col-sm-2 control-label">No. of Projects done</label>
                    <div class="col-sm-2">
                        <input type="text" name="projects" class="form-control" placeholder="projects"  value='. $row ['projects'].' >
                    </div>
                <label class="col-sm-2 control-label">Number of Patents publised</label>
                    <div class="col-sm-2">
                        <input type="text" name="Patents" class="form-control" placeholder="No of Patents"  value='.$row ['Patents'].' >
                    </div>  
                </div>';
              }
              else{
              }
              ?>
                


<!-- **************************************************ACADEMICS ACHHIEVEMENTS********************************************************** -->

        <br><br><br>

                <?php 
$a=$row['Department'];
if($a!='Non-Teaching Faculty')
    {
        echo '<hr>
                <center><h3 style="text-align: center;font-family: monospace; color: #322d65; font-weight: bold;">Academic Achievements</h3></center>
                <hr><br><br>

                <div>
                <!-- <center><h3>1</h3></center> -->
                <div class="form-group">

                    <label class="col-sm-2 control-label">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Year</label>
                    <div class="col-sm-2">
                        <input type="number" name="Year_1" class="form-control" placeholder="Year" value='. $row ['Year_1'].' >
                    </div>
                    <label class="col-sm-2 control-label">National Paper</label>
                    <div class="col-sm-2">
                        <input type="number" name="Ntl_paper_1" class="form-control" placeholder="National Papers"  value='. $row ['Ntl_paper_1'].' >
                    </div>
                    <label class="col-sm-2 control-label">International Paper</label>
                    <div class="col-sm-2">
                        <input type="number" name="Intl_paper_1" class="form-control" placeholder="International Papers"  value='. $row ['Intl_paper_1'].' >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">National Journal</label>
                    <div class="col-sm-2">
                        <input type="number" name="Ntl_Journal_1" class="form-control" placeholder="National Journal"  value='. $row ['Ntl_Journal_1'].' >
                    </div>
                    <label class="col-sm-2 control-label">International Journal</label>
                    <div class="col-sm-2">
                        <input type="number" name="Intl_journal_1" class="form-control" placeholder="International journal"  value='. $row ['Intl_journal_1'].' >
                    </div>
                    <label class="col-sm-2 control-label">National Conference</label>
                    <div class="col-sm-2">
                        <input type="number" name="Ntl_con_1" class="form-control" placeholder="National Conference" value='. $row ['Ntl_con_1'].'  >
                    </div>
                </div>
                <div class="form-group">
                
                    <label class="col-sm-2 control-label">International Conference</label>
                    <div class="col-sm-2">              
                        <input type="number" name="Intl_con_1" class="form-control" placeholder="International Conference"  value='. $row ['Intl_con_1'].' >
                    </div>
                </div>
                </div>
                <br><br><br><br><br>

                <div>
                <!-- <center><h3>1</h3></center> -->
                <div class="form-group">

                    <label class="col-sm-2 control-label">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Year</label>
                    <div class="col-sm-2">
                        <input type="number" name="Year_2" class="form-control" placeholder="Year"  value='. $row ['Year_2'].' >
                    </div>
                    <label class="col-sm-2 control-label">National Paper</label>
                    <div class="col-sm-2">
                        <input type="number" name="Ntl_paper_2" class="form-control" placeholder="National Papers"  value='. $row ['Ntl_paper_2'].' >
                    </div>
                    <label class="col-sm-2 control-label">International Paper</label>
                    <div class="col-sm-2">
                        <input type="number" name="Intl_paper_2" class="form-control" placeholder="International Papers"  value='. $row ['Intl_paper_2'].' >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">National Journal</label>
                    <div class="col-sm-2">
                        <input type="number" name="Ntl_Journal_2" class="form-control" placeholder="National Journal"   value='. $row ['Ntl_Journal_2'].' >
                    </div>
                    <label class="col-sm-2 control-label">International Journal</label>
                    <div class="col-sm-2">
                        <input type="number" name="Intl_journal_2" class="form-control" placeholder="International journal"  value='. $row ['Intl_journal_2'].' >
                    </div>

                    <label class="col-sm-2 control-label">National Conference</label>
                    <div class="col-sm-2">
                        <input type="number" name="Ntl_con_2" class="form-control" placeholder="National Conference"  value='. $row ['Ntl_con_2'].' >
                    </div>
                </div>
                <div class="form-group">
                
                    <label class="col-sm-2 control-label">International Conference</label>
                    <div class="col-sm-2">              
                        <input type="number" name="Intl_con_2" class="form-control" placeholder="International Conference"  value='. $row ['Intl_con_2'].' >
                    </div>
                </div>
                </div>
                <br><br><br><br><br>




                <div>
                <!-- <center><h3>1</h3></center> -->
                <div class="form-group">

                    <label class="col-sm-2 control-label">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Year</label>
                    <div class="col-sm-2">
                        <input type="number" name="Year_3" class="form-control" placeholder="Year"  value='. $row ['Year_3'].' >
                    </div>
                    <label class="col-sm-2 control-label">National Paper</label>
                    <div class="col-sm-2">
                        <input type="number" name="Ntl_paper_3" class="form-control" placeholder="National Papers"  value='. $row ['Ntl_paper_3'].' >
                    </div>
                    <label class="col-sm-2 control-label">International Paper</label>
                    <div class="col-sm-2">
                        <input type="number" name="Intl_paper_3" class="form-control" placeholder="International Papers"  value='. $row ['Intl_paper_3'].' >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">National Journal</label>
                    <div class="col-sm-2">
                        <input type="number" name="Ntl_Journal_3" class="form-control" placeholder="National Journal"  value='. $row ['Ntl_Journal_3'].' >
                    </div>
                    <label class="col-sm-2 control-label">International Journal</label>
                    <div class="col-sm-2">
                        <input type="number" name="Intl_journal_3" class="form-control" placeholder="International journal"  value='. $row ['Intl_journal_3'].' >
                    </div>

                    <label class="col-sm-2 control-label">National Conference</label>
                    <div class="col-sm-2">
                        <input type="number" name="Ntl_con_3" class="form-control" placeholder="National Conference"  value='. $row ['Ntl_con_3'].' >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">International Conference</label>
                    <div class="col-sm-2">              
                        <input type="number" name="Intl_con_3" class="form-control" placeholder="International Conference"  value='. $row ['Intl_con_3'].' >
                    </div>
                </div>
                </div>
                <br><br><br><br><br>




                <div>
                <!-- <center><h3>1</h3></center> -->
                <div class="form-group">

                    <label class="col-sm-2 control-label">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Year</label>
                    <div class="col-sm-2">
                        <input type="number" name="Year_4" class="form-control" placeholder="Year"  value='. $row ['Year_4'].' >
                    </div>
                    <label class="col-sm-2 control-label">National Paper</label>
                    <div class="col-sm-2">
                        <input type="number" name="Ntl_paper_4" class="form-control" placeholder="National Papers"  value='. $row ['Ntl_paper_4'].' >
                    </div>
                    <label class="col-sm-2 control-label">International Paper</label>
                    <div class="col-sm-2">
                        <input type="number" name="Intl_paper_4" class="form-control" placeholder="International Papers"  value='. $row ['Intl_paper_4'].' >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">National Journal</label>
                    <div class="col-sm-2">
                        <input type="number" name="Ntl_Journal_4" class="form-control" placeholder="National Journal"  value='. $row ['Ntl_Journal_4'].' >
                    </div>
                    <label class="col-sm-2 control-label">International Journal</label>
                    <div class="col-sm-2">
                        <input type="number" name="Intl_journal_4" class="form-control" placeholder="International journal"  value='. $row ['Intl_journal_4'].' >
                    </div>

                    <label class="col-sm-2 control-label">National Conference</label>
                    <div class="col-sm-2">
                        <input type="number" name="Ntl_con_4" class="form-control" placeholder="National Conference"  value='. $row ['Ntl_con_4'].' >
                    </div>
                </div>
                <div class="form-group">
                
                    <label class="col-sm-2 control-label">International Conference</label>
                    <div class="col-sm-2">              
                        <input type="number" name="Intl_con_4" class="form-control" placeholder="International Conference"  value='. $row ['Intl_con_4'].' >
                    </div>
                </div>
                </div>
                <br><br><br><br><br>




                <div>
                <!-- <center><h3>1</h3></center> -->
                <div class="form-group">

                    <label class="col-sm-2 control-label">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Year</label>
                    <div class="col-sm-2">
                        <input type="number" name="Year_5" class="form-control" placeholder="Year"  value='. $row ['Year_5'].' >
                    </div>
                    <label class="col-sm-2 control-label">National Paper</label>
                    <div class="col-sm-2">
                        <input type="number" name="Ntl_paper_5" class="form-control" placeholder="National Papers"  value='. $row ['Ntl_paper_5'].' >
                    </div>
                    <label class="col-sm-2 control-label">International Paper</label>
                    <div class="col-sm-2">
                        <input type="number" name="Intl_paper_5" class="form-control" placeholder="International Papers"  value='. $row ['Intl_paper_5'].' >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">National Journal</label>
                    <div class="col-sm-2">
                        <input type="number" name="Ntl_Journal_5" class="form-control" placeholder="National Journal"  value='. $row ['Ntl_Journal_5'].' >
                    </div>
                    <label class="col-sm-2 control-label">International Journal</label>
                    <div class="col-sm-2">
                        <input type="number" name="Intl_journal_5" class="form-control" placeholder="International journal"  value='. $row ['Intl_journal_5'].' >
                    </div>
                
                    <label class="col-sm-2 control-label">National Conference</label>
                    <div class="col-sm-2">
                        <input type="number" name="Ntl_con_5" class="form-control" placeholder="National Conference"  value='. $row ['Ntl_con_5'].' >
                    </div>
                    </div>
                <div class="form-group">
               
                    <label class="col-sm-2 control-label">International Conference</label>
                    <div class="col-sm-2">              
                        <input type="number" name="Intl_con_5" class="form-control" placeholder="International Conference"  value='. $row ['Intl_con_5'].' >
                    </div>
                </div>
                </div>
                <br><br><br><br><br>



                <div>
                <!-- <center><h3>1</h3></center> -->
                <div class="form-group">

                    <label class="col-sm-2 control-label">6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Year</label>
                    <div class="col-sm-2">
                        <input type="number" name="Year_6" class="form-control" placeholder="Year" value='. $row ['Year_6'].'  >
                    </div>
                    <label class="col-sm-2 control-label">National Paper</label>
                    <div class="col-sm-2">
                        <input type="number" name="Ntl_paper_6" class="form-control" placeholder="National Papers"  value='. $row ['Ntl_paper_6'].' >
                    </div>
                    <label class="col-sm-2 control-label">International Paper</label>
                    <div class="col-sm-2">
                        <input type="number" name="Intl_paper_6" class="form-control" placeholder="International Papers"  value='. $row ['Intl_paper_6'].' >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">National Journal</label>
                    <div class="col-sm-2">
                        <input type="number" name="Ntl_Journal_6" class="form-control" placeholder="National Journal"  value='. $row ['Ntl_Journal_6'].' >
                    </div>
                    <label class="col-sm-2 control-label">International Journal</label>
                    <div class="col-sm-2">
                        <input type="number" name="Intl_journal_6" class="form-control" placeholder="International journal"  value='. $row ['Intl_journal_6'].' >
                    </div>
                
                    <label class="col-sm-2 control-label">National Conference</label>
                    <div class="col-sm-2">
                        <input type="number" name="Ntl_con_6" class="form-control" placeholder="National Conference"  value='.$row ['Ntl_con_6'].' >
                    </div>
                    </div>
                <div class="form-group">
                
                    <label class="col-sm-2 control-label">International Conference</label>
                    <div class="col-sm-2">              
                        <input type="number" name="Intl_con_6" class="form-control" placeholder="International Conference"  value='. $row ['Intl_con_6'].' >
                    </div>
                 </div>
                </div>
                <br><br><br><br><br> ';
                }
                else{}
                ?>       



<!-- *****************************************************INDUSTRIAL EXPERIENCE********************************************************** -->
                <br><br>
                <hr>
                <center><h3 style="text-align: center;font-family: monospace; color: #322d65; font-weight: bold;">Industrial Experience</h3></center>
                <hr>
                <br><br>

                <div class="form-group">
                    <label class="col-sm-2 control-label">1. Organisation Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Org_Name_1" class="form-control" value="<?php echo $row ['Org_Name_1']; ?>" placeholder="Organisation Name" >
                    </div>  
                
                <label class="col-sm-2 control-label">Designation</label>
                    <div class="col-sm-2">
                        <input type="text" name="DesignationIN_1" class="form-control" value="<?php echo $row ['DesignationIN_1']; ?>" placeholder="Designation" >
                    </div>  
                
                <label class="col-sm-2 control-label">Nature of Work</label>
                    <div class="col-sm-2">
                        <input type="text" name="Nature_of_work_1" class="form-control" value="<?php echo $row ['Nature_of_work_1']; ?>" placeholder="Nature of Work" >
                    </div>  
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Joining Date</label>
                    <div class="col-sm-2">
                        <input type="date" name="Joining_DateIN_1" class="form-control" value="<?php echo $row ['Joining_DateIN_1']; ?>" placeholder="Joining Date" >
                    </div>  
                
                <label class="col-sm-2 control-label">Relieving Date</label>
                    <div class="col-sm-2">
                        <input type="date" name="Rel_Date_1" class="form-control" value="<?php echo $row ['Rel_Date_1']; ?>" placeholder="Relieving Date" >
                    </div>           
                </div>
                <br><br>


                <div class="form-group">
                    <label class="col-sm-2 control-label">2. Organisation Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Org_Name_2" class="form-control" value="<?php echo $row ['Org_Name_2']; ?>" placeholder="Organisation Name" >
                    </div>  
                
                <label class="col-sm-2 control-label">Designation</label>
                    <div class="col-sm-2">
                        <input type="text" name="DesignationIN_2" class="form-control" value="<?php echo $row ['DesignationIN_2']; ?>" placeholder="Designation" >
                    </div>  
                
                <label class="col-sm-2 control-label">Nature of Work</label>
                    <div class="col-sm-2">
                        <input type="text" name="Nature_of_work_2" class="form-control" value="<?php echo $row ['Nature_of_work_2']; ?>" placeholder="Nature of Work" >
                    </div>  
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Joining Date</label>
                    <div class="col-sm-2">
                        <input type="date" name="Joining_DateIN_2" class="form-control" value="<?php echo $row ['Joining_DateIN_2']; ?>" placeholder="Joining Date" >
                    </div>  
                
                <label class="col-sm-2 control-label">Relieving Date</label>
                    <div class="col-sm-2">
                        <input type="date" name="Rel_Date_2" class="form-control" value="<?php echo $row ['Rel_Date_2']; ?>" placeholder="Relieving Date" >
                    </div>                 
                </div>
                <br><br>
                <div class="form-group">
                    <label class="col-sm-2 control-label">3. Organisation Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Org_Name_3" class="form-control" value="<?php echo $row ['Org_Name_3']; ?>" placeholder="Organisation Name" >
                    </div>  
                
                <label class="col-sm-2 control-label">Designation</label>
                    <div class="col-sm-2">
                        <input type="text" name="DesignationIN_3" class="form-control" value="<?php echo $row ['DesignationIN_3']; ?>" placeholder="Designation" >
                    </div>  
                
                <label class="col-sm-2 control-label">Nature of Work</label>
                    <div class="col-sm-2">
                        <input type="text" name="Nature_of_work_3" class="form-control" value="<?php echo $row ['Nature_of_work_3']; ?>" placeholder="Nature of Work" >
                    </div>  
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Joining Date</label>
                    <div class="col-sm-2">
                        <input type="date" name="Joining_DateIN_3" class="form-control" value="<?php echo $row ['Joining_DateIN_3']; ?>" placeholder="Joining Date" >
                    </div>  
                
                <label class="col-sm-2 control-label">Relieving Date</label>
                    <div class="col-sm-2">
                        <input type="date" name="Rel_Date_3" class="form-control" value="<?php echo $row ['Rel_Date_3']; ?>" placeholder="Relieving Date" >
                    </div>           
                </div>
                <br><br>
                <div class="form-group">
                    <label class="col-sm-2 control-label">4. Organisation Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Org_Name_4" class="form-control" value="<?php echo $row ['Org_Name_4']; ?>" placeholder="Organisation Name" >
                    </div>  
                
                <label class="col-sm-2 control-label">Designation</label>
                    <div class="col-sm-2">
                        <input type="text" name="DesignationIN_4" class="form-control" value="<?php echo $row ['DesignationIN_4']; ?>" placeholder="Designation" >
                    </div>  
                
                <label class="col-sm-2 control-label">Nature of Work</label>
                    <div class="col-sm-2">
                        <input type="text" name="Nature_of_work_4" class="form-control" value="<?php echo $row ['Nature_of_work_4']; ?>" placeholder="Nature of Work" >
                    </div>  
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Joining Date</label>
                    <div class="col-sm-2">
                        <input type="date" name="Joining_DateIN_4" class="form-control" value="<?php echo $row ['Joining_DateIN_4']; ?>" placeholder="Joining Date" >
                    </div>  
                
                <label class="col-sm-2 control-label">Relieving Date</label>
                    <div class="col-sm-2">
                        <input type="date" name="Rel_Date_4" class="form-control" value="<?php echo $row ['Rel_Date_4']; ?>" placeholder="Relieving Date" >
                    </div>           
                </div>
                <br><br>
                <div class="form-group">
                    <label class="col-sm-2 control-label">5. Organisation Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Org_Name_5" class="form-control" value="<?php echo $row ['Org_Name_5']; ?>" placeholder="Organisation Name" >
                    </div>  
                
                <label class="col-sm-2 control-label">Designation</label>
                    <div class="col-sm-2">
                        <input type="text" name="DesignationIN_5" class="form-control" value="<?php echo $row ['DesignationIN_5']; ?>" placeholder="Designation" >
                    </div>  
                
                <label class="col-sm-2 control-label">Nature of Work</label>
                    <div class="col-sm-2">
                        <input type="text" name="Nature_of_work_5" class="form-control" value="<?php echo $row ['Nature_of_work_5']; ?>" placeholder="Nature of Work" >
                    </div>  
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Joining Date</label>
                    <div class="col-sm-2">
                        <input type="date" name="Joining_DateIN_5" class="form-control" value="<?php echo $row ['Joining_DateIN_5']; ?>" placeholder="Joining Date" >
                    </div>  
                
                <label class="col-sm-2 control-label">Relieving Date</label>
                    <div class="col-sm-2">
                        <input type="date" name="Rel_Date_5" class="form-control" value="<?php echo $row ['Rel_Date_5']; ?>" placeholder="Relieving Date" >
                    </div>           
                </div>
                <br><br>



               <?php
               $a=$row['Department'];
               if($a!='Non-Teaching Faculty'){
                echo '
                <label class="col-sm-2 control-label">Research Experience</label>
                    <div class="col-sm-2">
                        <input type="text" name="Research_Exp" class="form-control" placeholder="Research Experience"  value='.$row ['Research_Exp'].' >
                    </div>';
                    }
                    else{}
                    ?>  
                
                
                </div>

                <br><br><br><br><br><br><br>






<!-- ******************************************************Family Details************************************************************* -->

                <br><br><br><br><hr>
                <center><h3 style="text-align: center;font-family: monospace; color: #322d65; font-weight: bold;">Family Details</h3></center>
                <hr><br>

            
                <!-- <center><h3>1</h3></center> -->
                <div class="form-group">

                    <label class="col-sm-2 control-label">1. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Member Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Mem_Name_1" class="form-control" value="<?php echo $row ['Mem_Name_1']; ?>" placeholder="Member Name" >
                    </div>
                    <label class="col-sm-2 control-label">Relation</label>
                    <div class="col-sm-2">
                        <input type="text" name="Rel_1" class="form-control" value="<?php echo $row ['Rel_1']; ?>" placeholder="Relation" >
                    </div>
                    <label class="col-sm-2 control-label">Date of Birth</label>
                    <div class="col-sm-2">
                        <input type="date" name="DOB_1" class="form-control" value="<?php echo $row ['DOB_1']; ?>" placeholder="Date of Birth" >
                    </div>
                </div><br><br>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Highest Educational Qualification</label>
                    <div class="col-sm-2">
                        <input type="text" name="HEduQual_1" class="form-control" value="<?php echo $row ['HEduQual_1']; ?>" placeholder="Educational Qualification" >
                    </div>
                    <label class="col-sm-2 control-label">Employment Status</label>
                    <div class="col-sm-2">              
                        <input type="text" name="Emp_status_1" class="form-control" value="<?php echo $row ['Emp_status_1']; ?>" placeholder="Employment Status" >
                    </div>
                    <label class="col-sm-2 control-label">Monthly Income</label>
                    <div class="col-sm-2">              
                        <input type="number" name="Inc_mont_1" class="form-control" value="<?php echo $row ['Inc_mont_1']; ?>" placeholder="Monthly Income" >
                    </div>
                </div>
                
                <br><br><br>

              
                <!-- <center><h3>1</h3></center> -->
                <div class="form-group">

                    <label class="col-sm-2 control-label">2. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Member Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Mem_Name_2" class="form-control" value="<?php echo $row ['Mem_Name_2']; ?>" placeholder="Member Name" >
                    </div>
                    <label class="col-sm-2 control-label">Relation</label>
                    <div class="col-sm-2">
                        <input type="text" name="Rel_2" class="form-control" value="<?php echo $row ['Rel_2']; ?>" placeholder="Relation" >
                    </div>
                    <label class="col-sm-2 control-label">Date of Birth</label>
                    <div class="col-sm-2">
                        <input type="date" name="DOB_2" class="form-control" value="<?php echo $row ['DOB_2']; ?>" placeholder="Date of Birth" >
                    </div>
                </div><br><br>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Highest Educational Qualification</label>
                    <div class="col-sm-2">
                        <input type="text" name="HEduQual_2" class="form-control" value="<?php echo $row ['HEduQual_2']; ?>" placeholder="Educational Qualification" >
                    </div>
                    <label class="col-sm-2 control-label">Employment Status</label>
                    <div class="col-sm-2">              
                        <input type="text" name="Emp_status_2" class="form-control" value="<?php echo $row ['Emp_status_2']; ?>" placeholder="Employment Status" >
                    </div>
                    <label class="col-sm-2 control-label">Monthly Income</label>
                    <div class="col-sm-2">              
                        <input type="number" name="Inc_mont_2" class="form-control" value="<?php echo $row ['Inc_mont_2']; ?>" placeholder="Monthly Income" >
                    </div>
                </div>

                
                <br><br><br>




                <!-- <center><h3>1</h3></center> -->
                <div class="form-group">

                    <label class="col-sm-2 control-label">3. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Member Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Mem_Name_3" class="form-control" value="<?php echo $row ['Mem_Name_3']; ?>" placeholder="Member Name" >
                    </div>
                    <label class="col-sm-2 control-label">Relation</label>
                    <div class="col-sm-2">
                        <input type="text" name="Rel_3" class="form-control" value="<?php echo $row ['Rel_3']; ?>" placeholder="Relation" >
                    </div>
                    <label class="col-sm-2 control-label">Date of Birth</label>
                    <div class="col-sm-2">
                        <input type="date" name="DOB_3" class="form-control" value="<?php echo $row ['DOB_3']; ?>" placeholder="Date of Birth" >
                    </div>
                </div><br><br>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Highest Educational Qualification</label>
                    <div class="col-sm-2">
                        <input type="text" name="HEduQual_3" class="form-control" value="<?php echo $row ['HEduQual_3']; ?>" placeholder="Educational Qualification" >
                    </div>
                    <label class="col-sm-2 control-label">Employment Status</label>
                    <div class="col-sm-2">              
                        <input type="text" name="Emp_status_3" class="form-control" value="<?php echo $row ['Emp_status_3']; ?>" placeholder="Employment Status" >
                    </div>
                    <label class="col-sm-2 control-label">Monthly Income</label>
                    <div class="col-sm-2">              
                        <input type="number" name="Inc_mont_3" class="form-control" value="<?php echo $row ['Inc_mont_3']; ?>" placeholder="Monthly Income" >
                    </div>
                </div>
            
                
                <br><br><br>






            
                <!-- <center><h3>1</h3></center> -->
                <div class="form-group">

                    <label class="col-sm-2 control-label">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Member Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Mem_Name_4" class="form-control" value="<?php echo $row ['Mem_Name_4']; ?>" placeholder="Member Name" >
                    </div>
                    <label class="col-sm-2 control-label">Relation</label>
                    <div class="col-sm-2">
                        <input type="text" name="Rel_4" class="form-control" value="<?php echo $row ['Rel_4']; ?>" placeholder="Relation" >
                    </div>
                    <label class="col-sm-2 control-label">Date of Birth</label>
                    <div class="col-sm-2">
                        <input type="date" name="DOB_4" class="form-control" value="<?php echo $row ['DOB_4']; ?>" placeholder="Date of Birth" >
                    </div>
                </div><br><br>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Highest Educational Qualification</label>
                    <div class="col-sm-2">
                        <input type="text" name="HEduQual_4" class="form-control" value="<?php echo $row ['HEduQual_4']; ?>" placeholder="Educational Qualification" >
                    </div>
                    <label class="col-sm-2 control-label">Employment Status</label>
                    <div class="col-sm-2">              
                        <input type="text" name="Emp_status_4" class="form-control" value="<?php echo $row ['Emp_status_4']; ?>" placeholder="Employment Status" >
                    </div>
                    <label class="col-sm-2 control-label">Monthly Income</label>
                    <div class="col-sm-2">              
                        <input type="number" name="Inc_mont_4" class="form-control" value="<?php echo $row ['Inc_mont_4']; ?>" placeholder="Monthly Income" >
                    </div>
                </div>
             
                
                <br><br><br>





            
                <!-- <center><h3>1</h3></center> -->
                <div class="form-group">

                    <label class="col-sm-2 control-label">5. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Member Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Mem_Name_5" class="form-control" value="<?php echo $row ['Mem_Name_5']; ?>" placeholder="Member Name" >
                    </div>
                    <label class="col-sm-2 control-label">Relation</label>
                    <div class="col-sm-2">
                        <input type="text" name="Rel_5" class="form-control" value="<?php echo $row ['Rel_5']; ?>" placeholder="Relation" >
                    </div>
                    <label class="col-sm-2 control-label">Date of Birth</label>
                    <div class="col-sm-2">
                        <input type="date" name="DOB_5" class="form-control" value="<?php echo $row ['DOB_5']; ?>" placeholder="Date of Birth" >
                    </div>
                </div><br><br>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Highest Educational Qualification</label>
                    <div class="col-sm-2">
                        <input type="text" name="HEduQual_5" class="form-control" value="<?php echo $row ['HEduQual_5']; ?>" placeholder="Educational Qualification" >
                    </div>
                    <label class="col-sm-2 control-label">Employment Status</label>
                    <div class="col-sm-2">              
                        <input type="text" name="Emp_status_5" class="form-control" value="<?php echo $row ['Emp_status_5']; ?>" placeholder="Employment Status" >
                    </div>
                    <label class="col-sm-2 control-label">Monthly Income</label>
                    <div class="col-sm-2">              
                        <input type="number" name="Inc_mont_5" class="form-control" value="<?php echo $row ['Inc_mont_5']; ?>" placeholder="Monthly Income" >
                    </div>
                </div>
            
                
                <br><br><br>


                

                                <!-- <center><h3>1</h3></center> -->
                <div class="form-group">

                    <label class="col-sm-2 control-label">6. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Member Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Mem_Name_6" class="form-control" value="<?php echo $row ['Mem_Name_6']; ?>" placeholder="Member Name" >
                    </div>
                    <label class="col-sm-2 control-label">Relation</label>
                    <div class="col-sm-2">
                        <input type="text" name="Rel_6" class="form-control" value="<?php echo $row ['Rel_6']; ?>" placeholder="Relation" >
                    </div>
                    <label class="col-sm-2 control-label">Date of Birth</label>
                    <div class="col-sm-2">
                        <input type="date" name="DOB_6" class="form-control" value="<?php echo $row ['DOB_6']; ?>" placeholder="Date of Birth" >
                    </div>
                </div><br><br>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Highest Educational Qualification</label>
                    <div class="col-sm-2">
                        <input type="text" name="HEduQual_6" class="form-control" value="<?php echo $row ['HEduQual_6']; ?>" placeholder="Educational Qualification" >
                    </div>
                    <label class="col-sm-2 control-label">Employment Status</label>
                    <div class="col-sm-2">              
                        <input type="text" name="Emp_status_6" class="form-control" value="<?php echo $row ['Emp_status_6']; ?>" placeholder="Employment Status" >
                    </div>
                    <label class="col-sm-2 control-label">Monthly Income</label>
                    <div class="col-sm-2">              
                        <input type="number" name="Inc_mont_6" class="form-control" value="<?php echo $row ['Inc_mont_6']; ?>" placeholder="Monthly Income" >
                    </div>
                </div>
            
                
                <br><br><br>





            
                <!-- <center><h3>1</h3></center> -->
                <div class="form-group">

                    <label class="col-sm-2 control-label">7. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Member Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Mem_Name_7" class="form-control" value="<?php echo $row ['Mem_Name_7']; ?>" placeholder="Member Name" >
                    </div>
                    <label class="col-sm-2 control-label">Relation</label>
                    <div class="col-sm-2">
                        <input type="text" name="Rel_7" class="form-control" value="<?php echo $row ['Rel_7']; ?>" placeholder="Relation" >
                    </div>
                    <label class="col-sm-2 control-label">Date of Birth</label>
                    <div class="col-sm-2">
                        <input type="date" name="DOB_7" class="form-control" value="<?php echo $row ['DOB_7']; ?>" placeholder="Date of Birth" >
                    </div>
                </div><br><br>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Highest Educational Qualification</label>
                    <div class="col-sm-2">
                        <input type="text" name="HEduQual_7" class="form-control" value="<?php echo $row ['HEduQual_7']; ?>" placeholder="Educational Qualification" >
                    </div>
                    <label class="col-sm-2 control-label">Employment Status</label>
                    <div class="col-sm-2">              
                        <input type="text" name="Emp_status_7" class="form-control" value="<?php echo $row ['Emp_status_7']; ?>" placeholder="Employment Status" >
                    </div>
                    <label class="col-sm-2 control-label">Monthly Income</label>
                    <div class="col-sm-2">              
                        <input type="number" name="Inc_mont_7" class="form-control" value="<?php echo $row ['Inc_mont_7']; ?>" placeholder="Monthly Income" >
                    </div>
                </div>
            
                
                <br><br><br>





            
                <!-- <center><h3>1</h3></center> -->
                <div class="form-group">

                    <label class="col-sm-2 control-label">8. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Member Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Mem_Name_8" class="form-control" value="<?php echo $row ['Mem_Name_8']; ?>" placeholder="Member Name" >
                    </div>
                    <label class="col-sm-2 control-label">Relation</label>
                    <div class="col-sm-2">
                        <input type="text" name="Rel_8" class="form-control" value="<?php echo $row ['Rel_8']; ?>" placeholder="Relation" >
                    </div>
                    <label class="col-sm-2 control-label">Date of Birth</label>
                    <div class="col-sm-2">
                        <input type="date" name="DOB_8" class="form-control" value="<?php echo $row ['DOB_8']; ?>" placeholder="Date of Birth" >
                    </div>
                </div><br><br>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Highest Educational Qualification</label>
                    <div class="col-sm-2">
                        <input type="text" name="HEduQual_8" class="form-control" value="<?php echo $row ['HEduQual_8']; ?>" placeholder="Educational Qualification" >
                    </div>
                    <label class="col-sm-2 control-label">Employment Status</label>
                    <div class="col-sm-2">              
                        <input type="text" name="Emp_status_8" class="form-control" value="<?php echo $row ['Emp_status_8']; ?>" placeholder="Employment Status" >
                    </div>
                    <label class="col-sm-2 control-label">Monthly Income</label>
                    <div class="col-sm-2">              
                        <input type="number" name="Inc_mont_8" class="form-control" value="<?php echo $row ['Inc_mont_8']; ?>" placeholder="Monthly Income" >
                    </div>
                </div>
           
                
                <br><br><br>





           
                <!-- <center><h3>1</h3></center> -->
                <div class="form-group">

                    <label class="col-sm-2 control-label">9. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Member Name</label>
                    <div class="col-sm-2">
                        <input type="text" name="Mem_Name_9" class="form-control" value="<?php echo $row ['Mem_Name_9']; ?>" placeholder="Member Name" >
                    </div>
                    <label class="col-sm-2 control-label">Relation</label>
                    <div class="col-sm-2">
                        <input type="text" name="Rel_9" class="form-control" value="<?php echo $row ['Rel_9']; ?>" placeholder="Relation" >
                    </div>
                    <label class="col-sm-2 control-label">Date of Birth</label>
                    <div class="col-sm-2">
                        <input type="date" name="DOB_9" class="form-control" value="<?php echo $row ['DOB_9']; ?>" placeholder="Date of Birth" >
                    </div>
                </div><br><br>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Highest Educational Qualification</label>
                    <div class="col-sm-2">
                        <input type="text" name="HEduQual_9" class="form-control" value="<?php echo $row ['HEduQual_9']; ?>" placeholder="Educational Qualification" >
                    </div>
                    <label class="col-sm-2 control-label">Employment Status</label>
                    <div class="col-sm-2">              
                        <input type="text" name="Emp_status_9" class="form-control" value="<?php echo $row ['Emp_status_9']; ?>" placeholder="Employment Status" >
                    </div>
                    <label class="col-sm-2 control-label">Monthly Income</label>
                    <div class="col-sm-2">              
                        <input type="number" name="Inc_mont_9" class="form-control" value="<?php echo $row ['Inc_mont_9']; ?>" placeholder="Monthly Income" >
                    </div>
                </div>
            
                <br><br><br><br>
                  
                <center><div class="form-group">
                    <div >
                        <?php
                        if($dept==$row['Department'] or $dept=="ADMIN"){ 
                        echo'<input type="submit" name="save" class="btn btn-sm btn-primary" value="Save">';
                        }else{
                        echo'<a title="Warning" onclick="return confirm(\'You need Admin rights to save '.$row['name'].'?\')" class="btn btn-primary btn-sm">Save</a>';
                        }
                        ?>
                        <a href="index.php" class="btn btn-sm btn-danger">Cancel</a>
                    </div>
                </div></center>
            </form>
            <br><br>
        </div>
    </div>
    <br><br><br><br>
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