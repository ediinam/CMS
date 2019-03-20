//Mijenjanje lozinke
$('#lozinka_pop_up').click(function() {
    displayModal();
    $("#loginForm").submit(function(event) {
        event.preventDefault();
        let trenutna_loz = $("#trenutna_loz").val();
        let nova_loz = $("#nova_loz").val();
        let potvr_loz = $("#potvr_loz").val();

        if (trenutna_loz == "" || nova_loz == "" || potvr_loz == "") {
            alertify.showFailure("Niste popunili sva polja!").set('maximizable', false);
            if (trenutna_loz == "") {
                $("#trenutna_loz").addClass("error-field");
            }
            if (nova_loz == "") {
                $("#nova_loz").addClass("error-field");
            }
            if (potvr_loz == "") {
                $("#potvr_loz").addClass("error-field");
            }
        } else {
            var formData = new FormData($(this)[0]);
            $.ajax({
                url: '../../controller/change_password.php',
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function(message) {
                    if (message.startsWith("Greška! ")) {
                        alertify.showFailure(message).set('maximizable', false);
                    } else {
                        alertify.showSuccess('Postavljena je nova lozinka! Da bi promijenili, kliknite na dugme "Sačuvaj"').set('maximizable', false);
                        $("#modal_window").css("display", "none");
                        $("#lozinka").val(message);
                    }
                }
            });
        }

    });
    $("#loginForm")[0].reset();
    $("input").removeClass("error-field");
});

//User forma
$("#user_forma").submit(function(event) {

    event.preventDefault();

    if ($("#ime_prezime").val() == "" || $("#pozicija").val() == "" || $("#korisnicko_ime").val() == "" || $("#lozinka").val() == "" || $("#profilna_fotografija").val() == "") {
        alertify.showFailure("Niste popunili sva polja!").set('maximizable', false);
        if ($("#ime_prezime").val() == "") {
            $("#ime_prezime").addClass("error-field");
        }
        if ($("#pozicija").val() == "") {
            $("#pozicija").addClass("error-field");
        }
        if ($("#korisnicko_ime").val() == "") {
            $("#korisnicko_ime").addClass("error-field");
        }
        if ($("#lozinka").val() == "") {
            $("#lozinka").addClass("error-field");
        }
        if ($("#profilna_fotografija") == "") {
            $("#profilna_fotografija").addClass("error-field");
        }

    } else {
        var formData = new FormData($(this)[0]);
        $.ajax({
            url: '../../controller/update_user.php',
            type: 'POST',
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function(message) {
                if (message.startsWith("Greška! ")) {
                    alertify.showFailure(message).set('maximizable', false);
                } else {
                    alertify.showSuccess(message).set('maximizable', false);
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                }
            }
        });
    }

});