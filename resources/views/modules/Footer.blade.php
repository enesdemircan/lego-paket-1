@if ($designs->seo->durum == 'Aktif')
    @php $title = $designs->seo->title.' | '.$designs->seo->kelime1.' | '.$designs->seo->kelime2.' | '.$designs->seo->kelime3; @endphp
@else
    @php $title = $designs->seo->title; @endphp
@endif
<footer class="main-footer">
    <div class="footer-top">
        <div class="auto-container">
            <div class="widget-section">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget logo-widget">
                            <figure class="footer-logo"><a href="/{{$lang}}"><img src="{{env('SERVER_ADDRESS','NULL')}}/{{empty($designs->site_ayarlari->logo_beyaz) ? $designs->site_ayarlari->logo : $designs->site_ayarlari->logo_beyaz}}" alt="{{$title}}"></a></figure>
                            <div class="support-box">
                                <h4><a href="tel:{{$designs->iletisim->telefon}}">{{$designs->iletisim->telefon}}</a></h4>
                                <p>{{$translations['header_telefon_aciklama']}}</p>
                            </div>
                            <div class="text">
                               @if(!empty($designs->site_ayarlari->footer_slogan))
                                    <p>
                                        {{$designs->site_ayarlari->footer_slogan}}
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>

                    @if(isset($ladders->footer_1))
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                @if(!empty($designs->site_ayarlari->footer_menu_baslik_1))
                                    <div class="widget-title">
                                        <h3>{{$designs->site_ayarlari->footer_menu_baslik_1}}</h3>
                                    </div>
                                @endif
                                <div class="widget-content clearfix">
                                    <ul class="links-list clearfix">
                                        @foreach ($ladders->footer_1 as $key => $value)
                                            <li><a href="/{{$lang}}/@if($value->type == 'component'){{$value->component_slug}}/{{$value->slug}} @else{{$value->slug}} @endif">{{$value->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if(isset($ladders->footer_2))
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                @if(!empty($designs->site_ayarlari->footer_menu_baslik_2))
                                    <div class="widget-title">
                                        <h3>{{$designs->site_ayarlari->footer_menu_baslik_2}}</h3>
                                    </div>
                                @endif
                                <div class="widget-content clearfix">
                                    <ul class="links-list clearfix">
                                        @foreach ($ladders->footer_2 as $key => $value)
                                            <li><a href="/{{$lang}}/@if($value->type == 'component'){{$value->component_slug}}/{{$value->slug}} @else{{$value->slug}} @endif">{{$value->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
            <div class="footer-info">
                <ul class="info-list clearfix">

                    <li>
                        <i class="icon-location"></i>
                        <h6>{{$translations['adres']}}</h6>
                        <p>{{$designs->iletisim->adres}}</p>
                    </li>
                    <li>
                        <i class="icon-email-1"></i>
                        <h6>{{$translations['email']}}</h6>
                        <p><a href="mailto:{{$designs->iletisim->email}}">{{$designs->iletisim->email}}</a></p>
                    </li>
                    <li>
                        <i class="icon-clock"></i>
                        <h6>{{$translations['telefon']}}</h6>
                        <p><a href="tel:{{$designs->iletisim->telefon}}">{{$designs->iletisim->telefon}}</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="bottom-inner clearfix">
                <div class="copyright pull-left">
                    <p><a href="https://istanbulwebmaster.com" title="ISTANBUL" target="new"><img src="/assets/iwm.png"></a></p>
                </div>
                <ul class="footer-nav pull-right clearfix">

                </ul>
            </div>
        </div>
    </div>
</footer>
