<?php 


		$men=$_GET['aaa'];

		//swtch循环
		switch ($men) {
			case '你好':
				//接收json文件
				 $one=file_get_contents('01.chat.json');

				//解码
				 $two=json_decode($one);

				//获取里面的值 arrar_rand 1数组  2输出几个值
				 $there=array_rand($two,1);


				//输出出来
				echo $two[$there];
				break;
			
			default:
				# code...
				break;
		}

 ?>