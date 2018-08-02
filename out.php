<?PHP

session_start();
if (session_destroy()){
		header("location:index.php");
}else{
	echo "nepodarilo sa odlognúť, skús to ručne.";
	session_destroy();
	}

?>
<script>window.close()</script>