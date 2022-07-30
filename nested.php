<?php

    include_once 'include/dbh.inc.php';
    require 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Nested</title>
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
    <p>Get maximun average of staff members in a department</p>
    <form action="" method="POST">
 
        <input type="submit" name ="enter" value="Enter"> 
    </form>

</body>
</html> 
<?php
    $conn = OpenCon() ;
    if(isset($_POST['enter'])){

        $sql = "SELECT MAX(average) AS average2 FROM( SELECT AVG(staff_members) AS average FROM Curator GROUP BY departmentID)";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_array($result)) { //"mysqli_fetch_assoc" fetches all the info from $result (php function)
                echo 'average2';
                    
                echo " <br>"; 
            }
        }

    }

?>
