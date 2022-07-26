<?php
    include_once 'include/dbh.inc.php';
    require 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<head>
<body>
    <h1>Artists:</h1>
    <li><a href="delete.php">Delete Artist</a></li>
    <li><a href="update.php">Update Artist</a></li>

	<?php
        $conn = OpenCon();
        $sql = "SELECT * FROM Artist;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        echo "<br>";
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) { //"mysqli_fetch_assoc" fetches all the info from $result (php function)
                echo "Artist ID: {$row['artistID']} <br>
                    Name: {$row['name']} <br>
                    Age: {$row['age']} <br>
                    Rating: {$row['rating']}";
                echo "<br> <br>"; 
            }
        }
	?>
</body>
</html>