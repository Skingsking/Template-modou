<?php 

	//使用switch方法
	$menny=$_POST['aaa'];

	switch ($menny) {
		case '你吃了么':
			//定义一个数组
			$onearray=array(
				'吃过了',
				'没吃呢',
				'你管我'

				);

			//用array_rand获取
			$one=array_rand($onearray,1);

			//输出
			echo $onearray[$one];
			break;
		
		case '你爱我么':
			//定义一个数组
			$twoarray=array(
				'爱还是不爱',
				'爱你么么哒',
				'你管我'

				);

			//用array_rand获取
			$two=array_rand($twoarray,1);

			//输出
			echo $twoarray[$two];
			break;
		default:
			//准备一些随机的
			$therearray = array(
				'喜洋洋',
				'葫芦娃',
				'好久不见,甚是想念',
				'看到你就烦',
				'滚地板上去睡觉'
			);
		$there = array_rand($therearray,1);

		echo $therearray[$there];
			
			break;
	}




 ?>