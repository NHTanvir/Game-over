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
        array_push($final_array,str_split($value));
    }
    $ultimate =call_user_func_array('array_merge', $final_array);
    ?>
    <br>
    <?php
    $final_count = count($ultimate);
    $result_array=[];
    for($i=0,$j=1;$i,$j<$final_count;$i+=2,$j+=2){ 
        array_push($result_array, $ultimate[$i] + $ultimate[$j]);
    }
    echo 'The max sum of all previous result is : '.max($result_array);
    }
third(array(4, 6, 8, 10, 12, 14));
    

?>



</body>
</html>
