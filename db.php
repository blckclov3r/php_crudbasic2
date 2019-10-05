<?php
    class Database{
        private $conn;
        public function __construct(){
            $this->conn = mysqli_connect("localhost","root","","mysqldatabasemanager");
            // if($this->conn!=null){
            //     echo "connected";
            // }else{
            //     die("not connected");
            // }
        }

        public function getConn(){
            return $this->conn;
        }

        public function getClose(){
            return $this->conn->close();
        }
    }

?>