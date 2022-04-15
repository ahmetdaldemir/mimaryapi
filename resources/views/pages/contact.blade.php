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
                                 style="background-image: url({{asset('assets/img/title-bg2.jpg')}}); background-repeat: no-repeat; background-position: center top; background-size: cover;">
                                <div class="bauer-container clearfix">
                                    <div class="inner-wrap">
                                        <div class="title-group">
                                            <h1 class="main-title">
                                                İLETİŞİM
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                                <section style="background:#e9e9e9" class="wpb_row vc_row-fluid vc_custom_1558796508444 vc_row-has-fill row-content-position-Default">
                                    <div class="bauer-container">
                                        <div class="row-inner clearfix">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="bauer-spacer clearfix" data-desktop="100"
                                                             data-mobi="60" data-smobi="60" style="height:100px"></div>
                                                        <div class="bauer-content-box clearfix">
                                                            <div class="vc-custom-col-inner-spacing clearfix vc-col-inner-spacing-100">
                                                                <div class="wpb_row vc_inner vc_row-fluid">
                                                                    <div
                                                                        class="wpb_column vc_column_container vc_col-sm-6">
                                                                        <div class="vc_column-inner">
                                                                            <div class="wpb_wrapper">
                                                                                <div class="bauer-content-box clearfix "
                                                                                     data-padding="47px 50px 94px 50px"
                                                                                     data-mobipadding="40px"
                                                                                     data-margin="" data-mobimargin="">
                                                                                    <div class="inner ctb-865083193"
                                                                                         style="padding: 47px 50px 94px;"
                                                                                         data-background="rgba(3,15,39,0.6)"
                                                                                         data-rounded="5px"
                                                                                         data-border-color="rgba(231,231,231,0.3)"
                                                                                         data-border-width="1px">
                                                                                        <h2 class="bauer-text clearfix "
                                                                                            style="font-size:42px;color:#f2f2f2;margin-bottom:8px;">
                                                                                            <p><span class="font-weight-300">İletişim </span>Bilgileri</p>
                                                                                        </h2>
                                                                                        <div class="grid-item">
                                                                                            <div class="bauer-text clearfix " style="color:#f2f2f2;">
                                                                                                <p><span class="font-weight-500 text-white">Adres</span><br>
                                                                                                    <span style="color: #8a99c0;">{{$settings['address']}}</span><br>
                                                                                                 </p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="grid-item">
                                                                                            <div class="bauer-text clearfix " style="color:#f2f2f2;">
                                                                                                <p><span class="font-weight-500 text-white">Telefon</span><br>
                                                                                                    <span style="color: #8a99c0;">{{$settings['phone']}}</span><br>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="grid-item">
                                                                                            <div class="bauer-text clearfix " style="color:#f2f2f2;">
                                                                                                <p><span class="font-weight-500 text-white">Email</span><br>
                                                                                                    <span style="color: #8a99c0;">{{$settings['email']}}</span><br>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="wpb_column vc_column_container vc_col-sm-6">
                                                                        <div class="vc_column-inner">
                                                                            <div class="wpb_wrapper">
                                                                                <div class="bauer-content-box clearfix "
                                                                                     data-padding="53px 35px 60px 35px"
                                                                                     data-mobipadding="50px 35px 50px 35px"
                                                                                     data-margin="" data-mobimargin="">
                                                                                    <div class="inner ctb-1997878657"
                                                                                         style="padding: 53px 35px 60px;"
                                                                                         data-background="#f7f9fa"
                                                                                         data-rounded="5px"
                                                                                         data-border-width="1px">
                                                                                        <div
                                                                                            class="bauer-headings clearfix text-center"
                                                                                            data-font="22" style=""><h2
                                                                                                class="heading clearfix "
                                                                                                style="margin-bottom:15px;font-size:22px;">
                                                                                                Bize Yazın
                                                                                            </h2>
                                                                                         </div>
                                                                                        <div class="bauer-spacer clearfix" style="height:32px"></div>
                                                                                        <div role="form" class="wpcf7"
                                                                                             id="wpcf7-f4437-p1339-o1"
                                                                                             lang="en-US" dir="ltr">
                                                                                            <div
                                                                                                class="screen-reader-response">
                                                                                                <p role="status"
                                                                                                   aria-live="polite"
                                                                                                   aria-atomic="true"></p>
                                                                                                <ul></ul>
                                                                                            </div>
                                                                                            <form  action="mail_send"
                                                                                                method="post"
                                                                                                class="wpcf7-form init"
                                                                                                novalidate="novalidate"
                                                                                                data-status="init">

                                                                                                <div
                                                                                                    class="cf7-style-1">
                                                                                                    <div
                                                                                                        class="name-wrap">
                                                                                                        <span
                                                                                                            class="wpcf7-form-control-wrap your-name"><input
                                                                                                                type="text"
                                                                                                                name="your_name"
                                                                                                                value=""
                                                                                                                size="40"
                                                                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                                                aria-required="true"
                                                                                                                aria-invalid="false"
                                                                                                                placeholder="İsim Soyisim"></span>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="email-wrap">
                                                                                                        <span
                                                                                                            class="wpcf7-form-control-wrap your-email"><input
                                                                                                                type="email"
                                                                                                                name="your_email"
                                                                                                                value=""
                                                                                                                size="40"
                                                                                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                                                aria-required="true"
                                                                                                                aria-invalid="false"
                                                                                                                placeholder="Eposta"></span>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="message-wrap">
                                                                                                        <span
                                                                                                            class="wpcf7-form-control-wrap your-message"><textarea
                                                                                                                name="your-message"
                                                                                                                cols="40"
                                                                                                                rows="10"
                                                                                                                class="wpcf7-form-control wpcf7-textarea"
                                                                                                                aria-invalid="false"
                                                                                                                placeholder="Mesajınız"></textarea></span>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="submit-wrap">
                                                                                                        <span><input
                                                                                                                type="submit"
                                                                                                                value="GÖNDER"
                                                                                                                class="wpcf7-form-control has-spinner wpcf7-submit"><span
                                                                                                                class="wpcf7-spinner"></span></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </section>
                    </div>

                </article>

            </div>
        </div><!-- /#site-content -->
    </div>

@endsection
