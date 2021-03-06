<nav class="nav nav-pills nav-fill nav-goto navbar-expand-lg d-none d-md-flex sticky-top" id="content-page">
    {{--<a class="nav-item nav-link active" href="#">Active</a>--}}
    <a class="nav-item text-g-dark font-weight-normal" href="{{route('tours_path')}}">PERU PASSEIOS</a>
    <a class="nav-item text-g-dark font-weight-normal" href="{{route('paquetes_path')}}">PACOTES DE VIAGENS</a>
    <a class="nav-item text-g-dark font-weight-normal " href="{{route('destinations_path')}}">DESTINOS</a>
    <a class="nav-item text-g-dark font-weight-normal" href="{{route('hoteles_path')}}">HOTÉIS</a>
    <a class="nav-item text-g-dark font-weight-normal" href="{{route("about_path")}}">SOBRE NÓS</a>
    <a class="nav-item text-g-dark font-weight-normal" href="{{route("dicas_path")}}">DICAS</a>
    <a class="nav-item text-g-dark font-weight-normal d-none d-xl-inline" href="{{route('social_path')}}">RESPONSABILIDADE SOCIAL</a>
    <a class="nav-item text-g-dark font-weight-normal bg-g-yellow" href="#Inquire">PERGUNTAR</a>
    {{--<a class="nav-item nav-link disabled" href="#">Disabled</a>--}}
</nav>

<section class=" d-md-none">
    <div class="container-fluid">
        <div class="row my-2">
            <div class="col">
                <a href="{{route('home_path')}}"><img src="{{asset('images/logo-andes-bc.png')}}" alt="" class="img-fluid"></a>
            </div>
        </div>
    </div>
</section>
<section class="bg-dark sticky-top py-2 d-md-none">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-auto">
                <a href="#Inquire" class="btn btn-sm btn-block btn-g-yellow">PERGUNTAR</a>
            </div>
            <div class="col text-right">
{{--                <a href="tel:+2029963000" class="mx-3 h4"><i class="fa fa-phone text-white"></i></a>--}}
                <div id="watchme">
                <a href="https://api.whatsapp.com/send?phone=551141302800" target="_blank" class="font-weight-bold text-white stretched-link">
                    +55 11 4130-2800
                    <img src="{{asset('images/icons/whatsapp-i.png')}}" class="py-1" alt="logo whatsapp" width="50" data-toggle="tooltip" data-placement="top" title="Perú">
                </a>
                </div>
            </div>
            {{--<div class="col">--}}
                {{--<a href="#" class="mx-3 h2"  data-toggle="modal" data-target="#modal-menu"><i class="fa fa-bars text-white"></i></a>--}}
            {{--</div>--}}
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
                                <span class="text-secondary align-bottom font-weight-bold">Informação pessoal</span>
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
                                <div class="col-12 col-sm-12">
                                    <div class="input-group">
                                        {{--<label for="inputEmail4" class="col-form-label"><sup class="text-danger">*</sup>Telefone</label>--}}
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="number" class="form-control" id="d_ddd" placeholder="DDD">
                                        <input type="tel" class="form-control w-50" id="d_tel" placeholder="N° de Telefone">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
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
                                <span class="text-secondary align-bottom font-weight-bold">Eu Gostaria de visitar:</span>
                                {{--<img src="{{asset('images/icons/subtitle.png')}}" alt="" class="img-fluid mb-1" width="100">--}}
                            </div>
                            <div class="">
                                <div class="row mb-3">
                                    <div class="col-6 col-sm-6 col-md-6 col-lg btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-outline-primary btn-block">
                                            <input type="checkbox"  autocomplete="off" name="destinations[]" value="Machu Picchu"> Machu Picchu
                                        </label>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-outline-primary btn-block">
                                            <input type="checkbox" autocomplete="off" name="destinations[]" value="Cusco"> Cusco
                                        </label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6 col-sm-6 col-md-6 col-lg btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-outline-primary btn-block">
                                            <input type="checkbox" autocomplete="off" name="destinations[]" value="Lago Titicaca"> Lago titicaca
                                        </label>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-outline-primary btn-block">
                                            <input type="checkbox" autocomplete="off" name="destinations[]" value="Puno"> Puno
                                        </label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6 col-sm-6 col-md-6 col-lg btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-outline-primary btn-block">
                                            <input type="checkbox" autocomplete="off" name="destinations[]" value="Lima"> Lima
                                        </label>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-outline-primary btn-block">
                                            <input type="checkbox" autocomplete="off" name="destinations[]" value="Lineas de Nazca"> Linhas de Nazca
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Outros</span>
                                </div>
                                <input type="text" aria-label="Outros" id="d_otros" class="form-control">
                            </div>

                        </div>


                        <div class="alert alert-success alert-dismissible fade d-none" id="d_alert" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Muito obrigado</strong> por entrar em contato com a GOTOPERU, um agente de viagens entrará em contato com você nas próximas 24 horas para ajudá-lo a planejar sua viagem. :)
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-3 text-center">
                        <div class="col">
                            <button class="btn btn-primary font-weight-bold" id="d_send" type="button" onclick="design()">Enviar

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