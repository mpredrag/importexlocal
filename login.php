 <?php require_once('Connections/ImportexLocal.php'); ?>
<?php
error_reporting (E_ALL ^ E_NOTICE);
ini_set('session.bug_compat_42',0);
ini_set('session.bug_compat_warn',0);
ob_start();	

session_start();


$loginmailprenesi = $_SESSION['MM_EMail'];

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);
  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
$trazenitekst = 'POŠTOVANE KOLEGE, PRIJATAN RAD ŽELI VAM MENADŽMENT IMPORTEX!
  POŠTOVANE KOLEGE, PRIJATAN RAD ŽELI VAM MENADŽMENT IMPORTEX!
  POŠTOVANE KOLEGE, PRIJATAN RAD ŽELI VAM MENADŽMENT IMPORTEX! 
  POŠTOVANE KOLEGE, PRIJATAN RAD ŽELI VAM MENADŽMENT IMPORTEX! 
  POŠTOVANE KOLEGE, PRIJATAN RAD ŽELI VAM MENADŽMENT IMPORTEX! 
  POŠTOVANE KOLEGE, PRIJATAN RAD ŽELI VAM MENADŽMENT IMPORTEX!
  POŠTOVANE KOLEGE, PRIJATAN RAD ŽELI VAM MENADŽMENT IMPORTEX! 
  POŠTOVANE KOLEGE, PRIJATAN RAD ŽELI VAM MENADŽMENT IMPORTEX!
  POŠTOVANE KOLEGE, PRIJATAN RAD ŽELI VAM MENADŽMENT IMPORTEX!
  POŠTOVANE KOLEGE, PRIJATAN RAD ŽELI VAM MENADŽMENT IMPORTEX!
  POŠTOVANE KOLEGE, PRIJATAN RAD ŽELI VAM MENADŽMENT IMPORTEX! 
  POŠTOVANE KOLEGE, PRIJATAN RAD ŽELI VAM MENADŽMENT IMPORTEX!';

  
     if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
   
      $myusername = $_POST['email'];
      $mypassword = $_POST['password'];
	   
  mysql_select_db($database_ImportexLocal, $ImportexLocal);   
  mysql_query("SET NAMES 'utf8'");      
        $query_sql = "SELECT * FROM zaposlenioperateri WHERE EMail = '$myusername' AND UserPassword = '$mypassword'"; 
	  
$sql = mysql_query($query_sql, $ImportexLocal) or die(mysql_error());
$row_sql = mysql_fetch_assoc($sql);
$count = mysql_num_rows($sql);
	
      if($count == 1) {
    $loginZaposleniID  = mysql_result($sql,0,'IDZaposlenog');
    $loginUserEMail  = mysql_result($sql,0,'EMail');
    $loginGrupa  = mysql_result($sql,0,'Grupa');
    $zaposleniSifra = mysql_result($sql,0,'SifraZaposlenog');

    $_SESSION['MM_EMail'] = $loginEMail;
    $_SESSION['MM_ZaposleniID'] = $loginZaposleniID;
    $_SESSION['MM_Grupa'] = $loginGrupa ;
    $_SESSION['MM_SifraZaposlenog'] = $zaposleniSifra;
	
	
 		//UPDATE VremeLogovanja

$vremelogovanja = date("Y.m.d H:i:s");

$updateVremeLogovanjaSQL = sprintf("UPDATE zaposlenioperateri SET VremeLogovanja = '$vremelogovanja', Aktivan = 'DA' WHERE (IDZaposlenog = '$loginZaposleniID')");
mysql_select_db($database_ImportexLocal, $ImportexLocal);

$ResultVremeLogovanja = mysql_query($updateVremeLogovanjaSQL, $ImportexLocal) or die(mysql_error());

//--------------------------------------------------------------------------------------------------------------------------------------     
        // header("Location: MeniGlavni.php");
?>
<script type="text/javascript">
myWindow=window.open('MeniGlavni.php', "_parent");
</script>
<?php   
      }else {
	  echo '<p style="color: red; font-size: 16px; font-weight: bold; background-color: #FFFF00; text-align: left" >Pogrešan E-Mail ili Lozinka!
	  </p>';	
      }
   }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Importex-VinoVino</title>



<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:327px;
	height:204px;
	z-index:1;
	left: 421px;
	top: 65px;
	background-color: #CCFF66;
}
#Layer4 {
	position:absolute;
	width:289px;
	height:30px;
	z-index:4;
	left: 5px;
	top: 162px;
