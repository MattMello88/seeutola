
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <script>var url = "{{ url('/') }}";</script>

    <!-- CSS only -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.1/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <main class="form-signin">

      <form id="formSubmitLogin">
        <svg xmlns="http://www.w3.org/2000/svg" width="72" height="57" fill="currentColor" class="mb-4 bi bi-headphones" viewBox="0 0 16 16">
          <path d="M8 3a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a6 6 0 1 1 12 0v5a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1V8a5 5 0 0 0-5-5z"/>
        </svg>

        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="toast align-items-center text-white bg-primary border-0 mb-4" id="toast-login" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="d-flex">
            <div class="toast-body" id="toast-login-body">
              Hello, world! This is a toast message.
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
        </div>


        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
          <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
      </form>
    </main>

    <!-- JavaScript Bundle with Popper -->
    <script src="{{ url('js/app.js') }}"></script>

    <script>
      var formSubmitLogin = function(event){
        event.preventDefault();
        var form = document.getElementById('formSubmitLogin');
        var formData = new FormData();
        for (var i = 0; i < form.length; ++i) {
          formData.append(form[i].name, form[i].value);
        }

        fetch(url+'/api/admin/login', {
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

          if (data.admin == undefined){
            var myToastEl = document.getElementById('toast-login')
            var textoBody = document.getElementById('toast-login-body')
            if (data.errors.email !== undefined){
              textoBody.innerHTML = data.errors.email;
            } else if (data.errors.password !== undefined){
              textoBody.innerHTML = data.errors.password[0];
            } else if (data.errors.message !== undefined){
              textoBody.innerHTML = data.errors.message;
            }
            var myToast = new Bootstrap.Toast(myToastEl)
            myToast.show();
          } else {
            console.log('data');
            setCookie('tokenAdmin', data.serviceToken);
            setCookie('admin', data.admin);
            checkLoginAdmin();
          }

          console.log(data);
        })
        .catch(function(err){
          console.log(err);
        });

      };

      document.getElementById('formSubmitLogin').addEventListener('submit', formSubmitLogin);
    </script>
  </body>
</html>
