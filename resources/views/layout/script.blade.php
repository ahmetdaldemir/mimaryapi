<div class="fit-vids-style">
    <style>
        .fluid-width-video-wrapper {
            width: 100%;
            position: relative;
            padding: 0;
        }

        .fluid-width-video-wrapper iframe, .fluid-width-video-wrapper object, .fluid-width-video-wrapper embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</div>

<link rel="dns-prefetch" href="https://maps.googleapis.com/">
<link rel="dns-prefetch" href="https://fonts.googleapis.com/">
<link rel="dns-prefetch" href="https://s.w.org/">
<link rel="alternate" type="application/rss+xml" title="www.mimar-yapi.com » beslemesi" href="http://mimar-yapi.com/index.php/feed/">
<link rel="alternate" type="application/rss+xml" title="www.mimar-yapi.com » yorum beslemesi" href="http://mimar-yapi.com/index.php/comments/feed/">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<link rel="stylesheet" href="{{asset('view/lightbox/css/lightbox.min.css')}}">
<script src="{{asset('view/lightbox/js/lightbox-plus-jquery.min.js')}}"></script>


<script src="{{asset('view/slider/responsiveslides.js')}}"crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('view/slider/responsiveslides.css')}}" type="text/css" media="all">

<script>
    $(function () {

        $("#slider3").responsiveSlides({
            auto: true,
            pager: false,
            nav: false,
            speed: 500,
            namespace: "callbacks",
        });

        $("#slider2").responsiveSlides({
            auto: true,
            pager: false,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<div class=\"owl-next\">next</div>");
            },
            after: function () {
                $('.events').append("<div class=\"owl-next\">next</div>");
            }
        });
    });

</script>
<style>
   .prev{
        float: left;
        position: absolute;
        left: 0;
        top: 45%;
        z-index: 9999;
    }
    .next{
        float: right;
        position: absolute;
        right: 0;
        top: 45%;
        z-index: 9999;
    }
   .prev:after {
       content: "\23";
   }
   .next:after {
       content: "\23";
   }
   .next:after {
       position: absolute;
       left: -40px;
       top: 0;
       content: '\24';
       font-family: "ElegantIcons";
       font-size: 28px;
       color: #ddd;
       width: 60px;
       height: 60px;
       line-height: 56px;
       border-radius: 50%;
       border: 2px solid #ddd;
       text-indent: 0;
       transition: all ease 0.3s;
       text-align: center;
   }

 .prev:after{
       position: absolute;
       left: -15px;
       top: 0;
       content: '\23';
       font-family: "ElegantIcons";
       font-size: 28px;
       color: #ddd;
       width: 60px;
       height: 60px;
       line-height: 56px;
       border-radius: 50%;
       border: 2px solid #ddd;
       text-indent: 0;
       transition: all ease 0.3s;
       text-align: center;
   }
    </style>
<link rel="stylesheet" id="extraicon3-css" href="{{asset('view/bauericons.css')}}" type="text/css" media="all">
<link rel="stylesheet" id="js_composer_front-css" href="{{asset('view/js_composer.min.css')}}" type="text/css"  media="all">
<link rel="stylesheet" id="wp-block-library-css" href="{{asset('view/style.min.css')}}" type="text/css" media="all">
<style id="global-styles-inline-css" type="text/css">
    body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
        --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
        --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
        --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
        --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
        --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
        --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
        --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }
</style>
<link rel="stylesheet" id="contact-form-7-css" href="{{asset('view/styles.css')}}" type="text/css" media="all">
<link rel="stylesheet" id="rs-plugin-settings-css" href="{{asset('view/rs6.css')}}" type="text/css" media="all">
<style id="rs-plugin-settings-inline-css')}}" type="text/css">
    #rs-demo-id {
    }

    .tp-bullets.custom .tp-bullet.selected {
        background-color: #777 !important;
    }

    .tp-bullets.custom .tp-bullet {
        border: 2px solid #777 !important;
    }</style>
