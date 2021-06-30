@if(!empty($datas))
<section class="testimonial-section centred sec-pad bg-color-1">
    <div class="auto-container">
        <div class="sec-title centred">
            <div class="top-title">
                <div class="shape">
                    <div class="line line-1"></div>
                    <div class="line line-2"></div>
                    <div class="line line-3"></div>
                    <div class="line line-4"></div>
                    <div class="bg-shape" style="background-image: url(assets/images/icons/bg-shape-5.png);"></div>
                </div>
                <p>{{$modul->baslik}}</p>
            </div>

        </div>
        <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">

            @foreach($datas as $key => $data)
                @if($key < $modul->limit)
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="quote-icon"><i class="icon-left-quote"></i></div>
                        <h4>{{$data->baslik}}</h4>

                        <p>{{$data->detay}}</p>
                        @if(!empty($data->baslik))
                        <figure class="thumb-box"><img src="{{Helpers::ArrayImageOne($data->resim)}}" alt="SEO HEDEF KELİME 1 + içerik başlığı"></figure>
                        @endif
                    </div>
                </div>
                @endif
            @endforeach



        </div>
    </div>
</section>
@endif