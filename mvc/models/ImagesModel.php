<?php
    class ImagesModel extends DB{
        public function images_detail_book($id_book){
            $db = new DB();
            $query = "SELECT * FROM image_books WHERE id_book='$id_book'";
            return $db->execute1($query);
        }
        public function add_images($id_book, $image_name){
            $db = new DB();
            $query = "INSERT INTO image_books(id_book,image_name) VALUES('$id_book','$image_name')";
            return $db->execute1($query);
        }
    }
?>