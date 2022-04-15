@extends('welcome')

@section('page-title',"Mimar Yapı")

@section('content')

    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <article class="page-content post-1316 page type-page status-publish hentry">
                    <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                        <section id="first-row" class="wpb_row vc_row-fluid vc_custom_1558754119849 vc_row-has-fill row-content-position-Default">
                            <div id="featured-title" class="clearfix center" style="background-image: url(https://ninzio.com/bauer/wp-content/uploads/2019/05/title-bg1.jpg); background-repeat: no-repeat; background-position: center top; background-size: cover;">
                                <div class="bauer-container clearfix">
                                    <div class="inner-wrap">
                                        <div class="title-group">
                                            <h1 class="main-title">
                                               {{$page['title']}}
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

                                                                        <div class="bauer-text clearfix "  style="font-size:18px;line-height:30px;color:#414042;margin-bottom:34px;">
                                                                            <p>{!!$page['body']!!}</p>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="bauer-spacer clearfix"
                                                                             data-desktop="55" data-mobi="40"
                                                                             data-smobi="40" style="height:55px"></div>
                                                                        <div class="bauer-simple-image text-center"  style="">
                                                                            <img alt="image"  src="{{asset('storage/'.$page['image'])}}">
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
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                </article>

            </div>
        </div><!-- /#site-content -->
    </div>

@endsection
