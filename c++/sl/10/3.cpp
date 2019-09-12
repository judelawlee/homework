#include<stdio.h>
#include<iostream>
#include<iomanip>
using namespace std;
int main(){
	int i;	//定义一个整型变量
	char array[12];	//字符数组
	array[0]='a';	//赋字符a
	array[1]='b';	//赋字符b
	array[2]='\0';	//赋结束符，指针取值到此结束，不继续向下访问
	printf("%s\n",array);	//输出数组元素(访问后面未初始化的内存，输出垃圾值)
	return 1;
}