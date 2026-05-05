<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Keamanan SI</title>
</head>
<body style="margin:0; font-family:Arial; background:#f8f9fa;">

<!-- HEADER -->
<div style="background:#ffffff; border-bottom:1px solid #ddd; padding:15px 40px; display:flex; justify-content:space-between;">
    <div style="font-weight:bold; color:#007bff;">Keamanan SI</div>

    <div>
        <a href="/" style="margin-right:15px; text-decoration:none; color:#333;">Home</a>
        <a href="{{ route('login') }}" style="background:#007bff; color:white; padding:6px 12px; border-radius:5px; text-decoration:none;">
            Login
        </a>
    </div>
</div>

<!-- CONTENT -->
<div style="display:flex; justify-content:center; align-items:center; height:90vh;">
    
    <div style="width:350px; background:white; padding:25px; border:1px solid #ddd; border-radius:8px;">
        
        <h3 style="text-align:center;">Register</h3>

        <!-- 🔥 ERROR DISPLAY (TARUH DI SINI) -->
        @if ($errors->any())
            <div style="background:#ffe6e6; color:red; padding:10px; margin-bottom:10px; border-radius:5px; font-size:13px;">
                @foreach ($errors->all() as $error)
                    <div>• {{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <input type="text" name="name" placeholder="Nama"
                style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px;">

            <input type="email" name="email" placeholder="Email"
                style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px;">

            <input type="password" name="password" placeholder="Password"
                style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px;">

            <input type="password" name="password_confirmation" placeholder="Confirm Password"
                style="width:100%; padding:10px; margin-bottom:15px; border:1px solid #ccc; border-radius:5px;">

            <button style="width:100%; padding:10px; background:#007bff; color:white; border:none; border-radius:5px;">
                Register
            </button>
        </form>

    </div>

</div>

</body>
</html>