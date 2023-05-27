<?php
include 'connection.php';
$id=$_GET['id'];

$query="DELETE FROM `students` WHERE id='$id';";
$result=mysqli_query($conn,$query) or die("Query Faild..");

if(isset($result)){
    header('location:index.php');
}else{
    echo "Delete Fail..";
}
?>