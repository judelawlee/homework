enum TWARDS{UP,DOWN,LEFT,RIGHT,OVER};	//方向枚举
class GObject{
	TWARDS tw;	//朝向
	//相同的特性：
	POINT point;	//中心坐标
	bool Collision();	//逻辑碰撞检测，将物体摆放到合理的位置
	//相同的特性，但是实现方法不同
	void virtual action()=0;	//具体的行为
	void virtual Draw(HDC&hdc)=0	//绘制对象
}