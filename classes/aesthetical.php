<?php

require_once 'db_connect.php';

class Aesthetical extends dbConnect {

    protected $link;

    public function __construct() {
        $this->link = $this->database_connection();
    }

    public function save_project_info($data) {
        $directory = '../assets/images/project_images/';
        $target_file = $directory . $_FILES['image_one']['name'];
        $target_file_two = $directory . $_FILES['image_two']['name'];
        $target_file_three = $directory . $_FILES['image_three']['name'];
        $target_file_four = $directory . $_FILES['image_four']['name'];
        $target_file_five = $directory . $_FILES['image_five']['name'];
        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        $file_type_two = pathinfo($target_file_two, PATHINFO_EXTENSION);
        $file_type_three = pathinfo($target_file_three, PATHINFO_EXTENSION);
        $file_type_four = pathinfo($target_file_four, PATHINFO_EXTENSION);
        $file_type_five = pathinfo($target_file_five, PATHINFO_EXTENSION);
        $file_size = $_FILES['image_one']['size'];
        $file_size_two = $_FILES['image_two']['size'];
        $file_size_three = $_FILES['image_three']['size'];
        $file_size_four = $_FILES['image_four']['size'];
        $file_size_five = $_FILES['image_five']['size'];
        $check = getimagesize($_FILES['image_one']['tmp_name']);
//        $check_two = getimagesize($_FILES['image_two']['tmp_name']);
//        $check_three = getimagesize($_FILES['image_three']['tmp_name']);
//        $check_four = getimagesize($_FILES['image_four']['tmp_name']);
//        $check_five = getimagesize($_FILES['image_five']['tmp_name']);
//        if ($check || $check_two || $check_three || $check_four || $check_five) {
        if ($check) {
            if (file_exists($target_file || $target_file_two || $target_file_three || $target_file_four || $target_file_five)) {
                die("File(s) already uploaded. plese try another");
            } else {
                if ($file_type != 'jpg' && $file_type != 'JPG' && $file_type != 'png' && $file_type  != 'PNG') {
                    die('The file type(s) is(are) not valid. Please use jpg or png');
                } else {

//                    if ($file_size > 2048000) {
//                        die("File(s) size is(are) too large. Use below 2 Mb");
//                    } else {
                        move_uploaded_file($_FILES['image_one']['tmp_name'], $target_file);
                        move_uploaded_file($_FILES['image_two']['tmp_name'], $target_file_two);
                        move_uploaded_file($_FILES['image_three']['tmp_name'], $target_file_three);
                        move_uploaded_file($_FILES['image_four']['tmp_name'], $target_file_four);
                        move_uploaded_file($_FILES['image_five']['tmp_name'], $target_file_five);
                        extract($data);
                        $sql = "INSERT INTO tbl_aesthetical (project_name, project_type, project_location, project_description, contact_person, image_one, image_two, image_three, image_four, image_five, video_link, publication_status)"
                                . " VALUES ('$project_name', '$project_type','$project_location','$project_description','$contact_person','$target_file', '$target_file_two', '$target_file_three', '$target_file_four', '$target_file_five', '$video_link', '$publication_status')";
                        if (mysqli_query($this->link, $sql)) {
                            $message = "Project info save successfully";
                            return $message;
                        } else {
                            die('Query problem' . mysqli_error($this->link));
                        }
                    }
                }
//            }
        } else {
            die('The file you upload is not image. Plese use valid image file');
        }
    }

