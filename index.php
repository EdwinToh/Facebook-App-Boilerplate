<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>App Main Page</title>
<style type="text/css">
	html,body {
		margin:0;
		padding:0;
		overflow:hidden;
	}
</style>
</head>

<body>

<div id="fb-root"></div>
<script type="text/javascript">
<!--
	
	// CHECKS IF PAGE IS LOADED WITHIN AN IFRAME
	if( (top === self) ){ 
	
		// if page is not within an iframe, redirect to the facebook app url
		window.location = "<FACEBOOK APP URL>";	
	} else{
		
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
			
			FB.getLoginStatus(function(response) {
			  if (response.authResponse) {
				// logged in and connected user, someone you know
				var query = FB.Data.query( 'select page_id from page_fan where uid='+response.authResponse.userID+' and page_id ='+PAGE_ID);
				query.wait( function(rows) {
					if(rows.length){
						//user already likes your page
						window.location = "start.php";
					}else{
						//user has not yet liked your page, redirect to page tab
						window.top.location = "<URL TO PAGE TAB>";
					}
				});
			  } else {
				// no user session available, someone you dont know
				// redirect to permissions page, we need this because we need to know what the user id is, then we can determine if user has liked our page.
				// change scope to include other permissions, right now, only e-mail is being requested for.
				window.top.location = "http://www.facebook.com/dialog/oauth/?scope=email&client_id=200500273363969&redirect_uri=http://"+domain+"/&response_type=token";
			  }
			});
			
			FB.Canvas.setSize({ width: 740, height: 689 });
			
		};
	 
		(function() {
			var e = document.createElement('script');
			e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
			e.async = true;
			document.getElementById('fb-root').appendChild(e);
		}());
			
	}
//-->
</script>

</body>
</html>
