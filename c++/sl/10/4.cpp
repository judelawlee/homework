#include<stdio.h>
#include<iostream>
#include<iomanip>
using namespace std;
int main(){	
	int i;
	char array[12]={'H','E','L','L','O',' ','W','O','R','L','D'};
	for(i=0;i<12;i++)	//循环遍历每一个元素
		cout << array[i];
	cout << endl;
	return 1;
}