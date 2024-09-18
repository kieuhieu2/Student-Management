<?php
if(!isset($_SESSION['user'])){
    header("Location: index.php?type=login&yet=1");
}else{
    if($_SESSION['user']['vaiTro']==1){
        if(isset($_GET['type1'])){
            regisClass($_GET['id'], $_SESSION['user']['id_nguoidung']);
        }
        if(isset($_POST['btn-search-class'])){
            $getAllClassYet=getAllClassYet1($_SESSION['user']['id_nguoidung'],$_POST['search-class']);

        }else{
            $getAllClassYet=getAllClassYet($_SESSION['user']['id_nguoidung']);
        }
        include_once("views/user/regisclass.views.php");
}else{
        header("Location: index.php?type=login&role=1");
    }
}