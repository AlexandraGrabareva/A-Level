`use strict`

var block = document.querySelector(".block");

var form = block.querySelector("form");

var login = block.querySelector("[name=login]");
var password = block.querySelector("[name=password]");

var credentials = {
    login: 'admin',
    password: 'qwerty',
};

var box = document.getElementById('info-box'), someText;

form.addEventListener("submit", function (evt) {
	evt.preventDefault();
    if (login.value == credentials.login && password.value == credentials.password) {
    	
    	someText = 'Congratulations!';
    	box.innerHTML = someText;
    	box.style['background-color'] = 'green';

    }
    else {
    	someText = 'Error!';
    	box.innerHTML = someText;
    	box.style['background-color'] = 'red';
    }
});