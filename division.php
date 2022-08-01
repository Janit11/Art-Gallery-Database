<?php

    include_once 'include/dbh.inc.php';
    require 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Division</title>
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
    <h1>Division Query</h1>	
    <p>Retrieve all staff member ID's organizing all exhibitions in museum 2.</p>
    <form action="" method="POST">
 
        <input type="submit" name ="enter" value="Retrieve"> 
    </form>

</body>
</html> 
<?php
    $conn = OpenCon() ;
    if(isset($_POST['enter'])){
     

    }

?>
