<?php

if (isset($_POST['btn'])) {

    $message = $obj_smart->update_project_info($_POST);

}

$project_id = $_GET['id'];

$query_result = $obj_smart->select_project_info_by_id($project_id);

$project_info = mysqli_fetch_assoc($query_result);

extract($project_info);

?>



<div class="row">

    <div class="col-lg-12">

        <div class="panel panel-default">
            <div class=" panel-heading text-center">
                <h3 class="text-primary">Smart IT Zone</h3>
            </div>

            <div class=" col-lg-12 panel-heading page-header ">

                <div class="col-lg-1">

                    <p>

                        <a href="manage_project_smart.php" class="btn btn-primary" title="back to manage project">

                            <span class="glyphicon glyphicon-backward"></span>

                        </a>

                    </p>

                </div>

                <div class="col-lg-10 text-center lead">

                    <u class="text-success">Edit Project Information</u><br/>

                </div>

            </div>

            <div class="panel-body">

                <form name="edit_project_form" class="form-horizontal" action="" method="post" enctype="multipart/form-data">

                    <div class="form-group">

                        <label class="control-label col-lg-3">Project Name</label>

                        <div class="col-lg-9">

                            <input type="text" name="project_name" value="<?php echo $project_name; ?>" class="form-control">

                            <input type="hidden" name="project_id" value="<?php echo $project_id; ?>" class="form-control">

                        </div>

                    </div>



                    <div class="form-group">

                        <label class="control-label col-lg-3">Project Type</label>

                        <div class="col-lg-9">

                            <select class="form-control" name="project_type">

                                <option value="1">Complete</option>

                                <option value="2">On-going</option>

                                <option value="3">Up-coming</option>

                            </select>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-lg-3"> Location</label>

                        <div class="col-lg-9">

                            <input type="text" name="project_location" value="<?php echo $project_location; ?>" class="form-control">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-lg-3">Work Description</label>

                        <div class="col-lg-9">

                            <textarea name="project_description" class="form-control" rows='4'><?php echo $project_description; ?></textarea>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-lg-3">Contact Person</label>

                        <div class="col-lg-9">

                            <input type="text" name="contact_person" value="<?php echo $contact_person; ?>" class="form-control">

                        </div>

                    </div>
                    <div class="form-group">

                        <label class="control-label col-lg-3">Video Link</label>

                        <div class="col-lg-9">

                            <input type="text" name="video_link" value="<?php echo $video_link; ?>" class="form-control">

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

                            <input type="file"  name="image_one" >

                            <img src="<?php echo $image_one; ?>" alt="" class="img-responsive" height="150" width="250">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-lg-3">Update All Image</label>

                        <div class="col-lg-3">

                            <p>

                                <a href="update_image_smart.php?id=<?php echo $project_id; ?>" class="btn btn-info" title="Update all Image of this project">

                                    <span class="glyphicon glyphicon-picture"></span>

                                </a>

                            </p>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-lg-3">Publication Status</label>

                        <div class="col-lg-9">

                            <select class="form-control" name="publication_status">

                                <option value="1">Publish</option>

                                <option value="0">Unpublish</option>

                            </select>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-lg-3"></label>

                        <div class="col-jg-offset-3 col-lg-9">

                            <input type="submit" name="btn"  value="Update Project Info" class="btn btn-success btn-block">

                        </div>

                    </div>

                </form> 

            </div>

        </div>

    </div>

</div>

<script>

    document.forms['edit_project_form'].elements['publication_status'].value = '<?php echo $publication_status; ?>';

    document.forms['edit_project_form'].elements['project_type'].value = '<?php echo $project_type; ?>';

</script>

