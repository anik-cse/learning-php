<h1>Simplate pyramid</h1>
<?php 

    for ($i = 0; $i <=5; $i++){
        for($j = 0; $j <= $i; $j++){
            echo "*";
        }
        echo "<br>";
    }
?>



<h2>Reverse Pyramid</h2>
<?php 
    for ($i = 0; $i <=5; $i++){
        for($j = 5-$i; $j >=0; $j--){
            echo "*";
        }
        echo "<br>";
    }
?>


<h2>Triangle Pyramid</h2>

<?php 
$size = 5;

for($i=1;$i<=$size;$i++){
    for($j=1;$j<=$size-$i;$j++){
        echo "&nbsp;&nbsp;";
    }
    for($k=1;$k<=$i;$k++){
                echo "*&nbsp;&nbsp;";
    }
echo "<br />";
}
?>