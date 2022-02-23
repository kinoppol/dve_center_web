<?php

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