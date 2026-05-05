<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body style="background:#f8f9fa; font-family:Arial;">

<div style="display:flex; justify-content:center; align-items:center; height:100vh;">
    <div style="width:350px; background:white; padding:25px; border:1px solid #ddd; border-radius:8px;">
        <h3>Password Baru</h3>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            @method('PUT')

            <input type="hidden" name="token" value="{{ request()->route('token') }}">

            <input type="email" name="email" placeholder="Email"
                style="width:100%; padding:10px; margin-bottom:10px;">

            <input type="password" name="password" placeholder="Password Baru"
                style="width:100%; padding:10px; margin-bottom:10px;">

            <input type="password" name="password_confirmation" placeholder="Confirm Password"
                style="width:100%; padding:10px; margin-bottom:15px;">

            <button style="width:100%; padding:10px; background:#007bff; color:white; border:none; border-radius:5px;">
                Reset Password
            </button>
        </form>

    </div>
</div>

</body>
</html>