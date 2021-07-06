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
                                {!! Media::createTag(Helpers::ArrayImageOne($data->dynamic->resim),['width' =>[210], 'height' => [210]],['class'=> 'lazy','alt' => $data->dynamic->baslik,'title' => $data->dynamic->baslik], 'lazy') !!}
                            </a>
                        </figure>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endif
