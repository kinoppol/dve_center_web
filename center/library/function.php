<?php
function gen_voip_extension($person_data){
  return '3'.$person_data->user_type_id.$person_data->school_id;
}
function main_menu($arr,$def=false){
    $items='';
    foreach($arr as $k=>$v){
        $active='';
        if($def==$k) $active=' active';

        $items.='
      <li class="nav-item'.$active.'">
        <a class="nav-link" href="'.$v['url'].'"'.(!empty($v['ext'])?' '.$v['ext']:'').'>'.$v['text'].' <span class="sr-only">(current)</span></a>
      </li>';
    }

    $ret=' 
    <ul class="navbar-nav mr-auto">'.$items.'</ul>';
    return $ret;
}

function str_lim($str,$limit=0,$tail='..'){
    if(!$limit||mb_strlen($str)<=$limit) return $str;
    return mb_substr($str,0,$limit-mb_strlen($tail)).$tail; 
}