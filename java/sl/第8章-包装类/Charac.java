package _8;
public class Charac {
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		String str=Integer.toString(456);	//获取数组的二进制表示
		String str2=Integer.toBinaryString(456);	//获取数组的二进制表示
		String str3=Integer.toHexString(456);	//获取数组的十六进制表示
		String str4=Integer.toOctalString(456);	//获取数组的八进制表示
		System.out.println("456的十进制表示是："+str);
		System.out.println("456的二进制表示是："+str2);
		System.out.println("456的十六进制表示是："+str3);
		System.out.println("456的八进制表示是："+str4);
	}
}
