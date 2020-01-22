<?php
    class Author extends Controller{
        function info($url_name){
            $db = $this->model("AuthorModel");
            $db1 = $this->model("BooksModel");
            $id_author = $db->author_detail($url_name);
            foreach($id_author->fetchAll() as $author){
            }
            $this->view("masterlayout2",[
                "page"=>"single_blog",
                "author"=> $db->author_detail($url_name),
                "books"=> $db1->author_book($author["id"]),
            ]);
        }
        
        function erorr(){
            $this->view("masterlayout", [
                "page"=> "erorr"
            ]);
        }
    }
?>