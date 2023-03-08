<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>QCSlider jQuery Plugin Example</title>
	<style>
		html,* { font-family: 'Inter'; box-sizing: border-box; }
body { background-color: #fafafa; line-height:1.6;}
.lead { font-size: 1.5rem; font-weight: 300; }
.container { margin: 30px auto; max-width: 960px; }
</style>
	<link rel="stylesheet" type="text/css" href="css/qc.slider.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery.js"></script>
	<script type="text/javascript" src="qcslider.jquery.js?v1.4.3"></script>
	<script type="text/javascript">
		$(document).ready(function($){
			$("#slider").QCslider({duration: 7000});
		});
	</script>

</head>
<body>
	<div class="container">
		<h1>QCSlider jQuery Plugin Example</h1>
		<style>
.download{ padding: 1.25rem; border:0; border-radius:3px; background-color:#4F46E5; color:#fff;cursor:pointer; text-decoration:none;}.download:hover{color: #fff}#carbonads{display:block;overflow:hidden;max-width:728px;position:relative;font-size:22px;box-sizing:content-box}#carbonads>span{display:block}#carbonads a{color:#4F46E5;text-decoration:none}#carbonads a:hover{color:#4F46E5}.carbon-wrap{display:flex;align-items:center}.carbon-img{display:block;margin:0;line-height:1}.carbon-img img{display:block;height:90px;width:auto}.carbon-text{display:block;padding:0 1em;line-height:1.35;text-align:left}.carbon-poweredby{display:block;position:absolute;bottom:0;right:0;padding:6px 10px;text-align:center;text-transform:uppercase;letter-spacing:.5px;font-weight:600;font-size:8px;border-top-left-radius:4px;line-height:1;color:#aaa!important}@media only screen and (min-width:320px) and (max-width:759px){.carbon-text{font-size:14px}}
</style>
<div id="carbon-block"></div>
<div><script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2783044520727903"
     crossorigin="anonymous"></script>
<!-- jQuery_Replace_Demo -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2783044520727903"
     data-ad-slot="7325992188"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
<p style="margin:2rem auto"><a class="download" href="https://www.jqueryscript.net/slider/image-video-carousel-qc.html">Download This Plugin</a> <a class="download" href="https://www.jqueryscript.net/">Back To jQueryScript</a></p>
		<p class="lead">A lightweight and responsive carousel slider jQuery plugin that supports various content types like images, HTML5 videos, and Youtube videos.</p>
	<section class="slide">
		<div class="slider-container">
			<ul class="slider-wrapper" id="slider">
				<li class="slide-current">
					<img src="https://www.jqueryscript.net/dummy/1.jpg"/>
					<div class="capa"></div>
				</li>
				<li class="video" data-type="video" data-video="https://www.jqueryscript.net/dummy/1.mp4" data-muted="true"></li>
				<li class="video" data-type="youtube" data-video="c9g4SK-iYKM" data-muted="true"></li>
				<li class="video" data-type="youtube" data-video="AcixoJTGejA" data-muted="true"></li>
				<li class="video" data-type="youtube" data-video="sciFPlDs9XI" data-muted="true"></li>
			</ul>
			<div class="drt-control control-left" id="lft-control"><</div>
          	<div class="drt-control control-right" id="rht-control">></div>
			<ul class="slider-controls" id="slider-controls"></ul>
			<div class="tempo-bar" id="barra"></div>
		</div>
	</section>
</div>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1VDDWMRSTH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-1VDDWMRSTH');
</script>
<script>
try {
  fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
    return true;
  }).catch(function(e) {
    var carbonScript = document.createElement("script");
    carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
    carbonScript.id = "_carbonads_js";
    document.getElementById("carbon-block").appendChild(carbonScript);
  });
} catch (error) {
  console.log(error);
}
</script>
</body>
</html>
