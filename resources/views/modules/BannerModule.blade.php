@if(!empty($datas->data))
    <section class="sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                @foreach($datas->data as $key => $data)
                    @if($key < $modul->limit)
                        <div class="{{!empty($modul->class) ? $modul->class : 'col-lg-4 col-md-6 col-sm-12' }}news-block mb-5">
                            <a href="{{$data->dynamic->link}}" target="new"><img src="{{Helpers::ArrayImageOne($data->dynamic->resim)}}"></a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endif
