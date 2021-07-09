@if(!empty($datas->data))
    <section class="chooseus-section sec-pad bg-color-3">
        <div class="pattern-layer" style="background-image: url({{env('SERVER_ADDRESS','NULL')}}/{{$modul->resim}});"></div>
        <div class="auto-container">
            <div class="four-item-carousel owl-carousel owl-theme owl-dots-none">
                @foreach($datas->data as $key => $data)
                    @if($key < $modul->limit)
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                @if(!empty($data->dynamic->ikon))
                                    <div class="light-icon"><i class="{{$data->dynamic->ikon}}"></i></div>
                                    <div class="icon-box"><i class="{{$data->dynamic->ikon}}"></i></div>
                                @endif

                                @if(!empty($data->dynamic->baslik))
                                    <h4>{{$data->dynamic->baslik}}</h4>
                                @endif

                                @if(!empty($data->dynamic->spot))
                                    <p>{{$data->dynamic->spot}}</p>
                                @endif
                                @if(!empty($data->dynamic->buton_baslik) && !empty($data->dynamic->buton_link))
                                    <a href="{{$data->dynamic->buton_link}}" class="theme-btn style-one">{{$data->dynamic->buton_baslik}}</a>
                                @else
                                    <a href="/{{$lang}}/{{$datas->component->slug}}/{{$data->static->slug}}" class="theme-btn style-one">{{($translations['detay'])}}</a>
                                @endif
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endif
