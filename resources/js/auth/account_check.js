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
