
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>


	
	


<?php

        function get_random_ad_class($fname)
        {

                //注意 md5是 字母和数字，但是html的id必须字母开头
                $str_func_md5 = md5($fname);
                //$rands_str_func_md5 = str_shuffle(str_func_md5); //打乱字符串
                $rands_str_func_md5 = $str_func_md5.$str_func_md5; //合并2md5让字符变更长
                $text_func_in_random = 'juzaqnxtmvlwghkersbiocdyfp'; //'abcdefghijklmnopqrstuvwxyz'
                //$rands_func_str = str_shuffle($text_func_in_random); //打乱字符串
                $rands_func_str = $text_func_in_random.$text_func_in_random; //合并让字符变更长
                //$cut_func_rands = substr($rands_func_str, 0, 2); //substr(string,start,length);返回字符串的一部分
                //date("n")数字月份1-12,1月(1,6) 从第二个开始截6个，6月(6,6)从第七个开始截6个
				$cut_func_rands_temp = substr($rands_func_str, date("n"), 6);
				$cut_func_rands = substr($cut_func_rands_temp, 1, 3);
                //$random_func_length = rand(4, 8);  //获取5-8之间的随机数，用来截取一个5-8位的str
                $chu_value = 15 + date("n");
                $random_func_length  = round($chu_value/3);
                $str_func_adposition = substr($cut_func_rands.$rands_str_func_md5, 0,$random_func_length); //md5加密，使用post id作为基准，从而保持body和footer中这个值的一致性
                return $str_func_adposition;
        }
        //申明global变量，这样after footer才能同样调用，但after footer需要再次声明global $str_adblock;才行

        global $str_application_ad1,$str_application_ad2,$str_application_ad3,$str_application_ad4;
        global $str_category_main_ad1,$str_category_main_ad2,$str_category_right_ad1,$str_category_right_ad2;  
        global $str_home_ad1,$str_home_ad2,$str_home_ad3,$str_home_ad4;  
        global $str_single_bottom_ad1,$str_single_bottom_ad2,$str_single_right_ad1,$str_single_top_ad1;  
			
        $str_application_ad1 = get_random_ad_class("application-ad1");  
        $str_application_ad2 = get_random_ad_class("application-ad2");  
        $str_application_ad3 = get_random_ad_class("application-ad3");  
        $str_application_ad4 = get_random_ad_class("application-ad4");  
        $str_category_main_ad1 = get_random_ad_class("category-main-ad1");  
        $str_category_main_ad2 = get_random_ad_class("category-main-ad2");  
        $str_category_right_ad1 = get_random_ad_class("category-right-ad1");  
        $str_category_right_ad2 = get_random_ad_class("category-right-ad2");  
        $str_home_ad1 = get_random_ad_class("home-ad1");  
        $str_home_ad2 = get_random_ad_class("home-ad2");  
        $str_home_ad3 = get_random_ad_class("home-ad3");  
        $str_home_ad4 = get_random_ad_class("home-ad4");  
        $str_single_bottom_ad1 = get_random_ad_class("single-bottom-ad1");  
        $str_single_bottom_ad2 = get_random_ad_class("single-bottom-ad2");  
        $str_single_right_ad1 = get_random_ad_class("single-right-ad1");  
        $str_single_top_ad1 = get_random_ad_class("single-top-ad1");  

?>

<style>   
.<?php echo $str_home_ad1; ?>, .<?php echo $str_home_ad2; ?>, .<?php echo $str_home_ad3; ?>, .<?php echo $str_home_ad4; ?>, .<?php echo $str_category_main_ad1; ?>, .<?php echo $str_category_main_ad2; ?>, .<?php echo $str_category_right_ad1; ?>, .<?php echo $str_category_right_ad2; ?>, .<?php echo $str_single_top_ad1; ?>, .<?php echo $str_single_bottom_ad1; ?>, .<?php echo $str_single_bottom_ad2; ?>, .<?php echo $str_single_right_ad1; ?>, .<?php echo $str_application_ad1; ?>, .<?php echo $str_application_ad2; ?>, .<?php echo $str_application_ad3; ?>, .<?php echo $str_application_ad4; ?>{background-color:#ffffff;min-height:75px;overflow:hidden;min-width:298px;text-align:center;overflow:hidden;}
.<?php echo $str_home_ad1; ?>{width:300px;height:250px;}.<?php echo $str_home_ad2; ?>{border-top: 1px solid #e1e4e8;margin:0 10px 0;height:auto;}.<?php echo $str_home_ad3; ?>{width:620px;height:132px;border: 1px solid #d1d5da;}.<?php echo $str_home_ad4; ?>{width:300px;height:250px;}.<?php echo $str_category_main_ad1; ?>, .<?php echo $str_category_main_ad2; ?>{max-height:200px;}.<?php echo $str_single_top_ad1; ?>{max-height:130px;}.<?php echo $str_application_ad1; ?>, .<?php echo $str_application_ad2; ?>, .<?php echo $str_application_ad3; ?>{width:300px;}.<?php echo $str_application_ad1; ?>{height:auto;}.<?php echo $str_application_ad2; ?>{height:auto;}.<?php echo $str_application_ad4; ?>{max-height:300px;}
	
@media screen and (max-device-width: 900px) {
.<?php echo $str_home_ad1; ?>, .<?php echo $str_home_ad2; ?>, .<?php echo $str_home_ad3; ?>, .<?php echo $str_home_ad4; ?>, .<?php echo $str_category_main_ad1; ?>, .<?php echo $str_category_main_ad2; ?>, .<?php echo $str_category_right_ad1; ?>, .<?php echo $str_category_right_ad2; ?>, .<?php echo $str_single_top_ad1; ?>, .<?php echo $str_single_bottom_ad1; ?>, .<?php echo $str_single_bottom_ad2; ?>, .<?php echo $str_single_right_ad1; ?>, .<?php echo $str_application_ad1; ?>, .<?php echo $str_application_ad2; ?>, .<?php echo $str_application_ad3; ?>, .<?php echo $str_application_ad4; ?>{width:auto;height:auto;max-height:unset;}
}
</style>



	
</head>

<?php
//===========================================================
//下方内容只是例子，告诉你如何插入这几个文件，应该在哪边插入，不能够照抄
//载入方式可能只适合wordpress
//===========================================================
 ?>

<body id="site-body">
<!-- #after body开始 -->
	<?php get_template_part( 'moban-diy/mokuai','after-body');?>
<!-- #after body结束 -->


<?php get_template_part( 'moban-ad/mokuai','home-ad1');?>

<?php get_template_part( 'moban-ad/mokuai','category-main-ad1');?>

<?php get_template_part( 'moban-ad/mokuai','application-ad1');?>

<?php get_template_part( 'moban-ad/mokuai','single-top-ad1');?>


<!-- #after footer开始 -->
	<?php get_template_part( 'moban-diy/mokuai','after-footer');?>
<!-- #after footer结束 -->
</body>
