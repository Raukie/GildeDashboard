<?php

class DB {
    private $username = "root";
    private $password = "";
    private $servername = "localhost";
    private $database = "gilde_datacenter";

    public $conn;

    public function __construct(){
        $this->conn = mysqli_connect($this->servername, $this->username,  $this->password, $this->database);
        if ($this->conn  -> connect_errno || $this->conn  == null) {
            echo "Error: " . $this->conn  -> connect_error;
            exit();
        }
    }

    public function Open(){
        if(!$this->IsOpen()){
            $this->conn->open();
        }
    }

    public function Close(){
        $this->conn->close();
    }

    public function IsOpen(){
        return (bool)$this->conn->ping();
    }
}

$db = new DB();
