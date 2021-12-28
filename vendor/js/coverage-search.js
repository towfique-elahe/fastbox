// dhaka division
$(document).ready(function () {
    $("#dhakaInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#dhakaTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
// chattogram division
$(document).ready(function () {
    $("#chattogramInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#chattogramTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
// sylhet division
$(document).ready(function () {
    $("#sylhetInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#sylhetTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
// rangpur division
$(document).ready(function () {
    $("#rangpurInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#rangpurTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
// barishal division
$(document).ready(function () {
    $("#barishalInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#barishalTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
// rajshahi division
$(document).ready(function () {
    $("#rajshahiInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#rajshahiTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
// dhaka division
$(document).ready(function () {
    $("#khulnaInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#khulnaTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});