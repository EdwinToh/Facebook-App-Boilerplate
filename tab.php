<?php

$signed_request = $_REQUEST["signed_request"];
 
list($encoded_sig, $payload) = explode('.', $signed_request, 2);
 
$data = json_decode(base64_decode(strtr($payload, '-_', '+/')), true);
 
$app_data = isset($data["app_data"]) ? $data["app_data"] : '';
$_REQUEST["fb_page_id"] = $data["page"]["id"];
$access_admin = $data["page"]["admin"] == 1;
$has_liked = $data["page"]["liked"] == 1;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Facebook Tab Page</title>
<style type="text/css">
	body {
		margin:0;
		padding:0;
	}
    #liked {
        background-image: url(img/liked.gif);
        background-repeat: no-repeat;
        display:block;
        width:520px;
        height:677px;
    }
    #ntliked {
        background-image: url(img/ntliked.gif);
        background-repeat: no-repeat;
        display:block;
        width:520px;
        height:677px;
    }
</style>
</head>

<body>

<?php

if($has_liked == 1){
	echo "<a id='liked' href='<URL TO APP>' target='_top'></a>";
}else{
	echo "<div id='ntliked'></div>";
}
	
?>

</body>
</html>