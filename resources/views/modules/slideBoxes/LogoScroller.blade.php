@if(!empty($datas->data))
    <section class="clients-section style-one">
        <div class="auto-container">
            <div class="sec-title-two centred">
                <p>{{$modul->baslik}}</p>
            </div>
            <div class="clients-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                @foreach($datas->data as $key => $data)
                    @if($key < $modul->limit)
                        <figure class="clients-logo-box">
                            <a href="#">
                                <img src="{{Helpers::ArrayImageOne($data->dynamic->resim)}}" alt="{{$data->dynamic->baslik}}" title="{{$data->dynamic->baslik}}">
                            </a>
                        </figure>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endif
