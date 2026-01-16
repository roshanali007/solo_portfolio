<?php


$servername ="localhost";
$username="root";
$userpw="";
$dbname="portfolio";

$conn= mysqli_connect ($servername,$username,$userpw,$dbname);
if(!$conn)
{
    echo"not connected";
}

?>