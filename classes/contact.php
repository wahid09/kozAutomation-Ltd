<?php

require_once 'db_connect.php';

class Contact extends dbConnect {

    public $link;

    public function __construct() {
        $this->link = $this->database_connection();
    }

    public function select_all_contact_info() {
        $sql = "SELECT * FROM tbl_contact WHERE deletion_status = 0";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function select_contact_info_by_id($contact_id) {
        $sql = "SELECT * FROM tbl_contact WHERE contact_id = '$contact_id' ";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function read_contact_info_by_id($contact_id) {
        $sql = "UPDATE tbl_contact SET status = 1 WHERE contact_id = '$contact_id' ";
        if (mysqli_query($this->link, $sql)) {
            $message = 'Message read successfully';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function unread_contact_info_by_id($contact_id) {
        $sql = "UPDATE tbl_contact SET status = 0 WHERE contact_id = '$contact_id' ";
        if (mysqli_query($this->link, $sql)) {
            $message = 'Message unread successfully';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function replied_contact_info_by_id($contact_id) {
        $sql = "UPDATE tbl_contact SET reply_status = 1 WHERE contact_id = '$contact_id' ";
        if (mysqli_query($this->link, $sql)) {
            $message = 'Replied successfully';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function notreplied_contact_info_by_id($contact_id) {
        $sql = "UPDATE tbl_contact SET reply_status = 0 WHERE contact_id = '$contact_id' ";
        if (mysqli_query($this->link, $sql)) {
            $message = 'Not replied successfully';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function update_contact_info($data) {
        extract($data);
        $sql = "UPDATE tbl_contact SET contact_name = '$contact_name', contact_email = '$contact_email', contact_message = '$contact_message', status = '$status', reply_status = '$reply_status' WHERE contact_id = '$contact_id' ";
        if (mysqli_query($this->link, $sql)) {
            $_SESSION['message'] = "Contact info update successfully";
            header('Location: manage_contact.php');
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function delete_contact_info_by_id($contact_id) {
        $sql = "UPDATE tbl_contact SET deletion_status = 1 WHERE contact_id = '$contact_id' ";
//        $sql = "DELETE FROM tbl_contact WHERE contact_id = '$contact_id' ";
        if (mysqli_query($this->link, $sql)) {
            $message = "Message delete successfully";
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

}
