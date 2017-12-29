<?php
$name=$_POST['name'];
$selectOption = $_POST['taskOpt'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname="user";
$sql=false;
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
elseif (isset($_POST['check']) &&   $_POST['check'] == 'true') {
 	$sql = "INSERT INTO `intern`(`name`,`option`) VALUES ('$name','$selectOption')";
 		if (mysqli_query($conn, $sql)) {
    		echo "New record created successfully";
		} else {
   			 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
 	 } 
 	 else {
 	 	echo "not agreed";
 	 }
 	 
?>

	