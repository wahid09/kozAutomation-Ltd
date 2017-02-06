<?php

class dbConnect {

    public function database_connection() {
        $host_name = 'localhost';
//        $user_name = 'kozabl_kwduser';
        $user_name = 'root';
//        $password = '123asdfwq%%uli';
        $password = '';
//        $db_name = 'kozabl_kwdata';
        $db_name = 'db_koz';
        $db_con = mysqli_connect($host_name, $user_name, $password, $db_name);
        if (!$db_con) {
            die('Connection Fail' . mysqli_error($db_con));
        }
        return $db_con;
    }

}
