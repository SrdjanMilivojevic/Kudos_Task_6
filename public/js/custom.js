$('#form').on('submit', function () {
    var $this = $(this);
    var contents = $this.serialize();
    
    $.ajax({
        url: 'add.php',
        dataType: 'text',
        type: 'post',
        data: contents,
        succsess: function (data) {
            alert('poslato');
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });

    return false;
});

$('#send').click(function(){
    $('#send_results').load('send.php');
});