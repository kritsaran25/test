<?php 
$U_TYPE = $_SESSION["U_TYPE"] ; 
$STAFF_ID = $_SESSION["STAFF_ID"] ;
$NAME_POSITION ;
function bx_add_subject() { //เพิ่มวิชาหลักสูตร
  echo '<li>
        <a href="http://localhost/OnlineRequestFormOpeningCourse/add_subject.php">
          <i class="bx bx-user"></i>
          <span class="links_name">เพิ่มวิชาหลักสูตร</span>
        </a>
        <span class="tooltip">เพิ่มวิชาหลักสูตร</span>
      </li>' ;
}
function bx_subject() { //รายวิชาหลักสูตร
  echo '<li> 
        <a href="http://localhost/OnlineRequestFormOpeningCourse/subject.php">
          <i class="bx bx-user"></i>
          <span class="links_name">รายวิชาหลักสูตร</span>
        </a>
        <span class="tooltip">รายวิชาหลักสูตร</span>
      </li>' ;
}
function bx_open_course() { //เพิ่มรายวิชาเปิดสอน
  echo '<li>
        <a href="#">
          <i class="bx bx-user"></i>
          <span class="links_name">เพิ่มรายวิชาเปิดสอน</span>
        </a>
        <span class="tooltip">เพิ่มรายวิชาเปิดสอน</span>
      </li>' ;
}
function bx_corse() { //รายวิชาเปิดสอน
  echo '<li>
        <a href="#">
          <i class="bx bx-user"></i>
          <span class="links_name">รายวิชาเปิดสอน</span>
        </a>
        <span class="tooltip">รายวิชาเปิดสอน</span>
      </li>' ;
}
function bx_all_corse() { //รายวิชาเปิดสอนทั้งหมด
  echo '<li>
        <a href="#">
          <i class="bx bx-user"></i>
          <span class="links_name">รายวิชาเปิดสอนทั้งหมด</span>
        </a>
        <span class="tooltip">รายวิชาเปิดสอนทั้งหมด</span>
      </li>' ;
}
function bx_sign() { //รับรองเอกสาร
  echo '<li>
        <a href="#">
          <i class="bx bx-user"></i>
          <span class="links_name">รับรองเอกสาร</span>
        </a>
        <span class="tooltip">รับรองเอกสาร</span>
      </li>' ;
}
function bx_position() { //ตำแหน่ง
  echo '<li>
        <a href="http://localhost/OnlineRequestFormOpeningCourse/position.php">
          <i class="bx bx-user"></i>
          <span class="links_name">ตำแหน่ง</span>
        </a>
        <span class="tooltip">ตำแหน่ง</span>
      </li>' ;
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
      <div class="logo_name">Online Request Form<br>Opening Course</div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
      <!-- <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li> -->
      <li>
        <a href="index.php">
        <i class='bx bxs-home'></i>
          <span class="links_name">หน้าแรก</span>
        </a>
        <span class="tooltip">หน้าแรก</span>
      </li>
      
      <?php 
      if($U_TYPE == 1){ //อาจารย์
        $NAME_POSITION = "อาจารย์" ;
        bx_open_course();
        bx_corse();
        bx_sign();
      }
      elseif ($U_TYPE == 2){ //หัวหน้าหลักสูตร
        $NAME_POSITION = "หัวหน้าหลักสูตร" ;
        bx_all_corse();
        bx_open_course();
        bx_corse();
        bx_sign();
        bx_subject();
        bx_add_subject();
      }
      elseif ($U_TYPE == 3){ //รองอธิการบดี ป.ตรี
        $NAME_POSITION = "รองคณบดีฝ่ายวิจัย ส่าหรับรายวิชา ป.ตรี" ;
        bx_all_corse();
        bx_open_course();
        bx_corse();
        bx_sign();
      }
      elseif ($U_TYPE == 4){ //รองอธิการบดี ป.โทร
        $NAME_POSITION = "รองคณบดีฝ่ายวิจัย บัณฑิตศึกษาฯส่าหรับรายวิชา ป.โท" ;
        bx_all_corse();
        bx_open_course();
        bx_corse();
        bx_sign();
      }
      elseif ($U_TYPE == 5){ //เจ้าหน้าที่ PSU
        $NAME_POSITION = "เจ้าหน้าที่ PSU" ;
        bx_all_corse();
      }
      elseif ($U_TYPE == 0){ //เจ้าหน้า COC Admin
        $NAME_POSITION = "เจ้าหน้าที่ COC" ;
        bx_subject();
        bx_add_subject();
        bx_position();
      }
      ?>
      
      
      
     
      <!-- <li>
        <a href="#">
          <i class='bx bx-heart'></i>
          <span class="links_name">Saved</span>
        </a>
        <span class="tooltip">Saved</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog'></i>
          <span class="links_name">Setting</span>
        </a>
        <span class="tooltip">Setting</span>
      </li> -->
      <li class="profile">
        <div class="profile-details">
          <img src="img/profile.jpeg" alt="profileImg">
          <div class="name_job">
            <div class="name">Prem Shahi</div>
            <div class="job"><?php echo "$NAME_POSITION" ;?></div>
          </div>
        </div>
        <a href="logout.php">
          <i class='bx bx-log-out' id="log_out"></i>
        </a>
      </li>
    </ul>
  </div>
  <section class="home-section">
    