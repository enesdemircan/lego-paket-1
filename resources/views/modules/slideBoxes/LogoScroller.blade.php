@if(!empty($datas))
    <section class="clients-section style-one">
        <div class="auto-container">
            <div class="sec-title-two centred">
                <p>{{$modul->baslik}}</p>
            </div>
            <div class="clients-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                @foreach($datas as $key => $data)
                    @if($key < $modul->limit)
                        <figure class="clients-logo-box">
                            <a href="#">
                                <img src="{{Helpers::ArrayImageOne($data->resim)}}" alt="{{$data->baslik}}" title="{{$data->baslik}}">
                            </a>
                        </figure>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endif
