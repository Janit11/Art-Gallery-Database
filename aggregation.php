<?php

    include_once 'include/dbh.inc.php';
    require 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Aggregation</title>
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
    <h1>Aggregation Query</h1>	
    <p>Retrieve the current average age and rating of all artists </p>
    <?php
    $conn = OpenCon() ;
    $sql = "SELECT AVG(age), ROUND(AVG(rating), 2) AS rounded FROM artist";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo "The current average age of all artists is: ". $row['AVG(age)'];
        echo "<br />";
        echo "The current average rating of all artists is: ". $row['rounded'];
        
    }
    
    ?>

</body>
</html> 

