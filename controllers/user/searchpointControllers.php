<?php
if(!isset($_SESSION['user'])){
    header("Location: index.php?type=login&yet=1");
}else{
    if($_SESSION['user']['vaiTro']==1){
        $selectdiemByStudent=selectdiemByStudent($_SESSION['user']['id_nguoidung']);
        include_once("views/user/searchpoint.views.php");
    }else{
        header("Location: index.php?type=login&role=1");
    }
}