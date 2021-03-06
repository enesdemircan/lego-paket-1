@extends('theme.master')

@section('title', $single->data->dynamic->baslik)

@section('content')

    <section class="shop-details {{$styleClass}} sec-pad">
        <div class="auto-container">
            <div class="product-details-content">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <figure class="image-box">
                            @if(!empty($single->data->dynamic->resim))
                                @php $resimler=explode(',',$single->data->dynamic->resim) @endphp
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
                                <h3>{{$single->data->dynamic->baslik}}</h3>

                                <h4>{{$single->data->dynamic->fiyat}}</h4>
                                <!-- <div class="share-box"><a href="shop-details.html"><i class="fas fa-share-alt"></i></a></div> -->
                            </div>
                            <div class="text">
                                <p>{{$single->data->dynamic->spot_baslik}}</p>
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
                                @php $categori = Helpers::ProductsCateries($single->data->dynamic->kategori); @endphp

                                <li><h6>{{$translations['kategorisi']}}</h6></li>
                                <li><a href="{{$lang}}/{{$categori['slug']}}"> {{$categori['name']}} </a></li>
                                <li><h6>{{$translations['stok_durumu']}}</h6></li>
                                <li>
                                    @if($single->data->dynamic->stok_durumu == 'Mevcut')
                                        {{$translations['mevcut']}}
                                    @elseif($single->data->dynamic->stok_durumu == 'Stokta Yok')
                                        {{$translations['stokta_yok']}}
                                    @elseif($single->data->dynamic->stok_durumu == '??n Sipari??')
                                        {{$translations['on_siparis']}}
                                    @endif
                                </li>
                                <!--<h3> soc??al share eklenecek  </h3>-->
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
                                {!! $single->data->dynamic->detay !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(!empty($otherProduct->data))
                <div class="related-products">
                    <div class="title">
                        <h3>{{$translations['ilgili_urunler']}}</h3>
                    </div>

                    <div class="row clearfix">
                        @foreach ($otherProduct->data as $key => $value)
                            <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                                <div class="shop-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box">

                                            <!-- M????TER??LER  kare, dikt??rgen  sa??ma sapan resimler y??klese bile ??l????leri F??Xleyecek bir css laz??m. -->
                                            <!-- M????TER??LER  kare, dikt??rgen  sa??ma sapan resimler y??klese bile ??l????leri F??Xleyecek bir css laz??m. -->
                                            <!-- M????TER??LER  kare, dikt??rgen  sa??ma sapan resimler y??klese bile ??l????leri F??Xleyecek bir css laz??m. -->
                                            @if(!empty($value->dynamic->resim))
                                                <a href="/{{$lang}}/{{$otherProduct->component->slug}}/{{$value->static->slug}}"><img src="{{Helpers::ArrayImageOne($value->dynamic->resim,1)}}" data-src="{{Helpers::ArrayImageOne($value->dynamic->resim,1)}}" class="img-responsive lazy img-fullwidth" width="300" height="300" alt="{{$value->dynamic->baslik}}"></a>
                                            @else
                                                <a href="/{{$lang}}/{{$otherProduct->component->slug}}/{{$value->static->slug}}"><img src="/assets/images/yukleniyor-foto.jpg" data-src="/assets/images/resim-yok.png" class="img-responsive lazy img-fullwidth" width="300" height="300" alt="{{$value->dynamic->baslik}}"></a>
                                            @endif
                                            <a href="/{{$lang}}/{{$otherProduct->component->slug}}/{{$value->static->slug}}" class="cart-btn"><i class="fas fa-angle-right"></i>{{$translations['urun_detayi']}}</a>
                                        </figure>
                                        <div class="lower-content">

                                            <h6><a href="/{{$lang}}/{{$otherProduct->component->slug}}/{{$value->static->slug}}">{{$value->dynamic->baslik}}</a></h6>
                                            @if ($value->dynamic->fiyat !='')
                                                <span class="price">{{$value->dynamic->fiyat}} {{$designs->e_ticaret->para_birimi}}</span>
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
