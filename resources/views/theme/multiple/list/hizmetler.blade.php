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

    <section class="news-section blog-grid sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
               @if(isset($multiple->data))
                    @foreach ($multiple->data as $key => $value)
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        @if(!empty($value->dynamic->resim))
                                            <a href="/{{$lang}}/{{$multiple->component->slug}}/{{$value->static->slug}}"><img src="{{env('SERVER_ADDRESS','NULL')}}/{{$designs->site_ayarlari->yukleniyor}}" data-src="{{Helpers::ArrayImageOne($value->dynamic->resim,1)}}" title="{{$value->dynamic->baslik}}" class="lazy" alt="{{$value->dynamic->baslik}}"></a>
                                        @endif
                                        <a href="/{{$lang}}/{{$multiple->component->slug}}/{{$value->static->slug}}" class="link"><i class="icon-zoom-in"></i></a>
                                    </figure>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <h5><a href="/{{$lang}}/{{$multiple->component->slug}}/{{$value->static->slug}}">{{$value->dynamic->baslik}}</a></h5>
                                            <div class="link"><a href="/{{$lang}}/{{$multiple->component->slug}}/{{$value->static->slug}}">{{($translations['detay'])}}<i class="fas fa-angle-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
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
    </section>
@stop
