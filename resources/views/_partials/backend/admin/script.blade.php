<!-- Required Jquery -->
<script type="application/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- jquery slimscroll js -->
<script type="application/javascript" src="{{ asset('js/jquery.slimscroll.js') }}"></script>

<!-- modernizr js -->
<script type="application/javascript" src="{{ asset('js/modernizr.js') }}"></script>
<script type="application/javascript" src="{{ asset('js/css-scrollbars.js') }}"></script>

<!-- i18next.min.js -->
<script type="text/javascript" src="{{ asset('js/i18next.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/i18nextXHRBackend.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/i18nextBrowserLanguageDetector.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-i18next.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/toolbar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/parsley.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/swichery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/install/js/growl.min.js') }}"></script>

<script src="{{ asset('assets/backend/admin/js/pcoded.min.js') }}"></script>
<script src="{{ asset('assets/backend/admin/js/vartical-layout.min.js') }}"></script>
<script src="{{ asset('assets/backend/admin/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{ asset('assets/backend/admin/js/script.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/backend/admin/js/main.js') }}"></script>
<script>
           $('#success-toolbar').toolbar({
                content: '#toolbar-options',
                style: 'success'
            });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

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
</script>
@stack('admin.scripts')
