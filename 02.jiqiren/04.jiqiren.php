<?php 

	$key=$_POST['name'];


	//使用switch循环
	switch ($key) {
		case '你好':
			$one=file_get_contents('01.chat.json');

			//解码  获取数组
			$two=json_decode($one);

			//获取一个值
			$there=array_rand($two);

			echo $two[$there];
			break;
		
		default:
			# code...
			break;
	}


 ?>