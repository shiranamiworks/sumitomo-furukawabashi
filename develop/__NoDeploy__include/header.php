<html lang="ja">
<head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# website: https://ogp.me/ns/website#">
    <meta charset="Shift_JIS">
    <meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<?php
$site_setting = array(
  "area" => "kansai",
  "prop" => "furukawabashi",
  "tel_link" => "tel:0120330648",
  "meta_link" => "https://www.sumitomo-rd-mansion.jp/gallery/",
  "requested_only" => "#requested_only",
);
$folder_name = $site_setting["area"]."/".$site_setting["prop"]."/";
?>
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="<?= $page_settings["keywords"] ?>シティタワー古川橋,古川橋 新築分譲マンション,門真市 新築マンション,古川橋,古川橋駅,京阪本線,門真市,マンション,新築マンション,分譲マンション,住友不動産">
<meta name="description" content="<?= $page_settings["description"] ?>京阪本線「古川橋駅」まで徒歩4分。住友不動産の新築マンションが古川橋に誕生。【すみふ古川橋】門真市の新築分譲マンションなら住友不動産。">
<title><?= $page_settings["title"] ?>【公式】シティタワー古川橋｜古川橋の新築マンション｜住友不動産</title>
<meta property="og:url" content="https://www.sumitomo-rd-mansion.jp/<?= $folder_name?><?= $page_settings["url"] ?>">
<meta property="og:type" content="website" />
<meta property="og:title" content="<?= $page_settings["title"] ?>【公式】シティタワー古川橋｜古川橋の新築マンション｜住友不動産">
<meta property="og:description" content="<?= $page_settings["description"] ?>京阪本線「古川橋駅」まで徒歩4分。住友不動産の新築マンションが古川橋に誕生。【すみふ古川橋】門真市の新築分譲マンションなら住友不動産。">
<meta property="og:site_name" content="<?= $page_settings["title"] ?>【公式】シティタワー古川橋｜古川橋の新築マンション｜住友不動産">
<meta property="og:image" content="<?= $page_settings["directory_pos"] ?>images/top/ogp.jpg" />

<link rel="canonical" href="https://www.sumitomo-rd-mansion.jp/<?= $folder_name?><?= $page_settings["url"] ?>">
<!-- <link rel="icon" href="<?= $page_settings["directory_pos"]  ?>images/favicon.ico" alt="" id="favicon"> -->


<link rel="index" href="index.html">

