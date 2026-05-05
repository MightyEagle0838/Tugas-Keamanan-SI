<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verify Email - Keamanan SI</title>
</head>
<body style="margin:0; font-family:Arial; background:#f8f9fa;">

<!-- HEADER -->
<div style="background:#ffffff; border-bottom:1px solid #ddd; padding:15px 40px; display:flex; justify-content:space-between;">
    <div style="font-weight:bold; color:#007bff;">Keamanan SI</div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button style="background:#dc3545; color:white; border:none; padding:6px 12px; border-radius:5px;">
            Logout
        </button>
    </form>
</div>

<!-- CONTENT -->
<div style="display:flex; justify-content:center; align-items:center; height:90vh;">

    <div style="width:420px; background:white; padding:25px; border:1px solid #ddd; border-radius:8px; text-align:center;">

        <h3>Verifikasi Email</h3>

        <p style="color:#555; font-size:14px;">
            Terima kasih sudah mendaftar! Silakan cek email kamu untuk verifikasi akun sebelum lanjut ke sistem.
        </p>

        <!-- STATUS SUCCESS -->
        @if (session('status') == 'verification-link-sent')
            <div style="color:green; margin:10px 0; font-size:13px;">
                Link verifikasi baru sudah dikirim ke email kamu.
            </div>
        @endif

        <!-- RESEND EMAIL -->
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button style="width:100%; padding:10px; background:#007bff; color:white; border:none; border-radius:5px; margin-top:10px;">
                Kirim Ulang Email Verifikasi
            </button>
        </form>

        <!-- INFO -->
        <p style="font-size:12px; color:#888; margin-top:15px;">
            Jika tidak menerima email, cek folder spam atau klik kirim ulang.
        </p>

    </div>

</div>

</body>
</html>