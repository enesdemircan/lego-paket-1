@if(!empty($datas))
    <section class="cctv-section" style="background-image: url(/assets/images/background/team-bg.jpg);">
        <div class="tabs-box">
            <div class="tab-btn-box">
                <div class="auto-container">
                    <ul class="tab-btns tab-buttons clearfix">
                        <li class="tab-btn active-btn" data-tab="#tab-1">{{$modul->baslik}}</li>
                    </ul>
                </div>
            </div>
            <div class="auto-container">
                <div class="tabs-content">
                    <div class="tab active-tab" id="tab-1">
                        <div class="row clearfix">
                            @foreach($datas as $key => $data)
                                @if($key < $modul->limit)
                                    <div class="col-lg-3 col-md-6 col-sm-12 single-column mb-5">
                                        <div class="single-item">
                                            <figure class="icon-box"><img src="{{Helpers::ArrayImageOne($data->resim,1)}}" alt="{{$data->baslik}}" title="{{$data->baslik}}"></figure>
                                            <h5>{{$data->baslik}}</h5>
                                            <div class="link"><a href="{{$data->component_slug}}/{{$data->slug}}"><i class="icon-down-chevron"></i></a></div>
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
