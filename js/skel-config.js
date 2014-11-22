// skel.js responsive config

(function($) {

	skel.init({
		reset: 'full',
  		containers: '95%',
		breakpoints: {

				xlarge: {
					media: '(min-width: 1300px) and (max-width:1600px)',
					href: '/wp-content/themes/nexus/css/style-xlarge.css',
				},

				large: {
					media: '(min-width:1000) and (max-width: 1480px)',
					href: '/wp-content/themes/nexus/css/style-large.css',
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
					grid: {
						collapse: 1
					}
				},


				small: {
					media: '(max-width: 1000px)',
					href: '/wp-content/themes/nexus/css/style-small.css',
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

		}
	});


})(jQuery);