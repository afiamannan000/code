<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    $conn = new PDO("mysql:host=localhost;dbname=dbFk1419859", "k1419859", "db7860");
	
} catch (PDOException $e) 
{
	echo "Connection failed: " . $e->getMessage();
}


function InsertNewUser($f, $l, $e, $p)
{
  global $conn;
	$insert = $conn->prepare("INSERT INTO SignUp(fname,lname,email,psw)
        VALUES(?,?,?,?) ");
	$insert->execute([$f, $l, $e, $p]);

  $result = $insert->fetchAll(PDO::FETCH_CLASS, 'SignUp');
  return $result;
}

?>
