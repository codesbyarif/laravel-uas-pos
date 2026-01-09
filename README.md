### Instalasi Lokal

1. **Instal dependensi:**

```shell
composer install
npm install
npm run build
```

2. **Salin file .env**

```shell
cp .env.example .env
php artisan key:generate

```

3. **Perbarui file .env**

```shell
DB_CONNECTION=mysql
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
APP_URL=http://localhost

```

4. **Jalankan aplikasi:**

```shell
php artisan serve
```

Buka halaman beranda (home page), dan data demo akan ditambahkan secara otomatis.

**Username:** admin@admin.com

**Password:** pass@123
