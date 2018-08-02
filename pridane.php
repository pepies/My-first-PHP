<head>
<title>_.:|Forse|:._ Výplata</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250" />
<meta name="keywords" content="pepies, forse, browser game, hra cez browser, test, mysql, atd" />
<LINK href="style.css" rel="stylesheet" type="text/css">
<!--<meta http-equiv="refresh" content="2"> bolo to tam ale uz nvm naco to sluzilo tak som to odkopol.-->
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
   <table width="50" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><a class="menu" href="index.php?page=logout">Log out</a></td>
    </tr>
    <tr>
      <td><a class="menu" href="index.php?page=login">Login</a></td>
    </tr>
    <tr>
      <td><a class="menu" href="memberspage.php" title="home">Charakter</a></td>
    </tr>
    <tr>
      <td><a class="menu" href="expa.php">Expenie</a></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
  </div>
</div>
<div id="lave"></div>
<div id="telo">

  <?php
$velicina = $doba / $lvl;
$novexp   = $velicina/4;
$noveexp  = $exp + $novexp;

$newwgold = $doba * $lvl;
$newgold  = $newwgold / 100;
$novegold = $gold + newgold;

echo "$novexp% Experience a $newgold goldov bolo pridaných.";	


//novy script ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if($exp>=100){
$dbhost = "mysql.over.cz";
$dbname = "ov_neni";
$dbuser = "ov_neni";
$dbpass = "brecska123";
//Pripajam sa do DB
mysql_connect ( $dbhost, $dbuser, $dbpass)or die("Could not connect: ".mysql_error());
mysql_select_db($dbname) or die(mysql_error());
session_start();
$pointiky = $lvlpoint+3;
$up = $lvl+1;
$noveexp = $exp-100;
mysql_query("UPDATE users SET lvl='$up', exp='$noveexp',lvlpoint='$pointiky' WHERE username='$username'");
mysql_close();
}


?>
</div>
</body>
</html>
