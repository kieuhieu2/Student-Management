<?php
function getClassByGiaoVien($id){
    $sql="SELECT * FROM lop INNER JOIN mon ON lop.idMon = mon.id_mon INNER JOIN nguoidung ON lop.idGiaoVien = nguoidung.id_nguoidung WHERE xoa_lop = 0 AND xoa_mon = 0 AND xoa_nguoidung = 0 AND idGiaoVien=$id ";
    return pdo_query($sql);
}
function getStudentByClass($id){
    $sql="SELECT * FROM lopdetail INNER JOIN lop ON lop.id_lop = lopdetail.idLop INNER JOIN nguoidung ON lopdetail.idHocSinh = nguoidung.id_nguoidung WHERE xoa_lop = 0  AND xoa_nguoidung = 0 AND idLop=$id ";
    return pdo_query($sql);
}
function updateStudentByClass($chuyenCan,$giuaKi,$cuoiKi,$idLop,$idHocSinh){
    $sql="UPDATE lopdetail SET chuyenCan = $chuyenCan,giuaKi = $giuaKi,cuoiKi = $cuoiKi,diemTongKet = ($chuyenCan*0.2+$giuaKi*0.3+$cuoiKi*0.5) WHERE idLop=$idLop AND idHocSinh=$idHocSinh";
    return pdo_execute($sql);
}
function selectStudentByClass($id){
    $sql="SELECT idHocSinh as 'sinhvien' FROM lopdetail  WHERE idLop=$id ";
    return pdo_query($sql);
}
function selectdiemByStudent($id){
    $sql="SELECT * FROM lopdetail INNER JOIN lop ON lop.id_lop = lopdetail.idLop INNER JOIN mon ON mon.id_mon = lop.idMon  INNER JOIN nguoidung ON lop.idGiaoVien = nguoidung.id_nguoidung WHERE xoa_lop = 0  AND xoa_nguoidung = 0 AND idHocSinh=$id ";
    return pdo_query($sql);
}
function getAllClass(){
    $sql="SELECT * FROM lop INNER JOIN mon ON lop.idMon = mon.id_mon INNER JOIN nguoidung ON lop.idGiaoVien = nguoidung.id_nguoidung WHERE xoa_lop = 0 AND xoa_mon = 0 AND xoa_nguoidung = 0 ";
    return pdo_query($sql);
}
function getAllClassYet($id){
    $sql="SELECT * FROM lop  INNER JOIN mon ON lop.idMon = mon.id_mon INNER JOIN nguoidung ON lop.idGiaoVien = nguoidung.id_nguoidung WHERE xoa_lop = 0 AND xoa_mon = 0 AND xoa_nguoidung = 0 AND id_lop NOT IN (SELECT idLop FROM lopdetail WHERE idHocSinh = $id )  ";
    return pdo_query($sql);
}
function getAllClassYet1($id,$tenMon){
    $sql="SELECT * FROM lop  INNER JOIN mon ON lop.idMon = mon.id_mon INNER JOIN nguoidung ON lop.idGiaoVien = nguoidung.id_nguoidung WHERE xoa_lop = 0 AND mon.tenMon like '%$tenMon%' AND xoa_mon = 0 AND xoa_nguoidung = 0 AND id_lop NOT IN (SELECT idLop FROM lopdetail WHERE idHocSinh = $id )  ";
    return pdo_query($sql);
}
function regisClass($idLop, $idHocSinh){
    $sql="INSERT INTO lopdetail(idLop, idHocSinh) VALUES ($idLop, $idHocSinh)";
    return pdo_execute($sql);
}
function delClass($id){
    $sql="UPDATE lop SET xoa_lop=1 WHERE id_lop=$id";
    return pdo_execute($sql);
}
function getAllMon(){
    $sql="SELECT * FROM mon WHERE xoa_mon=0";
    return pdo_query($sql);
}
function getMonById($id){
    $sql="SELECT * FROM mon WHERE xoa_mon=0 AND id_mon=$id";
    return pdo_query_one($sql);
}
function delMon($id){
    $sql="UPDATE mon SET xoa_mon=1 WHERE id_mon=$id";
    return pdo_execute($sql);
}
function updateMon($id,$tenMon){
    $sql="UPDATE mon SET tenMon='$tenMon' WHERE id_mon=$id";
    return pdo_execute($sql);
}
function addMon($tenMon){
    $sql="INSERT INTO mon( tenMon) VALUES ('$tenMon')";
    return pdo_execute($sql);
}
function getAllGiaoVien(){
    $sql="SELECT * FROM nguoidung WHERE xoa_nguoidung=0 AND vaiTro=2";
    return pdo_query($sql);
}
function getAllGiaoVien1($hoVT){
    $sql="SELECT * FROM nguoidung WHERE xoa_nguoidung=0 AND hoVT like '%$hoVT%' AND vaiTro=2";
    return pdo_query($sql);
}
function getAllSinhVien(){
    $sql="SELECT * FROM nguoidung WHERE xoa_nguoidung=0 AND vaiTro=1";
    return pdo_query($sql);
}
function getAllSinhVien1($hoVT){
    $sql="SELECT * FROM nguoidung WHERE xoa_nguoidung=0 AND hoVT like '%$hoVT%' AND vaiTro=1";
    return pdo_query($sql);
}
function getGiaoVienById($id){
    $sql="SELECT * FROM nguoidung WHERE xoa_nguoidung=0 AND vaiTro=2 AND id_nguoidung=$id";
    return pdo_query_one($sql);
}
function getSinhVienById($id){
    $sql="SELECT * FROM nguoidung WHERE xoa_nguoidung=0 AND vaiTro=1 AND id_nguoidung=$id";
    return pdo_query_one($sql);
}
function updateGiaoVienById($id,$email,$hoVT,$ngaySinh,$diaChi,$soDT){
    $sql="UPDATE nguoidung SET email='$email',hoVT='$hoVT',ngaySinh='$ngaySinh',diaChi='$diaChi',soDT='$soDT' WHERE xoa_nguoidung=0 AND vaiTro=2 AND id_nguoidung=$id";
    return pdo_execute($sql);
}
function updateSinhVienById($id,$email,$hoVT,$ngaySinh,$diaChi,$soDT){
    $sql="UPDATE nguoidung SET email='$email',hoVT='$hoVT',ngaySinh='$ngaySinh',diaChi='$diaChi',soDT='$soDT' WHERE xoa_nguoidung=0 AND vaiTro=1 AND id_nguoidung=$id";
    return pdo_execute($sql);
}
function delGiaoVien($id){
    $sql="UPDATE nguoidung SET xoa_nguoidung=1 WHERE id_nguoidung=$id AND vaiTro=2";
    return pdo_execute($sql);
}
function delSinhVien($id){
    $sql="UPDATE nguoidung SET xoa_nguoidung=1 WHERE id_nguoidung=$id AND vaiTro=1";
    return pdo_execute($sql);
}
function addGiaoVien($tenND, $matKhau, $email, $hoVT, $ngaySinh, $diaChi, $soDT){
    $sql="INSERT INTO nguoidung( tenND, matKhau, email, hoVT, ngaySinh, diaChi, soDT, vaiTro) VALUES ('$tenND', '$matKhau', '$email', '$hoVT', '$ngaySinh', '$diaChi', '$soDT', 2)";
    return pdo_execute($sql);
}
function addSinhVien($tenND, $matKhau, $email, $hoVT, $ngaySinh, $diaChi, $soDT){
    $sql="INSERT INTO nguoidung( tenND, matKhau, email, hoVT, ngaySinh, diaChi, soDT, vaiTro) VALUES ('$tenND', '$matKhau', '$email', '$hoVT', '$ngaySinh', '$diaChi', '$soDT', 1)";
    return pdo_execute($sql);
}
function addClass($idMon, $idGiaoVien, $ngayBatDau, $ngayKetThuc){
    $sql="INSERT INTO lop(idMon, idGiaoVien, ngayBatDau, ngayKetThuc) VALUES ($idMon, $idGiaoVien, '$ngayBatDau', '$ngayKetThuc')";
    return pdo_execute($sql);
}