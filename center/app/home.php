  <!--start content -->
  <div class="col col-sm-9 col-md-9">
          <br>
          <div class="alert alert-success" role="alert">
            ข่าวประชาสัมพันธ์
          </div>
          <div class="row">
          <div class="col-12" style="margin-bottom: 20px;">

            <?php
            $api_url=DVE_URL.'ajax/dve_center/get_all_news.php?cid='.$center_id;
            $news=json_decode(file_get_contents($api_url));
            if(count($news)>0){
              print '<table id="newsTable" class="display" style="width: 100%;">
              <thead>
              <tr>
                  <th width="65%">หัวข้อข่าว</th>
                  <th width="20%">วันที่เผยแพร่</th>
                  <th width="15%">อ่านข่าว</th>
              </tr>
          </thead>
          <tbody>';
            foreach($news as $n){
              //print_r($n);
            ?>
            <tr>
                <td><?php print $n->subject; ?></td>
                <td><?php print thai_date_fullmonth(strtotime($n->public_time)); ?></td>
                <td align="center"><a href="#<?php print $n->id; ?>" data-href="./readNews.php?nid=<?php print $n->id; ?>" data-toggle="modal" data-target="#readNews" class="btn btn-primary btn-sm openPopup" target="_blank">อ่านข่าว</a></td>
            </tr>
            <?php
            }
            
            print '
            </tbody>
            </table>';
            $systemFoot.='
            <script>
            $.extend(true, $.fn.dataTable.defaults, {
              "language": {
                        "sProcessing": "กำลังดำเนินการ...",
                        "sLengthMenu": "แสดง_MENU_ ข่าว",
                        "sZeroRecords": "ไม่พบข้อมูล",
                        "sInfo": "แสดงข่าวที่ _START_ ถึงข่าวที่ _END_ จากทั้งหมด _TOTAL_ ข่าว",
                        "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 ข่าว",
                        "sInfoFiltered": "(กรองข้อมูลจากข่าวทั้งหมด _MAX_ ข่าว)",
                        "sInfoPostFix": "",
                        "sSearch": "ค้นหาข่าว:",
                        "sUrl": "",
                        "oPaginate": {
                                      "sFirst": "เิริ่มต้น",
                                      "sPrevious": "ก่อนหน้า",
                                      "sNext": "ถัดไป",
                                      "sLast": "สุดท้าย"
                        },
                        "order": []
               }
          });
            $(document).ready(function () {
                $("#newsTable").DataTable();
            });
            </script>
            ';
            }else if(count($news)==0){
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
            </div>
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