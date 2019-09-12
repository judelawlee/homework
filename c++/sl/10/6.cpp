#include<stdio.h>
#include<iostream>
#include<iomanip>
#include<cstring>
using namespace std;
int main(){	
	char str1[30],str2[20]={'n','o','n','e','\0'};
	cout << "请输入数组1：" << endl;
	scanf("%s",str1);	//给str1赋值
	strcpy(str1,str2);	//把str2的值复制到str1
	cout << "数组1的内容：" << endl;
	printf("%s",str1);	//输出str1的值
	return 1;
}