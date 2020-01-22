<?php
    class UserModel extends DB{
        public function test_user($username){
            $db = new DB();
            $query = "SELECT * FROM user WHERE username='$username'";
            return $db->execute1($query);
        }
        public function login($username, $password){
            $db = new DB();
            $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
            return $db->execute1($query);
        }
        public function select_user($id){
            $db = new DB();
            $query = "SELECT * FROM user WHERE id='$id'";
            return $db->execute1($query);
        }
        public function register_test($username){
            $db = new DB();
            $query = "SELECT * FROM user WHERE username='$username'";
            return $db->execute1($query);
        }
        public function register($username, $password, $email){
            $db = new DB();
            $query = "INSERT INTO user(username,password,email, level) VALUES('$username','$password','$email', 1)";
            return $db->execute1($query);
        }
        public function user_all(){
            $db = new DB();
            $query = "SELECT * FROM user";
            return $db->execute1($query);
        }
        public function edit_email_user($email, $id){
            $db = new DB();
            $query = "UPDATE user SET email='$email' WHERE id ='$id'";
            return $db->execute1($query);
        }
        public function edit_level_user($level, $id){
            $db = new DB();
            $query = "UPDATE user SET level='$level' WHERE id ='$id'";
            return $db->execute1($query);
        }
    }
?>