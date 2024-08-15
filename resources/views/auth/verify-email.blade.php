<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Your Email Address</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Verify Your Email Address</h1>
        
        @if (session('resent'))
            <div>
                A new verification link has been sent to your email address.
            </div>
        @endif

        <p>Before proceeding, please check your email for a verification link.</p>
        <p>If you did not receive the email</p>
        
        <form action="{{ route('verification.resend') }}" method="POST">
            @csrf
            <button type="submit">Request another verification link</button>
        </form>
    </div>
</body>
</html>
