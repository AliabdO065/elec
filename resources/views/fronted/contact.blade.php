@extends('fronted.layouts.layout')
@section('content')
    <link rel='stylesheet' id='elementor-icons-css'
        href='{{ asset('fronted/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min192d.css?ver=5.23.0') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='{{ asset('fronted/wp-content/plugins/elementor/assets/css/frontend-lite.min8864.css?ver=3.17.3') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='{{ asset('fronted/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-8-css'
        href='{{ asset('fronted/wp-content/uploads/sites/2/elementor/css/post-86991.css?ver=1699620461') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-998-css'
        href='{{ asset('fronted/wp-content/uploads/sites/2/elementor/css/post-998b2fd.css?ver=1699621332') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.2.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='{{ asset('fronted/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css'
        href='{{ asset('fronted/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3') }}'
        type='text/css' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script type='text/javascript' src='{{ asset('fronted/wp-includes/js/jquery/jquery.min5aed.js?ver=3.6.4') }}'
        id='jquery-core-js'></script>
    <script type='text/javascript' src='{{ asset('fronted/wp-includes/js/jquery/jquery-migrate.min6b00.js?ver=3.4.0') }}'
        id='jquery-migrate-js'></script>
    <link rel="https://api.w.org/" href="{{ asset('fronted/wp-json/index.html') }}" />
    <link rel="alternate" type="application/json" href="{{ asset('fronted/wp-json/wp/v2/pages/998.json') }}" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{{ asset('fronted/wp-includes/wlwmanifest.xml') }}" />
    <meta name="generator" content="WordPress 6.2.3" />
    <link rel="canonical" href="{{ route('fronted.index') }}" />
    <link rel='shortlink' href='../indexefbf.html?p=998' />
    <link rel="alternate" type="application/json+oembed"
        href="{{ asset('fronted/wp-json/oembed/1.0/embed7af3.json?url=https%3A%2F%2Fthemes.pixelwars.org%2Fenergify%2Fdemo-01%2Fcontact%2F') }}" />
    <link rel="alternate" type="text/xml+oembed"
        href="{{ asset('fronted/wp-json/oembed/1.0/embed0252?url=https%3A%2F%2Fthemes.pixelwars.org%2Fenergify%2Fdemo-01%2Fcontact%2F&amp;format=xml') }}" />
    <meta name="generator"
        content="Elementor 3.17.3; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <style id="wpforms-css-vars-root">
        :root {
            --wpforms-field-border-radius: 3px;
            --wpforms-field-background-color: #ffffff;
            --wpforms-field-border-color: rgba(0, 0, 0, 0.25);
            --wpforms-field-text-color: rgba(0, 0, 0, 0.7);
            --wpforms-label-color: rgba(0, 0, 0, 0.85);
            --wpforms-label-sublabel-color: rgba(0, 0, 0, 0.55);
            --wpforms-label-error-color: #d63637;
            --wpforms-button-border-radius: 3px;
            --wpforms-button-background-color: #066aab;
            --wpforms-button-text-color: #ffffff;
            --wpforms-field-size-input-height: 43px;
            --wpforms-field-size-input-spacing: 15px;
            --wpforms-field-size-font-size: 16px;
            --wpforms-field-size-line-height: 19px;
            --wpforms-field-size-padding-h: 14px;
            --wpforms-field-size-checkbox-size: 16px;
            --wpforms-field-size-sublabel-spacing: 5px;
            --wpforms-field-size-icon-size: 1;
            --wpforms-label-size-font-size: 16px;
            --wpforms-label-size-line-height: 19px;
            --wpforms-label-size-sublabel-font-size: 14px;
            --wpforms-label-size-sublabel-line-height: 17px;
            --wpforms-button-size-font-size: 17px;
            --wpforms-button-size-height: 41px;
            --wpforms-button-size-padding-h: 15px;
            --wpforms-button-size-margin-top: 10px;

        }
    </style>
    </head>

    <body
        class="page-template page-template-elementor_header_footer page page-id-998 qodef-qi--no-touch qi-addons-for-elementor-1.6.5 elementor-default elementor-template-full-width elementor-kit-8 elementor-page elementor-page-998">

        <div id="page" class="hfeed site">
            <header id="masthead" class="site-header" role="banner">
                <div class="header-wrap" data-parallax-video="">
                    <div class="header-wrap-inner">
                        <div class="site-branding">
                            @include('fronted.layouts.components.logo')
                        </div>

                        <nav id="site-navigation" class="main-navigation site-navigation" role="navigation">
                            <div class="menu-wrap">
                                <div class="layout-medium">
                                    @include('fronted.layouts.components.nav')
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
            <div data-elementor-type="wp-page" data-elementor-id="998" class="elementor elementor-998">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-562f097e elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
                    data-id="562f097e" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default" style="min-height: 560px;">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-65ac41bf"
                            data-id="65ac41bf" data-element_type="column">
                            <div class="elementor-widget-wrap">
                            </div>
                        </div>
                    </div>
                </section>









<section
    class="elementor-section elementor-top-section elementor-element elementor-element-354be38f elementor-section-full_width elementor-section-height-default elementor-section-height-default"
    data-id="354be38f" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-35a4704f"
            data-id="35a4704f" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-2a6fe01 elementor-widget elementor-widget-qi_addons_for_elementor_image_slider"
                    data-id="2a6fe01" data-element_type="widget"
                    data-widget_type="qi_addons_for_elementor_image_slider.default">
                    <div class="elementor-widget-container">
                        <div class="qodef-shortcode qodef-m  qodef-qi-image-slider qodef-qi-fslightbox-popup qodef-popup-gallery qodef-image--hover-zoom-out  qodef--centered-zoom qodef-col-num--4 qodef-qi-grid qodef-qi-swiper-container  qodef-navigation--inside qodef-navigation--hover-move"
                            data-options="{&quot;direction&quot;:&quot;horizontal&quot;,&quot;slidesPerView&quot;:&quot;4&quot;,&quot;spaceBetween&quot;:30,&quot;spaceBetweenTablet&quot;:30,&quot;spaceBetweenMobile&quot;:30,&quot;effect&quot;:&quot;&quot;,&quot;loop&quot;:true,&quot;autoplay&quot;:true,&quot;centeredSlides&quot;:true,&quot;speed&quot;:&quot;3000&quot;,&quot;speedAnimation&quot;:&quot;&quot;,&quot;outsideNavigation&quot;:&quot;no&quot;,&quot;outsidePagination&quot;:&quot;no&quot;,&quot;unique&quot;:560,&quot;partialValue&quot;:0,&quot;disablePartialValue&quot;:&quot;&quot;}">

                            <div class="swiper-wrapper">
                                @if (!empty($feedbacks[0]))
                                    @foreach ($feedbacks as $i => $slides)
                                        <?php
                                        $string = $slides;
                                        $pairs = explode('#x#', $string);
                                        $slide = [];
                                        foreach ($pairs as $pair) {
                                            [$key, $value] = explode('=#=', $pair);
                                            $slide[$key] = $value;
                                        }
                                        ?>
                                        <div class="qodef-e swiper-slide">
                                            <div
                                                class="qodef-e qodef-process-item qodef-grid-item elementor-repeater-item-e90ae08 feedback-card">
                                                <div class="qodef-e-inner">
                                                    <div class="qodef-e-content">
                                                        <div class="qodef-e-icon-holder">
                                                            <div class="qodef-e-icon">
                                                                <span class="qodef-e-item-icon-text">
                                                                    <div class="qodef-m-image">
                                                                        <div class="qodef-m-media-image">
                                                                             
                                                                        </div>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                            <div class="qodef-e-line">
                                                                <div class="qodef-e-line-inner"></div>
                                                            </div>
                                                        </div>

                                                        <h3 class="qodef-e-title">
                                                            {{ $slide['name'] }}
                                                        </h3>

                                                         @if(isset($slide['rate']))
                                                            <div class="rating">
                                                                @for ($star = 1; $star <= 5; $star++)
                                                                    @if ($star <= $slide['rate'])
                                                                        <span class="star filled">&#9733;</span>
                                                                    @else
                                                                        <span class="star">&#9734;</span>
                                                                    @endif
                                                                @endfor
                                                            </div>
                                                        @endif

                                                        <p class="qodef-e-text">
                                                            {{ $slide['message'] }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>

                            <div class="swiper-button-prev"><</div>
                            <div class="swiper-button-next">></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* ===== Feedback Card ===== */
.feedback-card {
    background: #fff;
    border-radius: 15px;
    padding: 20px;
    margin: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    text-align: center;
    transition: transform 0.3s, box-shadow 0.3s;
    min-height: 250px;   /* 👈 ارتفاع ثابت للكارت */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.feedback-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 6px 18px rgba(0,0,0,0.12);
}

/* ===== Name ===== */
.feedback-card .qodef-e-title {
    font-size: 18px;
    font-weight: 600;
    margin: 10px 0 5px;
    color: #333;
}

/* ===== Rating Stars ===== */
.rating {
    margin: 6px 0;
    font-size: 18px;
}
.star {
    color: #ccc;
    margin: 0 2px;
    transition: transform 0.2s;
}
.star.filled {
    color: #f5c518;
}
.star:hover {
    transform: scale(1.2);
}

/* ===== Message ===== */
.feedback-card .qodef-e-text {
    font-size: 14px;
    color: #555;
    line-height: 1.5;
    margin-top: 8px;
    flex-grow: 1; /* يوسع الرسالة عشان يوزن المحتوى */
}

/* ===== Swiper Arrows ===== */
.swiper-button-prev,
.swiper-button-next {
    width: 40px;
    height: 40px;
    background: rgb(255, 255, 255); /* زر أزرق */
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0.9;
    transition: all 0.3s;
}
.swiper-button-prev:hover,
.swiper-button-next:hover {
    background: rgb(255, 255, 255); /* لون أغمق عند الهوفر */
    opacity: 1;
}
.swiper-button-prev svg,
.swiper-button-next svg {
    stroke: #fff; /* الأسهم تبقى بيضا */
    width: 20px;
    height: 20px;
}

</style>





                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-6d7349a5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="6d7349a5" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-47e23b83"
                            data-id="47e23b83" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-38209cb0 elementor-widget elementor-widget-qi_addons_for_elementor_animated_text"
                                    data-id="38209cb0" data-element_type="widget"
                                    data-widget_type="qi_addons_for_elementor_animated_text.default">
                                    <div class="elementor-widget-container">
                                        <div
                                            class="qodef-shortcode qodef-m  qodef-qi-animated-text qodef--animated-by-letter qodef--alignment-left qodef-qi--has-appear qodef--appear-from-right">
                                            <h1 class="qodef-m-title">
                                                <?php
                                                $wordsHeader = explode(' ', $main['header']);
                                                ?>
                                                @foreach ($wordsHeader as $item)
                                                    <span class="qodef-e-word-holder">{{ $item }}</span>
                                                @endforeach
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-375445b1 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                    data-id="375445b1" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                    data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <style>
                                            .elementor-heading-title {
                                                padding: 0;
                                                margin: 0;
                                                line-height: 1
                                            }

                                            .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                                color: inherit;
                                                font-size: inherit;
                                                line-height: inherit
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                font-size: 15px
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                font-size: 19px
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                font-size: 29px
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                font-size: 39px
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                font-size: 59px
                                            }
                                        </style>
                                        <h2 class="elementor-heading-title elementor-size-default">
                                            {{ $main['wordheader'] }}</h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-767393b5 elementor-widget elementor-widget-spacer"
                                    data-id="767393b5" data-element_type="widget" data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                        <style>
                                            /*! elementor - v3.17.0 - 08-11-2023 */
                                            .elementor-column .elementor-spacer-inner {
                                                height: var(--spacer-size)
                                            }

                                            .e-con {
                                                --container-widget-width: 100%
                                            }

                                            .e-con-inner>.elementor-widget-spacer,
                                            .e-con>.elementor-widget-spacer {
                                                width: var(--container-widget-width, var(--spacer-size));
                                                --align-self: var(--container-widget-align-self, initial);
                                                --flex-shrink: 0
                                            }

                                            .e-con-inner>.elementor-widget-spacer>.elementor-widget-container,
                                            .e-con>.elementor-widget-spacer>.elementor-widget-container {
                                                height: 100%;
                                                width: 100%
                                            }

                                            .e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer,
                                            .e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer {
                                                height: 100%
                                            }

                                            .e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner,
                                            .e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner {
                                                height: var(--container-widget-height, var(--spacer-size))
                                            }

                                            .e-con-inner>.elementor-widget-spacer.elementor-widget-empty,
                                            .e-con>.elementor-widget-spacer.elementor-widget-empty {
                                                position: relative;
                                                min-height: 22px;
                                                min-width: 22px
                                            }

                                            .e-con-inner>.elementor-widget-spacer.elementor-widget-empty .elementor-widget-empty-icon,
                                            .e-con>.elementor-widget-spacer.elementor-widget-empty .elementor-widget-empty-icon {
                                                position: absolute;
                                                top: 0;
                                                bottom: 0;
                                                left: 0;
                                                right: 0;
                                                margin: auto;
                                                padding: 0;
                                                width: 22px;
                                                height: 22px
                                            }
                                        </style>
                                        <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-4ab25234 elementor-widget elementor-widget-heading"
                                    data-id="4ab25234" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h3 class="elementor-heading-title elementor-size-default">Call Us</h3>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-51e477b2 elementor-widget elementor-widget-heading"
                                    data-id="51e477b2" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">{{ $main['phone'] }}
                                        </h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-5ee57921 elementor-shape-circle e-grid-align-left elementor-grid-0 elementor-widget elementor-widget-social-icons"
                                    data-id="5ee57921" data-element_type="widget"
                                    data-widget_type="social-icons.default">
                                    <div class="elementor-widget-container">
                                        <style>
                                            /*! elementor - v3.17.0 - 08-11-2023 */
                                            .elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,
                                            .elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,
                                            .elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container {
                                                line-height: 1;
                                                font-size: 0
                                            }

                                            .elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid {
                                                display: inline-grid
                                            }

                                            .elementor-widget-social-icons .elementor-grid {
                                                grid-column-gap: var(--grid-column-gap, 5px);
                                                grid-row-gap: var(--grid-row-gap, 5px);
                                                grid-template-columns: var(--grid-template-columns);
                                                justify-content: var(--justify-content, center);
                                                justify-items: var(--justify-content, center)
                                            }

                                            .elementor-icon.elementor-social-icon {
                                                font-size: var(--icon-size, 25px);
                                                line-height: var(--icon-size, 25px);
                                                width: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));
                                                height: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)))
                                            }

                                            .elementor-social-icon {
                                                --e-social-icon-icon-color: #fff;
                                                display: inline-flex;
                                                background-color: #69727d;
                                                align-items: center;
                                                justify-content: center;
                                                text-align: center;
                                                cursor: pointer
                                            }

                                            .elementor-social-icon i {
                                                color: var(--e-social-icon-icon-color)
                                            }

                                            .elementor-social-icon svg {
                                                fill: var(--e-social-icon-icon-color)
                                            }

                                            .elementor-social-icon:last-child {
                                                margin: 0
                                            }

                                            .elementor-social-icon:hover {
                                                opacity: .9;
                                                color: #fff
                                            }

                                            .elementor-social-icon-android {
                                                background-color: #a4c639
                                            }

                                            .elementor-social-icon-apple {
                                                background-color: #999
                                            }

                                            .elementor-social-icon-behance {
                                                background-color: #1769ff
                                            }

                                            .elementor-social-icon-bitbucket {
                                                background-color: #205081
                                            }

                                            .elementor-social-icon-codepen {
                                                background-color: #000
                                            }

                                            .elementor-social-icon-delicious {
                                                background-color: #39f
                                            }

                                            .elementor-social-icon-deviantart {
                                                background-color: #05cc47
                                            }

                                            .elementor-social-icon-digg {
                                                background-color: #005be2
                                            }

                                            .elementor-social-icon-dribbble {
                                                background-color: #ea4c89
                                            }

                                            .elementor-social-icon-elementor {
                                                background-color: #d30c5c
                                            }

                                            .elementor-social-icon-envelope {
                                                background-color: #ea4335
                                            }

                                            .elementor-social-icon-facebook,
                                            .elementor-social-icon-facebook-f {
                                                background-color: #3b5998
                                            }

                                            .elementor-social-icon-flickr {
                                                background-color: #0063dc
                                            }

                                            .elementor-social-icon-foursquare {
                                                background-color: #2d5be3
                                            }

                                            .elementor-social-icon-free-code-camp,
                                            .elementor-social-icon-freecodecamp {
                                                background-color: #006400
                                            }

                                            .elementor-social-icon-github {
                                                background-color: #333
                                            }

                                            .elementor-social-icon-gitlab {
                                                background-color: #e24329
                                            }

                                            .elementor-social-icon-globe {
                                                background-color: #69727d
                                            }

                                            .elementor-social-icon-google-plus,
                                            .elementor-social-icon-google-plus-g {
                                                background-color: #dd4b39
                                            }

                                            .elementor-social-icon-houzz {
                                                background-color: #7ac142
                                            }

                                            .elementor-social-icon-instagram {
                                                background-color: #262626
                                            }

                                            .elementor-social-icon-jsfiddle {
                                                background-color: #487aa2
                                            }

                                            .elementor-social-icon-link {
                                                background-color: #818a91
                                            }

                                            .elementor-social-icon-linkedin,
                                            .elementor-social-icon-linkedin-in {
                                                background-color: #0077b5
                                            }

                                            .elementor-social-icon-medium {
                                                background-color: #00ab6b
                                            }

                                            .elementor-social-icon-meetup {
                                                background-color: #ec1c40
                                            }

                                            .elementor-social-icon-mixcloud {
                                                background-color: #273a4b
                                            }

                                            .elementor-social-icon-odnoklassniki {
                                                background-color: #f4731c
                                            }

                                            .elementor-social-icon-pinterest {
                                                background-color: #bd081c
                                            }

                                            .elementor-social-icon-product-hunt {
                                                background-color: #da552f
                                            }

                                            .elementor-social-icon-reddit {
                                                background-color: #ff4500
                                            }

                                            .elementor-social-icon-rss {
                                                background-color: #f26522
                                            }

                                            .elementor-social-icon-shopping-cart {
                                                background-color: #4caf50
                                            }

                                            .elementor-social-icon-skype {
                                                background-color: #00aff0
                                            }

                                            .elementor-social-icon-slideshare {
                                                background-color: #0077b5
                                            }

                                            .elementor-social-icon-snapchat {
                                                background-color: #fffc00
                                            }

                                            .elementor-social-icon-soundcloud {
                                                background-color: #f80
                                            }

                                            .elementor-social-icon-spotify {
                                                background-color: #2ebd59
                                            }

                                            .elementor-social-icon-stack-overflow {
                                                background-color: #fe7a15
                                            }

                                            .elementor-social-icon-steam {
                                                background-color: #00adee
                                            }

                                            .elementor-social-icon-stumbleupon {
                                                background-color: #eb4924
                                            }

                                            .elementor-social-icon-telegram {
                                                background-color: #2ca5e0
                                            }

                                            .elementor-social-icon-thumb-tack {
                                                background-color: #1aa1d8
                                            }

                                            .elementor-social-icon-tripadvisor {
                                                background-color: #589442
                                            }

                                            .elementor-social-icon-tumblr {
                                                background-color: #35465c
                                            }

                                            .elementor-social-icon-twitch {
                                                background-color: #6441a5
                                            }

                                            .elementor-social-icon-twitter {
                                                background-color: #1da1f2
                                            }

                                            .elementor-social-icon-viber {
                                                background-color: #665cac
                                            }

                                            .elementor-social-icon-vimeo {
                                                background-color: #1ab7ea
                                            }

                                            .elementor-social-icon-vk {
                                                background-color: #45668e
                                            }

                                            .elementor-social-icon-weibo {
                                                background-color: #dd2430
                                            }

                                            .elementor-social-icon-weixin {
                                                background-color: #31a918
                                            }

                                            .elementor-social-icon-whatsapp {
                                                background-color: #25d366
                                            }

                                            .elementor-social-icon-wordpress {
                                                background-color: #21759b
                                            }

                                            .elementor-social-icon-xing {
                                                background-color: #026466
                                            }

                                            .elementor-social-icon-yelp {
                                                background-color: #af0606
                                            }

                                            .elementor-social-icon-youtube {
                                                background-color: #cd201f
                                            }

                                            .elementor-social-icon-500px {
                                                background-color: #0099e5
                                            }

                                            .elementor-shape-rounded .elementor-icon.elementor-social-icon {
                                                border-radius: 10%
                                            }

                                            .elementor-shape-circle .elementor-icon.elementor-social-icon {
                                                border-radius: 50%
                                            }
                                        </style>
                                        <div class="elementor-social-icons-wrapper elementor-grid">
                                            <span style="visibility: hidden" class="elementor-grid-item">
                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-7d7dc66"
                                                    href="{{ $main['facebook'] }}" target="_blank">
                                                    <span class="elementor-screen-only">Facebook</span>
                                                    <i class="fab fa-facebook"></i> </a>
                                            </span>
                                            <span style="visibility: hidden" class="elementor-grid-item">
                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-469030c"
                                                    href="{{ $main['twitter'] }}" target="_blank">
                                                    <span class="elementor-screen-only">Twitter</span>
                                                    <i class="fab fa-twitter"></i> </a>
                                            </span>
                                            <span style="visibility: hidden" class="elementor-grid-item">
                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-0c5b5a6"
                                                    href="{{ $main['youtube'] }}" target="_blank">
                                                    <span class="elementor-screen-only">Youtube</span>
                                                    <i class="fab fa-youtube"></i> </a>
                                            </span>
                                            <span class="elementor-grid-item">
                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-bd43e8d"
                                                    href="{{ $main['instagram'] }}" target="_blank">
                                                    <span class="elementor-screen-only">Instagram</span>
                                                    <i class="fab fa-instagram fa-3x"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>






                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3d27bed2"
                            data-id="3d27bed2" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-50988488 elementor-widget elementor-widget-qi_addons_for_elementor_wp_forms"
                                    data-id="50988488" data-element_type="widget"
                                    data-widget_type="qi_addons_for_elementor_wp_forms.default">
                                    <div class="elementor-widget-container">
                                        <div class="qodef-shortcode qodef-m  qodef-qi-wp-forms ">
                                            <div class="wpforms-container wpforms-container-full wpforms-render-modern"
                                                id="wpforms-8584">
                                                <form id="wpforms-form-8584"
                                                    class="wpforms-validate wpforms-form wpforms-ajax-form"
                                                    data-formid="8584" method="post" enctype="multipart/form-data"
                                                    action="{{ route('fronted.contact.contact.message') }}"
                                                    data-token="a932aa2d59145b2cb303770074e40506">
                                                    @csrf
                                                    <noscript class="wpforms-error-noscript">Please enable JavaScript in
                                                        your browser to complete this form.</noscript>
                                                    <div class="wpforms-hidden" id="wpforms-error-noscript">Please enable
                                                        JavaScript in your browser to complete this form.</div>
                                                    <div class="wpforms-field-container">
                                                        <div id="wpforms-8584-field_3-container"
                                                            class="wpforms-field wpforms-field-text" data-field-id="3">
                                                            <label class="wpforms-field-label wpforms-label-hide"
                                                                for="wpforms-8584-field_3" aria-hidden="false">Name
                                                                <span class="wpforms-required-label"
                                                                    aria-hidden="true">*</span></label>
                                                            <input type="text" id="wpforms-8584-field_3"
                                                                class="wpforms-field-large wpforms-field-required"
                                                                name="name" placeholder="Name"
                                                                aria-errormessage="wpforms-8584-field_3-error" required>
                                                        </div>
                                                        <div id="wpforms-8584-field_1-container"
                                                            class="wpforms-field wpforms-field-email" data-field-id="1">
                                                            <label class="wpforms-field-label wpforms-label-hide"
                                                                for="wpforms-8584-field_1" aria-hidden="false">Email
                                                                <span class="wpforms-required-label"
                                                                    aria-hidden="true">*</span></label>
                                                            <input type="email" id="wpforms-8584-field_1"
                                                                class="wpforms-field-large wpforms-field-required"
                                                                name="email" placeholder="Email" spellcheck="false"
                                                                aria-errormessage="wpforms-8584-field_1-error" required>
                                                        </div>
                                                        <div id="wpforms-8584-field_2-container"
                                                            class="wpforms-field wpforms-field-textarea"
                                                            data-field-id="2">
                                                            <label class="wpforms-field-label wpforms-label-hide"
                                                                for="wpforms-8584-field_2" aria-hidden="false">Your
                                                                Message
                                                                <span class="wpforms-required-label"
                                                                    aria-hidden="true">*</span></label>
                                                            <textarea id="wpforms-8584-field_2" class="wpforms-field-large wpforms-field-required" name="message"
                                                                placeholder="Your Message" aria-errormessage="wpforms-8584-field_2-error" required></textarea>
                                                        </div>
                                                    </div><!-- .wpforms-field-container -->
                                                    <div class="wpforms-submit-container"><input type="hidden"
                                                            name="wpforms[id]" value="8584">
                                                        <input type="hidden" name="wpforms[author]"
                                                            value="1"><input type="hidden" name="wpforms[post_id]"
                                                            value="998">

                                                        <button type="submit" name="wpforms[submit]"
                                                            id="wpforms-submit-8584" class="wpforms-submit"
                                                            data-alt-text="Sending..." data-submit-text="Submit"
                                                            aria-live="assertive" value="wpforms-submit"
                                                            style="background-color:#346cb0">Send</button>
                                                        <img decoding="async"
                                                            src="../wp-content/plugins/wpforms-lite/assets/images/submit-spin.svg"
                                                            class="wpforms-submit-spinner" style="display: none;"
                                                            width="26" height="26" alt="Loading">
                                                    </div>
                                                </form>
                                            </div> <!-- .wpforms-container -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-f3c79cf elementor-section-stretched elementor-section-height-min-height elementor-section-items-top elementor-section-boxed elementor-section-height-default"
                    data-id="f3c79cf" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                    <div class="elementor-background-overlay"></div>

                    <div class="elementor-container elementor-column-gap-default" style="justify-content: center">

                        @if (!empty($footer[0]))
                            @foreach ($footer as $item)
                                <?php
                                $string = $item;
                                $pairs = explode('#x#', $string);
                                $slide = [];
                                foreach ($pairs as $pair) {
                                    [$key, $value] = explode('=#=', $pair);
                                    $slide[$key] = $value;
                                }
                                if ($slide['status'] == 'disappear') {
                                    continue;
                                }
                                ?>

                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-807a587"
                                    data-id="807a587" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">


                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-111e739 elementor-widget elementor-widget-heading"
                                            data-id="111e739" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h5 class="elementor-heading-title elementor-size-default">
                                                    {{ $slide['name'] }}</h5>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-5b92a56 elementor-align-left elementor-mobile-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                            data-id="5b92a56" data-element_type="widget"
                                            data-widget_type="icon-list.default">
                                            <div class="elementor-widget-container">
                                                <link rel="stylesheet"
                                                    href="{{ asset('fronted/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css') }}">
                                                <ul class="elementor-icon-list-items">
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">

                                                            <span
                                                                class="elementor-icon-list-text">{{ $slide['phone'] }}</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">

                                                            <span
                                                                class="elementor-icon-list-text">{{ $slide['email'] }}</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-1c7d1fb elementor-align-left elementor-mobile-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                            data-id="1c7d1fb" data-element_type="widget"
                                            data-widget_type="icon-list.default">
                                            <div class="elementor-widget-container">
                                                <ul class="elementor-icon-list-items">
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">

                                                            <span
                                                                class="elementor-icon-list-text">{{ $slide['address'] }}</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            @endforeach
                        @endif
                    </div>

                </section>
            </div>
            @include('fronted.layouts.components.contentinfo')
            @include('fronted.layouts.components.feedback')

        </div>

        <link rel='stylesheet' id='e-animations-css'
            href='.{{ asset('fronted/wp-content/plugins/elementor/assets/lib/animations/animations.min8864.css?ver=3.17.3') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='wpforms-modern-full-css'
            href='{{ asset('fronted/wp-content/plugins/wpforms-lite/assets/css/frontend/modern/wpforms-full.minda65.css?ver=1.8.4.1') }}'
            type='text/css' media='all' />

    @endsection
