<?php
echo '<!doctype html>
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
<title>'.$this->_tpl_vars['articletitle'].'-���а�-'.$this->_tpl_vars['jieqi_sitename'].'</title>
<meta name="Keywords" content="���а�,С˵���а�,����С˵,'.$this->_tpl_vars['jieqi_sitename'].'" />
<meta name="Description" content="С˵���а� ����С˵���а�-'.$this->_tpl_vars['jieqi_sitename'].'" />
<link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'">
<link rel="canonical" href="'.$this->_tpl_vars['jieqi_url'].'">
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/ranking_3.css">
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/recharge_3.css">
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/zepto.min.js"></script>
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/global.min.js"></script>

<style>
body {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
#pagelink {
	text-align: center;
	display: none;
}
#pagelink a {
	margin: 0px 3px 0px 3px;
	display: none;
}
#pagelink input {
	width: auto;
}
.loading-icon {
	width: 3rem;
	height: 3rem;
	position: fixed;
	z-index: 999;
	left: 50%;
	top: 50%;
	margin-left: -1.5rem;
	margin-top: -1.5rem;
}
.loading-icon svg {
	width: 100%;
	height: 100%;
}
	#jiazaigengduo{width:100%;height:35px;border-top:1px solid #ccc;margin-top:10px;text-align:center;background:#fc992f;margin-bottom:5px;}
	#jiazaigengduo a{display:list-item; width:100%;height:100$; color:aliceblue;list-style-type:none;font-size:15px;line-height:35px;}
</style>
</head>
<body>
<div class="wrapper"><!--ͷ�� begin -->
  <div class="wx_header">
    <div class="wx_nav_box1">
      <div class="wx_home1"><a href="javascript:history.back(1)"><i class="back_icos"></i><em>����</em></a></div>
      <a href="javascript:;" class="logo">'.$this->_tpl_vars['articletitle'].'</a></div>
  </div>
  <!--ͷ�� end --><!--���а��б� begin-->
  <div class="tops_entry" id="html_box"> ';
if (empty($this->_tpl_vars['articlerows'])) $this->_tpl_vars['articlerows'] = array();
elseif (!is_array($this->_tpl_vars['articlerows'])) $this->_tpl_vars['articlerows'] = (array)$this->_tpl_vars['articlerows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['articlerows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['articlerows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['articlerows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['articlerows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['articlerows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
    <div class="item"><a class="slmsa" href="'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['url_articleinfo'].'"><img src="'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['url_image'].'" class="avatar">
      <div class="body"><span class="t">'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['articlename'].'</span><span class="author">'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['author'].'</span><span class="btn">�����Ķ�</span>
        <p>'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['intro'].'</p>
      </div>
      </a></div>
    ';
}
echo ' </div>
  '.$this->_tpl_vars['url_jumppage'].'
	<div id="jiazaigengduo"><a href="javascript:;">���ظ����</a></div>
  <div class="backdrop bh_wxlogin_lay" style="display: none;"></div>
  <!--���а��б� end--></div>
<script type="text/javascript">   
$("#jiazaigengduo").click(function(){
	$("#jiazaigengduo a").text("�����С���");
	 //ajax����ҳ��
	  var panduan = 1;
	  if(panduan == 1){
		  panduan = 0;
	     var next = $(".next").attr("href");
	     if(next != ""){
		  $.ajax({
			type:\'post\',
			url:next, 
			success:function(msg){
				var fanhuiuif = $(msg).find("#html_box").html();
				var fanhuiyema = $(msg).find("#pagelink").html();
				$("#pagelink").html(fanhuiyema);
				$("#html_box").append(fanhuiuif);
                $("#jiazaigengduo a").text("���ظ����");
				panduan = 1;
			  }
			  
			 });
		  
	        }else{
		     $("#jiazaigengduo a").text("�Ѿ�ȫ������");
			 $("#jiazaigengduo").css("background","#ccc");
			panduan = 0;
	        }; 
		  
	  };
});
	 
	  

		
		
//alert($(".num_icons.thrnum_icons").length);
$(".slmsa").eq(0).prepend("<i class=\'num_icons thrnum_icons\'>1</i>");
$(".slmsa").eq(1).prepend("<i class=\'num_icons thrnum_icons\'>2</i>");
$(".slmsa").eq(2).prepend("<i class=\'num_icons thrnum_icons\'>3</i>");
$(".slmsa").eq(3).prepend("<i class=\'num_icons thrnum_icons\'>4</i>");
$(".slmsa").eq(4).prepend("<i class=\'num_icons thrnum_icons\'>5</i>");
$(".slmsa").eq(5).prepend("<i class=\'num_icons thrnum_icons\'>6</i>");
$(".slmsa").eq(6).prepend("<i class=\'num_icons thrnum_icons\'>7</i>");
$(".slmsa").eq(7).prepend("<i class=\'num_icons thrnum_icons\'>8</i>");
$(".slmsa").eq(8).prepend("<i class=\'num_icons thrnum_icons\'>9</i>");
$(".slmsa").eq(9).prepend("<i class=\'num_icons thrnum_icons\'>10</i>");
		

	
	
	var autoready=1;
    $(window).bind("scroll", function (event) {
        //����������ҳͷ���� �߶ȣ�����ie,ff,chrome
        var top = document.documentElement.scrollTop + document.body.scrollTop;
        var textheight = $(document).height();  //��ҳ�ĸ߶�
        // ��ҳ�߶�-top-��ǰ���ڸ߶�
        if (textheight - top - $(window).height() <= 60){
            if(autoready==1) {
                autoready=0;
	  
	  var next = $(".next").attr("href");
	  if(next != ""){
        $("#jiazaigengduo a").text("�����С���");
		  $.ajax({
			type:\'post\',
			url:next, 
			success:function(msg){
				var fanhuiuif = $(msg).find("#html_box").html();
				var fanhuiyema = $(msg).find("#pagelink").html();
				$("#pagelink").html(fanhuiyema);
				$("#html_box").append(fanhuiuif);
				$(".backdrop.bh_wxlogin_lay").hide();
                $(".backdrop.bh_wxlogin_lay i").hide();
				$("#jiazaigengduo a").text("���ظ����");
				autoready=1;
			}
			 });
		  
	  }else{
		  $("#jiazaigengduo a").text("�Ѿ�ȫ������");
		  $("#jiazaigengduo").css("background","#ccc");
		  $(".prev").text("����").show();
		  $(".next").text("���").show();
		  autoready=0;
	  };
	  
����};
}});
	
	
	
		

</script><!--login begin-->

</div>
</body>
</html>';
?>