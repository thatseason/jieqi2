;(function(){var _instanceList={};var _picAnimateTime=300,_wordAnimateTime=200;function imageSlider(root,options){this.root=root;this.currentPicIndex=0;this.bigPicCount=$(this.root).find('.items img').length;this.$picItems=$(this.root).find('.items');this.$thumbLinkList=$(this.root).find('[nodetype="thumbLinkList"]');this.$thumbLinks=null;this.options=$.extend({'auto':true,'slideInterval':3000},options||{});return this;}
imageSlider.prototype={init:function(){this.renderThumbLinks();this.showBigPic(0);this.bindEvent();var me=this;if(this.options.auto){setInterval(function(){me.currentPicIndex=me.currentPicIndex+1<me.bigPicCount?me.currentPicIndex+1:0;me.showBigPic(me.currentPicIndex);},this.options.slideInterval);}},bindEvent:function(){var me=this;$(this.root).find('.btnPrev').on('click',function(){me.currentPicIndex=me.currentPicIndex-1>=0?me.currentPicIndex-1:me.bigPicCount-1;me.showBigPic(me.currentPicIndex);});$(this.root).find('.btnNext').on('click',function(){me.currentPicIndex=me.currentPicIndex+1<me.bigPicCount?me.currentPicIndex+1:0;me.showBigPic(me.currentPicIndex);});this.$thumbLinks.on('click',function(event){me.currentPicIndex=me.$thumbLinks.index(this);me.showBigPic(me.currentPicIndex);return false;});},showBigPic:function(index){var $currentPic=this.$picItems.eq(index),$hidePic=$currentPic.siblings(':visible');$hidePic.animate({opacity:0.4},_picAnimateTime,function(){$(this).hide();});$hidePic.find('.word').animate({height:'hide'},'fast');$currentPic.animate({opacity:1},_picAnimateTime,function(){$(this).show();$(this).find('.word').animate({height:'show'},_wordAnimateTime);});var $currentThumbLink=this.$thumbLinks.eq(index);this.$thumbLinks.removeClass('current');$currentThumbLink.addClass('current');},renderThumbLinks:function(){var arrTpl=[];for(var i=0;i<this.bigPicCount;i++){arrTpl.push('<li class="slideshowItem"><a href="javascript:;"></a></li>');}
this.$thumbLinkList.append(arrTpl.join(''));this.$thumbLinks=this.$thumbLinkList.find('a');}};function _getRandomKey(){return Math.round(Math.random()*99999999);}
$.fn.picSliderByThumb=function(options){return this.each(function(){if(!_instanceList[$(this).attr('picSliderByThumb')]){var instanceKey=_getRandomKey(),instance=new imageSlider(this,options);instance.init();_instanceList[instanceKey]=instance;$(this).attr('picSliderByThumb',instanceKey);}});};})(jQuery);﻿;(function($){var _util=CS.util,_uiBinder=CS.uiBinder,_dialog=CS.dialog,_bookshelf=CS.bookshelf;var _params={};var _bookPopup={dataList:{},isLoading:0,isAllowHide:1,setTimeoutByOpen:null,setTimeoutByClose:null,openTimeout:200,closeTimeout:200,nodes:null};var _recommendList={'week':[],'month':[]};var _isChanging={'qiangtui':0};var _bookInfoPopupTpl=['<div attr="inner:popup;" class="bookInfoPopup" style="position:absolute; z-index:100; display:none;">','<div class="bookDataBox cf">','<a attr="inner:bookLink;" href="javascript:" target="_blank">','<img attr="inner:bookCover;" width="62" height="77">','</a>','<div class="bookDataInfo">','<h3><a attr="inner:bookNameLink;" href="javascript:" target="_blank"></a></h3>','<p>作者：<a attr="inner:authorNameLink;" href="javascript:" target="_blank"></a></p>','<p>总人气：<span attr="inner:popularValue;"></span></p>','<p>最新章节：<span attr="inner:lastChapterName;"></span></p>','</div>','<p class="intro">','<span class="gray2">简介：</span>','<em attr="inner:bookDesc;"></em>','</p>','</div>','<p class="btn">','<a attr="inner:readLink;" class="pinkBtn" href="javascript:" target="_blank">立即阅读</a>','<a attr="inner:addToBookshelfBtn;click:addToBookshelf;" href="javascript:">加入书架</a>','</p>','</div>'].join('');function init(getWeekRecommendAjaxUrl,getMonthRecommendAjaxUrl,getUserBoxAjaxUrl,getBookInfoAjaxUrl){_params.getWeekRecommendAjaxUrl=getWeekRecommendAjaxUrl||'';_params.getMonthRecommendAjaxUrl=getMonthRecommendAjaxUrl||'';_params.getUserBoxAjaxUrl=getUserBoxAjaxUrl||'';_params.getBookInfoAjaxUrl=getBookInfoAjaxUrl||'';_bindEvent();_updateUserBox();}
function _bindEvent(){$('.centerTab span').click(function(){$(this).addClass('act').siblings().removeClass('act');$('.recBookWrap > .recBook').eq($(".centerTab span").index(this)).show().siblings().hide();});$('#changWeekRecommendBtn').on('click',function(){_changQiangtui($(this).parent().prev('ul'),'week');return false;});$('#changMonthRecommendBtn').on('click',function(){_changQiangtui($(this).parent().prev('ul'),'month');return false;});$('#qiangtuiListBox').on('mouseenter','ul a',function(){var bid=$(this).attr('bid');if(!bid){return;}
var targetNode=this;_bookPopup.isAllowHide=0;if(_bookPopup.setTimeoutByClose){clearTimeout(_bookPopup.setTimeoutByClose);}
if(_bookPopup.setTimeoutByOpen){clearTimeout(_bookPopup.setTimeoutByOpen);}
_bookPopup.setTimeoutByOpen=setTimeout(function(){_openBookInfoPopup(bid,targetNode);},_bookPopup.openTimeout);}).on('mouseleave','ul a',function(){_bookPopup.isAllowHide=1;_closeBookInfoPopup();});}
function _changQiangtui($target,type){if(!$target||$target.length===0||!_recommendList[type]){return;}
if(_recommendList[type]&&_recommendList[type].length>0){_changeHtml($target,_recommendList[type]);return;}
if(_isChanging.qiangtui){return;}
_isChanging.qiangtui=1;$target.next('p').find('.huan').removeClass('cur').addClass('wait');var requestUrl=type==='week'?_params.getWeekRecommendAjaxUrl:_params.getMonthRecommendAjaxUrl;_util.request({type:"GET",dataType:'json',url:requestUrl,data:{},success:function(json){if(!json){return;}
if(json.status){if('data'in json&&json.data.list){_recommendList[type]=json.data.list;_changeHtml($target,_recommendList[type]);}}else{if(json.info){_dialog.alert(json.info);}}},error:function(){},complete:function(){$target.next('p').find('.huan').removeClass('wait').addClass('cur');_isChanging.qiangtui=0;}});}
function _changeHtml($target,list){if(!$target||!list||list.length===0){return;}
var index=Math.floor(Math.random()*list.length);$target.html(list[index]);}
function _updateUserBox(){_util.request({type:"GET",dataType:'json',url:_params.getUserBoxAjaxUrl,data:{},success:function(json){if(!json){return;}
if(json.status){if('data'in json&&json.data.html){var $userBox=$('#userBox');$userBox.html(json.data.html);var $userTab=$userBox.find('.twoTabBox span');$userTab.on('click',function(){$(this).addClass('tabCur');if($(this).find('cite').length===0){$(this).append('<cite></cite>');}
$(this).siblings('span').removeClass('tabCur').find('cite').remove();$userBox.find('ul').eq($userTab.index(this)).show().siblings('ul').hide();});}}},error:function(json){}});}
function _openBookInfoPopup(bid,targetNode){if(!bid){return;}
if(bid in _bookPopup.dataList){_createBookInfoPopup(_bookPopup.dataList[bid],targetNode);return;}
if(_bookPopup.isLoading){return;}
_bookPopup.isLoading=1;_util.request({type:"GET",dataType:'json',url:_params.getBookInfoAjaxUrl,data:{'bid':bid},success:function(json){if(!json){return;}
if(json.status){if('data'in json){if(!(bid in _bookPopup.dataList)){_bookPopup.dataList[bid]=json.data;}
_createBookInfoPopup(json.data,targetNode);}}},error:function(json){},complete:function(){_bookPopup.isLoading=0;}});}
function _createBookInfoPopup(data,targetNode){if(!data){return;}
if(!_bookPopup.nodes){_bookPopup.nodes=_uiBinder.appendHTML(document.body,_util.sim2tra(_bookInfoPopupTpl),{},{'addToBookshelf':function(e,el,nodes){var bid=$(el).attr('bid');_bookshelf.addToBookshelf(bid);}});}
if(_bookPopup.nodes){var nodes=_bookPopup.nodes;$(nodes.popup).on('mouseover',function(){_bookPopup.isAllowHide=0;}).on('mouseout',function(){_bookPopup.isAllowHide=1;_closeBookInfoPopup();});var emptyUrl='javascript:;';$(nodes.bookLink).add(nodes.bookNameLink).attr('href',data.novelUrl||emptyUrl);$(nodes.bookCover).attr('src',data.coverUrl||'');var title=data.title?_util.mb_cutstr(data.title,27):'';$(nodes.bookNameLink).text(title);$(nodes.authorNameLink).attr('href',data.authorUrl||emptyUrl);var authorName=data.author?_util.mb_cutstr(data.author,24):'';$(nodes.authorNameLink).text(authorName);$(nodes.popularValue).text(data.popularity||0);var lastChapterName=data.lastChapterName?_util.mb_cutstr(data.lastChapterName,20):'';$(nodes.lastChapterName).text(lastChapterName).attr('title',data.lastChapterName||'');var bookDesc=data.intro?_util.mb_cutstr(data.intro,213):'';$(nodes.bookDesc).text(bookDesc);$(nodes.readLink).attr('href',data.dirUrl||emptyUrl);$(nodes.addToBookshelfBtn).attr('bid',data.bid||0);_setPositionByBookInfoPopup(targetNode);}}
function _setPositionByBookInfoPopup(targetNode){if(!_bookPopup.nodes||!targetNode){return;}
var nodes=_bookPopup.nodes,targetOffset=$(targetNode).offset(),targetTop=targetOffset.top,targetLeft=targetOffset.left,targetWidth=targetNode.offsetWidth,offsetTop=-30,offsetLeft=5;nodes.popup.style.top=(targetTop+offsetTop)+'px';nodes.popup.style.left=(targetLeft+targetWidth+offsetLeft)+'px';$(nodes.popup).fadeIn();}
function _closeBookInfoPopup(){if(_bookPopup.setTimeoutByOpen){clearTimeout(_bookPopup.setTimeoutByOpen);}
if(_bookPopup.setTimeoutByClose){clearTimeout(_bookPopup.setTimeoutByClose);}
_bookPopup.setTimeoutByClose=setTimeout(function(){if(_bookPopup.nodes&&_bookPopup.isAllowHide){$(_bookPopup.nodes.popup).fadeOut();}},_bookPopup.closeTimeout);}
_util.initNameSpace("CS.page.index");CS.page.index.main={"init":init};})(jQuery);﻿;(function($){var _util=CS.util;var _nodes={},_countDownInterval=null;function init(){var $countDown=$('#countDown');_nodes.$day=$countDown.find('.day');_nodes.$hour=$countDown.find('.hour');_nodes.$minute=$countDown.find('.minute');_setRemainTime();}
function _setRemainTime(){var strEndTime=$('#Endtime').val();if(!strEndTime){_emptyRemainTime();return;}
var endTime=new Date(strEndTime.replace(/-/g,'/')),currentTime=new Date(),remainTime=endTime.getTime()-currentTime.getTime();if(remainTime<=0){_emptyRemainTime();return;}
var remainDay=Math.floor(remainTime/(24*3600*1000)),remainTimeByRemoveDay=remainTime%(24*3600*1000),remainHour=Math.floor(remainTimeByRemoveDay/(3600*1000)),remainTimeByRemoveHour=remainTimeByRemoveDay%(3600*1000),remainMinute=Math.floor(remainTimeByRemoveHour/(60*1000));_nodes.$day.text(remainDay);_nodes.$hour.text(remainHour);_nodes.$minute.text(remainMinute);_countDownInterval=setInterval(_updateRemainTime,60000);}
function _updateRemainTime(){var remainDay=_nodes.$day.text(),remainHour=_nodes.$hour.text(),remainMinute=_nodes.$minute.text();if(remainMinute>0){_nodes.$minute.text(remainMinute-1);return;}
if(remainHour>0){_nodes.$hour.text(remainHour-1);_nodes.$minute.text(59);return;}
if(remainDay>0){_nodes.$day.text(remainDay-1);_nodes.$hour.text(23);_nodes.$minute.text(59);return;}
if(_countDownInterval){clearInterval(_countDownInterval);}}
function _emptyRemainTime(){_nodes.$day.text(0);_nodes.$hour.text(0);_nodes.$minute.text(0);}
_util.initNameSpace("CS.page.index");CS.page.index.countDown={"init":init};})(jQuery);