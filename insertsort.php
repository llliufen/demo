<?php
 function insertsort($array){
	 $count=count($array);
	 for($i=1;$i<$count;$i++){
		 for($j=$i-1;$j>0;$j--){
			 if($array[$j]<$array[$j-1]){
				 $temp=$array[$j];
				 $array[$j]=$array[$j-1];
				 $array[$j-1]=$temp;
			 }
		 }
	 }
	 return $array;
 }
 $old_array=array(7,3,1,9,6);
 $new_arr=insertsort($old_array);
 print_r($new_arr);
 ?>