<?php
function inc($i){
	echo $i = $i + 1; //$i++
}
$i = 10;
inc($i);

function add(&$str2){
	$str2 = $str2."Call by Rederence"	;
	echo $str2;
}
$str = "This is ";
add($str);
?>