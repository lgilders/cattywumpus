$(document).ready(function() {
    var dialog = $('#dialog1');

    dialog.dialog({
        autoOpen: false,
        modal: true,
        draggable: false,
        width: '370',
        show: 'fade',
        hide: 'fade',
        position: {my: "top", at:"top", of: window }
    });

    $("#dialogButton").on("click", function(e) {
        e.preventDefault();
        dialog.dialog('open');
        dialog.load(this.href);
    });
});