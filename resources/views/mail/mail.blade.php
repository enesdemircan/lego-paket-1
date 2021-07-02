<html>
<head></head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap');
    body {
        color: #000000;
        font-family: 'Montserrat Alternates', sans-serif;
        background-color: #ffffff;
    }
    table thead,
    table tfoot
    {
        background-color: #f3f3f3;
    }
    tbody, td, tfoot, th, thead, tr
    {
        border-color: inherit;
        border-style: solid;
        border-width: 0;
    }
    table thead > tr th,
    table tfoot > tr th
    {
        color: #000000;
        font-size: 15px;
        font-weight: 500;
        text-transform: uppercase;
        padding: 14px 23px 14px;
    }

    table thead > tr th.width-thumbnail
    {
        min-width: 130px;
    }

    table thead > tr th.width-name
    {
        min-width: 350px;
    }

    table thead > tr th.width-price {
        min-width: 103px;
    }

    table thead > tr th.width-quantity {
        min-width: 100px;
    }
    table thead > tr th.width-subtotal {
        min-width: 145px;
    }
    table tbody tr {
        border-bottom: 4px solid #f3f3f3;
    }

    table tbody > tr td:first-child
    {
        text-align: left;
    }
    table
    {
        width: 100%;
        margin-bottom: 30px;
    }

    table.form-bilgileri tbody > tr td:first-child
    {
        min-width: 100px;
    }

    table.form-bilgileri tbody > tr td:last-child
    {
        width: 90%;
    }

    table.teslimat-bilgileri tbody > tr td:first-child
    {
        width: 20%;
    }

    table.teslimat-bilgileri tbody > tr td:last-child
    {
        width: 80%;
    }

    table.teslimat-bilgileri tbody > tr td,
    table.form-bilgileri tbody > tr td
    {
        padding: 10px;
        text-align: left;
    }

    table tbody > tr td
    {
        padding: 23px;
        text-align: center;
    }

    table tbody > tr td.product-name h5,
    table tbody > tr td
    {
        font-size: 15px;
        color: #000000;
        font-weight: 600;
    }
    table tbody > tr td.product-name h5 a
    {
        color: #000000;
    }

    .baslik
    {
        background-color: #f5f5f5;
        padding: 5px;
    }
