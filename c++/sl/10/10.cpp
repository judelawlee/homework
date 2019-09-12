#include<stdio.h>
#include<iostream>
#include<iomanip>
#include<cstring>
using namespace std;
int main(){	
	int array1[3][4]={{1,2,3,4},{5,6,7,8},{9,10,11,12}};	//定义3行4列整形数组并初始化
	int array2[12]={0};
	int row,col,i;
	cout << "array old" << endl;
	for(row=0;row<3;row++){	//遍历array1
		for(col=0;col<4;col++){
			cout << array1[row][col] << " ";
		}
		cout << endl;
	}
	cout << "array new" << endl;
	for(row=0;row<3;row++){	//遍历array1
		for(col=0;col<4;col++){
			i=col+row*4;
			array2[i]=array1[row][col];
		}
	}
	for(i=0;i<12;i++){
		cout << array2[i] << endl;
	}
	return 1;
}