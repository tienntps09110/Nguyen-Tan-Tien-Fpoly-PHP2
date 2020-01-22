<?php
    class TypebooksModel extends DB{
        public function type_all(){
            $query = "SELECT * FROM type_books ORDER BY id";
            $db = new DB();
            return $db->execute1($query);
        }
        public function type_books($url){
            $query = "SELECT * FROM type_books where url_name='$url'";
            $db = new DB();
            return $db->execute1($query);
        }   
        public function type_books_id($id){
            $query = "SELECT * FROM type_books where id='$id'";
            $db = new DB();
            return $db->execute1($query);
        }   
    }
?>