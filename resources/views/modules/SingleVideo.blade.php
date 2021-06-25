@if(!empty($datas))
    <section class="highlights-section" style="background-image: url({{env('SERVER_ADDRESS','NULL')}}/{{$modul->resim}});padding-bottom: 110px;">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 video-column">
                    <div class="video_block_1">
                        @php $goster = null; @endphp
                        @foreach($datas as $data)
                            @if($data->anasayfa_goster == 'Aktif' && empty($goster))
                                <div class="video-inner" style="background-image: url({{env('SERVER_ADDRESS','NULL')}}/{{$data->resim}});">
                                    <div class="video-btn">
                                        <a href="{{$data->video}}" class="video-btn lightbox-image" data-caption=""><i class="fas fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                @php $goster = 1; @endphp
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif