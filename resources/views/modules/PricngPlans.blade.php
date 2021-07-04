@if(!empty($datas))
    <section class="pricing-section centred sec-pad" style="background-image: url({{env('SERVER_ADDRESS','NULL')}}/{{$modul->resim}});">
        <div class="auto-container">
            <div class="sec-title light">
                <div class="top-title">
                    <div class="shape">
                        <div class="line line-1"></div>
                        <div class="line line-2"></div>
                        <div class="line line-3"></div>
                        <div class="line line-4"></div>
                        <div class="bg-shape" style="background-image: url(/assets/images/icons/bg-shape-2.png);"></div>
                    </div>
                    <p>{{$modul->baslik}}</p>
                </div>
            </div>
            <div class="row clearfix">
                @foreach($datas->data as $data)
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-block-one @if($data->dynamic->etkin[0] == 'Aktif') active @endif wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="pricing-table">
                                <div class="table-header">

                                    @if(!empty($data->dynamic->baslik))
                                        <h3>{{$data->dynamic->baslik}}</h3>
                                    @endif
                                    @if(!empty($data->dynamic->spot))
                                        <p>{{$data->dynamic->spot}}</p>
                                    @endif
                                    <h2>{{$data->dynamic->fiyat}}</h2>

                                </div>
                                <div class="table-content">
                                    <ul class="feature-list clearfix">
                                        @if(!empty($data->dynamic->satir1))
                                            <li>{{$data->dynamic->satir1}}</li>
                                        @endif

                                        @if(!empty($data->dynamic->satir2))
                                            <li>{{$data->dynamic->satir2}}</li>
                                        @endif

                                        @if(!empty($data->dynamic->satir3))
                                            <li>{{$data->dynamic->satir3}}</li>
                                        @endif

                                        @if(!empty($data->dynamic->satir4))
                                            <li>{{$data->dynamic->satir4}}</li>
                                        @endif

                                        @if(!empty($data->dynamic->satir5))
                                            <li>{{$data->dynamic->satir5}}</li>
                                        @endif

                                        @if(!empty($data->dynamic->satir6))
                                            <li>{{$data->dynamic->satir6}}</li>
                                        @endif

                                        @if(!empty($data->dynamic->satir7))
                                            <li>{{$data->dynamic->satir7}}</li>
                                        @endif

                                        @if(!empty($data->dynamic->satir8))
                                            <li>{{$data->dynamic->satir8}}</li>
                                        @endif

                                        @if(!empty($data->dynamic->satir9))
                                            <li>{{$data->dynamic->satir9}}</li>
                                        @endif

                                        @if(!empty($data->dynamic->satir10))
                                            <li>{{$data->dynamic->satir10}}</li>
                                        @endif
                                    </ul>
                                </div>
                                @if(!empty($data->dynamic->buton_baslik) && !empty($data->dynamic->buton_link))
                                    <div class="table-footer">
                                        <a href="{{$data->dynamic->buton_link}}" class="theme-btn style-one">{{$data->dynamic->buton_baslik}}</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
