<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://nickzaahhaahha.github.io/HCI_work6/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<!--
เนื่องจากมีปัญหาการ load font ข้ามเครื่อง ผ่านแฟ้ม all.min.css
จึงเพิ่มการกำหนด font-face และเรียกแฟ้มใน current folder
- https://adminlte.io/themes/v3/plugins/fontawesome-free/css/all.min.css
- https://www.farahimpex.com/vendor/jeroennoten/laravel-adminlte/resources/assets/vendor/font-awesome/webfonts/
github.io
- https://nickzaahhaahha.github.io/HCI_work6/
- https://github.com/Nickzaahhaahha/HCI_work6
- https://nickzaahhaahha.github.io/HCI_work6/fontawesome-free/css/all.min.css
- http://thaiall.github.io/www/adminlte/adminlte_github.htm
--> 
<style>
.dropbtn {
  background-color: #ffffff;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #ffffff;}
</style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <div class="dropdown">
        <button class="dropbtn">Social media</button>
        <div class="dropdown-content">
          <a href="https://warayutkhanka.github.io/home/" class="nav-link">home</a>
          <a href="https://upload.facebook.com/profile.php?id=100004114149387" class="nav-link">facebook</a>
          <a href="https://www.youtube.com/channel/UCFYt2ritCwm38J1HLGNSfRg?view_as=subscriber" class="nav-link">youtube</a>
          <a href="https://www.instagram.com/nuengwarayut/" class="nav-link">instagram</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn">เกี่ยวกับตัวฉัน</button>
        <div class="dropdown-content">
          <a href="me.html" class="nav-link">About Me</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn">ผลงานของฉัน</button>
        <div class="dropdown-content">
          <a href="pyramid.html" class="nav-link">Pyramid</a>
          <a href="subject.html" class="nav-link">วิชาที่สนใจ</a>
          <a href="project.html" class="nav-link">โปรเจคที่สนใจ</a>
        </div>
      </div>
    </ul>

    <!-- SEARCH FORM -->
    <form action="http://www.google.com" class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <?php if (isset($_SESSION['username'])) : ?>
            <div class="status" >
                <p style="text-align:right;"><a href="index.php?logout='1'" style="color: red;">ออกจากระบบ</a></p></div>
        <?php endif ?>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-1 pb-1 mb-1 d-flex">
          <img src="photo.jpg" alt="User Image" style="height:30px;">
        <div class="info">
          <a href="https://github.com/thaiall/mygitfriends" class="d-block">นายวรายุทธ ขันก๋า</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          <!-- li class="nav-item has-treeview menu-open" -->
		  <li class="nav-item has-treeview menu-close">
            <a href="https://warayutkhanka.github.io/home/" class="nav-link active">
              <i class="far fa-star"></i>
              <p>
                Social media
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="https://warayutkhanka.github.io/home/" class="nav-link">
                  <i class="fa fa-home" aria-hidden="true"></i>
                  <p>Home</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://upload.facebook.com/profile.php?id=100004114149387" class="nav-link">
                  <i class="fab fa-facebook-f"></i>
                  <p>facebook</p>
                </a>
              </li>      
              <li class="nav-item">
                <a href="https://www.youtube.com/channel/UCFYt2ritCwm38J1HLGNSfRg?view_as=subscriber" class="nav-link">
                  <i class="fab fa-youtube"></i>
                  <p>youtube</p>
                </a>
              </li>     
              <li class="nav-item">
                <a href="https://www.instagram.com/nuengwarayut/" class="nav-link">
                  <i class="fab fa-instagram"></i>
                  <p>instagram</p>
                </a>
              </li>     
            </ul>
          </li>    
          <li class="nav-item has-treeview menu-close">
            <a href="https://warayutkhanka.github.io/home/" class="nav-link active">
              <i class="fas fa-users"></i>
              <p>
               เกี่ยวกับตัวฉัน
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>     
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="me.html" class="nav-link">
                  <i class="fas fa-user"></i>
                  <p>About Me</p>
                </a>
              </li>    
            </ul>
          </li>    
          <li class="nav-item has-treeview menu-close">
            <a href="https://warayutkhanka.github.io/home/" class="nav-link active">
              <i class="fas fa-briefcase"></i>
              <p>
               ผลงานของฉัน
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>     
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pyramid.html" class="nav-link">
                  <i class="fa fa-code" aria-hidden="true"></i>
                  <p>Pyramid</p>
                </a>
              </li>   
              <li class="nav-item has-treeview menu-close">
                <a href="https://warayutkhanka.github.io/home/" class="nav-link active">
                  <i class="fas fa-users"></i>
                  <p>
                   วิชาที่สนใจ
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item has-treeview menu-close">
                    <a href="https://warayutkhanka.github.io/home/" class="nav-link active">
                      <i class="fa fa-minus" aria-hidden="true"></i>
                      <p>
                        CPSC321_63_1_HCI
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="https://github.com/warayutkhanka/CPSC321_63_1_HCI/blob/gh-pages/%E0%B8%9A%E0%B8%B8%E0%B8%84%E0%B8%84%E0%B8%A5%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%99%E0%B9%88%E0%B8%B2%E0%B8%AA%E0%B8%99%E0%B9%83%E0%B8%88.jpg" class="nav-link">
                          <i class="fas fa-angle-right"></i>
                          <p>บุลคลที่น่าสนใจ</p>
                        </a>
                      </li>  
                      <li class="nav-item">
                        <a href="https://github.com/warayutkhanka/CPSC321_63_1_HCI/blob/gh-pages/ITequipment.jpg" class="nav-link">
                          <i class="fas fa-angle-right"></i>
                          <p>ITequipment</p>
                        </a>
                      </li>      
                      <li class="nav-item">
                        <a href="https://github.com/warayutkhanka/CPSC321_63_1_HCI/blob/gh-pages/intel%20gen10.jpg" class="nav-link">
                          <i class="fas fa-angle-right"></i>
                          <p>ntel gen10</p>
                        </a>
                      </li>                             
                    </ul>
                  </li>         
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item has-treeview menu-close">
                    <a href="https://warayutkhanka.github.io/home/" class="nav-link active">
                      <i class="fa fa-minus" aria-hidden="true"></i>
                      <p>
                        CPSC462_63_1_JAVA
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="https://github.com/warayutkhanka/CPSC462_63_1_JAVA/tree/master/java_Pyramid" class="nav-link">
                          <i class="fas fa-angle-right"></i>
                          <p>pyramid</p>
                        </a>
                      </li>  
                      <li class="nav-item">
                        <a href="https://github.com/warayutkhanka/CPSC462_63_1_JAVA/tree/master/Java_Max_min" class="nav-link">
                          <i class="fas fa-angle-right"></i>
                          <p>max_min</p>
                        </a>
                      </li>      
                      <li class="nav-item">
                        <a href="https://github.com/warayutkhanka/CPSC462_63_1_JAVA/tree/master/java_bufferedreader" class="nav-link">
                          <i class="fas fa-angle-right"></i>
                          <p>bufferedreader</p>
                        </a>
                      </li>                             
                    </ul>
                  </li>         
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item has-treeview menu-close">
                    <a href="https://warayutkhanka.github.io/home/" class="nav-link active">
                      <i class="fa fa-minus" aria-hidden="true"></i>
                      <p>
                        CPSC331_63_1_PHP
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="https://github.com/warayutkhanka/CPSC331_63_1_PHP/tree/master/Northwind" class="nav-link">
                          <i class="fas fa-angle-right"></i>
                          <p>Northwind</p>
                        </a>
                      </li>  
                      <li class="nav-item">
                        <a href="https://github.com/warayutkhanka/CPSC331_63_1_PHP/tree/master/PyramidPHP" class="nav-link">
                          <i class="fas fa-angle-right"></i>
                          <p>PyramidPHP</p>
                        </a>
                      </li>      
                      <li class="nav-item">
                        <a href="https://github.com/warayutkhanka/CPSC331_63_1_PHP/tree/master/link3page" class="nav-link">
                          <i class="fas fa-angle-right"></i>
                          <p>link3page</p>
                        </a>
                      </li>                             
                    </ul>
                  </li>         
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item has-treeview menu-close">
                    <a href="https://warayutkhanka.github.io/home/" class="nav-link active">
                      <i class="fa fa-minus" aria-hidden="true"></i>
                      <p>
                        Programming
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="https://drive.google.com/drive/u/0/folders/15d0mcSq7XbAOrSFGuEqbjfHCYUD5kDu8" class="nav-link">
                          <i class="fas fa-angle-right"></i>
                          <p>Do while</p>
                        </a>
                      </li>  
                      <li class="nav-item">
                        <a href="https://drive.google.com/drive/u/0/folders/1Dz5QoMwGAIY1-NPH1uC3AVvdIpGwKtL0" class="nav-link">
                          <i class="fas fa-angle-right"></i>
                          <p>SubProgram_Grade</p>
                        </a>
                      </li>      
                      <li class="nav-item">
                        <a href="https://drive.google.com/drive/u/0/folders/1QOUt785d9dqlAeslhizsroef-ue85nB3" class="nav-link">
                          <i class="fas fa-angle-right"></i>
                          <p>input calculate</p>
                        </a>
                      </li>                             
                    </ul>
                  </li>         
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item has-treeview menu-close">
                    <a href="https://warayutkhanka.github.io/home/" class="nav-link active">
                      <i class="fa fa-minus" aria-hidden="true"></i>
                      <p>
                        React Native
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="https://github.com/warayutkhanka/react-native/blob/main/%E0%B8%88%E0%B8%B2%E0%B8%A3%E0%B8%A2%E0%B9%8C%E0%B9%80%E0%B8%8B%E0%B8%9F/CPSC431_Warayut%20Khanka_6108111004_LAB4.pdf" class="nav-link">
                          <i class="fas fa-angle-right"></i>
                          <p>calculate area</p>
                        </a>
                      </li>  
                      <li class="nav-item">
                        <a href="https://github.com/warayutkhanka/react-native/blob/main/%E0%B8%88%E0%B8%B2%E0%B8%A3%E0%B8%A2%E0%B9%8C%E0%B9%80%E0%B8%8B%E0%B8%9F/CPSC431_Warayut%20Khanka_6108111004_LAB5.pdf" class="nav-link">
                          <i class="fas fa-angle-right"></i>
                          <p>การส่งค่าข้าม Form</p>
                        </a>
                      </li>      
                      <li class="nav-item">
                        <a href="https://github.com/warayutkhanka/react-native/blob/main/%E0%B8%88%E0%B8%B2%E0%B8%A3%E0%B8%A2%E0%B9%8C%E0%B9%80%E0%B8%8B%E0%B8%9F/%E0%B8%99%E0%B8%B2%E0%B8%A2%E0%B8%A7%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B8%B8%E0%B8%97%E0%B8%98%20%E0%B8%82%E0%B8%B1%E0%B8%99%E0%B8%81%E0%B9%8B%E0%B8%B2_Warayut%20Khanka_6108111004_CPSC431.pdf" class="nav-link">
                          <i class="fas fa-angle-right"></i>
                          <p>UX / UI</p>
                        </a>
                      </li>                             
                    </ul>
                  </li>         
                </ul>
              </li>
            </ul>
          </li>      
              <li class="nav-item has-treeview menu-close">
                <a href="https://warayutkhanka.github.io/home/" class="nav-link active">
                  <i class="fas fa-chalkboard"></i>
                  <p>
                   โปรเจคที่สนใจ
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>     
                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="https://www.dpu.ac.th/dpuir/upload/file/it_project/is/carsystem.pdf" class="nav-link">
                  <i class="fa fa-suitcase" aria-hidden="true"></i>
                  <p>ระบบลานจอดรถ</p>
                </a>
              </li>  
              <li class="nav-item">
                <a href="https://www.dpu.ac.th/dpuir/upload/file/it_project/is/cosmetic.pdf" class="nav-link">
                  <i class="fa fa-suitcase" aria-hidden="true"></i>
                  <p>ระบบขายออนไลน์</p>
                </a>
              </li>  
              <li class="nav-item">
                <a href="https://www.dpu.ac.th/dpuir/upload/file/it_project/is/otop.pdf" class="nav-link">
                  <i class="fa fa-suitcase" aria-hidden="true"></i>
                  <p>ระบบขายสินค้า OTOP</p>
                </a>
              </li>   
              <li class="nav-item">
                <a href="https://www.dpu.ac.th/dpuir/upload/file/it_project/is/student.pdf" class="nav-link">
                  <i class="fa fa-suitcase" aria-hidden="true"></i>
                  <p>ระบบเทียบโอน</p>
                </a>
              </li>   
              <li class="nav-item">
                <a href="https://www.dpu.ac.th/dpuir/upload/file/it_project/is/03.pdf" class="nav-link">
                  <i class="fa fa-suitcase" aria-hidden="true"></i>
                  <p>ระบบเบเกอรี่ออนไลน์</p>
                </a>
              </li>   
            </ul>
          </li> 
          </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">  
    <!-- Main content -->
    <section class="content">
    <meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('connectdb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//ตรวจสอบถ้าว่างให้เด้งไปหน้าหลัก
if($_GET["order_id"]==''){ 
echo "<script type='text/javascript'>"; 
echo "alert('Error Contact Admin !!');"; 
echo "window.location = 'order_edit.php'; "; 
echo "</script>"; 
}

//รับค่าไอดีที่จะแก้ไข
$order_id = mysqli_real_escape_string($conn,$_GET['order_id']);

//2. query ข้อมูลจากตาราง: 
$sql = "SELECT * FROM orderdetails WHERE order_id='$order_id' ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
<form action="orderdetailsupdate_db.php" method="post" name="orderdetailsupdate" id="orderdetailsupdate">
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="40" colspan="2" align="center" bgcolor="#D6D5D6"><b>แก้ไขข้อมูลการสั่งสินค้า</b></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">ID : </td>
      <td bgcolor="#EBEBEB">
      <p><input type="text" name="order_id"  value="<?php echo $order_id; ?>" disabled='disabled' />
      <input type="hidden" name="order_id" value="<?php echo $order_id; ?>" />
      </td>
    </tr>

    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>

    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">ราคาต่อหน่วย :</td>
      <td width="583" bgcolor="#EBEBEB"><input name="unit_price" type="text" id="unit_price" size="30" placeholder="ราคาต่อหน่วย"  required="required"  /></td>
    </tr>

    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">ปริมาณ<label> :</label></td>
      <td bgcolor="#EBEBEB"><input name="quantity" type="text" id="quantity"  size="30" placeholder="ปริมาณ"  required="required" "/></td>
    </tr>

    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>

    <tr>
      <td align="right" bgcolor="#EBEBEB">ส่วนลด :</td>
      <td bgcolor="#EBEBEB"><input type="text" name="discount" id="discount" placeholder="ส่วนลด"  required="required"/></td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;
        <input type="button" value=" ยกเลิก " onclick="window.location='adminorder_details.php' " /> <!-- ถ้าไม่แก้ไขให้กลับไปหน้าแสดงรายการ -->
        &nbsp;
        <input type="submit" name="Update" id="Update" value="Update" /></td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
  </table>
</form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://adminlte.io/themes/v3/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="https://adminlte.io/themes/v3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="https://adminlte.io/themes/v3/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="https://adminlte.io/themes/v3/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="https://adminlte.io/themes/v3/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="https://adminlte.io/themes/v3/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="https://adminlte.io/themes/v3/plugins/moment/moment.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="https://adminlte.io/themes/v3/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="https://adminlte.io/themes/v3/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="https://adminlte.io/themes/v3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="https://adminlte.io/themes/v3/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://www.masterhook.net/public/assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="https://adminlte.io/themes/v3/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://adminlte.io/themes/v3/dist/js/demo.js"></script>
</body>
</html>
