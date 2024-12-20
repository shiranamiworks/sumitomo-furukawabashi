<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "map",
  "gnav_set" => "map",
  "page_class" => "map",
  "url" => "map.html",
  "title" => "現地案内図｜",
  "keywords" => "現地案内図,",
  "description" => "現地案内図ページ。",
  "add_stylesheet" => ["css/map.css"],
  "add_script" =>  ["js/map.js"],
  "canonical_page_id" => "map",  
  "logo_text" => "現地案内図｜"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
<section id="submaincontainer">
            	<h2 class="ttl"><img src="images/map/ttl01.jpg" alt="現地案内図">マンションギャラリー・現地案内図</h2>
            	<div class="mapArea"><img src="images/map/map.jpg" alt="現地案内図" id="map1"></div>
                <div class="mapArea car"><img src="images/map/route.jpg" alt="カーナビ案内図" id="map2"></div>
				<p class="zip">［マンションギャラリー住所］<br>門真市垣内町2番3号<br><br>［現地所在地］<br>門真市幸福町2024番3<br>［門真市幸福東土地区画整理事業仮換地2街区1画地］（地番）<span><br>※住居表示ではありません。</span></p>
				<div id="btnArea">
					<div id="GoogleMap"><a href="https://maps.app.goo.gl/sqgwfyZbneVG6nvH6" target="_blank"><img src="images/map/btn_googlemap.jpg" alt="Google Map"></a></div>
					<div id="PrintMap"><a href="JavaScript:;" onclick="print_out(); return false;"><img src="images/map/btn_print.jpg" alt="印刷" class="pc"></a></div>
				</div>

	            <div class="container">
	                <p class="txt">※1. 距離表示については地図上の概測距離を、徒歩分数表示については80ｍを1分として算出し、端数を切り上げたものです。エリアマップの徒歩ルートは2023年10月現在のものです。「門真市幸福東土地区画整理事業」（事業主：門真市幸福東土地区画整理組合）に伴う地区外道路4号線および交流広場・交通広場の整備（2026年度事業完了予定）により徒歩分数・ルートが変更になる予定です。また、地区外道路4号線および交流広場・交通広場は門真市の所有であり、「シティタワー古川橋」の竣工時に完成していない可能性があります。あらかじめご了承ください。<br>※掲載の現地案内図は一部道路・施設等を抜粋して表記しています。</p>
	            </div>
            </section>
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
