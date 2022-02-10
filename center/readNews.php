<?php
//print_r($_GET);
$news_id=$_GET['nid'];
$api_url='https://dve.vec.go.th/ajax/dve_center/get_news_data.php?nid='.$news_id;
$news=json_decode(file_get_contents($api_url));
//print_r($news);
print '<h3>'.$news->subject.'</h3>';
print '<p>'.strlink($news->detail).'</p>';
if(!empty($news->attach_files)){
    print '
    <h6><i>ไฟล์แนบ</i></h6><p>';
    $files=json_decode($news->attach_files);

    foreach($files as $f){
        ?>
        <a href="<?php print $f->location; ?>" target="_blank"><?php print $f->name; ?></a><br>
        <?php
    }
    print '</p>';
}



function strlink($str){
    $html_links = preg_replace('"\b(https?://\S+)"', '<a href="$1" target="_blank">$1</a>', $str);
    return $html_links;
}