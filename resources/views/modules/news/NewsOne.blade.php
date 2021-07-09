@if(!empty($datas->data))
    <section class="news-style-four sec-pad bg-color-5">
    <div class="auto-container">
        <div class="sec-title-three">
            <h2>{{$modul->baslik}}</h2>
        </div>
        <div class="row clearfix mb-30">
            @foreach($datas->data as $key => $data)
                @if($key < $modul->limit)
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-four wow fadeInUp ">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{Helpers::ArrayImageOne($data->dynamic->resim,1)}}" alt="{{$data->dynamic->baslik}}" title="{{$data->dynamic->baslik}}"></figure>
                                    <div class="link"><a href="/{{$lang}}/{{$datas->component->slug}}/{{$data->static->slug}}"><i class="fas fa-angle-right"></i></a></div>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="/{{$lang}}/{{$datas->component->slug}}/{{$data->static->slug}}">{{$data->dynamic->baslik}}</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <a href="/{{$lang}}/{{$datas->component->slug}}" class="link theme-btn style-one" style="color: #fff;">{{$translations['daha_fazla']}} <i class="fas fa-angle-right"></i></a>
    </div>
</section>
@endif
