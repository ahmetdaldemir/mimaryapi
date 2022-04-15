@extends('welcome')

@section('page-title',"Mimar Yapı")

@section('content')

    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <article class="page-content post-1316 page type-page status-publish hentry">
                    <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                        <section id="first-row" class="wpb_row vc_row-fluid vc_custom_1558754119849 vc_row-has-fill row-content-position-Default">
                            <div id="featured-title" class="clearfix center" style="background-image: url({{asset('storage/'.$category->cover_images)}}); background-repeat: no-repeat; background-position: center top; background-size: cover;">
                                <div class="bauer-container clearfix">
                                    <div class="inner-wrap">
                                        <div class="title-group">
                                            <h1 class="main-title">
                                                {{$category->name}}
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
            <div id="inner-content" class="inner-content-wrap">
                <article class="page-content post-2288 page type-page status-publish hentry">
                    <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                        <section class="wpb_row vc_row-fluid vc_custom_1558852781310 vc_row-has-fill">
                            <div class="bauer-container">
                                <div class="row-inner clearfix">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="bauer-spacer clearfix" data-desktop="94" data-mobi="60"
                                                     data-smobi="60" style="height:94px"></div>
                                                <div class="bauer-content-box clearfix">
                                                    <div
                                                        class="vc-custom-col-inner-spacing clearfix vc-col-inner-spacing-30">
                                                        <div class="wpb_row vc_inner vc_row-fluid">
                                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="bauer-single-heading clearfix "
                                                                             style="margin-bottom:25px;"><span
                                                                                class="inner"><span class="heading clearfix "style="font-weight:600;color:#777777;font-size:16px;">{{$category->name}}</span></span></div>
                                                                        <h2 class="bauer-text clearfix " style="font-size:42px;line-height:50px;color:#230000;">
                                                                            <p><span class="font-weight-300"> {{$category->meta_name}}
                                                                            </p>
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="bauer-spacer clearfix"
                                                                             data-desktop="52" data-mobi="30"
                                                                             data-smobi="30" style="height:52px"></div>
                                                                        <div class="bauer-text clearfix "
                                                                             style="font-size:18px;line-height:30px;color:#414042;">
                                                                            <p>{!! $category->meta_description  !!}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bauer-spacer clearfix" data-desktop="70" data-mobi="50" data-smobi="50" style="height:70px"></div>
                                                <div class="bauer-content-box clearfix">
                                                    <div class="vc-custom-col-inner-spacing clearfix vc-col-inner-spacing-30">
                                                        <div class="wpb_row vc_inner vc_row-fluid">
                                                 @foreach($projects as $project)
                                                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="bauer-content-box clearfix "
                                                                             data-padding="17px 15px 17px 15px"
                                                                             data-mobipadding="17px 15px 17px 15px"
                                                                             data-margin="" data-mobimargin="">
                                                                            <div class="inner ctb-1085927833"
                                                                                 style="padding: 17px 15px;"
                                                                                 data-background="#ffffff"
                                                                                 data-shadow-hover=" 0px 0px 20px 0px rgba(0,0,0,0.07)">
                                                                                <div class="bauer-image-box clearfix style-1 text-center"  style="">
                                                                                    <div class="item">
                                                                                        <div class="inner">
                                                                                            <div class="thumb" style="">
                                                                                                <img width="450"
                                                                                                     height="464"
                                                                                                     src="{{asset('storage/'.$project['image'])}}"
                                                                                                     class="attachment-full size-full"
                                                                                                     alt=""
                                                                                                     loading="lazy"
                                                                                                     srcset="{{asset('storage/'.$project['image'])}} 450w, {{asset('storage/'.$project['image'])}} 291w"
                                                                                                     sizes="(max-width: 450px) 100vw, 450px">
                                                                                                <div class="hover-layer">
                                                                                                    <a href="proje/{{$project['slug']}}"  class="icon"><span class="elegant-icon_plus_alt"></span></a>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="text-wrap " style=" padding:30px 30px 12px;">
                                                                                                <h3 class="title" style="font-size:18px;color:#414042;">
                                                                                                    <a href="proje/{{$project['slug']}}"> {{$project['title']}} </a>
                                                                                                </h3>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                 </div>
                                                                </div>
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
                        </section>
                    </div>
                </article>

            </div>
        </div>
    </div>
@endsection
