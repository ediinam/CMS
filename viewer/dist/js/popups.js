//override defaults alertify
alertify.defaults.transition = "flipx";
alertify.defaults.theme.ok = "index-btn";
alertify.defaults.theme.cancel = "btn btn-danger";
alertify.defaults.theme.input = "form-control";

if (!alertify.showFailure) {
    //define a new dialog
    alertify.dialog('showFailure', function factory() {
        return {
            main: function(message) {
                this.message = "<p style='padding-top:10px;text-align:center;'>" + message + "</p>";
            },
            build: function() {
                var errorHeader = '<span class="fa fa-times-circle fa-2x" ' +
                    'style="vertical-align:middle;color:#e10000;">' +
                    '</span> Greška';
                this.setHeader(errorHeader);
            },
            setup: function() {
                return {
                    buttons: [{ text: "U redu", className: alertify.defaults.theme.ok, key: 27 }],
                    focus: { element: 0 }
                };
            },
            prepare: function() {
                this.setContent(this.message);
            }
        }
    });
}

if (!alertify.showSuccess) {
    //define a new dialog
    alertify.dialog('showSuccess', function factory() {
        return {
            main: function(message) {
                this.message = "<p style='padding-top:10px;text-align:center;'>" + message + "</p>";
            },
            build: function() {
                var errorHeader = '<span class="fas fa-check-circle fa-2x" ' +
                    'style="vertical-align:middle;color:green;">' +
                    '</span> Uspjeh!';
                this.setHeader(errorHeader);
            },
            setup: function() {
                return {
                    buttons: [{ text: "U redu", className: alertify.defaults.theme.ok /*, key:27Esc}*/ }],
                    focus: { element: 0 }
                };
            },
            prepare: function() {
                this.setContent(this.message);
            }
        }
    });
}