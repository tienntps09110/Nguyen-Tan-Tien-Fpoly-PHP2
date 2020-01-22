<?php
    class Controller{
        public function model($model){
            require_once "./mvc/models/".$model.".php";
            return new $model;
        }
        public function view($view, $data=[]){
            require_once "./mvc/views/".$view.".php";
        }
        function sendmail($toP, $subjectP, $messageP, $formP){
            ini_set( 'display_errors', 1 );
            error_reporting( E_ALL );
            $to = $toP;
            $subject = $subjectP;
            $message = $messageP;
            $header  =  "From:" .$formP ." \r\n";
           
            $header .= "MIME-Version: 1.0\r\n";        
            $header .= "Content-type: text/html\r\n";
            $success = mail ($to,$subject,$message,$header);
        }
        function get_user_ip() {
            if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',') > 0) {
                    $addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
                    return trim($addr[0]);
                } else {
                    return $_SERVER['HTTP_X_FORWARDED_FOR'];
                }
            } else {
                return $_SERVER['REMOTE_ADDR'];
            }
        }
        function change_text($str) {
            $str = trim(mb_strtolower($str));
            $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
            $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
            $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
            $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
            $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
            $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
            $str = preg_replace('/(đ)/', 'd', $str);
            $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
            $str = preg_replace('/([\s]+)/', '-', $str);
            return $str;
        }
    }
?>