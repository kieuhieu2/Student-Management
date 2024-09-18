<br>
<br>
<br>
<h1>QUẢN LÝ LỚP HỌC</h1>
<?php
if ($_SESSION['user']['vaiTro'] == 3) {
    echo '<a href="index.php?type=manageclass&type1=addclass">Thêm lớp</a>';
}
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">MÃ LỚP</th>
            <th scope="col">MÔN</th>
            <th scope="col">GIÁO VIÊN</th>
            <th scope="col">NGÀY BẮT ĐẦU</th>
            <th scope="col">NGÀY KẾT THÚC</th>
            <th scope="col">XEM</th>
            <?php
            if ($_SESSION['user']['vaiTro'] == 3) {
                echo '<th scope="col">XÓA</th>';
            }
            ?>

        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($getClassByGiaoVien as $key) {
            echo '
            <tr>
      <th scope="row">' . $i++ . '</th>
      <td>' . $key['id_lop'] . '</td>
      <td>' . $key['tenMon'] . '</td>
      <td>' . $key['hoVT'] . '</td>
      <td>' . $key['ngayBatDau'] . '</td>
      <td>' . $key['ngayKetThuc'] . '</td>
      <td><a href="index.php?type=manageclass&type1=fixmanageclass&id=' . $key['id_lop'] . '">Xem</a></td>';
            if ($_SESSION['user']['vaiTro'] == 3) {
                echo '
    <td><a href="index.php?type=manageclass&del=' . $key['id_lop'] . '">Xóa</a></td>
    ';
            }

            echo '
    </tr>
            ';
        }
        ?>

    </tbody>
</table>