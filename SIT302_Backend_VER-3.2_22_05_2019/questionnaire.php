
<?php
$servername = "localhost";
$username = "root";
$password = "root";

$Incomplete_Process = $_POST["Incomplete_Process"];
$Performed_Process = $_POST["Performed_Process"];
$Managed_Process = $_POST["Managed_Process"];
$Established_Process = $_POST["Established_Process"];
$Predictable_Process = $_POST["Predictable_Process"];
$Optimising_Process = $_POST["Optimising_Process"];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$rating1 = test_input($_POST["rating1"]); 
	$rating2 = test_input($_POST["rating2"]); 
	$rating3 = test_input($_POST["rating3"]); 
	$rating4 = test_input($_POST["rating4"]); 
	$rating5 = test_input($_POST["rating5"]); 
	$rating6 = test_input($_POST["rating6"]); 
	$rating7 = test_input($_POST["rating7"]); 
	$rating8 = test_input($_POST["rating8"]); 
	$rating9 = test_input($_POST["rating9"]); 
	$rating10 = test_input($_POST["rating10"]); 
	$rating11 = test_input($_POST["rating11"]); 
	$rating12 = test_input($_POST["rating12"]); 
	$rating13 = test_input($_POST["rating13"]); 
	$rating14 = test_input($_POST["rating14"]); 
	$rating15 = test_input($_POST["rating15"]); 
	$rating16 = test_input($_POST["rating16"]); 
	$rating17 = test_input($_POST["rating17"]); 
	$rating18 = test_input($_POST["rating18"]); 
	$rating19 = test_input($_POST["rating19"]); 
	$rating20 = test_input($_POST["rating20"]); 
	$rating21 = test_input($_POST["rating21"]); 
	$rating22 = test_input($_POST["rating22"]); 
	$rating23 = test_input($_POST["rating23"]); 
	
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



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



$sql = "insert into sit302.questionnaire VALUES('$rating1','$rating2','$rating3','$rating4','$rating5','$rating6','$rating7','$rating8','$rating9','$rating10','$rating11','$rating12','$rating13','$rating14','$rating15','$rating16','$rating17','$rating18','$rating19','$rating20','$rating21','$rating22','$rating23')";

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

<?php  header("Refresh:05;url=/CSRI-Questionnaire.html")     ?>