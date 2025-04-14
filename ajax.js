document.addEventListener('DOMContentLoaded', function () {

    const registerForm = document.getElementById('registerForm');
    if (registerForm) {
        registerForm.addEventListener('submit', function (event) {
            event.preventDefault();

            const formData = new FormData(registerForm);

            const request = new XMLHttpRequest();
            request.open('POST', 'register.php', true);
            request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            let data = '';
            formData.forEach((value, key) => {
                data += encodeURIComponent(key) + '=' + encodeURIComponent(value) + '&';
            });
            data = data.slice(0, -1);

            request.onreadystatechange = function () {
                if (request.readyState === 4 && request.status === 200) {
                    const response = JSON.parse(request.responseText);

                    const messageElement = document.querySelector('.message');

                    if (response.success) {

                        messageElement.style.color = 'green';
                        messageElement.textContent = response.message;

                        setTimeout(() => {
                            window.location.href = response.redirect;
                        }, 1000);
                    } else {
                        messageElement.style.color = 'red';
                        messageElement.textContent = response.message;
                    }
                }
            };

            request.send(data);
        });
    }

    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function (event) {
            event.preventDefault();

            const formData = new FormData(loginForm);

            const request = new XMLHttpRequest();
            request.open('POST', 'login.php', true);
            request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');


            let data = '';
            formData.forEach((value, key) => {
                data += encodeURIComponent(key) + '=' + encodeURIComponent(value) + '&';
            });
            data = data.slice(0, -1);

            request.onreadystatechange = function () {
                if (request.readyState === 4 && request.status === 200) {
                    const response = JSON.parse(request.responseText);

                    const messageElement = document.querySelector('.message');

                    if (response.success) {

                        messageElement.style.color = 'green';
                        messageElement.textContent = response.message;


                        setTimeout(() => {
                            window.location.href = response.redirect;
                        }, 1000);
                    } else {
                        messageElement.style.color = 'red';
                        messageElement.textContent = response.message;
                    }
                }
            };

            request.send(data);
        });
    }
});
