@extends('layouts.page.default')

@section('content')
    <section class="header-video d-none d-md-block">
        {{--<div id="title" class="text-white">--}}
            {{--<div class="container-fluid">--}}
                {{--<div class="row align-items-center mt-2">--}}
                    {{--<div class="col-md-6 col-lg-3">--}}
                        {{--<a href="{{route('home_path')}}"><img src="{{asset('images/logo-andes.png')}}" alt="" class="img-fluid"></a>--}}
                    {{--</div>--}}
                    {{--<div class="d-none d-lg-inline col-lg">--}}
                        {{--<div class="row align-items-center">--}}
                            {{--<div class="col-9">--}}
                                {{--<i class="text-g-yellow">Operador de viagens no Peru & Machu Picchu</i>--}}
                            {{--</div>--}}
                            {{--<div class="col-3">--}}
                                {{--<img src="{{asset('images/logos/logo-expedia2.png')}}" alt="" class="img-fluid">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md col-lg-auto text-right sticky-top">--}}
                        {{--<a href="tel:+2029963000" class="mx-3 h4">(202) 996-3000</a>--}}
                        {{--<span class="text-white">Parte do grupo GOTOPERU</span>--}}
                        {{--<a href="#" class="mx-3 h2"  data-toggle="modal" data-target="#modal-menu"><i class="fa fa-bars"></i></a>--}}
                        {{--<!-- Button trigger modal -->--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div id="title" class="text-white">
            <div class="container-fluid">
                <div class="row align-items-center mt-2">
                    <div class="col-md-6 col-lg-3">
                        <a href="{{route('home_path')}}"><img src="{{asset('images/logo-andes.png')}}" alt="logo andesviagens" class="img-fluid"></a>
                        {{--<i class="text-g-yellow text-right">Operador de viajes en Peru y Machu Picchu</i>--}}
                    </div>
                    <div class="d-none d-lg-inline col-lg">
                        <div class="row align-items-center">
                            <div class="col-9 text-right">
                                <span class="text-g-yellow text-right font-weight-bold">+55 (11) 41302800</span>
                            </div>
                            <div class="col-3">
                                <img src="{{asset('images/logos/logo-expedia2.png')}}" alt="Logo expedia" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-lg-auto text-right sticky-top">
                        {{--<a href="tel:+2029963000" class="mx-3 h4">(202) 996-3000</a>--}}
                        <span class="text-white">Parte do grupo GOTOPERU</span>
                    {{--<a href="#" class="mx-3 h2"  data-toggle="modal" data-target="#modal-menu"><i class="fa fa-bars"></i></a>--}}
                    <!-- Button trigger modal -->
                    </div>
                </div>
            </div>
        </div>
        <div id="overlay" class="position-relative">
            <video class="" id="hero-vid" poster="{{asset('images/sliders/package-1.jpg')}}" autoplay loop muted>
                <source src="{{asset('media/video6.mp4')}}" />
                <source src="{{asset('media/video6.m4v')}}" type="video/mp4" />
                <source src="{{asset('media/video6.webm')}}" type="video/webm" />
                <source  src="{{asset('media/video6.ogv')}}" type="video/ogg" />
            </video>
            {{--<div id="state" class=""><span class="fa fa-pause"></span></div>--}}
            {{--<img id="hero-pic" class="d-none" src="http://www.markhillard.com/sandbox/media/polina.jpg" alt="">--}}
            {{----}}
            <div class="header-expedia-card col-md-4 col-lg-3 col-xl-2 text-white rounded bg-rgba-dark p-3 d-none">
                <div class="row">
                    <div class="col">
                        <a href="packages/andes-escape/6-days-tours">
                            <div class="row">
                                <div class="col text-center">
                                    <h3 class="text-g-yellow font-weight-bold m-0">Andes Escape</h3>
                                </div>
                            </div>
                            <div class="row no-gutters my-2 text-white">
                                <div class="col">
                                    <span class="h2">6</span> <small>days</small>
                                </div>
                                <div class="col">
                                    <span class="h2 text-info"><sup>$</sup>985</span> <small>p.p</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <img src="{{asset('images/icons/include/assistances.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Assistances">
                                            {{--<span>Assistances</span>--}}
                                        </div>

                                        <div class="col">
                                            <img src="{{asset('images/icons/include/entrances.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Entrances">
                                            {{--<span>Entrances</span>--}}
                                        </div>
                                        <div class="col">
                                            <img src="{{asset('images/icons/include/transfers.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Transfers">
                                            {{--<span>Transfers</span>--}}
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <img src="{{asset('images/icons/include/hotels.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Hotels">
                                            {{--<span>Hotels</span>--}}
                                        </div>
                                        <div class="col">
                                            <img src="{{asset('images/icons/include/tours.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Tours">
                                            {{--<span>Tours</span>--}}
                                        </div>
                                        <div class="col">
                                            <img src="{{asset('images/icons/include/trains.png')}}" alt="" class="p-1 w-100" data-toggle="tooltip" data-placement="top" title="Trains">
                                            {{--<span>Trains</span>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col text-white">
                                    <small class="m-0 d-block"><i class="fa fa-angle-right"></i> MACHUPICCHU & CUSCO</small>
                                    <small class="m-0 d-block"><i class="fa fa-angle-right"></i> LAKE TITICACA & PUNO</small>
                                    <small class="m-0 d-block"><i class="fa fa-angle-right"></i> LIMA</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            {{--<div class="header-expedia text-white p-3">As local travel operators our programs start daily</div>--}}
            <div class="header-expedia p-3 w-100 text-center d-none d-xl-inline">
                <p class="text-white h6"><span class="bg-g-green p-1 rounded-circle px-3 text-white">1</span> Compartilhe seus planos de viagem <span class="bg-g-yellow p-1 rounded-circle px-3 text-white ml-5">2</span> Reciba um roteiro personalizado e cotacao <span class="bg-g-dark p-1 rounded-circle px-3 text-white ml-5">3</span> Descobra o melhor do Peru com ANDESVIAGENS</p>
            </div>
        </div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row content-header-row align-items-center">
                    <div class="col text-center">
                        {{--<a href="" class="text-white"><i class="fa fa-play-circle fa-4x"></i></a>--}}

                        <div class="text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                            <div class="">
                                <div class="content-video-1 text-white">
                                    {{--<img src="images/travel/video-1.jpg" alt="video">--}}
                                    <h3 class="font-weight-light">Montemos juntos sua proxima aventura no Peru</h3>
                                    <a href="#Inquire" class="btn btn-g-yellow btn-lg h2 font-weight-bold mt-3">Minha viagem ideal</a>
                                    {{--<div class="content-video-btn-1 mt-4">--}}
                                    {{--<a href="https://www.youtube.com/watch?v=pNe-NtXIULs"  class="html5lightbox text-white" title=""><i class="fa fa-play-circle fa-4x"></i></a>--}}
                                    {{--</div>--}}
                                    <div class="row justify-content-center">
                                        <div class="col-md-7 col-lg-5 mt-5">
                                            <div class="bg-rgba-white-5 rounded shadow p-3">
                                                <h5 class="m-0 text-dark font-weight-bold">PARCELE SUA COMPRA <span class="text-primary">EM ATÉ</span></h5>
                                                <p class="display-2 font-weight-bold m-0 font-weight-bold text-primary">12x</p>
                                                <div class="row no-gutters">
                                                    <div class="col">
                                                        <img src="{{asset('images/logos/visa.png')}}" alt="logo visa" class="w-100 p-1">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{asset('images/logos/mastercard.png')}}" alt="logo mastercard" class="w-100 p-1">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{asset('images/logos/american_express.png')}}" alt="logo american express" class="w-100 p-1">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{asset('images/logos/hipercard.png')}}" alt="logo hipercard" class="w-100 p-1">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{asset('images/logos/elo.png')}}" alt="logo elo" class="w-100 p-1">
                                                    </div>
                                                    <div class="col">
                                                        <img src="{{asset('images/logos/diners_club.png')}}" alt="logo diner club" class="w-100 p-1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>



            </div>
        </div>
    </section>
    @include('layouts.page.menu-home')
    @include('layouts.page.menu-mobil')

    <section class="d-md-none">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col">
                    <img src="{{asset('images/machu_picchu.jpg')}}" alt="" class="w-100">
                </div>
            </div>
            <div class="row no-gutters align-items-center">
                <div class="col">
                    <ul class="list-group">
                        <li class="list-group-item"><span class="bg-g-green p-1 rounded-circle px-2 text-white">1</span> Compartilhe seus planos de viagem</li>
                        <li class="list-group-item"><span class="bg-g-yellow p-1 rounded-circle px-2 text-white">2</span> Reciba um roteiro personalizado e cotação</li>
                        <li class="list-group-item"><span class="bg-g-dark p-1 rounded-circle px-2 text-white">3</span> Descubra o melhor do Peru com GOTOPERU</li>
                    </ul>

                </div>
            </div>
        </div>
    </section>


    <div class="bg-white">

        {{--<ul id="menu" class="nav nav-pills nav-fill bg-light rounded d-none  d-sm-flex sticky-top nav-itinerary">--}}
            {{--<li class="nav-item d-none d-sm-block">--}}
                {{--<a class="nav-link text-white rounded-0 bg-g-green" href="#paquetes">Pacotes</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link text-white rounded-0 bg-danger" href="#hotel">Pacotes sem Hotel</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link text-white rounded-0 bg-info" href="#tours">Passeios Individuais</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item d-none d-sm-block">--}}
                {{--<a class="nav-link text-white rounded-0 bg-g-yellow" href="#traslados">Transferências Solo</a>--}}
            {{--</li>--}}
        {{--</ul>--}}



        <section class="pt-3 bg-light">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12 col-sm-12 col-lg  text-center mb-4">
                        <h3>Personalize sua viagem</h3>
                        <p>Sem compromisso</p>
                        <button type="button" class="btn btn-g-green" data-toggle="modal" data-target="#design_m">
                            Minha viagem sonhada seria ...
                        </button>
                    </div>
                    <div class="col-12 col-sm-12 col-lg  text-center mb-4 border border-top-0 border-bottom-0">
                        <h3>Contate-nos</h3>
                        <p>Telefone: <i class="fa fa-phone"></i> 55(11)31982239</p>
                        {{--<a href="" class="btn btn-g-yellow">Contáctenos</a>--}}
{{--                        <button type="button" class="btn btn-g-yellow btn-sm mb-2" data-toggle="modal" data-target="#contant_m">--}}
{{--                            Contate-nos--}}
{{--                        </button>--}}

                        <button type="button" class="btn btn-dark  mb-2" data-toggle="modal" data-target="#llamada_m">
                            Nós te ligamos
                        </button>
                        {{--<a href="" class="btn btn-dark">Nosotros te llamamos</a>--}}
                    </div>
                    <div class="col-12 col-sm-12 col-lg text-center mb-3">
                        <h3>Fale Chat agora</h3>
                        <p>Entre em contato:</p>
                        <a href="https://m.me/GOTOPERUcom/" class="btn btn-primary mb-2" target="_blank"><i class="fab fa-facebook-messenger"></i> Messenger</a>
                        <a href="https://api.whatsapp.com/send?phone=51994954566" class="btn btn-success mb-2" target="_blank"><i class="fab fa-whatsapp"></i> Whatsapp</a>
                    </div>
                </div>
            </div>




            <!-- Modal -->
            <div class="modal fade" id="llamada_m" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Nós te ligamos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Digite as informações necessárias e Nós te ligamos.</p>
                            <form id="t_form">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="t_name">Nome</label>
                                    <input type="text" class="form-control" id="t_name" placeholder="Nome completo">
                                </div>
                                <div class="form-group">
                                    <label for="t_email">Email</label>
                                    <input type="email" class="form-control" id="t_email" placeholder="Seu email">
                                </div>
                                <div class="form-group">
                                    <label for="t_city">Cidade/País</label>
                                    <input type="text" class="form-control" id="t_city" placeholder="Lima/Peru">
                                </div>

{{--                                <div class="form-group">--}}
{{--                                    <label for="t_tel">Telefone</label>--}}
{{--                                    <input type="text" class="form-control" id="t_tel" placeholder="Ej. +51 980385734">--}}
{{--                                </div>--}}

                                <div class="input-group">
                                    {{--<label for="inputEmail4" class="col-form-label"><sup class="text-danger">*</sup>Telefone</label>--}}
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="number" class="form-control" id="t_ddd" placeholder="DDD">
                                    <input type="tel" class="form-control w-50" id="t_tel" placeholder="N° de Telefone">
                                </div>


                                <div class="alert alert-success alert-dismissible fade d-none" id="t_alert" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>Muito obrigado</strong> por entrar em contato com a GOTOPERU, um agente de viagens entrará em contato com você nas próximas 24 horas para ajudá-lo a planejar sua viagem. :)
                                </div>

                                {{--<button type="submit" class="btn btn-primary">Sign in</button>--}}
                            </form>
                        </div>
                        <div class="text-center mb-4">
                            {{--<button type="submit" class="btn btn-primary">Llámenme ahora mismo</button>--}}
                            <button class="btn btn-primary" id="t_send" type="button" onclick="tel()">Me ligue agora mesmo

                            </button>
                            <ul class="fa-ul pull-right d-none" id="loader4">
                                <li><i class="fa-li fa fa-spinner fa-spin"></i> <i>Envio...</i></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col d-none d-md-inline">
                        <img data-src="{{asset('images/about.jpg')}}" alt="" class="w-100 rounded img-lazy">
                    </div>
                    <div class="col">
                        <h1>Pacotes de Viagens ao Peru</h1>
                        <p>Somos <b>ANDESVIAGENS</b>, especialistas em viagens locais! Nossos guias, motoristas e representantes locais terão o prazer em compartilhar o melhor do nosso país em nossos mais de 12 anos de experiência criando viagens inesquecíveis para a terra dos Incas! Temos uma grande reputação, incluindo parceiros globais como Expedia, Travelocity e Tripadvisor, que também reconheceram nossos esforços citando-nos como os melhores especialistas locais.</p>
                        <div class="row align-items-center">
                            <div class="col-12 text-center">
                                <h6 class="text-secondary">
                                    <img src="{{asset('images/logo-andes-bc.png')}}" alt="" width="120">
                                    <span class="mt-1">é a divisão de</span>
                                    <img src="{{asset('images/logo-gotoperu.png')}}" alt="" width="100">
                                </h6>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="d-none d-md-flex bg-light pb-5">
            <div class="container">
                <div class="row pt-5 pb-2">
                    <div class="col">
                        <h2 class="text-secondary h4"><strong>OFERTAS DO MÊS</strong></h2>
                        {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                        {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                        {{--<p class="h4 font-weight-light">Offering you an authentic and reliable <strong>travel experience</strong> in peru welcoming you to explore the many fully <strong>Customized Travel Packages</strong> we have that suit every budget. let us plan your unforgettable <strong>trip</strong> to our majestic <strong>Machu Picchu</strong> and the rest of our  homeland… Peru!</p>--}}
                    </div>
                </div>

                <div class="row no-gutters">
                    <div class="col-9 col-md-8 col-xl-9 d-flex">
                        <div class="container-fluid p-0">

                            <div class="slider-containers">

                                <!--effect #1 -->
                                <div class="slider-container">
                                    <div class="flexbox-slider flexbox-slider-1">
                                        <div class="flexbox-slide">
                                            <img data-src="{{asset('images/banners/home/cusco.jpg')}}" alt="Cuzco" class="img-lazy">
                                            <div class="text-block">
                                                <h3>Cuzco</h3>
                                                {{--<div class="text">--}}
                                                {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
                                                {{--</div>--}}
                                            </div>
                                        </div>
                                        <div class="flexbox-slide">
                                            <img data-src="{{asset('images/banners/home/moray.jpg')}}" alt="Moray" class="img-lazy">
                                            <div class="text-block">
                                                <h3>Moray</h3>
                                                {{--<div class="text">--}}
                                                {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
                                                {{--</div>--}}
                                            </div>
                                        </div>
                                        <div class="flexbox-slide">
                                            <img data-src="{{asset('images/banners/home/machupicchu.jpg')}}" alt="Machu Picchu" class="img-lazy">
                                            <div class="text-block">
                                                <h3>Machu Picchu</h3>
                                                {{--<div class="text">--}}
                                                {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
                                                {{--</div>--}}
                                            </div>
                                        </div>
                                        <div class="flexbox-slide">
                                            <img data-src="{{asset('images/banners/home/maras.jpg')}}" alt="Maras & Moray" class="img-lazy">
                                            <div class="text-block">
                                                <h3>Maras & Moray</h3>
                                                {{--<div class="text">--}}
                                                {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
                                                {{--</div>--}}
                                            </div>
                                        </div>
                                        <div class="flexbox-slide">
                                            <img data-src="{{asset('images/banners/home/valle.jpg')}}" alt="Sacred Valley" class="img-lazy">
                                            <div class="text-block">
                                                <h3>Vale Sagrado</h3>
                                                {{--<div class="text">--}}
                                                {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
                                                {{--</div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col col-md-4 col-xl-3 d-flex align-items-center bg-g-dark">
                        <div class="text-white p-3">
                            <h3 class="display-4">6 DIAS</h3>
                            <p class="lead">Cuzco, Machu Picchu, Maras & Moray, Vale Sagrado.</p>
                            <p class="d-block text-g-yellow py-2">Passeios, traslados, ingressos, café da manhã, trem.</p>
                            <p class="h1 text-right my-3"><sup>de</sup> $619</p>
                            <a href="pacotes-de-viagem-peru/imperio-dos-incas" class="btn btn-g-yellow btn-block">Veja mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="bg-white d-none d-md-flex">
            <div class="container">
                <div class="row pt-5 pb-2">
                    <div class="col">
                        <h2 class="text-secondary h4"><strong>CENTENAS DE TESTEMUNHOS EM UMA EMPRESA</strong></h2>
                        {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                        {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                        {{--<p class=" font-weight-light">You are already in the "neighborhood" here are some possible multi countries travel programs for your review, rest assure we can fully customize any travel lenght and any combination of countries, we can even design a comprehensive 30 days South America escape.</p>--}}
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white pb-4 d-none d-md-flex">
            <div class="container">
                <div class="row mb-4 align-items-center">
                    <div class="col">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">

                                        <p>
                                            <i class="fa fa-quote-left fa-2x float-left text-g-green pr-2"></i>
                                            Voltei ontem do Peru, onde passei uma semana com tudo comprado pela Andes Viagens / Go to Peru.

                                            Foi tudo otimo e conforme o planejado, eles cumpriram com tudo que prometeram, foram bem confiáveis e pontuais nos horários dos passeios. Recomendo!!! O atendimento tambem foi otimo e o pessoal foi bastante simpático.
                                            <i class="fa fa-quote-right fa-2x float-right text-g-green pl-2"></i>
                                        </p>
                                        <i class="float-right text-g-yellow">Tapiratiba, SP</i>

                                </div>

                                @foreach($testimonial as $testimonials)
                                    <div class="carousel-item ">
                                            <p>
                                                <i class="fa fa-quote-left fa-2x float-left text-g-green pr-2"></i>
                                                {{$testimonials->contenido}}
                                                <i class="fa fa-quote-right fa-2x float-right text-g-green pl-2"></i>
                                            </p>
                                            <i class="float-right text-g-yellow">{{$testimonials->nombre}} {{$testimonials->ciudad}}</i>
                                    </div>
                                @endforeach

                                {{--<div class="carousel-item">--}}
                                {{--<div class="px-5">--}}
                                {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem cupiditate deserunt dolore doloremque enim error eveniet fugiat fugit illo impedit, labore nisi nostrum placeat quaerat similique sunt, suscipit tempora velit.--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="carousel-item">--}}
                                {{--<div class="px-5">--}}
                                {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem cupiditate deserunt dolore doloremque enim error eveniet fugiat fugit illo impedit, labore nisi nostrum placeat quaerat similique sunt, suscipit tempora velit.--}}
                                {{--</div>--}}
                                {{--</div>--}}
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <img src="{{asset('images/banner-moises.jpg')}}" alt="moises" class="w-100 rounded">
                        <p><i>Sergio & Guilherme : Grato pela confiança em ANDESVIAGENS /  Agosto 2017</i></p>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <div class="row">
                            <div class="col">
                                <a href="https://www.tripadvisor.com.br/ShowTopic-g294311-i818-k6665256-Alguem_ja_viajou_ao_Peru_com_a_ANDES_VIAGENS_COM-Peru.html" class="btn btn-g-yellow" target="_blank">Link 1</a>
                                <a href="https://www.tripadvisor.pt/ShowTopic-g294311-i818-k11541292-Agencia_Andes_Viagens_Peru-Peru.html" class="btn btn-g-yellow" target="_blank">Link 2</a>
                                <a href="https://www.tripadvisor.com.br/ShowTopic-g294311-i818-k6665256-o40-Alguem_ja_viajou_ao_Peru_com_a_ANDES_VIAGENS_COM-Peru.html" class="btn btn-g-yellow" target="_blank">Link 3</a>
                                <a href="https://www.facebook.com/ANDESVIAGENS/photos/a.145372805588422.28097.145369322255437/654222391370125/?type=3&theater" class="btn btn-g-yellow" target="_blank">Link 4</a>
                                <a href="https://www.facebook.com/ANDESVIAGENS/photos/a.145372805588422.28097.145369322255437/425376894254677/?type=3&theater" class="btn btn-g-yellow" target="_blank">Link 5</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col">
                                <a href=""><img src="{{asset('images/icons/tripadvisor.png')}}" alt="" class="w-100" data-toggle="tooltip" data-placement="top" title="" data-original-title="If you are visiting anywhere in Peru, you cannot find a better choice than www.gotoperu.com – they live there, and work there, and can sort urgent issues readily, with a quick phone call."></a>
                            </div>
                            <div class="col">
                                <a href="https://www.trustpilot.com/review/gotoperu.com" target="_blank"><img src="{{asset('images/icons/trust.png')}}" alt="" class="w-100" data-toggle="tooltip" data-placement="top" title="" data-original-title="In summary, we had a wonderful time! We, of course, enjoyed the sights as we expected (Machu Picchu, Sacred Valley, train, Lake Titicacca), but all of the connections were on time and very comfortable. The guides (Franklin in Cuzco, Nellie in Machu Picchu) were very pleasant and very knowledgeable. "></a>
                            </div>
                            <div class="col">
                                <a href="https://www.yelp.com/biz/gotoperu-washington?osq=gotoperu.com" target="_blank"><img src="{{asset('images/icons/yelp.png')}}" alt="" class="w-100 p-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="The arrangement of the agency since Cuzco arrival, has escort service all the way. You do not need to fear of lost. Hotel, tour guide, transfer are all excellent. "></a>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<div class="row pt-4">--}}
                    {{--<div class="col text-right">--}}
                        {{--<a href="" class="btn-link font-weight-normal">View Testimonials <i class="fa fa-chevron-right"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </section>

        <section class="bg-light">
            <div class="container">
                <div class="row pt-5 pb-2">
                    <div class="col">
                        <h1 class="text-secondary h4"><strong>PACOTES DE VIAGENS</strong></h1>
                        {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                        {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                        {{--<p class="h4 font-weight-light">Offering you an authentic and reliable <strong>travel experience</strong> in peru welcoming you to explore the many fully <strong>Customized Travel Packages</strong> we have that suit every budget. let us plan your unforgettable <strong>trip</strong> to our majestic <strong>Machu Picchu</strong> and the rest of our  homeland… Peru!</p>--}}

                    </div>
                </div>
            </div>
        </section>


        <section class="bg-light">
            <div class="container">

                <div class="row">
                    <div class="col col-xs-12 d-md-none d-lg-inline col-md-8 col-lg-12 col-xl-8">
                        <div class="row">
                            @foreach($paquete->where('estado',1)->sortBy('duracion')->take(4) as $paquetes)
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <div class="card mb-3">
                                    <a href="{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}" class="position-relative">
                                        <img class="card-img-top img-lazy" data-src="{{asset('images/packages/'.$paquetes->codigo.'.jpg')}}" alt="">

                                        <div class="card-img-overlay bg-rgba-dark-3 p-0">
                                            <div class="row justify-content-between no-gutters">
                                                <div class="col col-sm-5 py-3">
                                                    <h5 class="m-0 text-white px-3">{{$paquetes->duracion}} Dias</h5>
                                                </div>
                                                <div class="col col-sm-4 bg-g-dark py-3 text-white text-center">
                                                    @foreach($paquetes->precio_paquetes as $precio)
                                                        @if($precio->estrellas == 2)
                                                            @if($precio->precio > 0)
                                                                <p class="text-g-yellow font-weight-bold m-0 h5"><small><sup>de $</sup></small>{{$precio->precio}}<small>USD</small></p>
                                                            @else
                                                                <span class="text-danger">Preguntar</span>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-img-overlay-packages bg-rgba-dark-1">
                                            <h5 class="card-title text-white m-0">{{ucwords(strtolower($paquetes->titulo))}}</h5>
                                            {{--<h2 class="card-title text-white m-0 h5"><a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquetes->titulo)), $paquetes->duracion])}}" class="text-dark">{{$paquetes->titulo}}</a></h2>--}}
                                            <small class="text-white font-weight-light">
                                                <i class="fa fa-map-marker"></i>
                                                @php
                                                    $k = 1;
                                                    $num_des = count($paquete_destinos->where('idpaquetes',$paquetes->id));
                                                @endphp
                                                @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                                    @if(isset($paquete_destino->destinos->nombre))
                                                        {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($k < $num_des),@else.@endif
                                                        @php $k++; @endphp
                                                    @endif
                                                @endforeach
                                            </small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-4 d-none d-sm-block col-sm-12 d-md-inline col-md-12 col-lg-12 col-xl-4">

                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="list-group position-relative">
                                        @foreach($paquete->random(8) as $paquetes)
                                            <a href="{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}" class="list-group-item list-group-item-action">
                                                <div class="media">
                                                    <img data-src="{{asset('images/packages/'.$paquetes->codigo.'.jpg')}}" alt="" width="60" height="60" class="rounded-circle align-self-center mr-3 img-lazy" data-toggle="tooltip" data-placement="top" title="{{(strtolower($paquetes->titulo))}}">
                                                    <div class="media-body">
                                                        <h5 class="mt-0"><span class="text-g-yellow">{{$paquetes->duracion}} Dias</span> {{ucwords(strtolower($paquetes->titulo))}}</h5>
                                                        <small>
                                                            <i class="fa fa-map-marker-alt"></i>
                                                            @php
                                                                $m = 1;
                                                                $num_des = count($paquete_destinos->where('idpaquetes',$paquetes->id));
                                                            @endphp
                                                            @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                                                @if(isset($paquete_destino->destinos->nombre))
                                                                    {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($m < $num_des),@else.@endif
                                                                    @php $m++; @endphp
                                                                @endif
                                                            @endforeach
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach
                                        <div class="gradient-destinations"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Scroll Bar -->
                            <div class="swiper-scrollbar"></div>
                        </div>



                    </div>
                </div>

                {{--<div class="row py-4">--}}
                    {{--<div class="col text-right">--}}
                        {{--<a href="" class="btn-link font-weight-normal">All Packages <i class="fa fa-chevron-right"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="row pb-4">
                    <div class="col text-right">
                        <a href="{{route('paquetes_path')}}" class="btn-link font-weight-normal">Veja todos os pacotes <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md mb-5">
                        <div class="alert bg-g-yellow py-2 mb-1" role="alert">
                            <h5 class="font-weight-bold m-0 text-white">Pacotes Sem Hotel</h5>
                        </div>
                        <h6 class="text-secondary py-2"><i class="fa fa-chevron-right"></i> <b>Incluso:</b> Passeios, traslados, ingressos, café da manha, trene.</h6>
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="list-group position-relative">
                                        @foreach($paquete->where('s_precio', 1)->sortBy('duracion') as $paquetes)
                                            <a href="{{route('sin_hotel_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}" class="list-group-item list-group-item-action">
                                                <div class="media">
                                                    <img src="{{asset('images/packages/'.$paquetes->codigo.'.jpg')}}" alt="" width="60" height="60" class="rounded-circle align-self-center mr-3" data-toggle="tooltip" data-placement="top" title="{{(strtolower($paquetes->titulo))}}">
                                                    <div class="media-body">
                                                        <h5 class="mt-0"><span class="text-g-yellow">{{$paquetes->duracion}} Days</span> {{ucwords(strtolower($paquetes->titulo))}}</h5>
                                                        <small>
                                                            <i class="fa fa-map-marker-alt"></i>
                                                            @php
                                                                $m = 1;
                                                                $num_des = count($paquete_destinos->where('idpaquetes',$paquetes->id));
                                                            @endphp
                                                            @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                                                @if(isset($paquete_destino->destinos->nombre))
                                                                    {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($m < $num_des),@else.@endif
                                                                    @php $m++; @endphp
                                                                @endif
                                                            @endforeach
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach
                                        <div class="gradient-destinations"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Scroll Bar -->
                            <div class="swiper-scrollbar"></div>
                        </div>
                        {{--<div class="row py-4">--}}
                            {{--<div class="col text-right">--}}
                                {{--<a href="{{route('paquetes_path')}}" class="btn-link font-weight-normal">Veja todos os pacotes <i class="fa fa-chevron-right"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                    <div class="col-12 col-sm-12 col-md mb-5">
                        <div class="alert bg-g-green py-2 mb-1" role="alert">
                            <h5 class="font-weight-bold m-0 text-white">Passeios Individuais</h5>
                        </div>
                        <h6 class="text-secondary py-2"><i class="fa fa-chevron-right"></i> <b>Incluso:</b> Passeios, traslados, ingressos.</h6>
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="list-group position-relative">

                                            @foreach($tours as $tour)
                                                <a href="{{route('itinerario_tours_show_path', str_replace(' ','-',strtolower($tour->titulo)))}}" class="list-group-item list-group-item-action">
                                                    <div class="row no-gutters">
                                                        <div class="col-8 col-sm-6 text-primary">
                                                            <b>{{ucwords(strtolower($tour->titulo))}}</b>
                                                        </div>
                                                        <div class="col d-none d-sm-inline">
                                                            <i class="fa fa-map-marker-alt  text-g-green"></i>
                                                            @php
                                                                $i = 1;
                                                                $num_des = count($tours_destinos->where('idtours',$tour->id));
                                                            @endphp
                                                            @foreach($tours_destinos->where('idtours',$tour->id) as $tour_destino)
                                                                {{ucwords(strtolower($tour_destino->destinos->nombre))}}@if($i < $num_des),@endif
                                                                @php $i++; @endphp
                                                            @endforeach
                                                        </div>
                                                        <div class="col col-sm-2 text-right">
                                                            <b>
                                                                @if($tour->precio < 0)
                                                                    <span class="text-danger">Pida una cotización</span>
                                                                @else
                                                                    <sup>$</sup>{{$tour->precio_g}}<small>USD</small>
                                                                @endif
                                                            </b>
                                                        </div>
                                                    </div>
                                                </a>
                                            @endforeach
                                        <div class="gradient-destinations"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Scroll Bar -->
                            <div class="swiper-scrollbar"></div>
                        </div>
                        <div class="row py-4">
                            <div class="col text-right">
                                <a href="{{route('tours_path')}}" class="btn-link font-weight-normal">Veja todos os passeios <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white d-none">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        {{--<h1 class="font-montserrat text-g-green">Tours a Machu Picchu Peru Agencia de Viajes y Turismo</h1>--}}
                        {{--<p class="text-secondary">Oficinas: Lima, Cuzco, Arequipa.</p>--}}
                        <p class="h3 my-3 font-weight-bold ">Os melhores testemunhos, 10 anos de experiência atrás de nós.</p>
                        <p class="lead d-none d-sm-block">Desde a sua chegada ao aeroporto em Lima ou Cuzco, mostraremos a nossa paixão pelo nosso país, mostrando-lhe o melhor do Peru com a nossa seleta equipe de guias GOTOPERU profissionais, sempre com nossa melhor hospitalidade peruana!</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="container bg-white d-none">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8">
                    <div class="row">
                        <div class="col">
                            <div id="paquetes" class="d-sm-block">
                                {{--<h3 class="text-secondary pt-5 pb-4 h4"><strong>Paquetes</strong></h3>--}}
                                <div class="alert alert-g-green py-2 mb-1" role="alert">
                                    <h5 class="font-weight-bold m-0">Pacotes</h5>
                                </div>
                                <h5 class="text-secondary py-2"><i class="fa fa-chevron-right"></i> <b>Incluso:</b> Hotéis, passeios, traslados, ingressos, café da manha, trene.</h5>
                                <div class="list-group">
                                    @foreach($paquete->where('estado', 1)->sortBy('duracion') as $paquetes)
                                        @if($paquetes->duracion==8)
                                            @php $new = "list-group-item-secondary"; $bad = "position-absolute top-0 right-0 badge badge-danger"; @endphp
                                        @else
                                            @php $new = ""; $bad = "d-none"; @endphp
                                        @endif
                                    <a href="{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}" class="list-group-item list-group-item-action {{$new}} position-relative">
                                        <div class="row no-gutters">
                                            <div class="col-8 col-sm-5 text-primary">
                                                <b>{{$paquetes->duracion}} Días</b> {{ucwords(strtolower($paquetes->titulo))}}
                                            </div>
                                            <div class="col d-none d-sm-inline">
                                                <i class="fa fa-map-marker-alt  text-g-green"></i>
                                                @php
                                                    $i = 1;
                                                    $num_des = count($paquete_destinos->where('idpaquetes',$paquetes->id));
                                                @endphp
                                                @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                                    {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($i < $num_des),@endif
                                                    @php $i++; @endphp
                                                @endforeach
                                            </div>
                                            <div class="col col-sm-2 text-right">
                                                <b>
                                                @foreach($paquetes->precio_paquetes as $precio)
                                                    @if($precio->estrellas == 2)
                                                        @if($precio->precio == 0)
                                                            <span class="text-danger">Pida una cotización</span>
                                                        @else
                                                            <sup>$</sup>{{$precio->precio}}<small>USD</small>
                                                        @endif
                                                    @endif
                                                @endforeach
                                                </b>
                                            </div>
                                        </div>
                                        <span class="{{$bad}}">new</span>
                                    </a>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col text-right">
                            <a href="{{route('paquetes_path')}}" class="btn-link font-weight-normal">Veja todos os pacotes <i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div id="hotel" class="d-sm-block pt-5">
                                {{--<h3 class="text-secondary pt-5 pb-4 h4"><strong>Paquetes</strong></h3>--}}
                                <div class="alert alert-danger py-2 mb-1" role="alert">
                                    <h5 class="font-weight-bold m-0">Pacotes sem Hotel</h5>
                                </div>
                                <h5 class="text-secondary py-2"><i class="fa fa-chevron-right"></i> <b>Incluso:</b> Passeios, traslados, ingressos, café da manha, trenes.</h5>

                                @foreach($paquete->where('s_precio', 1)->sortBy('duracion')->take(6) as $paquetes)
                                        <a href="{{route('sin_hotel_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}" class="list-group-item list-group-item-action">
                                        <div class="row no-gutters">
                                            <div class="col-8 col-sm-5 text-primary">
                                                <b>{{$paquetes->duracion}} Días</b> {{ucwords(strtolower($paquetes->titulo))}}
                                            </div>
                                            <div class="col d-none d-sm-inline">
                                                <i class="fa fa-map-marker-alt  text-danger"></i>
                                                @php
                                                    $i = 1;
                                                    $num_des = count($paquete_destinos->where('idpaquetes',$paquetes->id));
                                                @endphp
                                                @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                                    {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($i < $num_des),@endif
                                                    @php $i++; @endphp
                                                @endforeach
                                            </div>
                                            <div class="col col-sm-2 text-right">
                                                <b>
                                                    <sup>$</sup>{{$paquetes->precio}}<small>USD</small>
                                                </b>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col text-right">
                            <a href="{{route('paquetes_path')}}" class="btn-link font-weight-normal">Veja todos os pacotes <i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div id="tours" class="d-sm-block pt-5">
                                <div class="alert alert-info py-2 mb-1" role="alert">
                                    <h5 class="font-weight-bold m-0">Passeios Individuais</h5>
                                </div>
                                <h5 class="text-secondary py-2"><i class="fa fa-chevron-right"></i> <b>Incluso:</b> hoteles, tours, traslados, entradas, desayunos, trenes.</h5>

                                @foreach($tours as $tour)
                                    <a href="{{route('itinerario_tours_show_path', str_replace(' ','-',strtolower($tour->titulo)))}}" class="list-group-item list-group-item-action">
                                        <div class="row no-gutters">
                                            <div class="col-8 col-sm-5 text-primary">
                                                <b>{{ucwords(strtolower($tour->titulo))}}</b>
                                            </div>
                                            {{--<div class="col">--}}
                                                {{--<i class="fa fa-clock  text-info"></i> {{$tour->duracion}}--}}
                                            {{--</div>--}}
                                            <div class="col d-none d-sm-inline">
                                                <i class="fa fa-map-marker-alt  text-info"></i>
                                                @php
                                                    $i = 1;
                                                    $num_des = count($tours_destinos->where('idtours',$tour->id));
                                                @endphp
                                                @foreach($tours_destinos->where('idtours',$tour->id) as $tour_destino)
                                                    {{ucwords(strtolower($tour_destino->destinos->nombre))}}@if($i < $num_des),@endif
                                                    @php $i++; @endphp
                                                @endforeach
                                            </div>
                                            <div class="col col-sm-2 text-right">
                                                <b>
                                                    @if($tour->precio < 0)
                                                        <span class="text-danger">Pida una cotización</span>
                                                    @else
                                                        <sup>$</sup>{{$tour->precio_g}}<small>USD</small>
                                                    @endif
                                                    {{--@if($paquetes->precio == 0 OR $paquetes->precio == NULL)--}}
                                                        {{--@foreach($paquetes->precio_paquetes as $precio)--}}
                                                            {{--@if($precio->estrellas == 2)--}}
                                                                {{--@if($precio->precio == 0)--}}
                                                                    {{--<span class="text-danger">Pida una cotización</span>--}}
                                                                {{--@else--}}
                                                                    {{--<sup>$</sup>{{$precio->precio}}<small>USD</small>--}}
                                                                {{--@endif--}}
                                                            {{--@endif--}}
                                                        {{--@endforeach--}}
                                                    {{--@else--}}
                                                        {{--@if($paquetes->precio < 0)--}}
                                                            {{--<span class="text-danger">Pida una cotización</span>--}}
                                                        {{--@else--}}
                                                            {{--<sup>$</sup>{{$paquetes->precio}}<small>USD</small>--}}
                                                        {{--@endif--}}
                                                    {{--@endif--}}
                                                </b>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col text-right">
                            <a href="{{route('tours_path')}}" class="btn-link font-weight-normal">Veja todos os passeios <i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div id="traslados" class="d-sm-block pt-5">
                                {{--<h3 class="text-secondary pt-5 pb-4 h4"><strong>Paquetes</strong></h3>--}}
                                <div class="alert alert-g-yellow py-2 mb-1" role="alert">
                                    <h5 class="font-weight-bold m-0">Transferências Solo</h5>
                                </div>
                                {{--<h5 class="text-secondary py-2"><i class="fa fa-chevron-right"></i> <b>Incluye:</b> hoteles, tours, traslados, entradas, desayunos, trenes.</h5>--}}

                                @foreach($traslado as $traslados)
                                    <a href="{{route('transfer_path', str_replace(' ','-',strtolower($traslados->titulo)))}}" class="list-group-item list-group-item-action">
                                        <div class="row no-gutters">
                                            <div class="col-5 text-primary">
                                                <b>{{ucwords(strtolower($traslados->titulo))}}</b>
                                            </div>

                                            <div class="col text-right">
                                                <b>
                                                    @if($traslados->precio_p < 0)
                                                        <span class="text-danger">Pida una cotización</span>
                                                    @else
                                                        <sup>$</sup>{{$traslados->precio_p}}<small>USD</small>
                                                    @endif
                                                </b>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <div class="row pt-5">
                        <div class="col">
                            <div class="alert alert-primary py-2 mb-1" role="alert">
                                <h5 class="font-weight-bold m-0">Pregunte-nos</h5>
                            </div>
                            <h5 class="text-secondary py-2"><i class="fa fa-chevron-right"></i> Comentários, dúvidas, informações sobre pacotes, etc.</h5>

                            <div class="card my-4">
                                <div class="fb-comments" data-href="http://www.andesviagens.com/" data-width="100%" data-numposts="5" data-mobile="1"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4">
                    {{--<div class="card-deck owl-carousel owl-theme">--}}

                        {{--<div class="card">--}}
                            {{--<div class="card-header">--}}
                            {{--<h4 class="card-title">City tour em cusco</h4>--}}
                            {{--</div>--}}
                            {{--<a href="http://gotoperu.com.pe/paquete/peru-magico"><img class="card-img-top " src="http://www.andesviagens.com/images/packages/AV700.jpg" alt="Card image cap"></a>--}}

                            {{--<div class="card-body text-center">--}}
                                {{--<h4 class="card-title"><a href="http://gotoperu.com.pe/paquete/peru-magico" class="text-dark">Peru Magico</a></h4>--}}
                                {{--<p class="text-left"><i class="fa fa-clock-o text-primary" aria-hidden="true"></i> 6 Días</p>--}}
                                {{--<p class="text-left card-text"><i class="fa fa-map-marker text-primary" aria-hidden="true"></i>--}}
                                    {{--Lima, Cuzco, Sacred Valley, Machu Picchu--}}
                                {{--</p>--}}
                                {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                            {{--</div>--}}
                            {{--<div class="card-footer text-muted">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col text-left">Desde</div>--}}
                                    {{--<div class="col text-right font-weight-bold text-primary font-montserrat">--}}
                                        {{--<sup>$</sup> 898 <small>USD</small>--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}

                    <div class="row">
                        <div class="col">
                            <a href="paquetes-de-viaje-peru/classico-inca"><img src="{{asset('images/grupos.jpg')}}" alt="" class="img-fluid rounded"></a>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <a href="peru-tours/tour-a-machu-picchu"><img src="{{asset('images/oferta.jpg')}}" alt="" class="img-fluid rounded"></a>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <img src="{{asset('images/banner.jpg')}}" alt="" class="img-fluid rounded">
                        </div>
                    </div>

                    {{--<img src="{{asset('images/banner-restaurante.jpg')}}" alt="" class="img-fluid my-4">--}}
                    {{--<div class="my-4">--}}
                        {{--<h3 class="font-weight-bold mt-4">Planes de Pago</h3>--}}
                        {{--<h5 class="text-secondary font-pompiere font-weight-bold">Para más información<button type="button" class="btn-link mb-2" data-toggle="modal" data-target="#contant_m">--}}
                                {{--<b>Contáctenos</b>--}}
                            {{--</button>.</h5>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col">--}}
                                {{--<div class="card text-white bg-g-yellow mb-3 text-center" style="max-width: 20rem;">--}}
                                    {{--<div class="card-header h3">Plan A</div>--}}
                                    {{--<div class="card-body">--}}
                                        {{--<p class="card-title display-3 font-montserrat font-weight-bold m-0">0%</p>--}}
                                        {{--<p class="m-0">de interés</p>--}}
                                        {{--<p class="m-0"><b>Dos</b> Cuotas</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="card-footer text-muted">--}}
                                        {{--<span class="text-white">50% | 50%</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col">--}}

                                {{--<div class="card text-white bg-g-green mb-3 text-center" style="max-width: 20rem;">--}}
                                    {{--<div class="card-header h3">Plan B</div>--}}
                                    {{--<div class="card-body">--}}
                                        {{--<p class="card-title display-3 font-montserrat font-weight-bold m-0">0%</p>--}}
                                        {{--<p class="m-0">de interés</p>--}}
                                        {{--<p class="m-0"><b>Tres</b> Cuotas</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="card-footer text-muted">--}}
                                        {{--<span class="text-white">40% | 30% | 30%</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="row mt-4">
                        <div class="col">
                            <h3 class="font-weight-bold">Nossa promessa</h3>
                            <h5 class="text-secondary font-pompiere font-weight-bold">Uma aventura diferente a cada dia.</h5>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <img src="{{asset('images/banners/1.jpg')}}" alt="" class="img-fluid rounded">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <img src="{{asset('images/banners/2.jpg')}}" alt="" class="img-fluid rounded">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <img src="{{asset('images/banners/3.jpg')}}" alt="" class="img-fluid rounded">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe  src="https://www.youtube.com/embed/HfBo74hJId0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <div class="fb-page" data-href="https://www.facebook.com/ANDESVIAGENS/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ANDESVIAGENS/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ANDESVIAGENS/">ANDESVIAGENS</a></blockquote></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="bg-light">
            <div class="container">
                <div class="row align-items-center no-gutters">
                    <div class="col d-none d-xl-block">
                        <div class="row">
                            <div class="col">
                                <img src="{{asset('images/social/we-care.jpg')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col">
                                <img src="{{asset('images/social/ninos.jpg')}}" alt="" class="img-fluid clickable" data-toggle="modal" data-target="#social-1">
                                <!-- Modal -->
                                <div class="modal fade" id="social-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <img src="{{asset('images/social/ninos.jpg')}}" alt="" class="img-fluid rounded">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <img src="{{asset('images/social/social.jpg')}}" alt="" class="img-fluid clickable" data-toggle="modal" data-target="#social-2">
                                <!-- Modal -->
                                <div class="modal fade" id="social-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <img src="{{asset('images/social/social.jpg')}}" alt="" class="img-fluid rounded">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="px-4">
                            <h3 class="h1 font-weight-light">PORQUE NOS IMPORTAMOS<i class="fa fa-heart text-danger"></i></h3>
                            <p class="">Nós devolvemos às nossas comunidades</p>
                            <hr>
                            <p class="text-primary"><i>Chaullacota está localizado a 15.000 alimentações (4500 metros) 2 horas a noroeste de Cuzco.</i></p>
                            <p class="text-justify font-weight-light">Na GOTOPERU, estamos comprometidos em fazer negócios de uma maneira que realmente retorne às nossas comunidades parte de nossos lucros, especialmente para comunidades localizadas em locais remotos. Nosso planejamento e execução de uma de nossas viagens envolve uma longa cadeia de suprimentos: de guias e operadores locais a fornecedores de transporte, hotéis e restaurantes, interagimos com muitas organizações em diferentes lugares, mas também sabemos que algumas comunidades estão localizadas acima dos Andes. A mais de 15.000 pés, devido ao difícil acesso, eles não recebem a assistência que merecem, por isso organizamos periodicamente viagens a comunidades tão distantes para trazê-los especialmente suéteres e brinquedos para as crianças.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

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
    @include('layouts.page.form-quote')

    @stop