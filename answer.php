<?php 
      
include ("db.php");
 session_start();
 $cat = $_SESSION['cat'];
 
?>

<?php


  
$arr = [];

 foreach($_POST as $answer)
   {  
        $arr[]=$answer;
            
    }
    

   $right=0;
   $No_ans =0;
   $wrong =0;

        $query = "select  ans from questions where cat_id='$cat'";
        $result = mysqli_query($con, $query);

        $row =[];
        
        while($data = mysqli_fetch_array($result ))
       {
       
        $row[] = $data['ans'];
            //  echo  "Ans-" .$data['ans'] . "<br>";
        }
       
        $count = sizeof($row);
        
            for($i=0; $i<$count; $i++)
            
            {
                if($row[$i] == $arr[$i])
                {
                    $right++;
                }
                elseif($arr[$i] == "No_Attempt") 
                {
                $No_ans++;
                }
                else
                {
                    $wrong++;
                }
            
            }
       
           	      
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer</title>
<link rel="stylesheet" href="css/navbar.css" type="text/css" />
	<link rel="stylesheet" href="answer.css" type="text/css" />

<style>
     .btn {
    font-size: 16px;
    box-shadow: 0 0 10px gray;
    background-color: #1e09d3;
    color: white;
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 5px;
}

.btn:hover {
    background-color: orange;
    border: none;
    cursor: pointer;
    color: rgb(38, 0, 255);
    box-shadow: 0 0 10px 5px blue;
}

</style>

</head>
<body>

	<div class="contain">
		<img src="logo4.jpg" alt="logo" />
		<h1>OES</h1>
		<h3>Online Exam System<h3>
	</div>
	<img src="background3.jpg"  alt="display_img" height="460px" width="100%">
	<div align="center" class="tag">
                <div id="mydiv">
                    <table id="customers">
                    <tr><th colspan="2" style="text-align: center;">Youre Score Card</th></tr>
                    <tr>
                        <td>Right Answer</td>
                        <td> <?php  echo  $right ?></td>
                    </tr>
                    <tr>
                        <td>Not Attempt</td>
                        <td> <?php  echo  $No_ans ?></td>
                    </tr>
                    <tr>
                        <td>Wrong Answer</td>
                        <td> <?php  echo  $wrong ?></td>
                    </tr>
                    <tr>
                        <th colspan="2" style="text-align: center;"><button onclick="location.href='signup.php'" type="button" class="btn">
         Log Out</button>
                        </th>
                    </tr>
                    <tr>
                    <?php 

// $per = round(($wrong+$right+$No_ans)*100)/$right;
// echo $per;
?>
                    </tr>
                    </table>
                </div>
    </div>
	<br>
  
	<footer>
		<div class="container">
			Codersart : 2017 - www.codersarts.com, OES
		</div>
	</footer>
</body>

</html>
