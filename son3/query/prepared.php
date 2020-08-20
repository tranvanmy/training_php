<?php
$link = new mysqli('localhost', 'root', '', 'sondemo');
 
// kiểm tra kết nối
if ($link->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
 
// Câu SQL
$sql = "INSERT INTO SinhVien (tensv, lop) VALUES (?, ?)";
 
// Tạo đối tượng repared
$stmt = $link->prepare($sql);
 
// Gán giá trị vào các tham số ẩn
$stmt->bind_param("ss", $tensv, $lop);
 
// Thực thi câu truy vấn lần 1
$tensv = 'Đỗ Tuấn';
$lop = '56th2';
$stmt->execute();
 
// Thực thi câu truy vấn lần 2
$tensv = 'Đỗ Tuấn Anh';
$lop = '58th3';
$stmt->execute();
 
echo "Thêm thành công!";
 
// Giải phóng và ngắt kết nối
$stmt->close();
$link->close();
?>