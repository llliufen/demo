<?php
function bucketsort($array){
	$count=count($array);
	$min=min($array);
	$max=max($array);
	for($i=0;$i<$count-1;$i++){
		if($array[$i]>$max){
			$max=$array[$i];
		}elseif($array[$i]<$min){
			$min=$array[$i];
		}
	}
	$buffer=array_fill($min,$max-$min+1,0);
	foreach ($array as $array[$i]){
		$buffer[$array[$i]]++;
	}
	$result=array();
	for($i=$min;$i<$max+1;$i++){
		for($j=0;$j<$buffer[$i];$j++){
			$result[]=$i;
		}
	}
	return $result;
}
$old_array=array(7,3,1,9,6);
 $new_arr=bucketsort($old_array);
 print_r($new_arr);
 ?>