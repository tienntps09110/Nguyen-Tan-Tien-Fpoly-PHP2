<?php
    class Erorr extends Controller{
        function __construct(){
            $this->erorr();
        }
        function erorr(){
            $this->view("masterlayout", [
                "page"=> "erorr"
            ]);
        }
    }
?>