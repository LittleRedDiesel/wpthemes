// ==== CORE ==== //

// A simple wrapper for all your custom jQuery; everything in this file will be run on every page
;(function($){

  $(function(){

		// Carousel behaviour

		$('.mt-carousel').slick({
			dots: true,
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1
		});

		if($(window).width() < 801) {
			$('.mobile-carousel').slick({
				dots: true,
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				prevArrow: null,
				nextArrow: null
			});
		}

		setTimeout(function() {
	        $('.slick-initialized').hide().css('visibility','visible').fadeIn('700');
	    }, 200);


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
			var iconBase = 'http://momentum-training.com/wp-content/themes/momentumtraining/images/';
			var marker = new google.maps.Marker({
				position	: latlng,
				map			: map,
				icon: iconBase + 'map-marker.png'
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


	$('.lightbox-trigger').click(function(e) {

		//prevent default action (hyperlink)
		e.preventDefault();

		//Get clicked link href
		var lbRef = $(this).data('lightbox'),
			lbClass = '.' + lbRef,
			lbContent = $(lbClass).html();

		/*
		If the lightbox window HTML already exists in document,
		change the img src to to match the href of whatever link was clicked

		If the lightbox window HTML doesn't exists, create it and insert it.
		(This will only happen the first time around)
		*/

		if ($('.lightbox').length > 0) { // #lightbox exists

			//place href as img src value
			$('.lightbox-content').html(lbContent);

			//show lightbox window - you could use .show('fast') for a transition
			$('.lightbox').show();
		}

		else { //#lightbox does not exist - create and insert (runs 1st time only)

			//create HTML markup for lightbox window
			var lightbox =
			'<div class="lightbox">' +
				'<a href="#" class="icon icon-close"><span>Click to close</span></a>' +
				'<div class="lightbox-content">' + //insert clicked link's href into img src
					lbContent +
				'</div>' +
			'</div>';

			//insert lightbox HTML into page
			$('body').append(lightbox);
		}

	});

	//Click the cross to get rid of lightbox window
	$('.lightbox .icon-close').live('click', function(e) { //must use live, as the lightbox element is inserted into the DOM
		e.preventDefault;
		$('.lightbox').hide();
	});

	$('.lightbox .js-back-to-top').live('click', function(event) { //must use live, as the lightbox element is inserted into the DOM
		event.preventDefault();

		$('.lightbox').animate({
			scrollTop: 0 ,
		 	}, 700
		);
	});


	// Masonry
	if($('.masonry-list').length && $(window).width() > 800) {
		$grid = $('.masonry-list').imagesLoaded( function() {
		  // init Masonry after all images have loaded
		  $grid.masonry({
				itemSelector: '.list-item',
				fitWidth: true,
				percentPosition: true
		  });
		});
	}

	$('.button-expand').on('click', function(e){
		e.preventDefault();
		$('.team-further').addClass('masonry-list');
		$('.masonry-list').css('height', 'auto');

			$('.button-expand').remove();

		$grid = $('.masonry-list').imagesLoaded( function() {
		  // init Masonry after all images have loaded

			$grid.masonry({
				itemSelector: '.list-item',
				columnWidth: '.list-item',
				percentPosition: true
			});

		});
	});


	// Interactive panels
	if($('.primary-panels .panel-1').hasClass('js-active')){
		$('.primary-panels .panel-1').parents('.panel-container').addClass('left');
	} else {
		$('.left').removeClass('left');
	}

	$('.js-switch-panel').on('click', function(e){
		e.preventDefault();
		$(this).parents('.panel-container').find('.js-active').removeClass('js-active');
		$(this).parent('.panel').addClass('js-active');

		var panel = $(this).data('panel');

		if($(this).parents('.primary-panels').length){
			$('.primary-panels-display > .js-active').removeClass('js-active');
			$('.' + panel).addClass('js-active');
		} else if($(this).parents('.secondary-panels').length){
			$('.tertiary-panels > .js-active').removeClass('js-active');
			$('.' + panel).addClass('js-active');
		}

		if($('.primary-panels .panel-1').hasClass('js-active')){
			$('.primary-panels .panel-1').parents('.panel-container').addClass('left');
		} else if($('.primary-panels .panel-2').hasClass('js-active')) {
			$('.left').removeClass('left');
		}


	});

  // timetables
  $('#panel1').on('click', function(){
  		teamup.calendar({provider_id:1174690,width:"100%",height:"600px",view:"month"});
  });

  	$('#panel2').on('click', function(){
  			teamup.calendar({provider_id:1756846,width:"100%",height:"600px",view:"month"});
  	});


		// Join us page tab control
		var oldURL = document.referrer,
			currentURL = window.location.href;
			console.log(currentURL);

		if (oldURL === "http://www.momentum-training.com/" && currentURL === 'http://www.momentum-training.com/join-us/?join'){
			$('.js-active').removeClass('js-active');
			$('.panel-2, .panel2, .panel4').addClass('js-active');
		}

	// Table
	$('.mptt-shortcode-event').each(function(){
		if($(this).children('div').length === 3){

			$(this).addClass('three-children');
			$(this).children('.mptt-event-container').css('width', '33%');
		}
	});

	$(document).ready(function() {
    if($('#constant-contact-signup-errors').length){
      $('html, body').animate({
        scrollTop: $('#constant-contact-signup-errors').offset().top + 'px'
      }, 1000, 'swing');
    }

    // Ellipsis crop

    var ellipsis = $('.ellipsis > p');

    $(ellipsis).each(function(){

        if ($(this).height() > 300) {

            var words = $(this).html().split(/\s+/);
            words.push('...');

            do {
                words.splice(-2, 1);
                $(this).html( words.join(' ') );
            } while($(this).height() > 300);

        }
    });
  });


  });
  }(jQuery));
