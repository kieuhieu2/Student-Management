<br>
<br>
<br>
<h1>MÃ LỚP HỌC: <?php echo $_GET['id']; ?></h1>
<form action="" method="post">
<table class="table">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">TÊN SINH VIÊN</th>
            <th scope="col">MÃ SINH VIÊN</th>
            <th scope="col">ĐIỂM CHUYÊN CẦN (20%)</th>
            <th scope="col">ĐIỂM GIỮA KÌ (30%)</th>
            <th scope="col">ĐIỂM CUỐI KÌ (50%)</th>
            <th scope="col">ĐIỂM TỔNG KẾT</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($getStudentByClass as $key) {
            echo '
            <tr>
      <th scope="row">' . $i++ . '</th>
      <td>' . $key['hoVT'] . '</td>
      <td>' . $key['id_nguoidung'] . '</td>
      <td><input type="number" value="' . $key['chuyenCan'] . '" min="0" max="10" step="0.5" name="chuyenCan[]" /></td>
      <td><input type="number" value="' . $key['giuaKi'] . '" min="0" max="10" step="0.5" name="giuaKi[]" /></td>
      <td><input type="number" value="' . $key['cuoiKi'] . '" min="0" max="10" step="0.5" name="cuoiKi[]" /></td>
      <td><input type="number" value="' . $key['diemTongKet'] . '" min="0" max="10" step="0.5" name="" readonly/></td>
    </tr>
            ';
        }
        ?>

    </tbody>
    <tfoot>
      <tr>
        <td colspan="6"></td>
        <td><button type="submit" name="save-btn-manageclass">Lưu thay đổi</button></td>
    </tr>
    </tfoot>
</table>
</form>