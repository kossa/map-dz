<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<link href="css/style.css" rel="stylesheet"/>
	<link href="css/default.css" rel="stylesheet"/>
	<script src="js/jquery-1.7.min.js"></script>
	<script src="js/scale.raphael.js"></script>
	<script src="js/raphael-min.js"></script>
	<script>
<?php
	include("map.php");

?>
	</script>
	<!--[if lt IE 9]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js" type="text/javascript"></script>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/ie7-squish.js" type="text/javascript"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
	<![endif]-->
</head>
<body>
	<div id="wrapper0">	
		<h1 id="ww"></h1>
		<ul id="alphabet">
			<li><a href="" id="alif" class="actives" title="أدرار, الأغواط, أم البواقي, إليزي">أ</a></li>
			<li><a href="" id="baa" class="actives" title="باتنة, بجاية, بسكرة, بشار, البليدة, البويرة, البيض, برج بوعريريج, بومرداس">ب</a></li>
			<li><a href="" id="taa" class="actives" title="تمنراست, تبسة, تلمسان, تيارت, تيزي وزو, تندوف, تسمسيلت, تيبازة">ت</a></li>
			<li><a href="" id="tha" class="disable"title="">ث</a></li>
			<li><a href="" id="dja" class="actives" title="الجزائر, الجلفة, جيجل">ج</a></li>
			<li><a href="" id="haa" class="disable" title="">ح</a></li>
			<li><a href="" id="kha" class="actives" title="خنشلة">خ</a></li>
			<li><a href="" id="dal" class="disable" title="">د</a></li>
			<li><a href="" id="dha" class="disable" title="">ذ</a></li>
			<li><a href="" id="raa" class="disable" title="">ر</a></li>
			<li><a href="" id="zaa" class="disable" title="">ز</a></li>
			<li><a href="" id="sin" class="actives" title="سطيف, سعيدة, سكيكدة, سيدي بلعباس, سوق أهراس">س</a></li>
			<li><a href="" id="cha" class="actives" title="الشلف">ش</a></li>
			<li><a href="" id="sad" class="disable" title="">ص</a></li>
			<li><a href="" id="dha" class="disable" title="">ض</a></li>
			<li><a href="" id="ta2" class="actives" title="الطارف">ط</a></li>
			<li><a href="" id="dad" class="disable" title="">ظ</a></li>
			<li><a href="" id="ine" class="actives" title="عنابة, عين الدفلى, عين تموشنت">ع</a></li>
			<li><a href="" id="gha" class="actives" title="غرداية, غليزان">غ</a></li>
			<li><a href="" id="faa" class="disable" title="">ف</a></li>
			<li><a href="" id="kaf" class="actives" title="قالمة, قسنطينة">ق</a></li>
			<li><a href="" id="kaa" class="disable" title="">ك</a></li>
			<li><a href="" id="lam" class="disable" title="">ل</a></li>
			<li><a href="" id="mim" class="actives" title="المدية, مستغانم, المسيلة, معسكر, ميلة">م</a></li>
			<li><a href="" id="non" class="actives" title="النعامة">ن</a></li>
			<li><a href="" id="hae" class="disable" title="">هـ</a></li>
			<li><a href="" id="waw" class="actives" title="ورقلة, وهران, الوادي">و</a></li>
			<li><a href="" id="yaa" class="disable" title="">ي</a></li>
		</ul><!-- / alphabet-->
		<div id="contenu">
			<div id="rsr">			<!-- La map --> 	</div>	
				<img src="css/arrow.png"  id="arrow" alt="">	
			<div id="wilaya">
				<ul></ul>
			</div><!-- /wilaya -->
		</div><!-- /contenu -->
	</div>	<!-- /wrapper-->
</body>
</html>