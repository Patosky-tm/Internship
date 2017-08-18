<?php
$connect = new mysqli('localhost','root','','internship');

$getInfo = "SELECT * FROM users";
$query = mysqli_query($connect,$getInfo);
while ($row = mysqli_fetch_array($query)) {
	$first_name=$row['first_name'];
	$last_name=$row['last_name'];
	$email=$row['email'];
	echo "Hi, my name is ".$first_name." ".$last_name." and my email address is ".$email."<br>";
}
?>