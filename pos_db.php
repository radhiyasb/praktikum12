<?php
$servername = "localhost";
$username = "root";
$password = "";


//Create connection
$conn = mysqli_connect($servername, $username, $password);

//create database
$sql = "CREATE DATABASE  pos_db";
if (mysqli_query($conn, $sql)) {
	echo "Database pos_db created successfully";
} else {
	echo "Error creating database : ".mysqli_error($conn);
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pos_db";
//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//create table
$sql = "CREATE TABLE product(
product_id INT PRIMARY KEY AUTO_INCREMENT,

product_name VARCHAR(100),
product_price INT
)";
if (mysqli_query($conn, $sql)) {
	echo "Table product created succesfully";
	}
	else {
	echo "Error creating table: " . mysqli_error($conn);
	}

//insert table
$sql = "INSERT INTO product(product_name,product_price) VALUES
('Coca Cola','5000'),
('Teh Botol','3700'),
('You C 1000','6300'),
('Ponds Men','18000'),
('Rexona Men','13000')";
if (mysqli_query($conn, $sql)) {
	echo "New record created succesfully";
}
else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>