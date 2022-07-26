<?php
    include_once 'include/dbh.inc.php';
    require 'header.php';
    $conn = OpenCon();
    $sql = "SHOW COLUMNS FROM Curator";
    $result = $conn->query($sql);
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
    <p>Project a column from the Curator table </p>
    <form method = "POST">
    <select name = "rowName">
        <option> -- Select a column -- </option>
        <?php 
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <option value="<?php echo $row["Field"]; ?> " > <?php echo $row["Field"]; ?> </option>

        <?php
        }
        ?>
    <select>
        <input type = "submit" name = "Submit" value = "Choose" />
    <?php
        if(isset($_POST["Submit"])) {

            $sql2 = "SELECT * FROM Curator";
            $result2 = $conn->query($sql2);
            $resultCheck2 = mysqli_num_rows($result2);
            $rowName = $_POST["rowName"];
            echo " <br>"; 
            echo $rowName;
            
            if ($resultCheck2 > 0) {
                while ($row = mysqli_fetch_array($result2)) { 
                    if(($rowName == 'cID')) {
                        echo $row['cID'];
                    } else {
                        echo "none";
                    }     
                        
                    echo " <br>"; 
                }
            }
        }
    ?>
    <form>
    
</body>
</html> 





