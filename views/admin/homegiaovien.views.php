<div class="d-flex justify-content-center" style="height:500px; align-items:center">
<?php
if($_SESSION['user']['vaiTro']==2){
echo'<h1>ĐÂY LÀ TRANG QUẢN LÝ DÀNH CHO GIÁO VIÊN</h1>';
}else if($_SESSION['user']['vaiTro']==3){
    echo'<h1>ĐÂY LÀ TRANG QUẢN LÝ DÀNH CHO ADMIN</h1>';
}
?>
</div>