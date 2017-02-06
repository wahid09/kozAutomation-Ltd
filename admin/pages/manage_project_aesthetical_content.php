<?php
$message = '';

if (isset($_GET['status'])) {

    $project_id = $_GET['id'];

    if ($_GET['status'] == 'unpublished') {

        $message = $obj_aesthetical->unpublished_project_info_by_id($project_id);
    } else if ($_GET['status'] == 'published') {

        $message = $obj_aesthetical->published_project_info_by_id($project_id);
    } else if ($_GET['status'] == 'delete') {

        $message = $obj_aesthetical->delete_project_info_by_id($project_id);
    }
}



$query_result = $obj_aesthetical->select_all_project_info();
?>



<!-- /.row -->

<div class="row">

    <div class="col-lg-12">

        <div class="panel panel-default">
            <div class=" panel-heading text-center">
                <h3 class="text-primary">Aesthetical Design Consultant</h3>
            </div>

            <div class="panel-heading page-header text-center lead">

                <u class="text-success"> Manage Project Information</u><br/>

                <p class="text-success"><?php echo $message; ?><?php
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

                            <th>Serial Number</th>

                            <th>Project Name</th>

                            <th>Project Type</th>

                            <th>Location</th>

                            <th>Work Description</th>

                            <th>Contact Person</th>

                            <th>Publication Status</th>

                            <th>Action</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php
                        $i = 1;

                        while ($all_project = mysqli_fetch_assoc($query_result)) {

                            extract($all_project);
                            ?>

                            <tr class="odd gradeX">

                                <td><?php echo $i; ?></td>

                                <td><?php echo $project_name; ?></td>

                                <td class="center"><?php
                                    if ($project_type == 1) {

                                        echo 'Complete';
                                    } else if ($project_type == 2) {

                                        echo 'On-going';
                                    } else {

                                        echo 'Up-coming';
                                    }
                                    ?></td>

                                <td><?php echo $project_location; ?></td>

                                <td><?php echo $project_description; ?></td>

                                <td><?php echo $contact_person; ?></td>

                                <td class="center"><?php
                                    if ($publication_status == 1) {

                                        echo 'Published';
                                    } else {

                                        echo 'Unpublished';
                                    }
                                    ?></td>

                                <td class="center">

                                    <a href="view_project_aesthetical.php?id=<?php echo $project_id; ?>" class="btn btn-success" title="View">

                                        <span class="glyphicon glyphicon-zoom-in"></span>

                                    </a>

                                    <?php if ($publication_status == 1) { ?>

                                        <a href="?status=unpublished&&id=<?php echo $project_id; ?>" class="btn btn-danger" title="Unpublished">

                                            <span class="glyphicon glyphicon-arrow-down"></span>

                                        </a>

                                    <?php } else { ?>

                                        <a href="?status=published&&id=<?php echo $project_id; ?>" class="btn btn-primary" title="Published">

                                            <span class="glyphicon glyphicon-arrow-up"></span>

                                        </a>

                                    <?php } ?>

                                    <a href="edit_project_aesthetical.php?id=<?php echo $project_id; ?>" class="btn btn-warning" title="Edit">

                                        <span class="glyphicon glyphicon-edit"></span>

                                    </a>

                                    <a href="update_image_aesthetical.php?id=<?php echo $project_id; ?>" class="btn btn-info" title="Update all Image of this project">

                                        <span class="glyphicon glyphicon-picture"></span>

                                    </a>

                                    <a href="?status=delete&&id=<?php echo $project_id; ?>" class="btn btn-danger" title="Delete" onclick="return check_delete_status();">

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

            </div>

        </div>

    </div>

</div>