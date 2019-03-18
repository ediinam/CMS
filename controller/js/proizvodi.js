//Mijenjanje statusa elementa u tabeli
$('button.deaktivirajproizvodi').click(function(event) {
    event.preventDefault();
    let id = $(this).attr('name');

    let btn = $(this);
    $.ajax({
        url: '../../controller/change_state.php',
        type: 'GET',
        data: 'proizvodi_id=' + id,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function(message) {
            if (message == '1') {
                changeStatus(btn, "");
            } else {
                alertify.showFailure(message).set('maximizable', false);
            }
        }
    });
});
// KRAJ mijenjanje statusa

//Brisanje reda u tabeli
$('button.izbrisiproizvodi').click(function(event) {
    event.preventDefault();
    let id = $(this).attr('name');
    let red = $(this).parent().parent();
    alertify.confirm('', 'Da li ste sigurni da želite da izbrišete novost?', function() {
            //alertify.success('Ok')
            $.ajax({
                url: '../../controller/delete_row_table.php',
                type: 'GET',
                data: 'delete_proizvodi=' + id,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function(message) {
                    if (message == "Uspješno izbrisano!") {
                        alertify.showSuccess("Uspješno ste izbrisali novost!").set('maximizable', false);
                        hideRow(red);
                    } else {
                        alertify.showFailure("Brisanje neuspješno!").set('maximizable', false);
                    }
                }
            });
        },
        function() {
            //alertify.error('Cancel')
        }).set({ labels: { ok: 'Da', cancel: 'Ne' } });
});
//KRAJ brisanje reda

// Ubacivanje novog reda u tabelu
$("#forma_proizvodi").submit(function(event) {
    event.preventDefault();
    if ($("#naziv").val() == "" || $("#naziven").val() == "" || $("#opis").val() == "" || $("#opisen").val() == "" || $("#uvodni_tekst").val() == "" || $("#uvodni_teksten").val() == "" || $("#statusinput").val() == "" || $("#statusinput2").val() == "" || $("#alt").val() == "" || $("#alten").val() == "") {

        if ($("#naziv").val() == "") {
            $("#naziv").addClass("error-field").notify("Morate unijeti naziv proizvoda!", "error");
        }
        if ($("#naziven").val() == "") {
            $("#naziven").addClass("error-field").notify("Morate unijeti naziv proizvoda!", "error");
        }
        if ($("#opis").val() == "") {
            $("#opis").addClass("error-field").notify("Morate unijeti opis proizvoda!", "error");
        }
        if ($("#opisen").val() == "") {
            $("#opisen").addClass("error-field").notify("Morate unijeti opis proizvoda!", "error");
        }
        if ($("#uvodni_tekst").val() == "") {
            $("#uvodni_tekst").addClass("error-field").notify("Morate unijeti uvodni tekst!", "error");
        }
        if ($("#uvodni_teksten").val() == "") {
            $("#uvodni_teksten").addClass("error-field").notify("Morate unijeti uvodni tekst!", "error");
        }
        if ($("#statusinput").val() == "") {
            $("#statusinput").addClass("error-field").notify("Morate unijeti cover fotografiju novosti!", "error");
        }
        if ($("#statusinput2").val() == "") {
            $("#statusinput2").addClass("error-field").notify("Morate unijeti uvodnu fotografiju novosti!", "error");
        }
        if ($("#alt").val() == "") {
            $("#alt").addClass("error-field").notify("Unesite alt tag!", "error");
        }
        if ($("#alten").val() == "") {
            $("#alten").addClass("error-field").notify("Unesite alt tag!", "error");
        }

    }
    // else {
    //     var formData = new FormData($(this)[0]);
    //     $.ajax({
    //         url: '../../controller/insert_proizvod.php',
    //         type: 'POST',
    //         data: formData,
    //         async: false,
    //         cache: false,
    //         contentType: false,
    //         processData: false,
    //         success: function(message) {
    //             if (message.startsWith("Greška! ")) {
    //                 alertify.showFailure(message).set('maximizable', false);
    //             } else {
    //                 alertify.showSuccess(message).set('maximizable', false);
    //                 //$("#modal_window").css("display", "none");
    //             }
    //         }
    //     });
    // }

});