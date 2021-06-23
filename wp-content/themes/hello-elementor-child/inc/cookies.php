<?php

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

//Gestion des coockies Google Analytics et Pixel Facebook
function rgpd_cookies() { ?>

	<script>
	function launchGA(){
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-185358618-1', 'auto');
			ga('send', 'pageview');
    	}	

		void 0 === window._axcb && (window._axcb = []);
		window._axcb.push(function(axeptio) {
			axeptio.on("cookies:complete", function(choices) {
				if(choices.google_analytics) {
					launchGA();
				}
			});
		});
	</script>
<?php
};
add_action( 'wp_head', 'rgpd_cookies' );
