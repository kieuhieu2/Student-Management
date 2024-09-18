<link rel="stylesheet" href="uploads/css/login.css">
<div id="container4" style="margin-top:150px">
<form action="" method="post">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="" value="<?php echo $getGiaoVienById['email']; ?>" name="email" class="form-control" />
    <label class="form-label" for="">Email</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="" value="<?php echo $getGiaoVienById['hoVT']; ?>" name="hoVT" class="form-control" />
    <label class="form-label" for="">Tên giáo viên</label>
  </div>
  <div class="form-outline mb-4">
    <input type="date" id="" value="<?php echo $getGiaoVienById['ngaySinh']; ?>" name="ngaySinh" class="form-control" />
    <label class="form-label" for="">Ngày sinh</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="" value="<?php echo $getGiaoVienById['diaChi']; ?>" name="diaChi" class="form-control" />
    <label class="form-label" for="">Địa chỉ</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="" value="<?php echo $getGiaoVienById['soDT']; ?>" name="soDT" class="form-control" />
    <label class="form-label" for="">Số điện thoại</label>
  </div>
  <button type="submit" name="btn-save-lecture" class="btn btn-primary btn-block mb-4">Lưu</button>
</form>
</div>
