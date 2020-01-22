<?php
    class Adauthor extends Controller{
        function erorr(){
            $this->view("masterlayout", [
                "page"=> "erorr"
            ]);
        }
        function author(){
            if(isset($_SESSION["user"]) && $_SESSION["level"] == 2 || $_SESSION["level"] == 3){
                    $db = $this->model("AuthorModel");
                    $this->view("masterlayout3",[
                        "page"=>"tableauthor",
                        "author"=> $db->author_all(),
                    ]); 
            }else{
                $this->erorr();
            }
        }
        function edit_author($id){
            if(isset($_SESSION["user"]) && $_SESSION["level"] == 2 || $_SESSION["level"] == 3){
                $db = $this->model("AuthorModel");
                $this->view("masterlayout3",[
                    "page"=>"editauthor",
                    "author"=>$db->author_id($id),
                ]); 
            }else{
                $this->erorr();
            }
        }
        function post_edit_author(){
            if(isset($_SESSION["user"]) && isset($_POST["id"]) && $_SESSION["level"] == 2 || $_SESSION["level"] == 3){
                $db = $this->model("AuthorModel");
                $name = $_POST["name"];
                $url_name = $_POST["url_name"];
                $date_birth = $_POST["date_birth"];
                $home_town = $_POST["home_town"];
                $info = $_POST["info"];
                $id = $_POST["id"];
                foreach($db->author_id($id)->fetchAll() as $row){}
                $image = $row["image"];
                $img_testt = strlen($_FILES['image']['name']); 
                if($img_testt > 5){
                    $image = $_FILES['image']['name'];
                    $target_dir = "./public/images/author/$image";  
                    move_uploaded_file($_FILES['image']['tmp_name'], $target_dir);
                }
                $db->edit_author($name, $info, $url_name, $date_birth, $home_town, $image, $id);

                $this->view("masterlayout3",[
                    "page"=>"editauthor",
                    "author"=>$db->author_id($_POST["id"]),
                    "success"=>"Cập nhật thành công.",
                ]); 
            }else{
                $this->erorr();
            }
        }
        function add_author(){
            if(isset($_SESSION["user"]) && $_SESSION["level"] == 2 || $_SESSION["level"] == 3){
                $this->view("masterlayout3",[
                    "page"=>"addauthor",
                    "success"=>"Cập nhật thành công.",
                ]);  
            }else{
                $this->erorr();
            }
        }
        function post_add_author(){
            if(isset($_SESSION["user"]) && $_SESSION["level"] == 2 || $_SESSION["level"] == 3){
                $db = $this->model("AuthorModel");
                $name = $_POST["name"];
                $date_birth = $_POST["date_birth"];
                $home_town = $_POST["home_town"];
                $info = $_POST["info"];
                $url_name =$this->change_text($name);
                $img_testt = strlen($_FILES['image']['name']); 
                if($img_testt > 5){
                    $image = $_FILES['image']['name'];
                    $target_dir = "./public/images/author/$image";  
                    move_uploaded_file($_FILES['image']['tmp_name'], $target_dir);
                }
                $db->add_author($name, $info, $url_name, $date_birth, $home_town, $image);
                header('location: ../Adauthor/author#top'); 
            }else{
                $this->erorr();
            }
            
        }
        function delete_author($id){
            if($_SESSION["level"] == 2 || $_SESSION["level"] == 3){
                $db = $this->model("AuthorModel");
                $db->delete_author($id);
                header('location: ../../Adauthor/author#top'); 
            }else{
                $this->erorr();
            }
        }
    }
?>