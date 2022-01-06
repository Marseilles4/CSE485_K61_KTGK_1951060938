<table class="table" border="1">
<tr>
<td>mã</td>
<td>tên môn học</td>
<td>số tín chỉ</td>
<td>số tiết lý thuyết</td>
<td>số tiết bài tập</td>
<td>số tiết thực hành</td>
<td>số giờ tự học</td>
</tr>
<?php
include ('src/connect.php');
$sql = "SELECT * FROM monhoc";
$result = mysqli_query($db, $sql) or die( mysqli_error($db));
$query = mysqli_query($db,"select*from monhoc");
while($row=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $row['mamh']; ?></td>
<td><?php echo $row['ten_ mh']; ?></td>
<td><?php echo $row['sotinchi']; ?></td>
<td><?php echo $row['sotiet_lt']; ?></td>
<td><?php echo $row['sotiet_bt']; ?></td>
<td><?php echo $row['sotiet_thtn']; ?></td>
<td><?php echo $row['sogio_tuhoc']; ?></td>

<td><a href="/src/add.php?id=<?php echo $row['mamh']; ?>">thêm</a></td>
<td><a href="/src/edit.php?id=<?php echo $row['mamh']; ?>">Sửa</a></td>
<td><a href="/src/delete.php?id=<?php echo $row['mamh']; ?>">xóa</a></td>

</tr>
<?php
}
?>
</table>