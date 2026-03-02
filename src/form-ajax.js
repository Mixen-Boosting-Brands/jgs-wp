// Formulario + Validación
"use strict";

window.addEventListener(
    "load",
    function () {
        var formMessages = $("#form-messages");
        var forms = document.getElementsByClassName("needs-validation");

        Array.prototype.forEach.call(forms, function (form) {
            form.addEventListener(
                "submit",
                function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                        form.classList.add("was-validated");
                        return;
                    }

                    event.preventDefault();

                    $.ajax({
                        type: form.method,
                        url: form.action,
                        data: new FormData(form),
                        processData: false,
                        contentType: false,

                        beforeSend: function () {
                            $("#hold-on-a-sec").addClass("is-loading");
                            formMessages.removeClass("error success").text("");
                        },

                        success: function (response) {
                            formMessages
                                .removeClass("error")
                                .addClass("success")
                                .text(response);

                            form.reset();
                            form.classList.remove("was-validated");
                        },

                        error: function (response) {
                            let message = response.responseText
                                ? response.responseText
                                : "Ocurrió un error inesperado. Inténtalo más tarde.";

                            formMessages
                                .removeClass("success")
                                .addClass("error")
                                .text(message);
                        },

                        complete: function () {
                            $("#hold-on-a-sec").removeClass("is-loading");
                        },
                    });
                },
                false
            );
        });
    },
    false
);
