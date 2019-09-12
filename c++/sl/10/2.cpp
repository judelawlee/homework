#include<stdio.h>
#include<iostream>
#include<iomanip>
using namespace std;
int fun(int array[3][3]){	//数组作参数，被优化成指针类型
	int i,j,t;
	for(i=0;i<3;i++){	//控制行
		for(j=0;j<i;j++){	//控制列
			t=array[i][j];
			array[i][j]=array[j][i];
			array[j][i]=t;
		}
	}
	return 0;
}
int main(){
	int i,j;
	int array[3][3]={{1,2,3},{4,5,6},{7,8,9}};	//定义3行3列的数组
	cout << "converted front" << endl;
	for(i=0;i<3;i++){	//循环遍历数组元素
		for(j=0;j<3;j++){
			cout << setw(7) << array[i][j];	//按7个宽度输出
		}
		cout << endl;
	}
	fun(array);	//调用fun函数，交换行列
	cout << "converted result" << endl;
	for(i=0;i<3;i++){	
		for(j=0;j<3;j++){
			cout << setw(7) << array[i][j];	//输出交换之后的数组
		}
		cout << endl;
	}	
	return 1;
}