<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250" />
<meta name="keywords" content="pepies, forse, browser game, hra cez browser, test, mysql, atd" />
<LINK href="style.css" rel="stylesheet" type="text/css">

<style type="text/css">
<!--
.bold {
	font-weight: bold;
}
-->
</style>
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
    <td align="right"><font color="#993300">User: <? echo "$username";?>.</font></td>
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
<br>
<form name="form1" method="post" action="expa.php?zadane=ok"><? if($doba=="0"){
	echo "Zapni Botta"; }else{ header("location:wait.php"); break;} ?> na <label>
    <select name="doba" id="doba">
      <option value="120">2</option>
      <option value="300">5</option>
      <option value="1800">30</option>
      <option value="7200">120</option>
      <option value="21600">360</option>
      <option value="28800">480</option>
      <option value="86400">1440</option>
	</select>
  </label>min.
    <input type="submit" name="Submit" id="Submit">
</form>
<hr width="90%">
<?php

if($zadane==ok){
$dbhost = "mysql.over.cz";
$dbname = "ov_neni";
$dbuser = "ov_neni";
$dbpass = "brecska123";

mysql_connect ( $dbhost, $dbuser, $dbpass)or die("Could not connect: ".mysql_error());
mysql_select_db($dbname) or die(mysql_error());
$doba = $_POST['doba']; //ako dlho bude expi�.

$query = "UPDATE `users` SET time = NOW() , doba='$doba'  WHERE username='$username'";
$result = mysql_query($query);
mysql_close();
if(!$result){
echo "Bye bye, chyba.";
}else{
	include "wait.php";
header("location:wait.php");

}
}

?>
<table align="center" style="border:solid, #600;" width="519" border="5" cellspacing="3" cellpadding="0">
<tr></tr>
<tr></tr>
<tr></tr>
<tr>
  <td colspan="3"><center>
    <h5>Rozpis d�ky expenia.</h5>
  </center></td>
</tr>
<tr>
  <td width="">120 sek&uacute;nd =</td>
  <td width=""><span class="bold">2</span> minuty</td>
  <td width="">&nbsp;</td>
</tr>
<tr>
  <td>300 sek&uacute;nd =</td>
  <td><span class="bold">5</span> min&uacute;t</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td>1 800 sek&uacute;nd =</td>
  <td><span class="bold">30</span> min&uacute;t =</td>
  <td>polhodinka.</td>
</tr>
<tr>
  <td>7 200 sek&uacute;nd =</td>
  <td><span class="bold">120</span> min&uacute;t =</td>
  <td>2 hodinky</td>
</tr>
<tr>
  <td>21 600 sek&uacute;nd =</td>
  <td><span class="bold">360</span> min&uacute;t =</td>
  <td> 6 hod&iacute;n = &scaron;kola</td>
</tr>
<tr>
  <td>28 800 sek&uacute;nd =</td>
  <td><span class="bold">480</span> min&uacute;t =</td>
  <td>8 hod&iacute;n</td>
</tr>
<tr>
  <td>86 400sek&uacute;nd =</td>
  <td><span class="bold">1440</span> min&uacute;t =</td>
  <td>24hod&iacute;n</td>
</tr>
</table>
</div>
<br>
<?php
if($lvl<20){
echo "Naraz nem��e� naexpi� viac ako 5 lvlov. Tak d�vaj ra�ej krat�� �as ked si zatial men�� lvl.";
}
?>
</body>
</html>
