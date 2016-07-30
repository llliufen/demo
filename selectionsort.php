<?php
function selectionsort($array){
	$count=count($array);
	for($i=0;$i<$count-1;$i++){
		$min=$i;
		for($j=$i+1;$j<$count;$j++){
			if($array[$j]<$array[$min]){
				$min=$j;
			}
			echo $array[$min];
			if($min!=$i){
				$temp=$array[$min];
				$array[$min]=$array[$i];
				$array[$i]=$temp;
			}
		}
	}
	return $array;
}
 $old_array=array(7,3,1,9,6);
 $new_arr=selectionsort($old_array);
 print_r($new_arr);
 ?>