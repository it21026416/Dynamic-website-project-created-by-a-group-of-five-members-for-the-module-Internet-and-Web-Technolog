<?php 
    require 'php/config.php';
	session_start();
				/* update customer's profile */
				
				$phone= $_POST['mobile'];
				$ophone= $_POST['fixed'];
				$cemail=$_POST['email'];
				$customer=$_SESSION['customerID'];
				$update_sql="UPDATE customer SET mobile= '$phone' ,  other_no = '$ophone',email = '$cemail' WHERE customer_id='$customer'";
				$conn->query($update_sql);

				header("Location: profile.php ");
				
?>