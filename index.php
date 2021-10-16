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

$test = "DAD";
function Palindrome($string){ 
    if (strrev($string) == $string){ 
        return 1; 
    }
    else{
        return 0;
    }
} 
 


if(Palindrome($test)){ 
    echo "Palindrome"; 
}
else { 
echo "Not a Palindrome"; 
}
?>
<h1>Second</h1>
<?php

function done($main){

    $rev = strrev($main);
    $counted =strlen($main);
    $half =   round($counted /2) -2;  
    $orginal= substr($rev,$half+2);
    $first = strrev($orginal);
    $last = substr($main,$half+2);
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
    //final resly array
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
    
    //spliting evey value than merge into one array
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
