<?php
// Initialize the session
//session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: home.php");
    exit;
}

$con=mysqli_connect("localhost", "root", "", "plumber");

    if (isset($_POST['submit_btn'])) {
        
        // grap form values
        $username = $_POST['Name'];
        $password = mysqli_real_escape_string($con,$_POST['Password']);
        

            $query = "SELECT * FROM signupcustomer WHERE Name='$username'  LIMIT 1";
            $results = mysqli_query($con, $query);
            $x=mysqli_num_rows($results);
          
            if (mysqli_num_rows($results) == 1) { // if user found
                session_start();
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $username; 
                header('location: home.php');
                    //$_SESSION['user'] = $logged_in_user;
                    //$_SESSION['success']  = "You are now logged in";
            }else {

                echo "Wrong username/password combination";
            }
        }    
    
        

?>  


