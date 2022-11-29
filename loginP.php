<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./raisincss/raisin.min.css" rel="stylesheet">
    <script src="./jQuery/jquery-3.6.1.min.js"></script>
    <link href="./pstyle.css" rel="stylesheet">
  </head>
 <style> 
    input[type=text], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #000000;
      box-sizing: border-box;
      border-radius: 5px;
    }

    @media only  screen and (max-width:450px){
      div.box {
        padding: 20px;
        width: 100%; 
        margin: auto; 
        border-style: solid;
        border-radius: 10px;
      }
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
      <img src="./gsulogo1.png" alt="">
      <h1>Course Feedback Login</h1>
    </div>
    <div class = "box">
      <form method = "post" class = " user 
            font-sans
            font-3xl">

        <label for="user" >Username</label>
        <input type="text" id="user" name="userInput">

        <label for="pass">Password</label>
        <input type="text" id="pass" name="passInput">
      
        <input type="submit" value="Login">
        
      </form>
    </div>

    <br>
    <br>
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
			   header("Location: profView.php");
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