<script src="<?= $page_settings["directory_pos"]  ?>js/jquery.js"></script>
<script>
// akam-sw.js install script version 1.3.6
"serviceWorker"in navigator&&"find"in[]&&function(){var e=new Promise(function(e){"complete"===document.readyState||!1?e():(window.addEventListener("load",function(){e()}),setTimeout(function(){"complete"!==document.readyState&&e()},1e4))}),n=window.akamServiceWorkerInvoked,r="1.3.6";if(n)aka3pmLog("akam-setup already invoked");else{window.akamServiceWorkerInvoked=!0,window.aka3pmLog=function(){window.akamServiceWorkerDebug&&console.log.apply(console,arguments)};function o(e){(window.BOOMR_mq=window.BOOMR_mq||[]).push(["addVar",{"sm.sw.s":e,"sm.sw.v":r}])}var i="/akam-sw.js",a=new Map;navigator.serviceWorker.addEventListener("message",function(e){var n,r,o=e.data;if(o.isAka3pm)if(o.command){var i=(n=o.command,(r=a.get(n))&&r.length>0?r.shift():null);i&&i(e.data.response)}else if(o.commandToClient)switch(o.commandToClient){case"enableDebug":window.akamServiceWorkerDebug||(window.akamServiceWorkerDebug=!0,aka3pmLog("Setup script debug enabled via service worker message"),v());break;case"boomerangMQ":o.payload&&(window.BOOMR_mq=window.BOOMR_mq||[]).push(o.payload)}aka3pmLog("akam-sw message: "+JSON.stringify(e.data))});var t=function(e){return new Promise(function(n){var r,o;r=e.command,o=n,a.has(r)||a.set(r,[]),a.get(r).push(o),navigator.serviceWorker.controller&&(e.isAka3pm=!0,navigator.serviceWorker.controller.postMessage(e))})},c=function(e){return t({command:"navTiming",navTiming:e})},s=null,m={},d=function(){var e=i;return s&&(e+="?othersw="+encodeURIComponent(s)),function(e,n){return new Promise(function(r,i){aka3pmLog("Registering service worker with URL: "+e),navigator.serviceWorker.register(e,n).then(function(e){aka3pmLog("ServiceWorker registration successful with scope: ",e.scope),r(e),o(1)}).catch(function(e){aka3pmLog("ServiceWorker registration failed: ",e),o(0),i(e)})})}(e,m)},g=navigator.serviceWorker.__proto__.register;if(navigator.serviceWorker.__proto__.register=function(n,r){return n.includes(i)?g.call(this,n,r):(aka3pmLog("Overriding registration of service worker for: "+n),s=new URL(n,window.location.href),m=r,navigator.serviceWorker.controller?new Promise(function(n,r){var o=navigator.serviceWorker.controller.scriptURL;if(o.includes(i)){var a=encodeURIComponent(s);o.includes(a)?(aka3pmLog("Cancelling registration as we already integrate other SW: "+s),navigator.serviceWorker.getRegistration().then(function(e){n(e)})):e.then(function(){aka3pmLog("Unregistering existing 3pm service worker"),navigator.serviceWorker.getRegistration().then(function(e){e.unregister().then(function(){return d()}).then(function(e){n(e)}).catch(function(e){r(e)})})})}else aka3pmLog("Cancelling registration as we already have akam-sw.js installed"),navigator.serviceWorker.getRegistration().then(function(e){n(e)})}):g.call(this,n,r))},navigator.serviceWorker.controller){var u=navigator.serviceWorker.controller.scriptURL;u.includes("/akam-sw.js")||u.includes("/akam-sw-preprod.js")||u.includes("/threepm-sw.js")||(aka3pmLog("Detected existing service worker. Removing and re-adding inside akam-sw.js"),s=new URL(u,window.location.href),e.then(function(){navigator.serviceWorker.getRegistration().then(function(e){m={scope:e.scope},e.unregister(),d()})}))}else e.then(function(){window.akamServiceWorkerPreprod&&(i="/akam-sw-preprod.js"),d()});if(window.performance){var w=window.performance.timing,l=w.responseEnd-w.responseStart;c(l)}e.then(function(){t({command:"pageLoad"})});var k=!1;function v(){window.akamServiceWorkerDebug&&!k&&(k=!0,aka3pmLog("Initializing debug functions at window scope"),window.aka3pmInjectSwPolicy=function(e){return t({command:"updatePolicy",policy:e})},window.aka3pmDisableInjectedPolicy=function(){return t({command:"disableInjectedPolicy"})},window.aka3pmDeleteInjectedPolicy=function(){return t({command:"deleteInjectedPolicy"})},window.aka3pmGetStateAsync=function(){return t({command:"getState"})},window.aka3pmDumpState=function(){aka3pmGetStateAsync().then(function(e){aka3pmLog(JSON.stringify(e,null,"\t"))})},window.aka3pmInjectTiming=function(e){return c(e)},window.aka3pmUpdatePolicyFromNetwork=function(){return t({command:"pullPolicyFromNetwork"})})}v()}}();</script>

<!-- ▼ ここから下にフリーエリアのCSS、JSを指定してください ▼ -->
<link rel="stylesheet" href="<?= $page_settings["directory_pos"]  ?>font/fontawesome/./css/all.css">
<link rel="stylesheet" href="<?= $page_settings["directory_pos"]  ?>css/slick-theme.css">
<link rel="stylesheet" href="<?= $page_settings["directory_pos"]  ?>css/slick.css">
<link rel="stylesheet" href="<?= $page_settings["directory_pos"]  ?>css/reset.css">
<link rel="stylesheet" href="<?= $page_settings["directory_pos"]  ?>css/common.css">
<link rel="stylesheet" href="<?= $page_settings["directory_pos"]  ?>css/top.css">
<link rel="stylesheet" href="<?= $page_settings["directory_pos"]  ?>css/leaflet.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<link href="/proptopics/css/topics.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://use.typekit.net/hrk8egz.css">
<!-- <link rel="stylesheet" href="./css/leaflet.css"> -->
<?php foreach($page_settings["add_stylesheet"] as $key => $value) { ?>
<link href="<?= $page_settings["directory_pos"]  ?><?= $value ?>" rel="stylesheet">
<?php }; ?>
<?php foreach($page_settings["add_script"] as $key => $value) { ?>
<script type="text/javascript" src="<?= $page_settings["directory_pos"]  ?><?= $value ?>"></script>
<?php }; ?>

