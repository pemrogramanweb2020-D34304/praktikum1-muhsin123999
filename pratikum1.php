<?php
	$star=5;
	for($a=1; $a<=$star; $a++){
	for($i=1; $i<=$a; $i++){
		echo " &nbsp";
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
?>


<?php
	$star=5;
	for($a=1; $a<$star; $a++){
	for($b=1; $b<=$a; $b++){
		echo "&nbsp";
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
?>

<?php

for ($i=5; $i>=1; $i--){
    for ($j=$i; $j>=1; $j--){
        echo $j;
    }echo "<br>";
}
?>




