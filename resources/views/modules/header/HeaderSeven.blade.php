@if ($designs->seo->durum == 'Aktif')
    @php $title = $designs->seo->title.' | '.$designs->seo->kelime1.' | '.$designs->seo->kelime2.' | '.$designs->seo->kelime3; @endphp
@else
    @php $title = $designs->seo->title; @endphp
@endif

<header class="main-header red rtl style-three style-seven">
    <!-- header-top -->
    <div class="header-top bg-color-3">
        <div class="auto-container">
            <div class="top-inner clearfix">
                <ul class="info clearfix pull-left">
                    <li><i class="icon-placeholder"></i>{{$datas->data[0]->dynamic->adres}}</a></li>
                </ul>
                <ul class="info clearfix pull-right">
                    <li><i class="icon-email-2"></i><a href="mailto:{{$datas->data[0]->dynamic->email}}">{{$datas->data[0]->dynamic->email}}</a></li>
                    <li><i class="icon-phone-call1"></i><a href="tel:{{$datas->data[0]->dynamic->telefon}}">{{$datas->data[0]->dynamic->telefon}}</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- header-lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="logo-box">
                    <figure class="logo"><a href="/{{$lang}}"><img src="{{env('SERVER_ADDRESS','NULL')}}/{{empty($designs->site_ayarlari->logo_beyaz) ? $designs->site_ayarlari->logo : $designs->site_ayarlari->logo_beyaz}}" alt="{{$title}}"></a></figure>
                </div>
                <div class="menu-area clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                @if(isset($ladders->header_menu))
                                    @foreach ($ladders->header_menu as $key => $value)
                                        @if(!empty($value->children))
                                            <li class="dropdown">
                                                <a href="/{{$lang}}/{{$value->slug}}"><span>{{$value->name}}</span></a>
                                                <ul>
                                                    @foreach ($value->children as $key => $value2)
                                                        @if(!empty($value2->children))
                                                            <li class="dropdown">
                                                                <a href="/{{$lang}}/@if($value2->type == 'component'){{$value2->component_slug}}/{{$value2->slug}} @else{{$value2->slug}} @endif"><span>{{$value2->name}}</span></a>
                                                                <ul>
                                                                    @foreach ($value2->children as $key => $value3)
                                                                        <li><a href="/{{$lang}}/@if($value3->type == 'component'){{$value3->component_slug}}/{{$value3->slug}} @else{{$value3->slug}} @endif"><span>{{$value3->name}}</span></a></li>
                                                                    @endforeach
                                                                </ul>
                                                            </li>
                                                        @else
                                                            <li><a href="/{{$lang}}/@if($value2->type == 'component'){{$value2->component_slug}}/{{$value2->slug}} @else{{$value2->slug}} @endif"><span>{{$value2->name}}</span></a></li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @else
                                            <li><a href="/{{$lang}}/@if($value->type == 'component'){{$value->component_slug}}/{{$value->slug}} @else{{$value->slug}} @endif">{{$value->name}}</a></li>
                                        @endif
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
                <ul class="other-option clearfix">
                    <li class="share-option"><a href="index-3.html"><i class="icon-share"></i></a></li>
                    <li class="search-box-outer">
                        <div class="dropdown">
                            <button class="search-box-btn" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-search"></i></button>
                            <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu3">
                                <div class="form-container">
                                    <form method="post" action="/">
                                        <div class="form-group">
                                            <input type="search" name="search-field" value="" placeholder="{{$translations['ara']}}" required="">
                                            <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="logo-box">
                    <figure class="logo"><a href="/{{$lang}}"><img src="{{env('SERVER_ADDRESS','NULL')}}/{{empty($designs->site_ayarlari->logo_beyaz) ? $designs->site_ayarlari->logo : $designs->site_ayarlari->logo_beyaz}}" alt="{{$title}}"></a></figure>
                </div>
                <div class="menu-area clearfix">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
                <ul class="other-option clearfix">
                    <li class="share-option"><a href="/"><i class="icon-share"></i></a></li>
                    <li class="search-box-outer">
                        <div class="dropdown">
                            <button class="search-box-btn" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-search"></i></button>
                            <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu4">
                                <div class="form-container">
                                    <form method="post" action="http://azim.commonsupport.com/Blackcats/blog.html">
                                        <div class="form-group">
                                            <input type="search" name="search-field" value="" placeholder="{{$translations['ara']}}" required="">
                                            <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    <nav class="menu-box">
        <div class="nav-logo"><a href="/{{$lang}}"><img src="{{env('SERVER_ADDRESS','NULL')}}/{{empty($designs->site_ayarlari->logo_beyaz) ? $designs->site_ayarlari->logo : $designs->site_ayarlari->logo_beyaz}}" alt="{{$title}}"></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>{{$translations['iletisim']}}</h4>
            <ul>
                <li>{{$datas->data[0]->dynamic->adres}}</li>
                <li><a href="tel:{{$datas->data[0]->dynamic->telefon}}">{{$datas->data[0]->dynamic->telefon}}</a></li>
                <li><a href="mailto:{{$datas->data[0]->dynamic->email}}">{{$datas->data[0]->dynamic->email}}</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                @if(!empty($datas->data[0]->dynamic->facebook))<li><a href="{{$datas->data[0]->dynamic->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li> @endif
                @if(!empty($datas->data[0]->dynamic->twitter))<li><a href="{{$datas->data[0]->dynamic->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a></li> @endif
                @if(!empty($datas->data[0]->dynamic->instagram))<li><a href="{{$datas->data[0]->dynamic->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a></li> @endif
                @if(!empty($datas->data[0]->dynamic->youtube))<li><a href="{{$datas->data[0]->dynamic->youtube}}" target="_blank"><i class="fab fa-youtube"></i></a></li> @endif
            </ul>
        </div>
    </nav>
</div>
