<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Palindrome</h1>
<?php
$input = "abcba";

function Palindrome($input){ 
    
    $reversed="";
    $splited =str_split($input);
    $t_lengt=count($splited);
    for ($y=$t_lengt-1; $y >-1 ; $y--) { 
        $reversed.=$splited[$y];
}
    if ($input== $reversed){ 
        echo "Palindrome";
    }
    else{
        echo "Not a Palindrome";
    }
} 
Palindrome($input);
 
?>
<h1>Second</h1>
<?php

function done($main){

    $rev = strrev($main);
    $counted =strlen($main);
    $half =   round($counted /2);  
    $orginal= substr($rev,$half);
    $first = strrev($orginal);
    $last = substr($main,$half);
        if ($first == $last) {
            echo "Matched";
        }else{
            echo "Not matched";
        }
}

done('abzab');

?>
<h1>Third</h1>
<?php

function third($arr){
     
    $counted = count($arr);
    $new =[];
    //final result array
    $result_array=[];
    for($i=0;$i<$counted;$i++){
        for($j=$i+1;$j<$counted;$j++){
            array_push($new, $arr[$i] + $arr[$j]);
        
    }
    }
    //print_r($new);
    echo 'The max sum of every Two Number is number is : '.max($new);
    $final_array=[];
    ?>
    <br>
    <?php
    //seperating the digits but putting each result into diffrent sub array
    foreach ($new as $value) {
        $int_length =strlen($value);
        $fin_length = $int_length-1;
        if ($int_length > 1){
            array_push($final_array,str_split($value));
        }else{
            array_push($result_array,$value);
        }
    }
    //print_r($final_array);
    ?>
    <br>
    <?php
    foreach($final_array as $value) {
        $tval=0;
        foreach($value as $val) {      
            $tval+=$val;       
        }
        array_push($result_array, $tval);
    }
    echo 'The max sum of all previous result is : '.max($result_array);
    
    }
    
    
third(array(8, 10, 12, 14,9999999,99999,99999999999));
    

?>



</body>
</html>
