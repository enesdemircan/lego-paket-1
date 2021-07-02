@if(!empty($datas))
    <section class="team-section team-page sec-pad">
    <div class="pattern-layer" style="background-image: url({{env('SERVER_ADDRESS','NULL')}}/{{$modul->resim}});"></div>
    <div class="auto-container">
        <div class="related-products">
            <div class="sec-title-three mb-3">
                <h3>{{$modul->baslik}}</h3>
            </div>
            <div class="row clearfix">
                @foreach($datas as $key => $data)
                    @if($key < $modul->limit)
                        @php $component_slug = $data->component_slug; @endphp
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="{{Helpers::ArrayImageOne($data->resim,1)}}" alt="{{$data->baslik}}" title="{{$data->baslik}}">
                                        <a href="/{{$lang}}/{{$data->component_slug}}/{{$data->slug}}" class="cart-btn"><i class="icon-right-arrow"></i>{{$translations['urun_detayi']}}</a>
                                    </figure>
                                    <div class="lower-content">
                                        <h6><a href="/{{$lang}}/{{$data->component_slug}}/{{$data->slug}}">{{$data->baslik}}</a></h6>
                                        <span class="price">{{$data->fiyat}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <a href="/{{$lang}}/{{$component_slug}}" class="link theme-btn style-one" style="color: #fff;">{{$translations['daha_fazla']}} <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
</section>
@endif
