<html>
<head>
<title>_.:|Forse|:._ Browser game</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250" />
<meta name="keywords" content="pepies, forse, browser game, hra cez browser, test, mysql, atd" />
</head>
<style type="text/css">
.pole1 {	border:none;
}
#menu{
	position: absolute;
	top: 171px;
	left: 0px;
	width:292px;
	background-color:#06C;
	height: 728px;
	background:url(img/menu.png), no-repeat, right;
	}
#telo{
	width:624px;
	position: absolute;
	top: 149px;
	left: 292px;
	height: 673px;
}
#hlavicka {
	position: absolute;
	top: 0px;
	left: 0px;
	background:url(img/header.png), no-repeat, center;
	width: 1024px;
	height: 171px;
	}
#top {
	position: absolute;
	top: 733px;
	left: 969px;
	width: 93px;
	height: 120px;
	}
#lave {
	position: absolute;
	top: 171px;
	left: 916px;
	background:url(img/lave.png), no-repeat, center;
	width: 52px;
	height: 728px;
	}
.pole{
	border:none;
	}
#telo {
	background-color:#FFF;
}
b{
	color:#F00;
	}
a {
	text-decoration:none;
	color:#366;
	}
a:hover {
	text-decoration:underline;
	color:#3F9;}
.menu {
	text-decoration:none;
	color:#FFF;}
.menu:hover {
	text-decoration:underline;
	color:#3F9;}
.sipka {
	position: absolute;
	left:240px;
	top:50px;
	z-index:+1;
	}
</style>
<body>
<div id="hlavicka">
<div align="left">

<form name="login" method="post" action="index.php?login=y">
<table width="255" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="255" align="right" valign="bottom" height="75">
    <input name="username" type="text" class="pole1" size="15"></td>
  </tr>
  <tr>
    <td height="34" align="right" valign="bottom">
    <input name="password" type="password" class="pole1" size="13"></td>
    </tr>
  <tr>
    <td align="right"><input type="image" src="img/ok-1.png"></td>
    </tr>
</table>
</form>
<?php
if ($login==y)
 {
//Database Information
$dbhost = "mysql.over.cz";
$dbname = "ov_neni";
$dbuser = "ov_neni";
$dbpass = "brecska123";
//Connect to database
mysql_connect ( $dbhost, $dbuser, $dbpass)or die("Could not connect: ".mysql_error());
mysql_select_db($dbname) or die(mysql_error());
//ses start... tu
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$username' and password='$password'";
$result = mysql_query($query);
if (!$result)
{
echo "<b>Zle zadané ID abo PW.</b>";
}
if (mysql_num_rows($result) != 1) {
echo "<b>Zadaj obe kolónky.</b>";
} else {

    $_SESSION['username'] = "$username";
	$_SESSION['password'] = "$password";
	header("location:memberspage.php");
}
exit;
mysql_close(); }
 if($page==login){
	 echo "<img src=img/sipka.png class=sipka />";
	 }
?>

</div>
</div>
<div id="menu">
 <div align="center"> 
   <p>&nbsp;</p>
   <table width="50" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><a class="menu" href="index.php">Home</a></td>
    </tr>
    <tr>
      <td><a class="menu" href="index.php?page=registracia">Register</a></td>
    </tr>
    <tr>
      <td><a class="menu" href="index.php?page=login">Login</a></td>
    </tr>
    <tr>
      <td><a class="menu" href="index.php?page=book">Chat</a></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>

  </div>
</div>
<div id="lave"></div>
<div id="telo"><? 
switch ($page) { 
case "registracia": 
include "register.html"; 
break; 
case "register": 
include "register.php"; 
break; 
case "login": 
include "login.html"; 
break; 
case "book": 
include "book.html"; 
break; 
case 6: 
include ".htm"; 
break; 
default: 
include "obsah.php"; 
break; 
}?>
</div>

<div id="top">
<TABLE cellSpacing=0 cellPadding=0 align=center border=0><TBODY><TR><TD>
<MARQUEE scrollAmount=2 onmouseover='this.stop()' onmouseout='this.start()' direction=up width=139 height=120>
<a href="http://www.pepies.7x.cz" target="_blank"><img src="http://pepies.7x.cz/image/thm/13251102" width=88 border="0" height=31></a>
<script src="http://p1.naj.sk/code?site=43149;t=beg80" type="text/javascript"></script><noscript><div><a href="http://naj.sk/"><img src="http://p1.naj.sk/hit?site=43149;t=beg80;ref=;jss=0" width="80" height="15" alt="NAJ.sk" style="border:none" /></a></div></noscript><br>
<a href="http://www.toplist.sk/toplist/?search=forse&a=s"><script language="JavaScript" type="text/javascript">
<!--
document.write ('<img src="http://toplist.sk/count.asp?id=1215591&logo=bc&start=22&http='+escape(document.referrer)+'&wi='+escape(window.screen.width)+'&he='+escape(window.screen.height)+'" width="88" height="120" border=0 alt="TOPlist" />'); 
//--></script><noscript><img src="http://toplist.sk/count.asp?id=1215591&logo=bc&start=22" border="0"
alt="TOPlist" width="88" height="120" /></noscript></a>
</MARQUEE>
</TD></TR></TBODY></TABLE>
</div>
</body>
</html>