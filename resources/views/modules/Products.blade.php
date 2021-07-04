@if(!empty($datas))
    <section class="team-section team-page sec-pad">
    <div class="pattern-layer" style="background-image: url({{env('SERVER_ADDRESS','NULL')}}/{{$modul->resim}});"></div>
    <div class="auto-container">
        <div class="related-products">
            <div class="sec-title-three mb-3">
                <h3>{{$modul->baslik}}</h3>
            </div>
            <div class="row clearfix">
                @foreach($datas->data as $key => $data)
                    @if($key < $modul->limit)
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="{{Helpers::ArrayImageOne($data->dynamic->resim,1)}}" alt="{{$data->dynamic->baslik}}" title="{{$data->dynamic->baslik}}">
                                        <a href="/{{$lang}}/{{$datas->component->slug}}/{{$data->static->slug}}" class="cart-btn"><i class="icon-right-arrow"></i>{{$translations['urun_detayi']}}</a>
                                    </figure>
                                    <div class="lower-content">
                                        <h6><a href="/{{$lang}}/{{$datas->component->slug}}/{{$data->static->slug}}">{{$data->dynamic->baslik}}</a></h6>
                                        <span class="price">{{$data->dynamic->fiyat}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <a href="/{{$lang}}/{{$datas->component->slug}}" class="link theme-btn style-one" style="color: #fff;">{{$translations['daha_fazla']}} <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
</section>
@endif
