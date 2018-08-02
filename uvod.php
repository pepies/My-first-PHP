<head>
<title>_.:|Forse|:._ Uživatelsky web</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250" />
<meta name="keywords" content="pepies, forse, browser game, hra cez browser, test, mysql, atd" />
<link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />
</head>
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
<body>
<p><a href="img/set/see/<? echo "$garment";?><? echo "$set";?>.jpg" rel="lightbox"><img border="0" src="img/set/_<? echo "$garment";?><? echo "$set";?>.jpg" align="left" /></a><br />
  <font size="-1">Nosíš <? if ($garment==1){
	  echo "garment";}else{echo "mail";}
   ?> set degree <? echo "$set"; ?>.</font></p>
<table width="65" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>STR:<? echo "$str";?></td>
  </tr>
  <tr>
    <td>INT:<? echo "$int"; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td></td>
  </tr>
</table>
<p><br />
</p>
<?
// members page
if ($lvlpoint>0){
echo "LVL pointy: $lvlpoint <br>";
}else{echo "Nemáš LVL pointy. <br>";
}
if ($lvlpoint>0){ ?>
<form name="STR" method="post" action="memberspage.php?page=str">
<input name="pocetstre" type="text" value="3" size="5">
STR:<input type="submit" name="str" value="+">
</form>
<br>
<form name="INT" method="post" action="memberspage.php?page=int">
<input name="pocetint" type="text" value="3" size="5">
INT:<input type="submit" name="intt" value="+">
</form><?
echo "Pridaj si INT alebo STR pointy.";
if($lvl<3){
	echo "<br>Posilnia tvoje psychické alebo mentálne schopnosti bojovať.";
	}
}
?>
<br>
Ked skončíš nezabudni sa odlognúť.
</body>