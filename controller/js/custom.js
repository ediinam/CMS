//mijenjanje statusa na tabeli
function changeStatus(el1, el2) {
    let vrijednostbtn = $(el1)[0].firstChild.data;
    if (vrijednostbtn == "Aktiviraj") {
        $(el1)[0].firstChild.data = "Deaktiviraj";

    } else if (vrijednostbtn == "Deaktiviraj") {
        $(el1)[0].firstChild.data = "Aktiviraj";
    }
    if (el2 != "") {
        $(el2).removeClass('bgr-fail bgr-success');

        let vrijednosttd = $(el2)[0].firstChild.data;
        if (vrijednosttd == "aktivan") {
            $(el2)[0].firstChild.data = "neaktivan";
            $(el2).addClass('bgr-fail');
        } else if (vrijednosttd == "neaktivan") {
            $(el2)[0].firstChild.data = "aktivan";
            $(el2).addClass('bgr-success');
        }
    }
}

// UPLOAD IMAGES DRAG AND DROP

function statusInput(uploadimg, showimgname) {
    var file = _(uploadimg).files[0];
    _(showimgname).value = file.name;
}

function uploadFile() {
    var file = _("file1").files[0];
    var formdata = new FormData();
    formdata.append("file1", file);
    var ajax = new XMLHttpRequest();
    ajax.addEventListener("load", completeHandler, false);
    ajax.addEventListener("error", errorHandler, false);
    ajax.addEventListener("abort", abortHandler, false);
    ajax.open("POST", "uploade.php");
    ajax.send(formdata);
}

function completeHandler(event) {
    _("statusinput").value = event.target.responseText;
}

function errorHandler(event) {
    _("statusinput").value = "Upload Failed";
}

function abortHandler(event) {
    _("statusinput").value = "Upload Aborted";
}

// END OF UPLOAD IMAGES

$(".odustani").click(function() {
    $("input").removeClass("error-field");
    alertify.confirm('', 'Da li ste sigurni da želite da zatvorite prozor?', function() {
        // console.log("Ostaje mi otvoren modal");
    }, function() {
        $("#modal_window").css("display", "none");
        //console.log("Zatvara se modal");
    }).set({ labels: { ok: 'Da', cancel: 'Ne' } });
});