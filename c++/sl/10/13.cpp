#include<stdio.h>
#include<iostream>
#include<iomanip>
#include<cstring>
using namespace std;
int main(){	
	int a[3][4];
	int (*b)[4];	//定义一个数组指针，可以指向一个含义4个整型变量的数组
	int *c[4];	//定义一个指针数组，最多只能储存4个指针
	int *p;
	p=a[0];	//让p指向数组a的第0行的行地址
	b=a;	//让b指向数组a
	cout << "利用连续内存的特点，使用int指针将二维int数组初始化" << endl;
	for(int i=0;i<12;i++){	//初始化二维数组
		*(p+i)=i+1;	//给第i行首元素赋值
		cout << a[i/4][i%4] << ",";
		if((i+1)%4==0){
			cout << endl;
		}
	}
	cout << "使用指向数组的指针，二维数组的值改变" << endl;
	for(int i=0;i<3;i++){	
		for(int j=0;j<4;j++){	
			*(*(b+i)+j)+=10;	//通过数组指针修改二维数组内容
		}
	}
	cout << "使用指针数组，再次输出二维数组" << endl;
	for(int i=0;i<3;i++){	
		for(int j=0;j<4;j++){	
			c[j]=&a[i][j];	//用指针数组里的指针指向a[i][j]
			cout << *(c[j]) << ",";
			if((i+1)%4==0){
				cout << endl;
			}
		}
	}
	return 1;
}