<?php
echo '<html>
<head>
<meta http-equiv="content-type" content="text/html; charset='.$this->_tpl_vars['jieqi_charset'].'" />
<title>出现错误！</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" type="text/css" media="all" href="'.$this->_tpl_vars['jieqi_url'].'/sink/css/common.css" />
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/scripts/common.js"></script>
			</head>
<body>
<div style="width:100%; text-align:center; padding-top:150px;">
  <div style="margin:auto; width:350px;">
    <div class="block">
      <div class="blocktitle" style="color:#F86FB0;border-bottom: 1px solid #F86FB0;">出现错误！</div>
      <div class="blockcontent">
	    <div style="padding:10px">错误原因：'.$this->_tpl_vars['errorinfo'].'<br />'.$this->_tpl_vars['debuginfo'].'<br />请 <a href="javascript:history.back(1)" style="color:red;font-size:1.5em">返 回</a> 并修正</div>
	    <div style="width:100%; text-align: right; line-height:200%; padding-right:10px;">[<a href="javascript:if(navigator.userAgent.indexOf(\'Firefox\')==-1){window.opener=null;window.open(\'\',\'_self\');window.close();}else{var opened=window.open(\'about:blank\',\'_self\');opened.close();}">关闭本窗口</a>]</div>
	  </div>
	  <div class="blocknote">版权所有&copy; <a href="'.$this->_tpl_vars['jieqi_url'].'/">'.$this->_tpl_vars['jieqi_sitename'].'</a></div>
	</div>
  </div>
</div>
</body>
</html>';
?>