<!DOCTYPE html>
<html>
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width">
		<link href="./raisincss/raisin.min.css" rel="stylesheet">
		<script src="./jQuery/jquery-3.6.1.min.js"></script>
		<link href="./pstyle.css" rel="stylesheet">
	</head>
	<script>
    $(document).ready(function () {
      $("#submit").on("click", callAlert);

      function callAlert() {
        alert("Submission Confirmed.");
      }
    });

	function insertCard(){
		val1 = $("#Q1").val();
		val2 = $("#Q2").val();
		val3 = $("#Q3").val();
		val4 = $("#Q4").val();
		val5 = $("#Q5").val();
		$.get("./quesajax.php",{"cmd": "create", "Q1" : val1, "Q2" : val2, "Q3" : val3, "Q4" : val4, "Q5" : val5})
	}

  </script>

<body>
<div class="topnav">
    	<a href="anonS.php">Home</a> 
      <a href="loginP.php">Professor</a> 
      <br>
      <br>

    </div>
  <h1 class="header"
        column-start-1 
        column-span-12 
        row-span-1
        font-mono
        font-4xl
        sm:text-center
      style="background:white; min-height: 150x; padding: 1.75rem; font-size: 60px;" >

	  Select the class
	</h1>
  <div>
		<select name="select-class" style="width: 50%; text-align:center;">
		  <option value="SWE">Software Engineering</option>
		  <option value="CN">Computer Network</option>
		  <option value="DS">Data Structure</option>
		</select>
	</div>
<div style= "text-align:center">
	<h1 class="header
        column-start-1 
        column-span-12 
        row-span-1
        font-mono
        font-4xl
        sm:text-center"
      style="background:white; min-height: 150x; padding: 1.75rem; font-size: 60px;" >

	  Questions
	</h1>
	<p>1-Strongly disagree  2-Disagree  3-Neither  4-Agree  5-Strongly Agree</p>
				<form method="post" onsubmit="return(insertCard())">
					<h2 id="s1">I felt i know more about the topics and can explain in detail if asked?</h2>
					<input type="text" id="Q1">
					<h2 id="s2">You enjoyed the class?</h2>
					<input type="text" id="Q2">
					<h2 id="s2">Did you enjoy the teaching style of the professor?</h2>
					<input type="text" id="Q3">
					<h2 id="s2">Would you agree or disagree with the pace of the class was right for you?</h2>
					<input type="text" id="Q4">
					<h2 id="s2">Are you likely to recommend this class to your peers</h2>
					<input type="text" id="Q5">
					<br>
					<input id="submit" type=submit value=Submit>
				</form>
				
				<br>
                <!-- <form action="#">
					<h2 id="s2">You enjoyed the class?</h2>
					<input id="s2_sd" type="radio" name="rating" value="-2" aria-describedby="s2">
					<label for="s2_sd">Strongly disagree</label>
					<input id="s2_d" type="radio" name="rating" value="-1" aria-describedby="s2">
					<label for="s2_d">Disagree</label>
					<input id="s2_n" type="radio" name="rating" value="0" aria-describedby="s2">
					<label for="s2_n">Neither agree nor disagree</label>
					<input id="s2_a" type="radio" name="rating" value="1" aria-describedby="s2">
					<label for="s2_a">Agree</label>
					<input id="s2_sa" type="radio" name="rating" value="2" aria-describedby="s2">
					<label for="s2_sa">Strongly agree</label>
					<input id="s2_na" type="radio" name="rating" value="na" aria-describedby="s2">
					<label for="s2_na">Not applicable</label>
				 -->
    </div>
    <footer class="bottomnav"></footer>
  </body>
</html>