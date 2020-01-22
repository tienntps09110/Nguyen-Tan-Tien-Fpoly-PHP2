<?php
    class AuthorModel extends DB{
        public function author_detail($url_name){
            $query = "SELECT * FROM author WHERE url_name='$url_name'";
            $db = new DB();
            return $db->execute1($query);
        }
        public function author_id($id){
            $query = "SELECT * FROM author WHERE id='$id'";
            $db = new DB();
            return $db->execute1($query);
        }
        public function author_all(){
            $query = "SELECT * FROM author";
            $db = new DB();
            return $db->execute1($query);
        }
        public function edit_author($name, $info, $url_name, $date_birth, $home_town, $image, $id){
            $query = "UPDATE author SET name='$name',info='$info',url_name='$url_name',date_birth='$date_birth',home_town='$home_town',image='$image' WHERE id ='$id'";
            $db = new DB();
            return $db->execute1($query);
        }
        public function add_author($name, $info, $url_name, $date_birth, $home_town, $image){
            $query = "INSERT INTO author(name,info,url_name,date_birth,home_town,image) VALUES('$name','$info','$url_name','$date_birth','$home_town','$image')";
            $db = new DB();
            return $db->execute1($query);
        }
        function delete_author($id){
            $query = "DELETE FROM author WHERE id='$id'";
            $db = new DB();
            return $db->execute1($query);
        }
    }
?>