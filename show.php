<?php 
      
      include ("db.php");
      session_start();
      ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
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

.circle {
    background: gray;
    border-radius: 50%;
    width: 100px;
    height: 30px;
    border: 2px solid orange;
  padding: 10px;
  box-shadow: 5px 10px 8px #888888;
  color:blue;
}
  </style>


  <title>Document</title>


</head>

<body style="background-color:hsl(206, 92%, 94%);" onload="timeout();">
  <h2 align="center">Online Examination Question
    
  <script defer>
   
   var timeLeft= 1*60;
</script>
  <div id ="time" class="circle" style="float:right;margin-right:25px;">timeout</div></h2><br><br>

  <form action="answer.php" method="POST" id="form1">
    <?php
    
    if(isset($_POST['submit']))
    {
      $cat = $_POST['cat']; 
      $_SESSION['cat'] = $cat ;   
      $query = "select * from questions where cat_id='$cat'";
                          
     
        $result = mysqli_query($con, $query);
      
        $queCount=1;
      foreach($result as $value)
       { 
?>       
    <table align="center" style="border:2px solid black;width: 800px;background-color:lightblue;">
    <thead>
        <tr style="background-color:pink;font-size:18px;">
            <th align="left">
              <?php echo "Q." . $queCount; ?>
              <?php   echo  $value['question'];?>
            </th>
        </tr>
      </thead>

        
        <tbody>
          <?php  if(isset($value['ans1'])){   ?>
              <tr>
                <td>A:<input type="radio" value ="ans1" name ="<?php   echo  $value['id'];?>" />
                  <?php   echo  $value['ans1'];?>
                </td>
              </tr>
          <?php } ?>

          <?php  if(isset($value['ans2'])){   ?>
              <tr>
                <td> B:<input type="radio" value ="ans2" name="<?php   echo  $value['id'];?>" />
                  <?php   echo  $value['ans2'];?>
                </td>
              </tr>
          <?php } ?>

          <?php  if(isset($value['ans3'])){   ?>
              <tr>
                  <td> C:<input type="radio" value ="ans3" name="<?php   echo  $value['id'];?>" />
                    <?php   echo  $value['ans3'];?>
                  </td>
              </tr>
          <?php } ?>

          <?php  if(isset($value['ans4'])){   ?>
            <tr>
              <td> D:<input type="radio" value ="ans4" name="<?php   echo  $value['id'];?>" />
                <?php   echo  $value['ans4'];?>
              </td>
            </tr>
          <?php } ?>
            <tr>
              <td><input type="radio" checked ="checked" style="display:none;" value = "No_Attempt" name="<?php   echo  $value['id'];?>" />
                
              </td>
            </tr>
        </tbody>
    </table>
    <br>

    <?php  $queCount++;   
     
    }
        ?>
    <div align="center">
      <input type="submit" value="Submit" align="center" class="btn">
    </div>
    <?php }
    
       mysqli_close($con);
       ?>
       
  </form>
<script type="text/javascript">
      function timeout()
      { 
        var minute = Math.floor(timeLeft/60);
        var second = timeLeft%60;
        if(timeLeft<=0)
        { 
          
          clearTimeout(tm);
          document.getElementById("form1").submit();
        }
        else{
          
          document.getElementById("time").innerHTML = minute+":" +second;
        }
        timeLeft--;
        var tm = setTimeout(function()
        {
          timeout()
        },1000);
      }
</script>
</body>

</html>