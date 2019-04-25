<!DOCTYPE html>
<html>
<head>
	

	<title>OASM</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style/styles.css">
<link href="navbar-top-fixed.css" rel="stylesheet">
</head>
<body>



<form action="signup.php" method="post">


<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Register</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
            <div class="group">
					<label for="pass" class="label">Matric No</label>
					<input id="pass" type="text" name="fullname" class="input" required>
				</div><div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="email"  name="email"class="input" required>
				</div>
           
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password"  name="password"class="input" data-type="password" required>
				</div>
				<div class="group">
					<select for="pass" name="person" class="label" style="height: 50px; border-radius: 4px;">

                     <option id="pass" >Students</option>
                     <option id="pass" >Lecturer</option>

					</select>
				</div>
				
				
				<div class="group">
					<input type="submit" name="submit" class="button" value="Sign Up">
				</div>
               
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
			
			</div>
		</div>
	</div>
</div>
</form>

<?php
	include('./config.php');
	if($_POST['submit']){

		if(isset($_POST['fullname']) && !empty($_POST['fullname']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['person']) && !empty($_POST['person']) ){
			
			//print_r($_POST['fullname']);
			$fullname=$_POST['fullname'];
			$email=$_POST['email'];
			$password=$_POST["password"];
			$type=$_POST["person"];
			//echo($type);
			$query=mysqli_query($conn,"SELECT id FROM `users` WHERE 'name'='$fullname' AND 'type'='$type'");
			$result=mysqli_fetch_assoc($query);
			print_r($result);
			if($result["id"]>0){
				echo("user already in db");
			}else{
			$query=mysqli_query($conn,"INSERT INTO `users`(`name`,`type`,`password`,`email`) VALUES('$fullname','$type','$password','$email')");
			if($query){
				echo("entered into db successfully");
			}else{
				echo("not  successfully");
			}
		}

		}else{

			echo("not filled properly");
		}

	}




?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
