<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Fim do Mundo - The End of the World</title>


	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
	<meta name="description" content="O mundo ainda pode acabar!!(ainda dá tempo)." />
	
	<meta property="og:title" content="Fim do Mundo - The End of the World" />
	<meta property="og:type" content="activity" />
	<meta property="og:url" content="http://theendoftheworld.com.br/" />
	<meta property="og:image" content="http://theendoftheworld.com.br/lua.png" />
	<meta property="og:description" content="O mundo ainda pode acabar!!(ainda dá tempo)." />


	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="canonical" href="http://theendoftheworld.com.br/" />

	<style type="text/css">
		* { margin: 0; padding: 0; border: none; }
		html, body { height: 100%; }

		@font-face {
		    font-family: 'digital-7regular';
		    src: url('digital-7-webfont.eot');
		    src: url('digital-7-webfont.eot?#iefix') format('embedded-opentype'),
		         url('digital-7-webfont.woff') format('woff'),
		         url('digital-7-webfont.ttf') format('truetype');
		    font-weight: normal;
		    font-style: normal;
		}

		.content { margin: 0 auto; }
		.replacement span {
			position: absolute;
			width: 100%; height: 100%;
			left: 0; top: 0;
		}

		body { background: url('bg-body.jpg') center no-repeat #1D0600; }
		#article { height: 1046px; background: url('bg-article.png') center top no-repeat; }
		#article-title {
			width: 488px; height: 142px;
			position: absolute;
			left: 50%; margin-left: -244px; 
			top: 42px;
			text-indent: -999px;
		}
		#article-title span { background: url('article-title.png'); }

		p { font-family: 'digital-7regular'; }
		#article-clock { font-size: 45px; color: #dacc6d; }
		#article-date { font-size: 25px; color: #FFF; }
		#wrap-article-clock {
			position: absolute;
			left: 50%;
			margin-left: -375px; 
			top: 195px;
			background: url('time.png') left top no-repeat;
			width: 375px; height: 369px;
			padding: 262px 0 0 292px;
		}
		#wrap-article-clock p { width: 175px; text-align: center; }

		.article-cloud { position: absolute; }
		#cloud-left-bottom { top: 160px; }
		#cloud-left-top { top: 270px; }
		#cloud-right-bottom { top: 200px; right: 0; }
		#cloud-right-top { top: 120px; right: 0; }

		#fork-me { position: absolute; top: 0; right: 0; }
	</style>
	<script type="text/javascript" src="all.js"></script>
</head>
<body>
	<article id="article" class="content">
		<h1 id="article-title" class="replacement">O mundo ainda pode acabar:<span></span></h1>

		<img id="cloud-left-bottom" class="article-cloud" src="cloud-left-bottom.png" alt="">
		<img id="cloud-left-top" class="article-cloud" src="cloud-left-top.png" alt="">

		<div id="wrap-article-clock">
<?php 
	date_default_timezone_set ('America/Sao_Paulo');
	$t = 1356141599 - time();
?>
			<p id="article-clock">
				<span id="clock-hour">0<?php echo (23 - date( 'H' )); ?></span>:
				<span id="clock-minute"><?php echo date( 'i', $t ); ?></span>:
				<span id="clock-second"><?php echo date( 's', $t ); ?></span>
			</p>

			<p id="article-date"><?php echo date('d/m/Y'); ?></p>
		</div>

		<img id="cloud-right-bottom" class="article-cloud" src="cloud-right-bottom.png" alt="">
		<img id="cloud-right-top" class="article-cloud" src="cloud-right-top.png" alt="">

		<a href="https://github.com/wbruno/theend" id="fork-me" target="_blank">
			<img src="fork-me.png" alt="Fork me on GitHub" width="149" height="149" /></a>
	</article>


<script type="text/javascript">
(function(){
	"use strict";
	
	var id = function(el){
		return document.getElementById(el);
	},
	timePad = function(t){
		return t<=9 ? '0' + t : t;
	};


	var $clock = id('article-clock'),
	$hour = id('clock-hour'),
	$minute = id('clock-minute'),
	$second = id('clock-second'),
	timer = 0;

	timer = window.setInterval(function(){
		var s = parseInt($second.innerHTML)-1;

		if( $hour.innerHTML==='00' && $minute.innerHTML==='00' && $second.innerHTML==='01' )
		{
			window.clearInterval(timer);
			$clock.innerHTML = 'E ai ? acabou??';
		}

		if(s>0) $second.innerHTML = timePad(s);
		else {
			$second.innerHTML = 59;

			if($minute.innerHTML==='00'){
				$minute.innerHTML = 59;
				$hour.innerHTML = timePad($hour.innerHTML-1);
			} else {
				$minute.innerHTML = timePad($minute.innerHTML-1);
			}
		}

	},1000);
})();

	/* analytics */
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-37217822-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
</body>
</html>