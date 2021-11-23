@extends('adminlte::page')

@section('title', 'Painel - Site')

@section('content_header')
    <h1></h1>
@stop

@section('content')
        @if ($errors->any())
            <div class="alert alert-danger d-flex justify-content-center p-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <div class="row">
        
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h4>Seção Home</h4>
                </div>

                @foreach($site_banner as $banner)
                <form method="post" action="{{route('editar-banner', $banner->id)}}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="card-body">
                       
                      <div>
                        <img width="100%" height="250" src={{asset($banner->imagem)}}>
                      </div>
                      <div class="form-group">
                        <label>Imagem atual</label>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Alterar Imagem</label>
                        <div class="input-group">
                          <input  type="file" name="imagem">
                        </div>
                      </div>
                        <div class="form-group">
                            <label>Texto da seção</label>
                            <textarea name="texto-banner" class="form-control" rows="3">
                                {{$banner->texto_banner}}
                            </textarea>
                        </div>
                    
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" class="btn btn-info">Editar</button>
                    </div>
                  </form>
                  @endforeach
            </div>
        </div>


        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h4>Secão o que fazemos</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('cadastrar-servico')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Imagem</label>
                            <input type="file" name="imagem">
                        </div>
                        <div class="form-group">
                            <label>Titulo</label>
                            <input type="text" name="titulo" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-info">Adicionar</button>
                        </div>
                    </form>
                    <hr>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Imagem</th>
                          <th scope="col">Titulo</th>
                          <th scope="col">Açôes</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($site_servicos  as $servico)
                        <tr>
                          <td>
                            <img width="80" height="80" src="{{asset($servico->imagem)}}">
                          </td>
                          <td>{{$servico->titulo}}</td>
                          <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModalCenter{{$servico->id}}">
                                  Adicionar itens
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter{{$servico->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Adicionar</h5>
                                      </div>
                                      <form method="post" action="{{route('cadastrar-itens')}}">
                                        <input type="hidden" name="idServico" value="{{$servico->id}}">
                                        @csrf
                                          <div class="modal-body">
                                            <div class="form-group">
                                                <label>Descrição</label>
                                                <input class="form-control" type="text" name="descricao">
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                                          </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                                
                                <form class="d-inline" method="post" action="{{route('delete-servico')}}" onsubmit="return confirm('Deseja realmente excluir o registro ?')">
                                    @method('delete')
                                    @csrf
                                    <input type="hidden" name="id" value="{{$servico->id}}">
                                    <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                                </form>
                          </td>
                          <hr>
                          <table style="max-height: 50px; overflow-y: auto;">
                                <thead>
                                    <tr>
                                        <th>Lista de itens</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($servico->itens()->get() as $item)
                                    <tr>
                                        <td>{{$item->descricao}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                          </table>
                          <hr>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h4>Portifólio</h4>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Imagem</label>
                            <input type="file" name="imagem">
                        </div>
                        <div class="form-group">
                            <label>Link do Projeto</label>
                            <input type="text" name="url" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-info">Cadastrar</button>
                        </div>
                    </form>
                        <hr>
                    <table>
                        <thead>
                            <tr>
                                <th>Imagem</th>
                                <th>Link</th>
                                <th>Acão</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>https://projeto1.com.br</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalEditar">Editar</button>

                                    <!-- INICIO MODAL EDITAR -->
                                    <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                          </div>
                                          <form method="post">
                                              <div class="modal-body">
                                                
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Voltar</button>
                                                <button type="submit" class="btn btn-sm btn-warning">Editar</button>
                                              </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div><!-- FIM MODAL EDITAR -->

                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalExcluir">Excluir</button>

                                    <!-- INICIO MODAL EXCLUIR -->
                                    <div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                          </div>
                                          <form method="post">
                                              <div class="modal-body">
                                                <h5>Deseja realmente excluir o registro ?</h5>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Voltar</button>
                                                <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                                              </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div><!-- FIM MODAL EXCLUIR -->

                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

         <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h4>Sobre</h4>
                </div>
            </div>
        </div>

    </div>
@stop