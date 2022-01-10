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
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Preço</th>
            <th scope="col">Preço antigo</th>
            <th scope="col">Desconto</th>
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
                <label for="ProdutoAddInputNome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="ProdutoAddInputNome" name="nome" value="">
            </div>
            <div class="mb-3">
                <label for="ProdutoAddInputDescricao" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="ProdutoAddInputDescricao" name="descricao" value="">
            </div>
            <div class="mb-3">
                <label for="ProdutoAddInputPreco" class="form-label">Preço</label>
                <input type="text" class="form-control" id="ProdutoAddInputPreco" name="preco" value="">
            </div>
            <div class="mb-3">
                <label for="ProdutoAddInputDataPreco_antigo" class="form-label">Preco antigo</label>
                <input type="text" class="form-control" id="ProdutoAddInputPreco_antigo" name="antigo_preco" value="">
            </div>
            <div class="mb-3">
                <label for="ProdutoAddInputDesconto" class="form-label">Desconto</label>
                <input type="text" class="form-control" id="ProdutoAddInputDesconto" name="desconto" value="">
            </div>
            <div class="mb-3">
                <label for="ProdutoAddInputImagem" class="form-label">Imagem</label>
                <input type="file" class="form-control" id="ProdutoAddInputImagem" name="img" value="">
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
              <label for="ProdutoEdtInputNome" class="form-label">Nome</label>
              <input type="text" class="form-control" id="ProdutoEdtInputNome" name="nome">
            </div>
            <div class="mb-3">
              <label for="ProdutoEdtInputDescricao" class="form-label">Descricao</label>
              <input type="text" class="form-control" id="ProdutoEdtInputDescricao" name="descricao">
            </div>
            <div class="mb-3">
                <label for="ProdutoEdtInputPreco" class="form-label">Preço</label>
                <input type="text" class="form-control" id="ProdutoEdtInputPreco" name="preco">
            </div>
            <div class="mb-3">
                <label for="ProdutoEdtInputPreco_antigo" class="form-label">Preço antigo</label>
                <input type="text" class="form-control" id="ProdutoEdtInputPreco_antigo" name="antigo_preco" value="">
            </div>
            <div class="mb-3">
                <label for="ProdutoEdtInputDesconto" class="form-label">Desconto</label>
                <input type="text" class="form-control" id="ProdutoEdtInputDesconto" name="desconto" value="">
            </div>
            <div class="mb-3">
                <label for="ProdutoEdtInputImagem" class="form-label">Imagem</label>
                <input type="file" class="form-control" id="ProdutoEdtInputImagem" name="img" value="">
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
<script>
  produto.Produto();
</script>
@endsection

