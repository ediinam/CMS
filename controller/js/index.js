$("input").change(function() {
    $(this).removeClass("error-field");
});

$('#login_forma').submit(function(event) {
    event.preventDefault();
    if ($("#korisnicko_ime").val() == '' || $("#lozinka").val() == '') {
        alertify.showFailure("Niste popunili sva polja!").set('maximizable', false);
        if ($("#korisnicko_ime").val() == '') {
            $("#korisnicko_ime").addClass("error-field");
        }
        if ($("#lozinka").val() == '') {
            $("#lozinka").addClass("error-field");
        }
    } else {

        var formData = new FormData($(this)[0]);
        $.ajax({
            url: 'controller/check_user.php',
            type: 'POST',
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function(message) {
                if (message != "Uspješno ste se ulogovali!") {
                    alertify.showFailure(message).set('maximizable', false);

                } else {
                    window.location.replace("viewer/mypages/starter.php");
                }
            }
        })
    }
});