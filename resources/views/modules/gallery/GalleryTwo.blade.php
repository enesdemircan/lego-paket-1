@if(!empty($datas))
    <section class="project-style-three">
        <div class="auto-container">
            <div class="sec-title-two mb-5">
                <h2>{{$modul->baslik}}</h2>
            </div>
            <div class="row clearfix">
                @foreach($datas->data as $data)
                    @if($data->static->uuid == Helpers::ModuleUuidSearch('galeri-',$modul->class))
                        @foreach(explode(',',$data->dynamic->resim) as $key => $image)
                            @if($key < $modul->limit)
                                <div class="col-lg-3 col-md-6 col-sm-12 project-block">
                                    <div class="project-block-two">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{env('SERVER_ADDRESS','NULL').'/'.Helpers::ThumbsImage($image)}}" alt="{{$data->dynamic->baslik}}" title="{{$data->dynamic->baslik}}"></figure>
                                            <div class="content-box">
                                                <div class="text">
                                                    <h5><a href="{{$datas->component->slug}}/{{$data->dynamic->slug}}">{{$data->dynamic->baslik}}</a></h5>
                                                </div>
                                                <ul class="link-box">
                                                    <li><a href="{{env('SERVER_ADDRESS','NULL').'/'.$image}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i></a></li>
                                                    <li><a href="{{$datas->component->slug}}/{{$data->dynamic->slug}}"><i class="icon-link"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                @endforeach

            </div>
        </div>
    </section>
@endif
