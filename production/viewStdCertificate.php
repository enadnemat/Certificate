<?php
require 'dbconnect.php';
$student_id = $_GET['student_number'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Certificate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

    </style>
</head>

<body>
    <div class="container mt-5">
        <h6 class="m-2">View all certificates for student number: <?php echo $student_id ?></h6>
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Certificate name</th>
                <th>Student ID</th>
                <th>Photo</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            include 'dbconnect.php';

            $sql = "SELECT * FROM certificate where student_id ='" . $student_id . "' ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                foreach ($result as $certificate) {
                    ?>
                    <tr>
                        <td><?= $certificate['id'] ?></td>
                        <td><?= $certificate['name'] ?></td>
                        <td><?= $certificate['student_id'] ?></td>
                        <td><?= $certificate['photo'] ?></td>
                        <td><?= $certificate['status'] ?></td>
                        <td>
                            <a href="deleteStdC.php?id=<?= $certificate['id'] ?>&student_number=<?= $certificate['student_id'] ?>"
                               class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
    <div class="container">
        <a href="certificate.php?student_number=<?= $certificate['student_id'] ?>" class="btn btn-primary">Add
            Certificate</a>
        <a href="index.html" class="btn btn-outline-danger">Logout</a>
    </div>
</body>
</html>
