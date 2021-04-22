<?php
// define function for custom color setting
function cloudpress_custom_light() {

	$link_color = esc_html(get_theme_mod('link_color'));
	list($r, $g, $b) = sscanf($link_color, "#%02x%02x%02x");
	$r = $r - 50;
	$g = $g - 25;
	$b = $b - 40;

	if ( $link_color != '#ff0000' ) :
	?>
<style type="text/css">
/*--------------------------------------------------------------
    Common
--------------------------------------------------------------*/
.header-sidebar {
    background-color: <?php echo $link_color; ?>;
}
.widget .custom-social-icons li > a
{
    color: <?php echo $link_color; ?> !important;
}
.search-box-outer .dropdown-menu {
    border-top: solid 1px <?php echo $link_color; ?>;
}
.search-form input[type="submit"] {
    background: <?php echo $link_color; ?> none repeat scroll 0 0 !important;
    border: 1px solid <?php echo $link_color; ?> !important;
}
.woocommerce ul.products li.product .onsale, .products span.onsale, .woocommerce span.onsale {
    background: <?php echo $link_color; ?>;
}
.woocommerce ul.products li.product .onsale, .products span.onsale {
    background: <?php echo $link_color; ?>;
    border: 2px solid <?php echo $link_color; ?>;
}
.woocommerce-loop-product__title:hover {
    color: <?php echo $link_color; ?>;
}
.woocommerce ul.products li.product .button, .owl-item .item .cart .add_to_cart_button {
    background: <?php echo $link_color; ?>;
}
.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current {
    background-color: <?php echo $link_color; ?> !important;
}
.woocommerce ul.products li.product .onsale, .woocommerce span.onsale {
    background: <?php echo $link_color; ?> !important;
}
button, input[type="button"], input[type="submit"] {
    background-color: <?php echo $link_color; ?> !important;
}
.checkout-button.button.alt.wc-forward
{
    background-color: <?php echo $link_color; ?> !important;
}
.navbar-custom .nav > li > a:focus,
.navbar-custom .nav > li > a:hover,
.navbar-custom .nav .open > a,
.navbar-custom .nav .open > a:focus,
.navbar-custom .nav .open > a:hover,
.navbar-custom .dropdown-menu > li > a:focus,
.navbar-custom .dropdown-menu > li > a:hover,
.dropdown-menu>.active> li>a:focus,
.dropdown-menu>.active> li>a:hover,
.navbar-custom .nav .dropdown-menu>.active>a{
    color: <?php echo $link_color; ?>;
}
.btn-default:focus{background: <?php echo $link_color; ?>;}
.search-box-outer .dropdown-menu {
    border-top: solid 1px <?php echo $link_color; ?>;
}
.btn-animate.slidbtn {
    background: <?php echo $link_color; ?>;
}
.slider-caption .btn-combo .btn-default:hover {
    background-color: <?php echo $link_color; ?>;
    border: unset;
}
.btn-animate.border:before, .btn-animate.border:after {
    background: <?php echo $link_color; ?>;
}
.owl-carousel .owl-prev:hover, .owl-carousel .owl-prev:focus {
    background-color: <?php echo $link_color; ?>;
}
.owl-carousel .owl-next:hover, .owl-carousel .owl-next:focus {
    background-color: <?php echo $link_color; ?>;
}
.call-to-action, .call-to-action-one {
    background-color: <?php echo $link_color; ?>;
}
.services .post-thumbnail a {
    color: <?php echo $link_color; ?>;
}
.services .post:before {
    border-bottom-color: <?php echo $link_color; ?>;
}
.text-default {
    color: <?php echo $link_color; ?>;
}
.btn-animate.border {
    border: 2px solid <?php echo $link_color; ?> !important;
}
.portfolio-filters li.active a:before, .portfolio-filters li a:before {
    background-color: <?php echo $link_color; ?>;
}
.portfolio .post {
    background-color: <?php echo $link_color; ?>;
}
.bg-default {
    background-color: <?php echo $link_color; ?>;
}
.products .onsale {
    background: <?php echo $link_color; ?>;
    border: 2px solid <?php echo $link_color; ?>;
}
.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
    background: <?php echo $link_color; ?>;
}
.team-grid .social-links li a:hover,
.team-grid .social-links li a:focus {
    color: <?php echo $link_color; ?> !important;
}
.pricing-title-bg.default {
    background-color: <?php echo $link_color; ?>;
}
.pricing-plans .price {
    color: <?php echo $link_color; ?>;
}
.btn-bg-default {
    background: <?php echo $link_color; ?> !important;
}
.entry-meta .cat-links a, .entry-meta .tag-links a {
    color: <?php echo $link_color; ?> !important;
}
.site-info {
    background-color: <?php echo $link_color; ?>;
}
.scroll-up a:hover, .scroll-up a:focus {
    background: <?php echo $link_color; ?>;
}
.cart-header > a .cart-total {
    background: <?php echo $link_color; ?>;
}
.woocommerce p.stars a {
    color: <?php echo $link_color; ?>;
}
.woocommerce .star-rating::before {
    color: <?php echo $link_color; ?>;
}
.woocommerce .star-rating span::before {
    color: <?php echo $link_color; ?>;
}
.woocommerce-message, .woocommerce-info {
    border-top-color: <?php echo $link_color; ?> !important;
}
.woocommerce-message::before, .woocommerce-info::before {
    color: <?php echo $link_color; ?>;
}
body .woocommerce #respond input#submit, body .woocommerce a.button, body .woocommerce button.button, body .woocommerce input.button {
    background-color: <?php echo $link_color; ?> ;
    color: #fff !important;
    line-height: 1.4
}
.page-breadcrumb.text-center span a:hover {
    color: <?php echo $link_color; ?>;
}
.page-breadcrumb.text-center .breadcrumb_last {
    color: <?php echo $link_color; ?> !important;
}
.widget a:hover, .widget a:focus, .widget .post .entry-title a:hover, .widget .post .entry-title a:focus ,  .sidebar .entry-meta .cat-links a:hover, .sidebar .entry-meta .cat-links a:focus, .sidebar .entry-meta .tag-links a:hover, .sidebar .entry-meta .tag-links a:focus{
    color: <?php echo $link_color; ?> !important;
}
.entry-meta a:hover, .entry-meta a:focus, .item-meta a:hover, .item-meta a:focus {
    color: <?php echo $link_color; ?> !important;
}
.btn-default, .btn-animate.light, .btn-animate.dark {
    background: <?php echo $link_color; ?>;
}
.pagination a:hover, .pagination a.active { background-color: <?php echo $link_color; ?> !important; color: #fff !important;  }
.entry-header .entry-title a:hover {
    color: <?php echo $link_color; ?>;
}

/*404 page*/
.error-404 h1 > i {
    color: <?php echo $link_color; ?>;
}

/*comments*/
.reply a {
    background-color: <?php echo $link_color; ?>;
    border: 1px solid <?php echo $link_color; ?>;
}

.navbar-custom .open .nav li.active a, .navbar-custom .open .nav li.active a:hover, .navbar-custom .open .nav li.active a:focus, .navbar-custom .open .nav li a:hover {
    color: <?php echo $link_color; ?>;
}
.navbar .nav .nav-item:hover .nav-link, .navbar .nav .nav-item.active .nav-link {
    color: <?php echo $link_color; ?>;
}
.navbar .search-box-outer .dropdown-menu
{
  border-top: solid 1px <?php echo $link_color; ?>;
}

/*contact template*/
.contact .subtitle {
    color: <?php echo $link_color; ?>;
}

.contact-form {
    border-top: 4px solid <?php echo $link_color; ?>;
}

.contact-icon {
    background-color: <?php echo $link_color; ?>;
}
.testimonial .testmonial-block .name a:hover
{
    color: <?php echo $link_color; ?>;
}
blockquote {
    border-left: 3px solid <?php echo $link_color; ?>;
}
.portfolio-filters .nav-item .active, .portfolio-filters .nav-item.active a
{
    color: <?php echo $link_color; ?>;
}
.dropdown-item.active, .dropdown-item:active
{
    background-color: <?php echo $link_color; ?> !important;
}
.woocommerce .widget_price_filter .ui-slider .ui-slider-range
{
    background-color: <?php echo $link_color; ?> !important;
}
.woocommerce .widget_price_filter .ui-slider .ui-slider-handle
{
    background-color: <?php echo $link_color; ?> !important;
}
.dropdown-item:hover
{
    background-color: <?php echo $link_color; ?>;
     color: #fff;
}
#shop #shop-carousel .product-price a:hover
{
    color: <?php echo $link_color; ?>;
}

.site-footer .footer-sidebar .entry-meta .cat-links a, .site-footer .footer-sidebar .entry-meta .tag-links a {
    color: <?php echo $link_color; ?> !important;
}

.navbar a.bg-light:hover,.dropdown-item:hover
{
    background-color: transparent !important;
    color:<?php echo $link_color; ?> !important;
}


.woocommerce-page .entry-content a:hover, .woocommerce-page .entry-content a:focus {
     color: <?php echo $link_color; ?> ! important;
}

.woocommerce-message {
    border-top-color:<?php echo $link_color; ?> !important;
}
woocommerce-message::before {
    color:<?php echo $link_color; ?> !important;
}
.woocommerce-info::before {
    color:<?php echo $link_color; ?> !important;
}
.pagination a:hover, .pagination a.active, .page-numbers.current {
    background-color: <?php echo $link_color; ?> ! important;
}
.row.section-module.Blogs-detail .blog .post .entry-content a:hover {
    color:<?php echo $link_color; ?> !important;
}
.entry-content a:hover, .entry-content a:focus {
		color:<?php echo $link_color; ?> !important;
}
.header-sidebar {
		background-color: <?php echo esc_html($link_color); ?> !important;
}
.widget .head-contact-info li a:hover,.widget .head-contact-info li a:focus {
  color: #fff !important;
}
.widget .custom-social-icons li a.facebook, .widget .custom-social-icons li a.twitter, .custom-social-icons li a.linkedin, .custom-social-icons li a.skype, .custom-social-icons li a.dribbble, .custom-social-icons li a.youtube, .custom-social-icons li a.vimeo, .custom-social-icons li a.pagelines, .custom-social-icons li a.instagram { color: #333333 !important; }

.widget .custom-social-icons li a.facebook:hover { color: #4c66a4 !important; }
.widget .custom-social-icons li a.twitter:hover { color: #15b4c9 !important; }
.custom-social-icons li a.linkedin:hover { color: #006599 !important; }
.custom-social-icons li a.skype:hover { color: #40beee !important; }
.custom-social-icons li a.dribbble:hover { color: #c7366f !important; }
.custom-social-icons li a.youtube:hover { color: #cc2423 !important; }
.custom-social-icons li a.vimeo:hover { color: #20b9eb !important; }
.custom-social-icons li a.pagelines:hover { color: #364146 !important; }
.custom-social-icons li a.instagram:hover { color: #8a3ab9 !important; }
</style>
<?php endif; } ?>
