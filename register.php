<html>
<title>Registr&aacute;cia</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250" />
<meta name="keywords" content="pepies, test, mysql,atd" />
<meta http-equiv="refresh" content="2">
<head>
</head>
<body>

<?php
$dbhost = "mysql.over.cz";
$dbname = "ov_neni";
$dbuser = "ov_neni";
$dbpass = "brecska123";

//Connect to database

mysql_connect ( $dbhost, $dbuser, $dbpass)or die("Could not connect: ".mysql_error());
mysql_select_db($dbname) or die(mysql_error());

    
$name = $_POST['name'];
$email = $_POST['email'];    
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$garment = $_POST['garment'];

if (empty($username)){
	echo "<a href='#' onClick='history.go(-1)'>Vypl� username.</a>";
}else{
	if (empty($email)){
	echo "<a href='#' onClick='history.go(-1)'>Vypl� email</a>";
}else{
	if (empty($name)){
	echo "<a href='#' onClick='history.go(-1)'>Vypl� name.</a>";
}else{
if ($password != $password2){
	echo "Hesl� sa nezhoduj�.<br><a href='#' onClick='history.go(-1)'> Sk�s to opravi�.</a>";
	   exit();
	   }else{
$checkuser = mysql_query("SELECT username FROM users WHERE username='$username'"); 
$username_exist = mysql_num_rows($checkuser);
if($username_exist > 0){
    echo "Tak� Username u� existuje.<br><a href='#' onClick='history.go(-1)'> Sk�s to zmenit.</a>";
    exit();
} 
$query = "SELECT userid FROM users";
$result = mysql_query($query);
if (!$result){
	echo "nepodarilo sa vybrat user ID<br>";}
$i=0;
while ($i < $num) {
$userid=mysql_result($result,$i,"userid");
}
$num_rows = mysql_num_rows($result);
$userid = $num_rows++;
$gold = 3000;
$hp = 100;
$hpp = 100;
$str = 10;
$mp = 100;
$mpp = 100;
$intt = 10;
$lvl = 1;
$lvlpoint = 6;
$set = 1;
$sp = 0;
$exp = 0;
$skills = 8;
$doba = 0;
$time = 0;
$CD = 0;
$query = "INSERT INTO users VALUES('$userid','$name','$email','$username','$password','$exp','$sp','$str','$int','$hp','$hpp','$mp','$mpp','$skills','$lvl','$lvlpoint','$gold','$set','$garment','$doba','$time','$CD')";
mysql_query($query) or die(mysql_error());
mysql_close();

echo "<b>Bol si �spe�ne regnut�!</b><br>";
    
// mail user their information

$yoursite = "www.force.com";
$webmaster = "Pepies";
$youremail = "pepies2@azet.sk";
    
$subject = "Bol si �spe�ne regnut� na $yoursite...";
$message = "Tak�e $name, regn�� sa �a podarilo tak�e be� dr�i� :D tvoje data:  
    ID: $username
    PW: $password
    
    A e�te, �e dix =P
    Pepies.";
    
if (mail($email, $subject, $message, "From: $yoursite <$youremail>\nX-Mailer:PHP/" . phpversion())){
    
echo "Info�ky som ti poslal na ten mail �o si si tam hodil.<br>M��e� sa <a href='index.php?page=login.html'>tu logn��</a>.";
}else{
	echo "Nepodarilo sa posla� ten mail, ale nevad� ser na to.";
}}}}}
?>

</body>
</html>