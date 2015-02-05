
(function() {
	$('.ip-header').css({height: $(window).height()});
	var support = { animations : Modernizr.cssanimations },
		container = document.getElementById( 'ip-container' ),
		header = container.querySelector( 'div.ip-header' ),
		loader = new PathLoader( document.getElementById( 'ip-loader-circle' ) ),
		animEndEventNames = { 'WebkitAnimation' : 'webkitAnimationEnd', 'OAnimation' : 'oAnimationEnd', 'msAnimation' : 'MSAnimationEnd', 'animation' : 'animationend' },
		// animation end event name
		animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ];

	function init() {
		var onEndInitialAnimation = function() {
			if( support.animations ) {
				this.removeEventListener( animEndEventName, onEndInitialAnimation );
			}

			startLoading();
		};

		// disable scrolling
		window.addEventListener( 'scroll', noscroll );

		// initial animation
		classie.add( container, 'loading' );

		if( support.animations ) {
			container.addEventListener( animEndEventName, onEndInitialAnimation );
		}
		else {
			onEndInitialAnimation();
		}
	}
    function isMobile() {
		      try{ document.createEvent("TouchEvent"); return true; }
		      catch(e){ return false; }
	}
	function startLoading() {

		var simulationFn = function(instance) {
			var progress = 0,
				interval = setInterval( function() {
					progress = Math.min( progress + Math.random() * 0.1, 1 );

					instance.setProgress( progress );

					if( progress === 1 ) {
						classie.remove( container, 'loading' );
						classie.add( container, 'loaded' );
						clearInterval( interval );
						$('b', '.ip-logo').addClass('victory');

						var onEndHeaderAnimation = function(ev) {
							if( support.animations ) {
								if( ev.target !== header ) return;
								this.removeEventListener( animEndEventName, onEndHeaderAnimation );
							}
							if( !(isMobile()) ){
						    $('.fa-bars').tooltipster({
							     animation: 'fall',
							     delay: 700,theme: 'tooltipster-light',
							     touchDevices: false,
							     offsetX: 17,
							     offsetY: -7,
							     trigger: 'custom',
							     content: 'Нажмите сюда, что бы открыть меню',
							     maxWidth: 350, interactive:true, interactiveTolerance:1000, position: 'right'
							 });

						    $('.nice-slider nav').waypoint(function(){

						          $('.fa-bars').tooltipster('hide', function(){
						            $('.toggle i').removeClass('hey-you');
						          });

						    });



						    $('.fa-bars').tooltipster('show', function(){
						    	$('.toggle i').addClass('hey-you');
						    	setTimeout(function() {
						    		$('.fa-bars').tooltipster('hide', function(){
						    			$('.toggle i').removeClass('hey-you');
						    		});
						    	}, 6000);
						    });
							}
				        /*    $('.slider-caption').each(function(){
				                if($(this).hasClass('caption-current')){
				                        $(this).css({display: 'block'});
				                        $(this).transition({ rotate: '0deg', rotateY: '0deg', rotateX: '0deg', scale: 1, opacity: 1, y: '0px', x: '0px'}, 700);
				                }
				            }); */
							classie.add( document.body, 'layout-switch' );
							window.removeEventListener( 'scroll', noscroll );
						};

						if( support.animations ) {
							header.addEventListener( animEndEventName, onEndHeaderAnimation );
						}
						else {
							onEndHeaderAnimation();
						}
					}
				}, 80 );
		};

		loader.setProgressFn( simulationFn );
	}

	function noscroll() {
		window.scrollTo( 0, 0 );
	}

	init();

})();

