@if(!empty($datas))
    <section class="banner-section style-five {{$styleClass}}">
        <div class="banner-carousel owl-theme owl-carousel dots-style-one">
            @foreach($datas as $data)
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url({{env('SERVER_ADDRESS','NULL')}}/{{$data->resim}})"></div>
                    <div class="auto-container">
                        <div class="row clearfix">
                            <div class="col-xl-6 col-lg-12 col-md-12 content-column">
                                <div class="content-box">
                                    <div class="banner-content">
                                        @if(!empty($data->baslik))
                                            <h2>{{$data->baslik}}</h2>
                                        @endif

                                        @if(!empty($data->spot))
                                            <p>{{$data->spot}}</p>
                                        @endif

                                        @if(empty($data->video_link))
                                            @if(!empty($data->buton_baslik) && !empty($data->buton_link))
                                                <div class="btn-box"><a href="{{$data->buton_link}}" class="theme-btn">{{$data->buton_baslik}}</a></div>
                                            @endif
                                        @else
                                            <div class="btn-box">
                                                <a href="{{$data->video_link}}" class="theme-btn sliderVideoButton" data-caption="">{{$data->buton_baslik}}</a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endif
