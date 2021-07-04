@if(!empty($datas->data))
    <section class="service-section sec-pad">
        <div class="auto-container">
            <div class="sec-title centred">
                <div class="top-title">
                    <div class="shape">
                        <div class="line line-1"></div>
                        <div class="line line-2"></div>
                        <div class="line line-3"></div>
                        <div class="line line-4"></div>
                        <div class="bg-shape" style="background-image: url(/assets/images/icons/bg-shape.png);"></div>
                    </div>
                    <p>{{$modul->baslik}}</p>
                </div>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                @foreach($datas->data as $key => $data)
                    @if($key < $modul->limit)
                        <div class="service-block-one">
                            <div class="inner-box" style="background-image: url({{Helpers::ArrayImageOne($data->dynamic->resim,1)}});height: 370px">
                                <div class="inner-box" style="height: 290px;">
                                    <div class="content-box">
                                        @if(!empty($data->dynamic->baslik))
                                            <h3>{{$data->dynamic->baslik}}</h3>
                                        @endif
                                        @if(!empty($data->dynamic->buton_baslik) && !empty($data->dynamic->buton_link))
                                            <div class="link"><a href="{{$data->dynamic->buton_link}}">{{$data->dynamic->buton_baslik}} <i class="fas fa-angle-right"></i></a></div>
                                        @endif
                                    </div>
                                    <div class="overlay-content">
                                        @if(!empty($data->dynamic->baslik))
                                            <h3>{{$data->dynamic->baslik}}</h3>
                                        @endif
                                        @if(!empty($data->dynamic->buton_baslik) && !empty($data->dynamic->buton_link))
                                            <div class="btn-box"><a href="{{$data->dynamic->buton_link}}">{{$data->dynamic->buton_baslik}} <i class="fas fa-angle-right"></i></a></div>
                                        @else
                                            <div class="btn-box"><a href="/{{$lang}}/{{$datas->component->slug}}/{{$data->static->slug}}">{{($translations['detay'])}} <i class="fas fa-angle-right"></i></a></div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endif
