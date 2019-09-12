#include<stdio.h>
#include<iostream>
#include<iomanip>
#include<cstring>
using namespace std;
int main(){	
	char str1[30],str2[20];
	int i=0;
	cout << "请输入数组1：" << endl;
	gets(str1);
	cout << "请输入数组2：" << endl;
	gets(str2);
	i=strcmp(str1,str2);	//比较两个字符串的大小(ASCII码值的大小)
	if(i>0)
		cout << "str1>str2" << endl;	//返回正数，输出str1>str2
	else if(i<0)
		cout << "str1<str2" << endl;	//返回负数，输出str1<str2
	else
		cout << "str1=str2" << endl;	//返回0，相对
	return 1;
}