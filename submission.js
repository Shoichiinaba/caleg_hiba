
$(document).ready(function() {
    $("#submit").click(function() {
        var subject = $("#subject").val();
        var fname = $("#fname").val();
        var email = $("#email").val();
        var message = $("#message").val();
        var button = $("#submit").val();
        var dataString = 'subject=' + subject + '&fname=' + fname + '&email=' + email + '&message=' + message + '&button=' + button;

        if (fname == '' || email == '' || subject == '' || message == '') {
            alert("Form tidak boleh kosong..");
        } else {
            $('#loader').show();
            $("#submit").prop("disabled", true);

            $.ajax({
                type: "POST",
                url: "send-mailer.php",
                data: dataString,
                cache: false,
                success: function(result) {
                    $('#loader').hide();
                    $("#submit").prop("disabled", false); // Mengaktifkan tombol
                    $('#response').html(result).fadeIn();
                    $("#contact_form")[0].reset();
                    $('#response').fadeOut(3000).delay(400);
                }
            });
        }
        return false;
    });
});

