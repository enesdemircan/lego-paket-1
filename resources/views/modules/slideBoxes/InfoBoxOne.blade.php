@if(!empty($datas))
    <section class="chooseus-section sec-pad bg-color-3">
        <div class="pattern-layer" style="background-image: url({{env('SERVER_ADDRESS','NULL')}}/{{$modul->resim}});"></div>
        <div class="auto-container">
            <div class="four-item-carousel owl-carousel owl-theme owl-dots-none">
                @foreach($datas as $key => $data)
                    @if($key < $modul->limit)
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                @if(!empty($data->ikon))
                                    <div class="light-icon"><i class="{{$data->ikon}}"></i></div>
                                    <div class="icon-box"><i class="{{$data->ikon}}"></i></div>
                                @endif

                                @if(!empty($data->baslik))
                                    <h4>{{$data->baslik}}</h4>
                                @endif

                                @if(!empty($data->spot))
                                    <p>{{$data->spot}}</p>
                                @endif
                                @if(!empty($data->buton_baslik) && !empty($data->buton_link))
                                    <a href="{{$data->buton_link}}" class="theme-btn style-one">{{$data->buton_baslik}}</a>
                                @else
                                    <a href="/{{$lang}}/{{$data->component_slug}}/{{$data->slug}}" class="theme-btn style-one">{{($translations['detay'])}}</a>
                                @endif
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endif
