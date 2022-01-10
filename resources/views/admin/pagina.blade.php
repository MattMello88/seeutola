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
  pagina.Pagina();
</script>
@endsection