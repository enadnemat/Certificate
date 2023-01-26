<?php

include "dbconnect.php";

if (isset($_POST['checkAdmin'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT email, password FROM admin WHERE email = '" . $email . "' and password = '" . $password . "'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        if ($row = $result->fetch_assoc()) {
            header("Location: viewCertificate.php");
        }
    } else {
        header("Location:AdminLogin.php");
    }
}

if (isset($_POST['checkStudent'])) {

    $student_number = $_POST['student_number'];
    $password = $_POST['password'];

    $sql = "SELECT student_number ,password FROM student WHERE student_number = '" . $student_number . "' and password = '" . $password . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        if ($row = $result->fetch_assoc()) {
            header("Location: viewStdCertificate.php?student_number=" . $student_number);
        }
    } else {
        header("Location:StudentLogin.php");
    }
}

if (isset($_GET['insertCertificateStd'])) {

    $name = $_GET['name'];
    $photo = $_GET['photo'];
    $std_number = $_GET['student_number'];

    $stmt = $conn->prepare("INSERT INTO certificate (name, photo , student_id) VALUES (?, ? , ? )");
    $stmt->bind_param("sbs", $name, $photo, $std_number);
    $stmt->execute();
    header('Location: viewStdCertificate.php?student_number=' . $std_number);

}
?>
