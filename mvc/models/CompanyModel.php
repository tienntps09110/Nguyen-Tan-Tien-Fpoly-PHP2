<?php
    class CompanyModel extends DB{
        public function company_id($id){
            $query = "SELECT * FROM company where id='$id'";
            $db = new DB();
            return $db->execute1($query);
        }   
        public function company_all(){
            $query = "SELECT * FROM company";
            $db = new DB();
            return $db->execute1($query);
        }   
    }
?>