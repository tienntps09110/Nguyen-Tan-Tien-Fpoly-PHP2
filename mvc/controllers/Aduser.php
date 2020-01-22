<?php
    class Aduser extends Controller{
        function erorr(){
            $this->view("masterlayout", [
                "page"=> "erorr"
            ]);
        }
        function user(){
            if(isset($_SESSION["user"])){
                if($_SESSION["level"] == 2 || $_SESSION["level"] == 4){
                    $db = $this->model("UserModel");
                    $this->view("masterlayout3",[
                        "page"=>"tableuser",
                        "user"=> $db->user_all(),
                    ]); 
                }else{
                    $this->erorr();
                }
                    
            }else{
                $this->erorr();
            }
        }
        function edit_user($id){
            if(isset($_SESSION["user"])){
                if($_SESSION["level"] == 2 || $_SESSION["level"] == 4){
                    $db = $this->model("UserModel");
                    $this->view("masterlayout3",[
                        "page"=>"edituser",
                        "user"=>$db->select_user($id),
                    ]); 
                }else{
                    $this->erorr();
                }
            }else{
                $this->erorr();
            }
        }
        function post_edit_user(){
            if(isset($_SESSION["user"]) && isset($_POST["email"]) && isset($_POST["id"])){
                if($_SESSION["level"] == 2 || $_SESSION["level"] == 4){
                    $db = $this->model("UserModel");
                    $db->edit_email_user($_POST["email"], $_POST["id"]);
                    $this->view("masterlayout3",[
                        "page"=>"edituser",
                        "user"=>$db->select_user($_POST["id"]),
                        "success"=>"Cập nhật email mới thành công.",
                    ]); 
                }else{
                    $this->erorr();
                }
            }else{
                $this->erorr();
            }
        }
        function add_level($id){
            if(isset($_SESSION["user"])){
                if($_SESSION["level"] == 2){
                    $db = $this->model("UserModel");
                    $this->view("masterlayout3",[
                        "page"=>"leveluser",
                        "user"=>$db->select_user($id),
                    ]);
                }else{
                    $this->erorr();
                }
            }else{
                $this->erorr();
            }
        }
        function post_level_user(){
            if(isset($_SESSION["user"]) && isset($_POST["level"]) && isset($_POST["id"])){
                if($_SESSION["level"] == 2){
                    $db = $this->model("UserModel");
                    $db->edit_level_user($_POST["level"], $_POST["id"]);
                    $this->view("masterlayout3",[
                        "page"=>"leveluser",
                        "user"=>$db->select_user($_POST["id"]),
                        "success"=>"Cập nhật quyền quản trị thành công.",
                    ]); 
                }else{
                    $this->erorr();
                }
            }else{
                $this->erorr();
            }
        }
    }
?>