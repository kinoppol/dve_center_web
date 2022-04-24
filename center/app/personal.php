<?php
$api_url='https://dve.vec.go.th/ajax/dve_center/get_personal_pic.php?sid='.$center_id;
//print $api_url;
$personal_pic=json_decode(file_get_contents($api_url));

?>
<div class="col col-sm-9 col-md-9">
<br>
          <div class="alert alert-danger" role="alert">
            บุคลากร
          </div>
          <div class="card-body">
    <h3><?php print $center_data->center_name; ?></h3>
    <h6><?php print $center_data->school_data->school_name; ?></h6>
    <p>
    <div class="row">
            <div class="col-12 col-sm-12 col-md-12" style="margin-bottom: 20px;">
            <img src="<?php print $personal_pic->pic_url; ?>" width="100%">
            </div>
    </div>
    <div class="row">
        <?php
            $api_url='https://dve.vec.go.th/ajax/dve_center/get_personal.php?school_id='.$center_id;
            //$api_url='http://localhost/dve2020/ajax/dve_center/get_centers.php';
            $personal_data=json_decode(file_get_contents($api_url));
            //print_r($personal_data);
            foreach($personal_data as $person){
                $vext=gen_voip_extension($person);
                ?>
                <div class="col-4 col-sm-4 col-md-4" style="margin-bottom: 20px;">
                    <div class="card" style="width: 100%;">
                    <?php
                     if(!empty($person->image_url)){
                         print '<img src="../../images/personal/'.$person->image_url.'" class="card-img-top" alt="..."  class="img-circle" style="object-fit: cover;">';
                     }else{
                         print '<img src="../../images/director/no_profile.png" class="card-img-top" alt="...">';
                     }
                      ?>
                    <div class="card-body">
                        <h6 class="card-title"><center><?php print $person->prefix.$person->fname.' '.$person->lname; ?></center></h6>
                        <h6 class="card-title"><center>ตำแหน่ง <?php print $person->user_type; ?></center></h6>
                        <h6 class="card-title">อีเมล <a href="mailto:<?php print $person->email; ?>" title="<?php print $person->email; ?>"><?php print str_lim($person->email,18); ?></a></h6>
                        <h6 class="card-title">เบอร์ภายใน <a href="tel:<?php print $vext; ?>" title="<?php print $vext; ?>"><?php print str_lim($vext,20); ?></a></h6>
                    </div>
                    </div>
                </div>

                <?php
            }
        ?>
        </div>
    </p>
    </div>
    </div>