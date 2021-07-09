@extends('theme.master')

@if(isset($PageNumber))
    @section('title', $multiple->component->seo->title.' - '.\Illuminate\Support\Str::title($translations['sayfa']).' '.$PageNumber)
@else
    @section('title', $multiple->component->seo->title)
@endif

@section('content')

    <!-- Page Title -->
    <section class="page-title {{$styleClass}}" style="background-image: url(assets/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="title">
                    <h1>{{$multiple->component->seo->title}}</h1>
                </div>

            </div>
        </div>
    </section>
    <!-- End Page Title -->
    <!-- shop-page-section -->
    <section class="shop-page-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-9 col-md-12 col-sm-12 content-side">
                    <div class="our-shop">
                        <div class="item-shorting clearfix">

                            <div class="text pull-left">
                                <h6>{{$multiple->component->seo->title}}</h6>
                            </div>
                            <div class="short-box pull-right clearfix">
                                <p>{{$translations['kategoriler']}}:</p>
                                <!-- JUMP MENÜ  mobilde ktegori geçişini rahatlatır -->
                                <div class="select-box">
                                    <select class="wide" onchange="window.location.href = window.location.origin+this.value;">
                                        @foreach ($ladders->urun_kategorileri as $key => $value)
                                            <option @if($key == 0) data-display="{{$translations['seciniz']}}" @endif value="/{{$lang}}/{{$value->slug}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            @if(isset($multiple->data))

                                @foreach ($multiple->data as $key => $value)

                                    <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                        <div class="shop-block-one">
                                            <div class="inner-box">
                                                <figure class="image-box">

                                                    <!-- MÜŞTERİLER  kare, diktörgen  saçma sapan resimler yüklese bile ölçüleri FİXleyecek bir css lazım. -->
                                                    <!-- MÜŞTERİLER  kare, diktörgen  saçma sapan resimler yüklese bile ölçüleri FİXleyecek bir css lazım. -->
                                                    <!-- MÜŞTERİLER  kare, diktörgen  saçma sapan resimler yüklese bile ölçüleri FİXleyecek bir css lazım. -->
                                                    @if(!empty($value->dynamic->resim))
                                                        <a href="/{{$lang}}/{{$multiple->component->slug}}/{{$value->static->slug}}"><img src="{{env('SERVER_ADDRESS','NULL')}}/{{$designs->site_ayarlari->yukleniyor}}" data-src="{{Helpers::ArrayImageOne($value->dynamic->resim,1)}}" class="img-responsive lazy img-fullwidth" width="300" height="300" title="{{$value->dynamic->baslik}}" alt="{{$value->dynamic->baslik}}"></a>
                                                    @else
                                                        <a href="/{{$lang}}/{{$multiple->component->slug}}/{{$value->static->slug}}"><img src="/assets/images/yukleniyor-foto.jpg" data-src="/assets/images/resim-yok.png" class="img-responsive lazy img-fullwidth" width="300" height="300" title="{{$value->dynamic->baslik}}" alt="{{$value->dynamic->baslik}}"></a>
                                                    @endif
                                                    <a href="/{{$lang}}/{{$multiple->component->slug}}/{{$value->static->slug}}" class="cart-btn"><i class="fas fa-angle-right"></i>{{$translations['urun_detayi']}}</a>
                                                </figure>
                                                <div class="lower-content">

                                                    <h6><a href="/{{$lang}}/{{$multiple->component->slug}}/{{$value->static->slug}}">{{$value->dynamic->baslik}}</a></h6>
                                                    @if ($value->dynamic->fiyat !='')
                                                        <span class="price">{{$value->dynamic->fiyat}} {{$designs->e_ticaret->para_birimi}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <h5>{{$translations['urun_bulunamadi']}}</h5>
                            @endif
                        </div>

                        <div class="pagination-wrapper centred">
                            <ul class="pagination clearfix">

                                @foreach($multiple->links as $order => $links)
                                    @if($links->label == 'pagination.previous')
                                        <li><a {!! Helpers::GetApiUpdatePageUrl($links->url,$multiple->component->slug) !!}><i class="fas fa-angle-left"></i></a></li>
                                    @elseif($links->label == 'pagination.next')
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


                <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                    <div class="shop-sidebar">
                        <!--
                        <div class="sidebar-search">
                            <form action="http://azim.commonsupport.com/Blackcats/shop.html" method="post" class="search-form">
                                <div class="form-group">
                                    <input type="search" name="search-field" placeholder="Search..." required="">
                                    <button><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                        -->
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h4>{{$translations['kategoriler']}}</h4>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <!-- ALT KATEGORİ kullanılırsa  çalışacak bir menü lazım -->
                                    <!-- ALT KATEGORİ kullanılırsa  çalışacak bir menü lazım -->
                                    @foreach ($ladders->urun_kategorileri as $key => $value)
                                        <li><a href="/{{$lang}}/{{$value->slug}}">{{$value->name}}</a></li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>


                        <div class="sidebar-widget post-widget">
                            <div class="widget-title">
                                <h4>{{$translations['sonurunler']}}</h4>
                            </div>
                            <div class="post-inner">
                                @if(isset($multiple->data))
                                    @foreach ($multiple->data as $key => $value)
                                        @if ($value->dynamic->durum =='Aktif')
                                            @if ($key < 4 )

                                                <div class="post">
                                                    <figure class="post-thumb"><a href="{{$lang}}/{{$multiple->component->slug}}/{{$value->static->slug}}">

                                                            @if(!empty($value->dynamic->resim))
                                                                @php $resimler=explode(',',$value->dynamic->resim);  @endphp
                                                                @foreach ($resimler as $key=>$resim)
                                                                    @if ($key < 1 )
                                                                        <img width="100" height="100" src="{{Helpers::ArrayImageOne($resim,1)}}" data-src="{{Helpers::ArrayImageOne($resim,1)}}" class="thumbnail lazy">
                                                                    @endif
                                                                @endforeach
                                                            @else
                                                                <img width="100" height="100" src="/assets/images/yukleniyor-foto.jpg" data-src="/assets/images/resim-yok.png" class="thumbnail lazy">
                                                            @endif

                                                        </a></figure>
                                                    <a href="{{$lang}}/{{$multiple->component->slug}}/{{$value->static->slug}}">{{$value->dynamic->baslik}}</a>
                                                    <span class="price">{{$value->dynamic->fiyat}} {{$designs->e_ticaret->para_birimi}}</span>
                                                </div>

                                            @endif
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop-page-section end -->

@endsection

