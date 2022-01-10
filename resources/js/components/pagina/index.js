const Pagina = () => {
  
  var loadGridConfig = function () {
    fetch(url + '/api/config', {
      method: "GET",
      headers: [
        ["Content-Type", "application/json"],
        ["Authorization", "Bearer " + tokenAdmin],
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
    loadGridConfig();

    var myModal = Bootstrap.Modal.getInstance(document.getElementById('modalConfigAdd'));
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
    }

    fetch(url+'/api/config/'+id, {
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

    loadGridConfig();

    var myModal = Bootstrap.Modal.getInstance(document.getElementById('modalConfigEditar'));
    myModal.hide();
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

    loadGridConfig();
    
    var myModal = Bootstrap.Modal.getInstance(document.getElementById('modalConfigDeletar'));
    myModal.hide();
  };

  window.addEventListener('load', loadGridConfig);

  document.getElementById('modalConfigEditar').addEventListener('show.bs.modal', showEditarConfig);

  document.getElementById('modalConfigDeletar').addEventListener('show.bs.modal', showDeletarConfig);

  document.getElementById('formSubmitAddConfig').addEventListener('submit', subimitAddConfig);

  document.getElementById('formSubmitEdtConfig').addEventListener('submit', subimitEdtConfig);

  document.getElementById('formSubmitDeleteConfig').addEventListener('submit', subimitDeleteConfig);

}

export {Pagina};