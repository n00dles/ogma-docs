<?php 

function osm( $attr ) {
	$attr = Shortcodes::shortcodeAtts(array(	
		'lat'   => '0', 
		'lon'    => '0',
		'id' => 'map',
		'zoom' => '15',
		'width' => '400',
		'height' => '300',
		'maptype' => 'ROADMAP',
		'address' => '',
		'marker' => 'red',
		'markerimage' => '',
		'infowindow' => '',
		'infowindowdefault' => 'yes',
		'directions' => '',
		'hidecontrols' => 'false',
		'scale' => 'false',
		'scrollwheel' => 'true',
		'layer' => 'mapnik',
        'tileurl' => '',
        'link' => '',
        'option_layer'=>'',
        'icon' => ''
		
        ), $attr);

    $MAPNIK_URL = '["https://a.tile.openstreetmap.org/${z}/${x}/${y}.png",
		"https://b.tile.openstreetmap.org/${z}/${x}/${y}.png",
		"https://c.tile.openstreetmap.org/${z}/${x}/${y}.png"]';
	$CYCLE_URL = '["http://a.tile.opencyclemap.org/cycle/${z}/${x}/${y}.png",
		"http://b.tile.opencyclemap.org/cycle/${z}/${x}/${y}.png",
		"http://c.tile.opencyclemap.org/cycle/${z}/${x}/${y}.png"]';
	$TRANSPORT_URL = '["http://a.tile2.opencyclemap.org/transport/${z}/${x}/${y}.png",
		"http://b.tile2.opencyclemap.org/transport/${z}/${x}/${y}.png",
		"http://c.tile2.opencyclemap.org/transport/${z}/${x}/${y}.png"]';

	switch( $attr['layer'] ) {
		case 'cycle':
			$tileurl = $CYCLE_URL;
			$add_param = '&amp;layers=C';
			break;
		case 'transport':
			$tileurl = $TRANSPORT_URL;
			$add_param = '&amp;layers=T';
			break;
		case 'mapnik':
			$tileurl = $MAPNIK_URL;
			$add_param = '';
	}

	if(empty( $attr['tileurl'] ) ) {
		switch( $attr['layer'] ) {
			case 'cycle':
				$tileurl = $CYCLE_URL;
				$add_param = '&amp;layers=C';
				break;
			case 'transport':
				$tileurl = $TRANSPORT_URL;
				$add_param = '&amp;layers=T';
				break;
			default:
				$tileurl = $MAPNIK_URL;
				$add_param = '';
		}
	}

	switch( $attr['marker'] ) {
		case 'green':
			$icon = '-green';
			break;
		case 'blue':
			$icon = '-blue';
			break;
		case 'gold':
			$icon = '-gold';
			break;
		default:
			$icon = '';
	}
    
	$script = 
        '<div id="mapdiv'.$attr['id'].'" style="width:'.$attr['width'].'px; height:'.$attr['height'].'px;"></div>
        
		<script type="text/javascript" src="/3rdparty/osm/embed-osm/openlayers/OpenLayers.js"></script>
		<script type="text/javascript">
			OpenLayers.IMAGE_RELOAD_ATTEMPTS = 5;
			var map = new OpenLayers.Map( "mapdiv'.$attr['id'].'" );
			map.addLayer( new OpenLayers.Layer.OSM( "", '.$attr['tileurl'].' ) );
			var lonLat = new OpenLayers.LonLat( '.$attr['lon'].' , '.$attr['lat'].' ).transform(
				new OpenLayers.Projection( "EPSG:4326" ),
				map.getProjectionObject() );
			map.setCenter( lonLat, '.$attr['zoom'].' );';
			if( $attr['marker'] !== 'hide' ) {
				$script = $script.
				'var markers = new OpenLayers.Layer.Markers( "Markers" );
				map.addLayer( markers );
				var mkIcon = new OpenLayers.Icon( "/3rdparty/osm/embed-osm/openlayers/img/marker'.$attr['icon'].
					'.png", { w: 21, h: 25 }, { x: -10.5, y: -25 } );
				var marker = new OpenLayers.Marker( lonLat, mkIcon );
				markers.addMarker( marker );';
			}
	$script = $script.'</script>';
	
	if( $attr['link'] === 'show' ) {
		$script = $script.'<small>
			<a href="http://www.openstreetmap.org/?mlat='.$attr['lat'].'&amp;mlon='.$attr['lon'].
				'#map='.$attr['zoom'].'/'.$attr['lat'].'/'.$attr['lon'].$attr['add_param'].'" target="_blank">'.
				__( 'View Larger Map', 'embed-osm' ).'</a>
			</small>';
	}
	return $script;
}

Shortcodes::addShortcode('osm','osm', '[osm lon="" lat="" z="" w="" h=""][/osm]');
