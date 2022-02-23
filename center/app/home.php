  <!--start content -->
  <div class="col col-sm-9 col-md-9">
          <br>
          <div class="alert alert-success" role="alert">
            ข่าวประชาสัมพันธ์
          </div>
          <div class="row">
            <?php
            $api_url='https://dve.vec.go.th/ajax/dve_center/get_lastest_news.php?cid='.$center_id;
            $news=json_decode(file_get_contents($api_url));
            foreach($news as $n){
              //print_r($n);
            ?>
            <div class="col-6 col-sm-12 col-md-4" style="margin-bottom: 20px;">
              <div class="card" style="width: 100%;">
                <div class="card-body">
                  <h5 class="card-title"><?php print $n->subject; ?></h5>
                  <h6 class="card-title"><?php print mb_substr($n->detail,0,20).'..'; ?></h6>
                  <a href="#<?php print $n->id; ?>" data-href="./readNews.php?nid=<?php print $n->id; ?>" data-toggle="modal" data-target="#readNews" class="btn btn-primary btn-sm openPopup" target="_blank">อ่านข่าว</a>
                </div>
              </div>
            </div>
            <?php
            }
            if(count($news)==0){
              ?>

            <div class="col-6 col-sm-3 col-md-3" style="margin-bottom: 20px;">
              <div class="card" style="width: 100%;">
                <div class="card-body">
                  <h5 class="card-title">ไม่มีข่าวประชาสัมพันธ์</h5>
                 
                </div>
              </div>
            </div>

              <?php
            }
            ?>
            </div><!-- row -->
            <div class="alert alert-warning" role="alert">
              สถานศึกษาในเขตพื้นที่
            </div>
            <div class="row">
              <?php
              foreach($schools as $k=>$v){
              ?>
              <div class="col-6 col-sm-3 col-md-3" style="margin-bottom: 20px;">
                <div class="card" style="width: 100%;">
                  <img src="img/vec_school.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 class="card-title"><?php print $v; ?></h6>
                    <a href="https://dve.vec.go.th/index.php?app/home/index_school&school_id=<?php print $k; ?>" class="btn btn-primary btn-sm form-control" target="_blank">ดูข้อมูล</a>
                  </div>
                </div>
              </div>
              <?php
              }
              ?>
              </div><!-- row -->
            </div>
            <!--end content -->