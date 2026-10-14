(function (window, $) {
    'use strict';

    $(function () {
        var $select = $('.starter-company-context-select');

        if (!$select.length) {
            return;
        }

        $select.on('select2:open', function () {
            $('.select2-results__option').filter(function () {
                return $(this).text().trim() === 'Voltar para Plataforma';
            }).addClass('starter-company-context-action');
        });

        $select.on('change', function () {
            var $currentSelect = $(this);

            if ($currentSelect.val() === '__platform__') {
                $('[data-company-context-leave-form]').get(0)?.requestSubmit();
                return;
            }

            $currentSelect.closest('[data-company-context-switch-form]').get(0)?.requestSubmit();
        });
    });
})(window, window.jQuery);
