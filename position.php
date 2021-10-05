<?php 
require_once 'php_action/core.php';
require_once 'includes/header.php'; 

$sql = "SELECT STAFF_ID,STAFF_PREFIX,STAFF_NAME,STAFF_SNAME,STAFF_TYPE FROM e_staff";

$query = mysqli_query($connect,$sql);


?>
<div class="text"><?php echo "$NAME_POSITION"?></div>
  <div class="content">
  
<table width="600" border="1">
<tr>
  <th width="91"> <div align="center">ID </div></th>
  <th width="98"> <div align="center">คำนำหน้า </div></th>
  <th width="198"> <div align="center">ชื่อ </div></th>
  <th width="97"> <div align="center">นามสกุล </div></th>
  <th width="59"> <div align="center">ประเภท </div></th>
</tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
<tr>
  <td><div align="center"><?php echo $result['STAFF_ID'];?></div></td>
  <td ><?php echo $result['STAFF_PREFIX'];?></td>
  <td><?php echo $result['STAFF_NAME'];?></td>
  <td><div align="center"><?php echo $result['STAFF_SNAME'];?></div></td>
  <td align="right"><?php echo $result['STAFF_TYPE'];?></td>
  
</tr>
<?php
}
?>
</table>
<?php
mysqli_close($connect);
?>
  <!-- content -->
  </div>
<?php require_once 'includes/footer.php'; ?>