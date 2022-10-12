<!DOCTYPE html>
<html>
  <head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=One, initial-scale=1.0">
    <link rel= "stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/profile.css">
    <script src="js/profile.js"> </script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>One Future Insurance</title>
  </head>


<body>

    <div class = "floatBody">
        <nav class = "nav1">
            <!-- Header -->
            <div class="logo">
                <h4>One Future Insurance</h4>
            </div>
            <ul class="nav-links">
                <li><a class = "active" href = "#">Home</a></li>
                <li><a href = "plans.html">Plans</a></li>
                <li><a href = "Online_Services.html">Online Services</a></li>
                <li><a href = "AboutUs.html">About Us</a></li>
                <li><a href = "Careers.html">Careers</a></li>
                <li><a href = "#">Contact Us</a></li>
                <li><a href = "#">Events & News</a></li>
                <li><a href = "php/logout.php">Sign out</a></li>
            </ul>
            </nav>
            		<!-- profile -->
                <br>
                <h2> WELCOME </h2>
                <br> <br> 
                <img src="images/profile.jpg" alt="we care" style="float: right; width:435px; height:410px; margin-left:10px; margin-right:30px;">

        <div class= "box" >
        <div class= "container">
          <form method = "post"  class="form-inline" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

          <br><br>
<?php
		 require 'php/config.php';
		 session_start();
		 $customerID = $_SESSION['customerID'];
				$SQL = "SELECT * FROM customer WHERE customer_id= '$customerID'";
				$values=$conn->query($SQL);
				$user = $values->fetch_array();
?>
          <label for="CFname">First Name:</label>
          <input type="text"class="placeh" id="CFname"  name="CFname" value= "<?php echo $user['first_name']; ?>" disabled>
          <label for="Lname">Last Name:</label>
          <input type="text"class="placeh"  id="Lname" name="Lname" value= "<?php echo $user['last_name']; ?>" disabled>
          <br><br>

          <label for="address">Address  :</label>
          <input type="text" class="placeh" id="address"  cols="10"  name="address" value= "<?php echo $user['address_no']; ?>"  disabled>
          <label for="address1">Street/Avenue:</label>
          <input type="text" class="placeh"  id="address1"  name="address1" value= "<?php echo $user['adress_street']; ?>" disabled>
          <br> <br>

          <label for="address2">City:</label>
          <input type="text" class="placeh" id="address2"  cols="10"  name="address2" value= "<?php echo $user['address_city']; ?>" disabled>
          <br><br>

          <label for="taxID">Taxpayer number:</label>
          <input type="text" class="placeh"  id="taxID" cols="10"  name="taxID" value= "<?php echo $user['taxpayer_no']; ?>" disabled>
          <br><br> 

          <label for="bday">Birth-Date:</label>
          <input type="text" class="placeh"  id="bday"  name="bday" value= "<?php echo $user['birth_day']; ?>" disabled> 
          <br><br>
          
          <label > Policy type: </label> 
          <input type="policy" class="placeh"  id="policy"  name="policy" value= "<?php echo $user['policy_type']; ?>" disabled>
          <br><br> <br>
          </form>
           </div class="container">
           </div class= "box">
           <br> <br>
		   <!-- form 2 -->
           <div class= "row" >
              <div class="column left">
             
				<form method="POST" action="update.php" > 
				<label > Mobile:</label>
				<input type="text" class="placeh" name="mobile" value= "<?php echo $user['mobile']; ?>" > 
				<label for="fixed" > Other Number:</label>
				<input type="text" class="placeh" name="fixed" value= "<?php echo $user['other_no']; ?>" > <br><br>
				<label for="email">Email:</label>
				<input type="text" class="placeh" name="email" value= "<?php echo $user['email']; ?>"> <br>
				<input type="submit" id="save"  name="updateBTN" value="submit" >
				<br>
				</form>

              </div>
				
              <div class="column right">
                  <button type="submit" name="pymnt"> Payment</button>
				   <br><br>
					<form method = "post"  class="form-inline" action="delete.php">
				   <button type="submit" name="delacc"> Delete the profile </button> </form> <br> <br>

                  
              </div>
           </div>
           
           <br> <br> <br> 
           <br> <br> <br>  <br>
           		   
<!-- footer -->
           <div id = "container">
                <div id = "main">

                </div>
           </div>
        <footer id = "footer" >  
            <div class="social" >
                <center>
                <a  href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                <a  href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                <a  href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                <a  href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
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