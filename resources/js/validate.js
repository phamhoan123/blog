function validateClientForm(event) {
    event.preventDefault()
    var username = $('#username').val();
    var email = $('#mail').val();
    var gender = $('#sex').val();
    var pass = $('#password').val();
    var re_pass = $('#re-password').val();
    var accept = $('#accept');
    var done = true;
    var re = /[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}/igm;
    if(username.length == 0){
        $('.msg-username').removeClass('d-none');
        $('.msg-username').addClass('d-block');
        $('.msg-username').text('Please enter your username');
        done = false;
    } else if(username.length > 255){
        $('.msg-username').removeClass('d-none');
        $('.msg-username').addClass('d-block');
        $('.msg-username').text('Your username too long');
        done = false;
    } else{
        $('.msg-username').removeClass('d-block');
        $('.msg-username').addClass('d-none');
    }

    if(email.length == 0){
        $('.msg-mail').removeClass('d-none');
        $('.msg-mail').addClass('d-block');
        $('.msg-mail').text('Please enter your email');
        done = false;
    }else if(email.length > 255){
        $('.msg-mail').removeClass('d-none');
        $('.msg-mail').addClass('d-block');
        $('.msg-mail').text('Your email too long');
        done = false;
    } else if(!re.test(email)){
        $('.msg-mail').removeClass('d-none');
        $('.msg-mail').addClass('d-block');
        $('.msg-mail').text('Your email is wrong!');
    } else{
        $('.msg-mail').removeClass('d-block');
        $('.msg-mail').addClass('d-none');
    }

    if(pass.length < 8){
        $('.msg-pass').removeClass('d-none');
        $('.msg-pass').addClass('d-block');
        $('.msg-pass').text('Password has at least 8 character');
        done = false;
    } else {
        $('.msg-pass').removeClass('d-block');
        $('.msg-pass').addClass('d-none');
    }

    if(re_pass.length < 8){
        $('.msg-re-pass').removeClass('d-none');
        $('.msg-re-pass').addClass('d-block');
        $('.msg-re-pass').text('Don\'t match. Please type again');
        done = false;
    } else {
        $('.msg-re-pass').removeClass('d-block');
        $('.msg-re-pass').addClass('d-none');
    }
    if(!accept.is(":checked")){
        $('.msg-accept').removeClass('d-none');
        $('.msg-accept').addClass('d-block');
        $('.msg-accept').text('Please agree to all Terms & Conditions');
        done = false;
    } else {
        $('.msg-accept').removeClass('d-block');
        $('.msg-accept').addClass('d-none');
    }

    if(done){
        $('.form-register').submit();
    }
}


