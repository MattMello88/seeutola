const setCookie = function (cname, cvalue, exdays){
  const d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  let expires = "expires="+d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

const getCookie = function (cname) {
  let name = cname + "=";
  let ca = document.cookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

const checkLoginAdmin = function() {
  let token = getCookie("tokenAdmin");

  fetch(url+'/api/checkLogin', {
    method: "GET",
    headers: [
      ["Accept", "application/json"],
      ["Authorization", "Bearer " + token],
    ]
  })
  .then(function(res){
    return res.json();
  })
  .then(function(data) {
    if (data.Authorization !== undefined){
      if (data.Authorization !== 'true'){
        window.location = url + '/admin/login';
      }
    } else {
      window.location = url + '/admin/login';
    }
  })
  .catch(function(err){
    window.location = url + '/admin/login';
  });
}

const doLogoutAdmin = function(event){
  setCookie('tokenAdmin', null, 0);
  window.location = url ;
}

const checkLogin = function() {
  let token = getCookie("token");
  if (token != "") {
    window.location = url + '/dashboard';
  } else {
    window.location = url + '/login';
  }
}

const doLogout = function(event){
    setCookie('token', null, 0);
    window.location = url ;
}

export {setCookie, getCookie, checkLoginAdmin, doLogoutAdmin, checkLogin, doLogout};