<?php
//print_r($_GET);
$news_id=$_GET['nid'];
$api_url='http://dve.bncc.ac.th/ajax/dve_center/get_news_data.php?nid='.$news_id;
$news=json_decode(file_get_contents($api_url));
//print_r($news);
print '<h3>'.$news->subject.'</h3>';
print '<p>'.strlink($news->detail).'</p>';
if(!empty($news->attach_files)){
    print '
    <h6><i>ไฟล์แนบ</i></h6><p>';
    $files=json_decode($news->attach_files);
?>
<div class="col col-sm-9 col-md-9">
          <div class="row">
<?php
    foreach($files as $f){
        $fname=explode('.',$f->location);
        $ext=end($fname);
        $file_url='https://dve.bncc.ac.th/files/news/'.$news->center_id.'/'.$f->location;
        if(is_numeric(array_search($ext,array('jpg','JPG','jpeg','JPEG','png','PNG')))){
            ?>

            <div class="col-6 col-sm-4 col-md-4" style="margin-bottom: 20px;">
                <div class="card" style="width: 100%;">
                <a href="<?php print $file_url; ?>" target="_blank"><img src="<?php print $file_url; ?>" class="card-img-top" alt="<?php print $f->name; ?>">
                    </a>
                </div>
              </div>

            <?php
        }else{
            ?>

            <div class="col-6 col-sm-4 col-md-4" style="margin-bottom: 20px;">
                <div class="card" style="width: 100%;">
                  <img src="img/file.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 class="card-title"><?php print $v; ?></h6>
                    <a href="<?php print $file_url; ?>" target="_blank"><?php print $f->name; ?></a>
                  </div>
                </div>
              </div>

            <?php
        }
    }
    ?>
          </div>
          </div>
<?php
}



function strlink($str){
    $html_links = preg_replace('"\b(https?://\S+)"', '<a href="$1" target="_blank">$1</a>', $str);
    return $html_links;
}