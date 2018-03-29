<?php 

	//获取用户的数据
	$meney=$_POST['aaa'];

	//定义一些随机的值
	$suiji=array(
            '讨厌',
			'你好(⊙o⊙)哦',
			'O(∩_∩)O~',
			'老地方见',
			'死鬼',
			'小丹丹'
		);

	//要从数组中获得值
	//需要用 array_rand () 里面有两个参数  1  数组  2 获取几个
	$huoqu=array_rand($suiji,1);

	echo $suiji[$huoqu];
	

	


 ?>