<br>
<br>
<br>
<form action="" method="post">
<div class="d-flex" style="justify-content: right;">
<div class="input-group w-25" >
  <input type="text" class="form-control" name="search-user" placeholder="Search" aria-label="Search" aria-describedby="button-search">
  <button class="btn btn-primary" type="submit" name="btn-search-user" id="button-search">Search</button>
        </div>
</div>
</form>
<?php
if($_GET['type']=='managelecture'){
echo'<h1>QUẢN LÝ GIÁO VIÊN</h1>
<a href="index.php?type=managelecture&type1=addlecture">Thêm giáo viên</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">MÃ GIÁO VIÊN</th>
      <th scope="col">HỌ VÀ TÊN</th>
      <th scope="col">SỐ ĐIỆN THOẠI</th>
      <th scope="col">EMAIL</th>
      <th scope="col">SỬA</th>
      <th scope="col">XÓA</th>
    </tr>
  </thead>
  <tbody>';
    $i=1;
        foreach ($getAllGiaoVien as $key) {
            echo'
            <tr>
      <th scope="row">'.$i++.'</th>
      <td>'.$key['id_nguoidung'].'</td>
      <td>'.$key['hoVT'].'</td>
      <td>'.$key['soDT'].'</td>
      <td>'.$key['email'].'</td>
      <td><a href="index.php?type=managelecture&type1=fixlecture&id=' . $key['id_nguoidung'] . '">Sửa</a></td>
      <td><a href="index.php?type=managelecture&del=' . $key['id_nguoidung'] . '">Xóa</a></td>
    </tr>
            ';
        }
echo'    
  </tbody>
</table>
';
}else if($_GET['type']=='managestudent'){
    echo'<h1>QUẢN LÝ SINH VIÊN</h1>
<a href="index.php?type=managestudent&type1=addlecture">Thêm sinh viên</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">MÃ SINH VIÊN</th>
      <th scope="col">HỌ VÀ TÊN</th>
      <th scope="col">SỐ ĐIỆN THOẠI</th>
      <th scope="col">EMAIL</th>
      <th scope="col">SỬA</th>
      <th scope="col">XÓA</th>
    </tr>
  </thead>
  <tbody>';
    $i=1;
        foreach ($getAllGiaoVien as $key) {
            echo'
            <tr>
      <th scope="row">'.$i++.'</th>
      <td>'.$key['id_nguoidung'].'</td>
      <td>'.$key['hoVT'].'</td>
      <td>'.$key['soDT'].'</td>
      <td>'.$key['email'].'</td>
      <td><a href="index.php?type=managestudent&type1=fixlecture&id=' . $key['id_nguoidung'] . '">Sửa</a></td>
      <td><a href="index.php?type=managestudent&del=' . $key['id_nguoidung'] . '">Xóa</a></td>
    </tr>
            ';
        }
echo'    
  </tbody>
</table>
';
}
?>
