<?php
 function bubblesort($array){
	 $count=count($array);
	 for($i=0;$i<$count;$i++){
		 for($j=0;$j<$count-$i-1;$j++){
			 if($array[$j]>$array[$j+1]){
				 $temp=$array[$j];
				 $array[$j]=$array[$j+1];
				 $array[$j+1]=$temp;
			 }
		 }
	 }
	 return $array;
 }
 $old_array=array(7,3,1,9,6);
 $new_arr=bubblesort($old_array);
 print_r($new_arr);
 ?>