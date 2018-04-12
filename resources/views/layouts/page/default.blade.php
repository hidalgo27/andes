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



<section class="bg-white py-5">
    <div class="container">

        <div class="row py-5 justify-content-center">
            <div class="col-12 col-sm-8 col-md-8 col-lg-5">
                <img src="{{asset('images/logo-andes-c.png')}}" alt="" class="img-fluid">
            </div>
        </div>

        <div class="row pt-4">
            <div class="col-12 col-sm-4 mb-5">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                        <img src="{{asset('images/icons/group.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        Grupos pequenos e passeios privados
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 mb-5">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                        <img src="{{asset('images/icons/assistance.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        Moramos no perú, porém oferecemos assistencia 24/7
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 mb-5">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                        <img src="{{asset('images/icons/customize.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        Escolha de programas prontos para comprar ou personalizar suas férias
                    </div>
                </div>
            </div>

            {{--<div class="w-100 py-4"></div>--}}
            <div class="col-12 col-sm-4 mb-5">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                        <img src="{{asset('images/icons/location.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        Custos menores, somos uma agencia local
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 mb-5">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                        <img src="{{asset('images/icons/trip.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        Excelentes coméntarios na tripadvisor
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 mb-5">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                        <img src="{{asset('images/icons/departure.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        Temos passeios todos os dias do ano
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light d-none d-sm-block">
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="{{asset("images/sponsor/logo-facebook.png")}}" alt="" class="img-fluid">
            </div>
            <div class="col">
                <img src="{{asset("images/sponsor/logo-asta.png")}}" alt="" class="img-fluid">
            </div>
            <div class="col">
                <img src="{{asset("images/sponsor/logo-newyorktimes.png")}}" alt="" class="img-fluid">
            </div>
            <div class="col">
                <img src="{{asset("images/sponsor/logo-apotur.png")}}" alt="" class="img-fluid">
            </div>
            <div class="col">
                <img src="{{asset("images/sponsor/logo-promperu.png")}}" alt="" class="img-fluid">
            </div>
            <div class="col">
                <img src="{{asset("images/sponsor/logo-meetup.png")}}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<section class="bg-dark d-none d-sm-block py-5">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-3 py-2">
                <img src="{{asset('images/logo-andes.png')}}" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row pt-3">
            <div class="col">
                <img src="{{asset("images/group.jpg")}}" alt="" class="img-fluid rounded">
            </div>
            <div class="col text-center">
                <h5 class="font-weight-bold mt-4 text-white">CONFIANÇA</h5>
                {{--<h3>Andes Viagens</h3>--}}
                <p class="py-3 text-white lead">Agência de viagens com grande experiência no campo do turismo. Dispomos de um grupo de profissionais qualificados e com serviços de primeira qualidade, que se encarregarão para que sua estadia em nosso país seja de seu completo agrado.</p>
                <a href="https://api.whatsapp.com/send?phone=51992051190" target="_blank" class="btn btn-xs btn-success"><img src="{{asset('images/icons/whatsapp.png')}}" alt="" width="30"> Fale com nós agora</a>
                <a href="https://m.me/ANDESVIAGENS/" target="_blank" class="btn btn-xs btn-primary"><img src="{{asset('images/icons/messenger.png')}}" alt="" width="30"> Fale com nós agora</a>
            </div>
        </div>

    </div>
</section>
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
<footer class="pt-4 pb-2 bg-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 border border-left-0 border-bottom-0 border-right-0 border-light">
                <div class="row mt-5">
                    <div class="col my-2">
                        <a href="https://www.tripadvisor.com.br/ShowTopic-g294311-i818-k6665256-Alguem_ja_viajou_ao_Peru_com_a_ANDES_VIAGENS_COM-Peru.html" target="_blank"><img src="{{asset('images/trip.png')}}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="col text-center font-montserrat">
                        <p class="text-white m-0"><i class="fa fa-phone"></i> (11) 4349 6191</p>
                        <p class="text-white m-2"><i class="fa fa-whatsapp"></i> (51) 992051190</p>
                        <a href="#" class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target="#design_m">Solicitar un Orçamento</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <p class="text-center text-white"><img src="{{asset("images/logo-gotoperu.png")}}" width="100" alt="logo gotoperu"> GROUP PROVIDES YOU WITH VACATIONS OF A LIFETIME SINCE 2009</p>
                <p class="m-0 text-center text-white"><img src="{{asset("images/logo-andes.png")}}" width="120" alt="logo andesviagens"> is part of GOTOPERU GROUP © Copyright 2017 | GOTOPERU.COM   ANDESVIAGENS.COM</p>
                <p class="mt-5 text-center text-white">Avenida Collasuyo 896 Urb. Miravalle - Cusco - Cusco - Perú</p>
            </div>
        </div>
    </div>
    <!-- /.container -->
    {{--<p class="totop">--}}
        {{--<a href="https://api.whatsapp.com/send?phone=51992051190" target="_blank"><img src="{{asset('images/icons/whatsapp-c.png')}}" alt="" width="40" class="d-block"></a>--}}
        {{--<a href="https://m.me/ANDESVIAGENS/" target="_blank"><img src="{{asset('images/icons/messenger-c.png')}}" alt="" width="40" class="d-block my-3"></a>--}}
        {{--<a href="#top" class="top">--}}
            {{--<img src="{{asset('images/icons/circle-arrow.png')}}" alt="" width="40">--}}
        {{--</a>--}}
    {{--</p>--}}
</footer>
{{--scripts--}}
<script src="{{asset("js/app.js")}}"></script>
@stack('scripts')

<div id="fb-root"></div>
<script>

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10&appId=1712869952328301';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    function CrearEnlace(url) {
        location.href=url;
    }

</script>

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


        $('#d_date').datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
        });

        function startOlark() {
            olark('api.box.expand');
        }

    </script>

    <!-- begin olark code -->
    <script type="text/javascript" async>
        ;(function(o,l,a,r,k,y){if(o.olark)return;
            r="script";y=l.createElement(r);r=l.getElementsByTagName(r)[0];
            y.async=1;y.src="//"+a;r.parentNode.insertBefore(y,r);
            y=o.olark=function(){k.s.push(arguments);k.t.push(+new Date)};
            y.extend=function(i,j){y("extend",i,j)};
            y.identify=function(i){y("identify",k.i=i)};
            y.configure=function(i,j){y("configure",i,j);k.c[i]=j};
            k=y._={s:[],t:[+new Date],c:{},l:a};
        })(window,document,"static.olark.com/jsclient/loader.js");
        / Add configuration calls below this comment /
        olark.identify('8407-174-10-8084');</script>
    <!-- end olark code -->



</body>
</html>