<?php
$message = '';

if (isset($_GET['status'])) {

    $project_id = $_GET['id'];

    if ($_GET['status'] == 'unpublished') {

        $message = $obj_dhaka->unpublished_project_info_by_id($project_id);
    } else if ($_GET['status'] == 'published') {

        $message = $obj_dhaka->published_project_info_by_id($project_id);
    } else if ($_GET['status'] == 'delete') {

        $message = $obj_dhaka->delete_project_info_by_id($project_id);
    }
}

$project_id = $_GET['id'];

$query_result = $obj_dhaka->select_project_info_by_id($project_id);

$project_info = mysqli_fetch_assoc($query_result);

extract($project_info);
?>



<div class="row">

    <div class="col-lg-12">

        <div class="panel panel-default">
            <div class=" panel-heading text-center">
                <h3 class="text-primary">The Dhaka Architect & Engineers</h3>
            </div>

            <div class="panel-heading page-header text-center lead">

                <u class="text-success"> View Details</u><br/>

                <p class="text-success"><?php echo $message; ?><?php
                    if (isset($_SESSION['message'])) {

                        echo $_SESSION['message'];

                        unset($_SESSION['message']);
                    }
                    ?>

                </p>

            </div>

            <div class="panel-body">

                <table width="100%" class="table table-striped table-bordered table-hover">

                    <thead>

                        <tr>

                            <th>Project ID</th>

                            <td><?php echo $project_id; ?></td>

                        </tr>

                        <tr>

                            <th>Project Name</th>

                            <td><?php echo $project_name; ?></td>

                        </tr>

                        <tr>

                            <th>Project Type</th>

                            <td><?php
                                if ($project_type == 1) {

                                    echo 'Complete';
                                } else if ($project_type == 2) {

                                    echo 'On-going';
                                } else {

                                    echo 'Up-coming';
                                }
                                ?></td>

                        </tr>

                        <tr>

                            <th>Location</th>

                            <td><?php echo $project_location; ?></td>

                        </tr>

                        <tr>

                            <th>Work Description</th>

                            <td><?php echo $project_description; ?></td>

                        </tr>

                        <tr>

                            <th>Contact Person</th>

                            <td><?php echo $contact_person; ?></td>

                        </tr>

                        <tr>

                            <th>Image One</th>

                            <td><img src="<?php echo $image_one; ?>" alt="" class="img-responsive" height="200" width="300"></td>

                        </tr>

                        <tr>

                            <th>Image Two</th>

                            <td><img src="<?php echo $image_two; ?>" alt="" class="img-responsive" height="200" width="300"></td>

                        </tr>

                        <tr>

                            <th>Image Three</th>

                            <td><img src="<?php echo $image_three; ?>" alt="" class="img-responsive" height="200" width="300"></td>

                        </tr>

                        <tr>

                            <th>Image Four</th>

                            <td><img src="<?php echo $image_four; ?>" alt="" class="img-responsive" height="200" width="300"></td>

                        </tr>

                        <tr>

                            <th>Image Five</th>

                            <td><img src="<?php echo $image_five; ?>" alt="" class="img-responsive" height="200" width="300"></td>

                        </tr>
                        <tr>

                            <th>Video Link</th>

                            <td><?php echo $video_link; ?></td>

                        </tr>

                        <tr>

                            <th>Publication Status</th>

                            <td><?php
                                if ($publication_status == 1) {

                                    echo 'Published';
                                } else {

                                    echo "Unpublished";
                                }
                                ?></td>

                        </tr>

                        <tr>

                            <th>Action</th>

                            <td class="center">

                                <a href="manage_project_dhaka.php" class="btn btn-primary" title="back to manage project">

                                    <span class="glyphicon glyphicon-backward"></span>

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

                                <a href="edit_project_dhaka.php?id=<?php echo $project_id; ?>" class="btn btn-warning" title="Edit">

                                    <span class="glyphicon glyphicon-edit"></span>

                                </a>

                                <a href="update_image_dhaka.php?id=<?php echo $project_id; ?>" class="btn btn-info" title="Update all Image of this project">

                                    <span class="glyphicon glyphicon-picture"></span>

                                </a>

                            </td>

                        </tr>

                    </thead>

                </table>

            </div>

        </div>

    </div>

</div>

