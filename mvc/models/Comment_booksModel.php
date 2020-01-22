<?php
    class Comment_booksModel extends DB{
        public function new_comment($id_book,$id_user,$content){
            $query = "INSERT INTO comment_books(id_book,id_user,content) VALUES('$id_book','$id_user','$content')";
            $db = new DB();
            return $db->execute1($query);
        }
        
    }
?>