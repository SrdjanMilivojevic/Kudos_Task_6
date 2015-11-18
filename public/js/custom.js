$('#form').on('submit', function () {
    var $this = $(this);
    var contents = $this.serialize();
    
    // Post the results from the form.
    $.ajax({
        url: 'add.php',
        dataType: 'text',
        type: 'post',
        data: contents,
        error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
    // Disable the form submitting.
    return false;
});
// when we click on send button, 
// results from send.php file will 
// be displayed in #send_results 
// container
$('#send').click(function(){
    $('#send_results').load('send.php');
});
