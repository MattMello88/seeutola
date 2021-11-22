@extends('layout.user')

@section('title', 'Registrar')

    
@section('style')
<link href="https://getbootstrap.com/docs/5.1/examples/sign-in/signin.css" rel="stylesheet">
@endsection

    
@section('content')
<main class="form-signin">

  <form id="formSubmitLogin" action="{{ url('/api/user/register') }}" method="POST">
    <a href="{{ url('') }}" >
      <svg xmlns="http://www.w3.org/2000/svg" width="72" height="57" fill="currentColor" class="mb-4 bi bi-headphones" viewBox="0 0 16 16">
        <path d="M8 3a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a6 6 0 1 1 12 0v5a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1V8a5 5 0 0 0-5-5z"/>
      </svg>
    </a>

    <h1 class="h3 mb-3 fw-normal">Cadastra-se</h1>

    <div class="toast align-items-center text-white bg-primary border-0 mb-4" id="toast-message" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body" id="toast-message-body">
          Hello, world! This is a toast message.
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>  


    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInputX" placeholder="Matheus de Mello" name="name">
      <label for="floatingInput">Nome</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Senha</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Cadastrar-se</button>
        <div class="mt-3"><a href="{{ url('user/login') }}" class="link-primary">Já tenho conta - Fazer o login</a></div>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>
  
</main>
@endsection

@section('script')
<script>
  var formSubmitLoginx = function(event){
    event.preventDefault();
    var form = document.getElementById('formSubmitLogin');
    console.log();

    var formData = new FormData();
    for (var i = 0; i < form.length; ++i) {
      formData.append(form[i].name, form[i].value);
    }
  };

  var formSubmitLogin = function(event){

    event.preventDefault();
    var form = document.getElementById('formSubmitLogin');

    sendData(form, function(data){
      console.log(data);
      var myToastEl = document.getElementById('toast-message')
      var myToast = new Bootstrap.Toast(myToastEl)

      var textoBody = document.getElementById('toast-message-body')
      
      if (data.user == undefined){
        
        if (data.errors.email !== undefined){
          textoBody.innerHTML = data.errors.email;
        } else if (data.errors.password !== undefined){
          textoBody.innerHTML = data.errors.password[0];
        } else if (data.errors.name !== undefined){
          textoBody.innerHTML = data.errors.name;
        } else if (data.errors.message !== undefined){
          textoBody.innerHTML = data.errors.message;
        }
        
        myToast.show();
      } else {
        textoBody.innerHTML = data.user.name + `, seu cadastro foi realizado com sucesso! <a href='${url}/user/login' class="link-warning">Logar-se</a>`
        myToast.show();
      }

      console.log(data);
    }, function(err){
      console.error(err);
    })
  };

  document.getElementById('formSubmitLogin').addEventListener('submit', formSubmitLogin);
</script>
@endsection