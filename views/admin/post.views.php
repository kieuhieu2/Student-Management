<h1>QUẢN LÝ TIN TỨC</h1>
<a href="index.php?type=post&type1=addpost">THÊM TIN</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">TÊN TIN</th>
      <th scope="col">LOẠI TIN</th>
      <th scope="col">NGÀY ĐĂNG</th>
      <th scope="col">SỬA</th>
      <th scope="col">XÓA</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
        foreach ($getAllPost as $key) {
            echo'
            <tr>
      <th scope="row">'.$i++.'</th>
      <td>'.$key['tenTinTuc'].'</td>
      <td>'.$key['tenLoai'].'</td>
      <td>'.$key['ngayDang'].'</td>
      <td><a href="index.php?type=post&type1=fixpost&id='.$key['id_tintuc'].'">Sửa</a></td>
      <td><a href="index.php?type=post&del='.$key['id_tintuc'].'">Xóa</a></td>
    </tr>
            ';
        }
    ?>
    
  </tbody>
</table>