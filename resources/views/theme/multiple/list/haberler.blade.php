@extends('theme.master')

@if(isset($PageNumber))
    @section('title', $multiple->component->seo->title.' - '.\Illuminate\Support\Str::title($translations['sayfa']).' '.$PageNumber)
@else
    @section('title', $multiple->component->seo->title)
@endif

@section('content')

<section class="page-title {{$styleClass}}" style="background-image: url(assets/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <div class="title">
                <h1>{{$multiple->component->seo->title}}</h1>
            </div>

        </div>
    </div>
</section>

<section class="sidebar-page-container sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            @if(isset($multiple->data))
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-sidebar-content">

                        @foreach ($multiple->data as $key => $value)
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    @if(!empty($value->dynamic->resim))
                                        <figure class="image-box">
                                            <img src="{{env('SERVER_ADDRESS','NULL')}}/{{$designs->site_ayarlari->yukleniyor}}" data-src="{{Helpers::ArrayImageOne($value->dynamic->resim,1)}}" title="{{$value->dynamic->baslik}}" class="lazy" alt="{{$value->dynamic->baslik}}">
                                            <a href="/{{$lang}}/{{$multiple->component->slug}}/{{$value->static->slug}}" class="link"><i class="icon-zoom-in"></i></a>
                                        </figure>
                                    @endif

                                    <div class="lower-content">
                                        <div class="inner">
                                            <h3><a href="/{{$lang}}/{{$multiple->component->slug}}/{{$value->static->slug}}">{{$value->dynamic->baslik}}</a></h3>
                                            <div class="link"><a href="/{{$lang}}/{{$multiple->component->slug}}/{{$value->static->slug}}">{{($translations['detay'])}}<i class="fas fa-angle-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="pagination-wrapper centred col-12">
                            <ul class="pagination clearfix">

                                @foreach($multiple->links as $order => $links)
                                    @if($order == 0)
                                        <li><a {!! Helpers::GetApiUpdatePageUrl($links->url,$multiple->component->slug) !!}><i class="fas fa-angle-left"></i></a></li>
                                    @elseif($order == ($multiple->last_page + 1))
                                        <li><a {!! Helpers::GetApiUpdatePageUrl($links->url,$multiple->component->slug) !!}><i class="fas fa-angle-right"></i></a></li>
                                    @else
                                        <li>
                                            <a {!! Helpers::GetApiUpdatePageUrl($links->url,$multiple->component->slug) !!} @if($links->active == 1) class="current" @endif>
                                                {{$links->label}}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            @endif
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="blog-sidebar default-sidebar ml-30">
                        @if(isset($multiple->data))
                            <div class="sidebar-widget post-widget">
                                <div class="widget-title">
                                    <h3>{{($translations['son_haberler'])}}</h3>
                                </div>

                                <div class="post-inner">
                                    <div class="single-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                                        @foreach ($multiple->data as $key => $value)
                                            @if($key < 3)
                                                <div class="post">
                                                    @if(!empty($value->dynamic->resim))
                                                        <figure class="image-box">
                                                            <img src="{{env('SERVER_ADDRESS','NULL')}}/{{$designs->site_ayarlari->yukleniyor}}" data-src="{{Helpers::ArrayImageOne($value->dynamic->resim,1)}}" title="{{$value->dynamic->baslik}}" class="lazy" alt="{{$value->dynamic->baslik}}">
                                                            <a href="/{{$lang}}/{{$multiple->component->slug}}/{{$value->static->slug}}" class="link"><i class="fas fa-angle-right"></i>{{($translations['detay'])}}</a>
                                                        </figure>
                                                    @endif
                                                    <div class="post-content">
                                                        <h5><a href="/{{$lang}}/{{$multiple->component->slug}}/{{$value->static->slug}}">{{$value->dynamic->baslik}}</a></h5>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="sidebar-widget tags-widget">
                            <div class="widget-title">
                                <h3>{{($translations['etiketler'])}}</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="tags-list clearfix">
                                    @foreach(explode(',',$designs->site_ayarlari->keywords) as $key => $value)
                                        <li><a href="#">{{$value}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
@stop
