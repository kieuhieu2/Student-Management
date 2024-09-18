<h1>QUẢN LÝ MÔN</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">TÊN MÔN</th>
      <th scope="col">XÓA</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
        foreach ($getAllRequest as $key) {
            echo'
            <tr>
      <th scope="row">'.$i++.'</th>
      <td>'.$key['gioiTinh'].'</td>
      <td>'.$key['ghiChu'].'</td>
    </tr>
            ';
        }
    ?>
    
  </tbody>
</table>