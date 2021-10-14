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

$inputt = "rat";
// //custom rev
// $arr = str_split($inputt);

// $index = count($arr);
// $i =0;
// while($i < $index) {

//     $a = $arr[--$index];
//         // if( $i ==$index && $val == $inputt){ 
//         //     echo "Palindrome"; 
//         //     break;
//         //         }
//         // else { 
//         //     echo "Not a Palindrome"; 
//         //     break;
//         // }
        
//             }
// echo $a;
// //another
// for($x=strlen($inputt)-1; $x>=0; $x--)
// {
//    $a= $inputt[$x];
//    if( $val == $inputt){ 
//     echo "Palindrome"; 
//     break;
//         }
//     else { 
//     echo "Not a Palindrome"; 
//     break;
// }
// }
//anayway
// PHP code to check for Palindrome string in PHP
// Using strrev()
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
    //$array1 = str_split($main);
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

done('abzaba');

?>
<h1>Third</h1>
<?php


// function third($arrey){
//     rsort($arrey); 
//     $ssum = $arrey[0]+$arrey[1];
//     echo $ssum;
// }
// third(array(1,2,3,4,5,6,7,8,1,9,14,18));



$arr = array(4, 6, 8, 10, 12, 14, 16); 
$counted = count($arr);
$new =[];
for($i=0;$i<$counted;$i++)
    {
    
    for($j=$i+1;$j<$counted;$j++)
{    array_push($new, $arr[$i] + $arr[$j]);
     echo $arr[$i] + $arr[$j];
    
    
    ?>
    <br>
    <?php
}
}
print_r($new);

?>


</body>
</html>