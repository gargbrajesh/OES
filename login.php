
<?php 
@session_start(); 
if(isset($_SESSION["email"]))
   {
	session_destroy();
	}
include ("db.php"); 
?>
<!DOCTYPE html>
<html>

<head>
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
		<img src="logo4.jpg" alt="logo" />
		<h1>OES</h1>
		<h3>Online Exam System<h3>
	</div>
	<img src="background3.jpg" alt="display_img" height="460px" width="100%">
	<div align="center" class="tag">
		<form action="#" method="POST" autocomplete="off"><br>
			<table style="margin-bottom: 60px;">

				<tr align="center">
					<td colspan="4">
						<h2 style="color:orange;"> Student Login</h2>
					</td>
				</tr>

				<tr>
					<td align="right"><b>Email:</td>
					<td><input type="text" id="type" name="email" placeholder="enter email" autocomplete="off" />
					</td>
				</tr>
				<tr>
					<td align="right"><b>Password:</td>
					<td><input type="text" id="type" name="password" placeholder="enter password" autocomplete="off" />
					</td>
				</tr>
				<tr align="center">
					<td colspan="4">Forgot Password ? <a href="forgot_pass.php"
							style="color:rgb(12, 199, 199); text-decoration:none;">Click here</a></td>
				</tr>
				<tr align="center">
					<td colspan="4"><input type="submit" name="login" value="Login"
							style="width: 50%;background-color: orange;" /></td>
				</tr>
			</table>

		</form>

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

     if(isset($_POST['login']))
         {
            $email = $_POST['email'];

            $password = $_POST['password'];
			echo  $email;
			echo  $password;

			$query = "select * from signup where email = '$email' or password ='$password'";
                          
			$result = mysqli_query($con, $query);
			
			$run = mysqli_num_rows($result);
			
			if($run>0)
			 {
			  $_SESSION['email']= $email;
			  
			  echo "<script> alert('login Successfuly, thank you')</script>";
			 
			  echo "<script>window.open('category.php','_self')</script>";
			}
			else 
			   {
				$_SESSION['email']= $email;
				  echo "<script> alert('login failed,try again')</script>";
				  echo "<script>window.open('login.php','_self')</script>";  
			   }
			}
			mysqli_close($con);
?>
