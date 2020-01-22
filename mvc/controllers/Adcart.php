<?php
    class Adcart extends Controller{
        function erorr(){
            $this->view("masterlayout", [
                "page"=> "erorr"
            ]);
        }
        function cart(){
            if($_SESSION["user"] && $_SESSION["level"] == 2 || $_SESSION["level"] == 5){
                $db = $this->model("CartModel");
                $this->view("masterlayout3", [
                    "page" => "cart",
                    "cart" => $db->select_cart(),
                ]);
            }else{
                $this->erorr();
            }
        }
        function confirm($id, $status){
            if($_SESSION["user"] && $_SESSION["level"] == 2 || $_SESSION["level"] == 5){
                $db = $this->model("CartModel");
                $status1 = $status +1;
                $db->update_cart_status($status1,$id);
                header('location: ../../cart#top');
            }
        }
        function destroy($id){
            if($_SESSION["user"] && $_SESSION["level"] == 2 || $_SESSION["level"] == 5){
                $db = $this->model("CartModel");
                
                $db->update_cart_status(5,$id);
                header('location: ../../Adcart/cart#top');
            }
        }
    }
?>