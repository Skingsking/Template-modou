<?php 

	//获取用户数据
	$meny=$_POST['aaa'];

	//switch循环
	switch ($meny) {
		case '你好':
			//获取json文件
			$one=file_get_contents('01.chat.json');
			//在php解码 转换 字符串
			$two=json_decode($one);
			//然后随机 key值  数组 和 输出几个单位
			$there=array_rand($two,1);

			//输出出来
			echo $two[$there];
			break;
		
		default:
			# code...
			break;
	}



 ?>