<script src="<?= $page_settings["directory_pos"]  ?>js/jquery-3.6.3.min.js"></script>
<script src="<?= $page_settings["directory_pos"]  ?>js/slick.min.js"></script>
<script src="<?= $page_settings["directory_pos"]  ?>js/pop.js"></script>
<script src="<?= $page_settings["directory_pos"]  ?>js/common.js"></script>
<script type="text/javascript" src="/proptopics/js/topics.js" charset="EUC-JP"></script>
<script type="text/javascript" src="<?= $page_settings["directory_pos"]  ?>js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?= $page_settings["directory_pos"]  ?>js/leaflet.js"></script>
<script type="text/javascript" src="<?= $page_settings["directory_pos"]  ?>js/imgViewer2.js"></script>
<script type="text/javascript" src="<?= $page_settings["directory_pos"]  ?>js/script.js"></script>
<?php foreach($page_settings["add_script"] as $key => $value) { ?>
<script src="<?= $page_settings["directory_pos"]  ?><?= $value ?>"></script>
<?php }; ?>
<!-- init -->
<!-- ▲ ここから上にフリーエリアのCSS、JSを指定してください ▲ -->
</head>


<body id="<?= $page_settings["page_id"] ?>" class="<?= $page_settings["page_class"] ?>">
<div class="body-wrapper position-relative">   
<header id="header">
  <div class="header-wrapper d-flex align-items-center justify-content-between">
    <h1 class="header-logo">
      <a href="index.html">
        <figure><img src="<?= $page_settings["directory_pos"]  ?>images/common/logo-pc.png" alt=""></figure>
        <p>古川橋駅徒歩4分｜シティタワー古川橋｜門真市 新築マンション｜<?= $page_settings["logo_text"]  ?>すみふ古川橋｜住友不動産</p>
      </a>
    </h1><!-- header-logo -->
    <div class="header-right d-flex">
               <script type="text/javascript" src="/bukken_manage/bukken_manage_entry_button.cgi?AREA_CD=kansai&PROP_CD=furukawabashi&LINK=header"></script>
                    <div id="sp-menu-btn" class="hamburger">
                        <p>MENU</p>
                        <div class="menu-trigger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
    </div>
    <div class="header-menu black">
      <div class="container d-flex flex-wrap justify-content-between align-items-start">
        <nav>
         <ul>
          <li>
            <a href="<?= $page_settings["directory_pos"]  ?>"><span class="f-en">TOP</span><br>トップ</a>
          </li>
          <li>
            <a href="<?= $page_settings["directory_pos"]  ?>concept.html"><span class="f-en">CONCEPT</span><br>コンセプト</a>
          </li>
          <li><a href="<?= $page_settings["directory_pos"]  ?>design.html"><span class="f-en">DESIGN</span><br>デザイン</a>
          </li>
          <li class="has-child">
            <p class="active"><span class="f-en">COMMON SPACE</span><br>共用空間</p>
            <div class="sub-menu">
              <a href="<?= $page_settings["directory_pos"]  ?>public01.html">迎賓空間</a>
              <a href="<?= $page_settings["directory_pos"]  ?>public02.html">共用空間</a>
            </div>
          </li>
          <li>
            <a href="<?= $page_settings["directory_pos"]  ?>private.html"><span class="f-en">PRIVATE SPACE</span><br>室内空間</a>
          </li>
        </ul>
        <ul>
          <li>
            <a href="https://www.sumitomo-rd-mansion.jp/kansai/furukawabashi/list.php" target="_blanc"><span class="f-en">PLAN</span><br>間取り</a>
          </li>
          <li class="has-child">
            <p class="active"><span class="f-en">EQUIPMENT ・QUALITY</span><br>設備・仕様</p>
            <div class="sub-menu">
              <a href="<?= $page_settings["directory_pos"]  ?>equipment01.html">キッチン</a>
              <a href="<?= $page_settings["directory_pos"]  ?>equipment02.html">サニタリー</a>
              <a href="<?= $page_settings["directory_pos"]  ?>equipment03.html">健康・エコ・省エネ</a>
              <a href="<?= $page_settings["directory_pos"]  ?>equipment04.html">収納・快適仕様</a>
              <a href="<?= $page_settings["directory_pos"]  ?>equipment05.html">マルチメディア・サービス</a>
            </div>
          </li>
           <li class="has-child">
            <p class="active"><span class="f-en">STRUCTURE・SAFETY</span><br>構造・防災</span></p>
            <div class="sub-menu">
              <a href="<?= $page_settings["directory_pos"]  ?>structure01.html">基本構造</a>
              <a href="<?= $page_settings["directory_pos"]  ?>structure02.html">セキュリティ</a>
              <a href="<?= $page_settings["directory_pos"]  ?>structure03.html">防災対策</a>
            </div>
          </li> 
          <li class="has-child">
            <p class="active"><span class="f-en">LOCATION</span><br>ロケーション</p>
            <div class="sub-menu">
              <a href="<?= $page_settings["directory_pos"]  ?>location01.html">「古川橋」駅前が生まれ変わる</a>
              <a href="<?= $page_settings["directory_pos"]  ?>location02.html">たしかな暮らしやすさがここにある</a>
            </div>
          </li>
          <li>
            <a href="<?= $page_settings["directory_pos"]  ?>access.html"><span class="f-en">ACCESS</span><br>アクセス</a>
          </li>
        </ul>
      </nav>
      <div class="header-menu-right">
        <ul class="header-menu-btn">
          <script type="text/javascript" src="/bukken_manage/bukken_manage_entry_button.cgi?AREA_CD=kansai&PROP_CD=furukawabashi&LINK=header-menu"></script>
        </ul>
        <div class="header-menu-other">
          <ul>
            <li><a href="map.html" target="_blank">現地案内図</a></li>
            <li><a href="/kansai/furukawabashi/faq.cgi" target="_blank">FAQ</a></li>
            <li><a href="javascript:outline();">物件概要</a></li>
          </ul>
          <div class="header-sns">
            <a href="https://x.com/ct_f_kawabashi" target="_blank"><img src="./images/common/icn_x.png" alt="X"></a>
            <a href="https://www.instagram.com/ct_furukawabashi/" target="_blank"><img src="./images/common/icn_instagram.png" alt="Instagram"></a>
          </div>
        </div>
      </div>
    </div>
  </div><!--//header-menu -->
  <div class="sp-menu">
    <nav>
      <ul>
        <li><a href="<?= $page_settings["directory_pos"]  ?>">トップ</a></li>
        <li><a href="<?= $page_settings["directory_pos"]  ?>concept.html">コンセプト</a></li>
        <li><a href="<?= $page_settings["directory_pos"]  ?>design.html">デザイン</a></li>
        <li><a href="<?= $page_settings["directory_pos"]  ?>public01.html">共用空間</a></li>
        <li><a href="<?= $page_settings["directory_pos"]  ?>private.html">室内空間</a></li>
        <li><a href="https://www.sumitomo-rd-mansion.jp/kansai/furukawabashi/list.php" target="_blanc">間取り</a></li>
        <li><a href="<?= $page_settings["directory_pos"]  ?>equipment01.html">設備・仕様</a></li>
        <li><a href="<?= $page_settings["directory_pos"]  ?>structure01.html">構造・防災</a></li> 
        <li><a href="<?= $page_settings["directory_pos"]  ?>location01.html">ロケーション</a></li>
        <li><a href="<?= $page_settings["directory_pos"]  ?>access.html">アクセス</a></li>
        <li><a href="<?= $page_settings["directory_pos"]  ?>map.html" target="_blank">現地案内図</a></li>
        <li><a href="javascript:outline();">物件概要</a></li>
        <li><a href="/kansai/furukawabashi/faq.cgi" target="_blank">FAQ</a></li>
        <script type="text/javascript" src="/bukken_manage/bukken_manage_entry_button.cgi?AREA_CD=kansai&PROP_CD=furukawabashi&LINK=sp-menu"></script>
      </ul>
    </nav>
    <div class="sp-menu-sns d-flex justify-content-center align-items-center">
      <a href="https://x.com/ct_f_kawabashi" target="_blank"><img src="./images/common/icn_x-black.png" alt="X"></a>
       <a href="https://www.instagram.com/ct_furukawabashi/" target="_blank"><img src="./images/common/icn_instagram.png" alt="Instagram"></a>
    </div>
  </div><!--//sp-menu -->
</header>
<!-- #header -->