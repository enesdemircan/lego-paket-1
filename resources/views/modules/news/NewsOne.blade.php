@if(!empty($datas))
    <section class="news-style-four sec-pad bg-color-5">
    <div class="auto-container">
        <div class="sec-title-three">
            <h2>{{$modul->baslik}}</h2>
        </div>
        <div class="row clearfix mb-30">
            @foreach($datas as $key => $data)
                @if($key < $modul->limit)
                    @php $component_slug = $data->component_slug; @endphp
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-four wow fadeInUp ">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{Helpers::ArrayImageOne($data->resim,1)}}" alt="{{$data->baslik}}" title="{{$data->baslik}}"></figure>
                                    <div class="link"><a href="/{{$lang}}/{{$data->component_slug}}/{{$data->slug}}"><i class="fas fa-angle-right"></i></a></div>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="/{{$lang}}/{{$data->component_slug}}/{{$data->slug}}">{{$data->baslik}}</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <a href="/{{$lang}}/{{$component_slug}}" class="link theme-btn style-one" style="color: #fff;">{{$translations['daha_fazla']}} <i class="fas fa-angle-right"></i></a>
    </div>
</section>
@endif
