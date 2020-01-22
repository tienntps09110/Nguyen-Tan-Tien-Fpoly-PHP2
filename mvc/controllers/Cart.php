<?php
    class Cart extends Controller{
        function all(){
            if(isset($_SESSION["user"])){
                $db = $this->model("CartModel");
                $this->view("masterlayout2",[
                    "page"=>"cart",
                    "cart"=> $db->cart($_SESSION["id"]),
                ]);
            }else{
                header('location: ../home/login');
            }
        }
        function add_cart(){
            if(isset($_GET["id"])){
                if(isset($_SESSION["user"])){
                    $db = $this->model("CartModel");
                    $test_row_cart = $db->select_cart_wishtlist($_SESSION["id"], $_GET["id"]);
                    foreach($test_row_cart->fetchAll() as $cart){
                    }
                    $test_cart = $test_row_cart->rowCount();
                    if($test_cart < 1){
                        $db->add_cart_wishlist($_SESSION["id"], $_GET["id"], 1);
                        $sum = $db->sum_cart($_SESSION["id"]);
                        foreach($sum->fetchAll() as $sum){
                        }
                        echo "(" .$sum['SUM(total)'] .")";
                    }else if($cart["total"] < 20){
                        $total = $cart["total"] +1;
                        $db->update_cart($total, $cart["id"]);
                        $sum = $db->sum_cart($_SESSION["id"]);
                        foreach($sum->fetchAll() as $sum){
                        }
                        echo  "(" .$sum['SUM(total)'] .")";
                    }else{
                        echo "Chỉ mua được 20 cuốn/1SP !";
                    }
                }else{
                    echo "Vui lòng Login !";
                }
            }else{
                echo "";
            }
        }
        function post_cart(){
            if(isset($_SESSION["user"])){
                $db = $this->model("CartModel");
                $db1 = $this->model("UserModel");
                $id_user = $_SESSION["id"];
                foreach($db1->select_user($id_user)->fetchAll() as $user){}
                $name = $user["name"];
                $place = $_POST['place1'] ."-" .$_POST['place'];
                $phone = $user["phone"];
                $mail = $user["email"];
                $status = 1;
                $ship = $_POST["ship"];
                $note = $_POST["note"];
                $test_cart = $db->cart($id_user);
                $test_cart1 = $test_cart->rowCount();
                if($_POST["ship"] == 1){
                    $money = $_POST['total'] + 15000;
                }else{
                    $money = $_POST['total'];
                }
                if($test_cart1 > 0){
                    $db->add_cart($id_user, $name, $place, $phone, $mail, $money, $ship, $note, $status);
                    foreach($db->last_id($id_user)->fetchAll() as $lastid){}
                    foreach($db->cart($id_user)->fetchAll() as $cart){
                        $id_cart = $lastid["id"];
                        $id_book = $cart["id"];
                        $unit_price = $cart["price"];
                        $total = $cart["total2"];
                        $db->add_cart_detail($id_cart, $id_book, $unit_price, $total);
                    }
                    $toP = $mail;
                    $subjectP = "ORDER SUCCESS | BOOKSWIT";
                    $messageP = "
                        <h2>Chúc mừng: <b style='color: red;'>" .$_SESSION["user"] ."</b> đã đặt hàng thành công.</h2>
                        <hr>
                        <h4>Truy cập vào link sau để theo dõi đơn hàng: <a href='http://localhost/store/cart/cart_detail&id=".$id_cart ."'>Click here</a></h4>               
                    ";
                    $formP = "natriwit675111@gmail.com";
                    $this->sendmail($toP, $subjectP, $messageP, $formP);

                    $db->delete_cart_wishlist($id_user);
                    header('location: ../cart/done_cart');
                }else{
                    header('location: ../cart/error_cart'); 
                }
            }else{
                header('location: ../home/login');
            }
        }
        function delete_cart(){
            if(isset($_SESSION["user"]) && isset($_POST["id_cart_wishlist"])){
                $db = $this->model("CartModel");
                $id_cart = $_POST["id_cart_wishlist"];
                $db->delete_cart_one_wishlist($id_cart);
                header("Location: " . $_SERVER["HTTP_REFERER"] ."#top");
            }else{
                $this->erorr();
            }
        }
        function done_cart(){
            if(isset($_SESSION["user"])){
                $this->view("masterlayout2", [
                "page"=> "tracking",
            ]);
            }else{
                $this->erorr();
            }
            
        }
        function error_cart(){
            if(isset($_SESSION["user"])){
                $this->view("masterlayout2", [
                "page"=> "cart_none",
            ]);
            }else{
                $this->erorr();
            }
            
        }
        function follow_cart(){
            $db = $this->model("CartModel");
            $this->view("masterlayout2", [
                "page"=> "cart_select",
                "cart"=> $db->user_cart($_SESSION["id"]),
            ]);
        }
        function cart_detail(){
            if(isset($_SESSION["user"])){
                if(isset($_GET["id"])){
                    $db = $this->model("CartModel");
                    $test_user = $db->user_cart_detail1($_GET["id"], $_SESSION["id"]);
                    $test_user1 = $test_user->rowCount();
                    if($test_user1 > 0){
                        foreach($db->user_cart_detail1($_GET["id"], $_SESSION["id"])->fetchAll() as $tatus){}
                        $this->view("masterlayout2",[
                            "page"=>"cart_detail",
                            "cart"=> $db->user_cart_detail2($_GET["id"]),
                            "status"=> $tatus["status"],
                            "info"=> $db->user_cart_detail1($_GET["id"], $_SESSION["id"]),
                            "ship"=>  $tatus["ship"],
                        ]);
                    }else{
                        $this->erorr();
                    }

                }else{
                    $this->erorr();
                }
                
            }else{
                header('location: ../home/login');
            }
        }
        function erorr(){
            $this->view("masterlayout", [
                "page"=> "erorr"
            ]);
        }
    }
?>