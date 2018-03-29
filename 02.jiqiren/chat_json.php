<?php 


	
	header('content-type:text/html;charset=utf-8');

		//先获取到数组
		 $str=file_get_contents('chat.json');

		// 为了 使用方便 讲 字符串 转化为 对应的php对象(数组) 方便使用
		// 利用解码
		// json_decode()  解码 字符串->php中的对象
		$der=json_decode($str);

		//解码完事后 用array_rand（）操作 来获取 一个是数组 一个为值
		$love=array_rand($der,1);

		//输出出来
		echo $der[$love];


 ?>