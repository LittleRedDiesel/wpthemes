	(function( root, $, undefined ) {
		"use strict";

		$(function () {
				/* jshint ignore:start */
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
					var $markers = $el.find(".marker");

					var stylesArray = [
					{
					"featureType": "water",
					"elementType": "geometry.fill",
					"stylers": [
					  { "color": "#ffffff" }
					]
					},{
					"featureType": "road.local",
					"elementType": "labels.text.stroke",
					"stylers": [
					  { "visibility": "#000000" }
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
					  { "color": "#000000" }
					]
					},{
					"featureType": "road",
					"elementType": "labels.text.stroke",
					"stylers": [
					  { "visibility": "#ffffff" }
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
					  { "color": "#ffffff" }
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
					  { "color": "#000000" }
					]
					},{
					"featureType": "poi",
					"stylers": [
					  { "color": "#000000" }
					]
					},{
					"featureType": "water",
					"elementType": "labels.text.stroke",
					"stylers": [
					  { "color": "#ffffff" }
					]
					},{
					"elementType": "labels.text.fill",
					"stylers": [
					  { "color": "#000000" }
					]
					},{
					"elementType": "labels.text.stroke",
					"stylers": [
					  { "color": "#ffffff" }
					]
					},{
					"featureType": "transit.station.rail",
					"elementType": "labels.text.stroke",
					"stylers": [
					  { "color": "#ffffff" }
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
					  { "color": "#ffffff" }
					]
					},{
					}
				];

					var styledMap = new google.maps.StyledMapType(stylesArray, {name: "Styled Map"});

					// vars
					var args = {
						zoom		: 16,
						center		: new google.maps.LatLng(0, 0),
						mapTypeControlOptions: {
						  mapTypeIds: [google.maps.MapTypeId.ROADMAP, "map_style"]
						}
					};


					// create map
					var map = new google.maps.Map( $el[0], args);

					map.mapTypes.set("map_style", styledMap);
					map.setMapTypeId("map_style");

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
					var latlng = new google.maps.LatLng( $marker.attr("data-lat"), $marker.attr("data-lng") );

					// create marker
					var iconBase = "https://momentum-training.com/wp-content/themes/momentum2019/img/";
					var marker = new google.maps.Marker({
						position	: latlng,
						map			: map,
						icon: iconBase + "MMNTM-pin1.png"
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
						google.maps.event.addListener(marker, "click", function() {

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
					if( map.markers.length === 1 )
					{
						// set center of map
						map.setCenter( bounds.getCenter() );
						map.setZoom( 17 );
					}
					else
					{
				// fit to bounds
					  map.setCenter( bounds.getCenter() );
				  if ($(window).width() < 960) {
					   map.setZoom( 14 ); // Change the zoom value as required
				   } else {
					 map.setZoom( 15 ); // Change the zoom value as required
				   }
					  //map.fitBounds( bounds ); // This is the default setting which I have uncommented to stop the World Map being repeated

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

				$(".acf-map").each(function(){

					// create map
					map = new_map( $(this) );

				});
				/* jshint ignore:end */
		});

		} ( this, jQuery ));