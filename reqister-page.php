<?php
$servername="localhost";
$username="root";
$password="password";
$database_name="database-uph";


$conn-mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());
}

if(isset$_POST['save']))
{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$birthdate = $_POST['birthdate'];
	$phone = $_POST['phone'];

	$sql_query = "INSERT INTO register_details (firstname,lastname,email,birthdate,phone)
	VALUES ('$firstname','$lastname','$email','$birthdate','$phone')";

	if (mysqli_query($conn, $sql_query))
	{
		echo "Registration submitted";
	}
	else
	{
		echo "Fail to submit" $sql . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}

