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
<style>
  table,th,td {
  border: 1px solid black;
  border-color:white;
  
  }
</style>
<body>
  
<?php
session_start();

//including navbar
include_once('navbar.php');
?>
<br>
<br>
<div class="container my-4 text-white">


<h2 >ARE YOU LOOKING FOR A TAILOR?</h2>
<section class= "my-5">
<div class="py-5">
</div>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="locationform" method="POST">

<label for="Budget">Budget:</label>
  <input type="text" id="Budget" name="Budget">
  <br>
  <br>
<label for="location">Choose location:</label>
<select name='location' id='location' >
    <?php
    $conn = mysqli_connect("localhost", "root", "", "plumber");
    if($conn -> connect_error)
    {
      die("Connection failed: ". $conn -> connect_error);
    }
        $result = $conn->query("select Location from signedup");
        //echo "";
        while ($row = $result->fetch_assoc()) {
                      unset($location);
                      $location = $row['Location'];
                      echo '<option value="'.$location.'">'.$location.'</option>';
        }                  
    ?> 
</select>
<br>
<br>
<input type="Submit" name="sub">
</form>


<?php





//old logic
$conn= mysqli_connect("localhost", "root", "", "plumber");
if($conn -> connect_error)
{
  die("Connection failed: ". $conn -> connect_error);
}
if (isset($_POST['sub'])) 
{

    $check_location = $_POST['location'];
    $check_budget = $_POST['Budget'];

    //echo $check_location;

$sql="SELECT ID, name, phoneNumber, email,gender,location,budget FROM signedup where Location='$check_location' and Budget='$check_budget' and Category='tailor'";

$result = $conn -> query ($sql);
if($result -> num_rows > 0)
{
  echo "<h2 style='margin:  80px;'>Available Tailor </h2>";
  echo "<table style='width:100%'>" ;  
  echo "<tr>";
  echo "<th>ID</th>";
  echo "<th>Name</th>";
  echo "<th>Contact No</th>";
  echo "<th>Email</th>";
  echo "<th>Gender</th>";
  echo "<th>Location</th>";
  echo "<th>Budget</th>";
  echo "</tr>";

  while ($row = $result -> fetch_assoc())
  {
    echo "<tr>";
    echo "<td>".$row ["ID"]."</td>";
    echo "<td>".$row ["name"]."</td>";
    echo "<td>".$row["phoneNumber"]. "</td>";
    echo "<td>".$row ["email"]."</td>";
    echo "<td>".$row ["gender"]."</td>";
    echo "<td>".$row ["location"]."</td>";
    echo "<td>".$row ["budget"]."</td>";
    echo "</tr>";
  }
  echo "</table>";
}
else{
  echo "<br>";
  echo "<br>";
  echo "<h3>Tailor service not found in your location/budget</h3>";
}
$conn-> close();

}
?>





<!--<select name="location" id="location" form="locationform">
<option value="Model Town">Model Town</option>
<option value="Johar Town">Johar Town</option>
<option value="Wapda Town">Wapda Town</option>
<option value="Allama Iqbal Town">Allama Iqbal Town</option>
<option value="Lahore Cantt">Lahore Cantt</option>
<option value="Faisal Town">Faisal Town</option>
<option value="Muslim Town">Muslim Town</option>
<option value="Raiwind">Raiwind</option>
</select> -->
<br>
<br>





<!--?php
          //old logic
$conn= mysqli_connect("localhost", "root", "", "plumber");
if($conn -> connect_error)
{
  die("Connection failed: ". $conn -> connect_error);
}

$sql="SELECT name, phoneNumber FROM signedup ORDER BY Location";

$result = $conn -> query ($sql);
if($result -> num_rows > 0)
{
  while ($row = $result -> fetch_assoc())
  {
    echo "<tr> <td>". $row ["name"]."</td><td>".$row["phoneNumber"]
    . "</td></tr>";
  }
  echo "</table>";
}
else{
  echo "0 result";
}
$conn-> close();
?-->

<br>
<br>

</div>
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