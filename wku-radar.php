<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>WKU Weather</title>
	<meta name="description" content="This is the homepage for the WKU ACM Student Chapter.">
	<meta name="author" content="Noah Gary">
	<meta charset="utf-8">

	<link rel="stylesheet" href="css/main/main.css">
	<link id="pagestyle" rel="stylesheet" href="css/cyborg.min.css">
	<!-- <link rel="stylesheet" href="css/bootstrap-theme.min.css"> -->

	<script type="javascript/text" src="js/bootstrap.min.js"></script>

	<script>

		self.setInterval("DoTime()",1000);

		function DoTime() {

		   var date=new Date();
		   var s_gmt=date.toGMTString();
		   var ampm=" pm";
		   var hours=date.getHours();
		   var utchour=date.getUTCHours();
		   utchour=format(utchour);
		   var s_utchour=utchour.toString();
		   if (hours<=12) ampm=" am";
		   if (hours>12) hours=hours-12;
		   if (hours==0) hours=12;

		   var s_hours=format(hours);
		   var minutes=date.getMinutes();
		   var s_minutes=format(minutes);
		   var seconds=date.getSeconds();
		   var s_seconds=format(seconds);

		   var time=(s_utchour +":" +s_minutes +":" +s_seconds +" Z "+"(" +s_hours +":" +s_minutes +":" +s_seconds +ampm+")");
		   document.getElementById("Z-time").innerHTML = time;
		  }

		function format(num){
		   var s_num;
		   if (num<=9) s_num=("0"+num.toString());
		   else s_num=num.toString();
		   return s_num;
		  }

    </script>

    <script type="text/javascript">
    	var binary;

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
    		binary = true;

    		setInterval(function(){
    			location.reload(true)
	    	}, 120000)

    		height = document.getElementById("master").height;

    		_equalizeHeight(height, ["slave1", "slave2", "slave3"]);
    		equalizeHeight("master", ["slave1", "slave2", "slave3"]);
			gifit(imgs, "master", 500);
    	}

    	function swapStyleSheet(sheet){
			
			document.getElementById('pagestyle').setAttribute('href', sheet);
			
			if (binary) {
				document.getElementById('style-toggle').setAttribute('onclick', "swapStyleSheet('/css/cyborg.min.css')");
				document.getElementById('style-toggle').innerHTML = "Change to Dark Theme";
				binary = false;
			} else {
				document.getElementById('style-toggle').setAttribute('onclick', "swapStyleSheet('/css/bootstrap.min.css')");
				document.getElementById('style-toggle').innerHTML = "Change to Light Theme";
				binary = true;
			}
		}

    </script>
	
	<style type="text/css">
		
		.dropdown-toggle {
			margin: 0px;
		}

		#link-dropdown-menu {
			width: 200px;
		}

		#links {
			margin: 10px 0px 0px 0px;
		}

		#dropdown-menu-ul {
			margin: -28px 0px 0px 200px;
		}

		.sidenav {
			width: 230px;
		}

		.mapSquare{
			padding-bottom: 10px;
		}

		.btn-info {
		    background-image: linear-gradient(to bottom,#FF000A 0,#b01e24 100%);
	        background-repeat: repeat-x;
    		border-color: #820000;
    		background-color: #28a4c9;
    		width: 100%;
		}

		.btn-info:hover {
			border-color: #000000;
		}

		.maps-img {
			width: 100%;
		}
	</style>
</head>
<body>
	<!-- Fixed navbar -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html">WKU Weather</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.html">Home</a></li>
					<li class="active"><a href="WXanalysis.php">WX Analysis</a></li>
					<li><a href="skycam.html">Skycam</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
				<a id="style-toggle" onclick="swapStyleSheet('/css/bootstrap.min.css')" style="float: right; padding-top: 15px;">
					Change to Light Theme
				</a>
			</div><!--/.nav-collapse -->
		</div>
	</nav>

	<div id="main-div" class="container-fluid" role="main">
		<div class="col-md-2 sidenav">
			<h3>Links</h3>
			<?php 
				$file = file_get_contents("stuff/links.json");
				$json = json_decode($file);
				echo '<div id="links">';
				foreach ($json as $section => $linkPair) {
					echo '<div id="link-dropdown-menu" class="dropdown">';
					echo '	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<div id="link-drop" class="btn btn-md btn-info">' . $section . '</div>
							</a>';
					echo '<ul id="dropdown-menu-ul" class="dropdown-menu">';
					foreach ($linkPair as $name => $link) {
						echo '<li><a href="'.$link.'">' . $name . '</a></li>';
					}
					echo '</ul>';
					echo '</div>';
				}
				echo '</div>';
			?>
		</div>
		<div id="maps-div" class="col-md-10">
			<div class="row">
				<div class="col-md-6">
					<h1>WX Analysis</h1>
				</div>
				<div class="col-md-6">
					<div style="float: right; margin-left: 10px;">
						<form name="clock" method="post">
					    	<div class="panel panel-danger">
					    		<div class="panel-heading">
					    			<h3 class="panel-title">
					    				Current UTC clock
					    			</h3>
					    		</div>
				    			<div class="panel-body">
					    			<a href="http://www.time.gov/">
					    				<p id="Z-time" style="margin-bottom: 6px;">18:25:42 Z (01:25:42 pm)</p>
					    			</a>
				    			</div>
					    	</div>
					    </form>
				    </div>
				    <div style="float: right;">
					    <form action="http://www.srh.noaa.gov/zipcity.php" method="post" name="NWS Forecast">
					    	<div class="panel panel-danger">
					    		<div class="panel-heading">
					    			<h3 class="panel-title">
					    				NWS Forecast
					    			</h3>
					    		</div>
				    			<div class="panel-body">
		    						<input value="Bowling Green, KY" style="text-align: center;" size="28" name="inputstring">
				    				<input value="&#10095;&#10095;" value="&#8594;" name="Go2" type="submit">
				    			</div>
					    	</div>
					    </form>
				    </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 mapSquare">
					<a href="http://climate.cod.edu/data/surface/US_zoom/contour/current/USZOOM.fronts.gif"><p>U.S. Surface Map</p></a>
      				<a href="http://climate.cod.edu/data/surface/US_zoom/contour/current/USZOOM.fronts.gif">
      					<img class="maps-img" id="master" src="http://people.wku.edu/joshua.durkee/wxanalysis/grlevelx/images/tmci_bv1_0.jpg" usemap="#FPMap0">
      				</a>
		      	</div>
		      	<div class="col-md-3 mapSquare">
	      			<a href="http://www.spc.noaa.gov/public/state//images/KY_swody1.png"><p>Severe Weather Day 1</p></a>
	      			<a href="http://www.spc.noaa.gov/public/state//images/KY_swody1.png">
	      				<img class="maps-img" id="slave1" src="http://www.spc.noaa.gov/public/state//images/KY_swody1.png">
	      			</a>
				</div>
				<div class="col-md-3 mapSquare">
					<a href="http://www.spc.noaa.gov/public/state//images/KY_swody2.png"><p>Severe Weather Day 2</p></a>
					<a href="http://www.spc.noaa.gov/public/state//images/KY_swody2.png">
						<img class="maps-img" id="slave2" src="http://www.spc.noaa.gov/public/state//images/KY_swody2.png">
					</a>
				</div>
				<div class="col-md-3 mapSquare">
					<a href="http://www.spc.noaa.gov/public/state//images/KY_swody3.png"><p>Severe Weather Day 3</p></a>
					<a href="http://www.spc.noaa.gov/public/state//images/KY_swody3.png">
						<img class="maps-img" id="slave3" src="http://www.spc.noaa.gov/public/state//images/KY_swody3.png">
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 mapSquare" >
					<a href="http://www.spc.noaa.gov/products/outlook/day1otlk.html"><p>SPC Day 1</p></a>
					<a href="http://www.spc.noaa.gov/products/outlook/day1otlk.html">
						<img class="maps-img" alt="1630 UTC Day 1 Outlook Graphic" src="http://www.spc.noaa.gov/products/outlook/day1otlk.gif">
					</a>
				</div>
				<div class="col-md-3 mapSquare">
					<a href="http://www.spc.noaa.gov/products/outlook/day2otlk.html"><p>SPC Day 2</p></a>
					<a href="http://www.spc.noaa.gov/products/outlook/day2otlk.html">
						<img class="maps-img" alt="1730 UTC Day 2 Outlook Graphic" src="http://www.spc.noaa.gov/products/outlook/day2otlk.gif">
					</a>
				</div>
				<div class="col-md-3 mapSquare">
					<a href="http://www.spc.noaa.gov/products/outlook/day3otlk.html"><p>SPC Day 3</p></a>
					<a href="http://www.spc.noaa.gov/products/outlook/day3otlk.html">
						<img class="maps-img" alt="1200 UTC Day 3 Outlook Graphic" src="http://www.spc.noaa.gov/products/outlook/day3otlk.gif">
					</a>
				</div>
				<div class="col-md-3 mapSquare">
					<a href="http://www.spc.noaa.gov/products/exper/day4-8/"><p>SPC Day 4-8</p></a>
					<a href="http://www.spc.noaa.gov/products/exper/day4-8/">
						<img class="maps-img" alt="1200 UTC Day 3 Outlook Graphic" src="http://www.spc.noaa.gov/products/exper/day4-8/day48prob.gif">
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 mapSquare">
					<a href="http://www.spc.noaa.gov/exper/mesoanalysis/"><p>Mesoanalysis</p></a>
					<a href="http://www.spc.noaa.gov/exper/mesoanalysis/">
						<img class="maps-img" src="http://www.spc.noaa.gov/exper/mesoanalysis/sectorloop.gif">
					</a>
				</div>
				<div class="col-md-3 mapSquare">
					<a href="http://www.spc.noaa.gov/products/md/"><p>Mesoscale Discussions</p></a>
					<a href="http://www.spc.noaa.gov/products/md/">
						<img class="maps-img" alt="Valid Mesoscale Discussion graphics and text" src="http://www.spc.noaa.gov/products/md/validmd.png">
					</a>
				</div>
				<div class="col-md-3 mapSquare">
					<a href="http://www.wpc.ncep.noaa.gov/metwatch/metwatch_mpd.php"><p>Mesoscale Precip Discussions</p></a>
					<a href="http://www.wpc.ncep.noaa.gov/metwatch/metwatch_mpd.php">
						<img class="maps-img" src="http://www.wpc.ncep.noaa.gov/metwatch/latest_mdmap.gif">
					</a>
				</div>
				<div class="col-md-3 mapSquare">
					<a href="http://www.spc.noaa.gov/products/watch/"><p>Convective Watches</p></a>
					<a href="http://www.spc.noaa.gov/products/watch/">
						<img class="maps-img" alt="Valid SPC Convective Watches graphic and text" src="http://www.spc.noaa.gov/products/watch/validww.png">
					</a>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer">
      <div class="container">
        <a href="http://www.nwas.org/committees/training/links.html">
        	<p style="text-align: center; width: ;">Wx Training and Profession</p>
        </a>
      </div>
    </footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/gifit.js"></script>
	<script src="js/imgResize.js"></script>
</body>
</html>
