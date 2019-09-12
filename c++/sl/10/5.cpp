#include<stdio.h>
#include<iostream>
#include<iomanip>
#include<cstring>
using namespace std;
int main(){	
	char str1[30],str2[20];
	cout << "请输入数组1" << endl;	//给str1赋值
	cin >> str1;	
	cout << "请输入数组2" << endl;	//给str2赋值
	cin >> str2;
	if(30>strlen(str1)+strlen(str2)){	//判断两个字符串长度之和是否超过30
		strcat(str1,str2);	//链接str1和str2
		cout << "Now the string1 is:" << str1 << endl;
	}else{
		cout << "操作失败" << endl;
	}
	return 1;
}