<?php
$systemFoot='';
$center_id=$_GET['c'];
if(empty($center_id))header('location:../');
require_once('library/function.php');

$api_url='https://dve.vec.go.th/ajax/dve_center/get_center.php?cid='.$center_id;
$center_data=json_decode(file_get_contents($api_url));
$provinces=explode(',',$center_data->provinces);

$schools=array();
foreach($provinces as $p){
  

  $api_url='https://dve.vec.go.th/ajax/api/get_school_in_province.php?pid='.$p;
  $school_data=json_decode(file_get_contents($api_url));
  
  foreach($school_data as $sc){
    $schools[$sc->school_id]=$sc->school_name;
  }
}

$page='home';
if(!empty($_GET['p'])){
  $page=$_GET['p'];
}
ob_start();
include "app/".$page.".php";
$content = ob_get_clean();
require_once('template/main.php');