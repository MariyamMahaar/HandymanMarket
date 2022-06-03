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

$sql="SELECT name, phoneNumber, email,gender,location,budget FROM signedup where Location='$check_location' and Budget='$check_budget'";

$result = $conn -> query ($sql);
if($result -> num_rows > 0)
{
  echo "<table style='width:auto;'>" ;  
  echo "<tr>";
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
  echo "0 result";
}
$conn-> close();

}
?>