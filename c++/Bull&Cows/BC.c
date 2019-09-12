#include<stdio.h>	//输入输出函数的头文件
#include<stdlib.h>	//常用子程序
#include<conio.h>	//调用dos控制台I/O
#include<time.h>	
#include<windows.h>
void gotoxy(int x,int y){
	COORD coord={x,y};
	SetConsoleCursorPosition(GetStdHandle(STD_OUTPUT_HANDLE),coord);
}
void guess(int n){
	int acount,bcount,i,j,k=0,flag,a[10],b[10];
	do{
		flag=0;
		srand((unsigned)time(NULL));	//利用系统时钟设定种子
		for(i=0;i<n;i++)	//每次产生0~9范围内任意的一个随机数并存到数组a中
			a[i]=rand()%10;
		for(i=0;i<n-1;i++){
			for(j=i+1;j<n;j++){
				if(a[i]==a[j]){	//判断数组a中是否有相同数字
					flag=1;	//若有上述情况则标志位置1
					break;
				}
			}
		}
	}while(flag==1);	//若标志位为1则重新分配数据
	do{
		k++;	//记录猜数字的次数
		acount=0;	//每次猜的过程中位置与数字均正确的个数
		bcount=0;	//每次猜的过程中位置不正确但数字均正确的个数
		printf("guess:");
		for(i=0;i<n;i++)
			scanf("%d",&b[i]);	//输入猜测的数据到数组b中
		for(i=0;i<n;i++){
			for(j=0;j<n;j++){
				if(a[i]==b[i]){	//检测输入的数据与计算机分配的数据相同且位置相同的个数
					acount++;
					break;
				}
				if(a[i]==b[j]&&i!=j){	//检测输入的数据与计算机分配的数据相同但位置不相同的个数
					bcount++;
					break;
				}				
			}
		}
		printf("clue on:%d A %d B\n\n",acount,bcount);
		if(acount==n){
			if(k==1)	//如果用户一次就输入正确
				printf("you are the topmost rung of Fortune's ladder!!\n\n");
			else if(k<=5)	//如果用户5次以内输入正确
				printf("you are genius!!\n\n");
			else if(k<=10)	//如果用户10次以内输入正确
				printf("you are cleaver!!\n\n");
			else	//其他情况
				printf("you need try hard!!\n\n");
			getchar();	//接收换行字符
			printf("press any key to continue");
			getchar();	//等待接收指令
			break;
		}
	}while(1);
}
void main(){
	int i,n;
	while(1){
		system("cls");
		gotoxy(15,6);
		printf("1.start game");
		gotoxy(15,8);
		printf("2.Rule");
		gotoxy(15,10);
		printf("3.exit\n");
		gotoxy(25,25);
		printf("please choose:");
		scanf("%d",&i);
		switch(i){
			case 1:
				system("cls");
				printf("please input n:\n");
				scanf("%d",&n);
				guess(n);
				sleep(5);
			break;
			case 2:
				system("cls");
				printf("\t\tThe Rules Of The Game\n");
				printf(" step1:input the number of the digits\n");
				printf(" step2:input the number,separated by a space between two numbers\n");
				printf(" step3:A represent location and data are correct\n");
				printf("       B represent location is correct but data is wrong!\n");
				sleep(20);
			break;
			case 3:
				exit(0);
			break;
			default:
			
			break;
		}
	}
}















