<?php
class Pager{
	var $_total;	//记录总数
	var $pagesize;	//每一页显示的记录数
	var $pages;	//总页数
	var $_cur_page;	//当前页码
	
	function Pager($total,$pagesize,$_cur_page){
		$this->_total=$total;
		$this->pagesize=$pagesize;
		$this->_offset();
		$this->_pager();
		$this->cur_page($_cur_page);
	}
	
	//设置页数
	function cur_page($_cur_page){
		if(isset($_cur_page)&&$_cur_page!=0){
			$this->_cur_page=intval($_cur_page);
		}else{
			$this->_cur_page=1;	//设置为第一页
		}
		return $this->_cur_page;
	}
	
	//计算总页数
	function _pager(){
		return $this->pages=ceil($this->_total/$this->pagesize);
	}
	
	//数据库记录偏移量
	function _offset(){
		return $this->offset=$this->pagesize*($this->_cur_page-1);
	}
	
	//html链接的标签
	function link($url,$exc=''){
		global $lang;
		$text='<form method=post name=page1 action='.$url.'>';
		$text.=$lang['page_total'].'<span>'.$this->pages.'</span>'.$lang['pages'].' '.$lang['page_location'].'<span>'.$this->_cur_page.'</span>'.$lang['pages'].' ';
		$text.=$lang['page_go'].'<input size=1 name=page_input>'.$lang['pages'];
		$text.='<input type=submit name=sub value=GO class=tj></form>';
		return $text;
	}
}












?>