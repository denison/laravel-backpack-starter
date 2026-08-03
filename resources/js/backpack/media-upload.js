(function (window, $) {
    'use strict';

    if (!$) {
        return;
    }

    function elements($upload) {
        return {
            input: $upload.find('.starter-media-upload-input'),
            removeInput: $upload.find('.starter-media-remove-input'),
            preview: $upload.find('.starter-media-preview'),
            image: $upload.find('.starter-media-preview img'),
            placeholder: $upload.find('.starter-media-placeholder'),
            removeButton: $upload.find('.starter-media-remove')
        };
    }

    function showFile($upload, file) {
        if (!file || !file.type.match(/^image\/(jpeg|png|webp)$/)) {
            return;
        }

        var parts = elements($upload);
        var reader = new FileReader();

        reader.onload = function (event) {
            parts.image.attr('src', event.target.result).prop('hidden', false);
            parts.placeholder.prop('hidden', true);
            parts.preview.addClass('has-image');
            parts.removeButton.prop('hidden', false);
            parts.removeInput.val('0');
        };

        reader.readAsDataURL(file);
    }

    $(document).on('click', '.starter-media-dropzone, .starter-media-select', function (event) {
        event.preventDefault();
        $(this).closest('.starter-media-upload').find('.starter-media-upload-input').trigger('click');
    });

    $(document).on('keydown', '.starter-media-dropzone', function (event) {
        if (event.key === 'Enter' || event.key === ' ') {
            event.preventDefault();
            $(this).closest('.starter-media-upload').find('.starter-media-upload-input').trigger('click');
        }
    });

    $(document).on('change', '.starter-media-upload-input', function () {
        showFile($(this).closest('.starter-media-upload'), this.files[0]);
    });

    $(document).on('dragenter dragover', '.starter-media-dropzone', function (event) {
        event.preventDefault();
        $(this).addClass('is-dragging');
    });

    $(document).on('dragleave drop', '.starter-media-dropzone', function (event) {
        event.preventDefault();
        $(this).removeClass('is-dragging');
    });

    $(document).on('drop', '.starter-media-dropzone', function (event) {
        var files = event.originalEvent.dataTransfer.files;

        if (!files.length) {
            return;
        }

        var $upload = $(this).closest('.starter-media-upload');
        var input = elements($upload).input.get(0);

        input.files = files;
        showFile($upload, files[0]);
    });

    $(document).on('click', '.starter-media-remove', function () {
        var $upload = $(this).closest('.starter-media-upload');
        var parts = elements($upload);

        parts.input.val('');
        parts.image.attr('src', '').prop('hidden', true);
        parts.placeholder.prop('hidden', false);
        parts.preview.removeClass('has-image');
        parts.removeButton.prop('hidden', true);
        parts.removeInput.val('1');
    });
})(window, window.jQuery);
