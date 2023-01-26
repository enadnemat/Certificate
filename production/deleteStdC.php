<?php
include 'dbconnect.php';


if (isset($_GET['id'])) {
    $certificate_id = $_GET['id'];
    $student_number = $_GET['student_number'];

    $stmt = $conn->prepare("DELETE FROM certificate WHERE id = '$certificate_id'");
    $stmt->execute();
    header('Location: viewStdCertificate.php?student_number='.$student_number);
}

?>
