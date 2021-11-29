@extends('layout.admin')

@section('title', 'Cadastro do Produto')

@section('style')

@endsection

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="px-4 pt-5 my-5 text-center border-bottom">
    <h2 class="display-5 fw-bold">Produto</h2>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">
      </p>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalProdutoAdd">
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
        <tbody id="get-produto-table">
        </tbody>
      </table>
    </div>
  </div>

  <div class="modal fade" id="modalProdutoAdd" tabindex="-1" aria-labelledby="modalProdutoAddLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Adicionar na Produto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form enctype="multipart/form-data" method="POST" id="formSubmitAddProduto">
          <div class="modal-body">
            <div class="mb-3">
                <label for="ProdutoAddInputTitulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="ProdutoAddInputTitulo" name="titulo" value="">
            </div>
            <div class="mb-3">
                <label for="ProdutoAddInputDescricao" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="ProdutoAddInputDescricao" name="descricao" value="">
            </div>
            <div class="mb-3">
                <label for="ProdutoAddInputLink_youtube" class="form-label">Link do Youtube</label>
                <input type="text" class="form-control" id="ProdutoAddInputLink_youtube" name="link_youtube" value="">
            </div>
            <div class="mb-3">
                <label for="ProdutoAddInputDataPodcast" class="form-label">Data Podcast</label>
                <input type="datetime-local" class="form-control" id="ProdutoAddInputDataPodcast" name="dt_podcast" value="">
            </div>
            <div class="mb-3">
                <label for="ProdutoAddInputImagem" class="form-label">Imagem</label>
                <input type="file" class="form-control" id="ProdutoAddInputImagem" name="imagem" value="">
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

  <div class="modal fade" id="modalProdutoEditar" tabindex="-1" aria-labelledby="modalProdutoEditarLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editar Produto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" id="formSubmitEdtProduto">
          <div class="modal-body">
            <input type="hidden" id="ProdutoEdtInputId" name="id" value="">
            <input type="hidden" name="_method" value="PUT">
            <div class="mb-3">
              <label for="ProdutoEdtInputTitulo" class="form-label">Titulo</label>
              <input type="text" class="form-control" id="ProdutoEdtInputTitulo" name="titulo">
            </div>
            <div class="mb-3">
              <label for="ProdutoEdtInputDescricao" class="form-label">Descricao</label>
              <input type="text" class="form-control" id="ProdutoEdtInputDescricao" name="descricao">
            </div>
            <div class="mb-3">
                <label for="ProdutoEdtInputLink_youtube" class="form-label">Link_youtube</label>
                <input type="text" class="form-control" id="ProdutoEdtInputLink_youtube" name="link_youtube">
            </div>
            <div class="mb-3">
                <label for="ProdutoEdtInputDataPodcast" class="form-label">Data Podcast</label>
                <input type="datetime-local" class="form-control" id="ProdutoEdtInputDataPodcast" name="dt_podcast" value="">
            </div>
            <div class="mb-3">
                <label for="ProdutoEdtInputImagem" class="form-label">Imagem</label>
                <input type="file" class="form-control" id="ProdutoEdtInputImagem" name="imagem" value="">
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

  <div class="modal fade" id="modalProdutoDeletar" tabindex="-1" aria-labelledby="modalProdutoDeletarLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Deletar Produto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method='POST' id="formSubmitDeleteProduto">
          <input type="hidden" id="ProdutoDeleteInputId" name="id" value="">
          <input type="hidden" name="_method" value="DELETE">
          <div class="modal-body">
            <h5>Deseja Deletar o Registro <span id="ProdutoDeleteInputTitulo"> ?</span></h5>
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

@endsection

