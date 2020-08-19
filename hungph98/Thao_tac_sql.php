<!-- <?php 
$conn = new mysqli('localhost', 'root', ' ');
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} 
echo "Kết nối thành công";
?>
<br>
<?php 
$conn = mysqli_connect('localhost', 'root', ' ');
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
echo "Kết nối thành công";
?>
<br>
<?php
$conn = new mysqli('localhost', 'root', ' ');
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
$sql = "CREATE DATABASE FreettusDemo";
if ($conn->query($sql) === TRUE) {
    echo "Tạo database thành công";
} else {
    echo "Tạo database thất bại: " . $conn->error;
}
$conn->close();
?>
<br>
<?php 
$conn = mysqli_connect('localhost', 'root', ' ');
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
$sql = "CREATE DATABASE FreettusDemo";
if (mysqli_query($conn, $sql)) {
    echo "Tạo database thành công";
} else {
    echo "Tạo database thất bại: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
<br>
<?php
$conn = new mysqli('localhost', 'root', ' ', 'FreetutsDemo');
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}
$sql = "CREATE TABLE News (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(30) NOT NULL,
    content TEXT,
    add_date TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "Tạo table thành công";
} else {
    echo "Tạo table thất bại: " . $conn->error;
}
$conn->close();
?>
<br>
<?php 
$conn = mysqli_connect('localhost', 'root', ' ');
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
$sql = "CREATE DATABASE FreettusDemo";
if (mysqli_query($conn, $sql)) 
{
    echo 'Tạo database thành công!';
    mysqli_select_db($conn, 'FreettusDemo');
    $sql = "CREATE TABLE News (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(30) NOT NULL,
        content TEXT,
        add_date TIMESTAMP
    )";
    if (mysqli_query($conn, $sql)) {
        echo "Tạo table thành công";
    } else {
        echo "Tạo table thất bại: " . mysqli_error($conn);
    }
     
} else {
    echo "Tạo database thất bại: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
<br>
<?php 
$conn = new mysqli('localhost', 'root', ' ', 'FreetutsDemo');
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
$sql = "INSERT INTO News (title, content) 
        VALUES ('tieu de', 'noi dung')";
if ($conn->query($sql) === TRUE) {
    echo "Thêm record thành công";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<br>
<?php
$conn = new mysqli('localhost', 'root', ' ', 'FreetutsDemo');
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
$sql = "INSERT INTO News (title, content) 
        VALUES ('tieu de', 'noi dung')";
if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "Thêm record thành công có ID là $last_id";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> -->
<br>
<?php 
$conn = new mysqli('localhost', 'root', ' ', 'FreetutsDemo');
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
$sql = "INSERT INTO News (title, content) 
        VALUES ('tieu de 1', 'noi dung 1');";
$sql .= "INSERT INTO News (title, content) 
        VALUES ('tieu de 2', 'noi dung 2');";
if ($conn->multi_query($sql) === TRUE) {
    echo "Thêm thành công";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}
$conn->close();fdas
?>