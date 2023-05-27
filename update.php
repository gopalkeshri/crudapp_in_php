<?php
if (isset($_POST['submit'])) {
    include 'connection.php';

    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id = $_GET['id'];

    $query = "UPDATE `students` SET `name` = '$name', `address` = 
    '$address', `email` = '$email', `password` = '$password' 
    WHERE `id` = '$id';";

    $result = mysqli_query($conn, $query) or die("Query Faild..");

    if (isset($result)) {
        header("location:index.php");
    } else {
        echo "<h2>Data Not Insert</h2>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>

<body>
    <center>
        <hr>
        <h1>Insert Data</h1>
        <hr>
        <div class="container">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <table border="">
                    <tr>
                        <th><label for="name">Name:</label></th>
                        <td><input type="text" name="name" id="" placeholder="Enter Name"><br><br></td>
                    </tr>

                    <tr>
                        <th><label for="name">Address:</label></th>
                        <td><textarea name="address" id="" cols="30" rows="5" placeholder="Enter Address"></textarea><br><br></td>
                    </tr>
                    <tr>
                        <th><label for="name">Email:</label></th>
                        <td><input type="text" name="email" id="" placeholder="Enter E-mail"><br><br></td>
                    </tr>
                    <tr>
                        <th><label for="name">Password:</label></th>
                        <td><input type="text" name="password" id="" placeholder="Enter Password"><br><br></td>
                    </tr>
                    <tr>
                        <th><button><a href="index.php">Back</a></button></th>
                        <td><input type="submit" name="submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    </center>
</body>

</html>