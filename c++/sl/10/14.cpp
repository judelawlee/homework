#include<stdio.h>
#include<iostream>
#include<iomanip>
#include<cstring>
using namespace std;
int main(){	
	char str1[50],str2[30],*p1,*p2;
	p1=str1;	//让两个指针分别指向两个数组
	p2=str2;
	cout << "please input string1:" << endl;
	gets(str1);
	cout << "please input string2:" << endl;
	gets(str2);
	while(*p1!='\0')
		p1++;	//把p1移动到str1的末尾
	while(*p2!='\0')
		*p1++=*p2++;	//取p2指向的值赋值到p1指向的地址(str1的末尾)，即连接str1和str2
	*p1='\0';
	cout << "the new string is:" << endl;
	puts(str1);
	return 1;
}