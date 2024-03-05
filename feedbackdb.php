<?php

$con=mysqli_connect('localhost','root','');


if(!$con)
{
	echo 'Not Connected To Server';	
}
if(!mysqli_select_db($con,'feedback'))
{
	echo 'Database Not Connected';
}


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mailid = $_POST['mailid'];
$country = $_POST['country'];
$subject = $_POST['subject'];


$sql="INSERT INTO feedbackdb(firstname,lastname,mailid,country,subject) VALUES ('$firstname','$lastname','$mailid','$country','$subject');";
//$sql="INSERT INTO feedback(firstname,lastname,mailid,subject) VALUES ('$firstname','$lastname','$mailid');";
 if(!mysqli_query($con,$sql))
 {
	echo "Not Inserted";
 }
 else
 {
	echo "THANK YOU FOR YOUR VALUABLE FEEDBACK";
 }

?>