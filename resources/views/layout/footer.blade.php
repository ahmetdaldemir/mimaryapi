<footer id="footer" style="">
    <div id="footer-widgets" class="bauer-container">
        <div class="footer-grid  gutter-35">
            <div class="span_1_of_3 col">
                <div id="text-2" class="widget widget_text">
                    <div class="textwidget"><p class="margin-bottom-20"><img
                                src="{{asset('/storage/'.$settings['logo'])}}" alt="" width="205"></p>
                        <p class="font-size-14 line-height-29 margin-bottom-0">10 yılı aşkın inşaat tecrübemizle, yüksek
                            kaliteli projeler inşa etmek için durmadan çalışıyoruz.</p>
                    </div>
                </div>
                <div id="widget_socials-1" class="widget widget_socials">
                    <div class="socials clearfix" style="">
                        <div class="icon" style="">
                            <a target="_blank" title="instagram" href="{{$settings['instagram']}}"
                               style="margin-bottom:10px">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                        <div class="icon" style="">
                            <a target="_blank" title="facebook" href="{{$settings['facebook']}}"
                               style="margin-bottom:10px"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="icon" style=""><a target="_blank" title="youtube" href="{{$settings['youtube']}}"
                                                      style="margin-bottom:10px"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="span_1_of_3 col">
                <div id="widget_links-1" class="widget widget_links"><h2 class="widget-title"><span>Kategoriler</span>
                    </h2>
                    <ul class="links-wrap clearfix col2">
                        @foreach ($settings['categorys'] as $category)
                            <li>
                                <a href="{{route($category->slug)}}"><span>{{$category->name}}</span></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="span_1_of_3 col">
                <div id="widget_links-1" class="widget widget_links"><h2 class="widget-title"><span>Kısa Linkler</span>
                    </h2>
                    <ul class="links-wrap clearfix col2">
                        <li style="">
                            <a href="{{route('about')}}" style="">
                                Kurumsal
                            </a>
                        </li>
                        <li style="">
                            <a href="{{route('contact')}}" style="">
                                İletişim
                            </a>
                        </li>
                        <li style="">
                            <a href="{{route('blog')}}" style="">
                                Blog
                            </a>
                        </li>
                    </ul>

                </div>
            </div>


        </div>
    </div>
</footer>


<div id="bottom" style="">
    <div class="bauer-container">
        <div class="bottom-bar-inner-wrap">
            <div class="bottom-bar-copyright">
                <div id="copyright">
                    2022 Mimar Yapı © All rights reserved. Design By <a href="http://www.alfamedya.com/">Alfa Medya</a>
                </div>
            </div><!-- /.bottom-bar-copyright -->

            <div class="bottom-bar-menu">
            </div><!-- /.bottom-bar-menu -->
        </div>
    </div>
</div>
