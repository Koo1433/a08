<?php
    function buyCaffee(...$cost){
        $total = 0;
        foreach ($cost as $i){
            $total += $i;
        }
        $cup = $total / 50;
        return $cup;
    }

    $peter = buyCaffee(300,210,50,40);{
    printf("Peter 买了 %d cup coffer", $peter );
    $ali = buyCaffee(200);
    printf(" ali 买了 %d cup coffer" , $ali );
    } 
?>