<?php
$config_save="<?php
/*
c_webname=$c_webname;
e_webname=$e_webname;
weburl=$weburl;
logo=../upload/201709/1237295542.gif;
skin_user=red;
web_en_lang=1;
index_type=0;
webhtml=0;
web_img_type=$web_img_type;
web_img_maxsize=$web_img_maxsize
web_text_fonts=$web_img_fonts;
web_text_size=$web_text_size;
web_text_color=$web_text_color;
web_text_angle=$web_text_angle;	
web_img_x=$web_img_x;
web_img_y=$web_img_y;	
c_title_keywords=$c_title_keywords;
e_title_keywords=$e_title_keywords;
web_c_keywords=$web_c_keywords;
web_e_keywords=$web_e_keywords;
web_c_description=$web_c_description;
web_e_description=$web_e_description;
banner_x=$banner_x;
banner_y=$banner_y;
banner_1=;
e_banner_1=../upload/201709/1237297161.jpg;
bannerurl_1=http://www.localhost.com;
banner_2=;
e_banner_2=../upload/201709/1237297163.jpg;
bannerurl_2=http://www.localhost.com;
banner_3=../upload/201710/1237297163.jpg;
e_banner_3=../upload/201709/1237297163.jpg;
bannerurl_3=;
banner_4=../upload/201710/1237297164.jpg;
e_banner_4=../upload/201709/1237297164.jpg;
bannerurl_4=;
banner_5=../upload/201710/1237297165.jpg;
e_banner_5=../upload/201709/1237297165.jpg;
bannerurl_5=;
banner_url=../upload/file/1227692774.swf;
e_banner_url=../upload/file/1227692775.swf;
banner_back=../upload/201709/1237297757.jpg;
e_banner_back=../upload/201709/1237297767.jpg;
online_type=0;
c_footright=web 技术支持;
c_footright=$c_footright;
e_footright=$e_footright;
c_footaddress=$c_footaddress;
e_footaddress=$e_footaddress;
c_foottel=$c_foottel;
e_foottel=$e_foottel;
c_footother=$c_footother;
e_footother=$e_footother;
web_product_list=$web_product_list;
web_news_list=$web_news_list;
web_download_list=$web_download_list;
web_img_list=$web_img_list;
web_job_list=$web_job_list;
web_search_list=$web_search_list;	
*/
?>";
$fp=fopen("../../config/config.inc.php",w);
fwrite($fp,$config_save);
fclose($fp);
?>