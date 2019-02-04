<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="jwORR3CP8HncGeqMvD-edmeNZKnF1mbTojRwWhyXzZA" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--<title>Agencia de Viajes en Peru | Tours Machu Picchu</title>--}}
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    <meta name="description" content="Paquetes de viaje a Perú con un auténtico operador peruano, oficinas en Lima, Cusco, Arequipa y Puno. Ofrecemos salidas diarias a Machu Picchu.">
    <link href="{{asset('images/icons/favicon/favicon.ico')}}" rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="{{mix("css/app.css")}}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-57960909-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-57960909-3');
    </script>

</head>
<body data-spy="scroll" data-target="#menu" class="position-relative">





@yield('content')


{{--<section class="my-5 py-5 bg-light">--}}
    {{--<div class="container">--}}
        {{--<div class="row justify-content-center">--}}
            {{--<div class="col-6">--}}
                {{--sds--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}





{{--<section class="py-5 bg-light d-none d-sm-block">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col">--}}
                {{--<img src="{{asset("images/sponsor/logo-facebook.png")}}" alt="" class="img-fluid">--}}
            {{--</div>--}}
            {{--<div class="col">--}}
                {{--<img src="{{asset("images/sponsor/logo-asta.png")}}" alt="" class="img-fluid">--}}
            {{--</div>--}}
            {{--<div class="col">--}}
                {{--<img src="{{asset("images/sponsor/logo-newyorktimes.png")}}" alt="" class="img-fluid">--}}
            {{--</div>--}}
            {{--<div class="col">--}}
                {{--<img src="{{asset("images/sponsor/logo-apotur.png")}}" alt="" class="img-fluid">--}}
            {{--</div>--}}
            {{--<div class="col">--}}
                {{--<img src="{{asset("images/sponsor/logo-promperu.png")}}" alt="" class="img-fluid">--}}
            {{--</div>--}}
            {{--<div class="col">--}}
                {{--<img src="{{asset("images/sponsor/logo-meetup.png")}}" alt="" class="img-fluid">--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}

{{--<footer class="bg-g-dark">--}}
    {{--<img src="{{asset("images/footer.jpg")}}" alt="" class="w-100">--}}
    {{--<div class="container">--}}
        {{--<div class="row pt-4">--}}
            {{--<div class="col text-center text-white">--}}
                {{--<p>OS MELHORES FERIADOS AO PERU COM O MELHOR OPERADOR DE VIAGEM</p>--}}
                {{--<p>&copy; GOTOPERU COMPANY</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</footer>--}}
<footer class="bg-g-dark">
    <img src="{{asset('images/footer.jpg')}}" alt="footer gotoperu" class="w-100">
    <div class="container footer-logo">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="row">
                    <div class="col">
                        <img src="{{asset('images/logo-andes.png')}}" alt="logo gotoperu" class="w-100">
                    </div>
                </div>

            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-sm-8">
                <div class="alert bg-rgba-dark my-4 text-white text-center" role="alert">
                    O ÚNICO <strong class="text-g-yellow">Operador de Viagem Peruano</strong>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row py-4">
            <div class="col-6 col-sm mb-3 text-white">
                <h3 class="h6 text-g-yellow">Pacotes</h3>
                <ul class="m-0 text-g-yellow list-unstyled">
                    {{--<li><a href="{{route('deals_path')}}" class="text-white">Travel Deals</a></li>--}}
                    <li><a href="{{route('paquetes_path')}}" class="text-white">Pacotes de Viagem</a></li>
                    <li><a href="{{route('tours_path')}}" class="text-white">Perú Passeios</a></li>
                </ul>
            </div>
            {{--<div class="col-6 col-sm mb-3 text-white">--}}
            {{--<h3 class="h6 text-g-yellow">Tour Packages</h3>--}}
            {{--<ul class="m-0 text-g-yellow list-unstyled">--}}
            {{--<li><a href="{{route('destinations_path')}}" class="text-white">1-3 Days</a></li>--}}
            {{--<li><a href="{{route('deals_path')}}" class="text-white">4-6 Days</a></li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            <div class="col-6 col-sm mb-3 text-white">
                <h3 class="h6 text-g-yellow">Destinations</h3>
                <ul class="m-0 text-g-yellow list-unstyled">
                    <li><a href="{{route('destinations_path')}}" class="text-white">Perú destinos</a></li>
                </ul>
            </div>
            {{--<div class="col-6 col-sm mb-3 text-white">--}}
            {{--<h3 class="h6 text-g-yellow">Hotels</h3>--}}
            {{--<ul class="m-0 text-g-yellow list-unstyled">--}}
            {{--<li><a href="" class="text-white">2 Stars</a></li>--}}
            {{--<li><a href="" class="text-white">3 Stars</a></li>--}}
            {{--<li><a href="" class="text-white">4 Stars</a></li>--}}
            {{--<li><a href="" class="text-white">5 Stars</a></li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            <div class="col-6 col-sm mb-3 text-white">
                <h3 class="h6 text-g-yellow">Sobre Nós</h3>
                <ul class="m-0 text-g-yellow list-unstyled">
                    <li><a href="{{route('about_path')}}" class="text-white">Sobre Nós</a></li>
                    <li><a href="{{route('social_path')}}" class="text-white">Responsibilidade Social</a></li>
                </ul>
            </div>
            {{--<div class="col-6 col-sm mb-3 text-white">--}}
            {{--<h3 class="h6 text-g-yellow">Offices</h3>--}}
            {{--<ul class="m-0 text-g-yellow list-unstyled">--}}
            {{--<li>PERU: Av. Collasuyo 986 Cusco-Peru</li>--}}
            {{--<li>USA: 1440 G St NW, Washington DC, 20005</li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            <div class="col-6 col-sm mb-3 text-white">
                <h3 class="h6 text-g-yellow">FAQ</h3>
                <ul class="m-0 text-g-yellow list-unstyled">
                    {{--<li><a href="" class="text-white">Getting To Peru</a></li>--}}
                    <li><a href="{{route('dicas_path')}}" class="text-white">Preguntas Mais Frequentes</a></li>
                </ul>
            </div>
            {{--<div class="col-6 col-sm mb-3 text-white">--}}
                {{--<h3 class="h6 text-g-yellow">Testimonials</h3>--}}
                {{--<ul class="m-0 text-g-yellow list-unstyled">--}}
                    {{--<li><a href="#" class="text-white"></a></li>--}}
                    {{--<li><a href="" class="text-white">Reviews & Testmonials</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            <div class="col-6 col-sm mb-3 text-white">
                <h3 class="h6 text-g-yellow">Contato</h3>
                <ul class="m-0 text-g-yellow list-unstyled">
                    {{--<li><a href="" class="text-white" data-toggle="modal" data-target="#modal-contact">Email</a></li>--}}
                    <li><a href="tel:+551131982239">+55 (11) 3198-2239</a></li>
                    {{--<li><a href="" class="text-white">Address</a></li>--}}
                </ul>
            </div>
            <div class="col-6 col-sm mb-3 text-white">
                <h3 class="h6 text-g-yellow">Hotéis</h3>
                <ul class="m-0 text-g-yellow list-unstyled">
                    <li><a href="{{route('hoteles_path')}}" class="text-white">Hotéis</a></li>
                </ul>
            </div>
        </div>
        {{--<div class="row bg-light pt-3">--}}
            {{--<div class="col-12 col-sm mb-3">--}}
                {{--<h6 class="mt-2">GOTOPERU GROUP:</h6>--}}
            {{--</div>--}}
            {{--<div class="col-6 col-sm mb-3">--}}
                {{--<img src="{{asset('images/logos/logo-gotoperu-footer.png')}}" alt="logo gotoperu" class="img-fluid">--}}
            {{--</div>--}}
            {{--<div class="col-6 col-sm mb-3">--}}
                {{--<img src="{{asset('images/logos/logo-andes-footer.png')}}" alt="logo andes viagens" class="img-fluid">--}}
            {{--</div>--}}
            {{--<div class="col-6 col-sm mb-3">--}}
                {{--<img src="{{asset('images/logos/logo-latinamerica-footer.png')}}" alt="logo gotolatinamerica" class="img-fluid">--}}
            {{--</div>--}}
            {{--<div class="col-6 col-sm mb-3">--}}
                {{--<img src="{{asset('images/logos/logo-mapi-galapagos-footer.png')}}" alt="logo machupicchu galapagos" class="img-fluid">--}}
            {{--</div>--}}
            {{--<div class="col-12 col-sm text-center">--}}
                {{--<b>PERU LOCAL TIME: 7:38PM</b>--}}
                {{--<a href="{{asset('pdf/terms-conditions.pdf')}}" target="_blank" class="btn btn-link d-block">Services Terms & Conditions</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="row">
            <div class="col text-center text-white">
                <small><i><b>PERU:</b> Av. Sol 948 , Cusco - Cusco | <b>USA:</b> 1440 G St NW, Washington DC, 20005</i></small>
            </div>
        </div>
    </div>
</footer>
{{--scripts--}}
<script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("js/plugins.js")}}"></script>
@stack('scripts')
<script>
    var swiper = new Swiper('.swiper-container', {
        direction: 'vertical',
        slidesPerView: 'auto',
        freeMode: true,
        scrollbar: {
            el: '.swiper-scrollbar',
        },
        mousewheel: true,
    });

    (function () {
        var ll = new LazyLoad({
            threshold: 0
        });
    }());
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.12&appId=1712869952328301&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<script>
    $(document).ready(function () {
        $(window).on('load scroll', function () {
            var scrolled = $(this).scrollTop();
            $('#title').css({
                'transform': 'translate3d(0, ' + -(scrolled * 0.2) + 'px, 0)', // parallax (20% scroll rate)
                'opacity': 1 - scrolled / 400 // fade out at 400px from top
            });
            $('#hero-vid').css('transform', 'translate3d(0, ' + -(scrolled * 0.25) + 'px, 0)'); // parallax (25% scroll rate)
        });

        // video controls
        $('#state').on('click', function () {
            var video = $('#hero-vid').get(0);
            var icons = $('#state > span');
            $('#overlay').toggleClass('fade');
            if (video.paused) {
                video.play();
                icons.removeClass('fa-play').addClass('fa-pause');
            } else {
                video.pause();
                icons.removeClass('fa-pause').addClass('fa-play');
            }
        });
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
</script>

    <script>
        //form
        function design(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('[name="_token"]').val()
                }
            });

            $("#d_send").attr("disabled", true);

            var filter=/^[A-Za-z][A-Za-z0-9_.]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;


            var s_destinations = document.getElementsByName('destinations[]');
            var $destinations = "";
            for (var i = 0, l = s_destinations.length; i < l; i++) {
                if (s_destinations[i].checked) {
                    $destinations += s_destinations[i].value+' , ';
                }
            }
            s_destinations = $destinations.substring(0,$destinations.length-3);

//                alert(s_destinations);

            var s_name = $('#d_name').val();
            var s_email = $('#d_email').val();
            var s_date = $('#d_date').val();
            var s_tel = $('#d_tel').val();
            var s_duration = $('#d_duration').val();
            var s_number = $('#d_numero').val();
            var s_other = $('#d_otros').val();


//                var s_comment = $('#d_comment').val();


            if (filter.test(s_email)){
                sendMail = "true";
            } else{
                $('#d_email').css("border-bottom", "2px solid #FF0000");
                sendMail = "false";
            }
            if (s_name.length == 0 ){
                $('#d_name').css("border-bottom", "2px solid #FF0000");
                var sendMail = "false";
            }

            if(sendMail == "true"){
                var datos = {

                    "txt_destinations" : s_destinations,
                    "txt_other" : s_other,

                    "txt_name" : s_name,
                    "txt_email" : s_email,
                    "txt_date" : s_date,
                    "txt_tel" : s_tel,
                    "txt_duration" : s_duration,
                    "txt_number" : s_number

                };
                $.ajax({
                    data:  datos,
                    url:   "{{route('design_path')}}",
                    type:  'post',

                    beforeSend: function () {

                        $('#d_send').removeClass('show');
                        $("#d_send").addClass('d-none');

                        $("#loader2").removeClass('d-none');
                        $("#loader2").addClass('show');
                    },
                    success:  function (response) {
                        $('#d_form')[0].reset();
                        $('#d_send').removeClass('d-none');
                        $('#d_send').addClass('show');
                        $("#loader2").removeClass('show');
                        $("#loader2").addClass('d-none');
                        $('#d_alert').removeClass('d-none');
                        $("#d_alert").addClass('show');
                        $("#d_alert b").html(response);
                        $("#d_alert").fadeIn('slow');
                        $("#d_send").removeAttr("disabled");
                    }
                });
            } else{
                $("#d_send").removeAttr("disabled");
            }
        }


        function contact(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('[name="_token"]').val()
                }
            });

            $("#c_send").attr("disabled", true);

            var filter=/^[A-Za-z][A-Za-z0-9_.]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;


//                alert(s_destinations);

            var s_name = $('#c_nombre').val();
            var s_email = $('#c_email').val();
            var s_comentario = $('#c_comentario').val();


//                var s_comment = $('#d_comment').val();


            if (filter.test(s_email)){
                sendMail = "true";
            } else{
                $('#c_email').css("border-bottom", "2px solid #FF0000");
                sendMail = "false";
            }
            if (s_name.length == 0 ){
                $('#c_nombre').css("border-bottom", "2px solid #FF0000");
                var sendMail = "false";
            }

            if(sendMail == "true"){
                var datos = {


                    "txt_name" : s_name,
                    "txt_email" : s_email,
                    "txt_comentario" : s_comentario,
                };
                $.ajax({
                    data:  datos,
                    url:   "{{route('contact_path')}}",
                    type:  'post',

                    beforeSend: function () {

                        $('#c_send').removeClass('show');
                        $("#c_send").addClass('d-none');

                        $("#loader3").removeClass('d-none');
                        $("#loader3").addClass('show');
                    },
                    success:  function (response) {
                        $('#c_form')[0].reset();
                        $('#c_send').removeClass('d-none');
                        $('#c_send').addClass('show');
                        $("#loader3").removeClass('show');
                        $("#loader3").addClass('d-none');
                        $('#c_alert').removeClass('d-none');
                        $("#c_alert").addClass('show');
                        $("#c_alert b").html(response);
                        $("#c_alert").fadeIn('slow');
                        $("#c_send").removeAttr("disabled");
                    }
                });
            } else{
                $("#c_send").removeAttr("disabled");
            }
        }

        function tel(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('[name="_token"]').val()
                }
            });

            $("#t_send").attr("disabled", true);

            var filter=/^[A-Za-z][A-Za-z0-9_.]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;
//                alert(s_destinations);

            var s_name = $('#t_name').val();
            var s_email = $('#t_email').val();
            var s_city = $('#t_city').val();
            var s_tel = $('#t_tel').val();


            if (filter.test(s_email)){
                sendMail = "true";
            } else{
                $('#t_email').css("border-bottom", "2px solid #FF0000");
                sendMail = "false";
            }

            if (s_name.length == 0 ){
                $('#t_name').css("border-bottom", "2px solid #FF0000");
                var sendMail = "false";
            }

            if (s_name.length == 0 ){
                $('#t_city').css("border-bottom", "2px solid #FF0000");
                var sendMail = "false";
            }
            if (s_name.length == 0 ){
                $('#t_tel').css("border-bottom", "2px solid #FF0000");
                var sendMail = "false";
            }


            if(sendMail == "true"){
                var datos = {

                    "txt_email" : s_email,
                    "txt_name" : s_name,
                    "txt_city" : s_city,
                    "txt_tel" : s_tel,
                };
                $.ajax({
                    data:  datos,
                    url:   "{{route('tel_path')}}",
                    type:  'post',

                    beforeSend: function () {

                        $('#t_send').removeClass('show');
                        $("#t_send").addClass('d-none');

                        $("#loader4").removeClass('d-none');
                        $("#loader4").addClass('show');
                    },
                    success:  function (response) {
                        $('#t_form')[0].reset();
                        $('#t_send').removeClass('d-none');
                        $('#t_send').addClass('show');
                        $("#loader4").removeClass('show');
                        $("#loader4").addClass('d-none');
                        $('#t_alert').removeClass('d-none');
                        $("#t_alert").addClass('show');
                        $("#t_alert b").html(response);
                        $("#t_alert").fadeIn('slow');
                        $("#t_send").removeAttr("disabled");
                    }
                });
            } else{
                $("#t_send").removeAttr("disabled");
            }
        }





        function designInquire(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('[name="_token"]').val()
                }
            });

            $("#submit_tip").attr("disabled", true);

            var filter=/^[A-Za-z][A-Za-z0-9_.]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;


            var s_accommodation = document.getElementsByName('accommodation[]');
            var $accommodation = "";
            for (var i = 0, l = s_accommodation.length; i < l; i++) {
                if (s_accommodation[i].checked) {
                    $accommodation += s_accommodation[i].value+' , ';
                }
            }
            s_accommodation = $accommodation.substring(0,$accommodation.length-3);

            var s_destinations = document.getElementsByName('destinations[]');
            var $destinations = "";
            for (var i = 0, l = s_destinations.length; i < l; i++) {
                if (s_destinations[i].checked) {
                    $destinations += s_destinations[i].value+' , ';
                }
            }
            s_destinations = $destinations.substring(0,$destinations.length-3);

            var s_number = $(".number:checked").val();
            var s_number_t = $("#h_number").val();
            var s_duration = $(".duration:checked").val();
            var s_duration_t = $("#h_duration").val();
            var s_date = $('#h_date').val();
            var s_tel = $('#h_tel').val();
            var s_name = $('#h_name').val();
            var s_email = $('#h_email').val();
            var s_comment = $('#h_comment').val();


            if (filter.test(s_email)){
                sendMail = "true";
            } else{
                $('#h_email').css("border-bottom", "2px solid #FF0000");
                sendMail = "false";
            }
            if (s_name.length == 0 ){
                $('#h_name').css("border-bottom", "2px solid #FF0000");
                var sendMail = "false";
            }

            if(sendMail == "true"){
                var datos = {

                    "txt_accommodation" : s_accommodation,
                    "txt_destinations" : s_destinations,
                    "txt_number" : s_number,
                    "txt_number_t" : s_number_t,
                    "txt_duration" : s_duration,
                    "txt_duration_t" : s_duration_t,
                    "txt_date" : s_date,
                    "txt_tel" : s_tel,
                    "txt_name" : s_name,
                    "txt_email" : s_email,
                    "txt_comment" : s_comment,

                };
                $.ajax({
                    data:  datos,
                    url:   "{{route('design_inquire_path')}}",
                    type:  'post',

                    beforeSend: function () {

                        // $('#de_send').removeClass('show');
                        $("#submit_tip").addClass('d-none');
                        $("#h_load").removeClass('d-none');
                    },
                    success:  function (response) {
                        $('#h_form')[0].reset();
                        $('#submit_tip').removeClass('d-none');
                        $("#h_load").addClass('d-none');
                        $('#h_alert').removeClass('d-none');
                        // $("#h_alert b").html(response);
                        $("#h_alert").fadeIn('slow');
                        $("#submit_tip").removeAttr("disabled");
                    }
                });
            } else{
                $("#submit_tip").removeAttr("disabled");
            }
        }


        $('#d_date').datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
        });

        function startOlark() {
            olark('api.box.expand');
        }


        function estado() {
            $(".duration_ch").removeClass('active');
        }
        function estado2() {
            $(".number_ch").removeClass('active');
        }



    </script>

    <!-- begin olark code -->
<script type="text/javascript" async> ;(function(o,l,a,r,k,y){if(o.olark)return; r="script";y=l.createElement(r);r=l.getElementsByTagName(r)[0]; y.async=1;y.src="//"+a;r.parentNode.insertBefore(y,r); y=o.olark=function(){k.s.push(arguments);k.t.push(+new Date)}; y.extend=function(i,j){y("extend",i,j)}; y.identify=function(i){y("identify",k.i=i)}; y.configure=function(i,j){y("configure",i,j);k.c[i]=j}; k=y._={s:[],t:[+new Date],c:{},l:a}; })(window,document,"static.olark.com/jsclient/loader.js");
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('9427-560-10-8022');</script>
<!-- end olark code -->



</body>
</html>