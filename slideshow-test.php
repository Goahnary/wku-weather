<!DOCTYPE html>
<html>
<head>
	<title>Testing GifIt</title>
	<script>
		imgs = [
    		"images/radar/khpx_br1_0.jpg",
    		"images/radar/khpx_br1_1.jpg",
    		"images/radar/khpx_br1_2.jpg",
    		"images/radar/khpx_br1_3.jpg",
    		"images/radar/khpx_br1_4.jpg",
    		"images/radar/khpx_br1_5.jpg",
    		"images/radar/khpx_br1_6.jpg",
    		"images/radar/khpx_br1_7.jpg",
    		"images/radar/khpx_br1_8.jpg",
    		"images/radar/khpx_br1_9.jpg"
    	]

    	window.onload = function(){
    		gifit(imgs, "demo", 500);
    	}
	</script>
</head>
<body>
	<img id="demo" src="images/radar/khpx_br1_9.jpg" width="600px">

	<script src="js/gifit.js"></script>
</body>
</html>