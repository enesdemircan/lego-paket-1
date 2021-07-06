@if(!empty($datas->data))
    <section class="banner-section style-three {{$styleClass}}">
        <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
            @foreach($datas->data as $data)
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url({{ Media::getImage(env('SERVER_ADDRESS','NULL').'/'.$data->dynamic->resim, 1920, 500) }})"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            @if(!empty($data->dynamic->baslik))
                                <h2>{{$data->dynamic->baslik}}</h2>
                            @endif

                            @if(!empty($data->dynamic->spot))
                                <p>{{$data->dynamic->spot}}</p>
                            @endif

                            @if(empty($data->dynamic->video_link))
                                @if(!empty($data->dynamic->buton_baslik) && !empty($data->dynamic->buton_link))
                                    <div class="btn-box"><a href="{{$data->dynamic->buton_link}}" class="theme-btn style-one">{{$data->dynamic->buton_baslik}}</a></div>
                                @endif
                            @else
                                <div class="btn-box">
                                    <a href="{{$data->dynamic->video_link}}" class="theme-btn style-one sliderVideoButton" data-caption="">{{$data->dynamic->buton_baslik}}</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endif
