<head>
<title>_.:|Forse|:._ Expenie</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250" />
<meta name="keywords" content="pepies, forse, browser game, hra cez browser, test, mysql, atd" />
<LINK href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />
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
  <p>exp je robené  exp deleno level krat $lvlzbrane (cim ma vecsie cislo zbran tym je vecsie exp a opacne) normal exp je ked $exp = $lvlzbrane.
  </p>
  <table width="606" height="356" border="5" cellpadding="0" cellspacing="3">
 <?
 if ($lvl>=1 && $lvl<9){
	 $set= 1;
	 }
	 if ($lvl>=9 && $lvl<18){
	 $set= 2;
	 }
	  if ($lvl>=18 && $lvl<27){
	 $set= 3;
	 }
	  if ($lvl>=27 && $lvl<36){
	 $set= 4;
	 }
	  if ($lvl>=36 && $lvl<45){
	 $set= 5;
	 }
	  if ($lvl>=45 && $lvl<54){
	 $set= 6;
	 }
	  if ($lvl>=54 && $lvl<63){
	 $set= 7;
	 }
	  if ($lvl>=63 && $lvl<72){
	 $set= 8;
	 }
	  if ($lvl>=72 && $lvl<81){
	 $set= 9;
	 }
	  if ($lvl>=81 && $lvl<90){
	 $set= 10;
	 }
	  if ($lvl>=90 && $lvl<99){
	 $set= 11;
	 }
 $ano = 1;
 $maly = ($set)-2;
 if ($maly<=0){
	 $maly=1;
	 }
$velky= $set+2;
 for ($zobraz=$maly; $zobraz<$velky;$zobraz++){  ?> <tr>
      <td><a href="img/set/see/<? echo "$garment";?><? echo "$zobraz";?>.jpg" rel="lightbox"><img border="0" src="img/set/_<? echo "$garment";?><? echo "$zobraz"; ?>.jpg"></a><br>
      </td>
      <td>
      <?
	  if ($zobraz <= $set){
		  ?>
          <form action="eq.php?ano=5?buy=<? echo"$zobraz"; ?>" method="post" name="id">
		  <input name="id" value="Kúp to." type="submit">
          </form>
		  <? }
		  
		if($ano==5){
$buy = $_POST['zobraz'];
$dbhost = "mysql.over.cz";
$dbname = "ov_neni";
$dbuser = "ov_neni";
$dbpass = "brecska123";
//Pripajam sa do DB
mysql_connect ( $dbhost, $dbuser, $dbpass)or die("Could not connect: ".mysql_error());
mysql_select_db($dbname) or die(mysql_error());
echo "<br>Ak ti ich nepridalo tak skús potlačiť F5.";
mysql_query("UPDATE users SET set='$buy' WHERE username='$username'") or die(mysql_error());
mysql_close();
?>
<script>
alert("Nákup bol úspešne prevedený.");
</script>
<?
}else{
	
  echo " Degree<b> $zobraz </b>"; }?></td>
    </tr>
 <? } ?>
 </table>
  <p>&nbsp;</p>
</div>
</body>
</html>
