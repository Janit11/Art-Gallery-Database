<?php

    include_once 'include/dbh.inc.php';
    require 'header.php';
    $conn = OpenCon();
    $sql1 = "SHOW COLUMNS FROM Curator";
    $result = $conn->query($sql);
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