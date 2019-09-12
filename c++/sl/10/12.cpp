#include<stdio.h>
#include<iostream>
#include<iomanip>
#include<cstring>
using namespace std;
int main(){	
	int i,j;
	int a[4][3]={{1,2,3},{4,5,6},{7,8,9},{10,11,12}};
	cout << "the array is:" << endl;
	for(int i=0;i<4;i++){	//4ÐÐ
		for(int j=0;j<3;j++){	//3ÁÐ
			cout << *(*(a+i)+j) << endl;
		}
	}
	return 1;
}