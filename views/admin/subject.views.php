<br>
<br>
<br>
<h1>QUẢN LÝ MÔN</h1>
<a href="index.php?type=managesubject&type1=addsubject">Thêm môn</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">TÊN MÔN</th>
      <th scope="col">SỬA</th>
      <th scope="col">XÓA</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
        foreach ($getAllMon as $key) {
            echo'
            <tr>
      <th scope="row">'.$i++.'</th>
      <td>'.$key['tenMon'].'</td>
      <td><a href="index.php?type=managesubject&type1=fixsubject&id=' . $key['id_mon'] . '">Sửa</a></td>
      <td><a href="index.php?type=managesubject&del=' . $key['id_mon'] . '">Xóa</a></td>
    </tr>
            ';
        }
    ?>
    
  </tbody>
</table>