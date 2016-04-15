<!DOCTYPE html>
<!--[if IE 8]>
		<html xmlns="http://www.w3.org/1999/xhtml" class="ie8" lang="en-US">
	<![endif]--><!--[if !(IE 8) ]><!--><html xmlns="http://www.w3.org/1999/xhtml" lang="en-US"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>HYOH ‹ Log In</title><script type="text/javascript" src="http://www.hyohike.net/wp-admin/load-scripts.php?c=0&amp;load%5B%5D=jquery-core,jquery-migrate&amp;ver=4.5"></script><script type="text/javascript" src="http://www.hyohike.net/wp-content/plugins/creativ-shortcodes//includes/shortcodes.js?ver=4.5"></script><link rel="stylesheet" href="http://www.hyohike.net/wp-admin/load-styles.php?c=0&amp;dir=ltr&amp;load%5B%5D=dashicons,buttons,forms,l10n,login&amp;ver=4.5" type="text/css" media="all"><link rel="stylesheet" id="creativ_shortcodes-css" href="http://www.hyohike.net/wp-content/plugins/creativ-shortcodes//includes/shortcodes.css?ver=4.5" type="text/css" media="all"><link rel="stylesheet" id="creativ_shortcodes_fontawesome-css" href="http://www.hyohike.net/wp-content/plugins/creativ-shortcodes//fonts/fontawesome/css/font-awesome.min.css?ver=4.5" type="text/css" media="all"><link rel="stylesheet" id="creativ_shortcodes_fontello-css" href="http://www.hyohike.net/wp-content/plugins/creativ-shortcodes//fonts/fontello/css/fontello.css?ver=4.5" type="text/css" media="all"><link rel="stylesheet" id="genericons-css" href="http://www.hyohike.net/wp-content/plugins/jetpack/_inc/genericons/genericons/genericons.css?ver=3.1" type="text/css" media="all"><link rel="stylesheet" id="open-sans-css" href="https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&amp;subset=latin%2Clatin-ext&amp;ver=4.5" type="text/css" media="all"><meta name="robots" content="noindex,follow"><link rel="icon" href="http://i0.wp.com/www.hyohike.net/wp-content/uploads/2016/04/cropped-Hyohike-Logo.png?fit=32%2C32" sizes="32x32"><link rel="icon" href="http://i0.wp.com/www.hyohike.net/wp-content/uploads/2016/04/cropped-Hyohike-Logo.png?fit=192%2C192" sizes="192x192"><link rel="apple-touch-icon-precomposed" href="http://i0.wp.com/www.hyohike.net/wp-content/uploads/2016/04/cropped-Hyohike-Logo.png?fit=180%2C180"><meta name="msapplication-TileImage" content="http://i0.wp.com/www.hyohike.net/wp-content/uploads/2016/04/cropped-Hyohike-Logo.png?fit=270%2C270"></head><body class="login login-action-login wp-core-ui  locale-en-us">
	<div id="login">
		<h1><a href="https://wordpress.org/" title="Powered by WordPress" tabindex="-1">HYOH</a></h1>
	
<form name="loginform" id="loginform" action="http://www.hyohike.net/wp-login.php" method="post">
	<p>
		<label for="user_login">Username or Email<br><input type="text" name="log" id="user_login" class="input" value="" size="20"></label>
	</p>
	<p>
		<label for="user_pass">Password<br><input type="password" name="pwd" id="user_pass" class="input" value="" size="20"></label>
	</p>
		<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember Me</label></p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In"><input type="hidden" name="redirect_to" value="http://www.hyohike.net/wp-admin/"><input type="hidden" name="testcookie" value="1"></p>
</form>

<p id="nav">
	<a href="http://www.hyohike.net/wp-login.php?action=lostpassword">Lost your password?</a>
</p>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script><p id="backtoblog"><a href="http://www.hyohike.net/">← Back to HYOH</a></p>
	
	</div>

	
	<div class="jetpack-sso-wrap"><a href="http://www.hyohike.net/wp-login.php?action=jetpack-sso" class="jetpack-sso button">Log in with WordPress.com</a><style>
		.jetpack-sso.button {
			position: relative;
			padding-left: 37px;
		}
		.jetpack-sso.button:before {
			display: block;
			box-sizing: border-box;
			padding: 7px 0 0;
			text-align: center;
			position: absolute;
			top: -1px;
			left: -1px;
			border-radius: 2px 0 0 2px;
			content: '\f205';
			background: #0074a2;
			color: #fff;
			-webkit-font-smoothing: antialiased;
			width: 30px;
			height: 107%;
			height: calc( 100% + 2px );
			font: normal 22px/1 Genericons !important;
			text-shadow: none;
		}
		@media screen and (min-width: 783px) {
			.jetpack-sso.button:before {
				padding-top: 3px;
			}
		}
		.jetpack-sso.button:hover {
			border: 1px solid #aaa;
		}</style></div>		<style>
			#loginform {
				overflow: hidden;
				padding-bottom: 26px;
			}
			.jetpack-sso-wrap {
									float: right;
								margin: 1em 0 0;
				clear: right;
				display: block;
			}

					</style><script>
			jQuery(document).ready(function($){
							$( '#loginform' ).append( $( '.jetpack-sso-wrap' ) );

				var $rememberme = $( '#rememberme' ),
					$ssoButton  = $( 'a.jetpack-sso.button' );

				$rememberme.on( 'change', function() {
					var url       = $ssoButton.prop( 'href' ),
						isChecked = $rememberme.prop( 'checked' ) ? 1 : 0;

					if ( url.match( /&rememberme=\d/ ) ) {
						url = url.replace( /&rememberme=\d/, '&rememberme=' + isChecked );
					} else {
						url += '&rememberme=' + isChecked;
					}

					$ssoButton.prop( 'href', url );
				} ).change();

			});
		</script><link rel="stylesheet" id="jetpack_css-css" href="http://www.hyohike.net/wp-content/plugins/jetpack/css/jetpack.css?ver=3.9.6" type="text/css" media="all"><div class="clear"></div>
	</body></html>
