<?php
    foreach($data["hh"]->fetchAll() as $row){
        echo $row["ten_hh"] ."</br>";
    }
    echo "<hr>";
    foreach($data["info"]->fetchAll() as $row){
        echo $row["ma_kh"] ."</br>";
        echo $row["ho_ten"] ."</br>";
        echo $row["email"] ."</br>";
    }
?>