</style>
<body>

    @if($status == 1)
        <h3>
            {!! str_replace(': musteri','<strong>'.$musteri.'</strong>',$translations['siparis_mail_mesaj']) !!}
        </h3>

        <h3>
            {{$translations['siparis_no']." ".$siparis_no}}
        </h3>

        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
            <thead>
                <tr>
                    <th width="350" class="width-name">{{$translations['urun']}}</th>
                    <th width="103" class="width-price"> {{$translations['fiyat']}}</th>
                    <th width="100" class="width-quantity">{{$translations['adet']}}</th>
                    <th width="100" class="width-quantity">{{$translations['kdv']}}</th>
                    <th width="145" class="width-subtotal">{{$translations['toplam']}}</th>
                </tr>
            </thead>
            <tbody width="100%" border="0" cellpadding="0" cellspacing="0" align="left">
            @foreach($siparis_kalemleri as $sira => $urun)
                <tr >
                    <td  width="350" class="product-name">
                        <h5><a href="{{$urun['url']}}">{{$urun['baslik']}}</a></h5>
                        @if(isset($urun['renk']) && isset($urun['renk_kodu']))
                            <div style="background-color: {{$urun['renk_kodu']}};float: left; margin-right: 10px;height: 20px; width: 20px;"></div>
                            <div style="float: left;">{{$urun['renk']}}</div>
                        @endif
                    </td>
                    <td width="103">{{$urun['adet_fiyat']}}€</td>
                    <td width="100">{{$urun['adet']}}</td>
                    <td width="100"><span>{{$urun['toplam_kdv']}} (%{{$urun['kdv']}})</span></td>
                    <td width="145"><span>{{ $urun['toplam_tutar'] }}€</span></td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">{{$translations['genel_toplam']}} : {{$genel_toplam_avro}}€</th>
                    <th colspan="3">{{$translations['genel_toplam']}} : {{$genel_toplam_tl}}₺</th>
                </tr>
            </tfoot>
        </table>

        <table class="teslimat-bilgileri">
            <thead>
                <tr>
                    <th colspan="5">{{$translations['teslimat_bilgileri']}}</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{$translations['fatura_unvani']}} : </td>
                    <td>{{$firma}}</td>
                </tr>

                <tr>
                    <td>{{$translations['vergi_dairesi']}} : </td>
                    <td>{{$vd}}</td>
                </tr>

                <tr>
                    <td>{{$translations['vergi_numarasi']}} : </td>
                    <td>{{$vno}}</td>
                </tr>

                <tr>
                    <td>{{$translations['ad_soyad']}} : </td>
                    <td>{{$musteri}}</td>
                </tr>

                <tr>
                    <td>{{$translations['telefon']}} : </td>
                    <td>{{$telefon}}</td>
                </tr>

                <tr>
                    <td>{{$translations['email']}} : </td>
                    <td>{{$email}}</td>
                </tr>

                <tr>
                    <td>{{$translations['teslimat_adresi']}} : </td>
                    <td>{!! $teslimat_adresi !!}</td>
                </tr>

                <tr>
                    <td>{{$translations['fatura_adresi']}} : </td>
                    <td>{!! $fatura_adresi !!}</td>
                </tr>

                <tr>
                    <td>{{$translations['kargo']}} : </td>
                    <td>{{$kargo}}</td>
                </tr>
            </tbody>
        </table>

        <table>
            <thead>
                <tr>
                    <th colspan="5">{{$translations['sepet_aciklama_1']}}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="content" style="color: rgb(3, 138, 203); font-family: Arial, Helvetica, sans-serif;">
                            <p style="margin: 0px 0px 20px; line-height: 1.6; text-align: center;">
                                <span style="font-size: 14px;"><span style="color: rgb(0, 0, 0);">{{$translations['sepet_aciklama_2']}}</span></span></p>
                            <p style="margin: 0px 0px 20px; line-height: 1.6; text-align: center;">
                                        <span style="font-size: 14px;"><span style="color: rgb(0, 0, 0);">{{$translations['sepet_aciklama_3']}}<br>
                                        <br>
                                        {{$translations['hesap_adi']}}<br><strong><span style="font-family: verdana, geneva, sans-serif;"><span style="font-size: 16px;">{{$designs->site_ayarlari->footer_baslik}}</span></span></strong><br>
                                        <br>
                                        {{$translations['banka']}} {{$translations['banka_aciklama']}}<br>
                                        <br>
                                        {{$translations['hesap_no']}} (<strong>{{$translations['tl']}}</strong>):<br>
                                        {{$translations['iban']}}&nbsp;<strong>{{$translations['iban_tl']}}</strong><br>
                                        <br>
                                        {{$translations['hesap_no']}} (<strong>{{$translations['euro']}}</strong>):<br>
                                        {{$translations['iban']}}&nbsp;<strong>{{$translations['iban_euro']}}</strong><br>
                                        {{$translations['swift']}} {{$translations['swift_aciklama']}}</span></span></p>
                            <p style="margin: 0px 0px 20px; line-height: 1.6; text-align: center;">
                                &nbsp;</p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    @else
        <table class="form-bilgileri">
            <thead>
                <tr>
                    <th colspan="5"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$translations['ad_soyad']}} : </td>
                    <td>{{$isim}}</td>
                </tr>

                <tr>
                    <td>{{$translations['telefon']}} : </td>
                    <td>{{$telefon}}</td>
                </tr>

                <tr>
                    <td>{{$translations['email']}} : </td>
                    <td>{{$email}}</td>
                </tr>

                <tr>
                    <td>{{$translations['mesaj']}} : </td>
                    <td>{!! $mesaj !!}</td>
                </tr>
            </tbody>
        </table>
    @endif
</body>
</html>
