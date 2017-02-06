<?php

require_once 'db_connect.php';

class Admin extends dbConnect {

    public $link;

    public function __construct() {
        $this->link = $this->database_connection();
    }

    public function save_admin_info($data) {
        extract($data);
        $password = md5($password);
        $sql = "INSERT INTO tbl_admin (admin_name, email_address, password) VALUES ('$admin_name', '$email_address', '$password' )";
        if (mysqli_query($this->link, $sql)) {
            $message = "Admin info save successfully";
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function select_all_admin_info() {
        $sql = "SELECT * FROM tbl_admin";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function select_admin_info_by_id($admin_id) {
        $sql = "SELECT * FROM tbl_admin WHERE admin_id = '$admin_id' ";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function update_admin_info_by_id($data) {
        extract($data);
        $password = md5($password);
        $sql = "UPDATE tbl_admin SET admin_name = '$admin_name', email_address = '$email_address', password = '$password' WHERE admin_id = '$admin_id' ";
        if (mysqli_query($this->link, $sql)) {
            $_SESSION['message'] = 'Admin info update successfully';
            header('Location: manage_admin.php');
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function delete_admin_info_by_id($admin_id) {
        $sql = "DELETE FROM tbl_admin WHERE admin_id = '$admin_id' ";
        if (mysqli_query($this->link, $sql)) {
            $message = 'Admin info delete successfully';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

}
