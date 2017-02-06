<?php
$message = '';

if (isset($_POST['btn'])) {

    $message = $obj_smart->save_project_info($_POST);
}
?>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class=" panel-heading text-center">
                <h3 class="text-primary">Smart IT Zone</h3>
            </div>
            <div class="panel-heading page-header text-center lead">
                <u class="text-success">Add Project Information</u><br/>
                <p class="text-success"><?php echo $message; ?></p>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-lg-3">Project Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="project_name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Project Type</label>
                        <div class="col-lg-9">
                            <select class="form-control" name="project_type">
                                <option>--Select Project Type--</option>
                                <option value="1">Complete</option>
                                <option value="2">On-going</option>
                                <option value="3">Up-coming</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Location</label>
                        <div class="col-lg-9">
                            <input type="text" name="project_location" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Work Description</label>
                        <div class="col-lg-9">
                            <textarea name="project_description" class="form-control" rows='4'></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Contact Person</label>
                        <div class="col-lg-9">
                            <input type="text" name="contact_person" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3"></label>
                        <div class="col-jg-offset-3 col-lg-9">
                            *Image type should be jpg or png.
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Image One</label>
                        <div class="col-lg-9">
                            <input type="file"  name="image_one" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Image Two</label>
                        <div class="col-lg-9">
                            <input type="file"  name="image_two">
                        </div>
                    </div>
                    <div class="form-group">

                        <label class="control-label col-lg-3">Image Three</label>

                        <div class="col-lg-9">

                            <input type="file"  name="image_three">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-lg-3">Image Four</label>

                        <div class="col-lg-9">

                            <input type="file"  name="image_four">

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-lg-3">Image Five</label>

                        <div class="col-lg-9">

                            <input type="file"  name="image_five">

                        </div>

                    </div>


                    <div class="form-group">

                        <label class="control-label col-lg-3">Video Link</label>

                        <div class="col-lg-9">

                            <input type="text" name="video_link" class="form-control">

                        </div>

                    </div>
                    <div class="form-group">

                        <label class="control-label col-lg-3">Publication Status</label>

                        <div class="col-lg-9">

                            <select class="form-control" name="publication_status">

                                <option>--Select publication status--</option>

                                <option value="1">Publish</option>

                                <option value="0">Unpublish</option>

                            </select>

                        </div>

                    </div>

                    <div class="form-group">

                        <label class="control-label col-lg-3"></label>

                        <div class="col-jg-offset-3 col-lg-9">

                            <input type="submit" name="btn"  value="Save Project Info" class="btn btn-primary btn-block">

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>