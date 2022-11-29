<?php 
define('DB_NAME', 'vshah24'); 
define('DB_USER', 'vshah24'); 
define('DB_PASSWORD', 'vshah24'); 
define('DB_HOST', 'localhost'); 

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Check connection
if (!$conn) {
  	die("Connection failed: " . mysqli_connect_error());
}

function insertCard($Q1, $Q2, $Q3, $Q4, $Q5){
	global $conn; 
	$insert = "INSERT INTO  Software (Q1, Q2, Q3, Q4, Q5) VALUES ('$Q1', '$Q2', '$Q3', '$Q4', '$Q5')"; 

	$result = $conn->query($insert); 
}

$cmd = $_GET['cmd']; 

if ($cmd == 'create') {
	if($_GET['Q1'] && $_GET['Q2'] && $_GET['Q3'] && $_GET['Q3'] && $_GET['Q4']  && $_GET['Q5']){
		InsertCard($_GET['Q1'], $_GET['Q2'], $_GET['Q3'], $_GET['Q4'], $_GET['Q5']);
	}

}
mysqli_close($conn);

?>