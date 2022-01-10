
const Produto = () => {

  var loadGridProduto = function (event) {
    fetch(url + '/api/produto', {
      method: "GET",
      headers: [
        ["Accept", "application/json"],
        ["Authorization", "Bearer " + tokenAdmin],
      ]
    })
    .then(function(res){
      return res.json();
    })
    .then(function(data) {
      let output = '';
      data.forEach(function(produto){
        output += `
          <tr>
            <th scope="row">${produto.id}</th>
            <td>${produto.nome}</td>
            <td>${produto.descricao}</td>
            <td>${produto.preco}</td>
            <td>${produto.antigo_preco}</td>
            <td>${produto.desconto}</td>
            <td><img src='${url + `/assets/img/produto/` + produto.img}' width='50' height='50' /></td>
            <td>
              <a href="#" class="link-primary" data-bs-toggle="modal" data-bs-target="#modalProdutoEditar" 
                data-bs-produto-id="${produto.id}" data-bs-produto-nome="${produto.nome}" data-bs-produto-descricao="${produto.descricao}" 
                data-bs-produto-preco="${produto.preco}" data-bs-produto-antigo_preco="${produto.antigo_preco}" data-bs-produto-desconto="${produto.desconto}" 
                data-bs-produto-imagem="${produto.img}">Editar</a>

              <a href="#" class="link-danger" data-bs-toggle="modal" data-bs-target="#modalProdutoDeletar" data-bs-del-produto-id="${produto.id}" data-bs-produto-nome="${produto.nome}">Deletar</a>
            </td>
          </tr>
        `;
      });
      document.getElementById('get-produto-table').innerHTML = output;
    })
    .catch(function(err){
      console.log(err);
    });
  };
  
  var showEditarProduto = function (event) {
    var button = event.relatedTarget
    var produto_id = button.getAttribute('data-bs-produto-id')
    var nome = button.getAttribute('data-bs-produto-nome')
    var descricao = button.getAttribute('data-bs-produto-descricao')
    var preco = button.getAttribute('data-bs-produto-preco')
    var antigo_preco = button.getAttribute('data-bs-produto-antigo_preco')
    var desconto = button.getAttribute('data-bs-produto-desconto')
  
    var ProdutoEdtInputId = modalProdutoEditar.querySelector('#ProdutoEdtInputId')
    var ProdutoEdtInputCampo = modalProdutoEditar.querySelector('#ProdutoEdtInputNome')
    var ProdutoEdtInputValor = modalProdutoEditar.querySelector('#ProdutoEdtInputDescricao')
    var ProdutoEdtInputPreco = modalProdutoEditar.querySelector('#ProdutoEdtInputPreco')
    var ProdutoEdtInputPreco_antigo = modalProdutoEditar.querySelector('#ProdutoEdtInputPreco_antigo')
    var ProdutoEdtInputDesconto = modalProdutoEditar.querySelector('#ProdutoEdtInputDesconto')
  
    ProdutoEdtInputId.value = produto_id
    ProdutoEdtInputCampo.value = nome
    ProdutoEdtInputValor.value = descricao
    ProdutoEdtInputPreco.value = preco
    ProdutoEdtInputPreco_antigo.value = antigo_preco
    ProdutoEdtInputDesconto.value = desconto
  
  };
  
  var showDeletarProduto = function (event) {
    var button = event.relatedTarget
    var produto_id = button.getAttribute('data-bs-del-produto-id')
    var nome = button.getAttribute('data-bs-produto-nome')
  
    var ProdutoDeleteInputTitulo = modalProdutoDeletar.querySelector('#ProdutoDeleteInputTitulo')
    var ProdutoDeleteInputId = modalProdutoDeletar.querySelector('#ProdutoDeleteInputId')
    
    ProdutoDeleteInputTitulo.innerHTML = nome
    ProdutoDeleteInputId.value = produto_id
  };
  
  var subimitAddProduto = function(event){
    event.preventDefault();
  
    var form = document.getElementById('formSubmitAddProduto');
    var formData = new FormData(form);
  
    fetch(url+'/api/produto', {
      method: "POST",
      headers: [
        ["Accept", "application/json"],
        ["Authorization", "Bearer " + tokenAdmin],
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
  
    form.reset();
    loadGridProduto();
  
    var myModal = Bootstrap.Modal.getInstance(document.getElementById('modalProdutoAdd'));
    myModal.hide();
  };
  
  var subimitEdtProduto = function(event){
    event.preventDefault();
    var form = document.getElementById('formSubmitEdtProduto');
    var formData = new FormData(form);
    var id
    for (var i = 0; i < form.length; ++i) {
      if (form[i].name == 'id')
        id = form[i].value
    }
  
    fetch(url+'/api/produto/'+id, {
      method: "POST",
      headers: [
        ["Accept", "application/json"],
        ["Authorization", "Bearer " + tokenAdmin],
      ],
      body: formData
    })
    .then(function(res){
      console.log(res);
      return res.json();
    })
    .then(function(data) {
      console.log(data);
    })
    .catch(function(err){
      console.log(err);
    });
  
    loadGridProduto();

    var myModal = Bootstrap.Modal.getInstance(document.getElementById('modalProdutoEditar'));
    myModal.hide();
  };
  
  var subimitDeleteProduto = function(event){
    event.preventDefault();
    var form = document.getElementById('formSubmitDeleteProduto');
    var formData = new FormData();
    var id
    for (var i = 0; i < form.length; ++i) {
      if (form[i].name == 'id')
        id = form[i].value
      formData.append(form[i].name, form[i].value);
    }
  
    fetch(url+'/api/produto/'+id, {
      method: "POST",
      headers: [
        ["Accept", "application/json"],
        ["Authorization", "Bearer " + tokenAdmin],
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
  
    loadGridProduto();

    var myModal = Bootstrap.Modal.getInstance(document.getElementById('modalProdutoDeletar'));
    myModal.hide();
  };
  
  window.addEventListener('load', loadGridProduto);
  
  document.getElementById('modalProdutoEditar').addEventListener('show.bs.modal', showEditarProduto);
  
  document.getElementById('modalProdutoDeletar').addEventListener('show.bs.modal', showDeletarProduto);
  
  document.getElementById('formSubmitAddProduto').addEventListener('submit', subimitAddProduto);
  
  document.getElementById('formSubmitEdtProduto').addEventListener('submit', subimitEdtProduto);
  
  document.getElementById('formSubmitDeleteProduto').addEventListener('submit', subimitDeleteProduto);
  
}

export {Produto};