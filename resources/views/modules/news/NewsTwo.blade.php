@if(!empty($datas->data))
    <section class="history-section sec-pad">
        <div class="auto-container">
            <div class="history-carousel owl-carousel owl-theme owl-dots-none">
                @foreach($datas->data as $key => $data)
                    @if($key < $modul->limit)
                        <div class="history-block">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{Helpers::ArrayImageOne($data->dynamic->resim)}}" alt="{{$data->dynamic->baslik}}" title="{{$data->dynamic->baslik}}"></figure>
                                <div class="content-box">
                                    <div class="upper">
                                        <h3>{{$data->dynamic->baslik}}</h3>
                                    </div>
                                    @if(isset($data->dynamic->detay))
                                        <div class="text">
                                            <p>
                                                {{\Illuminate\Support\Str::words(strip_tags($data->dynamic->detay), 50,'...')}}
                                                <a class="enable-link" href="/{{$lang}}/{{$datas->component->slug}}/{{$data->static->slug}}">{{($translations['detay'])}}</a>
                                            </p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endif
