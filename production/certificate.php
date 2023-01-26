<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Certificate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

    </style>
</head>
<body>
<?php
include 'dbconnect.php';
$student_number = $_GET['student_number']
?>
<h1 class="m-3">Enter your certificate information</h1>
<form action="check.php" method="get" class="m-3 col">
    <div class="form-outline">
        <input type="hidden" class="form-control" name="student_number" value="<?php echo $student_number ?>">
    </div>
    <div class="form-outline">
        <label class="m-3 col"> Certificate name : <input type="text" class="form-control" name="name"></label>
    </div>
    <div class="form-outline">
        <label class="m-3 col "> Photo : <input type="file" class="form-control" name="photo"></label>
    </div>
    <div class="form-outline">
        <label class="m-3 col">
            <input type="submit" class="btn btn-primary" value="Submit" name="insertCertificateStd">
        </label>
    </div>
</form>
</body>

</html>