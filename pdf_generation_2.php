<?php
include("connection.php");
include("functions.php");
session_start();
if(!isset($_SESSION['userid'])){
	$user_data=check_login($con);
}
else{
}
require('vendor/autoload.php');

?>
<?php
$ID = $_GET['ID'];
$sql = mysqli_query($con, "SELECT * FROM faculty_basic_details  WHERE ID='$ID' ORDER BY ID ASC");

$html='<link href="css/bootstrap.min.css" rel="stylesheet">
  <img class="i1" src ="header.jpg"><br><br> 
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Doppio+One&family=Montserrat:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">';
if(mysqli_num_rows($sql) == 0){
$html.='<center><h3 style="font-weight:bold";>Data not found</h3></center>';
}else{
while($row=mysqli_fetch_assoc($sql)){
    $a=$row['Department'];
                if ($a!='NTF'){
$html.='<style>
.1{
font-weight:bold;
font-size:15px;
padding-right:160px;
padding-left:70px;
padding-bottom:3px;
font-family: Doppio One, sans-serif;
color: black;
}
.2{
font-size:15px;
color:black;
padding-bottom:3px;
font-family: Montserrat, sans-serif;
}
.3{
padding-right:5px;
}
.4{
font-weight:bold;
padding-right:3px;

}
.a:hover{
color:blue;
text-decoration: underline;
}

.i1{
height:15%;
width:100%;
}
.i2{
margin:0px;
float:left;
width:150px;
height:150px;
margin-left:260px;
}
.right{
float:left;
margin-left:0px;
height:50px;
}

</style>';
if(empty($row['prof_url']) and empty($row['prof_img'])){
 $html.='<span style="float:left;"><center><img class="i2" src="'."profilepic.png".'"></center></span><br><br>';
}
elseif(empty($row['prof_url'])){
 $html.='<span style="float:left;"><center><img class="i2" src="'."uploads/".$row['prof_img'].'"></center></span><br><br>';
}
else{  
 $html.='<span style="float:left;"><center><img class="i2" src="'.$row['prof_url'].'"></center></span><br><br>';
}
$html.='<span class="right"><center><table>


<tr><td class="1" style="padding-bottom:3px;">Faculty Name</td><td class="3" style="padding-bottom:3px;">:</td>
   <td class="2" style="padding-bottom:3px;">'.$row['name'].'</td></tr>
<tr><td class="1" style="padding-bottom:3px;">Designation</td><td class="3" style="padding-bottom:3px;">:</td>
<td class="2" style="padding-bottom:3px;">'.$row['Position'].'</td></tr>
<tr><td class="1" style="padding-bottom:3px;">Phone No.</td><td class="3" style="padding-bottom:3px;">:</td>
<td class="2" style="padding-bottom:3px;">'.$row['Mob_No'].'</td></tr>
<tr><td class="1" style="padding-bottom:3px;">Mailid</td><td class="3" style="padding-bottom:3px;">:</td>
<td class="2" style="padding-bottom:3px;"  href="" >'.$row['Mailid'].'</td></tr>
<tr><td class="1" style="padding-bottom:3px;">Qualification</td><td class="3" style="padding-bottom:3px;">:</td>
<td class="2" style="padding-bottom:3px;">'.$row['Qualification'].'</td></tr>
<tr><td class="1" style="padding-bottom:3px;">Department</td><td class="3" style="padding-bottom:3px;">:</td>
<td class="2" style="padding-bottom:3px;" style="padding-bottom:3px;">'.$row['Department'].'</td></tr>

</table></center></span><br><br>
<table>
<tr><td class="1">Education</td> ';

$s=1;
while($s<=7 && !empty($row['Category_'.$s])){
$html.='<td class="4" style="padding-left:29px;"> • </td>
<td class="2">'.$row['Deg_Name_'.$s].' - '.$row['Year_of_passing_'.$s].' , '.$row['Name_of_the_University_'.$s].'</td><tr><td> </td></tr>';
$s++;
}
$html.='</table><br><table>';

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
$ytem=$ytem%12;
if($yted/30>0){
  $q2=intdiv($yted,30);
  $ytem+=$q2;
}

$html.='<tr><td class="1" style="padding-right:103px;">Teaching Experience </td><td class="3">:</td>
<td class="2">'.$ytey.' years , '.$ytem.' months</td></tr>


<tr><td class="1"></td> ';
$t=1;
while($t<=7 && !empty($row['Clg_Name_'.$t])){
$jd = $row['Joining_Date_'.$t] ;
$rcd = $row['Rel_Cur_Date_'.$t] ;
$aey = date_diff(date_create($rcd), date_create($jd))->y;
$aem = date_diff(date_create($rcd), date_create($jd))->m;
$aed = date_diff(date_create($rcd), date_create($jd))->d;

$html.='<td class="4"> • </td>
<td class="2">'.$row['Designation_'.$t].' - '.$row['Clg_Name_'.$t].' ( '.$aey.' years , '.$aem.' months ) </td><tr><td> </td></tr>';
$t++;
}
$html.='<tr><td class="1" style="padding-right:105px;padding-bottom:10px;">Research Experience </td><td class="3">:</td>
<td class="2">'.$row['Research_Exp'].'</td></tr></table><br><table>';

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

$html.='
<tr><td class="1" style="padding-right:103px;">Industrial Experience </td><td class="3">:</td>
<td class="2"> '.$otey.' years , '.$otem.' months</td></tr>


<tr><td class="1"></td> ';
$r=1;
while($r<=5 && !empty($row['Org_Name_'.$r])){
$jdi = $row['Joining_DateIN_'.$r] ;
$rcdi = $row['Rel_Date_'.$r] ;
$iey = date_diff(date_create($rcdi), date_create($jdi))->y;
$iem = date_diff(date_create($rcdi), date_create($jdi))->m;
$ied = date_diff(date_create($rcdi), date_create($jdi))->d;

$html.='<td class="4"> • </td>
<td class="2">'.$row['DesignationIN_'.$r].' - '.$row['Org_Name_'.$r].' ( '.$iey.' years ,'.$iem.' months) </td><tr><td> </td></tr>';
$r++;
}

$html.='</table><br><table>
<tr><td class="1" style="padding-right:105px;">PhD Title </td><td class="3">:</td>
<td class="2">'.$row['Phd_title'].'</td></tr>

<tr><td class="1" style="padding-right:5px;">No. of Doctorate students guided  </td><td class="3">:</td>
<td class="2">'.$row['Nof_drstu_guided'].'</td></tr>

<tr><td class="1" style="padding-right:5px;">No. of PG projects guided  </td><td class="3">:</td>
<td class="2">'.$row['Nof_PGpro_guided'].'</td></tr>

<tr><td class="1" style="padding-right:5px;">No. of Patents published </td><td class="3">:</td>
<td class="2">'.$row['Patents'].'</td></tr></table>';

$ic=(int)$row['Intl_con_1']+(int)$row['Intl_con_2']+(int)$row['Intl_con_3']+(int)$row['Intl_con_4']+(int)$row['Intl_con_5']+(int)$row['Intl_con_6'];
$nc=(int)$row['Ntl_con_1']+(int)$row['Ntl_con_2']+(int)$row['Ntl_con_3']+(int)$row['Ntl_con_4']+(int)$row['Ntl_con_5']+(int)$row['Ntl_con_6'];
$html.='<br><br>
<table>
<tr><th class="1" style="font-size:16px; padding-bottom:10px;">Publications </th>
<tr><td class="1" style=" padding-left:75px;padding-right:5px;">No. of International Journals / papers </td><td class="3">:</td><td class="2">'.$row['Nof_Intl_journals'].' / '.$row['Nof_Intl_papers'].'</td>
<tr><td class="1" style=" padding-left:75px;padding-right:5px;">No. of National Journals / papers </td><td class="3">:</td><td class="2">'.$row['Nof_Ntl_journals'].' / '.$row['Nof_Ntl_papers'].'</td>
<tr><td class="1" style=" padding-left:75px;padding-right:5px;">No. of International Conferences </td><td class="3">:</td><td class="2">'.$ic.'</td>
<tr><td class="1" style=" padding-left:75px;padding-right:5px;">No. of National Conferences </td><td class="3">:</td><td class="2">'.$nc.'</td>';
$html.='</table>';
}


else{
    $html.='<style>
.1{
font-weight:bold;
font-size:15px;
padding-right:160px;
padding-left:70px;
padding-bottom:3px;
font-family: Doppio One, sans-serif;
color: black;
}
.2{
font-size:15px;
color:black;
padding-bottom:3px;
font-family: Montserrat, sans-serif;
}
.3{
padding-right:5px;
}
.4{
font-weight:bold;
padding-right:3px;

}
.a:hover{
color:blue;
text-decoration: underline;
}

.i1{
height:15%;
width:100%;
}
.i2{
margin:0px;
float:left;
width:150px;
height:150px;
margin-left:260px;
}
.right{
float:left;
margin-left:0px;
height:50px;
}

</style>';

if(empty($row['prof_url']) and empty($row['prof_img'])){
 $html.='<span style="float:left;"><center><img class="i2" src="'."profilepic.png".'"></center></span><br><br>';
}
elseif(empty($row['prof_url'])){
 $html.='<span style="float:left;"><center><img class="i2" src="'."uploads/".$row['prof_img'].'"></center></span><br><br>';
}
else{  
 $html.='<span style="float:left;"><center><img class="i2" src="'.$row['prof_url'].'"></center></span><br><br>';
}
$html.='</span><br><br>
<span class="right"><center><table >


<tr><td class="1" style="padding-bottom:3px;">Faculty Name</td><td class="3" style="padding-bottom:3px;">:</td>
   <td class="2" style="padding-bottom:3px;">'.$row['name'].'</td></tr>
<tr><td class="1" style="padding-bottom:3px;">Designation</td><td class="3" style="padding-bottom:3px;">:</td>
<td class="2" style="padding-bottom:3px;">'.$row['Position'].'</td></tr>
<tr><td class="1" style="padding-bottom:3px;">Phone No.</td><td class="3" style="padding-bottom:3px;">:</td>
<td class="2" style="padding-bottom:3px;">'.$row['Mob_No'].'</td></tr>
<tr><td class="1" style="padding-bottom:3px;">Mailid</td><td class="3" style="padding-bottom:3px;">:</td>
<td class="2" style="padding-bottom:3px;"  href="" >'.$row['Mailid'].'</td></tr>
<tr><td class="1" style="padding-bottom:3px;">Qualification</td><td class="3" style="padding-bottom:3px;">:</td>
<td class="2" style="padding-bottom:3px;">'.$row['Qualification'].'</td></tr>
<tr><td class="1" style="padding-bottom:3px;">Department</td><td class="3" style="padding-bottom:3px;">:</td>
<td class="2" style="padding-bottom:3px;" style="padding-bottom:3px;">'.$row['Department'].'</td></tr>

</table></center></span><br><br>
<table>
<tr><td class="1">Education</td> ';

$s=1;
while($s<=7 && !empty($row['Category_'.$s])){
$html.='<td class="4" style="padding-left:29px;"> • </td>
<td class="2">'.$row['Deg_Name_'.$s].' - '.$row['Year_of_passing_'.$s].' , '.$row['Name_of_the_University_'.$s].'</td><tr><td> </td></tr>';
$s++;
}
$html.='</table><br><table>';

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
$ytem=$ytem%12;
if($yted/30>0){
  $q2=intdiv($yted,30);
  $ytem+=$q2;
}

$html.='<tr><td class="1" style="padding-right:103px;">Experience </td><td class="3">:</td>
<td class="2">'.$ytey.' years , '.$ytem.' months</td></tr>


<tr><td class="1"></td> ';
$t=1;
while($t<=7 && !empty($row['Clg_Name_'.$t])){
$jd = $row['Joining_Date_'.$t] ;
$rcd = $row['Rel_Cur_Date_'.$t] ;
$aey = date_diff(date_create($rcd), date_create($jd))->y;
$aem = date_diff(date_create($rcd), date_create($jd))->m;
$aed = date_diff(date_create($rcd), date_create($jd))->d;

$html.='<td class="4"> • </td>
<td class="2">'.$row['Designation_'.$t].' - '.$row['Clg_Name_'.$t].' ( '.$aey.' years , '.$aem.' months ) </td><tr><td> </td></tr>';
$t++;
}

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

$html.='
<tr><td class="1" style="padding-right:103px;">Industrial Experience </td><td class="3">:</td>
<td class="2"> '.$otey.' years , '.$otem.' months</td></tr>


<tr><td class="1"></td> ';
$r=1;
while($r<=5 && !empty($row['Org_Name_'.$r])){
$jdi = $row['Joining_DateIN_'.$r] ;
$rcdi = $row['Rel_Date_'.$r] ;
$iey = date_diff(date_create($rcdi), date_create($jdi))->y;
$iem = date_diff(date_create($rcdi), date_create($jdi))->m;
$ied = date_diff(date_create($rcdi), date_create($jdi))->d;

$html.='<td class="4"> • </td>
<td class="2">'.$row['DesignationIN_'.$r].' - '.$row['Org_Name_'.$r].' ( '.$iey.' years ,'.$iem.' months) </td><tr><td> </td></tr>';
$r++;
}
$html.='</table>';


    
}
}}


$mpdf=new \Mpdf\Mpdf();
$mpdf->showImageErrors = true;
$mpdf->WriteHTML($html);
$file=time().'.pdf';
$mpdf->output($file,'D');
//D
//I
//F
//S
?>