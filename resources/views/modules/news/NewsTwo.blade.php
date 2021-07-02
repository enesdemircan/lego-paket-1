@if(!empty($datas))
    <section class="history-section sec-pad">
        <div class="auto-container">
            <div class="history-carousel owl-carousel owl-theme owl-dots-none">
                @foreach($datas as $key => $data)
                    @if($key < $modul->limit)
                        <div class="history-block">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{Helpers::ArrayImageOne($data->resim)}}" alt="{{$data->baslik}}" title="{{$data->baslik}}"></figure>
                                <div class="content-box">
                                    <div class="upper">
                                        <h3>{{$data->baslik}}</h3>
                                    </div>
                                    @if(isset($data->detay))
                                        <div class="text">
                                            <p>
                                                {{\Illuminate\Support\Str::words(strip_tags($data->detay), 50,'...')}}
                                                <a class="enable-link" href="/{{$lang}}/{{$data->component_slug}}/{{$data->slug}}">{{($translations['detay'])}}</a>
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
