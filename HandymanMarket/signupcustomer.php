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

//including navbar
include_once('navbar.php');

include 'signupcustomerdbconnection.php';
if(isset($_POST['submit']))
{
  $Name=mysqli_real_escape_string($con, $_POST['Name']);
  $Address=mysqli_real_escape_string($con, $_POST['Address']);
  $Password=mysqli_real_escape_string($con, $_POST['Password']);
  $ConfirmPassword=mysqli_real_escape_string($con, $_POST['ConfirmPassword']);
  $Email=mysqli_real_escape_string($con, $_POST['Email']);
  $PhoneNumber=mysqli_real_escape_string($con, $_POST['PhoneNumber']);

  $pass=password_hash($Password, PASSWORD_BCRYPT);
  $cpass=password_hash($ConfirmPassword, PASSWORD_BCRYPT);

  $EmailQuery=" select * from signupcustomer where Email=' $Email'";
  $query=mysqli_query($con, $EmailQuery);

  $emailcount=mysqli_num_rows($query);

  if($emailcount>0)
  {
    echo"Email already exists";
  }
  else{
    if($Password===$ConfirmPassword)
    {
      $insertquery= " insert into signupcustomer (Name, Address, 
      Password, ConfirmPassword, Email, PhoneNumber) values('$Name','$Address','$pass',
      '$cpass','$Email','$PhoneNumber')";

      $iquery=mysqli_query($con, $insertquery);


      if($iquery)
      {
        ?>
        <script>
        alert("Insertion Successful");
        </script>
        <?php
    }
    else{
        ?>
        <script>
        alert("Not Inserted");
        </script>
        <?php
      }
    }
    else{
      echo"Incorrect Password";
    }
  }
  header('location:home.php');
}
?>
  
  
  <div class="text-center p-3" style="background-color:black;">


<section class= "my-5">
<div class="py-5">
<h2 class="text-center text-white"> Create an account for a Customer </h2>
</div>

<div class="w-50 m-auto">
<form action="signupcustomer.php" method="post">

<div class="form-group">
<lable class="text-white">Name</label>
<input type="text" name="Name" autocomplete="off" class="form-control" required>
</div>


<div class="form-group">
<lable class="text-white">Address</label>
<input type="text" name="Address" autocomplete="off" class="form-control" required>
</div>

<div class="form-group">
<lable class="text-white">Password</label>
<input type="text" name="Password" autocomplete="off" class="form-control" required>
</div>

<div class="form-group">
<lable class="text-white">Confirm Password</label>
<input type="text" name="ConfirmPassword" autocomplete="off" class="form-control" required>
</div>

<div class="form-group">
<lable class="text-white">Email</label>
<input type="text" name="Email" autocomplete="off" class="form-control" required>
</div>

<div class="form-group">
<lable class="text-white">Phone Number</label>
<input type="text" name="PhoneNumber" autocomplete="off" class="form-control" required>
</div>
<br>
<button type="submit" name="submit" class="btn btn-light">Submit</button>

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
        ?? 2021 Copyright:
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