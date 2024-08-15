$(document).ready(function() {
    $('#account').on('blur', function() {
        var account = $(this).val();
        $.ajax({
            url: window.routeCheckAccount, // 使用全局變數
            type: 'POST',
            data: {
                account: account,
                _token: $('meta[name="csrf-token"]').attr('content') // 確保 CSRF token 正確
            },
            success: function(response) {
                $('#account-error').hide();
            },
            error: function(xhr) {
                var errors = xhr.responseJSON.errors;
                if (errors && errors.account) {
                    $('#account-error').text('帳號已被使用，請更換謝謝').show();
                } else {
                    $('#account-error').hide();
                }
            }
        });
    });
});
