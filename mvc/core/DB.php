<?php
    class DB{
        protected $con;
        protected $severname = "localhost";
        protected $username = "root";
        protected $password = "";
        protected $dbname = "shopwit";
        var $db = null;

        function __construct(){
            $this->db = new PDO('mysql:host='.$this->severname.';dbname='.$this->dbname.''.$this->password.'',''.$this->username.'','', array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
            $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        public function execute1($sl){
            $query2 = $this->db->prepare($sl);
            $query2->execute();
            return $query2;
        }
    }
?> 