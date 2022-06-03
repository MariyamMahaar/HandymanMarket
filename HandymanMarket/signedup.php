<?php
$con=mysqli_connect('localhost','root');

if($con)
{
    echo"Connection succesfull";
}
else{
    echo "No Connection";
}

mysqli_select_db($con, 'plumber');

$ID=$_POST['ID'];
$Password=$_POST['Password'];
$ConfirmPassword=$_POST['ConfirmPassword'];
$Name=$_POST['Name'];
$Age=$_POST['Age'];
$Email=$_POST['Email'];
$Gender=$_POST['Gender'];
$Category=$_POST['Category'];
$Location=$_POST['Location'];
$Budget=$_POST['Budget'];
$PhoneNumber=$_POST['PhoneNumber'];

$pass=password_hash($Password, PASSWORD_BCRYPT);
$cpass=password_hash($ConfirmPassword, PASSWORD_BCRYPT);

$EmailQuery=" select * from signedup where Email=' $Email'";
$query=mysqli_query($con, $EmailQuery);

$emailcount=mysqli_num_rows($query);

if($emailcount>0)
  {
    echo"Email already exists";
  }
  else{
    if($Password===$ConfirmPassword)
    {
      $insertquery= " insert into signedup (ID, Password, ConfirmPassword, Name, Age, Email, Gender, 
      Category, Location, Budget, PhoneNumber) 
      values ('$ID', '$pass', '$cpass', '$Name', '$Age', '$Email', '$Gender', 
      '$Category', '$Location', '$Budget', '$PhoneNumber')";

      $insertSecondQuery= " insert into `{$Category}` (ID, Password, ConfirmPassword, Name, Age, Email, Gender, 
      Category, Location, Budget, PhoneNumber) 
      values ('$ID', '$pass', '$cpass', '$Name', '$Age', '$Email', '$Gender', 
      '$Category', '$Location', '$Budget', '$PhoneNumber')";

      $iquery=mysqli_query($con, $insertquery);
      mysqli_query($con, $insertSecondQuery);

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
?>