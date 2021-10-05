<?php 
require_once 'php_action/core.php';
require_once 'includes/header.php'; ?>
<div class="text">staff coc</div>
  <div class="content">
  <form method="post" action="php_action/insert_subject.php">
    
    <label for="fname">รหัสวิชา </label>
    <input type="text" id="subID" name="subID" value=""><br>

    <label for="lname">ชื่อวิชา </label>
    <input type="text" id="sub-name" name="sub-name" value=""><br>

    <label for="fname">หน่อวยกิต </label>
    <input type="text" id="credit" name="credit" value=""><br>
    <label for="fname">x </label>
    <input type="text" id="credit-x" name="credit" value=""><br>
    <label for="fname">y </label>
    <input type="text" id="credit-y" name="credit" value=""><br>
    <label for="fname">z </label>
    <input type="text" id="credit-z" name="credit" value=""><br>
    <input type="checkbox" id="vehicle1" name="vehicle1" value="Lecture">
    <label for="vehicle1">Lecture</label>
    <input type="checkbox" id="vehicle2" name="vehicle2" value="Lab">
    <label for="vehicle2">Lab</label>
    <input type="checkbox" id="vehicle3" name="vehicle3" value="Others">
    <label for="vehicle3">Others</label><br><br>

    <label for="type-subject">ประเภทรายวิชา</label><br>
    <input type="radio" id="type-sub-1" name="type-sub" value="1">
    <label for="type-sub-1">วิชาเลือกเสรี</label><br>
    <input type="radio" id="type-sub-2" name="type-sub" value="2">
    <label for="type-sub-2">วิชาชีพเลือก</label><br>
    <input type="radio" id="type-sub-3" name="type-sub" value="3">
    <label for="type-sub-3">วิชาศึกษาทั่วไป</label><br>
    <input type="radio" id="type-sub-4" name="type-sub" value="4">
    <label for="type-sub-4">วิชาชีพบังคับ</label><br>
    <input type="radio" id="type-sub-5" name="type-sub" value="5">
    <label for="type-sub-5">วิชาแกน</label><br>

    <br><input type="submit" value="ยืนยัน">
  </form>
  <!-- content -->
  </div>
<?php require_once 'includes/footer.php'; ?>