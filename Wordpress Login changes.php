<?php 	
// Login Page desing change 

function my_login_logo_one() { 
?> 
<style type="text/css"> 
body.login div#login h1 a {
 background-image: url(http://idevwork.com/key_civil_engineering/php/wp-content/uploads/2019/09/logo-1.png);  
/*padding-bottom: 30px; */
} 

.login h1 a{
	background-size:150px !important;
	width: 100% !important;
	display: block;
	margin: 0 !important;
	height: 100px !important;
}
</style>
 <?php 
} add_action( 'login_enqueue_scripts', 'my_login_logo_one' );

// -------------------------------------

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'LOGO';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

?>