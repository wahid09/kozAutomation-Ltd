<?php
$admin_id = $_GET['id'];
$query_result = $obj_admin->select_admin_info_by_id($admin_id);
$admin_info = mysqli_fetch_assoc($query_result);
extract($admin_info);

if (isset($_POST['btn'])) {
    $obj_admin->update_admin_info_by_id($_POST);
}
?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class=" col-lg-12 panel-heading page-header ">
                <div class="col-lg-1">
                    <p>
                        <a href="manage_admin.php" class="btn btn-primary" title="back to manage admin">
                            <span class="glyphicon glyphicon-backward"></span>
                        </a>
                    </p>
                </div>
                <div class="col-lg-11 text-center lead">
                    <u class="text-success">Edit Admin Information</u><br/>
                </div>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="" method="post">
                    <div class="form-group">
                        <label class="control-label col-lg-3">Admin Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="admin_name" value="<?php echo $admin_name; ?>" class="form-control" required>
                            <input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Email Address</label>
                        <div class="col-lg-9">
                            <input type="email" name="email_address" value="<?php echo $email_address; ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Password</label>
                        <div class="col-lg-9">
                            <input type="password" name="password" value="<?php echo $password; ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-9">
                            <input type="submit" name="btn" value="Update Admin Info" class="btn btn-success btn-block">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>