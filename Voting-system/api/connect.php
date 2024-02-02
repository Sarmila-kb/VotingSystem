<?php
$conn=mysqli_connect("localhost","root","","voting-system") or die("connection failed!");

if($conn){
    echo "Connected!";
}
else{
    echo "Not Connected!";
}
?>