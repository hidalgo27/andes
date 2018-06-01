<section id="title" class="header-menu-g bg-dark">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-4 col-sm-2 position-relative">
                <div class="logo-goto position-absolute w-100 top-0 p-3 border rounded border-dark bg-dark text-center">
                    <a href="/"><img src="{{asset('images/logo-andes-d.png')}}" alt="" class="img-fluid"></a>
                    <small class="text-white m-0">Operador de viagens no Perú</small>
                </div>
            </div>
            <div class="col col-sm">
                <div class="row justify-content-end">
                    <div class="col-auto text-right my-2">
                        <a href="#" class="btn btn-g-green btn-sm text-white d-none d-sm-inline-block" onclick="startOlark()"><i class="fa fa-comment"></i> Chat</a>
                        <span class="mx-2">|</span>
                        <button type="button" class="btn btn-g-yellow btn-sm text-white d-none d-sm-inline-block" data-toggle="modal" data-target="#contant_m">
                            Pergunte Agora
                        </button>
                        <a href="https://www.facebook.com/GOTOPERUcom/" class="text-white d-inline mx-1" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com/GOTOPERUCOM" class="text-white d-inline mx-1" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/gotoperucom/" class="text-white d-inline mx-1" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCpfUdQBRjnSEbh6Gu3Uh_Mg" class="text-white d-inline mx-1" target="_blank"><i class="fa fa-youtube-play"></i></a>
                        <i class="fa fa-face"></i>
                    </div>
                </div>
                <div class="row d-none d-sm-block">
                    <div class="col">
                        <nav class="nav nav-pills nav-fill rounded-right bg-light">
                            <a class="nav-item nav-link border border-left-0 border-top-0 border-bottom-0 text-dark bg-light" href="{{route('tours_path')}}">PERÚ PASSEIOS</a>
                            <a class="nav-item nav-link border border-left-0 border-top-0 border-bottom-0 text-dark bg-light" href="{{route('paquetes_path')}}">PACOTES DE VIAGEM</a>
                            <a class="nav-item nav-link border border-left-0 border-top-0 border-bottom-0 text-dark bg-light" href="{{route('destinations_path')}}">DESTINOS</a>
                            <a class="nav-item nav-link border border-left-0 border-top-0 border-bottom-0 text-dark bg-light d-sm-none  d-md-inline" href="{{route('hoteles_path')}}">HOTÉIS</a>
                            <a class="nav-item nav-link border border-left-0 border-top-0 border-bottom-0 text-dark bg-light d-sm-none  d-xl-inline" href="{{route("about_path")}}">SOBRE NÓS</a>
                            <a class="nav-item nav-link border border-left-0 border-top-0 border-bottom-0 text-dark bg-light d-sm-none  d-xl-inline" href="{{route("dicas_path")}}">DICAS</a>
                            <a class="nav-item nav-link border border-left-0 border-top-0 border-bottom-0 text-dark bg-light d-none d-lg-inline" href="{{route('social_path')}}">RESPONSABILIDADE SOCIAL</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="contant_m" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contacte con nosotros</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Envie as informações necessárias e entraremos em contato com você dentro de 24 horas garantidas.</p>
                <form id="c_form">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="c_nombre">Nome Completo</label>
                        <input type="text" class="form-control" id="c_nombre" placeholder="Nome Completo">
                    </div>

                    <div class="form-group">
                        <label for="c_email">Email</label>
                        <input type="email" class="form-control" id="c_email" placeholder="Seu Email">
                    </div>

                    <div class="form-group">
                        <label for="c_comentario">Comentário</label>
                        <textarea id="c_comentario" class="form-control" cols="10" rows="3"></textarea>
                    </div>

                    <div class="alert alert-success alert-dismissible fade d-none" id="c_alert" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        Muito obrigados por seu contato com ANDES VIAGENS,nas proximas 24 houras voce tera uma resposta de nossos agentes de viagens para ajuda-lo com o planejamento de sua viagem. :)
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-lg btn-block btn-g-green" id="c_send" type="button" onclick="contact()">Enviar
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                </button>
                <ul class="fa-ul pull-right d-none" id="loader3">
                    <li><i class="fa-li fa fa-spinner fa-spin"></i> <i>Envio...</i></li>
                </ul>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="design_m" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Entre em contato conosco</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Envie as informações necessárias e entraremos em contato com você dentro de 24 horas garantidas.</p>
                <form id="d_form">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-12 col-sm border-secondary border-right-0  m-0">

                            <div class="d-block mb-3">
                                <span class="text-secondary align-bottom">Informação pessoal</span>
                                {{--<img src="{{asset('images/icons/subtitle.png')}}" alt="" class="img-fluid mb-1" width="100">--}}
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        {{--<label for="inputEmail4" class="col-form-label"><sup class="text-danger">*</sup>Nome</label>--}}
                                        <input type="text" class="form-control" id="d_name" placeholder="Nome Completo">
                                    </div>
                                    <div class="form-group">
                                        {{--<label for="inputEmail4" class="col-form-label"><sup class="text-danger">*</sup>Email</label>--}}
                                        <input type="email" class="form-control" id="d_email" placeholder="Seu email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm">
                                    <div class="form-group">
                                        {{--<label for="inputEmail4" class="col-form-label"><sup class="text-danger">*</sup>Data</label>--}}
                                        <input type="text" class="form-control" id="d_date" placeholder="Data de viagem">
                                    </div>
                                </div>
                                <div class="col-12 col-sm">
                                    <div class="form-group">
                                        {{--<label for="inputEmail4" class="col-form-label"><sup class="text-danger">*</sup>Telefone</label>--}}
                                        <input type="tel" class="form-control" id="d_tel" placeholder="N° de Telefone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-sm-6">
                                    <div class="form-group">
                                        {{--<label for="inputEmail4" class="col-form-label"><sup class="text-danger">*</sup>Dias</label>--}}
                                        <input type="number" class="form-control" id="d_duration" placeholder="N° de Dias">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6">
                                    <div class="form-group">
                                        {{--<label for="inputEmail4" class="col-form-label"><sup class="text-danger">*</sup>Passageiros</label>--}}
                                        <input type="number" class="form-control" id="d_numero" placeholder="N° de passageir">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-sm border-secondary border-right-0 border-left-0 m-0">

                            {{--<h4 class="card-title">Card title</h4>--}}
                            {{--<label class="d-block">Eu Gostaria de visitar</label>--}}
                            <div class="d-block mb-3">
                                <span class="text-secondary align-bottom">Eu Gostaria de visitar:</span>
                                {{--<img src="{{asset('images/icons/subtitle.png')}}" alt="" class="img-fluid mb-1" width="100">--}}
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-6 col-sm-6 col-md-6 col-lg mb-2" data-toggle="buttons">
                                        <label class="btn btn-outline-primary btn-block">
                                            <input type="checkbox"  autocomplete="off" name="destinations[]" value="Machu Picchu"> Machu Picchu
                                        </label>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg mb-2" data-toggle="buttons">
                                        <label class="btn btn-outline-primary btn-block">
                                            <input type="checkbox" autocomplete="off" name="destinations[]" value="Cusco"> Cusco
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-sm-6 col-md-6 col-lg mb-2" data-toggle="buttons">
                                        <label class="btn btn-outline-primary btn-block">
                                            <input type="checkbox" autocomplete="off" name="destinations[]" value="Lago Titicaca"> Lago titicaca
                                        </label>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg mb-2" data-toggle="buttons">
                                        <label class="btn btn-outline-primary btn-block">
                                            <input type="checkbox" autocomplete="off" name="destinations[]" value="Puno"> Puno
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-sm-6 col-md-6 col-lg mb-2" data-toggle="buttons">
                                        <label class="btn btn-outline-primary btn-block">
                                            <input type="checkbox" autocomplete="off" name="destinations[]" value="Lima"> Lima
                                        </label>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg mb-2" data-toggle="buttons">
                                        <label class="btn btn-outline-primary btn-block">
                                            <input type="checkbox" autocomplete="off" name="destinations[]" value="Lineas de Nazca"> Linhas de Nazca
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon" id="">Outros</span>
                                <input type="text" class="form-control" id="d_otros" aria-describedby="basic-addon3">
                            </div>

                        </div>


                        <div class="alert alert-success alert-dismissible fade d-none" id="d_alert" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Muito obrigado</strong> por entrar em contato com a GOTOPERU, um agente de viagens entrará em contato com você nas próximas 24 horas para ajudá-lo a planejar sua viagem. :)
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">


                            <button class="btn btn-lg btn-block btn-g-green" id="d_send" type="button" onclick="design()">Enviar
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            </button>
                            <ul class="fa-ul pull-right d-none" id="loader2">
                                <li><i class="fa-li fa fa-spinner fa-spin"></i> <i>Envio...</i></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>