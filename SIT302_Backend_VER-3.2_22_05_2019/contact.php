

<?php
$servername = "localhost";
$username = "root";
$password = "root";

$Name = $_POST["Name"];
$Email = $_POST["Email"];
$Subject = $_POST["Subject"];
$Message = $_POST["Message"];

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

echo '<br>';  

echo "  Added Contact";

echo '<br>';  


$sql = "insert into sit302.contact VALUES('$Name','$Email','$Subject','$Message')";

if($conn->query($sql)==TRUE)
{
	echo " New info insert successfully";
}
else{
	echo " occur an error!"; 
}

echo '<br>';  

echo "Will back to last page after 5 seconds";
?>

<?php  header("Refresh:05;url=/CSRI-Contact.html")     ?>
