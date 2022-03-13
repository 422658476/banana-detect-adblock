<?php
//is_singular() : Post, Page, or Attachment
//adblcok检测只有在文章页/首页/附件页加载，这些页面都一定要添加广告
global $str_adblock;  //申明global变量，这样after footer才能同样调用，但after footer需要再次声明global $str_adblock;才行
//注意 md5是 字母和数字，但是html的id必须字母开头
$str_md5 = md5(get_the_ID());
$yu_value_temp = date("W") % 10;  //date("W")周数 （当年的第 42 周）$a % $b $a 除以 $b 的余数。结果（0-9）
$yu_value = 15 + $yu_value_temp; //结果范围 15+（0-9）=15-24
$random_length  = round($yu_value/3);  //round 四舍五入 结果5-8
$text_in_random = 'abomsjdivkputfnglxchyqrwez';  //'abcdefghijklmnopqrstuvwxyz'
//$rands_str = str_shuffle($text_in_random); //打乱字符串
$rands_str = $text_in_random.$text_in_random; //假随机
//$cut_rands = substr($rands_str, 0, 2); //substr(string,start,length);返回字符串的一部分
$cut_rands = substr($rands_str, $yu_value, 2); //$yu_value 15+（0-9）=15-24 保证每周都变
//$random_length = rand(4, 8);  //获取5-8之间的随机数，用来截取一个5-8位的str
//$str_adblock = substr($cut_rands.$str_md5, 0,$random_length); //md5加密，使用post id作为基准，从而保持body和footer中这个值的一致性
$str_adblock = substr($cut_rands.$str_md5, 0,$random_length); //md5加密，使用post id作为基准，从而保持body和footer中这个值的一致性
//echo $str_adblock; 
$p_in_random = '_` -.'; //插入p的字符串
//$rands_p = str_shuffle($p_in_random); //打乱插入p的字符串
$rands_p = $p_in_random.$p_in_random.$p_in_random.$p_in_random.$p_in_random; //变为足够长的._-._-._-._-._-
$p_cut_rands = substr($rands_p, $random_length, 1); //substr(string,start,length);返回字符串的一部分

function mbStrSplit($string, $len = 1) {
  $start = 0;
  $strlen = mb_strlen($string);//中文分割字符串
  while ($strlen) {
    $array[] = mb_substr($string,$start,$len,"utf8");
    $string = mb_substr($string, $len, $strlen,"utf8");
    $strlen = mb_strlen($string);
  }
  return $array;
}
$p_line1 = "禁用广告屏蔽(ad blocker),刷新页面继续浏览";
$p_line1 = implode(mbStrSplit($p_line1, rand(1, 1)), $p_cut_rands); //在$str中每隔1-3个汉字添加一个$p_cut_rands

$p_line2 = "Please disable your ad blocker,refresh page to view.";
$p_line2 = implode(mbStrSplit($p_line2, rand(4, 7)), $p_cut_rands); //在$str中每隔1个汉字添加一个$p_cut_rands

$p_line3 = "请使用firefox或者基于chrome的浏览器浏览本站";
$p_line3 = implode(mbStrSplit($p_line3, rand(1, 1)), $p_cut_rands); //在$str中每隔1个汉字添加一个$p_cut_rands

$p_line4 = "Please use firefox or chrome-based browser to browse this site";
$p_line4 = implode(mbStrSplit($p_line4, rand(4, 7)), $p_cut_rands); //在$str中每隔1个汉字添加一个$p_cut_rands

//随机遮罩div外面的div层数量 或者可以尝试在加上page id,让每一页div数量不同
//date("W")周数的余数 （0-9）%2=（0-1）+1 = 绝对值((1 - 2) + N - N);
$div_count = abs((date("W") % 10 % 2 + 1) + 0 - 0);  
$div_count_bbb = $div_count + 1; 
$div_str_from = "<div>";
$div_str_to = "</div>";
for ($i = 0; $i <= $div_count; $i++) {
    $div_str_from = $div_str_from . "<div>";
	$div_str_to = "</div>" .$div_str_to;
}
//bbb的外层div多1
$div_bbb_str_from = "<div>";
$div_bbb_str_to = "</div>";
for ($i = 0; $i <= $div_count_bbb; $i++) {
    $div_bbb_str_from = $div_bbb_str_from . "<div>";
	$div_bbb_str_to = "</div>" .$div_bbb_str_to;
}

