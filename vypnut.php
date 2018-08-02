<head>
<title>_.:|Forse|:._ Expenie</title>
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
  </div>
</div>
<div id="lave"></div>
<div id="telo">
  <?php
$dbhost = "mysql.over.cz";
$dbname = "ov_neni";
$dbuser = "ov_neni";
$dbpass = "brecska123";
//Pripajam sa do DB
mysql_connect ( $dbhost, $dbuser, $dbpass)or die("Could not connect: ".mysql_error());
mysql_select_db($dbname) or die(mysql_error());
$query = "UPDATE users SET doba='0' WHERE username='$username'";
$result = mysql_query($query);
if(!$result){
	echo "<a href='#' onClick='history.go(-1)'>Bye bye, chyba.Skús to zrušiť ešte raz</a>";
	}else{
	echo "Experience a expenie bolo zrušené";}
mysql_close();



/*
STARA VERZIA PHP LINKOVANIA... na staru dobru clasiku nic nema =P
*/
?>
</div>
</body>
</html>
