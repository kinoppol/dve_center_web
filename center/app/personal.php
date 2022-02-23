<div class="col col-sm-9 col-md-9">
<br>
          <div class="alert alert-danger" role="alert">
            บุคลากร
          </div>
    <h3><?php print $center_data->center_name; ?></h3>
    <h6><?php print $center_data->school_data->school_name; ?></h6>
    <p>
        <?php
            $api_url='https://dve.vec.go.th/ajax/dve_center/get_personal.php?school_id='.$center_id;
            //$api_url='http://localhost/dve2020/ajax/dve_center/get_centers.php';
            $personal_data=json_decode(file_get_contents($api_url));
        ?>
    </p>
    </div>