//Mijenjanje statusa elementa u tabeli
$('button.deaktivirajblog').click(function(event) {
    event.preventDefault();
    let id = $(this).attr('name');
    let btn = $(this);
    $.ajax({
        url: '../../controller/change_state.php',
        type: 'GET',
        data: 'blog_id=' + id,
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
$('button.izbrisiblog').click(function(event) {
    event.preventDefault();
    let id = $(this).attr('name');
    let red = $(this).parent().parent();
    alertify.confirm('', 'Da li ste sigurni da želite da izbrišete novost?', function() {
            //alertify.success('Ok')
            $.ajax({
                url: '../../controller/delete_row_table.php',
                type: 'GET',
                data: 'delete_blog=' + id,
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

//Popunjavanje modala
function parseJsonBlog(response) {
    response = JSON.parse(response);
    $("#blog_id").val(response['blog_id']);
    $("#naslov").val(response['blog_naslov']);
    $("#nasloven").val(response['blog_naslov_en']);
    $("#ime_prezime").val(response['blog_ime_autora']);
    $("#datepicker").val(response['blog_vrijeme']);
    $("#uvodni_tekst").val(response['blog_uvodni_tekst']);
    $("#uvodni_teksten").val(response['blog_uvodni_tekst_en']);
    $("#statusinput").val(response['blog_cover']);
    $("#alt").val(response['blog_alt']);
    $("#alten").val(response['blog_alt_en']);
    $("#tag").val(response['blog_tag']);
    $("#tagen").val(response['blog_tag_en']);
}

// Otvaranje modala i popunjavanje podacima iz tabele
$('button.izmijeniblog').click(function(event) {
    event.preventDefault();
    let id = $(this).attr('name');
    //let red = $(this).parent().parent();
    $.ajax({
        url: '../../controller/fill_modal.php',
        type: 'GET',
        data: 'izmijeni_blog_id=' + id,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function(message) {
            if (message.startsWith("{")) {
                parseJsonBlog(message);
                displayModal();
            } else {
                alertify.showFailure("Došlo je do greške!").set('maximizable', false);
            }
        }
    });
});


// Izmijena ili unos novog reda u tabeli
$("#forma_blog").submit(function(event) {
    event.preventDefault();
    if ($("#naslov").val() == "" || $("#nasloven").val() == "" || $("#ime_prezime").val() == "" || $("#datepicker").val() == "" || $("#uvodni_tekst").val() == "" || $("#uvodni_teksten").val() == "" || $("#statusinput").val() == "" || $("#alt").val() == "" || $("#alten").val() == "" || $("#tag").val() == "" || $("#tagen").val() == "") {

        if ($("#naslov").val() == "") {
            $("#naslov").addClass("error-field").notify("Morate unijeti naslov bloga!", "error");
        }
        if ($("#nasloven").val() == "") {
            $("#nasloven").addClass("error-field").notify("Morate unijeti naslov bloga!", "error");
        }
        if ($("#ime_prezime").val() == "") {
            $("#ime_prezime").addClass("error-field").notify("Morate unijeti ime i prezime autora bloga!", "error");
        }
        if ($("#datepicker").val() == "") {
            $("#datepicker").addClass("error-field").notify("Morate unijeti datum kreiranja bloga!", "error");
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
        if ($("#alt").val() == "") {
            $("#alt").addClass("error-field").notify("Unesite alt tag!", "error");
        }
        if ($("#alten").val() == "") {
            $("#alten").addClass("error-field").notify("Unesite alt tag!", "error");
        }
        if ($("#tag").val() == "") {
            $("#tag").addClass("error-field").notify("Unesite bar jedan tag!", "error");
        }
        if ($("#tagen").val() == "") {
            $("#tagen").addClass("error-field").notify("Unesite bar jedan tag!", "error");
        }

    } else {
        var formData = new FormData($(this)[0]);
        $.ajax({
            url: '../../controller/insert_blog.php',
            type: 'POST',
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function(message) {
                if (message.startsWith("Greška! ")) {
                    alertify.showFailure(message).set('maximizable', false);
                } else if (message == "Uspješno uneseno!") {
                    alertify.showSuccess("Uspješno ste dodali blog!").set('maximizable', false);
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                } else if (message == "Uspješno promijenjeno!") {
                    alertify.showSuccess("Izmjene su uspješno sačuvane!").set('maximizable', false);
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                } else {
                    alertify.showFailure(message).set('maximizable', false);
                }
            }
        });
    }

});