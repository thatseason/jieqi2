<?php
echo '
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html style="font-size: 75.2px;">
    <head>
    <meta charset="'.$this->_tpl_vars['jieqi_charset'].'">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="applicable-device" content="mobile">
    <title>'.$this->_tpl_vars['articlename'].'</title>
    <meta name="Keywords" content="'.$this->_tpl_vars['articlename'].','.$this->_tpl_vars['articlename'].'全章节列表,'.$this->_tpl_vars['author'].'">
    <meta name="Description" content="'.$this->_tpl_vars['jieqi_sitename'].'为大家提供'.$this->_tpl_vars['author'].'的'.$this->_tpl_vars['articlename'].'最新章节在线阅读，'.$this->_tpl_vars['articlename'].'全文阅读无广告弹窗，手机在线看小说就选'.$this->_tpl_vars['jieqi_sitename'].'。">
    <link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'">
    <link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'">
    <link rel="canonical" href="'.$this->_tpl_vars['jieqi_url'].'">
    <link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/base.css">
    <link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/recharge.css">
	<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/public.js"></script>
    <style>
body {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
		#pagelink{text-align:center;}
		#pagelink a{margin:0px 3px 0px 3px;display:none;}
		#pagelink input{width:auto;}
		.loading-icon{width:3rem;height:3rem;position:fixed;z-index:999; left:50%;top:50%;margin-left:-1.5rem;margin-top:-1.5rem;}
		.loading-icon svg{width:100%;height:100%;}
</style>
</head>
    <body>
    <div class="none-drift top-half">
      <div class="inner"><span class="pull-left"><a href="javascript:window.history.back();"><i class="icon-home"></i>返回</a></span>
        <h2>'.$this->_tpl_vars['articlename'].'</h2>
      </div>
    </div>
    <!--章节目录 begin-->
    <div class="catalog mar-foot bor-top bor-foot">
      <div class="title">
        <h3>'.$this->_tpl_vars['fullflag'].' 共<span id="bh_chat_count">'.$this->_tpl_vars['chapters'].'</span>章</h3>
      <span class="pull-right" id="sort_box" data-ajax="0">
		  <a href="/modules/article/reader.php?aid='.$this->_tpl_vars['articleid'].'&desc=0" data-bookid="'.$this->_tpl_vars['articleid'].'" class="active">正序↓</a>
		  <a href="/modules/article/reader.php?aid='.$this->_tpl_vars['articleid'].'&desc=1" data-bookid="'.$this->_tpl_vars['articleid'].'" sort="0">倒序↑</a></span>
	  </div>
      <!--章节列表 begin-->
      <div class="entry">
        <ul id="html_box">
			';
if (empty($this->_tpl_vars['chapterrows'])) $this->_tpl_vars['chapterrows'] = array();
elseif (!is_array($this->_tpl_vars['chapterrows'])) $this->_tpl_vars['chapterrows'] = (array)$this->_tpl_vars['chapterrows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['chapterrows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['chapterrows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['chapterrows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['chapterrows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['chapterrows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	if($this->_tpl_vars['chapterrows'][$this->_tpl_vars['i']['key']]['isvip'] > 0){
echo '
          <li><a href="'.$this->_tpl_vars['chapterrows'][$this->_tpl_vars['i']['key']]['url_chapter'].'">'.$this->_tpl_vars['chapterrows'][$this->_tpl_vars['i']['key']]['chaptername'].'<span class="pull-right" style="color: #fdb977; font-size: 12px;"><i class="icon-lock"></i><</span></a></li>';
}else{
echo '
			  <li><a href="'.$this->_tpl_vars['chapterrows'][$this->_tpl_vars['i']['key']]['url_chapter'].'">'.$this->_tpl_vars['chapterrows'][$this->_tpl_vars['i']['key']]['chaptername'].'<span class="pull-right" style="color: #fdb977; font-size: 12px;">免费</span></a></li>';
}
}
echo '  
        </ul>
      </div>
  '.$this->_tpl_vars['url_jumppage'].'
    <div class="down-text"><a href="'.$this->_tpl_vars['article_static_url'].'/modules/article/packdown.php?id='.$this->_tpl_vars['articleid'].'&type=txt&fname='.urlencode($this->_tpl_vars['articlename']).'">下载全文</a></div>
    <!--login begin-->
    <div class="backdrop bh_wxlogin_lay" style="display: none;opacity:0.1;"></div>
    <div class="modal bh_wxlogin_lay" style="margin-top: -114px; display: none; opacity:0;">
      <div class="inner clearfix">
        <div class="wechat-login-box">
          <div class="head">
            <div class="title">您还未登陆哦！</div>
          </div>
          <div class="body mt-10 clearfix"><a href="" class="btn qq mt-10">QQ一键登录</a></div>
        </div>
        <div class="bottom"> 登录有问题？<a href="/my/kefu.html">联系客服</a></div>
        <div class="pull-action"><a onclick="hide_login();"><i class="icon-close"></i></a></div>
      </div>
    </div>
<script type="text/javascript">
	//补足页面高度不够的问题
	var nexts = $(".next").attr("href");
	  if(nexts != ""){
		  $(".backdrop.bh_wxlogin_lay").show().append("<i class=\'loading-icon\'><svg class=\'loading-svg-animate\' version=\'1.1\' id=\'loader-1\' xmlns=\'http://www.w3.org/2000/svg\' xmlns:xlink=\'http://www.w3.org/1999/xlink\' x=\'0px\' y=\'0px\' width=\'50\' height=\'50\' viewBox=\'0 0 50 50\' style=\'enable-background:new 0 0 50 50;\' xml:space=\'preserve\'><path fill=\'#fff\' d=\'M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z\'><animateTransform attributeType=\'xml\' attributeName=\'transform\' type=\'rotate\' from=\'0 25 25\' to=\'360 25 25\' dur=\'0.6s\' repeatCount=\'indefinite\'></path></svg></i>");
		  $.ajax({
			type:\'post\',
			url:nexts, 
			success:function(msg){
				var fanhuiuif = $(msg).find("#html_box").html();
				var fanhuiyema = $(msg).find("#pagelink").html();
				$("#pagelink").html(fanhuiyema);
				$("#html_box").append(fanhuiuif);
				$(".backdrop.bh_wxlogin_lay").hide();
                $(".backdrop.bh_wxlogin_lay i").remove();
			}
			 });
		  
	  }else{
		  $(".backdrop.bh_wxlogin_lay").hide();
          $(".backdrop.bh_wxlogin_lay i").remove();
		  $(".prev").text("加载").show();
		  $(".next").text("完成").show();
	  };
	//ajax加载页码
$(".backdrop.bh_wxlogin_lay").append("<i class=\'loading-icon\'><svg class=\'loading-svg-animate\' version=\'1.1\' id=\'loader-1\' xmlns=\'http://www.w3.org/2000/svg\' xmlns:xlink=\'http://www.w3.org/1999/xlink\' x=\'0px\' y=\'0px\' width=\'50\' height=\'50\' viewBox=\'0 0 50 50\' style=\'enable-background:new 0 0 50 50;\' xml:space=\'preserve\'><path fill=\'#fff\' d=\'M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z\'><animateTransform attributeType=\'xml\' attributeName=\'transform\' type=\'rotate\' from=\'0 25 25\' to=\'360 25 25\' dur=\'0.6s\' repeatCount=\'indefinite\'></path></svg></i>");
var autoready=1;
    $(window).bind("scroll", function (event) {
        //滚动条到网页头部的 高度，兼容ie,ff,chrome
        var top = document.documentElement.scrollTop + document.body.scrollTop;
        var textheight = $(document).height();  //网页的高度
        // 网页高度-top-当前窗口高度
        if (textheight - top - $(window).height() <= 60){
            if(autoready==1) {
                autoready=0;
	  
	  var next = $(".next").attr("href");
	  if(next != ""){
		  $(".backdrop.bh_wxlogin_lay").show();
		  $.ajax({
			type:\'post\',
			url:next, 
			success:function(msg){
				$("body").attr("style","position:fixed;top:0;left:0;");
				var fanhuiuif = $(msg).find("#html_box").html();
				var fanhuiyema = $(msg).find("#pagelink").html();
				$("#pagelink").html(fanhuiyema);
				$("#html_box").append(fanhuiuif);
				$(".backdrop.bh_wxlogin_lay").hide();
                $(".backdrop.bh_wxlogin_lay i").hide();
				$("body").removeAttr("style");
				autoready=1;
			}
			 });
		  
	  }else{
		  $(".prev").text("加载").show();
		  $(".next").text("完成").show();
	  };
	  
　　};
}});
	
//正序倒叙处理
	var str= $(".next").attr("href");
    var echos = str.match("desc=1");
  	//alert(echos);
	//alert(str);
	if(echos != null){
				//	alert("倒序");
		  $("#sort_box a").eq(1).attr("class","active");
		  $("#sort_box a").eq(0).removeAttr("class");
				}else{
				//	alert("正序");
		  $("#sort_box a").eq(0).attr("class","active");
		  $("#sort_box a").eq(1).removeAttr("class");
				};
		
</script>

</body>
</html>';
?>