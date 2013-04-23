$(document).ready(function(){

    $('#dialog-message').dialog({
        modal: true,
        autoOpen: false,
        buttons: {
            Ok: function() {
                $(this).dialog("close");
            }
        }
    });



    $('#button').on('click', function() {
        var image = $('#file').val();
        
        var dataString = 'file=';
        $.ajax({
            type: "POST",
            url: "imgs/bespoke/monograms/emblem/",
            data: dataString,
            success: function() {
                $('#dialog-message').dialog('open');
            }
        });
    });
});