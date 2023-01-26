<?php
require 'dbconnect.php';

if (isset($_GET['update'])) {

    $status = $_GET['status'];
    $certificate_id = $_GET['id'];

    $stmt = $conn->prepare("UPDATE certificate SET status='$status' WHERE id = '$certificate_id'");
    $stmt->execute();
    header('Location: viewCertificate.php');
}
?>
