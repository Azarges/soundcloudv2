$(document).ready(function () {
    $('#app').on('click','a.chanson',function (e) {
        e.preventDefault();
        var f = $(this).attr('data-file');
        console.log(f);

        var audio = $('#audio');
        audio.attr('src',f);
        audio[0].load();
        audio[0].play();
    });
});

