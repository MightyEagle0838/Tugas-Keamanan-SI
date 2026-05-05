<!DOCTYPE html>
<html>
<head>
    <title>Lupa Password</title>
</head>
<body style="background:#f8f9fa; font-family:Arial;">

<div style="display:flex; justify-content:center; align-items:center; height:100vh;">
    <div style="width:350px; background:white; padding:25px; border:1px solid #ddd;">
        <h3>Reset Password</h3>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" style="width:100%; padding:10px; margin-bottom:15px;">
            <button style="width:100%; padding:10px; background:#007bff; color:white;">Kirim Link</button>
        </form>
    </div>
</div>

</body>
</html>