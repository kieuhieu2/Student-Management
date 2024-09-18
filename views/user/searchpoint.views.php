<div class="d-flex justify-content-center"><h1>BẢNG ĐIỂM CỦA SINH VIÊN <?php echo$_SESSION['user']['hoVT']; ?></h1></div>
<br>
<br>
<br>
<div class="d-flex justify-content-center"><h4 class="text-danger">Mọi thắc mắc xin vui lòng liên hệ với giáo viên bộ môn</h4></div>
<table class="table table-success table-striped table-bordered border-primary mt-5 mb-5">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">MÃ LỚP</th>
      <th scope="col">MÔN</th>
      <th scope="col">GIÁO VIÊN</th>
      <th scope="col">ĐIỂM</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
      foreach ($selectdiemByStudent as $key ) {
        echo'
        <tr>
        <th scope="row">'.$i++.'</th>
        <td>'.$key['idLop'].'</td>
        <td>'.$key['tenMon'].'</td>
        <td>'.$key['hoVT'].'</td>
        <td>'.$key['diemTongKet'].'</td>
      </tr>
        ';
      }
    ?>
  </tbody>
</table>