<?php
if(isset($_POST['btn-regis'])){
    $dangky=dangKy($_POST['tenND'],$_POST['matKhau'],$_POST['email'],$_POST['hoVT'],$_POST['ngaySinh'],$_POST['diaChi'],$_POST['soDT']);
    if($dangky){
        echo"<script>alert('Đăng ký thành công!')</script>";
    }
}
include_once("views/user/regis.views.php");
