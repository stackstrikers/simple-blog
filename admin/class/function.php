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
}




