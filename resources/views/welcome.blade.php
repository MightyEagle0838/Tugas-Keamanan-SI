<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Keamanan SI</title>
</head>
<body style="margin:0; font-family:Arial; background:#f8f9fa;">

<!-- HEADER -->
<div style="background:#ffffff; border-bottom:1px solid #ddd; padding:15px 40px; display:flex; justify-content:space-between; align-items:center;">
    
    <div style="font-weight:bold; color:#007bff; font-size:18px;">
        Keamanan SI
    </div>

    <div>
        <a href="/" style="margin-right:15px; text-decoration:none; color:#333;">Home</a>

        @auth
            <a href="/dashboard" style="margin-right:15px; text-decoration:none; color:#333;">Dashboard</a>

            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                @csrf
                <button style="background:#007bff; color:white; border:none; padding:6px 12px; border-radius:5px; cursor:pointer;">
                    Logout
                </button>
            </form>
        @else
            <a href="{{ route('login') }}" style="margin-right:10px; text-decoration:none; color:#007bff;">Login</a>

            <a href="{{ route('register') }}" style="background:#007bff; color:white; padding:6px 12px; border-radius:5px; text-decoration:none;">
                Register
            </a>
        @endauth
    </div>

</div>

<!-- CONTENT -->
<div style="display:flex; justify-content:center; align-items:center; height:90vh; flex-direction:column;">
    
    <h1 style="margin-bottom:10px;">Keamanan SI</h1>
    <p style="color:#555;">Sistem Authentication Laravel</p>

</div>

</body>
</html>