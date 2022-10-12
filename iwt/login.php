<!DOCTYPE html>
<html>
  <head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=One, initial-scale=1.0">
    <link rel= "stylesheet" href="css/styles.css">
    <link rel= "stylesheet" href="css/login.css">
    <script src="js/logIn.js"> </script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>One Future Insurance</title>
  </head>


<body>

<?php
		 require 'php/config.php';
		 session_start();
		 $notice="";
		
		
		if(isset($_POST['loginbtn'])){
			
			$lType = $_POST["type"];
			$email = $_POST["email"];
			$pwd= $_POST["password"];

			if($lType=='customer')
			{
			
			$checkpwd_sql= "SELECT * FROM customer WHERE email = '$email'"; //customer acc validation
			$result=$conn->query($checkpwd_sql);
			//$notice="";
			
				if (mysqli_num_rows($result)!= 0)
				{
					//read data
					$read = $result->fetch_array(); //fetching user's data as an array
					$hashedPW= $read['password'];
					
					if(password_verify($pwd, $hashedPW)){
						$_SESSION['customerID']=$read['customer_id'];//storing customer id
						header("Location: profile.php");
						
					}
					else{
						
						$notice="incorrect password"; 
					}
				}
				else
				{ $notice="Invalid user"; 
				}
			}
			else
			{
				$checkpwd_sql= "SELECT * FROM admin WHERE a_email = '$email'"; //admin's login validation
				$result=$conn->query($checkpwd_sql); 
				//$notice="";
				
					if (mysqli_num_rows($result)!= 0)
					{
						//read data
						$read = $result->fetch_array(); 
						if($read['password']!=$pwd){
							$notice="incorrect password"; 
						}
						else{
							
							$_SESSION['adminID']=$read['admin_id'];
							header("Location: adminprofile.php");
						}
					}
					else
					{ $notice="Invalid user"; 
					}
			}

		}
	

?>


    <div class = "floatBody">
        <nav class = "nav1">
            <!-- Header -->
            <div class="logo">
                <h4>One Future Insurance</h4>
            </div>
            <ul class="nav-links">
                <li><a href = "homepage.html">Home</a></li>
                <li><a href = "plans.html">Plans</a></li>
                <li><a href = "Online_Services.html">Online Services</a></li>
                <li><a href = "AboutUs.html">About Us</a></li>
                <li><a href = "Careers.html">Careers</a></li>
                <li><a href = "#">Contact Us</a></li>
                <li><a href = "#">Events & News</a></li>
                <li><a class = "active" href = "login.php">Sign in</a></li>
            </ul>
            </nav>
			
            <!--login page -->
			
            <div class="loginbox">
              <h1> Sign in </h1>
              <div class="textbox">
               <form class="form" id="details" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<h3> <?php echo $notice; ?> </h3>
			   
               <label id="details" > Login as: </label> 
                <select class="placeh" name="type">
                  <option value="customer"> Customer</option>
                  <option value="admin"> Administrator </option>
                </select><br>
                <input class="input" id="username" type="text" placeholder="Username/email" name="email" value="" required>
              </div>
              <div class="textbox">
                <input type="password" id="password" class="input" placeholder="Password" name="password" value="" required>
              </div>
              <input id="pass" class="btn" type="submit" name="loginbtn" value="Login" onclick="validateForm()">
			  <center>
			  Don't have an account?.. <a href="Register.html" style= "color:#e76f51;">Register</a>
			  <br><br> <br> <br> 
              </form>
            </div>
			<br> <br> <br> 
			<br> <br> <br> 
			<br> <br> <br> 
            

             <!-- Footer -->  

             <div id = "container">
              <div id = "main">
              </div>
             </div>
          <footer id = "footer" style="position: fixed;bottom: 0pt;left:0pt;background-attachment: scroll;">  
              <div class="social">
                  <center>
                  <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                  <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                  <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                  </center>
              </div>
              <ul class = "list">
                  <li><a href = "homepage.html">Home</a></li>
                  <li><a href = "AboutUs.html">About</a></li>
                  <li><a href = "Online_Services.html">Services</a></li>
              </ul>
              <p>© One Future Insurance Sri Lanka 2021</p>
              <p>Rights Reserved 2021</p>
          </footer>
</body>
</html>