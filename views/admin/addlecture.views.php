<link rel="stylesheet" href="uploads/css/login.css">
<div id="container4" style="margin-top:150px">
<form action="" method="post">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" id="" value="" name="tenND" class="form-control" />
    <label class="form-label" for="">Tên người dùng</label>
  </div>
  <div class="form-outline mb-4">
    <input type="password" id="" value="" name="matKhau" class="form-control" />
    <label class="form-label" for="">Mật khẩu</label>
  </div>
  <div class="form-outline mb-4">
    <input type="email" id="" value="" name="email" class="form-control" />
    <label class="form-label" for="">Email</label>
  </div>
  
  <div class="form-outline mb-4">
    <input type="text" id="" value="" name="hoVT" class="form-control" />
    <label class="form-label" for=""><?php
  if($_GET['type']=='managelecture'){
    echo'Tên giáo viên';
}else if($_GET['type']=='managestudent'){
    echo'Tên sinh viên';
}
  ?></label>
  </div>
  <div class="form-outline mb-4">
    <input type="date" id="" value="" name="ngaySinh" class="form-control" />
    <label class="form-label" for="">Ngày sinh</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="" value="" name="diaChi" class="form-control" />
    <label class="form-label" for="">Địa chỉ</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="" value="" name="soDT" class="form-control" />
    <label class="form-label" for="">Số điện thoại</label>
  </div>
  <button type="submit" name="btn-add-lecture" class="btn btn-primary btn-block mb-4">Thêm</button>
</form>
</div>
