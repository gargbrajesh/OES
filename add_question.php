
<?php
 include ("db.php");

if(isset($_POST['submit']))
{
  $question = $_POST['question']; 
  $option1 = $_POST['option1']; 
  $option2 = $_POST['option2'];
  $option3 = $_POST['option3'];
  $option4 = $_POST['option4'];
  $answer = $_POST['answer'];
  $category = $_POST['cate'];
    
       $query = "insert into questions (question , ans1, ans2, ans3, ans4,ans,cat_id) 
             value ('$question', '$option1', '$option2', '$option3','$option4','$answer','$category')";
 
       if (mysqli_query($con, $query)) {
        
                echo "<script> alert('New record created successfully')</script>";
                echo "<script>window.open('insert_new_data.php','_self')</script>"; 
       
       } 
      else {
                echo "<script> alert('New record created Failed, Try Again')</script>";
                echo "<script>window.open('insert_new_data.php','_self')</script>";
       }

       
}
 mysqli_close($con);
?>