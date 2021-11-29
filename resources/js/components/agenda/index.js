const Agenda = () => {

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
  
  window.addEventListener('load', loadGridAgenda);
  
  document.getElementById('modalAgendaEditar').addEventListener('show.bs.modal', showEditarAgenda);
  
  document.getElementById('modalAgendaDeletar').addEventListener('show.bs.modal', showDeletarAgenda);
  
  document.getElementById('formSubmitAddAgenda').addEventListener('submit', subimitAddAgenda);
  
  document.getElementById('formSubmitEdtAgenda').addEventListener('submit', subimitEdtAgenda);
  
  document.getElementById('formSubmitDeleteAgenda').addEventListener('submit', subimitDeleteAgenda);
  
}

export {Agenda};