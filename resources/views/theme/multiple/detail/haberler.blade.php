@extends('theme.master')

@section('title', $single->baslik)

@section('content')
    <section class="page-title {{$styleClass}}" style="background-image: url(/assets/images/background/team-bg.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="title">
                    <h1>{{$single->baslik}}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="service-details sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    @if(!empty($single->resim))
                        @php $resimler=explode(',',$single->resim) @endphp
                        <section class="banner-section">
                            <div class="banner-carousel owl-theme owl-carousel dots-style-one">
                                @foreach($resimler as $key=>$resim)
                                    <div class="slide-item">
                                        <div class="image-layer" style="background-image:url({{env('SERVER_ADDRESS','NULL')}}/{{$resim}})"></div>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    @endif

                    <div class="service-details-content">
                        <div class="content-one">
                            <div class="text mt-5">
                                <h2>{{$single->baslik}}</h2>
                                <hr>
                                {!! $single->detay !!}
                            </div>
                        </div>

                        @if(!empty($single->video))
                            <hr>
                            <section class="video-section">
                                <div class="inner-container">
                                    <div class="video-inner" style="background-image: url({{Helpers::get_video_thumbnail($single->video)}});">
                                        <div class="video-btn">
                                            <a href="{{$single->video}}" class="lightbox-image" data-caption="">
                                                <i class="fas fa-play"></i>
                                                <span class="border-animation border-1"></span>
                                                <span class="border-animation border-2"></span>
                                                <span class="border-animation border-3"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        @endif

                        @if(!empty($single->dosya))
                            <hr>
                            @php $dosyalar=explode(',',$single->dosya) @endphp
                            <div class="content-four">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 single-column">
                                        @foreach($dosyalar as $key=>$dosya)
                                            <div class="single-item mb-3">
                                                <div class="icon-box"><i class="icon-smartphone"></i></div>
                                                <h5>{{$single->baslik}}<br>{{$translations['dosyayi_indir']}}</h5>
                                                <div class="link"><a href="{{env('SERVER_ADDRESS','NULL')}}/{{$dosya}}" target="new"><i class="fas fa-angle-right"></i></a></div>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12  sidebar-side">
                    <div class="service-sidebar default-sidebar">
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>{{$translations['haberler']}}</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    @foreach ($multiple as $key => $value)
                                        <li><a href="/{{$lang}}/{{$value->component_slug}}/{{$value->slug}}" class=" @if($value->baslik == $single->baslik) current @endif">{{$value->baslik}}<i class="icon-checked"></i></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
