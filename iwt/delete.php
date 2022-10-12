<?php
		require 'php/config.php';
		session_start();
		
		$customerID=$_SESSION['customerID'];
		if(isset($_POST['delacc'])){
			
			
			$delacc_sql = "DELETE FROM customer WHERE customer_id= '$customerID'";
			$result=$conn->query($delacc_sql); 
			
			if (mysqli_query($conn, $delacc_sql ))
			{
				header("Location: homepage.html");
					
			}
			else{
						
				echo "try again";
			}
		}
	
?>