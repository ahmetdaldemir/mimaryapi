@extends('welcome')

@section('page-title',"Mimar Yapı")

@section('content')
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <article class="page-content post-9389 page type-page status-publish hentry">
                    <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                        <section class="wpb_row vc_row-fluid has-scroll-arrow row-has-scroll">
                                <div class="row-inner clearfix">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_content_element wrapper">
                                                    <ul class="rslides" id="slider3">
                                                        @foreach($sliders as $slider)
                                                           <li><img src="{{asset('storage/'.$slider->image)}}" alt=""></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          <a  href="#" class="scroll-btn down"></a>
                        </section>
                    </div>
                    <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                        <section class="wpb_row vc_row-fluid vc_custom_1557570316548 vc_row-has-fill">
                            <div class="bauer-container">
                                <div class="row-inner clearfix">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="bauer-spacer clearfix" data-desktop="94"
                                                     data-mobi="60" data-smobi="60" style="height:94px"></div>
                                                <div class="bauer-content-box clearfix">
                                                    <div
                                                        class="vc-custom-col-inner-spacing clearfix vc-col-inner-spacing-30">
                                                        <div class="wpb_row vc_inner vc_row-fluid">
                                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="bauer-single-heading clearfix "
                                                                             style="margin-bottom:25px;"><span
                                                                                class="inner"><span
                                                                                    class="heading clearfix "
                                                                                    style="font-weight:600;color:#db2323;font-size:16px;">
		YARININ YAŞAMINI ŞEKİLLENDİRİYORUZ
	</span></span></div>
                                                                        <h2 class="bauer-text clearfix "
                                                                            style="font-size:42px;line-height:50px;color:#030f27;">
                                                                            <p><span class="font-weight-300">Mükemmel Mimari</span><br>
                                                                                &amp; <span style="font-weight: 600;">Yaşanabilir Yapılar</span></p>
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="bauer-spacer clearfix"
                                                                             data-desktop="52" data-mobi="30"
                                                                             data-smobi="30"
                                                                             style="height:52px"></div>
                                                                        <div class="bauer-text clearfix "
                                                                             style="font-size:18px;line-height:30px;color:#414042;">
                                                                            <p><span>Yaşanabilir, doğayla iç içe, kaliteli ve estetik yapılar inşa etmekten mutluluk duyuyoruz. Sağlam Yapılarımızla Yanınızdayız.</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bauer-spacer clearfix" data-desktop="70"
                                                     data-mobi="50" data-smobi="50" style="height:70px"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                        <section class="wpb_row vc_row-fluid vc_custom_1558766443290 vc_row-has-fill">
                            <div class="bauer-container">
                                <div class="row-inner clearfix">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="bauer-spacer clearfix" data-desktop="70"
                                                     data-mobi="40" data-smobi="40" style="height:70px"></div>
                                                <div class="bauer-content-box clearfix">
                                                    <div class="vc-custom-col-inner-spacing clearfix vc-col-inner-spacing-30">
                                                        <div class="wpb_row vc_inner vc_row-fluid">
                                                            @foreach($settings['categorys'] as $category)
                                                                <?php $resim = json_decode($category->image,TRUE); ?>
                                                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="bauer-image-box clearfix style-2 text-center" style="">
                                                                            <div class="item">
                                                                                <div class="inner">
                                                                                    <div class="thumb" style="">
                                                                                        <img width="450"
                                                                                             height="550"
                                                                                             src="{{asset('storage/'.$resim[0])}}"
                                                                                             class="attachment-full size-full"
                                                                                             alt="" loading="lazy"
                                                                                             srcset="{{asset('storage/'.$resim[0])}} 450w, {{asset('storage/'.$resim[0])}} 245w"
                                                                                             sizes="(max-width: 450px) 100vw, 450px">
                                                                                    </div>
                                                                                    <div class="text-wrap " style="">
                                                                                        <h3 class="title"
                                                                                            style="margin-bottom:17px;">
                                                                                            {{$category->name}}
                                                                                        </h3>
                                                                                        <div class="desc"
                                                                                             style="margin-bottom:27px;">
                                                                                            {{$category->link_title}}
                                                                                        </div>
                                                                                        <div class="url-wrap">
                                                                                            <a href=" {{$category->slug}}"
                                                                                               target="_self"
                                                                                               class="bauer-links link-style-2"
                                                                                               style="color:#db2323;">
                                                                                                <span class="text"> {{$category->name}}</span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <span style="    position: relative;top: 10px;font-size: 18px;">{{$category->name}}</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="bauer-spacer clearfix"
                                                                             data-desktop="0" data-mobi="30"
                                                                             data-smobi="30" style="height:0px"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
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
                    <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                        <section class="wpb_row vc_row-fluid vc_custom_1646040936585 vc_row-has-fill">
                            <div class="bauer-container">
                                <div class="row-inner clearfix">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="bauer-spacer clearfix" data-desktop="100" data-mobi="60"
                                                     data-smobi="60" style="height:100px"></div>
                                                <div class="bauer-content-box clearfix">
                                                    <div class="vc-custom-col-inner-spacing clearfix vc-col-inner-spacing-30">
                                                        <div class="wpb_row vc_inner vc_row-fluid">
                                                             <div class="wpb_column vc_column_container vc_col-sm-6">
                                                                <div class="vc_column-inner callbacks_container">
                                                                    <ul class="rslides" id="slider2">
                                                                    <?php $x =json_decode($projectfeatured['images'],TRUE); ?>
                                                                    @foreach($x as $img)
                                                                                <li><img src="{{asset('storage/'.$img)}}" alt=""></li>
                                                                    @endforeach
                                                                    </ul>

                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="bauer-content-box clearfix " data-padding="22px 0px 0px 35px" data-mobipadding="0px 0px 0px 0px" data-margin="" data-mobimargin="">
                                                                            <div class="inner ctb-1084319150" style="padding: 22px 0px 0px 35px;" data-background="">
                                                                                <h2 class="bauer-text clearfix " style="font-size:42px;line-height:50px;color:#ffffff;margin-bottom:37px;"> <p>{{$projectfeatured['title']}}</p></h2>
                                                                                <div class="bauer-icon-box clearfix icon-left2 align-left  simple" style="">
                                                                                    <div class="wrap-inner" style="position: relative;">
                                                                                        {!! $projectfeatured['excerpt'] !!}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                         </div>
                                                    </div>
                                                </div>
                                                <div class="bauer-spacer clearfix" data-desktop="100" data-mobi="60"data-smobi="60" style="height:100px"></div>
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
