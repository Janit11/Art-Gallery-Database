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
    <h1>Exhibitions:</h1>
	<?php
        $conn = OpenCon();
        $sql = "SELECT * FROM Exhibition_Held, Museum WHERE Exhibition_Held.mID = Museum.mID;";
        $result = $conn->query($sql);
        $resultCheck = mysqli_num_rows($result);

        echo "<br>";
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) { //"mysqli_fetch_assoc" fetches all the info from $result (php function)
                echo "ID: {$row['exID']} <br>
                    Name: {$row['exName']} <br>
                    Theme: {$row['exTheme']} <br>
                    Date: {$row['dateOf']} <br>
                    Location: {$row['name']} in {$row['location']} <br>";
                echo "<br> <br>"; 
            }
        }

	?>
</body>
</html>