(function (window) {
    'use strict';

    function digits(value, limit) {
        return String(value || '').replace(/\D/g, '').slice(0, limit);
    }

    function cpf(value) {
        return digits(value, 11)
            .replace(/^(\d{3})(\d)/, '$1.$2')
            .replace(/^(\d{3})\.(\d{3})(\d)/, '$1.$2.$3')
            .replace(/\.(\d{3})(\d)/, '.$1-$2');
    }

    function cnpj(value) {
        return digits(value, 14)
            .replace(/^(\d{2})(\d)/, '$1.$2')
            .replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3')
            .replace(/\.(\d{3})(\d)/, '.$1/$2')
            .replace(/(\d{4})(\d)/, '$1-$2');
    }

    function postalCode(value) {
        return digits(value, 8).replace(/^(\d{5})(\d)/, '$1-$2');
    }

    function phone(value) {
        var number = digits(value, 11);

        if (number.length <= 2) {
            return number ? '(' + number : '';
        }

        var areaCode = number.slice(0, 2);
        var localNumber = number.slice(2);
        var firstBlockLength = localNumber.length > 8 ? 5 : 4;

        if (localNumber.length <= firstBlockLength) {
            return '(' + areaCode + ') ' + localNumber;
        }

        return '(' + areaCode + ') '
            + localNumber.slice(0, firstBlockLength)
            + '-'
            + localNumber.slice(firstBlockLength);
    }

    function documentMask(input) {
        var typeFieldName = input.dataset.documentTypeField;
        var form = input.closest('form');
        var typeField = form && typeFieldName
            ? form.querySelector('[name="' + typeFieldName + '"]')
            : null;
        var type = String(typeField ? typeField.value : '').toLowerCase();

        if (type === 'cnpj') {
            return cnpj(input.value);
        }

        if (type === 'cpf') {
            return cpf(input.value);
        }

        return digits(input.value, 14).length > 11
            ? cnpj(input.value)
            : cpf(input.value);
    }

    function apply(input) {
        if (input.matches('.starter-mask-document')) {
            input.value = documentMask(input);
        } else if (input.matches('.starter-mask-cep')) {
            input.value = postalCode(input.value);
        } else if (input.matches('.starter-mask-phone')) {
            input.value = phone(input.value);
        }
    }

    function initialize(root) {
        (root || document)
            .querySelectorAll('.starter-mask-document, .starter-mask-cep, .starter-mask-phone')
            .forEach(apply);
    }

    function remaskDocument(source) {
        var targetName = source.dataset.documentMaskTarget;

        if (!targetName) {
            return;
        }

        var form = source.closest('form');
        var target = form ? form.querySelector('[name="' + targetName + '"]') : null;

        if (target) {
            apply(target);
        }
    }

    document.addEventListener('input', function (event) {
        if (event.target.matches('.starter-mask-document, .starter-mask-cep, .starter-mask-phone')) {
            apply(event.target);
        }
    });

    document.addEventListener('change', function (event) {
        remaskDocument(event.target);
    });

    if (window.jQuery) {
        window.jQuery(document).on('change.starterMasks', '[data-document-mask-target]', function () {
            remaskDocument(this);
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function () {
            initialize(document);
        });
    } else {
        initialize(document);
    }

    window.StarterMasks = {
        initialize: initialize,
        apply: apply
    };
})(window);
