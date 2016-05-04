<?php

$stuff = array(
		"Surface Observations" => array(
				"Aviation METAR" => "http://www.aviationweather.gov/adds/metars/",
				"Surface Streamlines" => "http://hint.fm/wind/",
				"NullSchool Streamlines" => "http://earth.nullschool.net/",
				"WPC" => "http://www.wpc.ncep.noaa.gov/",
				"Unisys" => "http://weather.unisys.com/",
				"StormyEyes" => "http://stormeyes.org/pietrycha/noll.html",
				"Short Fuse Composites" => "http://people.wku.edu/joshua.durkee/wxanalysis/shortfuse"
			),
		"Satellite Imagery" => array(
				"Aviation Satellite" => "http://www.aviationweather.gov/adds/satellite/",
				"NASA" => "http://weather.msfc.nasa.gov/GOES/",
				"CIRA" => "http://rammb.cira.colostate.edu/ramsdis/online/goes-west_goes-east.asp",
				"UNISYS" => "http://weather.unisys.com/satellite/index.php",
				"NESDIS" => "http://www.osdpd.noaa.gov/ml/product_list.html",
				"SSEC" => "http://www.ssec.wisc.edu/",
				"CIMSS" => "http://cimss.ssec.wisc.edu/"
			),
		"Radar" => array(
				"NWS" => "http://www.srh.noaa.gov/ridge2/ridgenew2/",
				"EDD" => "http://preview.weather.gov/edd/",
				"RAL" => "http://weather.rap.ucar.edu/radar/",
				"COD" => "http://weather.cod.edu/satrad/"
			),
		"Soundings" => array(
				"SPC Soundings" => "http://www.spc.noaa.gov/exper/soundings/",
				"Nolte WxCaster Soundings" => "http://www.nicknoltewx.com/models.html",
				"BUFKIT" => "http://www.wdtb.noaa.gov/tools/BUFKIT/index.html",
				"NESDIS GOES" => "http://www.ospo.noaa.gov/Products/atmosphere/soundings/index.html"
			),
		"Mesoanalysis" => array(
				"SPC Meso" => "http://www.spc.noaa.gov/exper/mesoanalysis/",
				"COD" => "http://weather.cod.edu/analysis/",
				"PivotalWx" => "http://www.pivotalweather.com/",
				"CAPS" => "http://downdraft.caps.ou.edu/wx/p/r/conus20/adas/",
				"HRRR" => "http://rapidrefresh.noaa.gov/hrrrconus/",
				"NSSL WRF 4km" => "http://www.nssl.noaa.gov/wrf/",
				"NCEP WRF-NMM" => "http://www.emc.ncep.noaa.gov/mmb/mpyle/spcprod/00/",
				"4km 00z" => "http://www.emc.ncep.noaa.gov/mmb/mpyle/spcprod/00/",
				"NCEP WRF-NMM" => "http://www.emc.ncep.noaa.gov/mmb/mpyle/spcprod/12/",
				"4km 12z" => "http://www.emc.ncep.noaa.gov/mmb/mpyle/spcprod/12/",
				"SPC SSEO" => "http://www.spc.noaa.gov/exper/sseo/"
			),
		"Models" => array(
				"Twister Data" => "http://www.twisterdata.com/",
				"Golden Gate Wx" => "http://ggweather.com/loops/ncep_loops.htm",
				"NCEP" => "http://mag.ncep.noaa.gov/",
				"PivotalWx" => "http://www.pivotalweather.com/",
				"COD" => "http://weather.cod.edu/forecast/",
				"SPC SREF" => "http://www.spc.noaa.gov/exper/sref/",
				"SPC SREF Plumes" => "http://www.spc.noaa.gov/exper/sref/fplumes/",
				"EWALL" => "http://www.meteo.psu.edu/%7Egadomski/ewall.html",
				"WxCaster" => "http://www.wxcaster.com/weather.php3",
				"HOOT" => "http://hoot.metr.ou.edu/index.html",
				"Duda" => "http://www.meteor.iastate.edu/%7Ejdduda/forecast/forecast.html",
				"UW" => "http://weather.uwyo.edu/upperair/uamap.html",
				"MOS" => "http://www.weather.gov/mdl/synop/products.php",
				"SimuAwips" => "http://www.simuawips.com/"
			),
		"Analogs" => array(
				"CIPS" => "http://www.eas.slu.edu/CIPS/ANALOG/analog.php",
				"SPC MARS" => "http://www.spc.noaa.gov/exper/mref_mars/"
			),
		"Kentucky" => array(
				"KY Surface" => "http://www.rap.ucar.edu/weather/surface/displaySfc.php?region=evv&amp;endDate=20080508&amp;endTime=-1&amp;duration=0",
				"KY Radar" => "http://www.kymesonet.org/",
				"KY Mesonet" => "http://www.kymesonet.org/",
				"Kentucky NWS" => "http://www.weather.gov/view/states.php?state=KY&amp;map=on",
				"BWG Obs" => "http://www.weather.gov/data/obhistory/KBWG.html",
				"BWG Climo Report" => "http://forecast.weather.gov/product.php?site=NWS&amp;product=CLI&amp;issuedby=BWG" 
			)
	);



$json = json_encode($stuff);

file_put_contents("links.json", $json);

?>
