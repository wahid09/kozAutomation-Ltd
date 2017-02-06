<?php
$message = '';
if (isset($_GET['status'])) {
    $admin_id = $_GET['id'];
    if ($_GET['status'] == 'delete') {
        $message = $obj_admin->delete_admin_info_by_id($admin_id);
    }
}
$query_result = $obj_admin->select_all_admin_info();
?>

<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading page-header text-center lead">
                <u class="text-success">Manage Admin Information</u><br/>
                <p class="text-success"><?php echo $message; ?>
                    <?php
                    if (isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    }
                    ?>
                </p>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Admin Name</th>
                            <th>Email Address</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        while ($admin_info = mysqli_fetch_assoc($query_result)) {
                            extract($admin_info);
//                            $password = md5($password);
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $i; ?></td>
                                <td><?php echo $admin_name; ?></td>
                                <td><?php echo $email_address; ?></td>
                                <td><?php echo $password; ?></td>
                                <td class="center">
                                    <a href="edit_admin.php?id=<?php echo $admin_id; ?>" class="btn btn-warning" title="Edit">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="?status=delete&&id=<?php echo $admin_id; ?>" class="btn btn-danger" title="Delete" onclick="return check_delete_status();">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
                <!-- /.table-responsive -->

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>