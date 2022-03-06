<?php



function format_dtime($date,$date_format){
    if($date != ""){
        $sec = strtotime($date);  
        $newdate = date ($date_format, $sec); 
    }
    else {
        $newdate = "";
    } 
    return $newdate;
}

function sale_percent($price,$sale_price){
    $percent_ = 100 - round($sale_price * 100 / $price);

    return $percent_.'%';
}