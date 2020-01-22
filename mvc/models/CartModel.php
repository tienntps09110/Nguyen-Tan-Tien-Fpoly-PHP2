<?php
    class CartModel extends DB{
        public function add_cart_wishlist($id_user, $id_book, $total){
            $query = "INSERT INTO cart_wishlist(id_user, id_book, total) VALUES('$id_user','$id_book', '$total')";
            $db = new DB();
            return $db->execute1($query);
        }
        public function select_cart_wishtlist($id_user, $id_book){
            $db = new DB(); 
            $query = "SELECT * FROM cart_wishlist WHERE id_user='$id_user' AND id_book='$id_book'";
            return $db->execute1($query);
        }
        public function select_cart_user($id_user){
            $db = new DB(); 
            $query = "SELECT * FROM cart_wishlist WHERE id_user='$id_user'";
            return $db->execute1($query);
        }
        public function select_cart(){
            $db = new DB(); 
            $query = "SELECT * FROM cart";
            return $db->execute1($query);
        }
        function update_cart($total,$id){
            $db = new DB();
            $query = "UPDATE cart_wishlist SET total='$total' WHERE id='$id'";
            return $db->execute1($query);
        }
        function update_cart_status($status,$id){
            $db = new DB();
            $query = "UPDATE cart SET status='$status' WHERE id='$id'";
            return $db->execute1($query);
        }
        function sum_cart($id_user){
            $db = new DB();
            $query = "SELECT SUM(total) FROM cart_wishlist WHERE id_user='$id_user'";
            return $db->execute1($query);
        }
        public function cart($id_user){
            $db = new DB();
            $query = "SELECT c.id as id2, c.total as total2, u.* FROM cart_wishlist c JOIN books u ON u.id=c.id_book WHERE c.id_user='$id_user' ORDER BY c.id ASC";
            return $db->execute1($query);
        }
        public function add_cart($id_user, $name, $place, $phone, $mail, $money, $ship, $note, $status){
            $query = "INSERT INTO cart(id_user, name, place, phone, mail, money, ship, note, status) VALUES('$id_user','$name', '$place','$phone','$mail', '$money', '$ship', '$note', '$status')";
            $db = new DB();
            return $db->execute1($query);
        }
        public function last_id($id_user){
            $db = new DB(); 
            $query = "SELECT * FROM cart WHERE id_user='$id_user'";
            return $db->execute1($query);
        }
        public function add_cart_detail($id_cart, $id_book, $unit_price, $total){
            $query = "INSERT INTO cart_detail(id_cart, id_book, unit_price, total) VALUES('$id_cart','$id_book', '$unit_price', '$total')";
            $db = new DB();
            return $db->execute1($query);
        }
        public function delete_cart_wishlist($id_user){
            $query = "DELETE FROM cart_wishlist WHERE id_user='$id_user'";
            $db = new DB();
            return $db->execute1($query);
        }
        public function delete_cart_one_wishlist($id){
            $query = "DELETE FROM cart_wishlist WHERE id='$id'";
            $db = new DB();
            return $db->execute1($query);
        }
        public function user_cart($id_user){
            $query = "SELECT * FROM cart WHERE id_user='$id_user' ORDER BY id DESC";
            $db = new DB();
            return $db->execute1($query);
        }
        public function user_cart_detail1($id, $id_user){
            $query = "SELECT * FROM cart WHERE id='$id' AND id_user='$id_user' ORDER BY id DESC";
            $db = new DB();
            return $db->execute1($query);
        }
        public function user_cart_detail2($id_cart){
            $query = "SELECT c.id as id2, c.total as total2, u.* FROM cart_detail c JOIN books u ON u.id=c.id_book WHERE id_cart='$id_cart' ORDER BY c.id DESC";
            $db = new DB();
            return $db->execute1($query);
        }
    }
?>