<?php

function site_title($delimiter = '|', $display=true){
    $title = '';
    if(defined('title') && !defined('subtitle')){
        $title = title;
    } else if(defined('title') && defined('subtitle')){
        $title = title . ' ' . $delimiter . ' ' . subtitle;
    }

    if($display){
        echo "<title>$title</title>";
    }else{
        return $title;
    }
}
