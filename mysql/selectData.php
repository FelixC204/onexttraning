<?php
include 'connect.php';
$conn = connect();
$sql = "SELECT * FROM MyGuests";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h2>Table</h2>
        <table class="table ">
            <tr>
                <th>id</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>email</th>
                <th>reg_date</th>
            </tr>
            <?php
            foreach ($conn->query($sql) as $row) {
            ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['firstname'] ?></td>
                    <td><?php echo $row['lastname'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['reg_date'] ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-1BmE4kSBQ01Jzj7x4U8s5v5G2b8fKTK9PIWmI1nU2mUZYY3zZVZ4z3f5V9zvNk7" crossorigin="anonymous"></script>
</body>

</html>
