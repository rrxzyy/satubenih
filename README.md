### 1. Buat Database

### 2. Setting .env

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=satubenih_db
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Tambah Composer

```
composer install
```

### 4. Migrations

```
php artisan migrate
```

### 5. Generate Key Env

```
php artisan key:generate
```

### Akun Awal Admin

```
email       : admin@satubenih.com
password    : satubenih2023
```
