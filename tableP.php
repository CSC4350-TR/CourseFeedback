<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
<link href="./raisincss/raisin.min.css" rel="stylesheet">
<script src="./jQuery/jquery-3.6.1.min.js"></script>
<link href="./pstyle.css" rel="stylesheet">
</head>

<body>
  <div class="topnav">
	<a href="anonS.php">Home</a> 
  <a href="loginP.php">Professor</a> 
  
    
    <br>
    <br>

</style>
  </div>
  <div
    class="header
      column-start-1 
      column-span-12 
      row-span-1
      font-mono
      font-4xl
sm:text-center"
    style="background:white; min-height: 150x; padding: 1.75rem;"
  >
  <img src="./gsulogo1.png" alt="">
  </div>
  

  <div>
  
<table style = "color: black;
    text-align: left;
    padding: 14px 16px;
    font-size: 17px " >
      <tr>
        <th style="color: white;">Q1</th>
        <th style="color: white;">Q2</th>
        <th style="color: white;">Q3</th>
        <th style="color: white;">Q4</th>
        <th style="color: white;">Q5</th>      
       
      </tr>
<style>
  table{
	border-collapse: collapse;
	width: 50%;  
	border:1px solid black;
	margin-left:auto;
	margin-right:auto;
	border-radius: 5px;
}
  th{
    padding: 14px 16px;
    background-color: #0039A6;  
    color: black;
  }
  tr:nth-child(even) {background-color: #F0FFFF}
</style> 
  </div>
  <footer class="bottomnav"></footer>
</body>

</html>

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

function ShowCards(){
	global $conn;
	$sql = "SELECT Q1, Q2, Q3, Q4, Q5 FROM Software";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
  		// output data of each row
  		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr><td>" . $row["Q1"]. "</td><td>" . $row["Q2"]. "</td><td>" . $row["Q3"] ."</td><td>". $row["Q4"]. "</td><td>" .$row["Q5"]. "</td><td>" . "<br>";
  		}
	} else {
  		echo "0 results";
	}
} 
ShowCards();
mysqli_close($conn);
?>
