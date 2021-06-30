@if(!empty($datas))
    <section class="project-style-two sec-pad">
        <div class="bg-layer"></div>
        <div class="project-tab">
            <div class="auto-container">
                <div class="sec-title-one light mb-5">
                    <h2>{{$modul->baslik}}</h2>
                </div>
            </div>
            <div class="outer-container">
                <div class="p-tabs-content">
                    <div class="p-tab active-tab" id="tab-1">
                        <div class="five-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                            @foreach($datas as $data)
                                @if($data->uuid == Helpers::ModuleUuidSearch('galeri-',$modul->class))
                                    @foreach(explode(',',$data->resim) as $key => $image)
                                        @if($key < $modul->limit)
                                            <div class="project-block-one">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="{{env('SERVER_ADDRESS','NULL').'/'.Helpers::ThumbsImage($image)}}" alt="{{$data->baslik}}" title="{{$data->baslik}}"></figure>
                                                    <div class="content-box">
                                                        <ul class="link-box">
                                                            <li>
                                                                <a href="{{env('SERVER_ADDRESS','NULL').'/'.$image}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endif
