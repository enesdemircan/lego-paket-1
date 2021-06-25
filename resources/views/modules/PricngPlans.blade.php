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
                @foreach($datas as $data)
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-block-one @if($data->etkin[0] == 'Aktif') active @endif wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="pricing-table">
                                <div class="table-header">

                                    @if(!empty($data->baslik))
                                        <h3>{{$data->baslik}}</h3>
                                    @endif
                                    @if(!empty($data->spot))
                                        <p>{{$data->spot}}</p>
                                    @endif
                                    <h2>{{$data->fiyat}}</h2>

                                </div>
                                <div class="table-content">
                                    <ul class="feature-list clearfix">
                                        @if(!empty($data->satir1))
                                            <li>{{$data->satir1}}</li>
                                        @endif

                                        @if(!empty($data->satir2))
                                            <li>{{$data->satir2}}</li>
                                        @endif

                                        @if(!empty($data->satir3))
                                            <li>{{$data->satir3}}</li>
                                        @endif

                                        @if(!empty($data->satir4))
                                            <li>{{$data->satir4}}</li>
                                        @endif

                                        @if(!empty($data->satir5))
                                            <li>{{$data->satir5}}</li>
                                        @endif

                                        @if(!empty($data->satir6))
                                            <li>{{$data->satir6}}</li>
                                        @endif

                                        @if(!empty($data->satir7))
                                            <li>{{$data->satir7}}</li>
                                        @endif

                                        @if(!empty($data->satir8))
                                            <li>{{$data->satir8}}</li>
                                        @endif

                                        @if(!empty($data->satir9))
                                            <li>{{$data->satir9}}</li>
                                        @endif

                                        @if(!empty($data->satir10))
                                            <li>{{$data->satir10}}</li>
                                        @endif
                                    </ul>
                                </div>
                                @if(!empty($data->buton_baslik) && !empty($data->buton_link))
                                    <div class="table-footer">
                                        <a href="{{$data->buton_link}}" class="theme-btn style-one">{{$data->buton_baslik}}</a>
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
