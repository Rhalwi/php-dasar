<?php
// Date
// untuk menampilkan tanggal dengan format tertentu
//  echo date("l, d-M-Y");


// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();

// untuk mengetahui 2 hari kedepannya
// $n = 60*60*24*2;
// echo date("l", time()+$n);

// untuk mengetahui 2 hari kebelakang
// $n = 60*60*24*2;
// echo date("l", time()-$n);



// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo mktime(0,0,0,5,17,2001);

// untuk tau harinya
echo date("l", mktime(0,0,0,5,17,2001));


// strtotime
// menggunakan string
// echo strtotime("17 may 2001");



// cari ini/ pelajari:
// String
// utility
?>