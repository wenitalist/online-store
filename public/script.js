document.addEventListener('DOMContentLoaded', function() {
    switch (window.location.pathname) {
        case '/registration':
            listenerForFormRegistration('form-registration');
            break;
        case '/authorization':
            listenerForFormAuthorization('form-authorization');
            break;
    }

    function listenerForFormRegistration(formId) {
        const form = document.getElementById(formId);

        form.addEventListener('submit', async function(event) {
    
            event.preventDefault();

            elementForMessage = document.getElementById('auth-error-message');
    
            const request = new Request(this.action, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json'
                },
                body: new FormData(this)
            });

            response = await fetch(request);

            if (temp = checkStatus(response.status)) {
                elementForMessage.style.cssText = 'display: block;'
                elementForMessage.textContent = temp;

                // if (data.errors.email) { elementForMessage.textContent = 'Почта занята' }
                // if (data.errors.login) { elementForMessage.textContent = 'Логин занят' }
                // if (data.errors.password) { elementForMessage.textContent = 'Пароль должен содержать от 6 символов' }

            } else {
                window.location.href = '/authorization';
            }
        });
    }

    function listenerForFormAuthorization(formId) {
        const form = document.getElementById(formId);

        form.addEventListener('submit', async function(event) {
    
            event.preventDefault();

            elementForMessage = document.getElementById('auth-error-message');
    
            const request = new Request(this.action, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json'
                },
                body: new FormData(this)
            });

            response = await fetch(request);

            if (temp = checkStatus(response.status)) {
                elementForMessage.style.cssText = 'display: block;'
                elementForMessage.textContent = temp;
            } else {
                window.location.href = '/';
            }
        });
    }

    function checkStatus(status) {
        switch (status) {
            case 422:
                return 'Неправильный формат входных данных';
            case 401:
                return 'Неверный логин или пароль';
            default:
                return false;
        }
    }
});
