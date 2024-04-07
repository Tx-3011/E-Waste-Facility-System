
<?php
	$conn = new mysqli('localhost','root','','test');
	$firstName = $_POST['firstName'];
	//$lastName = $_POST['lastName'];
	//$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	//$number = $_POST['number'];

	// Database connection
	
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, email, password) values(?, ?, ?)");
		$stmt->bind_param("ssi", $firstName, $email, $password);
		$execval = $stmt->execute();
		echo $execval;
		header("Location: final_draft.html");
		$stmt->close();
		$conn->close();
	}
?>