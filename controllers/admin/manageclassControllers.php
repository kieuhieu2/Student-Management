<?php
if(isset($_GET['del'])){
    delClass($_GET['del']);
}
if($_SESSION['user']['vaiTro'] == 2){
    $getClassByGiaoVien=getClassByGiaoVien($_SESSION['user']['id_nguoidung']);
}else if($_SESSION['user']['vaiTro'] == 3){
    $getClassByGiaoVien=getAllClass();
}
if(isset($_GET['type1'])){
    if($_GET['type1']=='fixmanageclass'){
        if(isset($_POST['save-btn-manageclass'])){
        $selectStudentByClass=selectStudentByClass($_GET['id']);
        for ($i=0; $i < count($selectStudentByClass); $i++) { 
            updateStudentByClass($_POST['chuyenCan'][$i],$_POST['giuaKi'][$i],$_POST['cuoiKi'][$i],$_GET['id'],$selectStudentByClass[$i]['sinhvien']);
        }
        }
        $getStudentByClass=getStudentByClass($_GET['id']);
        include_once("views/admin/fixmanageclass.views.php");
    }else if($_GET['type1']=='addclass'){
        if(isset($_POST['btn-add-class'])){
            addClass($_POST['idMon'], $_POST['idGiaoVien'], $_POST['ngayBatDau'], $_POST['ngayKetThuc']);
        }
        $getAllMon=getAllMon();
        $getAllGiaoVien=getAllGiaoVien();
        $getAllSinhVien=getAllSinhVien();
        include_once("views/admin/addclass.views.php");
    }
    
}else{
    include_once("views/admin/manageclass.views.php");
}