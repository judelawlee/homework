#include<stdio.h>
#include<iostream>
#include<iomanip>
#include<cstring>
using namespace std;
int main(){	
	int a[3][4]={{1,2,3,4},{5,6,7,8},{9,10,11,12}};
	int *p;
	p=a[0];
	for(int i=0;i<sizeof(a)/sizeof(int);i++){	//i<48/4£¬Ñ­»·12´Î
		cout << "address:";
		cout << a[i];
		cout << " is ";
		cout << *p++ << endl;
	}

	return 1;
}