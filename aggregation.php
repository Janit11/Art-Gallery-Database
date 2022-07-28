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
    <p>Retrieve the average age or rating of all artists </p>
    <form action="" method="POST">
        <input type="text" name="option" placeholder="Choose age or rating">
 
        <input type="submit" name ="enter" value="Enter"> 
    </form>
</body>
</html> 
<?php
    $conn = OpenCon() ;
    if(isset($_POST['enter'])){
        $option = $_POST["option"];

        $sql = "SELECT ROUND(AVG($option)) AS average FROM artist";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo "The current average age of all artists is: ". $row['average'];
            echo "<br />";

    }
}

?>


<!--give an option to either select age or rating through input, save it and echo it 
    and then compute the average through sql and return all the artists according to the selected option, make if else for age or rating
if($option == "age"){
            
            $sql = "SELECT AVG($option) AS average FROM Artist;";
            $result == mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_array($result)) { //"mysqli_fetch_assoc" fetches all the info from $result (php function)
                    echo "The current average age of all artists is: ". $row['average'];
                        
                    echo " <br>"; 
                }
            }

        }
        if($option == "rating"){
            $sql = "SELECT AVG(rating) FROM Artist;";
            $result == mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_array($result)) { //"mysqli_fetch_assoc" fetches all the info from $result (php function)
                    echo $row['AVG(rating)'];
                    echo "The current average age of all artists is: ". $row['AVG(rating)'];
                    echo " <br>"; 
                }
            }

        }-->