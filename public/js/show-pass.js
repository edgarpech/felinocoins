function mostrarPassword() {
    var cambio = document.getElementById("password");
    if (cambio.type == "password") {
        cambio.type = "text";
        $(".icon").removeClass("fa fa-eye-slash").addClass("fa fa-eye");
    } else {
        cambio.type = "password";
        $(".icon").removeClass("fa fa-eye").addClass("fa fa-eye-slash");
    }
}

$(document).ready(function () {
    //CheckBox mostrar contraseña
    $("#showpassword").click(function () {
        $("#password").attr(
            "type",
            $(this).is(":checked") ? "text" : "password"
        );
    });
});

function mostrarPasswordConfirm() {
    var cambio = document.getElementById("password_confirmation");
    if (cambio.type == "password") {
        cambio.type = "text";
        $(".icon2").removeClass("fa fa-eye-slash").addClass("fa fa-eye");
    } else {
        cambio.type = "password";
        $(".icon2").removeClass("fa fa-eye").addClass("fa fa-eye-slash");
    }
}

$(document).ready(function () {
    //CheckBox mostrar contraseña
    $("#showpasswordconfirm").click(function () {
        $("#password").attr(
            "type",
            $(this).is(":checked") ? "text" : "password"
        );
    });
});
