<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <title>Project1</title>
  
</head>
<div class="text-center p-3" style="background-color:black;">

<body>
<?php
session_start();

//login code below
$con=mysqli_connect("localhost", "root", "", "plumber");

    if (isset($_POST['login_btn'])) {
        
        // grap form values
        $username = $_POST['Name'];
        $password = mysqli_real_escape_string($con,$_POST['Password']);
        

            $query = "SELECT * FROM signedup WHERE Name='$username'  LIMIT 1";
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

<?php
//including navbar
include_once('navbar.php');
?>
  
  
<div class="text-center p-3" style="background-color:black;">


<section class= "my-5">
<div class="py-5">
<h2 class="text-center text-white"> Login for Service Provider </h2>
</div>

<div class="w-50 m-auto">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

<div class="form-group">
<lable class="text-white">Name</label>
<input type="text" name="Name" autocomplete="off" class="form-control">
</div>

<div class="form-group">
<lable class="text-white">Password</label>
<input type="text" name="Password" autocomplete="off" class="form-control">
</div>

<br>
<button type="submit" name="login_btn" class="btn btn-light">Login</button>

</form>
</div>
</section>



<footer class="bg-light text-center text-white">
      <!-- Grid container -->
      <div class="text-center p-3" style="background-color:black;">

      <div class="container p-4 pb-0">

        <div class="social-media-links">
          <a href="https://www.facebook.com/CareemJOR/?brand_redir=456801891004898" target="_blank">
            <img src="facebook-new.png" alt="facebook">
          </a>
          <a href="https://twitter.com/CareemUAE" target="_blank">
            <img src="twitter-new.png" alt="twitter">
          </a>
          <a href="https://www.linkedin.com/company/careem" target="_blank">
            <img src="insta-new.png" alt="linkedin">
          </a>
        </div>
      </div>
            </div>

      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color:  black;">
        © 2021 Copyright:
        <a class="text-white" href="./index.html">HandymanMarket.com</a>
      </div>
      <!-- Copyright -->
    </footer>

  </div>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>