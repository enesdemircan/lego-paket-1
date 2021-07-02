function toastSuccess(text,timer = 3000)
{
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: timer,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'success',
        title: text
    })
}

function islembasarisiz(text)
{
    Swal.fire({
        icon: 'error',
        title: '',
        html: text,
        showCancelButton: true,
        showConfirmButton:false,
        cancelButtonText: $('.kapat').val(),
    })
}

var callback_loaded = function (element) {
    $('[data-ll-status="loaded"]').removeClass("lazy");
};
new LazyLoad({ callback_loaded: callback_loaded });

$('#submit-form').submit( function (e)
{
    yukleniyor(1);
    e.preventDefault();
    $.ajax({
        type: this.method,
        dataType: "json",
        contentType: false,
        cache: false,
        processData:false,
        url: this.action,
        data: new FormData(this),
        success : function (response)
        {
            yukleniyor(2);
            Swal.fire({
                allowOutsideClick : false,
                allowEscapeKey : false,
                title: response[1],
                icon: 'success',
                showCancelButton: true,
                cancelButtonText: response[2],
                showConfirmButton:false
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.cancel)
                {
                    location.reload();
                }
            })
        },
        error : function (response)
        {
            yukleniyor(2);
            var hata      = '';

            if (response.responseJSON)
            {
                var hata_json = response.responseJSON;

                for(var k in hata_json)
                {
                    for (var a in hata_json[k])
                    {
                        hata += hata_json[k][a]+'<br>';
                    }
                }
            }
            else
            {
                hata = response.responseText;
            }

            islembasarisiz(hata);
        }
    });
});

$(document).ready(function(){
    $('[name="telefon"]').inputmask("(999) 999-9999");
    $('[name="email"]').inputmask("email");
    yukleniyor(2);
});

/////////// yukleniyor ///////////
function yukleniyor(durum)
{
    if (durum == 1)
    {
        $('.yukleniyor').fadeIn('slow');
    }
    else if (durum == 2)
    {
        $('.yukleniyor').fadeOut('slow');
    }

}
/////////// yukleniyor ///////////

