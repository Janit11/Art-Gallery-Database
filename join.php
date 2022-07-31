<?php
    include_once 'include/dbh.inc.php';
    require 'header.php';
    $sql_t1 = "SHOW COLUMNS FROM Artwork_Create_IsIn";
    $sql_t2 = "SHOW COLUMNS FROM belongsTo";
    $conn = OpenCon();

    $result_t1 = mysqli_query($conn, $sql_t1);
    $result_t2 = mysqli_query($conn, $sql_t2);
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
    <form action="" method="POST">
        <p>Join the columns from both tables to get the desired result. </p>
        <select name="t1" >
            <option value="No option selected"> [Choose Option Below] </option>
            <?php while ($rows = mysqli_fetch_array($result_t1)) {
                ?>
                <option value="<?php echo $rows["Field"]; ?>"> <?php echo $rows["Field"]; ?> </option>

            <?php    
            }
            ?>
        </select>

        <select name ="t2">
            <option value="No option selected"> [Choose Option Below] </option>
            <?php while ($rows = mysqli_fetch_array($result_t2)) {
                ?>
                <option value="<?php echo $rows["Field"]; ?>"> <?php echo $rows["Field"]; ?> </option>
            <?php    
            }
            ?>
        </select>
        <input type="submit" name="join-press" value="Join">
    </form>
    
</body>
</html> 

<?php
    $selectT1 = $_POST['t1'];
    $selectT2 = $_POST['t2'];


    $query = "SELECT '.$selectT1', '.$selectT2' FROM Artwork_Create_IsIn art, BelongsTo bel WHERE art.artID = bel.artID";
    $result = mysqli_query($conn, $query);
    $resultCheck = mysqli_num_rows($result);

    if (isset($_POST['join-press'])) {
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) { //"mysqli_fetch_assoc" fetches all the info from $result (php function)
                echo "$selectT1: {$row[$selectT1]} <br>
                    $selectT2: {$row[$selectT2]}"; //***PROBLEM HERE
            }
        }
    }

?>