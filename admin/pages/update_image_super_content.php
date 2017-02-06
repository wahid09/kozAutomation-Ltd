<?php
if (isset($_POST['btn'])) {
    $message = $obj_super->update_image_info($_POST);
}
$project_id = $_GET['id'];
$query_result = $obj_super->select_project_info_by_id($project_id);
$project_info = mysqli_fetch_assoc($query_result);
extract($project_info);
?>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class=" panel-heading text-center">
                <h3 class="text-primary">Super Shine Skill Development Center</h3>
            </div>
            <div class=" col-lg-12 panel-heading page-header ">
                <div class="col-lg-2">
                    <p>
                        <a href="manage_project_super.php" class="btn btn-primary" title="back to manage project">
                            <span class="glyphicon glyphicon-backward"></span>
                        </a>
                        <a href="edit_project_super.php?id=<?php echo $project_id; ?>" class="btn btn-warning" title="Edit">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                    </p>
                </div>
                <div class="col-lg-8 text-center lead">
                    <u class="text-success">Update All Images</u><br/>
                </div>
            </div>
            <div class="panel-body">
                <form name="edit_project_form" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-lg-3">Project Name</label>
                        <div class="col-lg-9">
                            <input type="text" value="<?php echo $project_name; ?>" class="form-control" readonly>
                            <input type="hidden" name="project_id" value="<?php echo $project_id; ?>" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-3">Project Type</label>
                        <div class="col-lg-9">
                            <input type="text" value="<?php
                            if ($project_type == 1) {
                                echo 'Complete';
                            } else if ($project_type == 2) {
                                echo 'On-going';
                            } else {
                                echo 'Up-coming';
                            }
                            ?>" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3"></label>
                        <div class="col-jg-offset-3 col-lg-9">
                            * Image type should be jpg or png.
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Image One</label>
                        <div class="col-lg-3">
                            <input type="file"  name="image_one" required>
                            <img src="<?php echo $image_one; ?>" alt="" class="img-responsive" height="150" width="250">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Image Two</label>
                        <div class="col-lg-3">
                            <input type="file"  name="image_two" required>
                            <img src="<?php echo $image_two; ?>" alt="" class="img-responsive" height="150" width="250">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Image Three</label>
                        <div class="col-lg-3">
                            <input type="file"  name="image_three" required>
                            <img src="<?php echo $image_three; ?>" alt="" class="img-responsive" height="150" width="250">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Image Four</label>
                        <div class="col-lg-3">
                            <input type="file"  name="image_four" required>
                            <img src="<?php echo $image_four; ?>" alt="" class="img-responsive" height="150" width="250">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Image Five</label>
                        <div class="col-lg-3">
                            <input type="file"  name="image_five" required>
                            <img src="<?php echo $image_five; ?>" alt="" class="img-responsive" height="150" width="250">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3"></label>
                        <div class="col-jg-offset-3 col-lg-9">
                            <input type="submit" name="btn"  value="Update Image" class="btn btn-success btn-block">
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>
<script>
    document.forms['edit_project_form'].elements['project_type'].value = '<?php echo $project_type; ?>';
</script>
