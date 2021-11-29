@extends('layout.admin')

@section('title', 'Configuração da Pagina')

@section('style')

@endsection

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
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
</main>
@endsection


@section('script')
<script>
      auth.checkLoginAdmin();

      document.getElementById('doLogoutAdmin').addEventListener('click', auth.doLogoutAdmin);

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

      window.addEventListener('load', loadGridConfig);

      document.getElementById('modalConfigEditar').addEventListener('show.bs.modal', showEditarConfig);

      document.getElementById('modalConfigDeletar').addEventListener('show.bs.modal', showDeletarConfig);

      document.getElementById('formSubmitAddConfig').addEventListener('submit', subimitAddConfig);

      document.getElementById('formSubmitEdtConfig').addEventListener('submit', subimitEdtConfig);

      document.getElementById('formSubmitDeleteConfig').addEventListener('submit', subimitDeleteConfig);
  </script>
  @endsection