#include<stdio.h>
#include<stdlib.h>
main(){
	char Key,CMoney;
	int password,password1=123,i=1,a=1000;	//定义变量
	while(1){
		do{
			system("cls");
			printf("**************************\n");
			printf("*  Please select key:    *\n");
			printf("*  1.password            *\n");
			printf("*  2.get money           *\n");
			printf("*  3.Return              *\n");
			printf("**************************\n");
			Key=getchar();
		}while(Key!='1'&&Key!='2'&&Key!='3');	//当输入值不是1、2、3中任意值时显示do循环体中的内容
		switch(Key){
			case '1':	//输入值为1时执行case1
				system("cls");
				do{
					i++;
					printf("    please input password    ");
					scanf("%d",&password);
					if(password1!=password){
						if(i>3){
							printf("Wrong!Press any key to exit...");
							getchar();
							exit(0);
						}else{
							puts("worng,try again");	//输入次数未到3次，可以继续输入
						}
					}
				}while(password!=password1&&i<=3);
				printf("OK!Press any key to continue···");	//密码正确返回初始界面开始其他操作
				getch();
			break;
			case '2':	//输入值为2时执行case2
				do{
					system("cls");
					if(password1!=password){	//如果在case1中密码输入不正确将无法进行后面操作
						printf("please logging in,press any key to continue...");
						getch();
						break;
					}else{
						printf("************************\n");
						printf("*  Please select:      *\n");
						printf("*  1.$100              *\n");
						printf("*  2.$200              *\n");
						printf("*  3.$300              *\n");
						printf("*  4.$400              *\n");
						printf("************************\n");	
						CMoney=getchar();
					}
				}while(CMoney!='1'&&CMoney!='2'&&CMoney!='3'&&CMoney!='4');	//当输入值不是1、2、3、4中任意值时显示do循环体中的内容
				switch(CMoney){
					case '1':
						system("cls");
						a=a-100;
						printf("**********************************************\n");
						printf("*  Your Credit money is $100,Thank You!      *\n");
						printf("*  The balance is $%d.              *\n",a);
						printf("*  Press any key to return...                *\n");
						printf("**********************************************\n");	
						getch();						
					break;		
					case '2':
						system("cls");
						a=a-200;
						printf("**********************************************\n");
						printf("*  Your Credit money is $200,Thank You!      *\n");
						printf("*  The balance is $%d.              *\n",a);
						printf("*  Press any key to return...                *\n");
						printf("**********************************************\n");	
						getch();						
					break;		
					case '3':
						system("cls");
						a=a-300;
						printf("**********************************************\n");
						printf("*  Your Credit money is $300,Thank You!      *\n");
						printf("*  The balance is $%d.              *\n",a);
						printf("*  Press any key to return...                *\n");
						printf("**********************************************\n");	
						getch();						
					break;
					case '4':
						system("cls");
						a=a-400;
						printf("**********************************************\n");
						printf("*  Your Credit money is $400,Thank You!      *\n");
						printf("*  The balance is $%d.              *\n",a);
						printf("*  Press any key to return...                *\n");
						printf("**********************************************\n");	
						getch();						
					break;
				}
			break;
			case '3':
				printf("*******************************\n");
				printf("*  Thank you for your using!  *\n");
				printf("*      Goodbye!               *\n");
				printf("*******************************\n");
				getchar();
				exit(0);
			break;
		}
	}
}