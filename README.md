# Sistem Authentication Laravel - Keamanan SI

## Deskripsi
Project ini merupakan implementasi sistem autentikasi berbasis Laravel yang dikembangkan untuk memenuhi tugas mata kuliah **Keamanan Sistem Informasi**.

Sistem ini berfokus pada keamanan data pengguna serta proses autentikasi yang aman dan terstruktur.

---

## Fitur Sistem
- Login User  
- Registrasi User  
- Password Hashing (bcrypt)  
- Verifikasi Email  
- Reset Password melalui Email  

---

## Implementasi Keamanan

### 1. Password Hashing
Password tidak disimpan dalam bentuk asli (plaintext), melainkan di-hash menggunakan bcrypt sehingga lebih aman.

### 2. Email Verification
User wajib melakukan verifikasi email sebelum dapat mengakses sistem.

### 3. Password Reset
Fitur reset password menggunakan token yang dikirim melalui email untuk menjaga keamanan akun.

---

## Teknologi yang Digunakan
- Laravel  
- PHP  
- SQLite  
- Mailtrap  

---

## Cara Menjalankan Project

### Install Dependency
```bash
composer install
npm install
```

### Setup Environment
```bash
cp .env.example .env
php artisan key:generate
```

### Setup Database
```bash
touch database/database.sqlite
php artisan migrate
```

### Jalankan Server
```bash
php artisan serve
```

---

## Konfigurasi Email (Mailtrap)

Tambahkan konfigurasi berikut pada file `.env`:

```env
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=YOUR_USERNAME
MAIL_PASSWORD=YOUR_PASSWORD
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="test@keamanansi.com"
MAIL_FROM_NAME="Keamanan SI"
```

---

## Alur Sistem

1. User melakukan registrasi  
2. Sistem mengirim email verifikasi  
3. User melakukan verifikasi email  
4. User dapat login ke sistem  
5. User dapat reset password jika lupa  

