function _(el) {
    return document.getElementById(el);
}

function displayModal() {
    let modal_window = _("modal_window");
    let modal_body = _("modal_body");

    modal_window.setAttribute("style", "display:block; animation: pop-up-window 1s;");
    modal_body.setAttribute("style", "animation: pop-up 1s;");

    let close_modal = document.getElementsByClassName("close-modal");
    for (let i = 0; i < close_modal.length; i++) {

        close_modal[i].addEventListener("click", function(e) {
            if (e.target == close_modal[i]) {
                modal_window.setAttribute("style", "display:none");
            }
        });
    }

    document.addEventListener("keydown", function(e) {
        if (e.key === "Escape") {
            console.log("Zatvaram");
            modal_window.setAttribute("style", "display:none");
        }
    });
}

//mijenjanje sadrzaja input polja sa greskom
$("input").change(function() {
    $(this).removeClass("error-field");
});
$("textarea").change(function() {
    $(this).removeClass("error-field");
});

//Sakrivanje reda tabele
function hideRow(el) {
    $(el).css("display", "none");
}

$(document).ready(function() {
    //modal za popunjavanje 

    if ($("#open_modal_blog").length > 0) {
        $('#open_modal_blog').click(function() {
            $("#forma_blog")[0].reset();
            displayModal();
        });
    }
    if ($("#open_modal_karijera").length > 0) {
        $('#open_modal_karijera').click(function() {
            $("#forma_karijera")[0].reset();
            displayModal();
        });
    }
    if ($("#open_modal_proizvodi").length > 0) {
        $('#open_modal_proizvodi').click(function() {
            $("#forma_proizvodi")[0].reset();
            displayModal();
        });
    }
    //tabela
    $(function() {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
        //CK Editor
    $(function() {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            if ($("#editor1").length > 0 || $("#editor2").length > 0) {
                // CKEDITOR.replace('editor1')
                // CKEDITOR.replace('editor2')
                ClassicEditor
                    .create(document.querySelector('#editor1'))
                    .catch(error => {
                        console.error(error);
                    });
                ClassicEditor
                    .create(document.querySelector('#editor2'))
                    .catch(error => {
                        console.error(error);
                    });
            }
            //bootstrap WYSIHTML5 - text editor
            //  $('.textarea').wysihtml5()
        })
        //Date picker
    if ($("#datepicker").length > 0) {
        $('#datepicker').datepicker({
            autoclose: true
        })
    }
    if ($("#datepicker2").length > 0) {
        $('#datepicker2').datepicker({
            autoclose: true
        })
    }

});