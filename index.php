<?php
$title='ศูนย์อาชีวศึกษาทวิภาคีเขตพื้นที่';
$api_url='https://dve.vec.go.th/ajax/dve_center/get_centers.php';
//$api_url='http://localhost/dve2020/ajax/dve_center/get_centers.php';
$center_data=json_decode(file_get_contents($api_url));

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
        <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
  <style>
  body{
    font-family: 'Kanit', sans-serif;
  }
  :is(h1, h2, h3, h4, h5, h6, p) {
    font-family: 'Kanit', sans-serif;
}

span {
    font-family: 'Kanit', sans-serif;
}
  </style>
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            a:link{
                color:black;
                text-decoration:none;
            }
            a:hover{
                color:darkred;
                text-decoration:underline;
            }
            a:visited{
                color:black;
                text-decoration:none;
            }
        </style>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="#!"><?php print $title; ?></a>
                <!-- <a class="btn btn-primary" href="../index.php?app/user/index">เข้าสู่ระบบ</a> -->
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">ศูนย์อาชีวศึกษาทวิภาคีเขตพื้นที่</h1>
                            <h2>สำนักงานคณะกรรมการการอาชีวศึกษา</h2>
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
            <div class="container">
                <div class="row">
                    <?php
                        foreach($center_data as $row){
                    ?>
                    
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
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
