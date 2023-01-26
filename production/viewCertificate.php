<?php include 'topbar.html' ?>
    <div class="right_col" role="main">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>View all Certificates</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Certificate name</th>
                            <th>Student ID</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        include 'dbconnect.php';

                        $sql = "SELECT * FROM certificate";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            foreach ($result as $certificate) {
                                ?>
                                <tr>
                                    <td><?= $certificate['id'] ?></td>
                                    <td><?= $certificate['name'] ?></td>
                                    <td><?= $certificate['student_id'] ?></td>
                                    <td><?= $certificate['status'] ?></td>
                                    <td>
                                        <a href="updated.php?id=<?= $certificate['id']?>" class="btn btn-success">Change
                                            Status</a>
                                        <a href="delete.php?id=<?= $certificate['id'] ?>"
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
            </div>
        </div>
    </div>
<?php include 'footer.html' ?>