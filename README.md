1. langkah pertama install Laravel Excel:
   composer require maatwebsite/excel
   
2. setelah itu siapkan folder Export didalam app.
   php artisan make:export UsersExport --model=xxxxx
   contoh:
   php artisan make:export UsersExport --model=MahasiswaExport

    ! ada beberapa baris kode yang perlu dipahami cek aja di folder app/Exports/MahasiswaExport.php. nanti ku tarok comment disana
   
3. tambahkan di routes web.php baca di komen file nanti ku tarok disana detail penjelasan bagian //Ini untuk export
   
4. ok rinrin cek lagi di folder view, disana ada tag <a> yang link nya sesuai di route web.php

"PERHATIKAN BAGIAN IMPORT" - takutnya kamu kelupaan
