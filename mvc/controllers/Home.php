<?php
    class Home extends Controller{
        function erorr(){
            $this->view("masterlayout", [
                "page"=> "erorr"
            ]);
        }
        function all(){
            $db = $this->model("BooksModel");
            $this->view("masterlayout2", [
                "page"=> "trangchu",
                "books"=> $db->books_ty(),
                "books_sale"=> $db->books_sale(),
                "ramdom"=> $db->ramdom_books(),
            ]);
        }
        function login(){
            if(isset($_SESSION['user']) && isset($_SESSION['password']) && isset($_SESSION['level'])){
                header('location: ../home/all');
            }else{
                $this->view("masterlayout2", [
                    "page"=> "login",
                ]);
            }
            
        }
        function post_login(){
            if(isset($_POST['username']) && isset($_POST['password'])){
                $db = $this->model("UserModel");  
                $username = $_POST['username'];
                $password = $_POST['password'];
                $test_user = $db->test_user($username);
                foreach($test_user->fetchAll() as $user){
                }
                if(isset($user["password"])){
                    if(password_verify($password, $user["password"])){
                        $_SESSION['user'] = $user['username'];
                        $_SESSION['level'] = $user['level'];
                        $_SESSION['password'] = 'O432fdsajodsa';
                        $_SESSION['id'] = $user['id'];
                        if(isset($_POST['selector'])){
                            setcookie('user',$user['username']);
                            setcookie('password',$password);
                        }else{
                            setcookie('user', '', time()-300);
                            setcookie('password', '', time()-300);
                        }
                        header('location: ../home/all');
                    }else{
                        $this->view("masterlayout2", [
                            "page"=> "login",
                            "error"=> "Sai thông tin đăng nhập",
                        ]);
                    }
                }else{
                    $this->view("masterlayout2", [
                        "page"=> "login",
                        "error"=> "Sai thông tin đăng nhập",
                    ]);
                }
            }else{
                $this->erorr();
            }
        }
        function logout(){
            if(isset($_SESSION['user']) && isset($_SESSION['password']) && isset($_SESSION['level']) && isset($_SESSION['id'])){
                unset($_SESSION['user']);
                unset($_SESSION['password']);
                unset($_SESSION['level']);
                unset($_SESSION['id']);
                header('location: ../home/all');
            }else{
                $this->erorr();
            }
        }
        
        function register(){
            if(isset($_SESSION["user"])){
                header('location: ../home/all');
            }else{
                $this->view("masterlayout2", [
                    "page"=> "register",
                ]);
            }
        }
        function post_register(){
            if(isset($_SESSION["user"])){
                header('location: ../home/all');
            }else{
                if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password2'])){
                    $db = $this->model("UserModel");  
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $password2 = $_POST['password2'];
                    $test = $db->register_test($username);
                    $test_login = $test->rowCount();
                    if($password == $password2){
                        if($test_login == 0){
                            $pass = password_hash($password, PASSWORD_DEFAULT);
                            $db->register($username, $pass, $email);
                            
                            $toP = $email;
                            $subjectP = "Register success | BOOKSWIT";
                            $messageP = "<h2>Chào mừng: <b style='color: red;'>" .$username ."</b> đến với BooksWit.</h2>";
                            $formP = "natriwit675111@gmail.com";

                            $this->sendmail($toP, $subjectP, $messageP, $formP);
                            
                            $this->view("masterlayout2", [
                                "page"=> "register",
                                "success"=> "Đăng kí tài khoản thành công",
                            ]);
                        }else{
                            $this->view("masterlayout2", [
                                "page"=> "register",
                                "error"=> "Tài khoản đã tồn tại",
                            ]);
                        }
                    }else{
                        $this->view("masterlayout2", [
                            "page"=> "register",
                            "error"=> "Xác nhận mật khẩu không chính xác",
                        ]);
                    }
                }else{
                    $this->erorr();
                }
            }
        }
        function send_mail(){
            $toP = "tomaa.nguyen675@gmail.com";
            $subjectP = "Tiêu đề";
            $messageP = "Đây là mail test";
            $formP = "natriwit675111@gmail.com";
            $this->sendmail($toP, $subjectP, $messageP, $formP);
            
        }
        function contact(){
            $this->view("masterlayout2", [
                "page"=> "contact",
            ]);
        }
        function admin(){
            header('location: ../Adbooks/dashboard');
        }
        // function blog(){
        //     $this->view("masterlayout2", [
        //         "page"=> "blog",
        //     ]);
        // }
        // function cart(){
        //     $this->view("masterlayout2", [
        //         "page"=> "cart",
        //     ]);
        // }
        // function category(){
        //     $this->view("masterlayout2", [
        //         "page"=> "category",
        //     ]);
        // }
        function checkout(){
            $this->view("masterlayout2", [
                "page"=> "checkout",
            ]);
        }
        function confirmation(){
            $this->view("masterlayout2", [
                "page"=> "confirmation",
            ]);
        }
        function elements(){
            $this->view("masterlayout2", [
                "page"=> "elements",
            ]);
        }
        // function single_blog(){
        //     $this->view("masterlayout2", [
        //         "page"=> "single_blog",
        //     ]);
        // }
        // function tracking(){
        //     $this->view("masterlayout2", [
        //         "page"=> "tracking",
        //     ]);
        // }
    }
?>