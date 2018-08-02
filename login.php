<form name="login" method="post" action="login.php?login=y">
<table border="0" width="225" align="center">
    <tr>
        <td width="219" bgcolor="#999999">
            <p align="center"><font color="white"><span style="font-size:12pt;"><b>Login</b></span></font></p>
        </td>
    </tr>
    <tr>
        <td width="219">
            <table border="0" width="220" align="center">
                <tr>
                    <td width="71"><span style="font-size:10pt;">Username:</span></td>
                    <td width="139"><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td width="71"><span style="font-size:10pt;">Password:</span></td>
                    <td width="139"><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td width="71">&nbsp;</td>
                        <td width="139">
                            <p align="right"><input type="submit" name="submit" value="Submit"></p>
                        </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td width="219" bgcolor="#999999"><font color="white">Nezaregistrovaný? </font><a href="register.html" target="_self"><font color="white">Regni sa </font></a><font color="white"> </font><b><i><font color="white">Teraz!</font></i></b></td>
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
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM users WHERE username='$username' and password='$password'";
$result = mysql_query($query);
if (!$result)
{
echo "Zle meno alebo heslo.";
}
if (mysql_num_rows($result) != 1) {
echo "Bad login.";
	header("location:login.php");
} else {
    $_SESSION['username'] = "$username";
	$_SESSION['password'] = "$password";
	header("location:memberspage.php");
}
mysql_close();
 }
?>