var a = document.getElementById("loginBtn");
var b = document.getElementById("registerBtn");
var x = document.getElementById("login");
var y = document.getElementById("register");

function login(){
    x.style.left = "4px";
    y.style.right = "-520px";
    a.className += " white-btn";
    b.className = "btn";
    x.style.opacity = 1;
    y.style.opacity = 0;
}

function register(){
    x.style.left = "-510px";
    y.style.right = "5px";
    a.className = "btn";
    b.className +=  " white-btn";
    x.style.opacity = 0;
    y.style.opacity = 1;
}

$(document).ready(function() {
    $('#account').on('blur', function() {
        let account = $(this).val();
        $.ajax({
            url: window.routeCheckAccount,
            method: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                account: account
            },
            success: function(response) {
                if (response.exists) {
                    $('#account-error').text('帳號已存在').show();
                } else {
                    $('#account-error').hide();
                }
            }
        });
    });
});
