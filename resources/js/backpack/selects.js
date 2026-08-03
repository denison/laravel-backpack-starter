(function (window, $) {
    'use strict';

    function initializeStarterSelects(root) {
        if (!$ || !$.fn.select2) {
            return;
        }

        $(root || document).find('select.starter-select2').each(function () {
            var $select = $(this);

            if ($select.hasClass('select2-hidden-accessible')) {
                return;
            }

            var $modal = $select.closest('.modal');

            $select.select2({
                theme: 'bootstrap',
                width: '100%',
                placeholder: $select.data('placeholder') || 'Selecione...',
                allowClear: !$select.prop('required'),
                minimumResultsForSearch: 0,
                dropdownParent: $modal.length ? $modal : $('body'),
                language: {
                    errorLoading: function () {
                        return 'Não foi possível carregar os resultados.';
                    },
                    inputTooLong: function (args) {
                        return 'Remova ' + (args.input.length - args.maximum) + ' caractere(s).';
                    },
                    inputTooShort: function (args) {
                        return 'Digite mais ' + (args.minimum - args.input.length) + ' caractere(s).';
                    },
                    loadingMore: function () {
                        return 'Carregando mais resultados...';
                    },
                    maximumSelected: function (args) {
                        return 'Selecione no máximo ' + args.maximum + ' item(ns).';
                    },
                    noResults: function () {
                        return 'Nenhum resultado encontrado.';
                    },
                    searching: function () {
                        return 'Buscando...';
                    },
                    removeAllItems: function () {
                        return 'Remover todos os itens';
                    }
                }
            });
        });
    }

    $(function () {
        initializeStarterSelects(document);
    });

    window.StarterSelects = {
        initialize: initializeStarterSelects
    };
})(window, window.jQuery);
