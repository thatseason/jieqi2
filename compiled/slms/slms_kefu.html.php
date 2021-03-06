<?php
echo '<!DOCTYPE html>
<html>
<head>
<meta charset="'.$this->_tpl_vars['jieqi_charset'].'">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" />
<meta content="telephone=no" name="format-detection" />
<meta http-equiv="Cache-Control" content="no-transform " />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="applicable-device" content="mobile" />
<title>客服中心-'.$this->_tpl_vars['jieqi_sitename'].'</title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<link rel="dns-prefetch" href="//cj.qirexiaoshuo.com" />
<link rel="canonical" href="//m.qirexiaoshuo.com/my/kefu" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/ranking_3_kf.css" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/recharge_3_kf.css" />
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
</style>
</head>
<body>
<div class="wrapper"><!--头部 begin -->
  <div class="wx_header">
    <div class="wx_nav_box1">
      <div class="wx_home1"><a href="/userdetail.php"><i class="back_icos"></i><em>返回</em></a></div>
    <a href="javascript:;" class="logo">客服帮助</a></div>
  </div>
  <!--头部 end -->
  <div class="mt-10">
    <div class="contact-box mt-44 clearfix">
      <div class="row">在线时间：周一至周六9:00-18:00</div>
      <div class="row">客服QQ：<a href="http://wpa.qq.com/msgrd?v=3&uin=12529320&site=qq&menu=yes"><img src="//cj.qirexiaoshuo.com/static/newtheme/assets/images/qq-btn.png" width="90" height="29" /></a>
        <label class="num">12529320</label>
      </div>
      <div class="row">QQ群：<a href="javascript:;" target="_blank"><img src="//cj.qirexiaoshuo.com/static/spread/wap/assets/images/utils/qtwo-icon.png" width="90" /></a> &nbsp;
        <label class="num">528487060</label>
      </div>
    </div>
    <div class="faq-box mt-10 clearfix" id="faq-box">
      <div class="item">
        <div class="question">如何充值书币？</div>
        <div class="answer">
          <p>答：在&ldquo;我的&rdquo;界面点击&ldquo;书币余额&rdquo;，点击&ldquo;我要充值&rdquo;按钮进行充值；或直接点击&ldquo;充值送书币&rdquo;进行充值；充值后的书币不可兑换为现金，不予退款。</p>
        </div>
      </div>
      <div class="item">
        <div class="question">如何开通'.$this->_tpl_vars['jieqi_sitename'].'VIP会员？</div>
        <div class="answer">
          <p>答：在&ldquo;我的&rdquo;界面点击&ldquo;会员特权&rdquo;，点击&ldquo;直接开通&rdquo;按钮进行开通VIP。</p>
        </div>
      </div>
      <div class="item">
        <div class="question">充值或开通VIP不成功？</div>
        <div class="answer">
          <p>答：确定支付成功，但是未充值到账或未开通VIP权限，遇到此问题请联系 <a style="color:#03F" href="http://wpa.qq.com/msgrd?v=3&uin=12529320&site=qq&menu=yes">深蓝客服</a>。</p>
        </div>
      </div>
      <div class="item">
        <div class="question">'.$this->_tpl_vars['jieqi_sitename'].'怎么收费？</div>
        <div class="answer">
          <p>答：目前'.$this->_tpl_vars['jieqi_sitename'].'大部分书籍为免费阅读，部分收费书籍分为二种：包年VIP会员，充值书币按章节付费。</p>
        </div>
      </div>
      <div class="item">
        <div class="question">如何从书架中清除不想看的书？</div>
        <div class="answer">
          <p>答:点书架右上角&ldquo;管理&rdquo;，可以删除不想看的书。</p>
        </div>
      </div>
      <div class="item">
        <div class="question">为什么我正在看的书看不了了？</div>
        <div class="answer">
          <p>答：可能您所看的书，在某章出现故障，此情况可联系 <a style="color:#03F" href="http://wpa.qq.com/msgrd?v=3&uin=12529320&site=qq&menu=yes">深蓝客服</a>处理。也可能涉及敏感话题或者其它问题被暂时下架了，下架的书不能阅读。</p>
        </div>
      </div>
      <div class="item">
        <div class="question">已经充值VIP会员了，为什么付费章节还是需要购买？</div>
        <div class="answer">
          <p>答：VIP会员阅读不是针对全场书籍，部分书籍需要使用书币解锁章节阅读，请确保您所看的书籍属于免费和VIP书籍。</p>
        </div>
      </div>
      <div class="item">
        <div class="question">'.$this->_tpl_vars['jieqi_sitename'].'的所有书籍都是正版的吗？</div>
        <div class="answer">
          <p>答：'.$this->_tpl_vars['jieqi_sitename'].'始终致力于支持正版内容的引入及合作，平台上所有书籍都是正版。</p>
        </div>
      </div>
    </div>
  </div>
</div>
<script>    $(function(){
        var fontSize=$(window).width()/25;
        $("html").css("font-size",fontSize);
        uid = "69208153";
    })
</script><!--login begin-->


</body>
</html>';
?>