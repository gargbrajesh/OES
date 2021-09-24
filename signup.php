<?php 
      
include ("db.php");
// session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<style>
	body{
	background-color: #333;
}

</style>
<title>Home Page</title>

<link rel="stylesheet" href="css/navbar.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />


</head>
<body>

		<div class="contain">
			<img src="logo4.jpg" alt="logo" />
			<h1>OES</h1>
			<h3>Online Exam System<h3>
		</div>
<img src="background3.jpg" alt="display_img"  height="480px" width="100%"  >
<div align = "center" class="tag"> 
	<form action="#" method = "post" enctype ="mutlipart/form-data" autocomplete="off"><br>
        <table>
           <tr>
             <td colspan="2" align="center" > <h2 style = "color:orange;">Create An Account</h2></td>
           </tr>

           <tr>
                <td align ="right"><b> Stu. Nmae:</b></td>
                <td> <input type="text" id="type" name ="name" autocomplete="off" required /></td>
           </tr>

           <tr>
                 <td align ="right"><b> Stu. Email:</b></td>
                <td> <input type="text" id="type" name ="email" autocomplete="off" required /></td>
           </tr>
          
           <tr>
                <td align ="right"><b>Password:</b></td>
                <td> <input type="password" id="type" name ="password" autocomplete="off" required /></td>
           </tr>
          
           <tr>
                 <td align ="right"><b>Contact:</b></td>
                 <td> <input type="text"id="type" name ="phone" autocomplete="off" required /></td>
           </tr>
           <tr>
           <td align ="right"><b>Address:</b></td>
           <td> <input type="text"id="type" name ="address" autocomplete="off" required /></td>
           </tr>
           <tr>
           <td colspan="2"align="center"> 
           <input type="submit" name ="register" value ="submit" style="width: 50%;background-color: orange;"/> </td>
           </tr>
           
        </table>
      
      </form>
      <p class="para">
		Already a member? <a href="homepage.html">Sign in</a>
	</p>
</div>
<br>			
<footer>
		<div class="container">
			Codersart : 2017 - www.codersarts.com, OES
		</div>
	</footer>
</body>
</html>

<?php
             if(isset($_POST['register']))
             {
               $name = $_POST['name']; 
               $email = $_POST['email']; 
               $password = $_POST['password'];
               $phone = $_POST['phone'];
               $address = $_POST['address'];
                 
                    $query = "insert into signup (name , email, password, contact, address) 
                          value ('$name', '$email', '$password', '$phone','$address')";
              
                    if (mysqli_query($con, $query)) {
                         echo "<script> alert('Register Successfuly, thank you')</script>";
                         echo "<script>window.open('login.php','_self')</script>"; 
                    }
                    else 
                    {
                       echo "<script> alert('Register Failed, Try Again')</script>";
                       echo "<script>window.open('signup.php','_self')</script>";  
                    }
            }
            mysqli_close($con);
             

        ?>