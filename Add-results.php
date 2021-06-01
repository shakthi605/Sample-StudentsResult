<?php

$id=$_POST['id'];
$rollno=$_POST['rollno'];
$webtechnology=$_POST['webtechnology'];
$cybersecurity=$_POST['cybersecurity'];
$informationtechnology=$_POST['informationtechnology'];
$totalmark=$_POST['totalmark'];
$markobtain=$_POST['markobtain'];
$result=$_POST['result'];
$grade=$_POST['grade'];

$con=mysqli_connect("localhost","root","","student_result");
if($con){
    $ins=mysqli_query($con,"insert into result(id,rollno,webtechnology,cybersecurity,informationtechnology,totalmark,markobtain,result,grade) values('$id','$rollno','$webtechnology','$cybersecurity','$informationtechnology','$totalmark','$markobtain','$result','$grade')");
    if($ins){
        header("location:index.html");
    }else{
        echo "Not Inserted".mysqli_error($con);
    }
}else{
    echo "Not Connected".mysqli_error($con);
}

?>