<link rel="stylesheet" id="bauer-theme-style-css" href="{{asset('view/style.css')}}" type="text/css" media="all">
<style id="bauer-theme-style-inline-css" type="text/css">
    /*ACCENT COLOR*/
    .text-accent-color, #top-bar .top-bar-content .content:before, .top-bar-style-1 #top-bar .top-bar-socials .icons a:hover, .top-bar-style-2 #top-bar .top-bar-socials .icons a:hover, .sticky-post, #site-logo .site-logo-text:hover, #main-nav .sub-menu li a:hover, .header-style-1 #site-header .nav-top-cart-wrapper .nav-cart-trigger:hover, .header-style-1 #site-header .header-search-trigger:hover, .header-style-2 #site-header .nav-top-cart-wrapper .nav-cart-trigger:hover, .header-style-2 #site-header .header-search-trigger:hover, .header-style-3 #site-header .nav-top-cart-wrapper .nav-cart-trigger:hover, .header-style-3 #site-header .header-search-trigger:hover, .header-style-3 #site-header .header-button a, .header-style-4 #site-header .nav-top-cart-wrapper .nav-cart-trigger:hover, .header-style-4 #site-header .header-search-trigger:hover, .header-style-5 #site-header .nav-cart-trigger:hover, .header-style-5 #site-header .header-search-trigger:hover, .header-style-6 #site-header .nav-cart-trigger:hover, .header-style-6 #site-header .header-search-trigger:hover, #header-aside .aside-content .info-i span, #featured-title #breadcrumbs a:hover, .hentry .page-links span, .hentry .page-links a span, .hentry .post-title a:hover, .hentry .post-meta a:hover, .hentry .post-meta .item .inner:before, .hentry .post-link a:hover, .hentry .post-tags:before, .hentry .post-tags a:hover, .related-news .post-item h3 a:hover, .related-news .related-post .slick-next:hover:before, .related-news .related-post .slick-prev:hover:before, .comment-reply a, #cancel-comment-reply-link, .widget.widget_archive ul li a:hover, .widget.widget_categories ul li a:hover, .widget.widget_meta ul li a:hover, .widget.widget_nav_menu ul li a:hover, .widget.widget_pages ul li a:hover, .widget.widget_recent_entries ul li a:hover, .widget.widget_recent_comments ul li a:hover, .widget.widget_rss ul li a:hover, #footer-widgets .widget.widget_archive ul li a:hover, #footer-widgets .widget.widget_categories ul li a:hover, #footer-widgets .widget.widget_meta ul li a:hover, #footer-widgets .widget.widget_nav_menu ul li a:hover, #footer-widgets .widget.widget_pages ul li a:hover, #footer-widgets .widget.widget_recent_entries ul li a:hover, #footer-widgets .widget.widget_recent_comments ul li a:hover, #footer-widgets .widget.widget_rss ul li a:hover, #sidebar .widget.widget_calendar caption, #footer-widgets .widget.widget_calendar caption, .widget.widget_nav_menu .menu > li.current-menu-item > a, .widget.widget_nav_menu .menu > li.current-menu-item, #sidebar .widget.widget_calendar tbody #today, #sidebar .widget.widget_calendar tbody #today a, #sidebar .widget.widget_twitter .timestamp a:hover, #footer-widgets .widget.widget_twitter .timestamp a:hover, #footer-widgets .widget.widget_mc4wp_form_widget .mc4wp-form .submit-wrap > button, #sidebar .widget.widget_socials .socials a:hover, #footer-widgets .widget.widget_socials .socials a:hover, #sidebar .widget.widget_recent_posts h3 a:hover, #footer-widgets .widget.widget_recent_posts h3 a:hover, #sidebar .widget_information ul li.accent-icon i, #footer-widgets .widget_information ul li.accent-icon i, .bauer-accordions .accordion-item .accordion-heading:hover, .bauer-accordions .accordion-item.style-1.active .accordion-heading, .bauer-accordions .accordion-item.style-1.active .accordion-heading > .inner:before, .bauer-step-box .number-box .number, .bauer-links.accent, .bauer-links:hover, .bauer-button.outline.outline-accent, .bauer-button.outline.outline-accent .icon, .bauer-counter .icon.accent, .bauer-counter .prefix.accent, .bauer-counter .suffix.accent, .bauer-counter .number.accent, .bauer-divider.has-icon .icon-wrap > span.accent, .bauer-single-heading .heading.accent, .bauer-headings .heading.accent, .bauer-image-box.style-1 .item .title a:hover, .bauer-image-box.style-3 .item .title a:hover, .bauer-icon.accent > .icon, .bauer-progress .perc.accent, #project-filter .cbp-filter-item:hover, #project-filter .cbp-filter-item.cbp-filter-item-active, .project-related-wrap .btn-wrap a, .project-related-wrap .project-item .cat a, .project-related-wrap .project-item h2 a:hover, .wpb_row.row-has-scroll .scroll-btn:hover:before, .bauer-team .socials li a:hover, .bauer-team-grid .socials li a:hover, .bauer-testimonials .name-pos .position, .bauer-list .icon.accent, .bauer-pricing .title.accent h3, .owl-theme .owl-nav [class*="owl-"]:hover:after, .et-tabs-style-line nav ul li.tab-current .iw-icon, .woocommerce-page .woocommerce-MyAccount-content .woocommerce-info .button, .products li .product-info .button, .products li .product-info .added_to_cart, .products li h2:hover, .woo-single-post-class .woocommerce-grouped-product-list-item__label a:hover, .woocommerce-page .shop_table.cart .product-name a:hover, .woocommerce-page .shop_table.cart .product-remove a:after, .product_list_widget .product-title:hover, .widget_recent_reviews .product_list_widget a:hover, .widget.widget_product_search .woocommerce-product-search .search-submit:hover:before, .widget_shopping_cart_content ul li a:hover, .widget_shopping_cart_content ul li a.remove, .widget_shopping_cart_content .buttons a.checkout, a {
        color: #e73210;
    }

    bg-accent, blockquote:before, button, input[type="button"], input[type="reset"], input[type="submit"], .tparrows.custom:hover, .header-style-1 #site-header .header-button a, .header-style-2 #site-header .header-button a, .header-style-3 #site-header .header-button a:hover, .header-style-5 #site-header .header-button a, .header-style-6 #site-header .header-button a, .cur-menu-1 #main-nav > ul > li > a:before, .cur-menu-1 #main-nav > ul > li.current-menu-item > a:before, .cur-menu-1 #main-nav > ul > li.current-menu-parent > a:before, .cur-menu-2 #main-nav > ul > li > a span:before, .cur-menu-2 #main-nav > ul > li.current-menu-item > a span:before, .cur-menu-2 #main-nav > ul > li.current-menu-parent > a span:before, #featured-title.center .main-title:before, .post-media .slick-prev:hover, .post-media .slick-next:hover, .post-media .slick-dots li.slick-active button, .comment-reply a:after, #cancel-comment-reply-link:after, .widget.widget_categories ul li > span, .widget.widget_archive ul li > span, .widget.widget_search .search-form .search-submit:before, #sidebar .mc4wp-form .submit-wrap button:before, #footer-widgets .widget.widget_mc4wp_form_widget .mc4wp-form .submit-wrap > button:hover, #sidebar .widget.widget_recent_posts .recent-news .thumb.icon, #footer-widgets .widget.widget_recent_posts .recent-news .thumb.icon, #sidebar .widget.widget_tag_cloud .tagcloud a:hover, #footer-widgets .widget.widget_tag_cloud .tagcloud a:hover, .widget_product_tag_cloud .tagcloud a:hover, #scroll-top:hover:before, .bauer-pagination ul li a.page-numbers:hover, .woocommerce-pagination .page-numbers li .page-numbers:hover, .bauer-pagination ul li .page-numbers.current, .woocommerce-pagination .page-numbers li .page-numbers.current, .no-results-content .search-form .search-submit:before, .footer-promotion .promo-btn, .bauer-accordions .accordion-item.style-2.active .accordion-heading, .bauer-step-box .number-box:hover .number, .bauer-button.accent, .bauer-button.outline.outline-accent:hover, .bauer-content-box > .inner.accent, .bauer-content-box > .inner.dark-accent, .bauer-content-box > .inner.light-accent, .bauer-tabs.style-2 .tab-title .item-title.active, .bauer-tabs.style-3 .tab-title .item-title.active, .bauer-single-heading .line.accent, .bauer-headings .sep.accent, .bauer-headings .heading > span, .bauer-image-box.style-3.has-number:hover .number, .bauer-images-grid .cbp-nav-next:hover:after, .bauer-images-grid .cbp-nav-prev:hover:after, .bauer-icon.accent-bg > .icon, #project-filter .cbp-filter-item > span:after, .project-box .project-image .icons a:hover, .project-related-wrap .btn-wrap a:hover, .bauer-progress .progress-animate:after, .bauer-progress .progress-animate.accent, .bauer-images-carousel.has-borders:after, .bauer-images-carousel.has-borders:before, .bauer-images-carousel.has-arrows.arrow-bottom .owl-nav, .bauer-subscribe .mc4wp-form .email-wrap input:focus, .bauer-video-icon.accent a, .et-tabs-style-line nav ul li.tab-current:after, .woocommerce-page .wc-proceed-to-checkout .button, .woocommerce-page #payment #place_order, .widget_price_filter .price_slider_amount .button:hover {
        background-color: #e73210;
    }

    .animsition-loading:after {
        border-top-color: #e73210;
    }

    .underline-solid:after, .underline-dotted:after, .underline-dashed:after {
        border-bottom-color: #e73210;
    }

    .header-style-3 #site-header .header-button a {
        border-color: #e73210;
    }

    .widget.widget_search .search-form .search-field:focus {
        border-color: #e73210;
    }

    #sidebar .mc4wp-form .email-wrap input:focus {
        border-color: #e73210;
    }

    #footer-widgets .widget.widget_mc4wp_form_widget .mc4wp-form .submit-wrap > button {
        border-color: #e73210;
    }

    .no-results-content .search-form .search-field:focus {
        border-color: #e73210;
    }

    .bauer-step-box .number-box .number {
        border-color: #e73210;
    }

    .bauer-button.outline.outline-accent {
        border-color: #e73210;
    }

    .bauer-button.outline.outline-accent:hover {
        border-color: #e73210;
    }

    .divider-icon-before.accent {
        border-color: #e73210;
    }

    .divider-icon-after.accent {
        border-color: #e73210;
    }

    .bauer-divider.has-icon .divider-double.accent {
        border-color: #e73210;
    }

    .bauer-tabs.style-2 .tab-title .item-title.active > span {
        border-top-color: #e73210;
    }

    .bauer-icon-box.hover-style-1:hover > .hover {
        border-bottom-color: #e73210;
    }

    .bauer-icon-box.hover-style-2:hover > .hover {
        border-bottom-color: #e73210;
    }

    .bauer-image-box.style-2 .item .thumb:after {
        border-bottom-color: #e73210;
    }

    .bauer-team.style-1 .member-item .text-wrap {
        border-bottom-color: #e73210;
    }

    .bauer-team.style-2 .member-item .text-wrap {
        border-bottom-color: #e73210;
    }

    .bauer-testimonials.style-1:hover .inner {
        border-bottom-color: #e73210;
    }

    .bauer-testimonials-g3 .avatar-wrap img:hover {
        border-color: #e73210;
    }

    .bauer-testimonials-g3 .avatar-wrap a.active img {
        border-color: #e73210;
    }

    .bauer-video-icon.white a:after {
        border-left-color: #e73210;
    }

    .owl-theme .owl-dots .owl-dot span {
        border-color: #e73210;
    }

    .owl-theme .owl-dots .owl-dot.active span {
        border-color: #e73210;
    }

    .widget_price_filter .price_slider_amount .button:hover {
        border-color: #e73210;
    }

    .widget_price_filter .ui-slider .ui-slider-handle {
        border-color: #e73210;
    }

    .widget_shopping_cart_content .buttons a.checkout {
        border-color: #e73210;
    }

    .bauer-progress .progress-animate.accent.gradient {
        background: rgba(231, 50, 16, 1);
        background: -moz-linear-gradient(left, rgba(231, 50, 16, 1) 0%, rgba(231, 50, 16, 0.3) 100%);
        background: -webkit-linear-gradient(left, rgba(231, 50, 16, 1) 0%, rgba(231, 50, 16, 0.3) 100%);
        background: linear-gradient(to right, rgba(231, 50, 16, 1) 0%, rgba(231, 50, 16, 0.3) 100%) !important;
    }

    .bauer-step-box:before {
        background: linear-gradient(45deg, #fff 0%, #e73210 10%, #e73210 90%, #fff 100%);
        background: -webkit-linear-gradient(45deg, #fff 0%, #e73210 10%, #e73210 90%, #fff 100%) !important;
    }

    /*TYPOGRAPHY*/
    body {
        font-family: "Poppins";
    }

    /*CUSTOMIZER STYLING*/
    .top-bar-style-1 #top-bar:after {
        opacity: 1;
    }

    .top-bar-style-2 #top-bar:after {
        background-color: #1e1e1e;
        opacity: 1;
    }

    .top-bar-style-2 #top-bar {
        color: #a5a5a5;
    }

    .top-bar-style-2 #top-bar .top-bar-socials .icons a {
        color: #a5a5a5;
    }

    .header-style-1 #site-header:after {
        opacity: 1;
    }

    .header-style-2 #site-header {
        background-color: #0a0a0a;
    }

    .header-style-2 #site-header:after {
        opacity: 1;
    }

    .header-style-3 #site-header:after {
        opacity: 1;
    }

    .header-style-4 #site-header:after {
        background-color: #e73210;
        opacity: 0.0001;
    }

    .header-style-5 #site-header:after {
        opacity: 0.0001;
    }

    .header-style-6 #site-header:after {
        opacity: 0.0001;
    }

    .header-style-4 #main-nav > ul > li > a:hover {
        color: #dd3333;
    }

    #featured-title .main-title {
        color: #ffffff;
    }

    #featured-title #breadcrumbs {
        color: #ffffff;
    }

    #featured-title #breadcrumbs a {
        color: #ffffff;
    }

    #footer {
        background-color: #0a0a0a;
    }
