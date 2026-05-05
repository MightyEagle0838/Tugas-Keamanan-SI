<!DOCTYPE html>
<html>
<head>
    <title>Login - Keamanan SI</title>
</head>
<body style="margin:0; font-family:Arial; background:#f8f9fa;">

<!-- HEADER -->
<div style="background:#fff; border-bottom:1px solid #ddd; padding:15px 40px; display:flex; justify-content:space-between;">
    <b style="color:#007bff;">Keamanan SI</b>
    <div>
        <a href="/" style="margin-right:15px;">Home</a>
        <a href="{{ route('register') }}" style="background:#007bff; color:white; padding:6px 12px; border-radius:5px;">Register</a>
    </div>
</div>

<div style="display:flex; justify-content:center; align-items:center; height:90vh;">
    <div style="width:350px; background:white; padding:25px; border:1px solid #ddd; border-radius:8px;">
        <h3 style="text-align:center;">Login</h3>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <input type="email" name="email" placeholder="Email" style="width:100%; padding:10px; margin-bottom:10px;">
            <input type="password" name="password" placeholder="Password" style="width:100%; padding:10px; margin-bottom:15px;">

            <button style="width:100%; padding:10px; background:#007bff; color:white; border:none;">Login</button>
        </form>

        <p style="text-align:center; margin-top:10px;">
            <a href="{{ route('password.request') }}" style="color:#007bff;">Lupa Password?</a>
        </p>
    </div>
</div>

</body>
</html>