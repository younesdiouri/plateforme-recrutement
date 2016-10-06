$(document).ready(function(){ 
    $('#characterLeft').text('300 caractères restants');
    $('#message').keydown(function () {
        var max = 300;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('Vous avez atteint la limite');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' caractères restants');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    
});