//注意 html 中 id不能是数字开头，当然最好不要有特殊字符
  if (is_single() || is_attachment() || is_front_page() || is_home() || is_category() || is_page( array('last-news', 'often', 'donate-list')) ) {
	  //echo 'adblcok检测';  
	  
	  //$str_adblock = substr(md5(get_the_ID()), 0,7); //md5加密，使用post id作为基准，从而保持body和footer中这个值的一致性
	  //echo $str_adblock; 
	  //注意 html 中 id不能是数字开头，当然最好不要有特殊字符
	  //$str_adblock = 'p'.$str_adblock;
?>

<img style="display:none" src="<?php echo get_template_directory_uri() ?>/moban-img/index.png" width="800" height="600">
<div style="width: 0px;height: 0px;overflow: hidden;visibility: hidden;" ><p>禁用广告屏蔽(ad blocker)，刷新页面继续浏览</p><p>Please disable your ad blocker,refresh page to view.</p><p>请使用firefox或者基于chrome的浏览器浏览本站</p><p>Please use firefox or chrome-based browser to browse this site</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p><p>.</p></div>
<style>
	@keyframes <?php echo $str_adblock; ?>none-to-block {from {height:0%;overflow:hidden;}to {height:<?php echo rand(99, 105); ?>%;overflow:hidden;}}
	#<?php echo $str_adblock; ?>bbb{animation-name: <?php echo $str_adblock; ?>none-to-block;animation-fill-mode: both;animation-delay:<?php echo rand(5650, 5800); ?>ms;}
	
	@keyframes <?php echo $str_adblock; ?>n-to-b {from {height:0%;overflow:hidden;}to {height:<?php echo rand(99, 105); ?>%;overflow:hidden;}}
	#<?php echo $str_adblock; ?>{animation-name: <?php echo $str_adblock; ?>n-to-b;animation-fill-mode: both;animation-delay:<?php echo rand(5850, 6000); ?>ms;}
</style>
<style>
#<?php echo $str_adblock; ?> p, #<?php echo $str_adblock; ?>bbb p{font-size:1.6rem;line-height:1.6;text-align:center;margin:2rem 0;}
#<?php echo $str_adblock; ?>, #<?php echo $str_adblock; ?>bbb{position: fixed;width: 100%;height:100%;background: rgba(255,255,255,.95);z-index:-950;display:block;}
#<?php echo $str_adblock; ?>{z-index:950;}
</style>

<?php echo $div_str_from; ?>
<div id="<?php echo $str_adblock; ?>">
<?php echo $div_str_from; ?>
<p><?php echo $p_line1; ?></p><p><?php echo $p_line2; ?></p><p><?php echo $p_line3; ?></p><p><?php echo $p_line4; ?></p>
<?php echo $div_str_to; ?>
</div>
<?php echo $div_str_to; ?>

<?php echo $div_bbb_str_from; ?>
<div id="<?php echo $str_adblock; ?>bbb">
<?php echo $div_bbb_str_from; ?>
<p><?php echo $p_line1; ?></p><p><?php echo $p_line2; ?></p><p><?php echo $p_line3; ?></p><p><?php echo $p_line4; ?></p>
<?php echo $div_bbb_str_to; ?>
</div>
<?php echo $div_bbb_str_to; ?>
<?php } else { //在不加载adblock检测的页面上要尽快加载.site-content{height: auto;}，从而让页面显示，不加载会导致主要内容只有300px高 ?>

<style>#content{height: auto;}</style>

<?php } ?>