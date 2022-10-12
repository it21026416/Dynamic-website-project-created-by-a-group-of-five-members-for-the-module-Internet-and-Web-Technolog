<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=One, initial-scale=1.0">
    <link rel = "stylesheet" href= "css/styles.css">
    <script type = "text/javascript" src="javascript/script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <title>One Future Insurance</title>
</head>
<script src="javascript/script.js"></script>
<body>
    <div class = "floatBody">
        <nav>
            <!-- Header -->
            <div class="logo">
                <h4>One Future Insurance</h4>
            </div>
            <ul class="nav-links">
                <li><a class = " active" href = "#">Home</a></li>
                <li class="dropdownPlan"><a href = "#">Plans</a>
                <ul class="dropdown-plan-content">
                    <li><a href="Plans/Health-Insurance.html">Health Insurance Plan</a></li>
                    <li><a href="#">Protection Plan</a></li>
                    <li><a href="#">Retirement Plan </a></li>
                    <li><a href="#">Investment Plan</a></li>
                </ul>
                </li>
                
                <li><a href = "#">Online Services</a></li>
                <li><a href = "AboutUs.html">About Us</a></li>
                <li><a href = "Careers.html">Careers</a></li>
                <li><a href = "#">Contact Us</a></li>
                <li><a href = "#">Events & News</a></li>
                <li><a href = "#">Sign in</a></li>
            </ul>
        </nav>
        
        <?php
            
            //FILE HANDLING & FORM READING
            $target_dir="uploads/";
            $target_file=$target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk=1;
            $docFileType= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            //Allowing only required format
            if($docFileType != "pdf" && $docFileType != "jpg" && $docFileType != "jpeg")
            {
                echo "<h2>Failure in submission!!</h2>". " <br>";
                echo "Sorry, Only PDF, JPG, JPEG files are allowed ";

   
            }
            else{
                //FORM READING 
                if(isset($_POST["btnSubmit"]))
                {
                
                    echo "Name: ".$_POST["fname"]. " ". $_POST["lname"]. " <br>";
                    echo "Email: ".$_POST["Email"]. " <br>";
                    echo "Address: ".$_POST["Address"]. " <br>";
                    echo "Selected position: ".$_POST["positions"]. " <br>";
                }
            
                if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
                echo "File ".htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded";   
                }
            }

          /* //check if the pdf is actually pdf or fake
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false)
            {
                echo "File is an image - " . $check["mime"]. ".";
                $uploadOk=1;
            }
            else{
                echo "Sorry file cannot be uploaded";
                $uploadOk=0;
                return -1;
            }*/
         /*   //check if file already exists
            if(file_exists($target_file))
            {
                echo "Sorry, file already exists. ";
                $uploadOk=0;
            
              
            }
            //check file size


            

            //check if $uploadOk is set to 0 by an error
            if($uploadOk ==0)
            {
                echo "Sorry, your file was not uploaded";
            }//check if everything is ok
           
             
            }
            */
            
        ?>
        
        
        <footer>
            <div class="footer">
                <!-- Footer -->
                This is me at the bottom
            </div>
        </footer>
        
        </div>
    
</body>
</html>