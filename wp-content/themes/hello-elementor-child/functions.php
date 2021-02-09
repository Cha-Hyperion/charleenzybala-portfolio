<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
    wp_enqueue_style(
        'hello-elementor-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        [
            'hello-elementor-theme-style',
        ],
        '1.0.0'
    );
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );


//Axeptio (cookies)
function add_coockies_script_axeptio() { ?>
    <script>
    window.axeptioSettings = {
      clientId: "60225262fdfdd75f517306f6",
      cookiesVersion: "charlenezybala-base",
    };
     
    (function(d, s) {
      var t = d.getElementsByTagName(s)[0], e = d.createElement(s);
      e.async = true; e.src = "//static.axept.io/sdk.js";
      t.parentNode.insertBefore(e, t);
    })(document, "script");
    </script>
<?php };
add_action ('wp_footer', 'add_coockies_script_axeptio');   


function rgpd_cookies() { ?>

	<script>
		function launchFB(){ 
			!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window, document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '434866444264026');
			fbq('set','agent','tmgoogletagmanager', '434866444264026');
			fbq('track', 'PageView');
			fbq('track', 'Lead');
		}

		void 0 === window._axcb && (window._axcb = []);
		window._axcb.push(function(axeptio) {
			axeptio.on("cookies:complete", function(choices) {
				if(choices.facebook_pixel) {
					launchFB();  
				}
			});
		});
	</script>
<?php
};
add_action( 'wp_head', 'rgpd_cookies' );