<?php
include('connection.php');
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$query="insert into collect values('$name','$email','$message')";

$query_run=mysqli_query($conn,$query);
 if($query_run)
{ 
    echo "<div style='color: #d35400; font-weight: bold; font-size: 50px; text-align: center; margin-top: 20%;'>message sent</div>";
}
else{
    echo"an error has occured";
}
?>