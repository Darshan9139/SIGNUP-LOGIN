<?php 
// $db_user = "root";
// $db_pass = "";
// $db_name = "useraccount";

// $db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
// $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "useraccount";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

?>