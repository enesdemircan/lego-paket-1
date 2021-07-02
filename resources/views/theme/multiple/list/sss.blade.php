@extends('theme.master')

@section('title', $translations['sss'])

@section('content')

    <section class="page-title {{$styleClass}}" style="background-image: url(assets/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="title">
                    <h1>{{$translations['sss']}}</h1>
                </div>

            </div>
        </div>
    </section>
    <section class="faq-page-section sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="faq-content">

                        <ul class="accordion-box">
                            @if(isset($multiple))
                                @foreach ($multiple as $key => $value)
                                    <li class="accordion block @if($key == 0) active-block @endif">
                                        <div class="acc-btn @if($key == 0) active @endif ">
                                            <div class="icon-outer"><i class="icon-down-chevron"></i></div>
                                            <h5>{{$value->baslik}}</h5>
                                        </div>
                                        <div class="acc-content @if($key == 0) current @endif ">
                                            <p>{{\Illuminate\Support\Str::words(strip_tags($value->detay), 50,'...')}}<a class="enable-link" href="/{{$lang}}/{{$value->component_slug}}/{{$value->slug}}">{{($translations['detay'])}}</a></p>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="faq-sidebar ml-30">
                        <div class="form-inner">
                            <h3>{{$translations['sorularinizi_sorun']}}</h3>
                            <form action="/{{$lang}}/submit-form" id="submit-form" method="post">
                                <div class="form-group">
                                    <input type="text" name="isim" placeholder="{{$translations['ad_soyad']}} *" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="{{$translations['email']}} *" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="telefon" placeholder="{{$translations['telefon']}} *" required="">
                                </div>
                                <div class="form-group">
                                    <textarea name="mesaj" placeholder="{{$translations['soru']}} *"></textarea>
                                </div>
                                <div class="form-group">
                                <!-- <div class="g-recaptcha" data-sitekey="{{$designs->site_ayarlari->recaptcha_sitekey}}" required></div> -->
                                </div>
                                <input name="link" class="form-control" type="hidden" value="{{$translations['sss']}}">
                                <div class="form-group message-btn">
                                    <button type="submit" class="theme-btn style-one">{{$translations['gonder']}} *</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
