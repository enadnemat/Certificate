    <?php
    include 'dbconnect.php';

    $student_number = $_GET['student_number'];
    $name = $_GET['name'];
    $major = $_GET['major'];
    $password = $_GET['password'];

    $stmt = $conn->prepare("INSERT INTO student (student_number, name, major , password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $student_number, $name, $major, $password);
    $stmt->execute();
    header("Location:viewStdCertificate.php?student_number=$student_number");
    ?>