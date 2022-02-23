<div class="col col-sm-9 col-md-9">
<br>
          <div class="alert alert-info" role="alert">
            ติดต่อศูนย์
          </div>
          <div class="card-body">
    <h3><?php print $center_data->center_name; ?></h3>
    <h6><?php print $center_data->school_data->school_name; ?></h6>
    <p>
    <?php
    if(!empty($center_data->school_data->email)) print ' อีเมล <a href="mailto:'.$center_data->school_data->email.'">'.$center_data->school_data->email.'</a>';
    if(!empty($center_data->school_data->phone)) print ' โทรศัพท์ <a href="tel:'.$center_data->school_data->phone.'">'.$center_data->school_data->phone.'</a>';
    if(!empty($center_data->school_data->fax)) print ' โทรสาร <a href="tel:'.$center_data->school_data->fax.'">'.$center_data->school_data->fax.'</a>';
        $location=trim($center_data->school_data->latitude_longitude);
        if(!empty($location)){
            $map='<iframe width="100%" height="500" src = "https://maps.google.com/maps?q='.$location.'&hl=es;z=14&amp;output=embed"></iframe>';
                print $map;
        }
    ?>
    </p>
    </div>
    </div>