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

            if (response.status === 422) {

                data = await response.json();

                elementForMessage.style.cssText = 'display: block;'

                if (data.errors.email) { elementForMessage.textContent = 'Почта занята' }
                if (data.errors.login) { elementForMessage.textContent = 'Логин занят' }
                if (data.errors.password) { elementForMessage.textContent = 'Пароль должен содержать от 6 символов' }

            } else {

                window.location.href = '/authorization';
            }
        });
    }

    function listenerForFormRegistration(formId) {

    }
});
