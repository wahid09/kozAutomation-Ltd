<?php
if (isset($_POST['btn'])) {
    $message = $obj_contact->update_contact_info($_POST);
}
$contact_id = $_GET['id'];
$query_result = $obj_contact->select_contact_info_by_id($contact_id);
$contact_info = mysqli_fetch_assoc($query_result);
extract($contact_info);
?>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class=" col-lg-12 panel-heading page-header ">
                <div class="col-lg-1">
                    <p>
                        <a href="manage_contact.php" class="btn btn-primary" title="back to manage contact">
                            <span class="glyphicon glyphicon-backward"></span>
                        </a>
                    </p>
                </div>
                <div class="col-lg-11 text-center lead">
                    <u class="text-success">Edit Contact Information</u><br/>
                </div>
            </div>
            <div class="panel-body">
                <form name="edit_contact_form" class="form-horizontal" action="" method="post">
                    <div class="form-group">
                        <label class="control-label col-lg-3">Contact Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="contact_name" value="<?php echo $contact_name; ?>" class="form-control">
                            <input type="hidden" name="contact_id" value="<?php echo $contact_id; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3"> Email Address</label>
                        <div class="col-lg-9">
                            <input type="email" name="contact_email" value="<?php echo $contact_email; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Message</label>
                        <div class="col-lg-9">
                            <textarea name="contact_message" class="form-control" rows='4'><?php echo $contact_message; ?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-3">Read Status</label>
                        <div class="col-lg-9">
                            <select class="form-control" name="status">
                                <option value="0">Unread</option>
                                <option value="1">Read</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Reply Status</label>
                        <div class="col-lg-9">
                            <select class="form-control" name="reply_status">
                                <option value="0">Not Replied</option>
                                <option value="1">Replied</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3"></label>
                        <div class="col-jg-offset-3 col-lg-9">
                            <input type="submit" name="btn"  value="Update" class="btn btn-success btn-block">
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>
<script>
    document.forms['edit_contact_form'].elements['status'].value = '<?php echo $status; ?>';
    document.forms['edit_contact_form'].elements['reply_status'].value = '<?php echo $reply_status; ?>';
</script>
