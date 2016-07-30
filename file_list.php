<?php
function file_list($path){
	if($handle=opendir($path)){    //打开路径成功
		while(($file=readdir($handle))!==false){    //循环读取目录中的文件名并赋值给$file
			if($file!="."&&$file!=".."){
				if(is_dir($path."/".$file)){     //排除当前路径和前一路径
					echo $path."/".$file."<br>";   //去掉此行是所有的非目录文件
					file_list($path."/".$file);
				}
				else{
					echo $path.":".$file."<br>";
				}
			}
		}
	}
}
print_r(file_list("D:/wamp"));