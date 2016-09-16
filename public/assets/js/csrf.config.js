$(document).ready(function(){
        console.log($('input[name=_token]').val());
        $.ajaxPrefilter(function(options, originalOptions, xhr){
            var token =  $('input[name=_token]').val();
            if (token){
                return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('input[name=_token]').val()
        }
    });
});
