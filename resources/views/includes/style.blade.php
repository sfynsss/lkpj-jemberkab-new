<link rel="icon" href="{{ asset('backend/img/favicon.png') }}" type="image/x-icon"/>

<!-- Fonts and icons -->
<script src="{{ asset('backend/js/plugin/webfont/webfont.min.js') }}"></script>
<script>
    WebFont.load({
        google: {"families":["Lato:300,400,700,900"]},
        custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], 
        urls: ['{{ asset('backend/css/fonts.min.css') }}']},
        active: function() {
            sessionStorage.fonts = true;
        }
    });
</script>

<!-- CSS Files -->
<link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/css/atlantis.min.css') }}">