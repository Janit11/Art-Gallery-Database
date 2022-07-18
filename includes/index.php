<?php
	include_once 'dbh.inc.php';

	$conn = OpenCon();	
	CloseCon($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
		function artistBut() {
			window.open("artists.php");
		}
	</script>
<head>
<body>
	<h1>Welcome to the Art Gallery Database!</h1>
	
	<button onclick="artistBut()"> Artists </button>

</body>
</html>