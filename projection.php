<?php
    include_once 'include/dbh.inc.php';
    require 'header.php';
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Projection</title>
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
    <h1>Projection Query</h1>	
    <p>Choose a column to project </p>
    <p>  </p>
    <p>cID</p>
    <p>fname </p>
    <p>lname </p>
    <p>education </p>


    <form method = "POST">
        <!--
    <select name = "colName">
        <option> -- Select a column -- </option>
    <select>
        <input type = "submit" name = "Submit" value = "Choose" />
    -->
        <form action="" method="POST">
        <input type="text" name="column" placeholder="Column">
 
        <input type="submit" name ="enter" value="Choose"> 
    </form>
    <?php
        if(isset($_POST["enter"])) {

        
            $colName = $_POST["column"];
            echo " <br>"; 
            echo $colName;

            $sql2 = "SELECT '$colName' FROM Curator'";
            $result2 = $conn->query($sql2);
            $resultCheck2 = mysqli_num_rows($result2);
            
            if ($resultCheck2 > 0) {
                while ($row = mysqli_fetch_array($result2)) { 
                    echo $row[$colName];
                        
                    echo " <br>"; 
                }
            }
        }
    ?>
    <form>
    
</body>
</html> 





