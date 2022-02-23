<!doctype html>
<?php
//print $api_url;
//$api_url='http://localhost/dve2020/ajax/dve_center/get_centers.php';

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
                  <h3><?php print $title; ?></h3>
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
            <?php
                $menu=array(
                    'home'=>array(
                        'url'=>'./?c='. $center_id,
                        'text'=>'หน้าหลัก',
                    ),
                    'personal'=>array(
                        'url'=>'./?c='. $center_id.'&p=personal',
                        'text'=>'บุคลากร',
                    ),
                    'contact'=>array(
                        'url'=>'./?c='. $center_id.'&p=contact',
                        'text'=>'ติดต่อศูนย์',
                    ),
                    'about'=>array(
                        'url'=>'#',
                        'ext'=>' data-toggle="modal" data-target="#about"',
                        'text'=>'เกี่ยวกับระบบ',
                    ),
                );
                print main_menu($menu,$page);
            ?>
            
              <form action="https://google.com/search" target="_blank" type="GET" class="form-inline my-2 my-lg-0">
                <input type="hidden" name="as_sitesearch" value="dve.vec.go.th">
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
            <?php
            

$api_url='https://dve.vec.go.th/ajax/school/get_director_pic.php?sid='.$center_id;
//print $api_url;
$director_pic=json_decode(file_get_contents($api_url));
//print_r($director_pic);

            ?>
            <a href="#" class="list-group-item list-group-item-action"><img src="<?php print $director_pic->pic_url; ?>" width="210"></a>
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
              
              
              foreach($provinces as $p){
                
                $api_url='https://dve.vec.go.th/ajax/api/get_province_data.php?pid='.$p;
                $province_data=json_decode(file_get_contents($api_url));

                //print_r($schools);

            ?>
            <a href="https://dve.vec.go.th/index.php?app/home/index_province&province_id=<?php print $p;?>" class="list-group-item list-group-item-action" target="_blank"><?php print 'จังหวัด'.$province_data->province_name; ?></a>
            <?php
              }
              //print_r($schools);
              ?>
          </div>
        </div>
        <!--end menu left -->
      <?php
        print $content;
      ?>
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
        <!--
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
            -->
<div class="modal fade bd-example-modal-lg" id="readNews" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-body" id="newsBody">
      โปรดรอสักครู่..
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" id="about" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-body id="aboutBody"">
      <h3>ระบบจัดการฐานข้อมูลการจัดการศึกษาทวิภาคี</h3>
      <p>ระบบบริหารจัดการหน้าเว็บเพ็จของศูนย์อาชีวศึกษาทวิภาคีเขตพื้นที่<br>
      &copy; 2021-<?php print date('Y'); ?> <a href="http://dvec.vec.go.th">ศูนย์อาชีวศึกษาทวิภาคี</a> · <a href="http://www.vec.go.th">สำนักงานคณะกรรมการการอาชีวศึกษา</a><br>
      Powered template by <a href="https://github.com/devbanban/school-template" target="_blank">devbanban school-template</a>
      </p>
    </div>
  </div>
</div>

      </body>
    </html>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
  $(document).ready(function(){
      $('.openPopup').on('click',function(){
          var dataURL = $(this).attr('data-href');
          $('#newsBody').load(dataURL,function(){
              $('#myModal').modal({show:true});
          });
      }); 
  });
  </script>