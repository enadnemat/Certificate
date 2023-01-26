<?php
include 'dbconnect.php';


if (isset($_GET['id'])) {
    $certificate_id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM certificate WHERE id = '$certificate_id'");
    $stmt->execute();
    header('Location: viewCertificate.php');
}

?>
