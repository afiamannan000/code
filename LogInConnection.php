<?php

session_start();

try{
	$conn = new PDO("mysql:host=localhost;dbname=dbFk1419859", "k1419859", "db7860");
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	if(isset($_POST['login']))
	{
		$email = $_POST['email'];
        $psw = $_POST['psw'];
		
		$select = $conn->prepare("SELECT * FROM SignUp WHERE email='$email' and psw='$psw'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
		$data=$select->fetch();
		
		if($data['email']!=$email and $data['psw']!=$psw)
		{
			echo "Incorrect Email Address and Password entered";
		}		
		elseif($data['email']==$email and $data['psw']==$psw)
		{
			$_SESSION['email']=$data['email'];
			$_SESSION['psw']=$data['psw'];
			$_SESSION['fname']=$data['fname'];
			$_SESSION['lname']=$data['lname'];
			header("location:Profile.php");
		}		
	}
}
catch (PDOException $e) 
	{
		echo "Connection failed: " . $e->getMessage();
	}
?>