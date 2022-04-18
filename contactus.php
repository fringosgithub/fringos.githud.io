<?php

 $host = "localhost";
 $username = "root";
 $password = "";
 $dbname = "ayush1";

 $conn = mysqli_connect($host, $username, $password, $dbname);

 if(isset($_POST['submit'])){

  $firstname= $_POST['firstname'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $query = mysqli_query($conn, "INSERT INTO contact(firstname, phone, email, message) 
  VALUES('$firstname', '$phone', '$email', '$message')");

 }

	 if (mail($firstname, $phone, $email, $message)) {
	    echo "Email successfully sent from $email...";
	} else {
	    echo "Email unsuccessfully sent from $email...";
	}

?>