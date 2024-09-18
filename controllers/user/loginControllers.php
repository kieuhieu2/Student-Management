<?php
if (isset($_GET['role'])) {
    echo'<script>alert("Bạn không có vai trò để xem!")</script>';
}
if (isset($_GET['yet'])) {
    echo'<script>alert("Hãy đăng nhập để xem!")</script>';
}
    include_once("views/user/login.views.php");
