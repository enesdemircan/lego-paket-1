@if(isset($datas))
    <section class="banner-section style-three {{$styleClass}}">
        <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
            @foreach($datas as $data)
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url({{env('SERVER_ADDRESS','NULL')}}/{{$data->resim}})"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            @if(!empty($data->baslik))
                            <h2>{{$data->baslik}}</h2>
                            @endif

                            @if(!empty($data->spot))
                            <p>{{$data->spot}}</p>
                            @endif

                            @if(!empty($data->buton_baslik) && !empty($data->buton_link))
                            <div class="btn-box"><a href="{{$data->buton_link}}" class="theme-btn style-one">{{$data->buton_baslik}}</a></div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endif
