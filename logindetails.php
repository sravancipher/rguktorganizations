<?php
$servername="localhost";
$username="root";
$password="mysql";
$database_name="ecrush_DB";
$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{
    die("connection failed:".mysqli_connect_error());
}
if(isset($_POST['save']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $sqlquery="INSERT INTO user_details(name,email,number) VALUES('$name','$email','$number')";
    if(mysqli_query($conn,$sqlquery))
    {
        echo "New details recorded successfully";
    }
    else
    {
        echo "Error: ".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>

