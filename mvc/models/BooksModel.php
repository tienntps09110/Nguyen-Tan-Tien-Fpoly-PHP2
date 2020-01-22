<?php
    class BooksModel extends DB{
        public function add_books($name,$content,$pages,$publish_house,$date_publish,$cover_type,$width_height,$price,$sale_price,$image,$total,$url_book,$id_type,$id_author,$id_company){
            $query = "INSERT INTO books(name,content,pages,publish_house,date_publish,cover_type,width_height,price,sale_price,image,total,views,url_book,status,id_type,id_author,id_company) VALUES('$name','$content','$pages','$publish_house','$date_publish','$cover_type','$width_height','$price','$sale_price','$image','$total',0,'$url_book',1,'$id_type','$id_author','$id_company')";
            $db = new DB();
            return $db->execute1($query);
        }
        public function edit_books($name,$content,$pages,$publish_house,$date_publish,$cover_type,$width_height,$price,$sale_price,$image,$total,$url_book,$id_type,$id_author,$id_company, $id){
            $query = "UPDATE books SET name='$name', content='$content', pages='$pages',  publish_house='$publish_house', date_publish='$date_publish', cover_type='$cover_type', width_height='$width_height', price='$price', sale_price='$sale_price', image='$image', total='$total', url_book='$url_book', id_type='$id_type', id_author='$id_author', id_company='$id_company' WHERE id ='$id'";
            $db = new DB();
            return $db->execute1($query);
        }
        public function adbooks_all(){
            $query = "SELECT * FROM books ORDER BY id DESC";
            $db = new DB();
            return $db->execute1($query);
        }
        public function books_all(){
            $query = "SELECT * FROM books ORDER BY id ASC LIMIT 8";
            $db = new DB();
            return $db->execute1($query);
        }
        public function books_ty(){
            $query = "SELECT * FROM books WHERE id_type=1 ORDER BY id ASC LIMIT 8";
            $db = new DB();
            return $db->execute1($query);
        }
        public function books_sale(){
            $db = new DB();
            $query = "SELECT * FROM books WHERE sale_price > 0 ORDER BY id ASC LIMIT 8";
            return $db->execute1($query);
        }
        public function books_detail($url_book){
            $db = new DB();
            $query = "SELECT * FROM books WHERE url_book='$url_book'";
            return $db->execute1($query);
        }
        public function books_id($id){
            $db = new DB();
            $query = "SELECT * FROM books WHERE id='$id'";
            return $db->execute1($query);
        }
        public function tacgia_book($id_author){
            $db = new DB();
            $query = "SELECT * FROM author WHERE id='$id_author'";
            return $db->execute1($query);
        }
        public function company_book($id_company){
            $db = new DB();
            $query = "SELECT * FROM company WHERE id='$id_company'";
            return $db->execute1($query);
        }
        public function author_book($id_author){
            $db = new DB();
            $query = "SELECT * FROM books WHERE id_author='$id_author' ORDER BY views DESC LIMIT 5";
            return $db->execute1($query);
        }
        public function comment_book($id_comment){
            $db = new DB();
            $query = "SELECT c.*, u.username,u.image FROM comment_books c JOIN user u ON u.id=c.id_user WHERE c.id_book='$id_comment' ORDER BY id DESC";
            return $db->execute1($query);
        }
        public function ramdom_books(){
            $db = new DB();
            $query = "SELECT * FROM books ORDER BY RAND() LIMIT 3";
            return $db->execute1($query);
        }
        public function same_type_books($id_type){
            $db = new DB();
            $query = "SELECT * FROM books WHERE id_type='$id_type' ORDER BY RAND() LIMIT 6";
            return $db->execute1($query);
        }
        function view_detail($views,$id_book){
            $db = new DB();
            $query = "UPDATE books SET views='$views' WHERE id='$id_book'";
            return $db->execute1($query);
        }
        function type_books($id_type){
            $db = new DB();
            $query = "SELECT * FROM books WHERE id_type='$id_type'";
            return $db->execute1($query);
        }
        function select_id(){
            $query = "SELECT id FROM books";
            $db = new DB();
            return $db->execute1($query);
        }
        function select_idtype($id_type){
            $query = "SELECT id FROM books WHERE id_type='$id_type'";
            $db = new DB();
            return $db->execute1($query);
        }
        function phantrang($from, $to){
            $query = "SELECT * FROM books LIMIT $from, $to";
            $db = new DB();
            return $db->execute1($query);
        }
        function type_phantrang($from, $to, $id_type){
            $query = "SELECT * FROM books WHERE id_type='$id_type' LIMIT $from, $to";
            $db = new DB();
            return $db->execute1($query);
        }
        function like_phantrang($search){
            $query = "SELECT * FROM books WHERE name like '%$search%'";
            $db = new DB();
            return $db->execute1($query);
        }
        function type_name($id_type){
            $query = "SELECT * FROM type_books WHERE id='$id_type'";
            $db = new DB();
            return $db->execute1($query);
        }
        function delete_books($id){
            $query = "DELETE FROM books WHERE id='$id'";
            $db = new DB();
            return $db->execute1($query);
        }
    }
?>