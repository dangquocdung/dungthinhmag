$(document).ready(function () {
    $('#change_slug').click(function () {
        $('.default-slug').unwrap();
        $('#editable-post-name').html('<input type="text" id="new-post-slug" class="form-control" value="' + $('#editable-post-name').text() + '" autocomplete="off">');
        $('#edit-slug-box .cancel').show();
        $('#edit-slug-box .save').show();
        $(this).hide();
    });

    $('#edit-slug-box .cancel').click(function () {
        var currentSlug = $('#current-slug').val();
        $('#sample-permalink').html('<a class="permalink" href="' + $('#slug_id').data('view') +  '/' + currentSlug + '">' + $('#sample-permalink').html() + '</a>');
        $('#editable-post-name').text(currentSlug);
        $('#edit-slug-box .cancel').hide();
        $('#edit-slug-box .save').hide();
        $('#change_slug').show();
    });

    $('#edit-slug-box .save').click(function () {
        var name = $('#new-post-slug').val();
        var id = $('#slug_id').data('id');
        if (id == null) {
            id = 0;
        }
        if (name != null && name != '') {
            createSlug(name, id, false);
        } else {
            $('#new-post-slug').closest('.form-group').addClass('has-error');
        }
    });

    $('#name').blur(function () {
        if ($('#edit-slug-box').hasClass('hidden')) {
            var name = $('#name').val();

            if (name !== null && name !== '') {
                createSlug(name, 0, true);
            }
        }

    });

    var createSlug = function (name, id, exist) {
        $.ajax({
            url: $('#slug_id').data('url'),
            type: 'POST',
            data: {
                name: name,
                slug_id: id
            },
            success: function (data) {
                if (exist) {
                    $('#sample-permalink .permalink').prop('href', $('#slug_id').data('view') + '/' + data);
                } else {
                    $('#sample-permalink').html('<a class="permalink" target="_blank" href="' + $('#slug_id').data('view') + '/' + data + '">' + $('#sample-permalink').html() + '</a>');
                }

                $('#editable-post-name').text(data);
                $('#current-slug').val(data);
                $('#edit-slug-box .cancel').hide();
                $('#edit-slug-box .save').hide();
                $('#change_slug').show();
                $('#edit-slug-box').removeClass('hidden');
            },
            error: function (data) {
                Botble.handleError(data);
            }
        });
    }
});
