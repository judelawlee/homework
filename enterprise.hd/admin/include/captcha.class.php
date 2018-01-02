<?php
class Captcha{
	//验证码位数
	var $mCheckCodeNum=4;
	
	//产生的验证码
	var $mCheckCode='';
	
	//验证码的图片
	var $mCheckImage='';
	
	//干扰像素
	var $mDisturbColor='';
	
	//验证码的图片宽度
	var $mCheckImageWidth='80';
	
	//验证码的图片高度
	var $mCheckImageHeight='20';	
	
	
	

	//输出头
	function OutFileHeader(){
		header('Content-Type: image/png');
	}	

	//产生验证码
	function CreateCheckCode(){
		session_start();
		$this->mCheckCode=strtoupper(substr(md5(rand()),0,$this->mCheckCodeNum));
		unset($_SESSION['web_capcha']);
		$_SESSION['web_capcha']=$this->mCheckCode;
		return $this->mCheckCode;
	}
	
	//产生验证码图片
	function CreateImage(){
		$this->mCheckImage=@imagecreate($this->mCheckImageWidth,$this->mCheckImageHeight);
		imagecolorallocate($this->mCheckImage,200,200,200);
		return $this->mCheckImage;
	}
	
	//设置图片的干扰像素
	function setDisturbColor(){
		for($i=0;$i<=128;$i++){
			$this->mDisturbColor=imagecolorallocate($this->mCheckImage,rand(0,255),rand(0,255),rand(0,255));
			imagesetpixel($this->mCheckImage,rand(2,128),rand(2,38),$this->mDisturbColor);
		}
	}

	function WriteCheckCodeToImage(){
		for($i=0;$i<=$this->mCheckCodeNum;$i++){
			$bg_color=imagecolorallocate($this->mCheckImage,rand(0,255),rand(0,128),rand(0,255));
			$x=floor($this->mCheckImageWidth/$this->mCheckCodeNum)*$i;
			$y=rand(0,$this->mCheckImageHeight-15);
			imagechar($this->mCheckImage,5,$x,$y,$this->mCheckCode[$i],$bg_color);
		}
	}

	function OutCheckImage(){
		ob_clean();
		$this->OutFileHeader();
		$this->CreateCheckCode();
		$this->CreateImage();
		$this->setDisturbColor();
		$this->WriteCheckCodeToImage();
		imagepng($this->mCheckImage);
	}
}
?>