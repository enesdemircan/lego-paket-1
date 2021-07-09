@if(!empty($datas->data))
    <section class="banner-section style-five {{$styleClass}}">
        <div class="banner-carousel owl-theme owl-carousel dots-style-one">
            @foreach($datas->data as $data)
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url({{env('SERVER_ADDRESS','NULL')}}/{{$data->dynamic->resim}})"></div>
                    <div class="auto-container">
                        <div class="row clearfix">
                            <div class="col-xl-6 col-lg-12 col-md-12 content-column">
                                <div class="content-box">
                                    <div class="banner-content">
                                        @if(!empty($data->dynamic->baslik))
                                            <h2>{{$data->dynamic->baslik}}</h2>
                                        @endif

                                        @if(!empty($data->dynamic->spot))
                                            <p>{{$data->dynamic->spot}}</p>
                                        @endif

                                        @if(empty($data->dynamic->video_link))
                                            @if(!empty($data->dynamic->buton_baslik) && !empty($data->dynamic->buton_link))
                                                <div class="btn-box"><a href="{{$data->dynamic->buton_link}}" class="theme-btn">{{$data->dynamic->buton_baslik}}</a></div>
                                            @endif
                                        @else
                                            <div class="btn-box">
                                                <a href="{{$data->dynamic->video_link}}" class="theme-btn sliderVideoButton" data-caption="">{{$data->dynamic->buton_baslik}}</a>
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
