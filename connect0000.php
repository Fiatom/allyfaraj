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
    $Name = $_POST['Name'];
    $Email= $_POST['Email'];
    $Gender = $_POST['Gender'];
    $Mobile = $_POST['Mobile'];
    $password = $_POST['password'];
 
    $sql_query = "INSERT INTO entry(Name,Email,Gender,Mobile,password)
    VALUES ('$Name','$Email','$Gender','$Mobile','$password')";
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
