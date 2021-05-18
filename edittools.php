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
    <?php
    if($dept!="ADMIN"){
        header("Location: index.php");    
    }
    ?>
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
                        <li class="navhover" style="color: white; font-weight: bold;"><a href="tooldesk.php">All Logins</a></li>
                        <?php
                        if($dept=="ADMIN"){
                        echo'<li class="navhover" style="color: white; font-weight: bold;"><a href="addtool.php">Add Login</a></li>';
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
            $id = $_GET['id'];
            $sql = mysqli_query($con, "SELECT * FROM users WHERE id='$id'");
            if(mysqli_num_rows($sql) == 0){
                header("Location: tooldesk.php");
            }else{
                $row = mysqli_fetch_assoc($sql);
            }

            if(isset($_POST['save'])){    
                $id                  = $_POST['id'];
                $userid              = $_POST['userid'];
                $username            = $_POST['username'];
                $username            = str_replace("'", "\'", $username);
                $password            = $_POST['password'];
                $password            = str_replace("'", "\'", $password);
                $Department          = $_POST['Department'];



        
                $update = mysqli_query($con, "UPDATE users SET  id='$id',userid='$userid',username='$username', password='$password',Department='$Department' WHERE id='$id'") or die (mysqli_error($con));
   
            
 
                

            //   if($update){
            //         ("&message=success");
            //     }else{
            //         echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data failed to save, please try again.</div>';
            //     }
            // }

              if($update){
                    header("Location: tooldesk.php?id=".$id."&message=success");
                    ob_end_flush();
                }else{
                    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data failed to save, please try again.</div>';
                }
            
            
            if(isset($_GET['message']) == 'success'){
                echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data saved successfully</div>';
            }
            }
            ?>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-sm-3 control-label">ID</label>
                    <div class="col-sm-2">
                        <input type="text" name="id" value="<?php echo $row ['id']; ?>" class="form-control" placeholder="ID" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">User ID</label>
                    <div class="col-sm-4">
                        <input type="text" name="userid" value="<?php echo $row ['userid']; ?>" class="form-control" placeholder="userid" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-4">
                        <input type="text" name="username" value="<?php echo $row ['username']; ?>" class="form-control" placeholder="username" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-4">
                        <input type="text" name="password" value="<?php echo $row ['password']; ?>" class="form-control" placeholder="password" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Department</label>
                    <div class="col-sm-2">
                        <select name="Department" class="form-control">
                            <option value="<?php echo $row ['Department']; ?>"><?php echo $row ['Department']; ?></option>
                            <option value="">------</option>
                            <option value="CSE">CSE</option>
                            <option value="IT">IT</option>
                            <option value="EEE">EEE</option>
                            <option value="ECE">ECE</option>
                            <option value="MECH">MECH</option>
                            <option value="S&H">S&H</option>
                            <option value="NTF">NTF</option>
                        </select>
                    </div>
                </div>
                <br><br><br><br>
                  
                <center><div class="form-group">
                    <div >
                        <?php
                        if($row['Department']!="ADMIN" and $dept=="ADMIN"){ 
                        echo'<input type="submit" name="save" class="btn btn-sm btn-primary" value="Save">';
                        }else{
                        echo'<a title="Warning" onclick="return confirm(\'You Cannot Change '.$row['username'].' Credentials !\')" class="btn btn-primary btn-sm">Save</a>';
                        }
                        ?>
                        <a href="tooldesk.php" class="btn btn-sm btn-danger">Cancel</a>
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