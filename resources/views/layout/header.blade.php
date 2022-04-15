<div id="site-header-wrap">
    <!-- Top Bar -->

    <div id="top-bar" style="">
        <div id="top-bar-inner" class="bauer-container">
            <div class="top-bar-inner-wrap">

                <div class="top-bar-content">
            <span class="phone content">{{$settings['phone']}}</span>
                    <span class="email content">{{$settings['email']}}</span>
                    <span class="address content">{{$settings['address']}}</span>
                </div><!-- /.top-bar-content -->


                <div class="top-bar-socials">
                    <div class="inner">
                        <span class="icons">
                          <a href="{{$settings['address']}}" title="Facebook">
                              <span class="fab fa-facebook-f" aria-hidden="true"></span>
                              <span class="screen-reader-text">Facebook Profile</span>
                          </a>
                            <a href="{{$settings['youtube']}}" title="Youtube">
                                <span class="fab fa-youtube"  aria-hidden="true"></span>
                                <span class="screen-reader-text">Twitter Profile</span>
                            </a>
                            <a href="{{$settings['instagram']}}" title="Instagram">
                                <span class="fab fa-instagram" aria-hidden="true"></span>
                                <span class="screen-reader-text">Instagram Profile</span>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /#top-bar -->
    <!-- Header -->
    <header id="site-header" style="" class="">
        <div id="site-header-inner" class="bauer-container">
            <div class="wrap-inner">
                <div id="site-logo">
                    <div id="site-logo-inner" >
                        <a href="/" title="www.mimar-yapi.com" rel="home" class="main-logo">
                            <img src="{{asset('/storage/'.$settings['logo'])}}" alt="www.mimar-yapi.com"></a>
                    </div>
                </div><!-- #site-logo -->
                <div class="header-button"><a href="{{asset('/storage/'.$settings['catalog'])}}" download>Online Katalog</a></div>
                <ul class="nav-extend">
                    <li class="ext menu-logo">
                        <span class="menu-logo-inner" style="max-width:138px;"><a href="/">
                                        <img src="{{asset('/storage/'.$settings['logo'])}}">
                            </a>
                        </span>
                    </li>
                </ul>

                <div class="mobile-button"><span></span></div>
                <nav id="main-nav" class="main-nav">
                    <ul id="menu-primary-menu" class="menu">
                        <li id="menu-item-9419"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9389 current_page_item menu-item-9419">
                            <a href="{{route('index')}}"
                               aria-current="page"><span>Ana Sayfa</span></a></li>
                        <li id="menu-item-9477"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9477"><a
                                    href="{{route('about')}}"><span>Kurumsal</span></a></li>
                        <li id="menu-item-9416"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-9416">
                            <a href="#"><span>Projelerimiz</span></a>
                            <ul class="sub-menu">
                                @foreach ($settings['categorys'] as $category)
                                <li id="menu-item-{{$category->id}}" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-{{$category->id}}">
                                    <a href="{{route($category->slug)}}"><span>{{$category->name}}</span></a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li id="menu-item-9478"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9478"><a
                                    href="#"><span>Bizden Haberler</span></a></li>
                        <li id="menu-item-9479" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9479">
                            <a href="{{route('contact')}}"><span>İletişim</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
 </div>
