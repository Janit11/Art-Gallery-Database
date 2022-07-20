<!DOCTYPE html>
<html>
<head>
	<title></title>
<head>
<body>
	<h1>This is a list of all artists currently in the database:</h1>

	<?php
    	include_once 'include/dbh.inc.php';

        $conn = OpenCon();
        $sql = "SELECT * FROM Artist;";
        $result = $conn->query($sql);
        $resultCheck = mysqli_num_rows($result);

        echo "<br>";
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) { //"mysqli_fetch_assoc" fetches all the info from $result (php function)
                echo $row['name'];
                echo "<br>"; 

            }
        }

	?>
</body>
</html>