<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="overflow: hidden">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>App Start Page</title>
<style type="text/css">
	html,body {
		margin:0;
		padding:0;
		overflow:hidden;
	}
</style>
<script type="text/javascript" src="swfobject/swfobject.js"></script>

<script type="text/javascript">
        /*<![CDATA[*/
            swfobject.embedSWF('base.swf', 'website', '760', '680', '10', 
                'swfobject/expressinstall.swf', {domain: '*'}, {allowscriptaccess: 'always', bgcolor: '#000000', menu: 'false', wmode: 'transparent'}, {id: 'website'});
        /*]]>*/
		
		window.fbAsyncInit = function() {
			FB.Canvas.setAutoResize();
		};

</script>
</head>

<body style="overflow: hidden">

<div id="fb-root"></div>
<script type="text/javascript">
<!--
	
	
		var fbAsyncInit = function() {
	 
			var APP_ID   = '<APP ID>';
			var PAGE_ID  = '<PAGE ID>'; 
			var domain	 = '<DOMAIN URL WITHOUT http://>';
	 
			FB.init({
				appId  : APP_ID,
				channelURL : '//'+domain+'/channel.php', // Channel File
				status : true, // check login status
				cookie : true, // enable cookies to allow the server to access the session
				oauth  : true,
				xfbml  : true  // parse XFBML
			});
			
			FB.Canvas.setSize({ width: 760, height: 680 });
			
		};
	 
		(function() {
			var e = document.createElement('script');
			e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
			e.async = true;
			document.getElementById('fb-root').appendChild(e);
		}());
			
	
//-->
</script>
<div id="website">
    <p>In order to view this page you need Flash Player 10 support!</p>
    <p>
        <a href="http://www.adobe.com/go/getflashplayer">
            <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />                
        </a>
    </p>
</div>  

</body>
</html>
