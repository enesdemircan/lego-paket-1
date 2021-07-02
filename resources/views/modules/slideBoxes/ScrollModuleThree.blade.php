@if(!empty($datas))
    <section class="project-style-two bg-color-1 sec-pad">
        <div class="bg-layer"></div>
        <div class="project-tab">
            <div class="auto-container">
                <div class="sec-title-one light mb-5">
                    <h2>{{$modul->baslik}}</h2>
                </div>
            </div>
            <div class="auto-container">
                <div class="p-tabs-content">
                    <div class="p-tab active-tab" id="tab-1">
                        <div class="five-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                            @foreach($datas as $key => $data)
                                @if($key < $modul->limit)
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{Helpers::ArrayImageOne($data->resim,1)}}" alt="{{$data->baslik}}" title="{{$data->baslik}}"></figure>
                                            <div class="content-box">
                                                <div class="text">
                                                    <p>{{$data->spot}}</p>
                                                    <h4><a href="/{{$lang}}/{{$data->component_slug}}/{{$data->slug}}">{{$data->baslik}}</a></h4>
                                                </div>
                                                <ul class="link-box">
                                                    <li>
                                                        <a href="{{Helpers::ArrayImageOne($data->resim)}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="/{{$lang}}/{{$data->component_slug}}/{{$data->slug}}"><i class="icon-link"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
