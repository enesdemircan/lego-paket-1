@extends('theme.master')

@section('title', $single->baslik)

@section('content')

    <section class="shop-details {{$styleClass}} sec-pad">
        <div class="auto-container">
            <div class="product-details-content">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <figure class="image-box">
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
                        </figure>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="product-details">
                            <div class="title-box">
                                <h3>{{$single->baslik}}</h3>

                                <h4>{{$single->fiyat}}</h4>
                                <!-- <div class="share-box"><a href="shop-details.html"><i class="fas fa-share-alt"></i></a></div> -->
                            </div>
                            <div class="text">
                                <p>{{$single->spot_baslik}}</p>
                            </div>

<!--
                            <div class="addto-cart-box">
                                <ul class="clearfix">
                                    <li class="item-quantity"><input class="quantity-spinner" type="text" value="1" name="quantity"></li>
                                    <li class="cart-btn"><button type="button" class="theme-btn style-one">Add To Cart</button></li>
                                    <li class="like-btn"><a href="shop-details.html"><i class="icon-increase"></i></a></li>
                                </ul>
                            </div>
                            -->
                            <ul class="categry-box">
                                @php $categori = Helpers::ProductsCateries($single->kategori); @endphp

                                <li><h6>{{$translations['kategorisi']}}</h6></li>
                                <li><a href="{{$lang}}/{{$categori['slug']}}"> {{$categori['name']}} </a></li>
                                <li><h6>{{$translations['stok_durumu']}}</h6></li>
                                <li>
                                    @if($single->stok_durumu == 'Mevcut')
                                        {{$translations['mevcut']}}
                                    @elseif($single->stok_durumu == 'Stokta Yok')
                                        {{$translations['stokta_yok']}}
                                    @elseif($single->stok_durumu == 'Ön Sipariş')
                                        {{$translations['on_siparis']}}
                                    @endif
                                </li>
                                <!--<h3> socıal share eklenecek  </h3>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-discription">
                <div class="tabs-box">

                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="text">
                                {!! $single->detay !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(!empty($otherProduct))
                <div class="related-products">
                    <div class="title">
                        <h3>{{$translations['ilgili_urunler']}}</h3>
                    </div>

                    <div class="row clearfix">
                        @foreach ($otherProduct as $key => $value)
                            <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                                <div class="shop-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box">

                                            <!-- MÜŞTERİLER  kare, diktörgen  saçma sapan resimler yüklese bile ölçüleri FİXleyecek bir css lazım. -->
                                            <!-- MÜŞTERİLER  kare, diktörgen  saçma sapan resimler yüklese bile ölçüleri FİXleyecek bir css lazım. -->
                                            <!-- MÜŞTERİLER  kare, diktörgen  saçma sapan resimler yüklese bile ölçüleri FİXleyecek bir css lazım. -->
                                            @if(!empty($value->resim))
                                                <a href="/{{$lang}}/{{$value->component_slug}}/{{$value->slug}}"><img src="{{Helpers::ArrayImageOne($value->resim,1)}}" data-src="{{Helpers::ArrayImageOne($value->resim,1)}}" class="img-responsive lazy img-fullwidth" width="300" height="300" alt="{{$value->baslik}}"></a>
                                            @else
                                                <a href="/{{$lang}}/{{$value->component_slug}}/{{$value->slug}}"><img src="/assets/images/yukleniyor-foto.jpg" data-src="/assets/images/resim-yok.png" class="img-responsive lazy img-fullwidth" width="300" height="300" alt="{{$value->baslik}}"></a>
                                            @endif
                                            <a href="/{{$lang}}/{{$value->component_slug}}/{{$value->slug}}" class="cart-btn"><i class="fas fa-angle-right"></i>{{$translations['urun_detayi']}}</a>
                                        </figure>
                                        <div class="lower-content">

                                            <h6><a href="/{{$lang}}/{{$value->component_slug}}/{{$value->slug}}">{{$value->baslik}}</a></h6>
                                            @if ($value->fiyat !='')
                                                <span class="price">{{$value->fiyat}} {{$designs->e_ticaret->para_birimi}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>
@stop
