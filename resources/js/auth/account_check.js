document.addEventListener('DOMContentLoaded', function() {
    // JavaScript 文件: resources/js/auth/account_check.js

    const registerContainer = document.getElementById('registration'); // 更正 ID
    const loginContainer = document.getElementById('login');

    // 顯示註冊表單
    function showRegister() {
        registerContainer.classList.add('active');
        loginContainer.classList.remove('active');
    }

    // 顯示登入表單
    function showLogin() {
        registerContainer.classList.remove('active');
        loginContainer.classList.add('active');
    }

    window.register = showRegister;
    window.login = showLogin;

    // 默認顯示登入表單
    showLogin();


    $(document).ready(function() {
        $('#account').on('blur', function() {
            let account = $(this).val();
            $.ajax({
                url: window.routeCheckAccount, // Ensure this URL is properly defined
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
});
