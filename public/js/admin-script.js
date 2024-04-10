document.addEventListener('DOMContentLoaded', function() { 
    switch (window.location.pathname) {
        case '/admin/new-supplier':
            listenerForFormNewSupplier('form-new-supplier');
            //listenersForInputs();
            break;
    }

    function listenerForFormNewSupplier(formId) {
        form = document.getElementById(formId);

        form.addEventListener('submit', async function(event) {

            event.preventDefault();

            elementForMessage = document.getElementById('new-supplier-message');

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
                window.location.href = '/admin/new-supplier';
            }
        });
    }

    function checkStatus(status) {
        switch (status) {
            case 500:
                return 'Ошибка на сервере';
            case 422:
                return 'Такое имя занято';
            default:
                return false;
        }
    }
});