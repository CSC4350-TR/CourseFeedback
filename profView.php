<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="./raisincss/raisin.min.css" rel="stylesheet">
    <script src="./jQuery/jquery-3.6.1.min.js"></script>
    <link href="./pstyle.css" rel="stylesheet">
</head>
<style>
  h2{
    color:  #0039A6;
    text-align:center;
  }
</style>
<body>

  <div class="topnav">
	<a href="anonS.php">Home</a> 
  <a href="loginP.php">Professor</a> 
  
    
    <br>
    <br>
  
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
    <h2>Select the class</h2>

    <select name="select-class" id="select-class">
        <option value="SWE">Software Engineering</option>
      <option value="CN">Computer Network</option>
      <option value="DS">Data Structure</option>

    </select>
    <h2>Select the time</h2>

    <select name="select-time" id="select-time">
        <option value="SWE">12:45</option>
      <option value="CN">2:30</option>
      <option value="DS">5:30</option>


    </select>
    <br>
    <br>
    <div style="text-align: center;" >
      <a href="tableP.php">View Table</a>
    </div> 
    <table style = "color: black;
        text-align: left;
        padding: 14px 16px;
        font-size: 17px " >

  </div>
  <footer class="bottomnav"></footer>
</body>

</html>

<?php 
define('DB_NAME', 'vshah24'); 
define('DB_USER', 'vshah24'); 
define('DB_PASSWORD', 'vshah24'); 
define('DB_HOST', 'localhost'); 

// function ShowCards(){
// 	global $conn;
// 	$sql = "SELECT Q1, Q2, Q3, Q4, Q5 FROM Software";
// 	$result = mysqli_query($conn, $sql);

// 	if (mysqli_num_rows($result) > 0) {
//   		// output data of each row
//   		while($row = mysqli_fetch_assoc($result)) {
//         		$id = $row["id"];
// 			echo "<tr><td>" . $row["Q1"]. "</td><td>" . $row["Q2"]. "</td><td>" . $row["Q3"] . $row["Q4"]. "</td><td>" .$row["Q5"]. "</td><td>" . "<br>";
//   		}
// 	} else {
//   		echo "0 results";
// 	}
// } 
// mysqli_close($conn);
// ?>
