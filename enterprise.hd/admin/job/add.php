<?php
require_once '../login/login_check.php';
include_once("../../fckeditor/fckeditor.php");
require_once '../left.php';
$css_url='../templates/'.$web_skin.'/css/';
$js_url='../templates/'.$web_skin.'/js/';
$img_url='../templates/'.$web_skin.'/images/';
include template('job_add');
footer();
?>