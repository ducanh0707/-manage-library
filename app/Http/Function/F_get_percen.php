<?php

function F_get_percen($count,$discount){
    foreach($discount as $val){
        $from_sp = $val->from_sp;
        $to_sp =  $val->to_sp;
        if($val->to_sp == 0){
            $to_sp =  '99999999999';
        }else{
            $to_sp =  $val->to_sp;
        }

        if($count >= $from_sp and $count <= $to_sp){
            echo $val->value;
        }
    }
}

function F_get_percen_price($count,$discount,$pay_limit,$price_total,$style){
    foreach($discount as $val){
        $from_sp = $val->from_sp;
        $to_sp =  $val->to_sp;
        if($val->to_sp == 0){
            $to_sp =  '99999999999';
        }else{
            $to_sp =  $val->to_sp;
        }

        if($count >= $from_sp and $count <= $to_sp){
            $price = $price_total/100 * $val->value;
            if($price > $pay_limit->value){
                $color = 'text-danger';
            }else{
                $color = 'text-primary';
            }
            if($style == 'html'){
                echo '<span class="'.$color.'">'.number_format($price).' đ</span>';
            }else{
                echo $price;
            }
        }
    }
}

