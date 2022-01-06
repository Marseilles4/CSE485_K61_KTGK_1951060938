<?php
include ('src/operation/connect.php');
$magv=$_GET['mamh'];
$sql = "DELETE FROM monhoc WHERE mamh='$mamh'";
if ($db->query($sql) === TRUE) {
echo "successful !";
} else {
echo "Error :" . $db->error;
}
$db->close();
?>