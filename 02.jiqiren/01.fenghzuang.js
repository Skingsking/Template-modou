function ajax_tool(url,data,method,success) {
	// 异步对象
	var ajax = new XMLHttpRequest();

	// get 跟post  需要分别写不同的代码
	if (method=='get') {
		// get请求
		if (data) {
			// 如果有值
			url+='?';
			url+=data;
		}else{

		}
		// 设置 方法 以及 url
		ajax.open(method,url);

		// send即可
		ajax.send();
	}else{
		// post请求
		// post请求 url 是不需要改变
		ajax.open(method,url);

		// 需要设置请求报文
		ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");

		// 判断data send发送数据
		if (data) {
			// 如果有值 从send发送
			ajax.send(data);
		}else{
			// 木有值 直接发送即可
			ajax.send();
		}
	}

	// 注册事件
	ajax.onreadystatechange = function () {
		// 在事件中 获取数据 并修改界面显示
		if (ajax.readyState==4&&ajax.status==200) {
			// console.log(ajax.responseText);

			// 将 数据 让 外面可以使用
			// return ajax.responseText;

			// 当 onreadystatechange 调用时 说明 数据回来了
			// ajax.responseText;

			// 如果说 外面可以传入一个 function 作为参数 success
			success(ajax.responseText);
		}
	}

}




function ajax_tool_pro(option) {
	// 异步对象
	var ajax = new XMLHttpRequest();

	// get 跟post  需要分别写不同的代码
	if (option.method=='get') {
		// get请求
		if (option.data) {
			// 如果有值
			option.url+='?';
			option.url+=option.data;
		}else{

		}
		// 设置 方法 以及 option.url
		ajax.open(option.method,option.url);

		// send即可
		ajax.send();
	}else{
		// post请求
		// post请求 option.url 是不需要改变
		ajax.open(option.method,option.url);

		// 需要设置请求报文
		ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");

		// 判断option.data send发送数据
		if (option.data) {
			// 如果有值 从send发送
			ajax.send(option.data);
		}else{
			// 木有值 直接发送即可
			ajax.send();
		}
	}

	// 注册事件
	ajax.onreadystatechange = function () {
		// 在事件中 获取数据 并修改界面显示
		if (ajax.readyState==4&&ajax.status==200) {
			// console.log(ajax.responseText);

			// 将 数据 让 外面可以使用
			// return ajax.responseText;

			// 当 onreadystatechange 调用时 说明 数据回来了
			// ajax.responseText;

			// 如果说 外面可以传入一个 function 作为参数 success
			option.success(ajax.responseText);
		}
	}

}