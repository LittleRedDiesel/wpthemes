(function( root, $, undefined ) {
	"use strict";

	$(function () {

		$(".button-expand").on("click", function(e){
			e.preventDefault();
			$(".team-further").addClass("visible");
			$(".button-expand").remove();
		});


			$(".lightbox-trigger").click(function(e) {

				//prevent default action (hyperlink)
				e.preventDefault();

				//Get clicked link href
				var lbRef = $(this).data("lightbox"),
					lbClass = "." + lbRef,
					lbContent = $(lbClass).html(),
					url = window.location;

				/*
				If the lightbox window HTML already exists in document,
				change the img src to to match the href of whatever link was clicked

				If the lightbox window HTML doesn"t exists, create it and insert it.
				(This will only happen the first time around)
				*/

				if ($(".lightbox").length > 0) { // #lightbox exists

					//place href as img src value
					$(".lightbox-content").html(lbContent);

					//show lightbox window - you could use .show("fast") for a transition
					$(".lightbox").show();
				}

				else { //#lightbox does not exist - create and insert (runs 1st time only)

					//create HTML markup for lightbox window
					var lightbox =
					"<div class=\"lightbox\">" +
						"<a href=\"#\" class=\"icon-close\"><img src=" + url + "momentum/dev/wp-content/uploads/2019/05/cross.png\" /><span>Click to close</span></a>" +
						"<div class=\"lightbox-content\">" + //insert clicked link"s href into img src
							lbContent +
						"</div>" +
					"</div>";

					//insert lightbox HTML into page
					$("body").append(lightbox);
				}

			});

			//Click the cross to get rid of lightbox window
			$(".lightbox .icon-close").on("click", function(e) {
				e.preventDefault;
				$(".lightbox").hide();
			});

			$(".lightbox .js-back-to-top").on("click", function(event) {
				event.preventDefault();

				$(".lightbox").animate({
					scrollTop: 0 ,
				 	}, 700
				);
			});

		/* jshint ignore:start */
		// Masonry
		var $grid;

		if($(".masonry-list").length && $(window).width() > 800) {
			$grid = $(".masonry-list").imagesLoaded( function() {
			  // init Masonry after all images have loaded
			  $grid.masonry({
					itemSelector: ".list-item",
					fitWidth: true,
					percentPosition: true
			  });
			});
		}


		$(".button-expand").on("click", function(e){
			e.preventDefault();
			$(".team-further").addClass("masonry-list");
			$(".masonry-list").css("height", "auto");

				$(".button-expand").remove();

			$grid = $(".masonry-list").imagesLoaded( function() {
			  // init Masonry after all images have loaded

				$grid.masonry({
					itemSelector: ".list-item",
					columnWidth: ".list-item",
					percentPosition: true
				});

			});
		});
		/* jshint ignore:end */

		// Interactive panels
		if($(".primary-panels .panel-1").hasClass("js-active")){
			$(".primary-panels .panel-1").parents(".panel-container").addClass("left");
		} else {
			$(".left").removeClass("left");
		}

		$(".js-switch-panel").on("click", function(e){
			e.preventDefault();
			$(this).parents(".panel-container").find("> .js-active").removeClass("js-active");
			$(this).parent(".panel").addClass("js-active");

			var panel = $(this).data("panel");

			if($(this).parents(".primary-panels").length){
				$(".primary-panels-display > .js-active").removeClass("js-active");
				$("." + panel).addClass("js-active");
			} else if($(this).parents(".secondary-panels").length){
				$(".tertiary-panels > .js-active").removeClass("js-active");
				$("." + panel).addClass("js-active");
			}

			if($(".primary-panels .panel-1").hasClass("js-active")){
				$(".primary-panels .panel-1").parents(".panel-container").addClass("left");
			} else if($(".primary-panels .panel-2").hasClass("js-active")) {
				$(".left").removeClass("left");
			}


		});

			// Join us page tab control
			var oldURL = document.referrer,
				currentURL = window.location.href;

			if (oldURL === "http://www.momentum-training.com/" && currentURL === "http://www.momentum-training.com/join-us/?join"){
				$(".js-active").removeClass("js-active");
				$(".panel-2, .panel2, .panel4").addClass("js-active");
			}

		// Table
		$(".mptt-shortcode-event").each(function(){
			if($(this).children("div").length === 3){

				$(this).addClass("three-children");
				$(this).children(".mptt-event-container").css("width", "33%");
			}
		});


	    if($("#constant-contact-signup-errors").length){
	      $("html, body").animate({
	        scrollTop: $("#constant-contact-signup-errors").offset().top + "px"
	      }, 1000, "swing");
	    }

	    // Ellipsis crop

	    var ellipsis = $(".ellipsis");

	    $(ellipsis).each(function(){

				if ($(this).text().length > 196){
					$(this).text($(this).text().substring(0,196) + "...");
				}
	    });

		var nav       = document.getElementById("site-navigation"),
				menu      = document.getElementById("responsive-menu"),
				button    = document.getElementById("responsive-menu-toggle");

		// Early exit if we"re missing anything essential
		if (!nav || typeof button === "undefined") {
			return;
		}

		// Hide button if menu is empty and return early
		if (typeof menu === "undefined") {
			button.style.display = "none";
			return;
		}

		function lockScroll() {
			if ($("html").hasClass("lock-scroll")) {
					$("html").removeClass("lock-scroll");
					$("html").css({"overflow-y": "scroll", "position": "static", "width": "auto"});
			}
			else {
					$("html").addClass("lock-scroll");
					$("html").css({"overflow-y": "hidden", "position": "fixed", "width": "100%"});
			}
		}

		// Toggle navigation; add or remove a class to both the button and the nav element itself
		button.onclick = function(e) {
			e.preventDefault();
			if (button.className.indexOf( "active" ) !== -1) {
				nav.style.display = "none";
				button.className = button.className.replace(" active", "");
			} else {
				nav.style.display = "block";
				button.className += " active";
			}
			lockScroll();

		};

				});

} ( this, jQuery ));
