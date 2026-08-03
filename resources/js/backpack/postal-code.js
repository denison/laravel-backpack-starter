(function () {
    'use strict';

    var currentRequest = null;

    function digits(value) {
        return String(value || '').replace(/\D/g, '');
    }

    function feedbackFor(input) {
        var feedback = input.parentElement.querySelector('.starter-postal-code-feedback');

        if (!feedback) {
            feedback = document.createElement('small');
            feedback.className = 'starter-postal-code-feedback';
            feedback.setAttribute('aria-live', 'polite');
            input.insertAdjacentElement('afterend', feedback);
        }

        return feedback;
    }

    function showFeedback(input, type, message) {
        var feedback = feedbackFor(input);
        feedback.className = 'starter-postal-code-feedback is-' + type;
        feedback.innerHTML = type === 'loading'
            ? '<span class="spinner-border spinner-border-sm" aria-hidden="true"></span> ' + message
            : message;
    }

    function fillAddress(input, address) {
        var form = input.closest('form');

        if (!form) {
            return;
        }

        ['street', 'complement', 'district', 'city', 'state', 'country_code'].forEach(function (name) {
            var field = form.querySelector('[name="' + name + '"]');
            var value = address[name];

            if (field && value) {
                field.value = value;
                field.dispatchEvent(new Event('input', { bubbles: true }));
                field.dispatchEvent(new Event('change', { bubbles: true }));
            }
        });

    }

    async function lookup(input) {
        var postalCode = digits(input.value);

        if (!postalCode) {
            feedbackFor(input).textContent = '';
            return;
        }

        if (postalCode.length !== 8) {
            showFeedback(input, 'error', 'Informe um CEP com 8 dígitos.');
            return;
        }

        if (input.dataset.lastPostalCode === postalCode) {
            return;
        }

        if (currentRequest) {
            currentRequest.abort();
        }

        var request = new AbortController();
        currentRequest = request;
        showFeedback(input, 'loading', 'Buscando CEP...');

        try {
            var url = input.dataset.lookupUrl.replace('__CEP__', postalCode);
            var response = await fetch(url, {
                headers: { 'Accept': 'application/json' },
                credentials: 'same-origin',
                signal: request.signal
            });
            var payload = await response.json();

            if (!response.ok) {
                showFeedback(input, 'error', payload.message || 'CEP não encontrado.');
                return;
            }

            input.dataset.lastPostalCode = postalCode;
            input.value = postalCode.replace(/^(\d{5})(\d{3})$/, '$1-$2');
            fillAddress(input, payload.data);
            showFeedback(input, 'success', 'Endereço preenchido automaticamente.');
        } catch (error) {
            if (error.name !== 'AbortError') {
                showFeedback(input, 'error', 'Não foi possível consultar o CEP agora.');
            }
        } finally {
            if (currentRequest === request) {
                currentRequest = null;
            }
        }
    }

    document.addEventListener('focusout', function (event) {
        if (event.target.matches('.starter-postal-code')) {
            lookup(event.target);
        }
    });
})();
