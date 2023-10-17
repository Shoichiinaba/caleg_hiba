$(document).ready(function() {
    $("#submit").click(function() {
        var subject = $("#subject").val();
        var fname = $("#fname").val();
        var email = $("#email").val();
        var message = $("#message").val();
        var button = $("#submit").val();

        var data = {
            subject: subject,
            fname: fname,
            email: email,
            message: message,
            button: button
        };

        if (fname == '' || email == '' || subject == '' || message == '') {
            alert("Form tidak boleh kosong..");
        } else {
            $("#submit").prop("disabled", true).val("Mengirim...");
            $.ajax({
                type: "POST",
                url: "simpan.php",
                data: data,
                cache: false,
                success: function(result) {
                    $("#submit").prop("disabled", false).val("Kirim Aspirasi");
                    $('#response').removeClass('alert-danger').addClass('alert-success');
                    $('#response').html(result).fadeIn();
                    $("#contact_form")[0].reset();

                    setTimeout(function() {
                        $('#response').fadeOut();
                    }, 5000).delay(400);

                },
                error: function() {
                    $("#submit").prop("disabled", false).val("Kirim Aspirasi");
                    $('#response').removeClass('alert-success').addClass('alert-danger');
                    $('#response').html("Terjadi kesalahan dalam mengirim data.").fadeIn();
                }
            });
        }
        return false;
    });
});
