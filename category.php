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

        <div  align = "center" style="with:100%;background-color:hsl(206, 92%, 94%);height: 390px;border:2px solid black;">
        <br>
                <input type="button" name="answer" id="show_btn" value="Start Test" onclick="showDiv()" style="background-color:orange;fcolor:#fff;font-size: 1.5rem;width:200px;"/>
        
                <div id="myDIV"  style="display:none;" class="answer_list">
                <br>
                    <form action="show.php" method = "POST" >
                        <div>
                    <select name="cat" style="background-color:grey;fcolor:#fff;font-size: 1.5rem;width:200px;">
                        <option>Select Category</option>
                            <?php
                                $records = mysqli_query($con, "SELECT id, cat_title From category");  
                            
                                while($data = mysqli_fetch_array($records))
                                    {
                                        echo "<option value='". $data['id'] ."'>" .$data['cat_title'] ."</option>";
                                    }	
                            ?>  
                        </select>
                        </div>
                            
                                <br>
                            <input type="submit" name="submit" value="submit" style="fcolor:#fff;font-size: 1.5rem;width:100px;"/>
                        
                            
                    </form>
                            
                            <?php mysqli_close($con);  ?>
                        
                
        
                        <script>
                            function showDiv()
                             {
                                var x = document.getElementById("myDIV");
                                    if (x.style.display === "none") {
                                            x.style.display = "block";
                                        } 
                                    else {
                                                x.style.display = "none";
                                        }
                            }
                        </script>
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