<select name=""></select>
; 	background-color: #339900;
}
#Layer3 {
	position:absolute;
	width:293px;
	height:23px;
	z-index:2;
	background-color: #339900;
	left: 2px;
	top: 1px;
}
#Layer2 {
	position:absolute;
	width:937px;
	height:69px;
	z-index:2;
	left: 16px;
	top: 288px;
}
#Layer5 {
	position:absolute;
	width:359px;
	height:38px;
	z-index:3;
	left: 6px;
	top: 3px;
}
.style2 {
	color: #006600;
	font-size: xx-large;
}
.style3 {color: #006600}
#Layer6 {
	position:absolute;
	width:231px;
	height:95px;
	z-index:4;
	left: 4px;
	top: 73px;
}
#Layer7 {
	position:absolute;
	width:138px;
	height:98px;
	z-index:5;
	left: 261px;
	top: 73px;
}
#Layer8 {
	position:absolute;
	width:163px;
	height:115px;
	z-index:6;
	left: 740px;
	top: 9px;
}
.style4 {color: #FFFFFF; font-size: 18px; }
.style5 {font-size: 18px}
#Layer9 {
	position:absolute;
	width:179px;
	height:144px;
	z-index:7;
	left: 747px;
	top: 180px;
}
#Layer10 {
	position:absolute;
	width:163px;
	height:115px;
	z-index:8;
	left: 130px;
	top: 234px;
}
#Layer11 {
	position:absolute;
	width:192px;
	height:138px;
	z-index:9;
	left: 409px;
	top: 274px;
}
#Layer12 {
	position:absolute;
	width:353px;
	height:25px;
	z-index:10;
	left: 383px;
	top: 4px;
	visibility: hidden;
}
.style6 {
	font-size: 16px;
	color: #0000FF;
}
.style10 {color: #000000}
#Layer13 {
	position:absolute;
	width:467px;
	height:482px;
	z-index:11;
	left: 961px;
	top: 17px;
}
#Layer14 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 521px;
	top: -216px;
}
#Layer15 {
	position:absolute;
	width:438px;
	height:552px;
	z-index:11;
	left: 818px;
	top: 69px;
}
.style11 {font-size: x-large}
-->
</style>

<script language="javascript">
ScrollRate = 100;

function scrollDiv_init() {
	DivElmnt = document.getElementById('Layer15');
	ReachedMaxScroll = false;
	
	DivElmnt.scrollTop = 0;
	PreviousScrollTop  = 0;
	
	ScrollInterval = setInterval('scrollDiv()', ScrollRate);
}

function scrollDiv() {
	
	if (!ReachedMaxScroll) {
		DivElmnt.scrollTop = PreviousScrollTop;
		PreviousScrollTop++;
		
		ReachedMaxScroll = DivElmnt.scrollTop >= (DivElmnt.scrollHeight - DivElmnt.offsetHeight);
	}
	else {
		ReachedMaxScroll = (DivElmnt.scrollTop == 0)?false:true;
		
		DivElmnt.scrollTop = PreviousScrollTop;
		PreviousScrollTop--;
	}
}

function pauseDiv() {
	clearInterval(ScrollInterval);
}

function resumeDiv() {
	PreviousScrollTop = DivElmnt.scrollTop;
	ScrollInterval    = setInterval('scrollDiv()', ScrollRate);
}
</script>
</head>
<body onLoad="scrollDiv_init()" bgcolor="ffd800">
<div id="Layer5">
  <p class="style2"><span class="style11">ADMINISTRATIVNI PROGRAM  !</span> </p>
</div>
<div id="Layer1">
  <form id="form1" name="form1" method="POST" action="">
    <div class="style4" id="Layer3">Prijavi se ako imaš registrovan nalog </div>
    <p>&nbsp;</p>
    <p>&nbsp;<span class="style5">Tvoj e-mail :</span>    
<input name="email" type="text" size="25" />
    </p>
    <p><span class="style5">&nbsp;Lozinka:</span>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;  
      <input name="password" type="password" size="25" />
    </p>

    <p align="right">
      <input type="submit" name="Submit" value="Klikni za ulaz" />
    </p>
  </form>
</div>
<div id="Layer2"> 
  <p class="style3">Za IE explorer potrebno je da u Tools meniju izaberete opciju Compatibility View Settings, gde &#269;ekirate opcije Display all websites in Compatibility View!</p>
  <p class="style3">Za Google Chrome potrebno je u Settings-Show advanced settings... de&#269;ekirati opciju Predict network actions to improve page load performance!  </p>
  <p></p>
</div><div id="Layer6"><img src="Slike/importex-logo.jpg" width="223" height="79" /></div>
<div id="Layer7"><img src="Slike/vinovino-logo.jpg" width="127" height="95" /></div>
<div class="style6" id="Layer12">
  <div align="center"><a href="ZaboravljenaLozinkaUnos.php">Ako ste zaboravili lozinku, kliknite ovde! </a>  <span class="style10">ili šaljite poruku na mail: MarjanRako@importex.rs</span></div>
</div>
<div id="Layer15" style="overflow:auto;width:433px;height:174px" onMouseOver="pauseDiv()" onMouseOut="resumeDiv()"> 
<?php echo $trazenitekst; ?></div>
</body>
</html>
