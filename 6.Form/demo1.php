<?php
	//HTML 表单用于收集用户输入,然后通过HTTP协议将数据提交给后台

	//HTTP协议有6中传输规则 HEAD、GET、PUT、POST、DELETE、OPTIONS,而HTML的表单传值通常只用到两种GET 、POST

	//1.HEAD：通过发送HTTP请求来从服务器获取数据（不带任何数据，很少使用）
	//2.GET：通过自身携带的数据来获取服务器数据
	//3.POST：直接提交数据给服务器
	//4.PUT：指定服务器端存储位置来提交数据（HTML不支持）
	//5.DELETE：通过指定数据来删除服务器的数据（很少使用）
	//6.OPTIONS：获取URL所支持的方法（极少使用）

	//表单传值：表单传值使用GET和POST两种方式来实现数据提交