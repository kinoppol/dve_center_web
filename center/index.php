<!doctype html>
<?php
$center_id=$_GET['c'];
if(empty($center_id))header('location:../');
$api_url='https://dve.vec.go.th/ajax/dve_center/get_center.php?cid='.$center_id;
//print $api_url;
//$api_url='http://localhost/dve2020/ajax/dve_center/get_centers.php';
$center_data=json_decode(file_get_contents($api_url));
//print_r($center_data);
$title=$center_data->center_name;
$school_name=$center_data->school_data->school_name;
$director_name=$center_data->school_data->director_name;
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <title><?php print $title; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
  <style>
  body{
    font-family: 'Kanit', sans-serif;
  }
  :is(h1, h2, h3, h4, h5, h6) {
    font-family: 'Kanit', sans-serif;
}

span {
    font-family: 'Kanit', sans-serif;
}
  </style>
  </head>
  <body>
    <!--start  banner -->
    <div class="container">
      <div class="row">
        <div class="col col-sm-12 col-md-12">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <!--
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
-->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/def.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5><?php print $title; ?></h5>
                  <p>ศูนย์หลัก<?php print $school_name; ?></p>
                </div>
              </div>
              <!--
              <div class="carousel-item">
                <img src="img/1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
-->
        </div>
      </div>
    </div>
    <!--end  banner -->
    <!--start  menu2 -->
    <div class="container">
      <div class="row">
        <div class="col col-sm-12 col-md-12">
          <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="../">
              DVE-Center
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="./?c=<?php print $center_id; ?>">หน้าหลัก <span class="sr-only">(current)</span></a>
                </li><!--
                <li class="nav-item">
                  <a class="nav-link" href="https://www.youtube.com/c/devbanban" target="_blank">Youtube</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://devbanban.com/?p=2867" target="_blank">คอร์สออนไลน์</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://devbanban.com/?page_id=2309" target="_blank">สนับสนุน</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://www.facebook.com/sornwebsites/" target="_blank">ติดต่อ</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>-->
              </ul>
              <form action="https://google.com/search" target="_blank" type="GET" class="form-inline my-2 my-lg-0">
                <input type="hidden" name="as_sitesearch" value="vec.go.th">
                <input class="form-control mr-sm-2" type="search" name="q" placeholder="คำค้น" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ค้นหา</button>
              </form>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <!--end  menu -->
    <!--start  main -->
    <div class="container">
      <div class="row">
        <!--start menu left -->
        <div class="col-sm-3 col-md-3 d-none d-sm-block">
          <br>
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">
              ผู้บริหาร
            </a>
            <a href="#" class="list-group-item list-group-item-action"><img src="../images/no_profile.png" width="210"></a>
            <center>
              <a href="#" class="list-group-item list-group-item-action"><?php print $director_name; ?><br>
              ผู้อำนวยการ<br><?php print $school_name; ?></a></center>
          </div>
          <br>
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">
              จังหวัดภายในเขตพื้นที่
            </a>
            <?php
              $provinces=explode(',',$center_data->provinces);
              $schools=array();
              foreach($provinces as $p){
                
                $api_url='https://dve.vec.go.th/ajax/api/get_province_data.php?pid='.$p;
                $province_data=json_decode(file_get_contents($api_url));

                $api_url='https://dve.vec.go.th/ajax/api/get_school_in_province.php?pid='.$p;
                $school_data=json_decode(file_get_contents($api_url));
                $schools[$school_data->school_id]=$school_data;

            ?>
            <a href="https://dve.vec.go.th/index.php?app/home/index_province&province_id=<?php print $p;?>" class="list-group-item list-group-item-action" target="_blank"><?php print 'จังหวัด'.$province_data->province_name; ?></a>
            <?php
              }
              //print_r($schools);
              ?>
          </div>
        </div>
        <!--end menu left -->
        <!--start content -->
        <div class="col col-sm-9 col-md-9">
          <br>
          <div class="alert alert-success" role="alert">
            ข่าวประชาสัมพันธ์
          </div>
          <div class="row">
            <div class="col-6 col-sm-3 col-md-3" style="margin-bottom: 20px;">
              <div class="card" style="width: 100%;">
                <div class="card-body">
                  <h5 class="card-title">ข่าวประชาสัมพันธ์</h5>
                  <a href="https://dve.vec.go.th" class="btn btn-primary btn-sm" target="_blank">อ่านต่อ</a>
                </div>
              </div>
            </div>
            </div><!-- row -->
            <div class="alert alert-warning" role="alert">
              สถานศึกษาในเขตพื้นที่
            </div>
            <div class="row">
              <?php
              foreach($schools as $row){
              ?>
              <div class="col-6 col-sm-3 col-md-3" style="margin-bottom: 20px;">
                <div class="card" style="width: 100%;">
                  <img src="img/vec_school.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 class="card-title"><?php print $row->school_name; ?></h6>
                    <a href="https://dve.vec.go.th/index.php?app/home/index_school&school_id=<?php print $row->school_id; ?>" class="btn btn-primary btn-sm" target="_blank">ดูข้อมูล</a>
                  </div>
                </div>
              </div>
              <?php
              }
              ?>
              </div><!-- row -->
            </div>
            <!--end content -->
          </div>
        </div>
        <!--end  main  -->
        
        <!--start  footer -->
        <div class="container-fluid" style="background-color: #e3f2fd;">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
              <p align="center" class="myfooter"><?php print $title; ?> - <?php print $school_name; ?>
              <br>
              &copy; 2021-<?php print date('Y'); ?> <a href="http://dvec.vec.go.th">ศูนย์อาชีวศึกษาทวิภาคี</a> · <a href="http://www.vec.go.th">สำนักงานคณะกรรมการการอาชีวศึกษา</a>
             </p>
            </div>
          </div>
        </div>
        <!--end  footer -->
      </body>
    </html>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>