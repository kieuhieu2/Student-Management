<?php
function dangKy($tenND,$matKhau,$email,$hoVT,$ngaySinh,$diaChi,$soDT){
    $sql="SELECT * FROM nguoidung WHERE email like '$email'";
    $result=pdo_query($sql);
    $ngay_moi = date("Y-m-d", strtotime($ngaySinh));
    if(count($result)==0){
        $sql="INSERT INTO nguoidung(tenND,matKhau,email,hoVT,ngaySinh,diaChi,soDT) VALUES('$tenND','$matKhau','$email','$hoVT','$ngay_moi','$diaChi','$soDT')";
        return pdo_execute($sql);
    }
}
function dangNhap($matKhau,$email){
    $sql="SELECT * FROM nguoidung WHERE email like '$email' AND matKhau like '$matKhau' AND xoa_nguoidung = 0 ";
    return pdo_query_one($sql);
}


