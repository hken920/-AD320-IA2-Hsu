
<?php

$name = $_GET["name"];
$email = $_GET["email"];
$phone = $_GET["phone"];
$state = $_GET["state"];
echo "<div class = 'personInfo'>";
	echo "<h1>Name: " . $name . "</h1><br>";
	echo "<h3>Email: " . $email . "</h3><br>";
	echo "<h3>Phone: " . $phone . "</h3><br>";
	echo "<h3>State: " . $state . "</h3><br>";
echo "</div>";
?>