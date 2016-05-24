<?php


//database connection
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "abate_personalSite";

//create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
	if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}



		
	$visitorName = $_POST['visitor_name'];
	$visitorEmail = $_POST['visitor_email'];
	$visitorMsg = $_POST['visitor_message'];

	echo $visitorName;
	echo $visitorEmail;
	echo $visitorMsg;

	$sql = "INSERT INTO contacts(visitorName, visitorEmail, visitorMessage) VALUES('".$visitorName."', '".$visitorEmail."','".$visitorMsg."')";

	echo "<hr/>";
	echo $sql;

if($conn->query($sql) === TRUE){
	echo "New record created successfully";
}else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


	//$to      = 'abatej717@hotmail.com';
	//$subject = 'Mail from Website';
	//$message = $visitorMsg;
	//$headers = 'From: $visitorEmail' . "\r\n" .
	//'Reply-To: webmaster@example.com' . "\r\n" .
	//'X-Mailer: PHP/' . phpversion();
	//mail($to, $subject, $message, $headers);




?>