<?php

$id=$_POST['id'];
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$Dept=$_POST['Dept'];

$con=mysqli_connect("localhost","root","","student_result");
if($con){
    $ins=mysqli_query($con,"insert into student(id,rollno,name,email,mobile,Dept) values('$id','$rollno','$name','$email','$mobile','$Dept')");
    if($ins){
        header("location:add-students.php");
    }else{
        echo "Not Inserted".mysqli_error($con);
    }
}else{
    echo "Not Connected".mysqli_error($con);
}

?>