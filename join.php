<?php
    include_once 'include/dbh.inc.php';
    require 'header.php';
    $conn = OpenCon();
    $sql1 = "SHOW COLUMNS FROM Artwork_Create_IsIn";
    $result1 = $conn->query($sql1);
    $sql2 = "SHOW COLUMNS FROM BelongsTo ";
    $result2 = $conn->query($sql2);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Join</title>
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
    <h1>Join Query</h1>	
    <p>Join the columns from both tables to get the desired result. </p>
    <form id = "join-cols">
    <select name = "colNames" multiple>
        <optgroup label="first-choice">
            <option> -- Select a column -- </option>
            <?php 
                while ($row = mysqli_fetch_array($result1)) {
                    ?>
                    <option value="<?php echo $row["Field"]; ?> " > <?php echo $row["Field"]; ?> </option>

            <?php
            }
        ?>
        <optgroup label="second-choice">
        <option> -- Select a column -- </option>
            <?php 
                while ($row = mysqli_fetch_array($result2)) {
                    ?>
                    <option value="<?php echo $row["Field"]; ?> " > <?php echo $row["Field"]; ?> </option>
                   
            <?php
            }
        ?>
    <select>
        <input type = "submit" name = "Submit" value = "Choose" />
        <!--<script>
            var form = document.getElementById('join-cols');
            form.addEventListener('submit', function(e){
                e.preventDefault();
                var checkCols = document.getElementsByName('colNames');
                
            })
        </script>-->
    <?php
        if(isset($_POST["Submit"])) {

        
            $colName = $_POST["colNames"];
            echo " <br>"; 
            echo $colName;

            $sql3 = "SELECT '$colName' FROM Artwork_Create_IsIn, BelongsTo WHERE Artwork_Create_IsIn.artID = BelongsTo.artID
            ORDER BY artID";
            $result3 = $conn->query($sql3);
            $resultCheck = mysqli_num_rows($result3);
            
            if ($resultCheck2 > 0) {
                while ($row = mysqli_fetch_array($result3)) { 
                    echo $row;
                        
                    echo " <br>"; 
                }
            }
        }
    ?>
    <form>
    
</body>
</html> 