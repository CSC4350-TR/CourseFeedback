<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="./raisincss/raisin.min.css" rel="stylesheet">
    <link href="./pstyle.css" rel="stylesheet">
  </head>
  <style>
    input[type=text], select {
      width: 50%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #000000;
      box-sizing: border-box;
      border-radius: 5px;
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
      style="background:white; min-height: 150x; padding: 1.75rem;">
      <h1>Course Feedback Login</h1>
      <img src="./gsulogo1.png" alt="">
    </div>

    <div style="text-align: center;">
      <form method = "post" class = " user 
            font-mono
            font-5x2">    
      
          <a href="question.php">Anonymous Student</a> 
         
      </form>
    </div>
    <footer class="bottomnav"></footer>
  </body>
</html>

<?php 
define('DB_NAME', 'vshah24'); 
define('DB_USER', 'vshah24'); 
define('DB_PASSWORD', 'vshah24'); 
define('DB_HOST', 'localhost'); 

function check($userInput, $passInput){
	// Create connection
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	// Check connection
	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "SELECT Id, Username, Password FROM User";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
  		// output data of each row
  		while($row = mysqli_fetch_assoc($result)) {
         	     $loggedIn = false; 
    		     if($row["Username"] == $userInput && $row["Password"] == $passInput){
                           $loggedIn = true;
			   setcookie('userid', $row['Username'], time() + (86400 * 30), "/");
			   header("Location: cards.php");
			   exit();
		     }
                }
	        if(!$loggedIn) {
 	             print("Username or Password is incorrect");
	             setcookie('userid', '', time() - 3600, "/");
	        }
	} else {
  		echo "0 results";
	}
	mysqli_close($conn);
} 
?> 
<?php
if($_POST['userInput'] != "" && $_POST['passInput'] != "") {
    check($_POST['userInput'], $_POST['passInput']);
}
?>
