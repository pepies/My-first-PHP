<?
session_start();

if ( empty( $username ) ) {
    print "Najskor sa logni!";
	header("location:index.php");
	include "login.php";
} else {

$dbhost = "mysql.over.cz";
$dbname = "ov_neni";
$dbuser = "ov_neni";
$dbpass = "brecska123";
//Pripájam sa do db
mysql_connect ( $dbhost, $dbuser, $dbpass)or die("Could not connect: ".mysql_error());
mysql_select_db($dbname) or die(mysql_error());
session_start();
$query = "SELECT * FROM users WHERE username='$username' and password='$password'";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result, MYSQL_ASSOC) or die(mysql_error());
$time = $row['time'];
$gold = $row['gold'];
$hp = $row['hp'];
$mp = $row['mp'];
$str = $row['str'];
$int = $row['intt'];
$sp = $row['sp'];
$lvl = $row['lvl'];
$lvlpoint = $row['lvlpoint'];
$set = $row['set'];
$gold = $row['gold'];
$exp = $row['exp'];
$garment = $row['garment'];
$name = $row['name'];
$doba = $row['doba'];
mysql_free_result($result);
if (!$result){
	echo "nepodarilo sa vybrat tvoje data s DB.";}

 }
?>