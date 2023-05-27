<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>
</head>

<body>
    <center>
        <hr>
        <h1>CRUD Operation</h1>
        <hr><br>
        <div class="container">
            <?php
            include 'connection.php';
            $no = 1;
            $query = "SELECT *FROM `students`;";
            $result = mysqli_query($conn, $query) or die("Query Faild..");

            if (mysqli_num_rows($result) > 0) {
            ?>
                <table border="">
                    <tr>
                        <th>Sr No</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>E-mail</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><button><a href="update.php?id=<?php echo $row['id']; ?>">UPDATE</a></button>
                            <td>
                            <td><button><a href="delete.php?id=<?php echo $row['id']; ?>">DELETE</a></button>
                            <td>
                        </tr>
                <?php
                        $no++;
                    }
                } else {
                    echo "<h2> No Records Found..</h2>";
                }
                ?>
                </table><br>
                <hr>
                <button><a href="insert.php">INSERT</a></button>
                <hr>
                <button><a href="search.php">SEARCH</a></button>
                <hr> 
        </div>
    </center>
</body>

</html>