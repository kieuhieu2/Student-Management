<?php
session_start();
include("models/pdo.php");
include("models/user/userModels.php");
include("models/user/productModels.php");
if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['vaiTro'] == 1) {
        include_once("controllers/user/headerControllers.php");
        if (isset($_GET['type'])) {
            switch ($_GET['type']) {
                case 'home':
                    include_once("controllers/user/homeControllers.php");
                    break;
                case 'login':
                    include_once("controllers/user/loginControllers.php");
                    break;
                case 'search':
                    include_once("controllers/user/searchpointControllers.php");
                    break;
                    case 'regisclass':
                        include_once("controllers/user/regisclassControllers.php");
                        break;
                default:
                    include_once("controllers/user/homeControllers.php");
                    break;
            }
        } else {
            include_once("controllers/user/homeControllers.php");
        }
        include_once("controllers/user/footerControllers.php");
    } else if ($_SESSION['user']['vaiTro'] == 2) {
        include_once("controllers/admin/headerControllers.php");
        if (isset($_GET['type'])) {
            switch ($_GET['type']) {
                case 'home':
                    include_once("views/admin/homegiaovien.views.php");
                    break;
                case 'manageclass':
                    include_once("controllers/admin/manageclassControllers.php");
                    break;
                case 'request':
                    include_once("controllers/admin/requestControllers.php");
                    break;
                case 'book':
                    include_once("controllers/admin/bookControllers.php");
                    break;
                default:
                    include_once("views/admin/home.views.php");
                    break;
            }
        } else {
            include_once("views/admin/homegiaovien.views.php");
        }
    } else if ($_SESSION['user']['vaiTro'] == 3) {
        include_once("controllers/admin/headerControllers.php");
        if (isset($_GET['type'])) {
            switch ($_GET['type']) {
                case 'home':
                    include_once("views/admin/homegiaovien.views.php");
                    break;
                case 'manageclass':
                    include_once("controllers/admin/manageclassControllers.php");
                    break;
                case 'managesubject':
                    include_once("controllers/admin/subjectControllers.php");
                    break;
                case 'managelecture':
                    include_once("controllers/admin/lectureControllers.php");
                    break;
                case 'managestudent':
                    include_once("controllers/admin/lectureControllers.php");
                    break;
                default:
                    include_once("views/admin/home.views.php");
                    break;
            }
        } else {
            include_once("views/admin/homegiaovien.views.php");
        }
    }
} else {
    //Dieu huong cho user chua dang nhap
    include_once("controllers/user/headerControllers.php");
    if (isset($_GET['type'])) {
        switch ($_GET['type']) {
            case 'home':
                include_once("controllers/user/homeControllers.php");
                break;
            case 'login':
                include_once("controllers/user/loginControllers.php");
                break;
            case 'search':
                include_once("controllers/user/searchpointControllers.php");
                break;
                case 'regisclass':
                include_once("controllers/user/regisclassControllers.php");
                break;
            default:
                include_once("controllers/user/homeControllers.php");
                break;
        }
    } else {
        include_once("controllers/user/homeControllers.php");
    }
    include_once("controllers/user/footerControllers.php");
}
