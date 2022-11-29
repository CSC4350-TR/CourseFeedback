<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="./raisincss/raisin.min.css" rel="stylesheet">

</head>

<body>
<style>
    html, body {
  height: 100%;
  width: 100%;
}

/* Add a black background color to the top navigation */
.topnav {
  background-color: rgb(137, 207, 240);
  overflow: hidden;
  height: 175px;
  padding-top: 15px;
  text-align: center;

}

/* Style the links inside the navigation bar */
.topnav a {
  float: center;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 12px;
  text-decoration: none;
  font-weight: bold;
  font-size: 20px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: rgb(137, 207, 240);
  color: white;
}

.basic{
  padding-left: 10px;
font-family: font-mono;

}


  </style>
  <script src="script.js"></script>

  <div class="topnav">
  <a href="index.php">Home</a>  
    <a href="login.php">Login</a>
    <a href="cardsajax.php">Wish List </a>
    <a href="cards.php">Add Card</a>
    <a href="Checklist.php">Checklist</a>
    <a href="siteinfo.php">Site Info</a>
    <a href="about.php">About Me</a>
    <br>
    <br>
    <img id="logo" src="./G4Ulogo.jpg" alt="">
    <style>
  #logo{
    width: 100px;
    height: 100px;
    display: block;
    margin-left: auto;
    margin-right: auto;
  
  }
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
  ><h1><b>Card Wishlist</b></h1>
  </div>
<br>

  <table style = "color: black;
    text-align: left;
    padding: 14px 16px;
    font-size: 17px " >
      <tr>
        <th>User</th>
        <th>Card Name</th>
        <th>Price $USD</th>
       
      </tr>
<style>
  table{
  border-collapse: collapse;
  width: 50%;  
border:1px solid black;
margin-left:auto;
margin-right:auto;

}
  th{
    padding: 14px 16px;
    background-color: #89CFF0;
    color: black;
  }
  tr:nth-child(even) {background-color: #F0FFFF}
</style> 
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

function insertCard($userI, $cardNameI, $priceI){
	global $conn; 
	
	$insert = "INSERT INTO gpulist SET User = '$userI', Card_Name = '$cardNameI', Price = '$priceI'"; 

	$result = $conn->query($insert); 
}

function ShowCards(){
	global $conn;
	$sql = "SELECT User, Card_Name, Price FROM gpulist";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
  		// output data of each row
  		while($row = mysqli_fetch_assoc($result)) {
        		$id = $row["id"];
			echo "<tr><td>" . $row["User"]. "</td><td>" . $row["Card_Name"]. "</td><td>" . $row["Price"] . "<br>";
  		}
	} else {
  		echo "0 results";
	}
} 

$cmd = $_GET['cmd']; 

if ($cmd == 'create') {
	if($_GET['userN'] && $_GET['CardNameN'] && $_GET['PriceN']){
	InsertCard($_GET['userN'], $_GET['CardNameN'], $_GET['PriceN']);
	}

}
ShowCards();
mysqli_close($conn);
?>