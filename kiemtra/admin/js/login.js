$(document).ready(function(){
    $('.create').hide();
    $('.intro').click(function(){
        $('.create').show();
        $('.login').hide();
    });
    $('.submit-login').submit(function(){
        var email = $("#inputEmail").val();
        var pass = $("#inputPass").val();

        $.ajax({
            url : 'check_login.php',
            type : 'post',
            dataType : 'json',
            data : {
                get_email : email,
                get_pass : pass
            }
        });
    });
});