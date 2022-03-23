<?php


require_once("dbconnect.php");
$emailid = $_GET['emailid'];
$pwd = $_GET['pwd'];

echo "<br>";

$my_query = "";

$my_query = "select * from Users where emailid = '$emailid'";
$result = mysqli_query($con, $my_query);

if(mysqli_num_rows($result)>0)
{
	echo "Sorry! This username already exists. Please choose diffrent username.";
}
else
{
	$my_query = "INSERT INTO Users (emailid, pwd) VALUES ('$emailid','$pwd')";
	
	echo "<br>";
	
	$result = mysqli_query($con, $my_query);
	
	if($result)
	{
		echo "Item successfully Added";
	}
	else
	{
		echo "<b>ERROR: unable to post </b>";
	}
}

mysqli_close();

?>