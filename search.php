<!DOCTYPE html>
<html>
<head>
<title>Search Data</title>
</head>
<style>
body{
background-color: whitesmoke;
}
input{
width: 40%;
height: 5%;
border: 1px;
border-radius: 05px;
padding: 8px 15px 8px 15px;
margin: 10px 0px 15px 0px;
box-shadow: 1px 1px 2px 1px grey;
}
</style>
<body>
<center>
<h1>Search Data Into Database</h1>
<form action="" method="POST">
<input type="text" name="id" placeholder="Enter ID to Search"> <br>
<input type="submit" name="search" value="Search data">
</form>
<?php
include 'connection.php';
if(isset($_POST['search']))
{
$id = $_POST['id'];
$query = "SELECT * FROM students  where id='$id'";
$query_run = mysqli_query($conn,$query);
while ($row = mysqli_fetch_array($query_run))
{
?>
<form action="" method="POST">
<input type="hidden" name="id" value="<?php  echo $row['id']?>" /><br>
<input type="text" name="name" value="<?php echo $row['name']?>"/><br>
<input type="text" name="address" value="<?php echo $row['address']?>"/><br>
<input type="text" name="email" value="<?php echo $row['email']?>"/><br>
<input type="text" name="password" value="<?php echo $row['password']?>"/><br>
</form>
<?php
}
}
?>
</center>
</body>
</html>
