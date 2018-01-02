<?php
session_start();
$admin_index=true;
$force_index='webinfo';
require_once 'login/login_check.php';
require_once 'left.php';

$admin_list=$db->get_one('select * from '.$web_admin_table.' where admin_id=\''.$_SESSION['webinfo_admin_name'].'\'');

$mysql=mysql_get_server_info();
$feedback=$db->counter($web_feedback,' where readok=0','*');
$message=$db->counter($web_message,' where readok=0','*');
$link=$db->counter($web_link,' where show_ok=0','*');

$css_url='templates/'.$web_skin.'/css/';
$js_url='templates/'.$web_skin.'/js/';
$img_url='templates/'.$web_skin.'/images/';
include template('index');
footer();
?>