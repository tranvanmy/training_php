<!-- <?php 
$conn = new mysqli('localhost', 'root', '');
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} 
echo "Kết nối thành công";
?>
<br>
<?php 
$conn = mysqli_connect('localhost', 'root', '');
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
echo "Kết nối thành công";
?>
<br>
<?php
$conn = new mysqli('localhost', 'root', '');
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
$conn = mysqli_connect('localhost', 'root', '');
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
$conn = new mysqli('localhost', 'root', '', 'FreetutsDemo');
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
$conn = mysqli_connect('localhost', 'root', '');
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
$conn = new mysqli('localhost', 'root', '', 'FreetutsDemo');
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
$conn = new mysqli('localhost', 'root', '', 'FreetutsDemo');
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
?> 
<br>
<?php 
$conn = new mysqli('localhost', 'root', '', 'FreetutsDemo');
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
?> -->
<br>
<!-- <?php 
try {
    $conn = new PDO("mysql:host=localhost;dbname=DBName", 'root', 'vertrigo');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Kết nối thành công";
}
catch (PDOException $e) {
    echo "Kết nối thất bại: " . $e->getMessage();
}
?>
<br>
<?php
$conn = new mysqli('localhost', 'root', '', 'FreetutsDemo');
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
$sql = "INSERT INTO News (title, content) VALUES (?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $title, $content);
$title = 'Tiêu đề 1';
$content = 'Nội dung 1';
$stmt->execute();
$title = 'Tiêu đề 2';
$content = 'Nội dung 2';
$stmt->execute();
echo "Thêm thành công!";
$stmt->close();
$conn->close();
?> -->
<!-- <br>
<?php 
$conn = new mysqli('localhost', 'root', '', 'FreetutsDemo');
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
$sql = "SELECT id, title, content FROM News";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) {
        echo "title: " . $row["title"]. " - Content: " . $row["content"]."<br>";
    }
} 
else {
    echo "Không có record nào";
}
$conn->close();
?>
<br>
<?php 
$conn = new mysqli('localhost', 'root', '', 'FreetutsDemo');
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
$sql = "DELETE FROM News WHERE id=1";
if ($conn->query($sql) === TRUE) {
    echo "Xóa thành công";
} else {
    echo "Xóa thất bại: " . $conn->error;
}
$conn->close();
?> -->
<br>
<?php  
$conn = new mysqli('localhost', 'root', '', 'FreetutsDemo');
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
$sql = "UPDATE News SET title='Tiêu đề updated' WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "update thành công";
} else {
    echo "Update thất bại: " . $conn->error;
}
$conn->close();
?>