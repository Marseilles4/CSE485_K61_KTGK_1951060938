<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="main.css"/>
</head>
<body>
<?php
include ('/src/operation/connect.php');
$mamh=$_GET['mamh'];
$query=mysqli_query($db,"select * from `monhoc` where mamh='$mamh'");
$row=mysqli_fetch_assoc($query);
?>
<form method="POST" class="form">
<h2>Thêm môn học</h2>
<label>Mã môn học <input type="text" value="<?php echo $row['mamh']; ?>" name="mamh"></label><br/>
<label>Tên môn học<input type="text" value="<?php echo $row['ten_mh']; ?>" name="ten_mh"></label><br/>
<label>Số tín chỉ <input type="text" value="<?php echo $row['sotinchi']; ?>" name="sotinchi"></label><br/>
<label>Số tiết lý thuyết <input type="text" value="<?php echo $row['sotiet_lt']; ?>" name="sotiet_lt"></label><br/>
<label>Số tiết bài tập <input type="text" value="<?php echo $row['sotiet_bt']; ?>" name="sotiet_bt"></label><br/>
<label>số tiết thực hành<input type="text" value="<?php echo $row['sotiet_thtn']; ?>" name="sotiet_thtn"></label><br/>
<label>số giờ tự hoc <input type="text" value="<?php echo $row['sogio_th']; ?>" name="sogio_th"></label><br/>
<input type="submit" value="them" name="update_user">
<?php
if (isset($_POST['update_user'])){
    $mamh=$_GET['mamh'];
    $ten_mh=$_POST['ten_ mh'];
    $sotinchi=$_POST['sotinchi'];
    $sotiet_lt=$_POST['sotiet_lt'];
    $sotiet_bt=$_POST['sotiet_bt'];
    $sotiet_thtn=$_POST['soiet_thtn'];
    $sogio_th=$_POST['sogio_tuhoc'];
// Create connection
$db = new mysqli("localhost", "root", "", "1951060783-thuyloi");
// Check connection
if ($db->connect_error) {
die("Connection failed: " . $db->connect_error);
}

$db->close();
}
?>
</form>
</body>
</html>