    public function select_all_project_info() {
        $sql = "SELECT * FROM tbl_aesthetical WHERE deletion_status = 0";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function select_project_info_by_id($project_id) {
        $sql = "SELECT * FROM tbl_aesthetical WHERE project_id = '$project_id' ";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function unpublished_project_info_by_id($project_id) {
        $sql = "UPDATE tbl_aesthetical SET publication_status = 0 WHERE project_id = '$project_id' ";
        if (mysqli_query($this->link, $sql)) {
            $message = 'Project info unpublished successfully';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function published_project_info_by_id($project_id) {
        $sql = "UPDATE tbl_aesthetical SET publication_status = 1 WHERE project_id = '$project_id' ";
        if (mysqli_query($this->link, $sql)) {
            $message = 'Project info published successfully';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function update_project_info($data) {
        extract($data);
        $new_image = $_FILES['image_one']['name'];
        if ($new_image) {
            $directory = '../assets/images/project_images/';
            $target_file = $directory . $_FILES['image_one']['name'];
            $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
            $file_size = $_FILES['image_one']['size'];
            $check = getimagesize($_FILES['image_one']['tmp_name']);
            if ($check) {
//                if (file_exists($target_file)) {
//                    die("File already uploaded. Plese try another.");
//                } else {
                    if ($file_type != 'jpg' && $file_type != 'JPG' && $file_type != 'png' && $file_type != 'PNG') {
                        die('The file type is not valid. Please use jpg or png.');
                    } else {
//                        if ($file_size > 2048000) {
//                            die("File size is too large. Use below 2 Mb");
//                        } else {
                            move_uploaded_file($_FILES['image_one']['tmp_name'], $target_file);
                            $sql = "UPDATE tbl_aesthetical SET project_name = '$project_name', project_type = '$project_type', project_location = '$project_location', project_description = '$project_description', contact_person = '$contact_person', image_one='$target_file', video_link = '$video_link', publication_status = '$publication_status' WHERE project_id = '$project_id' ";
                            if (mysqli_query($this->link, $sql)) {
                                $_SESSION['message'] = "Project info Update successfully";
                                header('Location: manage_project_aesthetical.php');
                            } else {
                                die('Query problem' . mysqli_error($this->link));
                            }
                        }
//                    }
//                }
            } else {
                die('The file you upload is not image. Plese use valid image file');
            }
        } else {
            $sql = "UPDATE tbl_aesthetical SET project_name = '$project_name', project_type = '$project_type', project_location = '$project_location', project_description = '$project_description', contact_person = '$contact_person', video_link = '$video_link', publication_status = '$publication_status'  WHERE project_id = '$project_id' ";
            if (mysqli_query($this->link, $sql)) {
                $_SESSION['message'] = "Project info update successfully";
                header('Location: manage_project_aesthetical.php');
            } else {
                die('Query problem' . mysqli_error($this->link));
            }
        }
    }

    public function update_image_info($data) {
        extract($data);
        $new_image = $_FILES['image_one']['name'];
        $new_image_two = $_FILES['image_two']['name'];
        $new_image_three = $_FILES['image_three']['name'];
        $new_image_four = $_FILES['image_four']['name'];
        $new_image_five = $_FILES['image_five']['name'];
        if ($new_image || $new_image_two || $new_image_three || $new_image_four || $new_image_five) {
            $directory = '../assets/images/project_images/';
            $target_file = $directory . $_FILES['image_one']['name'];
            $target_file_two = $directory . $_FILES['image_two']['name'];
            $target_file_three = $directory . $_FILES['image_three']['name'];
            $target_file_four = $directory . $_FILES['image_four']['name'];
            $target_file_five = $directory . $_FILES['image_five']['name'];
            $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
            $file_size = $_FILES['image_one']['size'];
            $check = getimagesize($_FILES['image_one']['tmp_name']);
            if ($check) {
//                if (file_exists($target_file)) {
//                    die("Files already uploaded. Plese try another.");
//                } else {
                    if ($file_type != 'jpg' && $file_type != 'JPG' && $file_type != 'png' && $file_type != 'PNG') {
                        die('The file(s) type is(are) not valid. Please use jpg or png.');
                    } else {
//                        if ($file_size > 2048000) {
//                            die("File(s) size is(are) too large. Use below 2 Mb");
//                        } else {
                            move_uploaded_file($_FILES['image_one']['tmp_name'], $target_file);
                            move_uploaded_file($_FILES['image_two']['tmp_name'], $target_file_two);
                            move_uploaded_file($_FILES['image_three']['tmp_name'], $target_file_three);
                            move_uploaded_file($_FILES['image_four']['tmp_name'], $target_file_four);
                            move_uploaded_file($_FILES['image_five']['tmp_name'], $target_file_five);
                            $sql = "UPDATE tbl_aesthetical SET image_one='$target_file', image_two='$target_file_two', image_three = '$target_file_three', image_four='$target_file_four', image_five='$target_file_five' WHERE project_id = '$project_id' ";
                            if (mysqli_query($this->link, $sql)) {
                                $_SESSION['message'] = "Image update successfully";
                                header('Location: manage_project_aesthetical.php');
                            } else {
                                die('Query problem' . mysqli_error($this->link));
                            }
                        }
//                    }
//                }
            } else {
                die('The file you upload is not image. Plese use valid image file');
            }
        }
    }

    public function delete_project_info_by_id($project_id) {
        $sql = "UPDATE tbl_aesthetical SET deletion_status = 1 WHERE project_id = '$project_id' ";
//        $sql = "DELETE FROM tbl_aesthetical WHERE project_id = '$project_id' ";
        if (mysqli_query($this->link, $sql)) {
            $message = "Project info delete successfully";
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

}