</style>
<link rel="stylesheet" id="bauer-visual-composer-css" href="{{asset('view/visual-composer.css')}}" type="text/css" media="all">
<link rel="stylesheet" id="animate-css" href="{{asset('view/animate.css')}}" type="text/css" media="all">
<link rel="stylesheet" id="animsition-css" href="{{asset('view/animsition.css')}}" type="text/css" media="all">
<link rel="stylesheet" id="slick-css" href="{{asset('view/slick.css')}}" type="text/css" media="all">
<script src="https://kit.fontawesome.com/8870d8d56f.js" crossorigin="anonymous"></script>
<link rel="stylesheet" id="eleganticons-css" href="{{asset('view/eleganticons.css')}}" type="text/css" media="all">
<link rel="stylesheet" id="basicui-css" href="{{asset('view/basicui.css')}}" type="text/css" media="all">
<link rel="stylesheet" id="bauer-owlcarousel-css" href="{{asset('view/owl.carousel.css')}}" type="text/css"  media="all">
<link rel="stylesheet" id="bauer-cubeportfolio-css" href="{{asset('view/cubeportfolio.min.css')}}" type="text/css" media="all">
<link rel="stylesheet" id="bauer-magnificpopup-css" href="{{asset('view/magnific.popup.css')}}" type="text/css"  media="all">
<link rel="stylesheet" id="bauer-vegas-css" href="{{asset('view/vegas.css')}}" type="text/css" media="all">
<link rel="stylesheet" id="bauer-ytplayer-css" href="{{asset('view/ytplayer.css')}}" type="text/css" media="all">
<script type="text/javascript" src="{{asset('view/jquery.min.js')}}" id="jquery-core-js"></script>
<script type="text/javascript" src="{{asset('view/jquery-migrate.min.js')}}" id="jquery-migrate-js"></script>
<script type="text/javascript" src="{{asset('view/rbtools.min.js')}}" id="tp-tools-js"></script>
<script type="text/javascript" src="{{asset('view/rs6.min.js')}}" id="revmin-js"></script>
<link rel="shortlink" href="http://mimar-yapi.com/">
<link rel="shortcut icon" href="http://mimar-yapi.com/wp-content/uploads/2022/02/favicon.png" type="image/x-icon">
<meta name="generator" content="#">
<meta name="generator" content="#">
<script type="text/javascript">function setREVStartSize(e) {
        try {
            var pw = document.getElementById(e.c).parentNode.offsetWidth,
                newh;
            pw = pw === 0 || isNaN(pw) ? window.innerWidth : pw;
            e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
            e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
            e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
            e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
            e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
            e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
            e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
            if (e.layout === "fullscreen" || e.l === "fullscreen")
                newh = Math.max(e.mh, window.innerHeight);
            else {
                e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                var nl = new Array(e.rl.length),
                    ix = 0,
                    sl;
                e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                for (var i in e.rl) nl[i] = e.rl[i] < window.innerWidth ? 0 : e.rl[i];
                sl = nl[0];
                for (var i in nl) if (sl > nl[i] && nl[i] > 0) {
                    sl = nl[i];
                    ix = i;
                }
                var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);

                newh = (e.type === "carousel" && e.justify === "true" ? e.gh[ix] : (e.gh[ix] * m)) + (e.tabh + e.thumbh);
            }

            if (window.rs_init_css === undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));
            document.getElementById(e.c).height = newh;
            window.rs_init_css.innerHTML += "#" + e.c + "_wrapper { height: " + newh + "px }";
        } catch (e) {
            console.log("Failure at Presize of Slider:" + e)
        }
    };
</script>
<style type="text/css" data-type="vc_shortcodes-custom-css">
    .vc_custom_1557570316548 {
        background-color: #f7f9fa !important;
    }

    .vc_custom_1558766443290 {
        background-image: url(http://ninzio.com/bauer/wp-content/uploads/2019/05/archi-bg-2.png?id=8885) !important;
        background-position: center !important;
        background-repeat: no-repeat !important;
        background-size: cover !important;
    }

    .vc_custom_1646040936585 {
        background-image: url(http://mimar-yapi.com/storage/custom/Arkaplan.jpg?id=9434) !important;
        background-position: center !important;
        background-repeat: no-repeat !important;
        background-size: cover !important;
    }
</style>
<noscript>
    <style> .wpb_animate_when_almost_visible {
            opacity: 1;
        }</style>
</noscript>
<style>
    #rev_slider_2_1_wrapper {
        height: 750px
    }
</style>
<style type="text/css" id="bauer-dynamic-css">
    .bauer-icon.icon-1681503632.accent.custom .icon {
        background-color: !important;
    }

    .bauer-icon.icon-581126532.accent.custom .icon {
        background-color: !important;
    }

    .bauer-content-box .inner.ctb-1084319150 {
        background-color: !important;
    }
</style>
