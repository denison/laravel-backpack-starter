(function (window, $) {
    'use strict';

    if (!$) {
        return;
    }

    function notify(type, message) {
        if (window.Noty) {
            new window.Noty({
                type: type,
                text: message,
                timeout: 3000,
                progressBar: true,
                closeWith: ['click', 'button']
            }).show();
        }
    }

    function errorMessage(xhr) {
        var errors = xhr.responseJSON && xhr.responseJSON.errors;

        if (errors && errors.active && errors.active.length) {
            return errors.active[0];
        }

        return (xhr.responseJSON && xhr.responseJSON.message)
            || 'Não foi possível alterar o status.';
    }

    $(document).on('change', '.starter-active-switch', function () {
        var $switch = $(this);
        var $container = $switch.closest('[data-order]');
        var $label = $container.find('.starter-active-switch-label');
        var previousStatus = !$switch.prop('checked');
        var active = $switch.prop('checked');
        var activeLabel = $switch.data('active-label') || 'Ativo';
        var inactiveLabel = $switch.data('inactive-label') || 'Inativo';

        $switch.prop('disabled', true);
        $container.addClass('opacity-50');

        $.ajax({
            url: $switch.data('status-url'),
            type: 'PATCH',
            dataType: 'json',
            data: { active: active ? 1 : 0 },
            headers: { Accept: 'application/json' }
        }).done(function (response) {
            var currentStatus = Boolean(response.active);

            $switch.prop('checked', currentStatus);
            $container.attr('data-order', currentStatus ? 1 : 0);
            $label
                .text(currentStatus ? activeLabel : inactiveLabel)
                .toggleClass('is-active', currentStatus)
                .toggleClass('is-inactive', !currentStatus);

            notify('success', response.message || 'Status alterado com sucesso.');
        }).fail(function (xhr) {
            $switch.prop('checked', previousStatus);
            notify('error', errorMessage(xhr));
        }).always(function () {
            $switch.prop('disabled', false);
            $container.removeClass('opacity-50');
        });
    });
})(window, window.jQuery);
