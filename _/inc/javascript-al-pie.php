
<!-- here comes the javascript -->

<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='_/js/jquery-1.6.4.min.js'>\x3C/script>")</script>

<!-- this is where we put our custom functions -->
<script src="_/js/functions.js"></script>

<!-- Asynchronous google analytics; this is the official snippet.
	 Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.
<?php 

$GA_ACCOUNT = "MO-XXXXXX-XX";
$GA_PIXEL = "_/inc/ga.php";

function googleAnalyticsGetImageUrl() {
	global $GA_ACCOUNT, $GA_PIXEL;
	$url = "";
	$url .= $GA_PIXEL . "?";
	$url .= "utmac=" . $GA_ACCOUNT;
	$url .= "&utmn=" . time() . rand(0, 0x7fffffff);
	
	$referer = $_SERVER["HTTP_REFERER"];
	$query = $_SERVER["QUERY_STRING"];
	$path = $_SERVER["REQUEST_URI"];
	
	if (empty($referer)) {
	$referer = "-";
	}
	$url .= "&utmr=" . urlencode($referer);
	
	if (!empty($path)) {
	$url .= "&utmp=" . urlencode($path);
	}
	
	$url .= "&guid=ON";
	
	return $url;
}
?>	 
<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php $googleAnalyticsImageUrl = googleAnalyticsGetImageUrl(); ?><img src="<?= $googleAnalyticsImageUrl ?>" class="GAmobileGif" />
-->
