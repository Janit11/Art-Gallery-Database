<?php

    include_once 'include/dbh.inc.php';
    require 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Select</title>
    <style>
        input{
            padding: 12px;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            box-shadow: 1px 1px 2px 1px grey;
        }
        input:hover{
            background-color: #ddd;
            color: black;
        }
    </style>
<head>
<body>
    <h1>Nested Aggergation Query</h1>	
    <p>Retrieve the exhibition data where the museum's capacity is more than 700  </p>
    <form action="" method="POST">
        <input type="text" size = "25" name="input" placeholder="exID, mID, exName, exTheme">
 
        <input type="submit" name ="enter" value="Enter"> 
    </form>

</body>
</html> 
<?php
    $conn = OpenCon() ;
    if(isset($_POST['enter'])){
        $input = $_POST["input"];
        echo " <br>"; 

        $sql = "SELECT '$input', exID, mID, exName, exTheme FROM exhibition_held WHERE mID IN (SELECT mID FROM Museum GROUP BY mID HAVING AVG(Capacity) > 700)";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_array($result)) { //"mysqli_fetch_assoc" fetches all the info from $result (php function)
                if($input == 'exID') {
                    echo $row['exID'];
                    echo " <br>";
                } elseif($input == 'mID') {
                    echo $row['mID'];
                    echo " <br>";
                } elseif($input == 'exName') {
                    echo $row['exName'];
                    echo " <br>"; 
                } elseif($input == 'exTheme') {
                    echo $row['exTheme'];
                    echo " <br>";
                } else {
                    echo ' ';
                }  
            }
        }

    }

?>
