<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

    </style>
</head>

<body>
<h1 class="m-3">Register form - Student</h1>
<form action="registerStd.php" method="get" class="m-3 col">
    <div class="form-outline">
        <label class="m-3 col"> Student number : <input type="number" class="form-control" min="0" name="student_number"></label>
    </div>
    <div class="form-outline">
        <label class="m-3 col "> Name : <input type="text" class="form-control" name="name"></label>
    </div>
    <div class="form-outline">
        <label class="m-3 col"> Major : <input type="text" class="form-control" name="major"></label>
    </div>
    <div class="form-outline">
        <label class="m-3 col"> Password : <input type="text" class="form-control" name="password"></label>
    </div>
    <div class="form-outline">
        <label class="m-3 col"><button type="submit" class="btn btn-primary">Submit</button></label>
    </div>
</form>
</body>

</html>