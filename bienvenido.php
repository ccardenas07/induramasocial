<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="https://www.facebook.com/2008/fbml">
	<head>
		<title>Indurama Social</title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38627793-1']);
  _gaq.push(['_setDomainName', 'appiglu.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

		<style type='text/css'>
			
			body {
			background-color: #fff;
			}
			
			.black_overlay{
			display: none;
			position: absolute;
			top: 0%;
			left: 0%;
			width: 100%;
			height: 100%;
			background-color: black;
			z-index:1001;
			-moz-opacity: 0.8;
			opacity:.80;
			filter: alpha(opacity=80);
			}
			.white_content {
			text-align:center;
			display: none;
			position: absolute;
			top: 25%;
			left: 35%;
			width: 100px/*50%*/;
			height: 30px/*50%*/;
			padding: 16px;
			border: 10px solid gray;
			background-color: white;
			z-index:1002;
			overflow: auto;
			}
			.imagenFG{
			position:absolute;
			z-index:0;}
		</style>
		
		
	</head>
	
	<body style="background:#FFF top center;">
		<div id="fb-root"></div>
		<script src="https://connect.facebook.net/en_US/all.js"></script>
		<script>
			window.fbAsyncInit = function() {
				//Replace appId with your own
				FB.init({appId: '724918854217755', status: true, cookie: true,
				xfbml: true, oauth: true});
			};
			(function() {
				var e = document.createElement('script'); e.async = true;
				e.src = document.location.protocol +
				'//connect.facebook.net/en_US/all.js';
				document.getElementById('fb-root').appendChild(e);
			}());
			
			FB.Canvas.setSize({ width: 810, height: 625 });
		FB.Canvas.setAutoGrow(625);       </script>
		
		<? require('../../utils/srcfb/facebook.php');
		
			$app_id = "724918854217755";
			$app_secret = "e0c4251d008b4bad9f46f1307f032e7d";
			
			$facebook = new Facebook(array(
			'appId' => $app_id,
			'secret' => $app_secret,
			'cookie' => false
			));
			
			$signed_request = $facebook->getSignedRequest();
			function parsePageSignedRequest() {
				if (isset($_REQUEST['signed_request'])) {
					$encoded_sig = null;
					$payload = null;
					list($encoded_sig, $payload) = explode('.', $_REQUEST['signed_request'], 2);
					$sig = base64_decode(strtr($encoded_sig, '-_', '+/'));
					$data = json_decode(base64_decode(strtr($payload, '-_', '+/'), true));
					return $data;
				}
				return false;
			}
			if($signed_request = parsePageSignedRequest()) {
				if($signed_request->page->liked) { ?>
				<iframe src="canalsocial.php" width="790" height="1000" scrolling="no" frameborder="0"></iframe>
				<?php } else { ?>
				<img src="ima/fan.jpg" width="790px" />
				<?php
				}
			}
			
		?>
		
	</body>
</html>