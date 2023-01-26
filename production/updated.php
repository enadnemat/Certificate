<?php require 'dbconnect.php' ; ?>
<?php include 'topbar.html' ?>
<?php

if (isset($_GET['id'])){
$certificate_id = $_GET['id'];
}
?>
<div class="right_col">

    <h1 class="m-3">Edit Status</h1>
    <form action="updatedCode.php" method="get">
        <div class="form-outline">
            <label class="m-3 col"> <span style="font-size: medium">Certificate Id: <strong><?php echo $certificate_id ?></strong></span> <input type="hidden" value="<?php echo $certificate_id ?>"
                                                            class="form-control" name="id"></label>
        </div>
        <div class="form-outline">
            <label class="m-3 col" for="status"> Status: <br>
                <select class="form-control" name='status' required>
                    <option value='approved' name='approved'>Approved</option>
                    <option name='rejected' value='rejected'>Rejected</option>
                </select>
            </label>
        </div>
        <div class="form-outline">
            <label class="m-3 col">
                <button type="submit" class="btn btn-primary">Change Status</button>
            </label>
        </div>
    </form>


</div>

<?php include 'footer.html' ?>
