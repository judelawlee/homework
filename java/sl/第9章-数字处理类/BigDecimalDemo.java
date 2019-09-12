package _9;
import java.math.BigDecimal;;
public class BigDecimalDemo {
	static final int location=10;
	public BigDecimal add(double value1,double value2){
		//实例化BigDecimal对象
		BigDecimal b1=new BigDecimal(Double.toString(value1));
		BigDecimal b2=new BigDecimal(Double.toString(value2));
		return b1.add(b2);	//调用加法方法
	}	
	public BigDecimal sub(double value1,double value2){
		BigDecimal b1=new BigDecimal(Double.toString(value1));
		BigDecimal b2=new BigDecimal(Double.toString(value2));
		return b1.subtract(b2);	//调用减法方法
	}
	public BigDecimal mul(double value1,double value2){
		BigDecimal b1=new BigDecimal(Double.toString(value1));
		BigDecimal b2=new BigDecimal(Double.toString(value2));
		return b1.multiply(b2);	//调用乘法方法
	}
	public BigDecimal div(double value1,double value2){
		return div(value1,value2,location);	//调用自定义除法方法
	}
	public BigDecimal div(double value1,double value2,int b){
		if(b<0){
			System.out.print("b值必须大于等于0");
		}
		BigDecimal b1=new BigDecimal(Double.toString(value1));
		BigDecimal b2=new BigDecimal(Double.toString(value2));
		//调用除法方法，商小数点后保留b位，并将结果进行四舍五入操作
		return b1.divide(b2,b,BigDecimal.ROUND_HALF_UP);	//调用加法方法
	}
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		BigDecimalDemo b=new BigDecimalDemo();
		System.out.println("两个数字相加结果："+b.add(-7.5, 8.9));
		System.out.println("两个数字相减结果："+b.sub(-7.5, 8.9));
		System.out.println("两个数字相乘结果："+b.mul(-7.5, 8.9));
		System.out.println("两个数字相除结果，结果小数后保留10位："+b.div(10, 2));
		System.out.println("两个数字相除结果，保留小数后5位："+b.div(-7.5, 8.9,5));
	}

}
