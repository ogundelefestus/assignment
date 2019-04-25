<?php
session_start();
include('./config.php');
if(isset($_POST['submit'])){
    // $name = $_SESSION['name'];
    // $lecturer = $_GET['lecturer'];
    // $question = $_GET['question'];
    $name = "Festus";
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $lecturer = "Kolawole";
$quesry = mysqli_query($conn,"INSERT INTO `submissions`(`question`,`lecturer`,`answer`,`student`) VALUES('$question','$lecturer','$answer','$name')");

}

?>

<html>
    <head></head>
    <body>
        <form action="student.php" method="post">
            <input type="text" name="question" placeholder=""><br>
            <textarea  name="answer" >
            </textarea>
            <button type="submit" name="submit">Submit</button> 
        </form>
    </body>
</html>