<?php
Class blogconn{
private $conn;

public function __construct()
{
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = "";
    $dbname = 'blog';

    $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(!$this->conn){
        die("Database Initialisation error");
    }
}

public function admin_login($data)
{
    $match = "SELECT * FROM admininfo";

        if (mysqli_query($this->conn, $match)) {
            $fetchedData = mysqli_query($this->conn, $match);
            $admin_info = mysqli_fetch_assoc($fetchedData);
        }

    $admin_email = $data['admin_email'];
    $admin_pass = md5($data['admin_pass']);

            if(($admin_info['email'] == $admin_email) && ($admin_info['pass'] == $admin_pass)) {
               header("location: admin-dashboard.php");
               session_start();
               $_SESSION['adminId'] = $admin_info['id'];
               $_SESSION['adminEmail'] = $admin_info['id'];
               }
            else {
                header("location: index.php?status=wrong");
            }
        }
}




