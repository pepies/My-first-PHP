<html>
<head>
<meta http-equiv="refresh" content="2">
</head>

<body>
<?php
$cuntdowntime++;
$low1=0;
if ($cuntdowntime>=$low1){
	//date
if (ereg ("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2}) ([0-9]{2}):([0-9]{2}):([0-9]{2})", $time, $regs)) {
	$vtedy = $regs[1].$regs[2].$regs[3].$regs[4] .$regs[5] .$regs[6];	//rozlozenie na time bez diakritiky
	echo "Vtedy v DB: $time <br>";
} else {
    echo "Invalid date format: $time";
}
echo "$vtedy - vtedy + $doba sekund. <br>";
$teraz = date("YmdHis", mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"))); 
$ked = $vtedy + $doba;
$cuntdowntime = $ked - $teraz;
echo "$teraz -teraz. <br>";
}
$low = -1;
if ($cuntdowntime<=$low){
header("location:time.php");
include "time.php";}
?>
<table style="border:#600, solid;" width="286" border="5" cellspacing="3" cellpadding="0">
  <tr>
    <td height="20" colspan="2"><h5 align="center">Do konca zost�va:</h5></td>
  </tr>
  <tr>
    <td width="135"><? echo "$cuntdowntime"; ?></td>
    <td width="128">sek�nd.</td>
  </tr>
  <tr>
    <td><?
	$minuticiek = $cuntdowntime/60;
	echo "$minuticiek";
	?></td>
    <td>min�t.</td>
  </tr>
  <tr>
    <td><?
	$hodin = $minuticiek/60;
	echo "$hodin";
	?></td>
    <td>hod�n.</td>
  </tr>
</table><br>

<p>
<a href="wait.php?stranka=dva">Refresh ka�d� 2 sekundy</a> |
<a href="wait.php?stranka=pet">Refresh ka�d�ch 5 sek�nd</a> |
<a href="wait.php?stranka=desat">Refresh ka�d�ch 10 sek�nd</a> 

</p>
<br><br>
<p />
<img src="img/no.gif" width="33" height="34"><a href="vypnut.php" target="_top">Zru�it expenie.</a>
</body >
</html>