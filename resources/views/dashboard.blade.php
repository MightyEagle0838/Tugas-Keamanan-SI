<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Keamanan SI</title>
</head>
<body style="margin:0; font-family:Arial; background:#f8f9fa;">

<!-- HEADER -->
<div style="background:#ffffff; border-bottom:1px solid #ddd; padding:15px 40px; display:flex; justify-content:space-between;">
    <div style="font-weight:bold; color:#007bff;">Keamanan SI</div>

    <div>
        <a href="/" style="margin-right:15px; text-decoration:none; color:#333;">Home</a>

        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
            @csrf
            <button style="background:#007bff; color:white; border:none; padding:6px 12px; border-radius:5px;">
                Logout
            </button>
        </form>
    </div>
</div>

<!-- CONTENT -->
<div style="padding:40px; text-align:center;">
    
    <h2>Dashboard</h2>
    <p>Halo, {{ Auth::user()->name }}</p>

    <div style="margin-top:20px; background:white; padding:20px; border:1px solid #ddd; border-radius:8px; display:inline-block;">
        <p>Kamu berhasil login ke sistem</p>
    </div>

</div>

</body>
</html>