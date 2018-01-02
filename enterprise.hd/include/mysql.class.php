<?php
class dbmysql{
	var $querynum=0;
	var $link;
	
	function dbconn($con_db_host,$con_db_id,$con_db_pass,$con_db_name='',$db_charset='utf8',$pconnect=0){
		if($pconnect){
			if(!$this->link=@mysql_pconnect($con_db_host,$con_db_id,$con_db_pass)){
				$this->halt('Can not connect to MySQL server');
			}
		}else{
			if(!$this->link=@mysql_connect($con_db_host,$con_db_id,$con_db_pass,1)){
				$this->halt('Can not connect to MySQL server');
			}			
		}
		if($this->version()>'4.1'){
			if($db_charset!='latin1'){
				@mysql_query("SET character_set_connection=$db_charset,character_set_result=$db_charset,character_set_client=binary",$this->link);
			}
			if($this->version()>'5.0.1'){
				@mysql_query("SET sql_mode=''",$this->link);
			}
		}
		if($con_db_name){
			@mysql_select_db($con_db_name,$this->link);
			mysql_query("set names utf8");
		}
	}

	function get_one($sql,$type=''){
		$query=$this->query($sql,$type);
		$rs=$this->fetch_array($query);
		$this->free_result($query);
		return $rs;
	}

	function free_result($query){
		return mysql_free_result($query);
	}

	function fetch_array($query,$result_type=MYSQL_ASSOC){
		return mysql_fetch_array($query,$result_type);
	}

	function query($sql,$type=''){
		$func=$type=='UNBUFFERED' && @function_exists('mysql_unbuffered_query')?'mysql_unbuffered_query':'mysql_query';
		if(!($query=$func($sql,$this->link))){
			if(in_array($this->errno(),array(2006,2003))&&substr($type,0,5)!='retry'){
				$this->close();
				global $config_db;
				$db_settings=parse_ini_file($conig_db);
				@extract($db_settings);
				$this->dbconn($con_db_host,$con_db_id,$con_db_pass,$con_db_name='',$pconnect);
				$this->query($sql,'retry'.$type);
			}
		}
		$this->querynum++;
		return $query;
	}
	
	function errno(){
		return intval(($this->link)?mysql_errno($this->link):mysql_errno());
	}
	
	function version(){
		return mysql_get_server_info($this->link);
	}

	function halt($message=''){
		$sqlerror=mysql_error();
		$sqlerrno=mysql_errno();
		$sqlerror=str_replace($dbhost,'dbhost',$sqlerror);
		echo "<br/><br/><b>The URL Is</b>:<br/>http://".$_SERVER[HTTP_HOST].$REQUEST_URI;
		echo "<br/><br/><b>MySQL Server Error</b>:<br/>$sqlerror($sqlerrno)";
		exit;
	}
	
	function counter($table_name,$where_str="", $field_name="*")
	{
	    $where_str = trim($where_str);
	    if(strtolower(substr($where_str,0,5))!='where' && $where_str) $where_str = "where ".$where_str;
	    $query = "select count($field_name) from $table_name $where_str";
	    $result = $this->query($query);
	    $fetch_row = mysql_fetch_row($result);
	    return $fetch_row[0];
	}
}


?>











