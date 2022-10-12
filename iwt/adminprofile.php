<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=One, initial-scale=1.0">
    <link rel = "stylesheet" href= "css/styles.css">
    <link rel = "stylesheet" href= "css/adminhomepage.css">
    <script type = "text/javascript" src="javascript/script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>One Future Insurance</title>
</head>

<body>
    <div class = "floatBody">
        <nav class = "nav1">
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
                <li><a href = "#"><img src = "images/admin user signin.png" alt = "user" style="height: 28px; width: 28px;"></a></li>

            </ul>
        </nav>


        <br>
        <center>
        <table class = "nav2">
            <tr>
                <td><a href = "adminCustomer.html">Customer</a></td>
                <td><a href = "plans.html">Policy</a></td>
                <td><a href = "admin_career.html">Job Vacancy</a></td>
                <td><a href = "#">Notification</a></td>
                <td><a class = "active" href = "adminprofile.html">Profile</a></td>
            </tr>
        </table>
        </center>
        <h2 id = "welcomeid">Welcome Shayne Fernando</h2>
        <img class = "Admin" src = "images/admin user profile.jpg" alt = "admin user">

        <div class="right-bottom">
            <img src = "images/Vision.png" alt = "Vision">
        </div>
<?php
		 require 'php/config.php';
		 session_start();
		 $adminID = $_SESSION['adminID'];
				$SQL = "SELECT * FROM admin WHERE admin_id= '$adminID'";
				$values=$conn->query($SQL);
				$admin = $values->fetch_array();
?>


        <div class = "left">
            <br>
            <h3 class = "tableHead">Personal Information</h3>
            <table class = "left-profile">
                <tr>
                    <th>First Name</th>
                    <td><?php echo $admin['f_name']; ?></td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td><?php echo $admin['l_name']; ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo $admin['a_email']; ?></td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td><?php echo $admin['a_mobile']; ?></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><?php echo $admin['a_address']; ?>td>
                </tr>               
            </table>
            <br>

            <h3 class = "tableHead">Company Details</h3>
            <table class = "left-profile">
                <tr>
                    <th>Admin ID</th>
                    <td><?php echo $admin['admin_id']; ?></td>
                </tr>
                <tr>
                    <th>Branch ID</th>
                    <td><?php echo $admin['branch_id']; ?></td>
                </tr>
                <tr>
                    <th>Branch Name</th>
                    <td><?php echo $admin['branch_name']; ?></td>
                </tr>
                <tr>
                    <th>Location</th>
                    <td><?php echo $admin['location']; ?></td>
                </tr>
            </table>
            <br>

            <h3 class = "tableHead">Project Details</h3>
            <table class = "left-profile">
                <tr>
                    <th>Project ID</th>
                    <td><?php echo $admin['project_id']; ?></td>
                </tr>
                <tr>
                    <th>Project Name</th>
                    <td><?php echo $admin['project_name']; ?> </td>
                </tr>
            </table>
        </div>



        
        <div id = "container">
            <div id = "main">

            </div>
        </div>
        <footer id = "footer">
            <div class="social">
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
            </div>
            <ul class = "list">
                <li><a href = "homepage.html">Home</a></li>
                <li><a href = "AboutUs.html">About</a></li>
                <li><a href = "Online_Services.html">Services</a></li>
            </ul>
            <p>© One Future Insurance Sri Lanka 2021</p>
            <p>Rights Reserved 2021</p>
        </footer>
        
        </div>
    
</body>
</html>