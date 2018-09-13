## REST API UNTUK REACT

Sebelum running project ini, langkah-langkah yang harus dilakukan:
- setelah melakukan git clone/ download project ini, running `composer install`
- buat file bernama `.env`
- copy isi file `.env.example` ke dalam `.env`
- lakukan command `php artisan migrate` untuk migrasi database
- buat folder dengan nama `images` di dalam folder public
- kemudian running project dengan cara ketik `php -S {ip_address}:8000 -t public`
- untuk register bisa akses ke url `/register`
- untuk login bisa akses ke url `/login`
- untuk membuat kamar bisa akses ke url `/kamar-baru`
- untuk mengetahui semua kamar bisa akses ke url `/list-kamar`
- untuk mengetahui detail kamar bisa akses ke url `/detail-kamar/{id}`