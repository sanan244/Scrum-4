<?php


require_once("dbconnect.php");
$emailid = $_GET['emailid'];
$pwd = $_GET['pwd'];

echo "<br>";

$my_query = "";

$my_query = "select * from Users where emailid = '$emailid' and pwd = '$pwd'";
$result = mysqli_query($con, $my_query);

if(mysqli_num_rows($result)>0)
{
	echo "Congrats! You are logged in.";
}
else
{
	
	echo "Invalid Username or Password";

}

mysqli_close();

?>