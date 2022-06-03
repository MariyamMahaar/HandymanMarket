<?php
$con1=mysqli_connect('localhost','root');

if($con1)
{
    echo"Connection succesfull";
}
else{
    echo "No Connection";
}

mysqli_select_db($con1, 'plumber');

$Email=$_POST['Email'];
$Comment=$_POST['Comment'];

$query=" insert into contactus (Email, Comment) 
values ('$Email','$Comment')";

echo "$query";

mysqli_query($con1, $query);

header('location:home.php');
?>