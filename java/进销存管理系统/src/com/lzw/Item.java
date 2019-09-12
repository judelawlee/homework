package com.lzw;
public class Item {
	private String id;	//id编号属性
	private String name;	//name属性
	public Item(){	//默认构造方法
		
	}
	public Item(String id,String name){
		this.id=id;
		this.name=name;
	}
	public String getId(){
		return id;
	}
	public void setId(String id){
		this.id=id;
	}
	public String getName(){
		return name;
	}
	public void setName(String name){
		this.name=name;
	}
	public String toString(){
		return getName();
	}
}
