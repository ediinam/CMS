//Mijenjanje statusa elementa u tabeli
$('button.deaktivirajkarijera').click(function(event) {
    event.preventDefault();
    let id = $(this).attr('name');
    let rowtd = $(this).parent().prev().prev();
    let btn = $(this);
    $.ajax({
        url: '../../controller/change_state.php',
        type: 'GET',
        data: 'karijera_id=' + id,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function(message) {
            if (message == '1') {
                changeStatus(btn, rowtd);
            } else {
                alertify.showFailure(message).set('maximizable', false);
            }
        }
    });
});
// KRAJ mijenjanje statusa

//Mijenjanje reda u tabeli
$('button.izmijenikarijera').click(function(event) {
    event.preventDefault();
    let id = $(this).attr('name');
    $.ajax({
        url: '../../controller/change_row_table.php',
        type: 'GET',
        data: 'karijera_id=' + id,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function(message) {
            if (message.startsWith("Array")) {
                alertify.showSuccess(message).set('maximizable', false);
            } else {
                alertify.showFailure(message).set('maximizable', false);
            }
        }
    });
});
//KRAJ mijenjanje reda

//Brisanje reda u tabeli
$('button.izbrisikarijera').click(function(event) {
    event.preventDefault();
    let id = $(this).attr('name');
    let red = $(this).parent().parent();
    alertify.confirm('', 'Da li ste sigurni da želite da novost?', function() {
            //alertify.success('Ok')
            $.ajax({
                url: '../../controller/delete_row_table.php',
                type: 'GET',
                data: 'delete_karijera=' + id,
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

//Ubacivanje novog reda u tabelu
$("#forma_karijera").submit(function(event) {
    event.preventDefault();
    if ($("#naslov").val() == "" || $("#nasloven").val() == "" || $("#datepicker").val() == "" || $("#datepicker2").val() == "" || $("#opis").val() == "" || $("#opisen").val() == "" || $("#statusinput").val() == "") {

        if ($("#naslov").val() == "") {
            $("#naslov").addClass("error-field").notify("Morate unijeti naslov novosti!", "error");
        }
        if ($("#nasloven").val() == "") {
            $("#nasloven").addClass("error-field").notify("Morate unijeti naslov novosti!", "error");
        }
        if ($("#datepicker").val() == "") {
            $("#datepicker").addClass("error-field").notify("Morate unijeti datum novosti!", "error");
        }
        if ($("#datepicker2").val() == "") {
            $("#datepicker2").addClass("error-field").notify("Morate unijeti datum novosti!", "error");
        }
        if ($("#opis").val() == "") {
            $("#opis").addClass("error-field").notify("Morate unijeti uvodni tekst!", "error");
        }
        if ($("#opisen").val() == "") {
            $("#opisen").addClass("error-field").notify("Morate unijeti uvodni tekst!", "error");
        }
        if ($("#statusinput").val() == "") {
            $("#statusinput").addClass("error-field").notify("Morate unijeti cover fotografiju novosti!", "error");
        }

    }
    // else {
    //     var formData = new FormData($(this)[0]);
    //     $.ajax({
    //         url: '../../controller/insert_karijera.php',
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

// Kraj ubacivanje novog elementa u tabelu