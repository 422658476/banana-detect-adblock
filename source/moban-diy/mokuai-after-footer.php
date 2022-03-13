<style>#content{height: auto;}</style>

<?php
//is_singular() : Post, Page, or Attachment
//adblcok检测只有在文章页/首页/附件页加载，这些页面都一定要添加广告
global $str_adblock; //再次申明global变量，这样after footer才能同样调用，但after footer需要再次声明global $str_adblock;才行
  if (is_single() || is_attachment() || is_front_page() || is_home() || is_category() || is_page( array('last-news', 'often', 'donate-list')) ) {
	  //echo 'adblcok检测';
	  //$str_adblock = substr(md5(get_the_ID()), 0,7); //md5加密，使用post id作为基准，从而保持body和footer中这个值的一致性
	  //echo $str_adblock;
	  //注意 html 中 id不能是数字开头，当然最好不要有特殊字符
	  //$str_adblock = 'p'.$str_adblock;
	  //adblock检测加载的js一定要加？，从而不缓存，不然chrome只要缓存过一次js，那么下次就不会加载导致adblock检测不出来
?>

<script>
var <?php echo $str_adblock; ?>checkguishow = false;
var <?php echo $str_adblock; ?>rjno1settimeout = false;
var <?php echo $str_adblock; ?>gcheckrun = false;
var <?php echo $str_adblock; ?>canhade = false;
var <?php echo $str_adblock; ?>aswf = false;
</script>

<script>
//var <?php echo $str_adblock; ?>_str = "";

function <?php echo $str_adblock; ?>_show(fun_str) {

	//<?php echo $str_adblock; ?>_str = <?php echo $str_adblock; ?>_str + " + " + fun_str;
	//console.log('show info：',<?php echo $str_adblock; ?>_str);
 	//document.body.innerHTML = "<p>" + <?php echo $str_adblock; ?>_str + "</p>"; 
	<?php echo $str_adblock; ?>checkguishow = true;
try {
	document.getElementById('<?php echo $str_adblock; ?>').style.width="<?php echo rand(99, 105); ?>%";
} catch (e) {
	if (e.name == "ReferenceError")
	{
		document.styleSheets[0].disabled = true;
		document.getElementsByTagName("img")[0].style='';
		document.getElementsByTagName("div")[0].style='';
	}
}
	document.getElementById('<?php echo $str_adblock; ?>').style.height='<?php echo rand(99, 105); ?>%';

}
	
</script>

<script type="text/javascript" language="javascript">
const <?php echo $str_adblock; ?>promise = new Promise((resolve, reject) => {
		setTimeout(function(){
			try {		
				if (typeof <?php echo $str_adblock; ?>rjno1settimeout == "undefined") {
				}else{
					<?php echo $str_adblock; ?>rjno1settimeout = true;
				}
				if (<?php echo $str_adblock; ?>rjno1settimeout) {
						document.getElementById('<?php echo $str_adblock; ?>bbb').style.display="none";
				}
				//throw new Error('settimeout_error!');
				//resolve(); // if the previous line didn't always throw
			} catch (e) {
			  reject(e)
			}
		},  <?php echo rand(0, 8); ?>);
});
<?php echo $str_adblock; ?>promise.catch(error => {
			document.styleSheets[0].disabled = true;
			document.getElementsByTagName("img")[0].style='';
			document.getElementsByTagName("div")[0].style='';
												  });

</script>

 <?php //在不加载adblock检测的页面上body处就加载.site-content{height: auto;}，从而让页面显示，不加载会导致主要内容只有300px高 ?>

<script type="text/javascript" language="javascript">
	setTimeout(function(){
        if (typeof <?php echo $str_adblock; ?>checkguishow == "undefined") {
			for ( i=0; i<document.styleSheets.length; i++) {
    			void(document.styleSheets.item(i).disabled=true);
			}
			document.getElementsByTagName("img")[0].style=''; 
			document.getElementsByTagName("div")[0].style=''; 
			window.scrollTo({ top: 0});
        }
	},  <?php echo rand(10, 15); ?>);
</script>

<style>#<?php echo $str_adblock; ?>bbb{z-index:950;}</style>

<?php //放在最后，防止加载不及时导致上方的js无法正常触发，导致网页加载只有300px ?>

<?php //onload onerror的fun必须要写在调用处之前 ?>
<script type="text/javascript" language="javascript">
	function <?php echo $str_adblock; ?>_1jserror(){
		setTimeout(function(){
			<?php echo $str_adblock; ?>_show("1jserror");
		}, <?php echo rand(2200, 2400); ?>);
	}
	function <?php echo $str_adblock; ?>_jserror(){
		setTimeout(function(){
			<?php echo $str_adblock; ?>_show("jserror");
		}, <?php echo rand(2500, 2700); ?>);
	}
</script>

<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/moban-js/show_ads.js?v=<?php echo rand(100, 9999); ?>" onerror="<?php echo $str_adblock; ?>_1jserror()"></script>

<script type="text/javascript" src="https://fex.bdstatic.com/hunter/alog/dp.min.js?v=<?php echo rand(100, 9999); ?>" onerror="<?php echo $str_adblock; ?>_jserror()"></script>

<script type="text/javascript" language="javascript">
		setTimeout(function() {
			if (typeof <?php echo $str_adblock; ?>canhade == "undefined") {
			}else{
				<?php echo $str_adblock; ?>canhade = true;
			}
			if (<?php echo $str_adblock; ?>canhade) {
				document.getElementById('<?php echo $str_adblock; ?>').style.width="0%";
			}
		}, <?php echo rand(50, 150); ?>);

		setTimeout(function(){
			<?php global $str_application_ad2,$str_category_main_ad1,$str_home_ad1,$str_single_top_ad1; ?>
			var <?php echo $str_adblock; ?>_home =  document.getElementsByClassName("<?php echo $str_home_ad1; ?>")[0];
			var <?php echo $str_adblock; ?>_main =  document.getElementsByClassName("<?php echo $str_category_main_ad1; ?>")[0];
			var <?php echo $str_adblock; ?>_top =  document.getElementsByClassName("<?php echo $str_single_top_ad1; ?>")[0];
			var <?php echo $str_adblock; ?>_app =  document.getElementsByClassName("<?php echo $str_application_ad2; ?>")[0];
			var <?php echo $str_adblock; ?>_4hide = false;
			
			if (typeof <?php echo $str_adblock; ?>_home == 'object')
			{
				var <?php echo $str_adblock; ?>_home_h = <?php echo $str_adblock; ?>_home.offsetHeight
				if (parseInt(<?php echo $str_adblock; ?>_home_h) < parseInt(20))
				{
					<?php echo $str_adblock; ?>_4hide = true;
				}
				if (window.getComputedStyle(<?php echo $str_adblock; ?>_home).getPropertyValue('text-align') != "center")
				{
					<?php echo $str_adblock; ?>_4hide = true;
				}
			}
			if (typeof <?php echo $str_adblock; ?>_main == 'object')
			{
				var <?php echo $str_adblock; ?>_main_h = <?php echo $str_adblock; ?>_main.offsetHeight
				if (parseInt(<?php echo $str_adblock; ?>_main_h) < parseInt(20))
				{
					<?php echo $str_adblock; ?>_4hide = true;
				}
				if (window.getComputedStyle(<?php echo $str_adblock; ?>_main).getPropertyValue('text-align') != "center")
				{
					<?php echo $str_adblock; ?>_4hide = true;
				}
			}
			if (typeof <?php echo $str_adblock; ?>_top == 'object')
			{
				var <?php echo $str_adblock; ?>_top_h = <?php echo $str_adblock; ?>_top.offsetHeight
				if (parseInt(<?php echo $str_adblock; ?>_top_h) < parseInt(20))
				{
					<?php echo $str_adblock; ?>_4hide = true;
				}
				if (window.getComputedStyle(<?php echo $str_adblock; ?>_top).getPropertyValue('text-align') != "center")
				{
					<?php echo $str_adblock; ?>_4hide = true;
				}
			}
			if (typeof <?php echo $str_adblock; ?>_app == 'object')
			{
				var <?php echo $str_adblock; ?>_app_h = <?php echo $str_adblock; ?>_app.offsetHeight
				if (parseInt(<?php echo $str_adblock; ?>_app_h) < parseInt(20))
				{
					<?php echo $str_adblock; ?>_4hide = true;
				}
				if (window.getComputedStyle(<?php echo $str_adblock; ?>_app).getPropertyValue('text-align') != "center")
				{
					<?php echo $str_adblock; ?>_4hide = true;
				}
			}
			if (<?php echo $str_adblock; ?>_4hide)
			{
					<?php echo $str_adblock; ?>_show("4hide");
			}
		}, <?php echo rand(6500, 6600); ?>);

		setTimeout(function(){
			var <?php echo $str_adblock; ?>e1 =  document.getElementById('aswift_1');
			if (<?php echo $str_adblock; ?>e1 == null)
			{
				if (document.hasFocus()) {
					<?php echo $str_adblock; ?>_show("aswift_1_null");  //not show null ->right "null"->wrong
				}
			} else {
					<?php echo $str_adblock; ?>aswf = true;
				var <?php echo $str_adblock; ?>e1w = <?php echo $str_adblock; ?>e1.offsetWidth
				if (parseInt(<?php echo $str_adblock; ?>e1w) < parseInt(20))
				{
					<?php echo $str_adblock; ?>_show("aswift_1_small_20"); //not show
				}
			}
		}, <?php echo rand(8850, 8900); ?>);

		setTimeout(function(){
			if (typeof google_global_correlator == "undefined") {
					<?php echo $str_adblock; ?>_show("google_global_correlator");
			}
		}, <?php echo rand(8901, 8950); ?>);

		setTimeout(function(){
			if (<?php echo $str_adblock; ?>aswf) {
				
			} else {
				if (document.hasFocus()) {
					<?php echo $str_adblock; ?>_show("aswf");
				}
			}
		}, <?php echo rand(8950, 9050); ?>);

</script>

<script>
var int_error_i = 0;		//console.log('DOM2 error：',event);
window.addEventListener('error',function(event) {
		if(event.target.tagName == "SCRIPT" || event.target.tagName == undefined){int_error_i = int_error_i + 1;}
		if (parseInt(int_error_i) >= parseInt(5)) {<?php echo $str_adblock; ?>_show("error_5_N");}
},true);	
</script>

<script>
window.onload = function(){
		setTimeout(function(){
				if (<?php echo $str_adblock; ?>rjno1settimeout) {
				} else {
					for ( i=0; i<document.styleSheets.length; i++) {
						void(document.styleSheets.item(i).disabled=true);
					}
					document.getElementsByTagName("img")[0].style=''; 
					document.getElementsByTagName("div")[0].style=''; 
					window.scrollTo({ top: 0});
				}
		}, <?php echo rand(1000, 1200); ?>);

		setTimeout(function(){
			if (typeof google_global_correlator == "undefined") {
				<?php echo $str_adblock; ?>_show("onload_google_global_correlator");
				<?php echo $str_adblock; ?>gcheckrun = true;
			} else {
				<?php echo $str_adblock; ?>gcheckrun = true;
			}

			if (_hmt.id == undefined) {
				<?php echo $str_adblock; ?>_show("onload_hmt_id");
			}
			if (typeof google_image_requests == "undefined") {
				<?php echo $str_adblock; ?>_show("onload_google_image_requests");
			}
		}, <?php echo rand(4500, 4600); ?>);
	
		setTimeout(function(){
			//console.log(typeof Goog_Osd_UnloadAdBlock);
			//console.log(Goog_Osd_UnloadAdBlock);
					if (<?php echo $str_adblock; ?>gcheckrun){
						// do something here
					}else
					{
						<?php echo $str_adblock; ?>_show("onload_gcheckrun");
					}

					if (<?php echo $str_adblock; ?>checkguishow)
					{
						var element = document.getElementById('<?php echo $str_adblock; ?>');
						if (typeof(element) != 'undefined' && element != null)
						{
						   //+
							  if (element.offsetWidth == "0" || element.offsetHeight == "0")
							  {
								   //not show
								   document.getElementById('content').innerHTML = "<div class=\"bg space\"><p>禁用广告屏蔽(ad blocker)，刷新页面继续浏览<\/p><p>Please disable your ad blocker,refresh page to view.<\/p><p>请使用firefox或者基于chrome的浏览器浏览本站<\/p><p>Please use firefox or chrome-based browser to browse this site<\/p><\/div>";
							  }
						}
					}
		}, <?php echo rand(4700, 4800); ?>);
};
</script>


 <?php } // adblock 检测代码结束=============  ?>
