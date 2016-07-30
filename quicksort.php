<?php
function quicksort($array){
	$count=count($array);
	if($count>1){
		$k=$array[0];
		$x=array();
		$y=array();
		for($i=1;$i<$count;$i++){
			if($array[$i]<=$k){
				$x[]=$array[$i];
			}elseif($array[$i]>$k){
				$y[]=$array[$i];
			}
		}
		$x=quicksort($x);
		$y=quicksort($y);
		return array_merge($x,array($k),$y);
	}else{
		return $array;
	}
}
 $old_array=array(7,3,1,9,6);
 $new_arr=quicksort($old_array);
 print_r($new_arr);
 ?>