<?php
$servername="localhost";
$username="root";
$password="";
$dbname="db_cms";

//create connection
$conn= new mysqli($servername,$username,$password,$dbname);


//Testing connection
if($conn->connect_error){
	die("Connection Failed :".$conn->connect_error);
	
}else{
	// echo "Database testing okay!";
	
}





?>