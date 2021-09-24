<?php 
      
include ("db.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
		body {
			background-color: #333;
		}
	</style>
	<title>Home Page</title>

	<link rel="stylesheet" href="css/navbar.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />


</head>

<body>

	<div class="contain">
        <div style="heignt:56px;border:2px solid blue">
            <img src="logo4.jpg" alt="logo"  style="heignt: 60px;"/>
            <h1>OES</h1>
            <h3>Online Exam System<h3>
	    </div>
        <div style="width:100%">
                <ul id="ul">
                    <li id="list"><a href="homepage.html">Home</a></li>	
                </ul>
        </div>

        <div  align = "center" style="with:100%;background-color:hsl(206, 92%, 94%);height:auto;width:auto;border:2px solid black;">
        <br>  
             <div style="text-align:left;width:50%;">

               <form action = "add_question.php" method = "post" enctype ="mutlipart/form-data" autocomplete="off">
                    <label for="question">Question:</label><br>
                    <input type="text" id="question" name="question"  placeholder="Enter question..."><br><br>

                    <label for="option1">Option:-1</label><br>
                    <input type="text" id="option1" name="option1"  placeholder="Enter option..."><br><br>

                    <label for="option2">Option:-2</label><br>
                    <input type="text" id="option2" name="option2"  placeholder="Enter option..."><br><br>

                    <label for="option3">Option:-3</label><br>
                    <input type="text" id="option3" name="option3"  placeholder="Enter option..."><br><br>

                    <label for="option4">Option:-4</label><br>
                    <input type="text" id="option4" name="option4"  placeholder="Enter option..."><br><br>

                    <label for="answer">Answer</label><br>
                    <input type="text" id="answer" name="answer"  placeholder="Enter Aswer..."><br><br>

                    <label for="category">Category</label><br>
                    <select id="category" name="cate" style="width:665px;height:30px;">
                        <option value="choose category" >Choose Category</option>
                        <option value="1">HTML</option>
                        <option value="2">CSS</option>
                        <option value="3">javascript</option>
                        <option value="4">PHP</option>
                        
                    </select><br><br>


                    <input type="submit" name="submit" value="Submit">
               </form>
            </div>
      </div>
      <div>    
	<footer>
		<div class="container">
			Codersart : 2017 - www.codersarts.com, OES
		</div>
	</footer>
    </div>
</div>
</body>

</html>