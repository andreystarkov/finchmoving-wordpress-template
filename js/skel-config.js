
(function($) {


	skel.init({
		reset: 'full',
		breakpoints: {

				global: {
					href: '/wp-content/themes/nexus/css/style.css',
					containers: 1400,
					grid: {
						gutters: {
							vertical: '2em',
							horizontal: 0
						}
					}
				},

				xlarge: {
					media: '(min-width: 1300px) and (max-width:1600px)',
					href: '/wp-content/themes/nexus/css/style-xlarge.css',
					containers: 1200
				},

				large: {
					media: '(min-width:1000) and (max-width: 1480px)',
					href: '/wp-content/themes/nexus/css/style-large.css',
					containers: 960,
					grid: {
						gutters: {
							vertical: '1.5em'
						}
					},
					viewport: {
						scalable: false
					}
				},

				medium: {
					media: '(min-width: 480px) and (max-width: 1000px)',
					href: '/wp-content/themes/nexus/css/style-medium.css',
					containers: '90%',
					grid: {
						collapse: 1
					}
				},


				small: {
					media: '(max-width: 1000px)',
					href: '/wp-content/themes/nexus/css/style-small.css',
					containers: '90%',
					grid: {
						gutters: {
							vertical: '1.25em'
						}
					}
				},

				xsmall: {
					media: '(max-width: 480px)',
					href: '/wp-content/themes/nexus/css/style-xsmall.css',
					grid: {
						collapse: 2
					}
				}

		} /*,
		plugins: {
			layers: {

					config: {
						transform: true
					},

					navPanel: {
						animation: 'pushX',
						breakpoints: 'medium',
						clickToHide: true,
						height: '100%',
						hidden: true,
						html: '<div data-action="moveElement" data-args="top-nav"></div>',
						orientation: 'vertical',
						position: 'top-left',
						side: 'left',
						width: 250
					},

					navButton: {
						breakpoints: 'medium',
						height: '4em',
						html: '<span class="toggle" data-action="toggleLayer" data-args="navPanel"></span>',
						position: 'top-left',
						side: 'top',
						width: '6em'
					}

			}
		} */
	});

	$(function() {

	});

})(jQuery);