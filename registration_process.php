<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbase";

try {
	
	
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  echo "connected ";
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO patient ('name', 'surname', 'identity','password','address','dod','disability','textarea')
  VALUES (name, surname, identity,password,address,dod,disability,textarea)";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
} 




$conn = null;
?>