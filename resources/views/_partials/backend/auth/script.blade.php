<!-- Required Jquery -->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ asset('js/jquery.slimscroll.js') }}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ asset('assets/backend/auth/js/modernizr.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/backend/auth/js/css-scrollbars.js') }}"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="{{ asset('assets/backend/auth/js/i18next.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/backend/auth/js/i18nextXHRBackend.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/backend/auth/js/i18nextBrowserLanguageDetector.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/backend/auth/js/jquery-i18next.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/backend/auth/js/common-pages.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/parsley.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/install/js/growl.min.js') }}"></script>
<script>
    function notify(message, type){
        $.growl({
            message: message
        },{
            type: type,
            allow_dismiss: true,
            label: 'Cancel',
            className: 'btn-xs btn-inverse',
            placement: {
                from: "top",
                align: "right"
            },
            delay: 5000,
            animate: {
                    enter: 'animated fadeInRight',
                    exit: 'animated fadeOutRight'
            },
            offset: {
                x: 30,
                y: 30
            }
        });
    };

    /*
    * Form Validation
    */

var _formValidation = function() {
    if ($('#content_form').length > 0) {
        $('#content_form').parsley().on('field:validated', function() {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
        });
    }

    $('#content_form').on('submit', function(e) {
        e.preventDefault();
        $('#submit').hide();
        $('#submiting').show();
        $(".ajax_error").remove();
        var submit_url = $('#content_form').attr('action');
        //Start Ajax
        var formData = new FormData($("#content_form")[0]);
        $.ajax({
            url: submit_url,
            type: 'POST',
            data: formData,
            contentType: false, // The content type used when sending data to the server.
            cache: false, // To unable request pages to be cached
            processData: false,
            dataType: 'JSON',
            success: function(data) {
                if (data.status == 'danger') {
                    notify(data.message, 'danger');
                } else {
                    notify(data.message, 'primary');
                    $('#submit').show();
                    $('#submiting').hide();
                    $('#content_form')[0].reset();
                    if (data.goto) {
                        setTimeout(function() {

                            window.location.href = data.goto;
                        }, 500);
                    }
                }
            },
            error: function(data) {
                $('#submit').show();
                $('#submiting').hide();
                var jsonValue = $.parseJSON(data.responseText);
                const errors = jsonValue.errors;
                if (errors) {
                    var i = 0;
                    $.each(errors, function(key, value) {
                        const first_item = Object.keys(errors)[i]
                        const message = errors[first_item][0];
                        if ($('#' + first_item).length > 0) {
                            $('#' + first_item).parsley().removeError('required', {
                                updateClass: true
                            });
                            $('#' + first_item).parsley().addError('required', {
                                message: value,
                                updateClass: true
                            });
                        }
                        // $('#' + first_item).after('<div class="ajax_error" style="color:red">' + value + '</div');
                        notify(value, 'danger');
                        i++;
                    });
                } else {
                    notify(jsonValue.message, 'danger');
                }
                
            }
        });
    });
};
_formValidation();

$('#loginwithgoogle').click(function() {
    var url = $(this).data('url');
    openPopUpWindow(targetField = 2, url)
});

$('#loginwithlinkedin').click(function() {
    var url = $(this).data('url');
    openPopUpWindow(targetField = 2, url)
});

 // open a pop up window
 function openPopUpWindow(targetField,url){
        var w = window.open(url,'_blank','width=400,height=400,scrollbars=1');
        // pass the targetField to the pop up window
        w.targetField = targetField;
        w.focus();
    }
 
    // this function is called by the pop up window
    function setSearchResult(x){
        if(x == 'no') {
            notify('Sorry. These Crediantials are Wrong', 'danger');
        } else {
            notify('Login Attempt Successfull!!!', 'success');
            
            setTimeout(function() {
                window.location = '{{ route("admin.home")}} ';
            }, 500);
        }
    }
</script>

