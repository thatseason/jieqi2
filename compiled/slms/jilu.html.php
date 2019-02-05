<?php
echo '
<!DOCTYPE html>
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
    <title>阅读记录-'.$this->_tpl_vars['jieqi_pagetitle'].'</title>
    <meta name="Keywords" content="热门小说推荐,好看的小说," />
    <meta name="Description" content="'.$this->_tpl_vars['jieqi_pagetitle'].'书架推荐大量精品好看的言情小说,穿越小说,校园言情小说,总裁豪门小说,玄幻小说,武侠小说,都市小说,历史军事小说,科幻小说,恐怖小说等,全文无广告弹窗在线阅读，手机在线看小说就选'.$this->_tpl_vars['jieqi_pagetitle'].'。" />
    <link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'" />
    <link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'" />
    <link rel="canonical" href="'.$this->_tpl_vars['jieqi_url'].'" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/base_3.css" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/recharge_3.css" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/vip_sign.css" />
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/jquery.cookie.js"></script>
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
    <!-- bookshelf begin -->
    <div class="bookshelf ">
      <ul>
        <li><a href="/modules/article/bookcase.php">我的书架</a></li>
        <li><a href="/jilu.php" class="active">最近阅读</a></li>
      </ul>
    </div>
    <!-- bookshelf end --><!--书架书籍 begin-->
    <div class="search-result manage hot-box mar-foot">
      <div class="record-box"><span class="pull-left">共<span id="lishu">0</span>条阅读记录</span><span class="pull-right"></div>
      <div class="entry" id="book_shelf_box"><!--书架推荐 begin--><!--书架推荐 end--><!--加入的书籍 begin-->
	  
      <!--加入的书籍 end-->
	</div>
    </div>
    <!--书架书籍 end-->
    <div class="footer" id="footer_nav">
      <ul>
        <li><a href="javascript:;" class="active"><i class="icon-book"></i>书架</a></li>
        <li><a href="/"><i class="icon-choice"></i>精选</a></li>
        <li><a href="/userdetail.php"><i class="icon-my"></i>我的</a></li>
      </ul>
    </div>
   <script type="text/javascript">
