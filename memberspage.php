<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250" />
<meta name="keywords" content="pepies, forse, browser game, hra cez browser, test, mysql, atd" />
<LINK href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<? include  "premenne.php"; ?>
<div id="hlavicka">
<table width="998" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="135" height="54">&nbsp;</td>
    <td width="369">&nbsp;</td>
    <td width="349">&nbsp;</td>
    <td width="145">&nbsp;</td>
  </tr>
  <tr>
    <td height="28">&nbsp;</td>
    <td><font color="black"><? echo "$hp"; ?></font></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="32">&nbsp;</td>
    <td><font color="#00CCFF"><? echo "$mp<br>"; ?></font></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="39">&nbsp;</td>
    <td><font color="#FFFF33"><? echo "Goldy: <b>$gold</b><br>"; ?></font></td>
    <td><font color="#00FF00"><? echo "$exp %"; ?></font></td>
    <td align="right"><font color="#993300">Ahoj <? echo "$name";?>.</font></td>
  </tr>
  <tr>
    <td colspan="4" height="20" align="right">
    
    <table width="975" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td class="exp" height="15" width="<? if($exp==0){echo "1";}else{echo "$exp";} ?>%">&nbsp;</td>
        <td ></td>
      </tr>
    </table>
    
    </td>
    </tr>
  <tr>
    <td height="33" align="right"><font size="+2" color="#FFFF00"><? echo "$sp"; ?></font></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><font color="#B95C00"><? echo "Level: <b>$lvl</b><br>"; ?></font></td>
  </tr>
</table>
</div>
<div id="menu">
 <div align="center"> 
   <p>&nbsp;</p>
   <?php include "menu.html"; ?>
   <br>
  </div>
</div>
<div id="lave"></div>
<div id="telo">
<?php

//novy script++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if($exp>=100 && $exp<=199){
$dbhost = "mysql.over.cz";
$dbname = "ov_neni";
$dbuser = "ov_neni";
$dbpass = "brecska123";
//Pripajam sa do DB
mysql_connect ( $dbhost, $dbuser, $dbpass)or die("Could not connect: ".mysql_error());
mysql_select_db($dbname) or die(mysql_error());
$pointiky = $lvlpoint+3;
$up = $lvl+1;
$noveexp = $exp-100;
mysql_query("UPDATE users SET lvl='$up', exp='$noveexp',lvlpoint='$pointiky' WHERE username='$username'");
mysql_close();
}
if($exp>=200 && $exp<=299){
$dbhost = "mysql.over.cz";
$dbname = "ov_neni";
$dbuser = "ov_neni";
$dbpass = "brecska123";
//Pripajam sa do DB
mysql_connect ( $dbhost, $dbuser, $dbpass)or die("Could not connect: ".mysql_error());
mysql_select_db($dbname) or die(mysql_error());
$pointiky = $lvlpoint+6;
$up = $lvl+2;
$noveexp = $exp-200;
mysql_query("UPDATE users SET lvl='$up', exp='$noveexp',lvlpoint='$pointiky' WHERE username='$username'");
mysql_close();
}
if($exp>=300 && $exp<=399){
$dbhost = "mysql.over.cz";
$dbname = "ov_neni";
$dbuser = "ov_neni";
$dbpass = "brecska123";
//Pripajam sa do DB
mysql_connect ( $dbhost, $dbuser, $dbpass)or die("Could not connect: ".mysql_error());
mysql_select_db($dbname) or die(mysql_error());
$pointiky = $lvlpoint+9;
$up = $lvl+3;
$noveexp = $exp-300;
mysql_query("UPDATE users SET lvl='$up', exp='$noveexp',lvlpoint='$pointiky' WHERE username='$username'");
mysql_close();
}
if($exp>=400 && $exp<=499){
$dbhost = "mysql.over.cz";
$dbname = "ov_neni";
$dbuser = "ov_neni";
$dbpass = "brecska123";
//Pripajam sa do DB
mysql_connect ( $dbhost, $dbuser, $dbpass)or die("Could not connect: ".mysql_error());
mysql_select_db($dbname) or die(mysql_error());
$pointiky = $lvlpoint+12;
$up = $lvl+4;
$noveexp = $exp-400;
mysql_query("UPDATE users SET lvl='$up', exp='$noveexp',lvlpoint='$pointiky' WHERE username='$username'");
mysql_close();
}
if($exp>=500){
echo "<b>Lutujem ale naraz nemôžeš naexpiť viac ako 5 lvlov.</b>";
$dbhost = "mysql.over.cz";
$dbname = "ov_neni";
$dbuser = "ov_neni";
$dbpass = "brecska123";
//Pripajam sa do DB
mysql_connect ( $dbhost, $dbuser, $dbpass)or die("Could not connect: ".mysql_error());
mysql_select_db($dbname) or die(mysql_error());
$pointiky = $lvlpoint+15;
$up = $lvl+5;
$noveexp = $exp-$exp;
mysql_query("UPDATE users SET lvl='$up', exp='$noveexp',lvlpoint='$pointiky' WHERE username='$username'");
mysql_close();
}
switch ($page) { 
case "logout": 
include "out.php"; 
break; 
case "login": 
include "login.html"; 
break; 
case "uvod": 
include "uvod.php"; 
break; 
case "ucet": 
include "ucet.php"; 
break; 
case "vyhodnot": 
include "ucet.php"; 
break; 
default: 
include "uvod.php"; 
break; 
//zmena len obsahu pre INT a STR pridavanie pointov.
case "str": 
include "str.php"; 
break; 
case "int": 
include "int.php"; 
break; 
}
/*
STARA VERZIA PHP LINKOVANIA... na staru dobru clasiku nic nema =P
*/
?>
</div>
</body>
</html>
