/* registation form validation start here */
$(document).ready(function() {
    $flag = 1;
    $("#myName").focusout(function() {
        if ($(this).val() == '') {
            $(this).css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_name").text("* You have to enter your first name!");
        } else {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled', false);
            $("#error_name").text("");

        }
    });
    $("#lastname").focusout(function() {
        if ($(this).val() == '') {
            $(this).css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_lastname").text("* You have to enter your Last name!");
        } else {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled', false);
            $("#error_lastname").text("");
        }
    });
    $("#dob").focusout(function() {
        if ($(this).val() == '') {
            $(this).css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_dob").text("* You have to enter your Date of Birth!");
        } else {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled', false);
            $("#error_dob").text("");
        }
    });
    $("#gender").focusout(function() {
        $(this).css("border-color", "#2eb82e");

    });
    $("#age").focusout(function() {
        if ($(this).val() == '') {
            $(this).css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_age").text("* You have to enter your Age!");
        } else {
            $(this).css({ "border-color": "#2eb82e" });
            $('#submit').attr('disabled', false);
            $("#error_age").text("");

        }
    });
    $("#phone").focusout(function() {
        $pho = $("#phone").val();
        if ($(this).val() == '') {
            $(this).css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_phone").text("* You have to enter your Phone Number!");
        } else if ($pho.length != 10) {
            $(this).css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_phone").text("* Lenght of Phone Number Should Be Ten");
        } else if (!$.isNumeric($pho)) {
            $(this).css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_phone").text("* Phone Number Should Be Numeric");
        } else {
            $(this).css({ "border-color": "#2eb82e" });
            $('#submit').attr('disabled', false);
            $("#error_phone").text("");
        }

    });

    $("#submit").click(function() {
        if ($("#myName").val() == '') {
            $("#myName").css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_name").text("* You have to enter your first name!");
        }
        if ($("#lastname").val() == '') {
            $("#lastname").css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_lastname").text("* You have to enter your Last name!");
        }
        if ($("#dob").val() == '') {
            $("#dob").css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_dob").text("* You have to enter your Date of Birth!");
        }
        if ($("#age").val() == '') {
            $("#age").css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_age").text("* You have to enter your Age!");
        }
        if ($("#phone").val() == '') {
            $("#phone").css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_phone").text("* You have to enter your Phone Number!");
        }
    });



});
/* registation form validation end here */
$(document).ready(function() {
    $('#characterLeft').text('140 characters left');
    $('#message').keydown(function() {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');
        } else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');
        }
    });
});