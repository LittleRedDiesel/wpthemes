// ==== CORE ==== //

// A simple wrapper for all your custom jQuery; everything in this file will be run on every page
;(function($){
  $(function(){
	// Example integration: JavaScript-based human-readable timestamps
	if ($.timeago) {
		$('time').timeago();

		$('.mt-carousel').slick({
			dots: true,
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1
		});

		/*
		*  new_map
		*
		*  This function will render a Google Map onto the selected jQuery element
		*
		*  @type	function
		*  @date	8/11/2013
		*  @since	4.3.0
		*
		*  @param	$el (jQuery element)
		*  @return	n/a
		*/

		function new_map( $el ) {
			
			// var
			var $markers = $el.find('.marker');

			var stylesArray = [
			{
			"featureType": "water",
			"elementType": "geometry.fill",
			"stylers": [
			  { "color": "#2b2b2b" }
			]
			},{
			"featureType": "road.local",
			"elementType": "labels.text.stroke",
			"stylers": [
			  { "visibility": "off" }
			]
			},{
			"featureType": "poi",
			"elementType": "labels.icon",
			"stylers": [
			  { "visibility": "off" }
			]
			},{
			"featureType": "landscape.man_made",
			"stylers": [
			  { "visibility": "off" }
			]
			},{
			"featureType": "transit.line",
			"stylers": [
			  { "visibility": "on" },
			  { "color": "#808080" }
			]
			},{
			"elementType": "labels.text.fill",
			"stylers": [
			  { "color": "#ffffff" }
			]
			},{
			"featureType": "road",
			"elementType": "labels.text.stroke",
			"stylers": [
			  { "visibility": "off" }
			]
			},{
			"featureType": "transit.station.rail",
			"elementType": "labels.text.stroke",
			"stylers": [
			  { "visibility": "off" }
			]
			},{
			"featureType": "road",
			"elementType": "geometry.stroke",
			"stylers": [
			  { "visibility": "off" }
			]
			},{
			"featureType": "road",
			"elementType": "geometry.fill",
			"stylers": [
			  { "color": "#2b2b2b" }
			]
			},{
			"featureType": "poi",
			"elementType": "labels.text",
			"stylers": [
			  { "visibility": "off" }
			]
			},{
			"featureType": "water",
			"elementType": "geometry.fill",
			"stylers": [
			  { "visibility": "on" }
			]
			},{
			"featureType": "landscape",
			"stylers": [
			  { "color": "#393939" }
			]
			},{
			"featureType": "poi",
			"stylers": [
			  { "color": "#393939" }
			]
			},{
			"featureType": "water",
			"elementType": "labels.text.stroke",
			"stylers": [
			  { "color": "#000000" }
			]
			},{
			"elementType": "labels.text.fill",
			"stylers": [
			  { "color": "#707070" }
			]
			},{
			"elementType": "labels.text.stroke",
			"stylers": [
			  { "color": "#000000" }
			]
			},{
			"featureType": "transit.station.rail",
			"elementType": "labels.text.stroke",
			"stylers": [
			  { "color": "#000000" }
			]
			},{
			"featureType": "transit.station.rail",
			"elementType": "labels.text.fill",
			"stylers": [
			  { "color": "#ffffff" }
			]
			},{
			"featureType": "transit.station.bus",
			"elementType": "labels",
			"stylers": [
			  { "visibility": "off" }
			]
			},{
			"featureType": "transit.line",
			"stylers": [
			  { "color": "#2b2b2b" }
			]
			},{
			}
			]

			var styledMap = new google.maps.StyledMapType(stylesArray, {name: "Styled Map"});
			
			// vars
			var args = {
				zoom		: 16,
				center		: new google.maps.LatLng(0, 0),
			    mapTypeControlOptions: {
			      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
			    }
			};
			
			
			// create map	        	
			var map = new google.maps.Map( $el[0], args);
			
			map.mapTypes.set('map_style', styledMap);
			map.setMapTypeId('map_style');

			// add a markers reference
			map.markers = [];
			
			
			// add markers
			$markers.each(function(){
				
				add_marker( $(this), map );
				
			});
			
			
			// center map
			center_map( map );
			
			
			// return
			return map;
			
		}

		/*
		*  add_marker
		*
		*  This function will add a marker to the selected Google Map
		*
		*  @type	function
		*  @date	8/11/2013
		*  @since	4.3.0
		*
		*  @param	$marker (jQuery element)
		*  @param	map (Google Map object)
		*  @return	n/a
		*/

		function add_marker( $marker, map ) {

			// var
			var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

			// create marker
			var marker = new google.maps.Marker({
				position	: latlng,
				map			: map
			});

			// add to array
			map.markers.push( marker );

			// if marker contains HTML, add it to an infoWindow
			if( $marker.html() )
			{
				// create info window
				var infowindow = new google.maps.InfoWindow({
					content		: $marker.html()
				});

				// show info window when marker is clicked
				google.maps.event.addListener(marker, 'click', function() {

					infowindow.open( map, marker );

				});
			}

		}

		/*
		*  center_map
		*
		*  This function will center the map, showing all markers attached to this map
		*
		*  @type	function
		*  @date	8/11/2013
		*  @since	4.3.0
		*
		*  @param	map (Google Map object)
		*  @return	n/a
		*/

		function center_map( map ) {

			// vars
			var bounds = new google.maps.LatLngBounds();

			// loop through all markers and create bounds
			$.each( map.markers, function( i, marker ){

				var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

				bounds.extend( latlng );

			});

			// only 1 marker?
			if( map.markers.length == 1 )
			{
				// set center of map
				map.setCenter( bounds.getCenter() );
				map.setZoom( 16 );
			}
			else
			{
				// fit to bounds
				map.fitBounds( bounds );
			}

		}

		/*
		*  document ready
		*
		*  This function will render each map when the document is ready (page has loaded)
		*
		*  @type	function
		*  @date	8/11/2013
		*  @since	5.0.0
		*
		*  @param	n/a
		*  @return	n/a
		*/
		// global var
		var map = null;

		$(document).ready(function(){

			$('.acf-map').each(function(){

				// create map
				map = new_map( $(this) );

			});

		});



		// Footer smooth scroll to top
		$('.js-back-to-top').on('click', function(event){
			event.preventDefault();
			$('body,html').animate({
				scrollTop: 0 ,
			 	}, 700
			);
		});


		if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
		window.onmousewheel = document.onmousewheel = wheel;
		 
		function wheel(event) {
		    var delta = 0;
		    if (event.wheelDelta) delta = event.wheelDelta / 120;
		    else if (event.detail) delta = -event.detail / 3;
		 
		    handle(delta);
		    if (event.preventDefault) event.preventDefault();
		    event.returnValue = false;
		}
		 
		function handle(delta) {
		    var time = 300; // delay time
		    var distance = 100; // delta point 
		    // Dom where it will apply 
		    $('html, body').stop().animate({
		        scrollTop: $(window).scrollTop() - (distance * delta)
		    }, time );
		}


	}
  });
}(jQuery));
