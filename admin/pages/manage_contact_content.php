<?php
$message = '';
if (isset($_GET['status'])) {
    $contact_id = $_GET['id'];
    if ($_GET['status'] == 'read') {
        $message = $obj_contact->read_contact_info_by_id($contact_id);
    } else if ($_GET['status'] == 'unread') {
        $message = $obj_contact->unread_contact_info_by_id($contact_id);
    } else if ($_GET['status'] == 'replied') {
        $message = $obj_contact->replied_contact_info_by_id($contact_id);
    } else if ($_GET['status'] == 'notreplied') {
        $message = $obj_contact->notreplied_contact_info_by_id($contact_id);
    } else if ($_GET['status'] == 'delete') {
        $message = $obj_contact->delete_contact_info_by_id($contact_id);
    }
}

$query_result = $obj_contact->select_all_contact_info();
?>

<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading page-header text-center lead">
                <u class="text-success"> Manage Contact Content</u><br/>
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
                            <th>Contact Name</th>
                            <th>Email Address</th>
                            <th>Message</th>
                            <th>Read Status</th>
                            <th>Reply Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        while ($all_contact = mysqli_fetch_assoc($query_result)) {
                            extract($all_contact);
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $i; ?></td>
                                <td><?php echo $contact_name; ?></td>
                                <td><?php echo $contact_email; ?></td>
                                <td><?php echo $contact_message; ?></td>
                                <td class="center"><?php
                                    if ($status == 0) {
                                        echo 'Unread';
                                    } else {
                                        echo 'Read';
                                    }
                                    ?>
                                    
                                </td>
                                <td class="center"><?php
                                    if ($reply_status == 0) {
                                        echo 'Not Replied';
                                    } else {
                                        echo 'Replied';
                                    }
                                    ?>
                                
                                </td>
                                <td class="center">
                                    
                                    <?php if ($status == 0) { ?>
                                        <a href="?status=read&&id=<?php echo $contact_id; ?>" class="btn btn-success" title="Read">
                                            <span class="glyphicon glyphicon-eye-open"></span>
                                        </a>
                                    <?php } else { ?>
                                        <a href="?status=unread&&id=<?php echo $contact_id; ?>" class="btn btn-primary" title="Unread">
                                            <span class="glyphicon glyphicon-eye-close"></span>
                                        </a>
                                    <?php } ?>
                                    
                                    <?php if ($reply_status == 0) { ?>
                                        <a href="?status=replied&&id=<?php echo $contact_id; ?>" class="btn btn-info" title="Replied">
                                            <span class="glyphicon glyphicon-circle-arrow-right"></span>
                                        </a>
                                    <?php } else { ?>
                                        <a href="?status=notreplied&&id=<?php echo $contact_id; ?>" class="btn btn-info" title="Not Replied">
                                            <span class="glyphicon glyphicon-circle-arrow-left"></span>
                                        </a>
                                    <?php } ?>
                                    <a href="edit_contact.php?id=<?php echo $contact_id; ?>" class="btn btn-warning" title="Edit">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="?status=delete&&id=<?php echo $contact_id; ?>" class="btn btn-danger" title="Delete" onclick="return check_delete_status();">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                    <a href="https://accounts.google.com/ServiceLogin?service=mail&passive=true&rm=false&continue=https://mail.google.com/mail/&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1#identifier" target="blank" class="btn btn-default" title="Reply">
                                        <span class="glyphicon glyphicon-envelope"></span>
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