#include<stdio.h>
#include<iostream>
#include<iomanip>
#include<cstring>
using namespace std;
int main(){	
	int i,a[10];
	int *p;
	for(i=0;i<10;i++)
		a[i]=i;	//利用循环，分别为10个元素赋值
	p=&a[0];	//让指针p指向数组a的第0个元素的地址
	for(i=0;i<10;i++,p++)	//将数组中的10个元素输出到显示设备
		cout << *p << endl;	//输出p指向的地址中的值
	return 1;
}