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
// CHECK IT FROM HERE
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
<title>Profile</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="logo-licet.png" type="image/icon type">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
			box-shadow: 0px 5px 2px #ff9900 !important;
			border: none;
		}
		.navhover:hover{
			background-color: #ff9900 !important;
			padding-bottom:2% !important;
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
        .subtitles{
            font-family: monospace;
           
        }

        .categories__title {
          color: #322d65;
          font-size: 40px;
          font-weight: bold;
          position:relative;
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
  font: bold; 16px sans-serif;
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
<?php
if(isset($_GET['message']) == 'success'){
                echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data saved successfully</div>';
            }
?>
<h2 class="categories__title"> STAFF PROFILE </h2>
<hr />


<?php
$ID = $_GET['ID'];

$sql = mysqli_query($con, "SELECT * FROM faculty_basic_details WHERE ID='$ID'");
if(mysqli_num_rows($sql) == 0){
header("Location: index.php");
ob_end_flush();
}else{
$row = mysqli_fetch_assoc($sql);
}

if(isset($_GET['action']) == 'delete'){
$delete = mysqli_query($con, "DELETE FROM faculty_basic_details WHERE ID='$ID'");
if($delete){
echo '<div class="alert alert-danger alert-dismissable">><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Deleted successfully.</div>';
}else{
echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Deletion failed.</div>';
}
}
if($dept=="ADMIN" or $dept==$row ['Department']){
    // echo'<style>body{display:initial;}</style>';
}else{
    header("Location: index.php");
    // echo'<style>body{display:none;}</style>';
}
?>

<center><img src="<?php
if(empty($row['prof_url']) and empty($row ['prof_img'])){
echo 'profilepic.png';
}
elseif(empty($row['prof_url'])){
 echo "uploads/".$row ['prof_img'];
}
else{
 echo $row['prof_url'];  
}
?>" style="border-radius: 50%; height:250px; width:250px;"></center>
<center><br><br>
<?php
            echo '
            <tr>
            <td><a style="font-weight:bold;" class="btn btn-sm btn-success" href="pdf_generation_1.php?ID='.$row['ID'].'"><span class="glyphicon glyphicon-file" aria-hidden="true" style="color:white;"></span> &nbsp;&nbsp; View profile as a pdf</a></td>
            </tr>'
            ?>
<?php
            echo '
            <tr>
            <td><a style="font-weight:bold;" class="btn btn-sm btn-primary" href="pdf_generation_2.php?ID='.$row['ID'].'"><span class="glyphicon glyphicon-download-alt" aria-hidden="true" style="color:white;"></span>  &nbsp;&nbsp;Download profile as pdf</a></td>
            </tr>'
            ?>
</center><br><br>
<section>
    <center>
<section>
<!-- <table class="table table-striped table-condensed"> -->
<table class="table table-hover">
<tr>
<th width="20%">Id</th>
<td><?php echo $row['ID']; ?></td>
</tr>
<tr>
<th>Faculty Name</th>
<td><?php echo $row['name']; ?></td>
</tr>
<tr>
<th>Gender</th>
<td><?php echo $row['Gender']; ?></td>
</tr>
<tr>
<th>Position</th>
<td><?php echo $row['Position']; ?></td>
</tr>
<tr>
<th>Official mail</th>
<td><?php echo $row['Mailid']; ?></td>
</tr>
<tr>
<th>Personal mail</th>
<td><?php echo $row['Email']; ?></td>
</tr>
<tr>
<th>Qualification</th>
<td><?php echo $row['Qualification']; ?></td>
</tr>
<tr>
<th>Department</th>
<td><?php echo $row['Department']; ?></td>
</tr>
<tr>
<th>Regular/Adjunct</th>
<td><?php echo $row['Reg_Adj']; ?></td>
</tr>
<?php
                $a=$row['Department'];
                if ($a!='NTF'){
                echo'

<tr>
<th>Are you an expert member of AICTE committees?</th>
<td>'. $row['AICTE_ex_mem'].'</td>
</tr>
<tr>
<th>Faculty Code given by COE</th>
<td>'.$row['COE_Fac_Code'].'</td>
</tr>
<tr>
<th>Faculty Code given by AICTE</th>
<td>'. $row['AICTE_Fac_code'].'</td>
</tr>' ;   
                }
                else{}?>
<tr>
<th>Joining Date</th>
<td><?php echo $row['Joining_Date']; ?></td>
</tr>
<tr>
<th>Initial Salary</th>
<td><?php echo $row['initial_salary']; ?></td>
</tr>
<tr>
<th>Increment Salary</th>
<td><?php echo $row['increment_salary']; ?></td>
</tr>
<tr>
<th>Gross Pay /Month</th>
<td><?php echo $row['GPM']; ?></td>
</tr>
<!--<tr>-->
<!--<th>Username</th>-->
<!--<td><?php echo $row['username']; ?></td>-->
<!--</tr>-->
<!--<tr>-->
<!--<th>Password</th>-->
<!--<td><?php echo $row['password']; ?></td>-->
<!--</tr>-->
<tr>
<th>DOB</th>
<td><?php echo $row['DOB']; ?></td>
</tr>
<tr>
<th>Age</th>
<td>
<?php
$DOB = $row['DOB'] ;
$age = date_diff(date_create($DOB), date_create('now'))->y;
echo $age;
?>
</td>
</tr>
<?php
                $a=$row['Department'];
                if ($a!='NTF'){
                echo'
<tr>
<th>Doctrate Degree</th>
<td>'.$row['Dr_deg'].'</td>
</tr>';}else{}?>
<tr>
<tr>
<th>Physically Challenged</th>
<td><?php echo $row['Phy_Chl']; ?></td>
</tr>
<th>Additional responsibilities in college</th>
<td><?php echo $row['add_resp']; ?></td>
</tr>
<tr>
<th>Mobile number</th>
<td><?php echo $row['Mob_No']; ?></td>
</tr>
<tr>
<th>Emergency mobile number</th>
<td><?php echo $row['emg_mob_no']; ?></td>
</tr>
<tr>
<th>Landline number</th>
<td><?php echo $row['landline_no']; ?></td>
</tr>
<tr>
<th>IOB Account number</th>
<td><?php echo $row['iob_acc_no']; ?></td>
</tr>
<tr>
<th>PAN number</th>
<td><?php echo $row['PAN_No']; ?></td>
</tr>
<tr>
<th>Passport number</th>
<td><?php echo $row['Passport_No']; ?></td>
</tr>
<tr>
<th>Aadhar number</th>
<td><?php echo $row['Aadhar_No']; ?></td>
</tr>
<tr>
<th>Blood group</th>
<td><?php echo $row['Blood_grp']; ?></td>
</tr>
<tr>
<th>Marital Status</th>
<td><?php echo $row['Marital_status']; ?></td>
</tr>
<tr>
<th>Father's Name</th>
<td><?php echo $row['Father_name']; ?></td>
</tr>
<tr>
<th>Mother's Name</th>
<td><?php echo $row['Mother_name']; ?></td>
</tr>
<tr>
<th>Spouse name</th>
<td><?php echo $row['Spouse_name']; ?></td>
</tr>
<tr>
<th>Spouse Occupation</th>
<td><?php echo $row['Spouse_Occupation']; ?></td>
</tr>

<tr>
<th>Extra-Curricular Activities</th>
<td><?php echo $row['Extracurricular']; ?></td>
</tr>

<tr><th>Languages known along with proficiency</th>
<td>
<?php
$a=1;
while($a<=8 && !empty($row['Lang_Known_'.$a])){
    echo ''.$a.'. '.$row['Lang_Known_'.$a].'-('.$row['profic_'.$a].')';
    echo "<br>";
    $a++;}
    ?>
</td>
</tr>

<tr>
<th>Professional Membership Details</th>
<td><?php echo $row['prof_mem_det']; ?></td>
</tr>
<tr>
<th>Other Membership Details</th>
<td><?php echo $row['other_mem_det']; ?></td>
</tr>
<tr>
<th>Permanent Address</th>
<td><?php echo $row['Per_Add']; ?></td>
</tr>
<tr>
<th>Residential Address</th>
<td><?php echo $row['Com_Add']; ?></td>
</tr>
<tr>
<th>Old Address</th>
<td><?php echo $row['Old_Add']; ?></td>
</tr>
<tr>
<th>Mother tongue</th>
<td><?php echo $row['mot_ton']; ?></td>
</tr>
<tr>
<th>Postal Code</th>
<td><?php echo $row['Postal_code']; ?></td>
</tr>
<tr>
<th>District</th>
<td><?php echo $row['Dist']; ?></td>
</tr>
<tr>
<th>STD code</th>
<td><?php echo $row['STD_Code']; ?></td>
</tr>
<th>Religion</th>
<td><?php echo $row['Religion']; ?></td>
</tr>
<tr>
<th>Catholic</th>
<td><?php echo $row['Catholic']; ?></td>
</tr>
<tr>
<th>Diocese name</th>
<td><?php echo $row['diocese_name']; ?></td>
</tr>
<tr>
<th>Church name and place</th>
<td><?php echo $row['church_name_place']; ?></td>
</tr>
<tr>
<th>Dalit</th>
<td><?php echo $row['dalit']; ?></td>
</tr>
<tr>
<th>Caste</th>
<td><?php echo $row['Caste']; ?></td>
</tr>
<tr>
<th>Community</th>
<td><?php echo $row['Community']; ?></td>
</tr>
<tr>
<th>Birth Place</th>
<td><?php echo $row['Birth_place']; ?></td>
</tr>


</table>
</section>
<h2 class="subtitles" style="text-align: center; color: #322d65; font-weight: bold;"> Educational Qualification</h2><br><br>
<div class="table-responsive">
<table class="table table-hover">
<tr>
                    <th>S.No</th>
<th>Category</th>
<th>Degree Name</th>
                    <th>Specialization</th>
                    <th>Year of passing</th>
                    <th>Name of the college</th>
<th>Name of the University</th>
<th>Class Obtained</th>
<th>College mode</th>
                    <th>Medium</th>
</tr>
<?php
$sql = mysqli_query($con, "SELECT * FROM faculty_basic_details WHERE ID='$ID' ORDER BY ID ASC");
/*if($filter){
$sql = mysqli_query($con, "SELECT * FROM faculty_basic_details WHERE Department='$filter' ORDER BY ID ASC");
}else{
$sql = mysqli_query($con, "SELECT * FROM faculty_basic_details ORDER BY ID ASC");
}
if(mysqli_num_rows($sql) == 0){
echo '<tr><td colspan="8">Data Missing.</td></tr>';
}else{*/

// for($i=1;$i<=7;$i++)
$i=1;
// while($row = mysqli_fetch_assoc($sql));
while($i<=7 && !empty($row['Category_'.$i])){
echo '
<tr>
<td>'.$i.'</td>
<td>'.$row['Category_'.$i].'</td>
<td>'.$row['Deg_Name_'.$i].'</td>
                            <td>'.$row['Specialization_'.$i].'</td>
                            <td>'.$row['Year_of_passing_'.$i].'</td>
    <td>'.$row['Name_of_the_college_'.$i].'</td>
                            <td>'.$row['Name_of_the_University_'.$i].'</td>
                            <td>'.$row['Class_Obtained_'.$i].'</td>
                            <td>'.$row['Clg_mode_'.$i].'</td>
                            <td>'.$row['Clg_medium_'.$i].'</td>
                            </tr>
                        ';
                       
$i++;}

?>
</table>
</section>
<br>
<div class="table-responsive">
<table class="table table-hover">
<tr>
                    <th>S.No</th>
<th>Qualification</th>
<th>Name of the School</th>
                    <th>Mode</th>
                    <th>Medium</th>
                    <th>Percentage obtained</th>
</tr>
<?php
$sql = mysqli_query($con, "SELECT * FROM faculty_basic_details WHERE ID='$ID' ORDER BY ID ASC");
/*if($filter){
$sql = mysqli_query($con, "SELECT * FROM faculty_basic_details WHERE Department='$filter' ORDER BY ID ASC");
}else{
$sql = mysqli_query($con, "SELECT * FROM faculty_basic_details ORDER BY ID ASC");
}
if(mysqli_num_rows($sql) == 0){
echo '<tr><td colspan="8">Data Missing.</td></tr>';
}else{*/

$h=1;
// while($row = mysqli_fetch_assoc($sql));
while($h<=2 && !empty($row['Schl_Qual_'.$h])){
/*$i=1;
while($row = mysqli_fetch_assoc($sql));*/
echo '
<tr>
<td>'.$h.'</td>
<td>'.$row['Schl_Qual_'.$h].'</td>
<td>'.$row['Schl_name_'.$h].'</td>
                            <td>'.$row['Schl_mode_'.$h].'</td>
                            <td>'.$row['Schl_medium_'.$h].'</td>
<td>'.$row['schl_per_'.$h].'</td>
                            </tr>
                        ';
                       
$h++;}

?>
</table>
</div>
<section>
<div class="table-responsive">
<table class="table table-hover">
<tr>
                <th>Area of Specialization</th>
                <td><?php echo $row['Specialization_area']; ?></td>
                </tr>
                <tr>
                <th>Additional Qualification</th>
                <td><?php echo $row['Add_Qual']; ?></td>
                </tr>
                <?php
                $a=$row['Department'];
                if ($a!='NTF'){
                echo'
                <tr>
                <th>Ph.D Title</th>
                <td>'. $row['Phd_title'].'</td>
                </tr>
                <tr>
                <th>Faculty in which PhD was awarded</th>
                <td>'.$row['Fac_Phd_award'].'</td>
                </tr>
                <tr>
                <th>Ph.D University</th>
                <td>'.$row['phd_univ'].'</td>
                </tr>
                <tr>
                <th>Ph.D Year of completion</th>
                <td>'.$row['phd_comp'].'</td>
                </tr>';
                }
                else{}
                ?>
</table>
</section>

<h2 class="subtitles" style="text-align: center; color: #322d65; font-weight: bold;"> Academic Experience </h2><br><br>
<div class="table-responsive">
<table class="table table-hover">
<tr>
                    <th>S.No</th>
<th>College Name</th>
<th>Designation</th>
                    <th>Joining Date</th>
                    <th>Relieving Date/Current Date for Presently working institutions</th>
                    <th>Experience(Years/Months/Days)</th>
<th>Work Type</th>
                    <th>Salary drawn</th>
</tr>
<?php
$sql = mysqli_query($con, "SELECT * FROM faculty_basic_details WHERE ID='$ID' ORDER BY ID ASC");
/*if($filter){
$sql = mysqli_query($con, "SELECT * FROM faculty_basic_details WHERE Department='$filter' ORDER BY ID ASC");
}else{
$sql = mysqli_query($con, "SELECT * FROM faculty_basic_details ORDER BY ID ASC");
}
if(mysqli_num_rows($sql) == 0){
echo '<tr><td colspan="8">Data Missing.</td></tr>';
}else{*/

$j=1;
// while($row = mysqli_fetch_assoc($sql));
while($j<=8 && !empty($row['Clg_Name_'.$j])){
$jd = $row['Joining_Date_'.$j] ;
$rcd = $row['Rel_Cur_Date_'.$j] ;
$aey = date_diff(date_create($rcd), date_create($jd))->y;
$aem = date_diff(date_create($rcd), date_create($jd))->m;
$aed = date_diff(date_create($rcd), date_create($jd))->d;

echo '
<tr>
<td>'.$j.'</td>
<td>'.$row['Clg_Name_'.$j].'</td>
<td>'.$row['Designation_'.$j].'</td>
                            <td>'.$jd.'</td>
                            <td>'.$rcd.'</td>
                            <td>'.$aey.' years /'.$aem.' months/'.$aed.' days </td>
                            <td>'.$row['Work_type_'.$j].'</td>
                            <td>'.$row['Salary_drawn_'.$j].'</td>
                            </tr>
                        ';
                       
$j++;}

?>
</table>
</div>
<section>
<div class="table-responsive">
<table class="table table-hover">
<tr>

<?php
$sql = mysqli_query($con, "SELECT * FROM faculty_basic_details WHERE ID='$ID' ORDER BY ID ASC");
$y=1;
$ytey=0;
$ytem=0;
$yted=0;
while($y<=8 && !empty($row['Clg_Name_'.$y])){
$jdy = $row['Joining_Date_'.$y] ;
$rcdy = $row['Rel_Cur_Date_'.$y] ;
$yaey = date_diff(date_create($rcdy), date_create($jdy))->y;
$yaem = date_diff(date_create($rcdy), date_create($jdy))->m;
$yaed = date_diff(date_create($rcdy), date_create($jdy))->d;
$ytey+=$yaey;
$ytem+=$yaem;
$yted+=$yaed;
$y++;
}
if($ytem/12>0){
  $q=intdiv($ytem,12);
  $ytey+=$q;
}
if($yted/30>0){
$ytem=$ytem%12;
$q2=intdiv($yted,30);
$ytem+=$q2;
}
$a=$row['Department'];
$b='';
if ($a!='NTF'){$b='Teaching';}
                echo'
                <th>'.$b.' Experience in years</th>
                <td> '.$ytey.' years , '.$ytem.' months</td>';?>
                </tr>
                <?php
                $a=$row['Department'];
                if ($a!='NTF'){
                echo'
                <tr>
                <th>Total Work Experience in years</th>
                <td>'.$row['Total_work_exp'].'</td>
                </tr>
                <tr>
                <th>Years of experience before ME</th>
                <td>'.$row['ybefme'].'</td>
                </tr>
                <tr>
                <th>Years of experience after ME</th>
                <td>'.$row['yafme'].'</td>
                </tr>
                <tr>
                <th>No. of Books published</th>
                <td>'.$row['books_published'].'</td>
                </tr>
                <tr>
                <th>No. of International papers published</th>
                <td>'.$row['Nof_Intl_papers'].'</td>
                </tr>
                <tr>
                <th>No. of National Papers published</th>
                <td>'. $row['Nof_Ntl_papers'].'</td>
                </tr>
                <tr>
                <th>No. of International journals published</th>
                <td>'.$row['Nof_Intl_journals'].'</td>
                </tr>
                <tr>
                <th>No. of National journals published</th>
                <td>'.$row['Nof_Ntl_journals'].'</td>
                </tr>
                <tr>
                <th>No. of Doctorate students guided</th>
                <td>'. $row['Nof_drstu_guided'].'</td>
                </tr>
                <tr>
                <th>No. of Projects done</th>
                <td>'.$row['projects'].'</td>
                </tr>
                <tr>
                <th>No. of UG/PG projects guided</th>
                <td>'.$row['Nof_PGpro_guided'].'</td>
                </tr>' ;   
                }
                else{}?>
</table>
</section>
<?php
                $a=$row['Department'];
                if ($a!='NTF'){
                echo'
<h2 class="subtitles" style="text-align: center; color: #322d65; font-weight: bold;"> Academic Acheivements </h2><br><br>
<div class="table-responsive">
<table class="table table-hover">
<tr>
                    <th>S.No</th>
<th>Year</th>
<th>National Papers published</th>
                    <th>International Papers published</th>
                    <th>National journals published</th>
                    <th>International journals published</th>
                    <th>National conferences attended</th>
                    <th>International conferences attended</th>
                    <th>Total</th>
                   
</tr>' ;   
                }
                else{}?>
<?php

$sql = mysqli_query($con, "SELECT * FROM faculty_basic_details WHERE ID='$ID' ORDER BY ID ASC");
/*if($filter){
$sql = mysqli_query($con, "SELECT * FROM faculty_basic_details WHERE Department='$filter' ORDER BY ID ASC");
}else{
$sql = mysqli_query($con, "SELECT * FROM faculty_basic_details ORDER BY ID ASC");
}
if(mysqli_num_rows($sql) == 0){
echo '<tr><td colspan="8">Data Missing.</td></tr>';
}else{*/

$k=1;

// while($row = mysqli_fetch_assoc($sql));
while($k<=6 &&  !empty($row['Year_'.$k])){
$tot=(int)$row['Ntl_paper_'.$k]+(int)$row['Intl_paper_'.$k]+(int)$row['Ntl_Journal_'.$k]+(int)$row['Intl_journal_'.$k]+(int)$row['Ntl_con_'.$k]+(int)$row['Intl_con_'.$k];
$a=$row['Department'];
                if ($a!='NTF'){
echo '
<tr>
<td>'.$k.'</td>
<td>'.$row['Year_'.$k].'</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['Ntl_paper_'.$k].'</td>
                            <td>'.$row['Intl_paper_'.$k].'</td>
                            <td>'.$row['Ntl_Journal_'.$k].'</td>
<td>'.$row['Intl_journal_'.$k].'</td>
                            <td>'.$row['Ntl_con_'.$k].'</td>
                            <td>'.$row['Intl_con_'.$k].'</td>
                            <td>'.$tot.'</td>
                            </tr>
                        ';
                       

$k++;}   
                
                else{}
                    
                }
?>

</table>
</div>
<h2 class="subtitles" style="text-align: center; color: #322d65; font-weight: bold;"> Industrial Experience </h2><br><br>
<div class="table-responsive">
<table class="table table-hover">
<tr>
                    <th>S.No</th>
                    <th>Name of the organisation</th>
                    <th>Designation</th>
                    <th>Nature of work</th>
                    <th>Joining Date</th>
                    <th>Relieving data</th>
                    <th>Experience (Years/months/days)</th>
                   
</tr>
<?php
$sql = mysqli_query($con, "SELECT * FROM faculty_basic_details WHERE ID='$ID' ORDER BY ID ASC");
/*if($filter){
$sql = mysqli_query($con, "SELECT * FROM faculty_basic_details WHERE Department='$filter' ORDER BY ID ASC");
}else{
$sql = mysqli_query($con, "SELECT * FROM faculty_basic_details ORDER BY ID ASC");
}
if(mysqli_num_rows($sql) == 0){
echo '<tr><td colspan="8">Data Missing.</td></tr>';
}else{*/

$l=1;
// while($row = mysqli_fetch_assoc($sql));
while($l<=5 && !empty($row['Org_Name_'.$l])){
$jdi = $row['Joining_DateIN_'.$l] ;
$rcdi = $row['Rel_Date_'.$l] ;
$iey = date_diff(date_create($rcdi), date_create($jdi))->y;
$iem = date_diff(date_create($rcdi), date_create($jdi))->m;
$ied = date_diff(date_create($rcdi), date_create($jdi))->d;
  
echo '
<tr>
<td>'.$l.'</td>
<td>'.$row['Org_Name_'.$l].'</td>
<td>'.$row['DesignationIN_'.$l].'</td>
                            <td>'.$row['Nature_of_work_'.$l].'</td>
                            <td>'.$jdi.'</td>
                            <td>'.$rcdi.'</td>
                            <td>'.$iey.' years/'.$iem.' months/'.$ied.' days </td>
                            </tr>
                        ';
                       

$l++;}
?>
</table>
</div>
<section>
<div class="table-responsive">
<table class="table table-hover">
<tr>
<?php
$sql = mysqli_query($con, "SELECT * FROM faculty_basic_details WHERE ID='$ID' ORDER BY ID ASC");
$o=1;
$otey=0;
$otem=0;
$oted=0;
while($o<=8 && !empty($row['Org_Name_'.$o])){
$jdo = $row['Joining_DateIN_'.$o] ;
$rcdo = $row['Rel_Date_'.$o] ;
$oiey = date_diff(date_create($rcdo), date_create($jdo))->y;
$oiem = date_diff(date_create($rcdo), date_create($jdo))->m;
$oied = date_diff(date_create($rcdo), date_create($jdo))->d;
$otey+=$oiey;
$otem+=$oiem;
$oted+=$oied;
$o++;
}

if($otem/12>0){
  $q1=intdiv($otem,12);
  $otey+=$q1;
}
$otem=$otem%12;
if($oted/30>0){
  $q2=intdiv($oted,30);
  $otem+=$q2;
}
                echo'
                <th>Total Industrial Experience </th>
                <td> '.$otey.' years , '.$otem.' months</td>'?>
                </tr>
                <?php
                $a=$row['Department'];
                if ($a!='NTF'){
                echo'
                <tr>
                <th>Research Experience in years</th>
                <td>'.$row['Research_Exp'].'</td>
                </tr>
                <tr>
                <th>Patents
                <td>'.$row['Patents'].'</td>
                </tr>';}
                else{}
                ?>
                </table>
            </section>
<h2 class="subtitles" style="text-align: center; color: #322d65; font-weight: bold;"> Family Details </h2><br><br>
<div class="table-responsive">
<table class="table table-hover">
<tr>
                    <th>S.No</th>
                    <th>Name of the Family member</th>
                    <th>Relationship</th>
                    <th>Date of Birth</th>
                    <th>Highest Educational Qualification</th>
                    <th>Employment status and Position held</th>
                    <th>Income per month</th>
                   
                   
</tr>
<?php
$sql = mysqli_query($con, "SELECT * FROM faculty_basic_details WHERE ID='$ID' ORDER BY ID ASC");
/*if($filter){
$sql = mysqli_query($con, "SELECT * FROM faculty_basic_details WHERE Department='$filter' ORDER BY ID ASC");
}else{
$sql = mysqli_query($con, "SELECT * FROM faculty_basic_details ORDER BY ID ASC");
}
if(mysqli_num_rows($sql) == 0){
echo '<tr><td colspan="8">Data Missing.</td></tr>';
}else{*/

$m=1;
// while($row = mysqli_fetch_assoc($sql));
while( $m<=9 && !empty($row['Mem_Name_'.$m]) ){echo '
<tr>
<td>'.$m.'</td>
<td>'.$row['Mem_Name_'.$m].'</td>
<td>'.$row['Rel_'.$m].'</td>
                            <td>'.$row['DOB_'.$m].'</td>
                            <td>'.$row['HEduQual_'.$m].'</td>
                            <td>'.$row['Emp_status_'.$m].'</td>
                            <td>'.$row['Inc_mont_'.$m].'</td>
                            </tr>
                        ';
$m++;}
?>

</table>
</div>

                           



<center><a href="index.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Back</a>
<?php
if($dept=='ADMIN' or $dept==$row['Department']){
    echo'
<a href="edit.php?ID='.$row['ID'].'" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Data</a>
<a href="profile.php?action=delete&ID='.$row['ID'].'" class="btn btn-sm btn-danger" onclick="return confirm(\'Are you sure you want to delete the data? '.$row['name'].'\')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete Data</a></center>';}
else{} ?>
</div>
</div>
<br>
<br><br>

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
          }
          else{
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

</body>
</html>