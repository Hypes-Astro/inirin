1. langkah pertama install Laravel Excel:

   composer require maatwebsite/excel
   
3. setelah itu siapkan folder Export didalam app.

   php artisan make:export UsersExport --model=xxxxx

   contoh:

   php artisan make:export UsersExport --model=MahasiswaExport

    ! ada beberapa baris kode yang perlu dipahami cek aja di folder app/Exports/MahasiswaExport.php. nanti ku tarok comment disana
   
4. tambahkan di routes web.php baca di komen file nanti ku tarok disana detail penjelasan bagian //Ini untuk export
   
5. ok rinrin cek lagi di folder view, disana ada tag <a> yang link nya sesuai di route web.php

"PERHATIKAN BAGIAN IMPORT" - takutnya kamu kelupaan

---------------------------------------------------------------------------

Berikut adalah format yang dirapikan dan lebih jelas untuk README:

---

# Panduan Laravel Excel

## 1. Instalasi Laravel Excel
Untuk menginstall Laravel Excel, jalankan perintah berikut di terminal:

```bash
composer require maatwebsite/excel
```

## 2. Membuat Folder Export
Setelah instalasi, buat folder `Export` di dalam folder `app` menggunakan perintah berikut:

```bash
php artisan make:export UsersExport --model=xxxx
```

Contoh penggunaan:

```bash
php artisan make:export UsersExport --model=MahasiswaExport
```

## 3. Konfigurasi File Export
Setelah membuat file export, cek file yang terletak di `app/Exports/MahasiswaExport.php`. Di sana ada beberapa baris kode yang perlu dipahami. Kode akan disertai dengan komentar untuk mempermudah pemahaman. Pastikan untuk memperhatikan bagian komentar yang menjelaskan cara kerja ekspor data.

## 4. Menambahkan Route untuk Export
Tambahkan route yang sesuai di file `routes/web.php`. Detail penjelasan mengenai route akan diberikan di dalam file `MahasiswaExport.php` pada bagian dengan komentar `// Ini untuk export`.

Contoh route:

```php
Route::get('/export-mahasiswa', [MahasiswaController::class, 'export'])->name('export.mahasiswa');
```

## 5. Menambahkan Link di View
Cek file di dalam folder `resources/views`. Tambahkan tag `<a>` yang mengarahkan ke link route yang sesuai untuk melakukan ekspor data.

Contoh tag `<a>`:

```html
<a href="{{ route('export.mahasiswa') }}">Export Mahasiswa</a>
```

## **PERHATIKAN BAGIAN IMPORT**
Pastikan untuk tidak melewatkan bagian `import`, jika kamu juga ingin mengimplementasikan fitur impor data.

---

Dengan format ini, README kamu menjadi lebih rapi dan mudah dipahami.