var img1 = decodeURIComponent($.cookie(\'img\'));
var bookid1 = $.cookie(\'bookid\');
var chid1 = $.cookie(\'chid\');
var boonmen1 = decodeURIComponent($.cookie(\'boonmen\'));
var sort1 = decodeURIComponent($.cookie(\'sort\'));
var ming1 = decodeURIComponent($.cookie(\'ming\'));
   if(img1 != "undefined"){
    $("#book_shelf_box").append("<div class=\'item\'><a href=\'/modules/article/reader.php?aid="+bookid1+"&cid="+chid1+"\'><img src=\'"+img1+"\' class=\'avatar\' onerror=\'this.src=\'/slms/images/tihuan.svg\'\'><div class=\'body\'><span class=\'t\'>"+ming1+"</span><span class=\'author\'>类型："+sort1+"/</span><p>阅读至：</p><p>"+boonmen1+"</p></div><div class=\'btn hide_edit_shelf\'>继续阅读</div></a></div>");
	
   };
   
//2
var img2 = decodeURIComponent($.cookie(\'img2\'));
var bookid2 = $.cookie(\'bookid2\');
var chid2 = $.cookie(\'chid2\');
var boonmen2 = decodeURIComponent($.cookie(\'boonmen2\'));
var sort2 = decodeURIComponent($.cookie(\'sort2\'));
var ming2 = decodeURIComponent($.cookie(\'ming2\'));
   if(img2 != "undefined"){
    $("#book_shelf_box").append("<div class=\'item\'><a href=\'/modules/article/reader.php?aid="+bookid2+"&cid="+chid2+"\'><img src=\'"+img2+"\' class=\'avatar\' onerror=\'this.src=\'/slms/images/tihuan.svg\'\'><div class=\'body\'><span class=\'t\'>"+ming2+"</span><span class=\'author\'>类型："+sort2+"/</span><p>阅读至：</p><p>"+boonmen2+"</p></div><div class=\'btn hide_edit_shelf\'>继续阅读</div></a></div>");
	
   };
  

  
//3
var img3 = decodeURIComponent($.cookie(\'img3\'));
var bookid3 = $.cookie(\'bookid3\');
var chid3 = $.cookie(\'chid3\');
var boonmen3 = decodeURIComponent($.cookie(\'boonmen3\'));
var sort3 = decodeURIComponent($.cookie(\'sort3\'));
var ming3 = decodeURIComponent($.cookie(\'ming3\'));
   if(img3 != "undefined"){
    $("#book_shelf_box").append("<div class=\'item\'><a href=\'/modules/article/reader.php?aid="+bookid3+"&cid="+chid3+"\'><img src=\'"+img3+"\' class=\'avatar\' onerror=\'this.src=\'/slms/images/tihuan.svg\'\'><div class=\'body\'><span class=\'t\'>"+ming2+"</span><span class=\'author\'>类型："+sort3+"/</span><p>阅读至：</p><p>"+boonmen3+"</p></div><div class=\'btn hide_edit_shelf\'>继续阅读</div></a></div>");
	
   };
   
 //4
var img4 = decodeURIComponent($.cookie(\'img4\'));
var bookid4 = $.cookie(\'bookid4\');
var chid4 = $.cookie(\'chid4\');
var boonmen4 = decodeURIComponent($.cookie(\'boonmen4\'));
var sort4 = decodeURIComponent($.cookie(\'sort4\'));
var ming4 = decodeURIComponent($.cookie(\'ming4\'));
   if(img4 != "undefined"){
    $("#book_shelf_box").append("<div class=\'item\'><a href=\'/modules/article/reader.php?aid="+bookid4+"&cid="+chid4+"\'><img src=\'"+img4+"\' class=\'avatar\' onerror=\'this.src=\'/slms/images/tihuan.svg\'\'><div class=\'body\'><span class=\'t\'>"+ming4+"</span><span class=\'author\'>类型："+sort4+"/</span><p>阅读至：</p><p>"+boonmen4+"</p></div><div class=\'btn hide_edit_shelf\'>继续阅读</div></a></div>");
	
   };
   
 //5
var img5 = decodeURIComponent($.cookie(\'img5\'));
var bookid5 = $.cookie(\'bookid5\');
var chid5 = $.cookie(\'chid5\');
var boonmen5 = decodeURIComponent($.cookie(\'boonmen5\'));
var sort5 = decodeURIComponent($.cookie(\'sort5\'));
var ming5 = decodeURIComponent($.cookie(\'ming5\'));
   if(img5 != "undefined"){
    $("#book_shelf_box").append("<div class=\'item\'><a href=\'/modules/article/reader.php?aid="+bookid5+"&cid="+chid5+"\'><img src=\'"+img5+"\' class=\'avatar\' onerror=\'this.src=\'/slms/images/tihuan.svg\'\'><div class=\'body\'><span class=\'t\'>"+ming5+"</span><span class=\'author\'>类型："+sort5+"/</span><p>阅读至：</p><p>"+boonmen5+"</p></div><div class=\'btn hide_edit_shelf\'>继续阅读</div></a></div>");
	
   };
   
   
  //6
var img6 = decodeURIComponent($.cookie(\'img6\'));
var bookid6 = $.cookie(\'bookid6\');
var chid6 = $.cookie(\'chid6\');
var boonmen6 = decodeURIComponent($.cookie(\'boonmen6\'));
var sort6 = decodeURIComponent($.cookie(\'sort6\'));
var ming6 = decodeURIComponent($.cookie(\'ming6\'));
   if(img6 != "undefined"){
    $("#book_shelf_box").append("<div class=\'item\'><a href=\'/modules/article/reader.php?aid="+bookid6+"&cid="+chid6+"\'><img src=\'"+img6+"\' class=\'avatar\' onerror=\'this.src=\'/slms/images/tihuan.svg\'\'><div class=\'body\'><span class=\'t\'>"+ming6+"</span><span class=\'author\'>类型："+sort6+"/</span><p>阅读至：</p><p>"+boonmen6+"</p></div><div class=\'btn hide_edit_shelf\'>继续阅读</div></a></div>");
	
   };
   
   //7
var img7 = decodeURIComponent($.cookie(\'img7\'));
var bookid7 = $.cookie(\'bookid7\');
var chid7 = $.cookie(\'chid7\');
var boonmen7 = decodeURIComponent($.cookie(\'boonmen7\'));
var sort7 = decodeURIComponent($.cookie(\'sort7\'));
var ming7 = decodeURIComponent($.cookie(\'ming7\'));
   if(img7 != "undefined"){
    $("#book_shelf_box").append("<div class=\'item\'><a href=\'/modules/article/reader.php?aid="+bookid7+"&cid="+chid7+"\'><img src=\'"+img7+"\' class=\'avatar\' onerror=\'this.src=\'/slms/images/tihuan.svg\'\'><div class=\'body\'><span class=\'t\'>"+ming7+"</span><span class=\'author\'>类型："+sort7+"/</span><p>阅读至：</p><p>"+boonmen7+"</p></div><div class=\'btn hide_edit_shelf\'>继续阅读</div></a></div>");
	
   };
   
    //8
var img8 = decodeURIComponent($.cookie(\'img8\'));
var bookid8 = $.cookie(\'bookid8\');
var chid8 = $.cookie(\'chid8\');
var boonmen8 = decodeURIComponent($.cookie(\'boonmen8\'));
var sort8 = decodeURIComponent($.cookie(\'sort8\'));
var ming8 = decodeURIComponent($.cookie(\'ming8\'));
   if(img8 != "undefined"){
    $("#book_shelf_box").append("<div class=\'item\'><a href=\'/modules/article/reader.php?aid="+bookid8+"&cid="+chid8+"\'><img src=\'"+img8+"\' class=\'avatar\' onerror=\'this.src=\'/slms/images/tihuan.svg\'\'><div class=\'body\'><span class=\'t\'>"+ming8+"</span><span class=\'author\'>类型："+sort8+"/</span><p>阅读至：</p><p>"+boonmen8+"</p></div><div class=\'btn hide_edit_shelf\'>继续阅读</div></a></div>");
	
   };
    //9
var img9 = decodeURIComponent($.cookie(\'img9\'));
var bookid9 = $.cookie(\'bookid9\');
var chid9 = $.cookie(\'chid9\');
var boonmen9 = decodeURIComponent($.cookie(\'boonmen9\'));
var sort9 = decodeURIComponent($.cookie(\'sort9\'));
var ming9 = decodeURIComponent($.cookie(\'ming9\'));
   if(img9 != "undefined"){
    $("#book_shelf_box").append("<div class=\'item\'><a href=\'/modules/article/reader.php?aid="+bookid9+"&cid="+chid9+"\'><img src=\'"+img9+"\' class=\'avatar\' onerror=\'this.src=\'/slms/images/tihuan.svg\'\'><div class=\'body\'><span class=\'t\'>"+ming9+"</span><span class=\'author\'>类型："+sort9+"/</span><p>阅读至：</p><p>"+boonmen9+"</p></div><div class=\'btn hide_edit_shelf\'>继续阅读</div></a></div>");
	
   };
    //10
var img10 = decodeURIComponent($.cookie(\'img10\'));
var bookid10 = $.cookie(\'bookid10\');
var chid10 = $.cookie(\'chid10\');
var boonmen10 = decodeURIComponent($.cookie(\'boonmen10\'));
var sort10 = decodeURIComponent($.cookie(\'sort10\'));
var ming10 = decodeURIComponent($.cookie(\'ming10\'));
   if(img10 != "undefined"){
    $("#book_shelf_box").append("<div class=\'item\'><a href=\'/modules/article/reader.php?aid="+bookid10+"&cid="+chid10+"\'><img src=\'"+img10+"\' class=\'avatar\' onerror=\'this.src=\'/slms/images/tihuan.svg\'\'><div class=\'body\'><span class=\'t\'>"+ming10+"</span><span class=\'author\'>类型："+sort10+"/</span><p>阅读至：</p><p>"+boonmen10+"</p></div><div class=\'btn hide_edit_shelf\'>继续阅读</div></a></div>");
	
   };
   
  
 var lists = $(\'.item\').length;  
   $("#lishu").text(lists);
   </script>

</html>';
?>