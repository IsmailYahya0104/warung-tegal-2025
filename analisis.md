## Tujuan Tema Pembuatan Warung Tegal
Untuk menampilkan visualisasi jumlah pesanan (order) berdasarkan statusnya seperti pending, in_progress, atau completed, sehingga pemilik atau admin warteg dapat:

>Memantau jumlah pesanan aktif dan selesai secara real-time.

>Mengetahui performa pelayanan.

>Mendeteksi hambatan seperti pesanan yang terlalu lama diproses.

## Manfaat Tema Warung Tegal
>Memberikan insight cepat tentang distribusi dan status pesanan pelanggan.

>Membantu dalam monitoring harian operasional warteg.

>Memudahkan deteksi bottleneck, misalnya jika banyak pesanan tertahan terlalu lama di dapur (in_progress).

## Implementasi Singkat
>Menggunakan Filament ChartWidget (misalnya OrderStatusChart).

>Query ke tabel orders, group berdasarkan kolom status, dan hitung jumlahnya.

>Menampilkan hasil visualisasi sebagai bar chart di halaman dashboard admin.

## Keterkaitan Data
Data diperoleh secara langsung dan real-time dari relasi antar entitas:
Customer ➝ Order ➝ Menu ➝ Category



