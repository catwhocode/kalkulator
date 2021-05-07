$(document).ready(function() {
    $('#kirim').click(function() {
        var bil1 = $('#bil1').val();
        var bil2 = $('#bil2').val();
        
        var operasi = $('#operasi').val();

        $.post("proses.php", { bil1: bil1, bil2: bil2, operasi: operasi })
        .done(function(hasil) {
            $('#hasil').val(hasil)
        });
    });
});