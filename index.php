<?php
$DVE_SERVER_URL='https://dve.bncc.ac.th/dve2020/';
$title='ระบบฐานข้อมูลการจัดการศึกษาทวิภาคี DVE-DATA';
$api_url=$DVE_SERVER_URL.'ajax/dve_center/get_centers.php';
//$api_url='http://localhost/dve2020/ajax/dve_center/get_centers.php';
$center_data=json_decode(file_get_contents($api_url));
$systemFoot='';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php print $title; ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
      
<link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">
  <style>
@font-face {
    font-family: 'Sarabun', sans-serif;
    src: url('http://webfont.webdesigner.in.th/font/THSarabunNew/thsarabunnew.eot');
    src: url('http://webfont.webdesigner.in.th/font/THSarabunNew/thsarabunnew.eot') format('embedded-opentype'),
         url('http://webfont.webdesigner.in.th/font/THSarabunNew/thsarabunnew.woff') format('woff'),
         url('http://webfont.webdesigner.in.th/font/THSarabunNew/thsarabunnew.ttf') format('truetype'),
         url('http://webfont.webdesigner.in.th/font/THSarabunNew/thsarabunnew.svg#THSarabunNewRegular') format('svg');
}

h1, h2, h3, h4, h5, h6 {
	font-family: 'Sarabun', sans-serif;
}

a{
	font-family: 'Sarabun', sans-serif;
}
body{
	font-family: 'Sarabun', sans-serif;
}

span {
	font-family: 'Sarabun', sans-serif;
}
  </style>
  <style>
  .select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #3c8dbc;
  }

  .ui-autocomplete {
    z-index: 5000;
  }
  .nav-tabs{
    background-color: #009688 ;
  }
  /* .tab-content{
      background-color: 5000;
      color:#ffffcc;
      padding:5px
  } */
  .nav-tabs > li > a{
    border: medium none;
  }
  /* .nav-tabs > li > a:hover{
    background-color: #303136 !important;
      border: medium none;
      border-radius: 0;
      color:#fff;
  } */

  </style>
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
<div class="nav">
	<div class="wrapper vec_link">

    <img src="images/vec.png" height="55" />
    <a href="https://www.vec.go.th" target="_blank" class="d-none d-md-inline-block d-lg-inline-block"> สำนักงานคณะกรรมการการอาชีวศึกษา</a>

    <ul>
        <li><a href="/" class="active"><i class="fa fa-home"></i> หน้าหลัก</a></li>
        <li><a href="<?php print $DVE_SERVER_URL; ?>index.php?app/home/index"><i class="fa fa-database"></i> ระบบฐานข้อมูล &#x25BE;</a>
            <ul>
              <li><a href="<?php print $DVE_SERVER_URL; ?>index.php?app/user/index"><i class="fa fa-user-check"></i> เข้าสู่ระบบ</a><li>
              <li><a href="<?php print $DVE_SERVER_URL; ?>index.php?app/user/password_recovery"><i class="fa fa-key"></i> กู้คืนรหัสผ่าน</a></li>
            </ul>
        </li>
        </ul>
            </div>
            <div>
        </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">ระบบจัดการฐานข้อมูลการจัดการศึกษาระบบทวิภาคี</h1>
                            <h2>ศูนย์อาชีวศึกษาทวิภาคี สำนักงานคณะกรรมการการอาชีวศึกษา</h2>
                            <!-- Signup form-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Icons Grid-->
        <section class="features-icons bg-light text-center">
            <div class="container ">
                <div class="row">
                    <?php
                        foreach($center_data as $row){
                    ?>
                    
                    <div class="col-lg-4 center_link">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 ">
                            <a href="./center/index.php?c=<?php print $row->school_id; ?>">
                                <img src="./images/vec.png" width="120">
                                <h2><?php print $row->center_name; ?></h2>
                                <p class="lead mb-0">ศูนย์หลัก <?php print $row->school_data->school_name; ?></p>
                            </a>
                        </div>
                    </div>

                    <?php
                        }
                    ?>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="#!">เกี่ยวกับเรา</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">ติดต่อเรา</a></li>
                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0">&copy; 2021 - <?php print date('Y'); ?> สำนักงานคณะกรรมการการอาชีวศึกษา</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-twitter fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!"><i class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
