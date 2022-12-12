<?php
$host = "localhost";
$username = "root";
$password = "";

try
{
    $conn = new PDO("mysql:host=$host;dbname=The_Form", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"Connected Succefully";
}
catch(PDOException $e)
{
    echo"Connection Failed: " $e->getMessages();
}