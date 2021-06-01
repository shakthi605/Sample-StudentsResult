<?php
$rollno =$_GET['rollno'];
$con=mysqli_connect("localhost","root","","student_result");
if($con){
    $ans=mysqli_query($con,"delete from student where rollno='$rollno'");
   if($ans){
    header('Location:view-students.php');
    
   }
}
?>