<?php
$servername="localhost";
$username="root";
$password="";
$databasename="testdb";

$conn=mysqli_connect($servername,$username,$password,$databasename);

if(!$conn)
{
    die("Connection failed:" . mysqli_connect_error());
}
if(isset($_POST['save']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $sql_query = "INSERT INTO text(username,password)
    VALUES ('$username','$password')";
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
