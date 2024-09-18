<div class="d-flex justify-content-center"><h1>ĐĂNG KÝ LỚP CHO SINH VIÊN <?php echo$_SESSION['user']['hoVT']; ?></h1></div>
<br>
<br>
<br>
<form action="" method="post">
<div class="d-flex" style="justify-content: right;">
<div class="input-group w-25" >
  <input type="text" class="form-control" name="search-class" placeholder="Search" aria-label="Search" aria-describedby="button-search">
  <button class="btn btn-primary" type="submit" name="btn-search-class" id="button-search">Search</button>
        </div>
</div>
</form>

<div class="d-flex justify-content-center"><h4 class="text-danger">Mọi thắc mắc xin vui lòng liên hệ với giáo viên bộ môn</h4></div>
<table class="table table-success table-striped table-bordered border-primary mt-5 mb-5">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">MÃ LỚP</th>
      <th scope="col">TÊN MÔN</th>
      <th scope="col">GIÁO VIÊN</th>
      <th scope="col">NGÀY BẮT ĐẦU</th>
      <th scope="col">NGÀY KẾT THÚC</th>
      <th scope="col">ĐĂNG KÝ</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
      foreach ($getAllClassYet as $key ) {
        echo'
        <tr>
        <th scope="row">'.$i++.'</th>
        <td>'.$key['id_lop'].'</td>
        <td>'.$key['tenMon'].'</td>
        <td>'.$key['hoVT'].'</td>
        <td>'.$key['ngayBatDau'].'</td>
        <td>'.$key['ngayKetThuc'].'</td>
        <td><a href="index.php?type=regisclass&type1=confirm&id='.$key['id_lop'].'">Đăng ký</a></td>
      </tr>
        ';
      }
    ?>
  </tbody>
</table>