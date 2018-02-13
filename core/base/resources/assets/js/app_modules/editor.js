function setImageValue(file) {
    $('.mce-btn.mce-open').parent().find('.mce-textbox').val(file);
}

var BEditor = {
    initCkeditor: function (element, extraConfig) {
        var config = {
            filebrowserImageBrowseUrl: RV_MEDIA_URL.base + '?media-action=select-files&method=ckeditor&type=image',
            filebrowserImageUploadUrl: RV_MEDIA_URL.media_upload_from_editor + '?method=ckeditor&type=image&_token=' + $('meta[name="csrf-token"]').attr('content'),
            filebrowserWindowWidth: '768',
            filebrowserWindowHeight: '500',
            height: 356,
            allowedContent: true
        };
        var mergeConfig = {};
        $.extend(mergeConfig, config, extraConfig);
        CKEDITOR.replace(element, mergeConfig);
    },
    initTinyMce: function (element) {
        tinymce.init({
            menubar: true,
            selector: '#' + element,
            skin: 'voyager',
            min_height: 300,
            resize: 'vertical',
            plugins: 'preview autolink advlist visualchars fullscreen image link media template table charmap hr pagebreak nonbreaking anchor insertdatetime lists textcolor wordcount imagetools  contextmenu  bootstrap visualblocks',
            extended_valid_elements: 'input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]',
            file_browser_callback: function (field_name, url, type, win) {
                if (type === 'image') {
                    $('#upload_file').trigger('click');
                }
            },
            toolbar: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat code visualblocks | bootstrap',
            convert_urls: false,
            image_caption: true,
            image_advtab: true,
            image_title: true,
            entity_encoding: "raw",
            content_style: ".mce-content-body {padding: 10px}"
        });
    },
    initEditor: function (element, extraConfig, type) {
        if (element.length) {
            switch (type) {
                case 'ckeditor':
                    $.each(element, function (index, item) {
                        BEditor.initCkeditor($(item).prop('id'), extraConfig);
                    });
                    break;
                case 'tinymce':
                    $.each(element, function (index, item) {
                        BEditor.initTinyMce($(item).prop('id'));
                    });
                    break;
            }
        }
    }
};

$(document).ready(function () {
    if ($('.editor-ckeditor').length > 0) {
        BEditor.initEditor($('.editor-ckeditor'), {}, 'ckeditor');
    }
    if ($('.editor-tinymce').length > 0) {
        BEditor.initEditor($('.editor-tinymce'), {}, 'tinymce');
    }

    $(document).on('click', '.show-hide-editor-btn', function (event) {
        event.preventDefault();
        if ($('#' + $(this).data('result')).hasClass('editor-ckeditor')) {
            if (typeof CKEDITOR.instances[$(this).data('result')] !== 'undefined') {
                CKEDITOR.instances[$(this).data('result')].updateElement();
                CKEDITOR.instances[$(this).data('result')].destroy();
                $('.editor-action-item').not('.action-show-hide-editor').hide();
            } else {
                BEditor.initCkeditor($(this).data('result'), {}, 'ckeditor');
                $('.editor-action-item').not('.action-show-hide-editor').show();
            }
        } else if ($('#' + $(this).data('result')).hasClass('editor-tinymce')) {
            tinymce.execCommand('mceToggleEditor', false, $(this).data('result'));
        }
    });
});