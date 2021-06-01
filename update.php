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
    $ins=mysqli_query($con,"update result set id='$id',webtechnology='$webtechnology',cybersecurity='$cybersecurity',informationtechnology='$informationtechnology',totalmark='$totalmark',markobtain='$markobtain,result='$result,grade='$grade'");
    if($ins){
    
        header('Location:view-results.php');
    
    }else{
        echo "Not Updated".mysqli_error($con);
    }
}else{
    echo "Not Connected".mysqli_error($con);
}

?>