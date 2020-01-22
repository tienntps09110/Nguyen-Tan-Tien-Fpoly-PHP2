<?php
    class AdBooks extends Controller{
        function erorr(){
            $this->view("masterlayout", [
                "page"=> "erorr"
            ]);
        }
        function dashboard(){
            $this->view("masterlayout3",[
                "page"=>"dashboard",
            ]); 
        }
        function books(){
            if(isset($_SESSION["user"]) && $_SESSION["level"] == 2 || $_SESSION["level"] == 3){
                $db = $this->model("BooksModel");
                $this->view("masterlayout3",[
                    "page"=>"tablebooks",
                    "books"=> $db->adbooks_all(),
                ]);  
            }else{
                $this->erorr();
            }
            
        }
        function add_books(){
            if(isset($_SESSION["user"]) && $_SESSION["level"] == 2 || $_SESSION["level"] == 3){
                $db1 = $this->model("AuthorModel");
                $db2 = $this->model("TypebooksModel");
                $db3 = $this->model("CompanyModel");
                $this->view("masterlayout3",[
                    "page"=>"addbooks",
                    "type"=>$db2->type_all(),
                    "author"=>$db1->author_all(),
                    "company"=>$db3->company_all(),
                ]);
            }
        }
        function post_add_books(){
            if(isset($_SESSION["user"]) && $_SESSION["level"] == 2 || $_SESSION["level"] == 3){
                $db = $this->model("BooksModel");
                $db2 = $this->model("ImagesModel");
                $name = $_POST["name"];
                $content = $_POST["content"];
                $pages = $_POST["pages"];
                $publish_house = $_POST["publish_house"];
                $date_publish = $_POST["date_publish"];
                $cover_type = $_POST["cover_type"];
                $width_height = $_POST["width_height"];
                $price = $_POST["price"];
                $sale_price = $_POST["sale_price"];
                $total = $_POST["total"];
                $id_type = $_POST["id_type"];
                $id_author = $_POST["id_author"];
                $id_company = $_POST["id_company"];
                $n = "image";
                $image = $_FILES['image']['name'];

                $url_book =$this->change_text($name);

                $db->add_books($name,$content,$pages,$publish_house,$date_publish,$cover_type,$width_height,$price,$sale_price,$image,$total,$url_book,$id_type,$id_author,$id_company);
                $target_dir = "./public/images/books/$image";  
                move_uploaded_file($_FILES['image']['tmp_name'], $target_dir);
                
                foreach($db->books_all()->fetchAll() as $lastid){}
                $id = $lastid["id"];
                for($i = 1 ; $i <= 6 ; $i++){
                    $img = $n .$i;
                    $img_test = strlen($_FILES[$img]['name']);   
                    if($img_test > 5){
                        $imgg = $_FILES[$img]['name'];
                        $db2->add_images($id, $imgg);
                        $target_dir = "./public/images/books/$imgg";
                        move_uploaded_file($_FILES[$img]['tmp_name'], $target_dir);
                    }else{
                    }
                }
                header('location: ../Adbooks/books#top');
            }
        }
        function edit_books($url){
            if(isset($url) && isset($_SESSION["user"]) && $_SESSION["level"] == 2 || $_SESSION["level"] == 3){
                $db = $this->model("BooksModel");
                $db1 = $this->model("AuthorModel");
                $db2 = $this->model("TypebooksModel");
                $db3 = $this->model("CompanyModel");
                $this->view("masterlayout3",[
                "page"=>"editbooks",
                "books"=> $db->books_detail($url),
                "type"=>$db2->type_all(),
                "author"=>$db1->author_all(),
                "company"=>$db3->company_all(),
                ]);
            }else{
                $this->erorr();
            }
        }
        function post_edit_books(){
            if(isset($_SESSION["user"]) && isset($_POST["id_type"]) && $_SESSION["level"] == 2 || $_SESSION["level"] == 3){
                $db = $this->model("BooksModel");
                $db2 = $this->model("ImagesModel");
                $name = $_POST["name"];
                $url_book = $_POST["url_book"];
                $pages = $_POST["pages"];
                $publish_house = $_POST["publish_house"];
                $date_publish = $_POST["date_publish"];
                $cover_type = $_POST["cover_type"];
                $width_height = $_POST["width_height"];
                $price = $_POST["price"];
                $sale_price = $_POST["sale_price"];
                $total = $_POST["total"];
                $id_type = $_POST["id_type"];
                $id_author = $_POST["id_author"];
                $id_company = $_POST["id_company"];
                $content = $_POST["content"];
                $id = $_POST["id"];
                $views = $_POST["views"];
                $n = "image";
                foreach($db->books_id($id)->fetchAll() as $row){}
                $image = $row["image"];
                $img_testt = strlen($_FILES['image']['name']); 
                if($img_testt > 5){
                   $image = $_FILES['image']['name'];
                }
                for($i = 1 ; $i <= 6 ; $i++){
                    $img = $n .$i;
                    $img_test = strlen($_FILES[$img]['name']);   
                    if($img_test > 5){
                        $imgg = $_FILES[$img]['name'];
                        $db2->add_images($id, $imgg);
                    }else{
                    }
                }
                $db->edit_books($name,$content,$pages,$publish_house,$date_publish,$cover_type,$width_height,$price,$sale_price,$image,$total,$url_book,$id_type,$id_author,$id_company, $id);
                header('location: ../Adbooks/books#top');
            }else{
                $this->erorr();
            }
        }
        function delete_books($url){
            if(isset($url) && isset($_SESSION["user"]) && $_SESSION["level"] == 2 || $_SESSION["level"] == 3){
                $db = $this->model("BooksModel");
                $db->delete_books($url);
                header('location: ../books#top');
            }else{
                $this->erorr();
            }
        }
        function all(){
            if($_SESSION["level"] >1){
                $this->view("masterlayout3",[
                    "page"=>"home",
                ]); 
            }
        }
    }
?>