#include<stdio.h>
#include<iostream>
#include<iomanip>
#include<cstring>
using namespace std;
int main(){	
	char str1[30],str2[30],str3[30],temp[30];
	cout << "请使用scanf和cin输入Hello World!!" << endl;
	scanf("%s",str1);
	cin >> str2;
	cout << "str1:";
	printf("%s\n",str1);
	cout << "str2:";
	cout << str2 << endl;
	cout << "输入流中残留了cin留下的空格符，使用gets接受它：" << endl;
	gets(temp);	//给temp赋值
	cout << "temp:" << temp << endl;
	cout << "请使用gets输入Hello World!!" << endl;
	gets(str3);	//给str3赋值
	cout << "str3:";
	puts(str3);
	return 1;
}