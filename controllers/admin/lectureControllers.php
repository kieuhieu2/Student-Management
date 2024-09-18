<?php
if(isset($_GET['del'])){
    if($_GET['type']=='managelecture'){
    delGiaoVien($_GET['del']);
    }else if($_GET['type']=='managestudent'){
        delSinhVien($_GET['del']);
    }
}
if($_GET['type']=='managelecture'){
    if(isset($_POST['btn-search-user'])){
        $getAllGiaoVien=getAllGiaoVien1($_POST['search-user']);
    }else{
        $getAllGiaoVien=getAllGiaoVien();
    }
}else if($_GET['type']=='managestudent'){
    if(isset($_POST['btn-search-user'])){
        $getAllGiaoVien=getAllSinhVien1($_POST['search-user']);
    }else{
        $getAllGiaoVien=getAllSinhVien();
    }
    
}
if(isset($_GET['type1'])){
    if($_GET['type1']=='fixlecture'){
        if(isset($_POST['btn-save-lecture'])){
            if($_GET['type']=='managelecture'){
                updateGiaoVienById($_GET['id'],$_POST['email'],$_POST['hoVT'],$_POST['ngaySinh'],$_POST['diaChi'],$_POST['soDT']);
            }else if($_GET['type']=='managestudent'){
                updateSinhVienById($_GET['id'],$_POST['email'],$_POST['hoVT'],$_POST['ngaySinh'],$_POST['diaChi'],$_POST['soDT']);
            }}
        if($_GET['type']=='managelecture'){
            $getGiaoVienById=getGiaoVienById($_GET['id']);
        }else if($_GET['type']=='managestudent'){
            $getGiaoVienById=getSinhVienById($_GET['id']);
        }
        include_once("views/admin/fixlecture.views.php");
    }else if($_GET['type1']=='addlecture'){
        if(isset($_POST['btn-add-lecture'])){
            if($_GET['type']=='managelecture'){
                addGiaoVien($_POST['tenND'], $_POST['matKhau'], $_POST['email'],$_POST['hoVT'],$_POST['ngaySinh'],$_POST['diaChi'],$_POST['soDT']);
            }else if($_GET['type']=='managestudent'){
                addSinhVien($_POST['tenND'], $_POST['matKhau'], $_POST['email'],$_POST['hoVT'],$_POST['ngaySinh'],$_POST['diaChi'],$_POST['soDT']);
            }
        }
        include_once("views/admin/addlecture.views.php");
    }
    
}else{
    include("views/admin/lecture.views.php");
}