$(document).ready(function() {
    $('.delete_click').on('click', function() {
        var id = $(this).attr('id');
        var table = $(this).attr('table');
        var flag = $(this).attr('flag');
        $('.id').val(id);
        $('.TableName').val(table);
        $('.flag').val(flag);
    });

    $('.add_click').on('click', function() {
        $('.submit_click').attr('name', 'add');


        $(".js-example-rtl").val("").trigger("change");
        $('.form_modal').trigger("reset");
        $('.modal-title').html("Add");
        $('.Primary_div').show();
        $('.NewRow').html('');

        $(".type").prop("disabled", false);
        $('.Primary_field').prop('required', true);
    });
    $('.edit_click').on('click', function() {
        $('.submit_click').attr('name', 'edit');

        var id = $(this).attr('id');


        if (id != "") {
            $('.primary_id').val(id);
        }


        $('.form_modal').trigger("reset");
        $('.modal-title').html("Edit");
        $('.Primary_div').hide();
        $('.Primary_field').prop('required', false);
        $('.NewRow').html("");
    });
    $("body").on("submit", "form", function() {
        $(this).submit(function() {
            return false;
        });
        return true;
    });


    $(document).on('click', '.CheckAll', function() {
        if ($('.CheckAll').prop('checked')) {
            $('.custom-control-input').prop('checked', true);
        } else {
            $('.custom-control-input').prop('checked', false);
        }
    });
    // $('.CheckPrimary').on('click', function() {
    $(document).on('click', '.CheckPrimary', function() {
        var value = $(this).val();
        if ($(this).is(':checked')) {
            $('.SubDiv-' + value).show();
        } else {
            $('.SubDiv-' + value).hide();
            $('.Child-' + value).prop('checked', false);
        }
    });

    function validateNumber(event) {
        var key = window.event ? event.keyCode : event.which;
        if (event.keyCode === 8 || event.keyCode === 46) {
            return true;
        } else if (key < 48 || key > 57) {
            return false;
        } else {
            return true;
        }
    };

    function validateChar() {
        var key = window.event ? event.keyCode : event.which;
        if (event.keyCode === 8 || event.keyCode === 46) {
            return false;
        } else if (key < 48 || key > 57) {
            return true;
        } else {
            return false;
        }
    };
    $('.numberInput').keypress(validateNumber);
    $('.charInput').keypress(validateChar);

    function toTitleCase(str) {
        return str.toUpperCase();
    }
    $(".Lower").on("input", function(e) {
        $(this).val($(this).val().toLowerCase());
    });
    $(".Upper").on("input", function(e) {
        $(this).val($(this).val().toUpperCase());
    });
    $('.PasswordField').on("keyup", function() {
        var pass = $(this).val();
        if (pass == "") {
            $('.WelcomeImage').attr('src', '../images/open1.png');
        } else {
            $('.WelcomeImage').attr('src', '../images/close1.png');
        }
    });
    $('#password2').on('keyup', function() {
        if ($('#password1').val() == $('#password2').val()) {
            $('#message').html('Matching').css('color', 'green');
            $('.submit_click').prop('disabled', false);
        } else {
            $('#message').html('Not Matching').css('color', 'red');
            $('.submit_click').prop('disabled', true);
        }
    });
    $(document).on('click', '.CheckButton', function() {
        $('.CheckButton').hide();
    });

    var count = 0;



});