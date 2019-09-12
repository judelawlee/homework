<?php
	set_time_limit(0);	//永久执行直到程序结束
	$client_socket=socket_create(AF_INET,SOCK_STREAM,SOL_TCP);	//创建套接字
	socket_connect($client_socket,'127.0.0.1','8008');	//连接服务器端套接字
	$send='Hi,socket!I am xuduo.';
	socket_write($client_socket,$send);	//发送请求信息
	$response=socket_read($client_socket,1024);	//读取响应信息
	echo 'Server:'.$response;
	socket_close($client_socket);	//关闭套接字
	
	