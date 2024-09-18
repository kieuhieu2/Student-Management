<?php
if(isset($_GET['del'])){
    delMon($_GET['del']);
}
$getAllMon=getAllMon();
if(isset($_GET['type1'])){
    if($_GET['type1']=='fixsubject'){
        if(isset($_POST['btn-save-subject'])){
            updateMon($_GET['id'],$_POST['subject']);
        }
        $getMonById=getMonById($_GET['id']);
        include_once("views/admin/fixsubject.views.php");
    }else if($_GET['type1']=='addsubject'){
        if(isset($_POST['btn-add-subject'])){
            addMon($_POST['subject']);
        }
        include_once("views/admin/addsubject.views.php");
    }
    
}else{
    include("views/admin/subject.views.php");
}