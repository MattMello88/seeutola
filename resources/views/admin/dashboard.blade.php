<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">

    <!-- Bootstrap CSS -->
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{url('assets/img/icone/apple-touch-icon.png')}}" sizes="180x180">
    <link rel="icon" href="{{url('assets/img/icone/favicon-32x32.png')}}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{url('assets/img/icone/favicon-16x16.png')}}" sizes="16x16" type="image/png">
    <link rel="manifest" href="{{url('assets/img/icone/manifest.json')}}">
    <link rel="mask-icon" href="{{url('assets/img/icone/safari-pinned-tab.svg')}}" color="#7952b3">
    <link rel="icon" href="{{url('assets/img/icone/favicon.ico')}}">

    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.1/examples/dashboard/dashboard.css">

    <title>Seeutolá - Podcast. Seja bem vindo!</title>

    <script>var url = "{{ url('/') }}";</script>
  </head>
  <body class="bg-secondary bg-opacity-10">


    <header class="p-3 bg-dark sticky-top text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" fill="currentColor" class="bi bi-headphones" viewBox="0 0 16 16">
              <path d="M8 3a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a6 6 0 1 1 12 0v5a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1V8a5 5 0 0 0-5-5z"/>
            </svg>
          </a>
          <button class="navbar-toggler position-absolute d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        </div>
      </div>
    </header>




      <div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
              <ul class="nav flex-column mt-3" id="v-pills-tab">
                <li class="nav-item">
                  <a href="#" class="nav-link link-dark active" aria-current="page" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="button" aria-controls="v-pills-home" aria-selected="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    Home
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link link-dark" id="v-pills-agenda-tab" data-bs-toggle="pill" data-bs-target="#v-pills-agenda" type="button" role="tab" aria-controls="v-pills-agenda" aria-selected="false" data-bs-dismiss="offcanvas">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    Agenda
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link link-dark" aria-current="page" id="v-pills-config-tab" data-bs-toggle="pill" data-bs-target="#v-pills-config" type="button" role="tab" aria-controls="v-pills-config" aria-selected="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers" aria-hidden="true"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                    Configuração
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link link-dark" id="doLogoutAdmin">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                      <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                    </svg>
                    Sair
                  </a>
                </li>
              </ul>
            </div>
          </nav>

          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

              <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                  <div class="px-4 pt-5 my-5 text-center border-bottom">
                    <h2 class="display-5 fw-bold">Dashboard</h2>
                    <div class="col-lg-6 mx-auto">
                      <p class="lead mb-4">
                        Realize a configuração do seu config
                      </p>
                    </div>
                  </div>

                </div>

                <div class="tab-pane fade" id="v-pills-config" role="tabpanel" aria-labelledby="v-pills-config-tab">
                  <div class="px-4 pt-5 my-5 text-center border-bottom">
                    <h2 class="display-5 fw-bold">Configurações</h2>
                    <div class="col-lg-6 mx-auto">
                      <p class="lead mb-4">
                      </p>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalConfigAdd">
                        Adicionar
                      </button>
                    </div>
                    <div class="card-body">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Pagina</th>
                            <th scope="col">Campo</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Complemento</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody id="get-config-table">
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="modal fade" id="modalConfigAdd" tabindex="-1" aria-labelledby="modalConfigAddLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Adicionar nova Configuração</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" id="formSubmitAddConfig">
                          <div class="modal-body">
                            <div class="mb-3">
                                <label for="ConfigAddInputTipo" class="form-label">Tipo</label>
                                <select class="form-select" id="ConfigAddInputTipo" name="tipo" aria-label="Index">
                                  <option value="Index" selected>Index</option>
                                  <option value="Contato">Contato</option>
                                  <option value="Epsodio">Epsodio</option>
                                  <option value="Agenda">Agenda</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="ConfigAddInputCampo" class="form-label">Campo</label>
                                <input type="text" class="form-control" id="ConfigAddInputCampo" name="campo" value="">
                            </div>
                            <div class="mb-3">
                                <label for="ConfigAddInputValor" class="form-label">Valor</label>
                                <input type="text" class="form-control" id="ConfigAddInputValor" name="valor" value="">
                            </div>
                            <div class="mb-3">
                                <label for="ConfigAddInputComplemento" class="form-label">Complemento</label>
                                <input type="text" class="form-control" id="ConfigAddInputComplemento" name="complemento" value="">
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="modalConfigEditar" tabindex="-1" aria-labelledby="modalConfigEditarLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Editar Configuração</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" id="formSubmitEdtConfig">
                          <input type="hidden" id="ConfigEdtInputId" name="id" value="">
                          <input type="hidden" name="_method" value="PUT">
                          <div class="modal-body">
                            <div class="mb-3">
                                <label for="ConfigEdtInputTipo" class="form-label">Tipo</label>
                                <select class="form-select" id="ConfigEdtInputTipo" name="tipo" aria-label="Index">
                                  <option value="Index">Index</option>
                                  <option value="Contato">Contato</option>
                                  <option value="Epsodio">Epsodio</option>
                                  <option value="Agenda">Agenda</option>
                                </select>
                            </div>
                            <div class="mb-3">
                              <label for="ConfigEdtInputCampo" class="form-label">Campo</label>
                              <input type="text" class="form-control" id="ConfigEdtInputCampo" name="campo">
                            </div>
                            <div class="mb-3">
                              <label for="ConfigEdtInputValor" class="form-label">Valor</label>
                              <input type="text" class="form-control" id="ConfigEdtInputValor" name="valor">
                            </div>
                            <div class="mb-3">
                                <label for="ConfigEdtInputComplemento" class="form-label">Complemento</label>
                                <input type="text" class="form-control" id="ConfigEdtInputComplemento" name="complemento">
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Editar</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="modalConfigDeletar" tabindex="-1" aria-labelledby="modalConfigDeletarLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Deletar Configuração</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" id="formSubmitDeleteConfig">
                          <input type="hidden" id="ConfigDeleteInputId" name="id" value="">
                          <input type="hidden" name="_method" value="DELETE">
                          <div class="modal-body">
                            <h5>Deseja Deletar o Registro <span id="ConfigDeleteInputCampo"> ?</span></h5>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Deletar</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div> <!-- v-pills-config -->

                <div class="tab-pane fade" id="v-pills-agenda" role="tabpanel" aria-labelledby="v-pills-agenda-tab">

                  <div class="px-4 pt-5 my-5 text-center border-bottom">
                    <h2 class="display-5 fw-bold">Agenda</h2>
                    <div class="col-lg-6 mx-auto">
                      <p class="lead mb-4">
                      </p>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgendaAdd">
                        Adicionar
                      </button>
                    </div>
                    <div class="card-body">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Título</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Link Youtube</th>
                            <th scope="col">Data Podcast</th>
                            <th scope="col">Imagem</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody id="get-agenda-table">
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="modal fade" id="modalAgendaAdd" tabindex="-1" aria-labelledby="modalAgendaAddLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Adicionar na Agenda</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form enctype="multipart/form-data" method="POST" id="formSubmitAddAgenda">
                          <div class="modal-body">
                            <div class="mb-3">
                                <label for="AgendaAddInputTitulo" class="form-label">Título</label>
                                <input type="text" class="form-control" id="AgendaAddInputTitulo" name="titulo" value="">
                            </div>
                            <div class="mb-3">
                                <label for="AgendaAddInputDescricao" class="form-label">Descrição</label>
                                <input type="text" class="form-control" id="AgendaAddInputDescricao" name="descricao" value="">
                            </div>
                            <div class="mb-3">
                                <label for="AgendaAddInputLink_youtube" class="form-label">Link do Youtube</label>
                                <input type="text" class="form-control" id="AgendaAddInputLink_youtube" name="link_youtube" value="">
                            </div>
                            <div class="mb-3">
                                <label for="AgendaAddInputDataPodcast" class="form-label">Data Podcast</label>
                                <input type="datetime-local" class="form-control" id="AgendaAddInputDataPodcast" name="dt_podcast" value="">
                            </div>
                            <div class="mb-3">
                                <label for="AgendaAddInputImagem" class="form-label">Imagem</label>
                                <input type="file" class="form-control" id="AgendaAddInputImagem" name="imagem" value="">
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="modalAgendaEditar" tabindex="-1" aria-labelledby="modalAgendaEditarLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Editar Agenda</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" id="formSubmitEdtAgenda">
                          <div class="modal-body">
                            <input type="hidden" id="AgendaEdtInputId" name="id" value="">
                            <input type="hidden" name="_method" value="PUT">
                            <div class="mb-3">
                              <label for="AgendaEdtInputTitulo" class="form-label">Titulo</label>
                              <input type="text" class="form-control" id="AgendaEdtInputTitulo" name="titulo">
                            </div>
                            <div class="mb-3">
                              <label for="AgendaEdtInputDescricao" class="form-label">Descricao</label>
                              <input type="text" class="form-control" id="AgendaEdtInputDescricao" name="descricao">
                            </div>
                            <div class="mb-3">
                                <label for="AgendaEdtInputLink_youtube" class="form-label">Link_youtube</label>
                                <input type="text" class="form-control" id="AgendaEdtInputLink_youtube" name="link_youtube">
                            </div>
                            <div class="mb-3">
                                <label for="AgendaEdtInputDataPodcast" class="form-label">Data Podcast</label>
                                <input type="datetime-local" class="form-control" id="AgendaEdtInputDataPodcast" name="dt_podcast" value="">
                            </div>
                            <div class="mb-3">
                                <label for="AgendaEdtInputImagem" class="form-label">Imagem</label>
                                <input type="file" class="form-control" id="AgendaEdtInputImagem" name="imagem" value="">
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Editar</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="modalAgendaDeletar" tabindex="-1" aria-labelledby="modalAgendaDeletarLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Deletar Agendauração</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method='POST' id="formSubmitDeleteAgenda">
                          <input type="hidden" id="AgendaDeleteInputId" name="id" value="">
                          <input type="hidden" name="_method" value="DELETE">
                          <div class="modal-body">
                            <h5>Deseja Deletar o Registro <span id="AgendaDeleteInputTitulo"> ?</span></h5>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Deletar</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div> <!-- Agenda -->
              </div>

          </main>
        </div>
      </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="{{ url('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>



    <script>
      checkLoginAdmin();

      document.getElementById('doLogoutAdmin').addEventListener('click', doLogoutAdmin);

      var loadGridConfig = function () {
        fetch(url + '/api/config', {
          method: "GET",
          headers: [
            ["Content-Type", "application/json"],
          ]
        })
        .then(function(res){
          return res.json();
        })
        .then(function(data) {
          let output = '';
          data.forEach(function(config){
            output += `
              <tr>
                <th scope="row">${config.id}</th>
                <td>${config.tipo}</td>
                <td>${config.campo}</td>
                <td>${config.valor}</td>
                <td>${config.complemento}</td>
                <td>
                  <a href="#" class="link-primary" data-bs-toggle="modal" data-bs-target="#modalConfigEditar" data-bs-config-id="${config.id}" data-bs-config-campo="${config.campo}" data-bs-config-tipo="${config.tipo}" data-bs-config-complemento="${config.complemento}" data-bs-config-valor="${config.valor}">Editar</a>
                  <a href="#" class="link-danger" data-bs-toggle="modal" data-bs-target="#modalConfigDeletar" data-bs-config-id="${config.id}" data-bs-config-campo="${config.campo}">Deletar</a>
                </td>
              </tr>
            `;
          });
          document.getElementById('get-config-table').innerHTML = output;

        })
        .catch(function(err){
          console.log(err);
        });
      };

      var subimitAddConfig = function(event){
        event.preventDefault();
        var form = document.getElementById('formSubmitAddConfig');
        var formData = new FormData();
        for (var i = 0; i < form.length; ++i) {
          formData.append(form[i].name, form[i].value);
        }

        fetch(url+'/api/config', {
          method: "POST",
          headers: [
            ["Accept", "application/json"],
          ],
          body: formData
        })
        .then(function(res){
          return res.json();
        })
        .then(function(data) {
          console.log(data);
        })
        .catch(function(err){
          console.log(err);
        });

        loadGridConfig();

        var myModal = new bootstrap.Modal(document.getElementById('modalConfigAdd'));
        myModal.hide();
      };

      var subimitEdtConfig = function(event){
        event.preventDefault();
        var form = document.getElementById('formSubmitEdtConfig');
        var formData = new FormData();
        var id;
        for (var i = 0; i < form.length; ++i) {
          if (form[i].name == 'id')
            id = form[i].value;
          formData.append(form[i].name, form[i].value);
          console.log(form[i].name, form[i].value);
        }
        console.log(formData.values());

        fetch(url+'/api/config/'+id, {
          method: "POST",
          headers: [
            ["Accept", "application/json"],
          ],
          body: formData
        })
        .then(function(res){
          return res.json();
        })
        .then(function(data) {
          console.log(data);
        })
        .catch(function(err){
          console.log(err);
        });

        loadGridConfig();
      };

      var subimitDeleteConfig = function(event){
        event.preventDefault();
        var form = document.getElementById('formSubmitDeleteConfig');
        var formData = new FormData();
        var id
        for (var i = 0; i < form.length; ++i) {
          if (form[i].name == 'id')
            id = form[i].value
          formData.append(form[i].name, form[i].value);
        }

        fetch(url+'/api/config/'+id, {
          method: "POST",
          headers: [
            ["Accept", "application/json"],
          ],
          body: formData
        })
        .then(function(res){
          return res.json();
        })
        .then(function(data) {
          console.log(data);
        })
        .catch(function(err){
          console.log(err);
        });

        loadGridConfig();
      };

      var showEditarConfig = function (event) {
        var button = event.relatedTarget
        var config_id = button.getAttribute('data-bs-config-id')
        var campo = button.getAttribute('data-bs-config-campo')
        var valor = button.getAttribute('data-bs-config-valor')
        var tipo = button.getAttribute('data-bs-config-tipo')
        var complemento = button.getAttribute('data-bs-config-complemento')

        var ConfigEdtInputCampo = modalConfigEditar.querySelector('#ConfigEdtInputCampo')
        var ConfigEdtInputValor = modalConfigEditar.querySelector('#ConfigEdtInputValor')
        var ConfigEdtInputComplemento = modalConfigEditar.querySelector('#ConfigEdtInputComplemento')
        var ConfigEdtInputTipo = modalConfigEditar.querySelector('#ConfigEdtInputTipo')
        var ConfigEdtInputId = modalConfigEditar.querySelector('#ConfigEdtInputId')

        ConfigEdtInputId.value = config_id
        ConfigEdtInputCampo.value = campo
        ConfigEdtInputValor.value = valor
        ConfigEdtInputComplemento.value = complemento
        ConfigEdtInputTipo.value = tipo

      };

      var showDeletarConfig = function (event) {
        var button = event.relatedTarget
        var config_id = button.getAttribute('data-bs-config-id')
        var campo = button.getAttribute('data-bs-config-campo')

        var ConfigDeleteInputCampo = modalConfigDeletar.querySelector('#ConfigDeleteInputCampo')
        var ConfigDeleteInputId = modalConfigDeletar.querySelector('#ConfigDeleteInputId')

        ConfigDeleteInputCampo.innerHTML = campo
        ConfigDeleteInputId.value = config_id
      };

      document.getElementById('v-pills-config-tab').addEventListener('click', loadGridConfig);

      document.getElementById('modalConfigEditar').addEventListener('show.bs.modal', showEditarConfig);

      document.getElementById('modalConfigDeletar').addEventListener('show.bs.modal', showDeletarConfig);

      document.getElementById('formSubmitAddConfig').addEventListener('submit', subimitAddConfig);

      document.getElementById('formSubmitEdtConfig').addEventListener('submit', subimitEdtConfig);

      document.getElementById('formSubmitDeleteConfig').addEventListener('submit', subimitDeleteConfig);



      /*------------Agenda  metodos-------------*/

      var loadGridAgenda = function (event) {
        fetch(url + '/api/agenda', {
          method: "GET",
          headers: [
            ["Accept", "application/json"],
          ]
        })
        .then(function(res){
          return res.json();
        })
        .then(function(data) {
          let output = '';
          data.forEach(function(agenda){
            output += `
              <tr>
                <th scope="row">${agenda.id}</th>
                <td>${agenda.titulo}</td>
                <td>${agenda.descricao}</td>
                <td>${agenda.link_youtube}</td>
                <td>${agenda.dt_podcast}</td>
                <td>${agenda.imagem}</td>
                <td>
                  <a href="#" class="link-primary" data-bs-toggle="modal" data-bs-target="#modalAgendaEditar" data-bs-agenda-id="${agenda.id}" data-bs-agenda-titulo="${agenda.titulo}" data-bs-agenda-descricao="${agenda.descricao}" data-bs-agenda-link_youtube="${agenda.link_youtube}" data-bs-agenda-dt_podcast="${agenda.dt_podcast}" data-bs-agenda-imagem="${agenda.imagem}">Editar</a>
                  <a href="#" class="link-danger" data-bs-toggle="modal" data-bs-target="#modalAgendaDeletar" data-bs-agenda-id="${agenda.id}" data-bs-agenda-titulo="${agenda.titulo}">Deletar</a>
                </td>
              </tr>
            `;
          });
          document.getElementById('get-agenda-table').innerHTML = output;

        })
        .catch(function(err){
          console.log(err);
        });
      };

      var showEditarAgenda = function (event) {

        var button = event.relatedTarget

        var agenda_id = button.getAttribute('data-bs-agenda-id')
        var titulo = button.getAttribute('data-bs-agenda-titulo')
        var descricao = button.getAttribute('data-bs-agenda-descricao')
        var link_youtube = button.getAttribute('data-bs-agenda-link_youtube')
        var dt_podcast = button.getAttribute('data-bs-agenda-dt_podcast')

        var AgendaEdtInputCampo = modalAgendaEditar.querySelector('#AgendaEdtInputTitulo')
        var AgendaEdtInputValor = modalAgendaEditar.querySelector('#AgendaEdtInputDescricao')
        var AgendaEdtInputLink_youtube = modalAgendaEditar.querySelector('#AgendaEdtInputLink_youtube')
        var AgendaEdtInputDataPodcast = modalAgendaEditar.querySelector('#AgendaEdtInputDataPodcast')
        var AgendaEdtInputId = modalAgendaEditar.querySelector('#AgendaEdtInputId')

        AgendaEdtInputId.value = agenda_id
        AgendaEdtInputCampo.value = titulo
        AgendaEdtInputValor.value = descricao
        AgendaEdtInputLink_youtube.value = link_youtube
        AgendaEdtInputDataPodcast.value = new Date(dt_podcast).toISOString().slice(0, -1);

      };

      var showDeletarAgenda = function (event) {
        var button = event.relatedTarget
        var agenda_id = button.getAttribute('data-bs-agenda-id')
        var titulo = button.getAttribute('data-bs-agenda-titulo')

        var AgendaDeleteInputCampo = modalAgendaDeletar.querySelector('#AgendaDeleteInputTitulo')
        var AgendaDeleteInputId = modalAgendaDeletar.querySelector('#AgendaDeleteInputId')

        AgendaDeleteInputCampo.innerHTML = titulo
        AgendaDeleteInputId.value = agenda_id
      };

      var subimitAddAgenda = function(event){
        event.preventDefault();

        var form = document.getElementById('formSubmitAddAgenda');
        var formData = new FormData(form);

        fetch(url+'/api/agenda', {
          method: "POST",
          headers: [
            ["Accept", "application/json"],
          ],
          body: formData
        })
        .then(function(res){
          return res.json();
        })
        .then(function(data) {
          console.log(data);
        })
        .catch(function(err){
          console.log(err);
        });

        loadGridAgenda();

        var myModal = new bootstrap.Modal(document.getElementById('modalAgendaAdd'), {
          keyboard: false
        });
        myModal.hide();
      };

      var subimitEdtAgenda = function(event){
        event.preventDefault();
        var form = document.getElementById('formSubmitEdtAgenda');
        var formData = new FormData(form);
        var id
        for (var i = 0; i < form.length; ++i) {
          if (form[i].name == 'id')
            id = form[i].value
        }

        fetch(url+'/api/agenda/'+id, {
          method: "POST",
          headers: [
            ["Accept", "application/json"],
          ],
          body: formData
        })
        .then(function(res){
          return res.json();
        })
        .then(function(data) {
          console.log(data);
        })
        .catch(function(err){
          console.log(err);
        });

        loadGridAgenda();
      };
      var subimitDeleteAgenda = function(event){
        event.preventDefault();
        var form = document.getElementById('formSubmitDeleteAgenda');
        var formData = new FormData();
        var id
        for (var i = 0; i < form.length; ++i) {
          if (form[i].name == 'id')
            id = form[i].value
          formData.append(form[i].name, form[i].value);
        }

        fetch(url+'/api/agenda/'+id, {
          method: "POST",
          headers: [
            ["Accept", "application/json"],
          ],
          body: formData
        })
        .then(function(res){
          return res.json();
        })
        .then(function(data) {
          console.log(data);
        })
        .catch(function(err){
          console.log(err);
        });

        loadGridAgenda();
      };

      document.getElementById('v-pills-agenda-tab').addEventListener('click', loadGridAgenda);

      document.getElementById('modalAgendaEditar').addEventListener('show.bs.modal', showEditarAgenda);

      document.getElementById('modalAgendaDeletar').addEventListener('show.bs.modal', showDeletarAgenda);

      document.getElementById('formSubmitAddAgenda').addEventListener('submit', subimitAddAgenda);

      document.getElementById('formSubmitEdtAgenda').addEventListener('submit', subimitEdtAgenda);

      document.getElementById('formSubmitDeleteAgenda').addEventListener('submit', subimitDeleteAgenda);
  </script>

  </body>
</html>
