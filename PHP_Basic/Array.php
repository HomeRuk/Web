<?php

    $age =[ 
        'Peter'=>'35',
        'Ben'=>'37',
        'Joe'=>'43'
    ];
    /*
     * echo $age['Peter'] . '<br/>';
     * echo $age['Ben'] . '<br/>';
     * echo $age['Joe'] . '<br/>';
    */

    foreach ($age as $ages){
        echo  $ages . '<br/>';
    }

    echo '<hr/>';

    foreach ($age as $key => $ValueAges){
        echo  'Array['. $key . '] is ' . $ValueAges . '<br/>';
    }
    echo '<hr/>';
        print_r($age);
    echo '<hr/>';
        var_dump($age);

?>