<?php
 require 'config.php';
 
	$fname = $_POST["CFname"];
	$lname = $_POST["Lname"];
	$houseno= $_POST["address"];
	$street= $_POST["address1"];
	$city= $_POST["address2"];
	$taxpayer=$_POST["taxID"];
	$birthday = $_POST["bday"];
	$mobileNo = $_POST["mobile"];
	$otherNo = $_POST["fixed"];
	$emailadd = $_POST["email"];
	$policy = $_POST["Policies"];
	$pwd = password_hash($_POST["password"], PASSWORD_BCRYPT);

	
	
	


	$sql ="INSERT into customer(first_name,last_name,address_no,adress_street,address_city,taxpayer_no,birth_day,mobile,other_no,email,policy_type,password) VALUES ('$fname','$lname','$houseno','$street','$city','$taxpayer','$birthday','$mobileNo','$otherNo','$emailadd','$policy','$pwd')";
	
	if ($conn -> query($sql)){
		//redirect to home page
		echo "<script>alert('Successful registration')</script>";
		header("Location:../login.php");

	}
	else{
		echo "error";
		echo "<script>alert('Invalid registration')</script>";
		header("Location:../register.html");
	}
	mysqli_close($conn);

?>