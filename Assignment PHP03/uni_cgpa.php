<?php 

#mark entry 
$mark = 88;

#result keeper
$result ="";

#condition chacker
if($mark >= 80){
    $result = "A+";
} elseif($mark >= 75){
    $result = "A";
} elseif($mark >= 70){
    $result = "A-";
} elseif($mark >= 65){
    $result = "B+";
} elseif($mark >= 60){
    $result = "B";
} elseif($mark >= 55){
    $result = "B-";
} elseif($mark >= 50 ){
    $result = "C+";
} elseif($mark >= 45){
    $result = "C";
} elseif($mark >= 40){
    $result = "D";
} elseif($mark < "40"){
    $result = "F";
} else {
    $result = "Sorry! Please enter the mark.";
}

#prrinting result
echo $result;

?>