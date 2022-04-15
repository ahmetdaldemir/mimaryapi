@extends('welcome')

@section('page-title',"Mimar Yapı")

@section('content')

    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <article class="page-content post-1316 page type-page status-publish hentry">
                    <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                        <section id="first-row"
                                 class="wpb_row vc_row-fluid vc_custom_1558754119849 vc_row-has-fill row-content-position-Default">
                            <div id="featured-title" class="clearfix center"
                                 style="background-image: url({{asset('storage/'.$project['cover_image'])}}); background-repeat: no-repeat; background-position: center top; background-size: cover;">
                                <div class="bauer-container clearfix">
                                    <div class="inner-wrap">
                                        <div class="title-group">
                                            <h1 class="main-title">
                                                Projeler
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>
                    </div>

                </article>

            </div>
        </div>
    </div>
    <div class="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div class="project-detail-wrap">
                <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                    <section class="wpb_row vc_row-fluid row-content-position-Default">
                        <div class="bauer-container">
                            <div class="row-inner clearfix">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">

                                            <div class="bauer-spacer clearfix" data-desktop="28" data-mobi="28"
                                                 data-smobi="28" style="height:28px"></div>
                                            <h2 class="bauer-text clearfix " style="font-size:42px;">
                                                <p>Proje Adı:  {{$project['title']}}</p>
                                            </h2>
                                            <div class="bauer-spacer clearfix" data-desktop="28" data-mobi="28"
                                                 data-smobi="28" style="height:28px"></div>
                                            <div class="bauer-content-box clearfix">
                                                <div
                                                    class="vc-custom-col-inner-spacing clearfix vc-col-inner-spacing-30">
                                                    <div class="wpb_row vc_inner vc_row-fluid">
                                                        <div class="wpb_column vc_column_container vc_col-sm-8">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div class="bauer-text clearfix "
                                                                         style="color:#414042;">
                                                                        <p>{!! $project['body'] !!}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                                            <div class="vc_column-inner" style="    padding: 30px 35px 45px;box-shadow: 0px 0px 20px 0px rgb(0 0 0 / 7%) !important;">
                                                                <div class="wpb_wrapper">
                                                                    <div class="bauer-spacer clearfix" data-desktop="10"
                                                                         data-mobi="40" data-smobi="40"
                                                                         style="height:10px"></div>
                                                                    <div class="bauer-content-box clearfix ">
                                                                        <div class="inner ctb-133297466"  style="    padding: 20px 15px 0;font-size:15px">
                                                                                <div class="row clearfix" style="margin-bottom: 25px;">
                                                                                    <div class="col-md-6">
                                                                                        <div style="font-weight: 500; color: #030f27;">
                                                                                            Yapım Şirketi
                                                                                        </div>
                                                                                        <div style="font-weight: 500;    color: #393939;">
                                                                                            {{$project['productioncamplany']}}
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div  style="font-weight: 500; color: #030f27;">
                                                                                            Category
                                                                                        </div>
                                                                                        <div style="font-weight: 500;    color: #393939;">
                                                                                            Devam Eden Projeler
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix"  style="margin-bottom: 25px;">
                                                                                    <div class="col-md-6">
                                                                                        <div style="font-weight: 500; color: #030f27;">
                                                                                            Başlangıç Tarihi
                                                                                        </div>
                                                                                        <div style="font-weight: 500;    color: #393939;">
                                                                                            {{$project['start_date']}}
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div
                                                                                            style="font-weight: 500; color: #030f27;">
                                                                                            Bitiş Tarihi
                                                                                        </div>
                                                                                        <div style="font-weight: 500;    color: #393939;">
                                                                                            {{$project['finish_date']}}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            <div class="bauer-divider divider-center divider-solid"
                                                                                style="border-top-color:#e7e7e7;margin-top:28px;margin-bottom:34px;"></div>
                                                                            <div class="clearfix"></div>
                                                                            <div class="bauer-align-box text-center">
                                                                                <div class="button-wrap icon-right"
                                                                                     style=""><a
                                                                                        href="{{$project['catalog']}}"
                                                                                        target="_blank"
                                                                                        class="bauer-button btn-1990794633 medium no_icon custom outline solid outline-accent"
                                                                                        style="border-radius:30px;border-width:1px;">
                                                                                        <span>Proje Kataloğu</span>
                                                                                    </a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bauer-spacer clearfix" data-desktop="100" data-mobi="60"
                                                 data-smobi="60" style="height:100px"></div>
                                        </div>
                                    </div>
                                    <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                                        <section class="wpb_row vc_row-fluid" style="margin-bottom: 30px">
                                            <div class="bauer-container">
                                                <div class="row-inner clearfix">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="vc_grid-container-wrapper vc_clearfix">
                                                                    <div
                                                                        class="vc_grid-container vc_clearfix wpb_content_element vc_media_grid">
                                                                        <style type="text/css">
                                                                            img.wp-smiley,
                                                                            img.emoji {
                                                                                display: inline !important;
                                                                                border: none !important;
                                                                                box-shadow: none !important;
                                                                                height: 1em !important;
                                                                                width: 1em !important;
                                                                                margin: 0 0.07em !important;
                                                                                vertical-align: -0.1em !important;
                                                                                background: none !important;
                                                                                padding: 0 !important;
                                                                            }
                                                                        </style>
                                                                        <link rel="stylesheet" id="extraicon3-css"
                                                                              href="https://alfamedya.com/mimar/wp-content/plugins/wprt-addons//assets/bauericons.css?ver=5.9.2"
                                                                              media="all">
                                                                        <link rel="stylesheet" id="extraicon-css"
                                                                              href="https://alfamedya.com/mimar/wp-content/plugins/wprt-addons//assets/eleganticons.css?ver=5.9.2"
                                                                              media="all">
                                                                        <link rel="stylesheet" id="extraicon2-css"
                                                                              href="https://alfamedya.com/mimar/wp-content/plugins/wprt-addons//assets/basicui.css?ver=5.9.2"
                                                                              media="all">
                                                                        <div
                                                                            class="vc_grid vc_row vc_grid-gutter-5px vc_pageable-wrapper vc_hook_hover"
                                                                            data-vc-pageable-content="true">
                                                                            <div
                                                                                class="vc_pageable-slide-wrapper vc_clearfix"
                                                                                data-vc-grid-content="true">

                                                                                <?php $imageslist = json_decode($project['images'], TRUE); ?>
                                                                                @foreach($imageslist as  $image)
                                                                                    <div
                                                                                        class="vc_grid-item vc_clearfix vc_col-sm-3 vc_visible-item fadeIn animated"
                                                                                        style="width: 24%;">
                                                                                        <div
                                                                                            class="vc_grid-item-mini vc_clearfix">
                                                                                            <div
                                                                                                class="vc_gitem-animated-block ">
                                                                                                <a class="example-image-link"
                                                                                                   href="{{asset('storage/'.$image)}}"
                                                                                                   data-lightbox="example-set">
                                                                                                    <div
                                                                                                        class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 vc_gitem-is-link example-image"
                                                                                                        style="background-image: url('{{asset('storage/'.$image)}}') !important;">
                                                                                                        <img
                                                                                                            class="vc_gitem-zone-img">
                                                                                                        <div
                                                                                                            class="vc_gitem-zone-mini"></div>
                                                                                                    </div>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="vc_clearfix"></div>
                                                                                    </div>
                                                                                @endforeach
                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </section>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
