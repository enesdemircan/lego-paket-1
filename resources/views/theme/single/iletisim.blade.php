@extends('theme.master')

@section('title', $single->component->seo->title)

@section('content')
    <!-- Page Title -->
    <section class="page-title {{$styleClass}}" style="background-image: url(assets/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="title">
                    <h1>{{$single->component->seo->title}}</h1>
                </div>

            </div>
        </div>
    </section>
    <!-- End Page Title -->
    <section class="contact-page-section {{$styleClass}} sec-pad">
        <div class="auto-container">

            <div class="sec-title centred">
                <h2>{{$single->data->dynamic->baslik}}</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 form-column">
                    <div class="form-inner">
                        <form method="post" action="/{{$lang}}/submit-form" id="submit-form" class="default-form">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="isim" placeholder="{{$translations['ad_soyad']}} *" required="">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="telefon" required="" placeholder="{{$translations['telefon']}} *">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="{{$translations['email']}} *" required="">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="mesaj" placeholder="{{$translations['mesaj']}} *" required></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <!-- <div class="g-recaptcha" data-sitekey="{{$designs->site_ayarlari->recaptcha_sitekey}}" required></div> -->
                                </div>

                                <input name="link" class="form-control" type="hidden" value="{{$single->component->seo->title}}">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                    <button class="theme-btn style-one" type="submit" name="submit-form">{{$translations['gonder']}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-info-section centred">
        <div class="auto-container">
            <div class="inner-content clearfix d-flex">
                <div class="single-item col">
                    <div class="icon-box"><i class="icon-location"></i></div>
                    <h4>{{$translations['adres']}}</h4>
                    <p>{{$single->data->dynamic->adres}}</p>
                </div>
                <div class="single-item col">
                    <div class="icon-box"><i class="icon-call"></i></div>
                    <h4>{{$translations['telefon']}}</h4>
                    <p><a href="tel:{{$single->data->dynamic->telefon}}">{{$single->data->dynamic->telefon}}</a></p>
                </div>
                <div class="single-item col">
                    <div class="icon-box"><i class="icon-email-1"></i></div>
                    <h4>{{$translations['email']}}</h4>
                    <p><a href="mailto:{{$single->data->dynamic->email}}">{{$single->data->dynamic->email}}</a></p>
                </div>
            </div>
        </div>
    </section>
    @if(isset($single->data->dynamic->harita))
       <section class="contactMap">
           {!! $single->data->dynamic->harita !!}
       </section>
    @endif
@stop
