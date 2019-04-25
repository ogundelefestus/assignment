<?php
$conn = mysqli_connect('localhost','root','','assignment');
if(!$conn){
    echo("Application not connected to db");
}
echo("Sucess");
?>