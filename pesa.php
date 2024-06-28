<?php
$servername="localhost";
$username="root";
$password="";
$databasename="database123";

$conn=mysqli_connect($servername,$username,$password,$databasename);

if(!$conn)
{
    die("Connection failed:" . mysqli_connect_error());
}
if(isset($_POST['save']))
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
 
    $sql_query = "INSERT INTO entry(first_name,last_name,gender,email,phone)
    VALUES ('$first_name','$last_name','$gender','$email','$phone')";
    if (mysqli_query($conn, $sql_query))
{
    echo "wooow its succesfully!!!!!!";
}
else
{
    echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
}

