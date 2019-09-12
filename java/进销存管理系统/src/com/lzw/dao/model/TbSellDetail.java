package com.lzw.dao.model;
//销售详细信息数据表模型类
public class TbSellDetail implements java.io.Serializable{
	private Integer id;
	private String tbSellMain;
	private String spid;
	private Double dj;	//销售单价
	private Integer sl;	//销售数量
	public TbSellDetail() {
	}
	public TbSellDetail(String tbSellMain, String spid, Double dj, Integer sl) {
		this.tbSellMain = tbSellMain;
		this.spid = spid;
		this.dj = dj;
		this.sl = sl;
	}
	public Integer getId() {
		return this.id;
	}
	public void setId(Integer id) {
		this.id = id;
	}
	public String getTbSellMain() {
		return this.tbSellMain;
	}
	public void setTbSellMain(String tbSellMain) {
		this.tbSellMain = tbSellMain;
	}
	public String getSpid() {
		return this.spid;
	}
	public void setSpid(String spid) {
		this.spid = spid;
	}
	public Double getDj() {
		return this.dj;
	}
	public void setDj(Double dj) {
		this.dj = dj;
	}
	public Integer getSl() {
		return this.sl;
	}
	public void setSl(Integer sl) {
		this.sl = sl;
	}
}
