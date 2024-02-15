<?php
session_start();
include 'dbcon.php';
$username=$_POST['username'];
$password=$_POST['password'];

$sqlLogin="SELECT * FROM users WHERE username='{$username}' and password='{$password}'";
$result=$conn->query($sqlLogin);

if($result->num_rows>0){
	while($rowUserLogin=$result->fetch_assoc()){
		$_SESSION['ActiveUser']=$rowUserLogin['userID'];
		$_SESSION['onSession']=1;
		if($rowUserLogin['Position']==1){
			$_SESSION['activePosition']=1;
			header("Location:../dashboard/adminDashboard.php");
		
	
}else{
	$_SESSION['errorMessage']="INVALID USERNAME AND PASSWORD!";
	header("Location:../Login.php");
}
	}
}

?>