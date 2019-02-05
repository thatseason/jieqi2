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
<title>排行榜-'.$this->_tpl_vars['jieqi_sitename'].'</title>
<meta name="Keywords" content="排行榜,小说排行榜,最新小说,'.$this->_tpl_vars['jieqi_sitename'].'" />
<meta name="Description" content="小说排行榜 网络小说排行榜-'.$this->_tpl_vars['jieqi_sitename'].'" />
<link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'" />
<link rel="canonical" href="'.$this->_tpl_vars['jieqi_url'].'" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/ranking_3.css" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/recharge_3.css" />
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
      <div class="wx_home1"><a href="/"><i class="back_icos"></i><em>首页</em></a></div>
    <a href="javascript:;" class="logo">排行榜</a></div>
  </div>
  <!--头部 end --><!--排行榜 begin-->
  <div class="rankwrap">
    <div class="rankindex"><a href="/modules/article/toplist.php?sort=allvisit">
      <div class="ranktitle"><i class="clicktops_bg"></i></div>
      <div class="ranktxt">
        <div class="rankpic"><i class="clicktops">点击榜</i></div>
        <div class="rankinfo">
          <ul>
			  '.$this->_tpl_vars['jieqi_pageblocks']['8']['content'].'
          </ul>
        </div>
        <div class="rankmore"><i class="rank_moreicos"></i></div>
      </div>
    </a></div>
    <div class="rankindex"><a href="/modules/article/toplist.php?order=allvote&page=1">
      <div class="ranktitle"><i class="bestsellertops_bg"></i></div>
      <div class="ranktxt">
        <div class="rankpic"><i class="bestsellertops">畅销榜</i></div>
        <div class="rankinfo">
          <ul>
           '.$this->_tpl_vars['jieqi_pageblocks']['9']['content'].'
          </ul>
        </div>
        <div class="rankmore"><i class="rank_moreicos"></i></div>
      </div>
    </a></div>
    <div class="rankindex"><a href="/modules/article/toplist.php?order=allflower&page=1">
      <div class="ranktitle"><i class="rewardtops_bg"></i></div>
      <div class="ranktxt">
        <div class="rankpic"><i class="rewardtops">打赏榜</i></div>
        <div class="rankinfo">
          <ul>
            '.$this->_tpl_vars['jieqi_pageblocks']['23']['content'].'
          </ul>
        </div>
        <div class="rankmore"><i class="rank_moreicos"></i></div>
      </div>
    </a></div>
    <div class="rankindex"><a href="/modules/article/toplist.php?order=goodnum&page=1">
      <div class="ranktitle"><i class="retainedtops_bg"></i></div>
      <div class="ranktxt">
        <div class="rankpic"><i class="retainedtops">留存榜</i></div>
        <div class="rankinfo">
          <ul>
           '.$this->_tpl_vars['jieqi_pageblocks']['10']['content'].'
          </ul>
        </div>
        <div class="rankmore"><i class="rank_moreicos"></i></div>
      </div>
    </a></div>
    <div class="rankindex"><a href="/modules/article/toplist.php?order=newhot&page=1">
      <div class="ranktitle"><i class="weekstops_bg"></i></div>
      <div class="ranktxt">
        <div class="rankpic"><i class="weekstops">本周潜力榜</i></div>
        <div class="rankinfo">
          <ul>
            '.$this->_tpl_vars['jieqi_pageblocks']['22']['content'].'
          </ul>
        </div>
        <div class="rankmore"><i class="rank_moreicos"></i></div>
      </div>
    </a></div>
  </div>
<!--排行榜 end-->
</div>

</body>
</html>';
?>