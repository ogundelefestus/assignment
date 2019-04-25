<?php
session_start();
include('./config.php');
if(isset($_POST['submit'])){
    // $name = $_SESSION['name'];
    $name = "Festus";
    $question = $_POST['question'];
    $course = $_POST['course'];
    $lecturer = "Kolawole";
$quesry = mysqli_query($conn,"INSERT INTO `questions`(`title`,`lecturer`,`course`) VALUES('$question','$lecturer','$course')");

}

?>
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
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-secondary">
      <a class="navbar-brand" href="#">Assignment Submission Management System</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="signin.html">Login <span class="sr-only">(current)</span></a>
      </li>
      &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
      <li class="nav-item active">
        <a class="nav-link" href="/signup">Sign Up<span class="sr-only">(current)</span></a>
      </li>
      
        <!--<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>-->
     
     </ul>
     
  </div>
      
      </div>
    </nav>


 <div class="page-content" style="margin-top:90px;">
    	<div class="row">
		  <div class="col-md-2">
        <br> <br>
           <br> 
           
		  	<div class="sidebar content-box" style="display: block;">
          
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.html"><i class="glyphicon glyphicon-home"></i>Home</a></li><br>
                    <li><a href="student.html"><i class="glyphicon glyphicon-calendar"></i>Students Entry</a></li><br>
                    <li><a href="view.html"><i class="glyphicon glyphicon-stats"></i>View Entry</a></li><br>
                    <li><a href="lecturer.html"><i class="glyphicon glyphicon-list"></i>Lecturer Entry</a></li><br>
                    <li><a href="score.html"><i class="glyphicon glyphicon-record"></i>Score</a></li>
                  </ul>
                   <!-- <li><a href=".html"><i class="glyphicon glyphicon-pencil"></i></a></li>
                    <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i></a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                         </a>-->
                         <!-- Sub menu -->
                         <!-- <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                        </ul>
                    </li>
                </ul>-->
             </div>
		  </div>
		  <div class="col-md-10"  style="margin-top:50px;">
		  	<div class="row">
		  		<div class="col-md-6">
		  			<div class="conten-box-large">
		  				<div class="panel-heading">
							
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
						</div>
		  				


		  			</div>
		  		</div>



		  
		  
		  </div>
		</div>
    </div>
    </div>

    <!--  -->


        <form action="lecturer.php" method="post">
            <textarea  name="question" >
            </textarea>
            <select name= "course">
              <option>GNS201</option>
              <option>GNS202</option>
              <option>GNS203</option>
              <option>GNS204</option>
              <option>GNS205</option>
              <option>GNS206</option>
              <option>GNS207</option>
              <option>GNS208</option>
              <option>GNS209</option>

            </select>
            <button type="submit" name="submit">Submit</button> 
        </form>
    <!--  -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <footer style="margin-top:60px;">
         <div class="container">
         
            <div class="copy text-center">
               Copyright  2019<a href='#'>Website</a>
            </div>
            
         </div>
      </footer>


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

	</body>
	</html>