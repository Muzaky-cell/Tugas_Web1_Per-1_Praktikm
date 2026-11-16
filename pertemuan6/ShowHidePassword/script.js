// script.js — buka/tutup tampilan password lewat checkbox "Show" (jQuery)

$(document).ready(function () {
    $("#tampil").on("change", function () {
        if ($(this).is(":checked")) {
            $("#password").attr("type", "text");      // tampilkan password
        } else {
            $("#password").attr("type", "password");  // sembunyikan lagi
        }
    });
});
