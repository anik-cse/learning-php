<h1> Array with while loop</h1>

<?php
$array_data = ["Eggs", "Bacon", "HashBrowns", "Beans", "Bread", "RedSauce"];
$arrayLen = count($array_data);

$i = 0;
while ($i < $arrayLen) {
    echo $array_data[$i] . "<br />";

    $i++;
}
?>

<h1> Array with for loop</h1>

<?php for ($i = 0; $i < $arrayLen; $i++) {
    echo $array_data[$i] . "<br />";
} ?>

<h1> Array with foreach loop</h1>

<?php foreach ($array_data as $data) {
    echo $data . "<br />";
} ?>

<h1> Array with Do while loop</h1>

<?php $k = 0;

do {
    echo $array_data[$k] . "<br />";
    $k++;
} while ($k < $arrayLen);


?>