<?php 


	//首先用POST获取到name属性
		$key=$_POST['name'];

		//使用switch循环
			switch ($key) {
				case '你好':
					//首先获取到json里面的内容
					//读取文件
					$one=file_get_contents('01.chat.json');

					//然后转换为数组
					$two=json_decode($one);

					//或许其中的一个元素
					$there=array_rand($two);

					//输出出来
					echo $two[$there];
					break;
				
				default:
					# code...
					break;
			}




 ?>