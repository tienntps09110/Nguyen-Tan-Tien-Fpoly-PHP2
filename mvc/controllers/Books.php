<?php
    class Books extends Controller{
        function erorr(){
            $this->view("masterlayout", [
                "page"=> "erorr"
            ]);
        }
        function all(){
            $db = $this->model("TypebooksModel");
            $db1 = $this->model("BooksModel");
            $db2 = $db1->select_id();
            $sotin1trang = 4;
            $tongsotin = $db2->rowCount();
            $sotrang = ceil($tongsotin / $sotin1trang);
            if( isset($_GET["page"]) ){
                $trang = $_GET["page"];
                settype($trang, "int");
            }else{
                $trang = 1;	
            }
            $from = ($trang -1 ) * $sotin1trang;
	        if($from<0) $from=0;
            $this->view("masterlayout2", [
                "page"=> "category",
                "danhmuc"=> $db->type_all(),
                "books"=>$db1->phantrang($from, $sotin1trang),
                "info"=>"Tất cả loại sách",
                "url"=>"../../books/all",
                "sotrang"=> $sotrang,
                "url_page"=> "all",
            ]);
        }
        function type($url){
            $db = $this->model("TypebooksModel");
            $db1 = $this->model("BooksModel");
            foreach($db->type_books($url)->fetchAll() as $row){ 
            }
            $db2 = $db1->select_idtype($row["id"]);
            $sotin1trang = 4;
            $tongsotin = $db2->rowCount();
            $sotrang = ceil($tongsotin / $sotin1trang);
            
            if( isset($_GET["page"]) ){
                $trang = $_GET["page"];
                settype($trang, "int");
            }else{
                $trang = 1;	
            }
            $from = ($trang -1 ) * $sotin1trang;
	        if($from<0) $from=0;
            $this->view("masterlayout2", [
                "page"=> "category",
                "danhmuc"=> $db->type_all(),
                "books"=>$db1->type_phantrang($from, $sotin1trang, $row["id"]),
                "info"=>"$row[name]",
                "url"=>"$row[url_name]",
                "sotrang"=> $sotrang,
                "url_page"=> "type/$row[url_name]",
            ]);
        }
        function post_search(){
            if(isset($_POST["search"])){
                echo $_POST["search"];
                header('location: ../books/search&search='.$_POST["search"].'&page=1#top');
            }else{
                $this->erorr();
            }
        }
        function search(){
            $db = $this->model("TypebooksModel");
            $db1 = $this->model("BooksModel");
            $search = $_GET["search"];
            $this->view("masterlayout2",[
                "page"=>"category",
                "books"=>$db1->like_phantrang($search),
                "danhmuc"=> $db->type_all(),
                "info"=>"Tìm kiếm: " .$search,
                "url"=>"../search&search=".$search,
                "sotrang"=> 1,
                "url_page"=> $search,
            ]);
        }
        function detail($url){
            $db = $this->model("BooksModel");
            $image = $this->model("ImagesModel");
            foreach($db->books_detail($url)->fetchAll() as $row){ 
            }
            if(isset($row["id"])){
                $views = $row["views"] +1;
                $db->view_detail($views,$row["id"]);
                $this->view("masterlayout2",[
                    "page"=>"product_detail",
                    "detail"=> $db->books_detail($url),
                    "image"=> $image->images_detail_book($row["id"]),
                    "author"=> $db->tacgia_book($row["id_author"]),
                    "company"=> $db->company_book($row["id_company"]),
                    "comment"=> $db->comment_book($row["id"]),
                    "sametype"=> $db->same_type_books($row["id_type"]),
                    "typename"=> $db->type_name($row["id_type"]),
                ]);
            }else{
                $this->erorr();
            }
        }
        function post_comment(){
            if(isset($_POST['comment']) && isset($_POST['id_book']) && isset($_SESSION['id'])){
                $id_book = $_POST['id_book'];
                $id_user = $_SESSION['id'];
                $content = $_POST['comment'];
                $db = $this->model("Comment_booksModel");
                $db->new_comment($id_book, $id_user, $content);
                header("Location: " . $_SERVER["HTTP_REFERER"] ."#cmt");
            }else{
                header("Location: " . $_SERVER["HTTP_REFERER"] ."#cmt");
            }
        }
        // function phantrang(){
        //     $db = $this->model("BooksModel");
        //     $db1 = $db->select_id();
        //     $sotin1trang = 3;
        //     $tongsotin = $db1->rowCount();
        //     $sotrang = ceil($tongsotin / $sotin1trang);

        //     if( isset($_GET["page"]) ){
        //         $trang = $_GET["page"];
        //         settype($trang, "int");
        //     }else{
        //         $trang = 1;	
        //     }
        //     $from = ($trang -1 ) * $sotin1trang;
	    //     if($from<0) $from=0;

        //     $db2 = $db->phantrang($from, $sotin1trang);
            
        //     foreach($db2->fetchAll() as $row){
        //         echo $row["id"];
        //     }
        //     $this->view("masterlayout2", [
        //         "page"=>"erorr",
        //     ]);

        // }
    }
?>