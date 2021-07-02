@extends('theme.master')

@section('title', $translations['hizmetler'])

@section('content')

    <section class="page-title {{$styleClass}}" style="background-image: url(assets/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="title">
                    <h1>{{$translations['hizmetler']}}</h1>
                </div>

            </div>
        </div>
    </section>

    <section class="news-section blog-grid sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                @if(isset($multiple))
                    @foreach ($multiple as $key => $value)
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        @if(!empty($value->resim))
                                            <a href="/{{$lang}}/{{$value->component_slug}}/{{$value->slug}}"><img src="{{env('SERVER_ADDRESS','NULL')}}/{{$designs->site_ayarlari->yukleniyor}}" data-src="{{Helpers::ArrayImageOne($value->resim,1)}}" title="{{$value->baslik}}" class="lazy" alt="{{$value->baslik}}"></a>
                                        @endif
                                        <a href="/{{$lang}}/{{$value->component_slug}}/{{$value->slug}}" class="link"><i class="icon-zoom-in"></i></a>
                                    </figure>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <h5><a href="/{{$lang}}/{{$value->component_slug}}/{{$value->slug}}">{{$value->baslik}}</a></h5>
                                            <div class="link"><a href="/{{$lang}}/{{$value->component_slug}}/{{$value->slug}}">{{($translations['detay'])}}<i class="fas fa-angle-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@stop
