<?php


$con=mysqli_connect('localhost','root','');


if(!$con)
{
	echo 'Not Connected To Server';	
}
if(!mysqli_select_db($con,'registration'))
{
	echo 'Database Not Connected';
}


$name = $_POST['name'];
$email = $_POST['email'];
$mobilenumber = $_POST['mobilenumber'];
$type = $_POST['type'];
$amount = $_POST['amount'];


$sql="INSERT INTO register(Name,email,type,mobilenumber,amount) VALUES ('$name','$email','$type',$mobilenumber,$amount);";

 if(!mysqli_query($con,$sql))
 {
	echo "Not Inserted";
 }
 else
 {
	echo  "THANK YOU";
 }

?>