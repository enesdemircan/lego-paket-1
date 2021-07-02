@if(!empty($datas))
    <section class="project-section sec-pad bg-color-1">
        <div class="auto-container">
            <div class="sec-title centred">
                <div class="top-title">
                    <div class="shape">
                        <div class="line line-1"></div>
                        <div class="line line-2"></div>
                        <div class="line line-3"></div>
                        <div class="line line-4"></div>
                        <div class="bg-shape" style="background-image: url(/assets/images/icons/bg-shape.png);"></div>
                    </div>
                    <p>{{$modul->baslik}}</p>
                </div>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                @foreach($datas as $key => $data)
                    @if($key < $modul->limit)
                        <div class="project-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{Helpers::ArrayImageOne($data->resim,1)}}" alt="{{$data->baslik}}" title="{{$data->baslik}}"></figure>
                                <div class="content-box">
                                    <div class="text">
                                        @if(!empty($data->buton_link))
                                            <h4><a href="{{$data->buton_link}}">{{$data->baslik}}</a></h4>
                                        @else
                                            <h4>{{$data->baslik}}</h4>
                                        @endif

                                    </div>
                                        <ul class="link-box">
                                            <li>
                                                @if(!empty($data->buton_link))
                                                    <a href="{{$data->buton_link}}"><i class="icon-link"></i></a>
                                                @else
                                                    <a href="/{{$lang}}/{{$data->component_slug}}/{{$data->slug}}"><i class="icon-link"></i></a>
                                                @endif
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach



            </div>
        </div>
    </section>
@endif
