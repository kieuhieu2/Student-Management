<link rel="stylesheet" href="uploads/css/login.css">
<div id="container4" style="margin-top:150px">
  <div id="title-container4">
    <h1>Thêm lớp</h1>
  </div>
<form action="" method="post">
  <div class="form-outline mb-4">
    <select name="idMon" id="" class="form-control">
      <?php
      foreach ($getAllMon as $key ) {
        echo'<option value="'.$key['id_mon'].'">'.$key['tenMon'].'</option>';
      }
      ?>
    </select>
    <label class="form-label" for="">Môn học</label>
  </div>
  <div class="form-outline mb-4">
    <select name="idGiaoVien" id="" class="form-control">
    <?php
      foreach ($getAllGiaoVien as $key ) {
        echo'<option value="'.$key['id_nguoidung'].'">'.$key['hoVT'].'</option>';
      }
      ?>
    </select>
    <label class="form-label" for="">Giáo viên</label>
  </div>

  <div class="form-outline mb-4">
  <input type="date" id="" name="ngayBatDau" class="form-control" />
    <label class="form-label" for="">Ngày bắt đầu</label>
  </div>

  <div class="form-outline mb-4">
  <input type="date" id="" name="ngayKetThuc" class="form-control" />
    <label class="form-label" for="">Ngày kết thúc</label>
  </div>

  <!-- Submit button -->
  <button type="submit" name="btn-add-class" class="btn btn-primary btn-block mb-4">Thêm</button>
</form>
</div>
