<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kursus Menjahit ANNISA</title>

    <link href="{{ asset('css/output.css') }}" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>

<body class="bg-gradient-to-br from-purple-50 via-pink-50 to-white font-[Poppins] overflow-x-hidden">

<!-- Background Decoration -->

<div class="fixed top-0 left-0 w-96 h-96 bg-pink-300 rounded-full blur-[150px] opacity-20 -z-10"></div>

<div class="fixed bottom-0 right-0 w-96 h-96 bg-purple-300 rounded-full blur-[150px] opacity-20 -z-10"></div>

<!-- ================= NAVBAR ================= -->

<nav class="fixed top-0 left-0 w-full bg-white/80 backdrop-blur-xl shadow-sm z-50">

<div class="max-w-7xl mx-auto flex justify-between items-center px-8 py-5">

<a href="#" class="flex items-center gap-4">

<div class="w-14 h-14 rounded-full bg-gradient-to-r from-purple-700 to-pink-500 flex items-center justify-center text-white text-2xl font-bold">

A

</div>

<div>

<h1 class="text-2xl font-bold text-purple-700">

ANNISA

</h1>

<p class="text-sm text-pink-500">

Kursus Menjahit

</p>

</div>

</a>

<ul class="hidden lg:flex gap-10 font-semibold text-gray-700">

<li><a href="#" class="hover:text-purple-700">Home</a></li>

<li><a href="#about" class="hover:text-purple-700">Tentang</a></li>

<li><a href="#kelas" class="hover:text-purple-700">Program</a></li>

<li><a href="#gallery" class="hover:text-purple-700">Galeri</a></li>

<li><a href="#contact" class="hover:text-purple-700">Kontak</a></li>

</ul>

<a href="#contact"
class="hidden lg:block bg-gradient-to-r from-purple-700 to-pink-500 text-white px-7 py-3 rounded-full font-semibold hover:scale-105 duration-300">

Daftar Sekarang

</a>

</div>

</nav>

<!-- ================= HERO ================= -->

<section class="min-h-screen flex items-center relative overflow-hidden bg-gradient-to-br from-sky-100 via-blue-50 to-indigo-100">  
  <!-- Background Glow -->
    <div class="absolute -top-24 -left-24 w-[450px] h-[450px] bg-pink-300 rounded-full blur-[180px] opacity-30 animate-pulse"></div>

    <div class="absolute -bottom-20 -right-20 w-[450px] h-[450px] bg-purple-300 rounded-full blur-[180px] opacity-30 animate-pulse"></div>

    <!-- Hiasan -->
    <div class="absolute top-32 right-40 w-8 h-8 rounded-full bg-pink-400 opacity-60"></div>

    <div class="absolute bottom-32 left-32 w-5 h-5 rounded-full bg-purple-500 opacity-60"></div>

    <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-10 items-center px-10 pt-32 min-h-screen relative z-10">
        <!-- TEXT -->

        <div>

            <span class="inline-block px-6 py-3 rounded-full bg-white shadow-lg text-pink-600 font-semibold">
                ✨ Tempat Belajar Menjahit Profesional
            </span>

            <h1 class="mt-8 text-7xl lg:text-8xl font-extrabold leading-tight">

                <span class="text-purple-700">
                    Kursus
                </span>

                <br>

                <span class="bg-gradient-to-r from-pink-500 to-purple-700 bg-clip-text text-transparent">
                    Menjahit
                </span>

                <br>

                <span class="text-gray-800">
                    ANNISA
                </span>

            </h1>

            <p class="mt-8 text-xl leading-9 text-gray-600 max-w-2xl">

                Belajar menjahit dari tingkat dasar hingga profesional bersama instruktur berpengalaman.
                Kuasai teknik membuat pola, menjahit pakaian wanita, pria, anak-anak, kebaya, gamis, hingga fashion design.

            </p>

            <div class="mt-10 flex flex-wrap gap-5">

                <a href="#kelas"
                    class="px-9 py-4 rounded-full bg-gradient-to-r from-purple-700 to-pink-500 text-white font-semibold shadow-xl hover:scale-110 hover:shadow-2xl transition-all duration-500">

                    Lihat Program

                </a>

                <a href="#contact"
                    class="px-9 py-4 rounded-full bg-white text-purple-700 border-2 border-purple-200 font-semibold shadow-lg hover:bg-purple-50 hover:scale-105 transition-all duration-500">

                    Daftar Sekarang

                </a>

            </div>
            <div class="grid grid-cols-3 gap-8 mt-12">

    <div>

        <h3 class="text-4xl font-extrabold text-purple-700">
            500+
        </h3>

        <p class="mt-2 text-gray-500">
            Alumni
        </p>

    </div>

    <div>

        <h3 class="text-4xl font-extrabold text-pink-500">
            20+
        </h3>

        <p class="mt-2 text-gray-500">
            Program
        </p>

    </div>

    <div>

        <h3 class="text-4xl font-extrabold text-purple-700">
            100%
        </h3>

        <p class="mt-2 text-gray-500">
            Praktik
        </p>

    </div>

</div>

        <!-- FOTO -->

        <div class="flex justify-center">

            <div class="relative">

                <!-- Glow -->
                <div class="absolute inset-0 rounded-[45px] bg-gradient-to-r from-pink-400 to-purple-500 blur-3xl opacity-30 scale-105"></div>

                <!-- Frame -->
                <div class="relative p-3 bg-white rounded-[45px] shadow-[0_30px_80px_rgba(0,0,0,.20)]">

                <img
                    src="{{ asset('assets/photo/nisa.jpg') }}"
                    alt="ANNISA"
                    class="w-[470px] h-[620px] object-cover rounded-[35px] shadow-2xl hover:scale-105 hover:rotate-1 transition-all duration-700">

                </div>

                <!-- Badge -->
                <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl shadow-xl px-6 py-4">

                    <h3 class="text-3xl font-bold text-purple-700">
                        500+
                    </h3>

                    <p class="text-gray-500 text-sm">
                        Alumni
                    </p>

                </div>

                <!-- Badge -->
                 
                <div class="absolute top-8 -right-8 bg-white rounded-2xl shadow-xl px-6 py-4">

                    <h3 class="text-3xl font-bold text-pink-500">
                        15+
                    </h3>

                    <p class="text-gray-500 text-sm">
                        Tahun Pengalaman
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= ABOUT ================= -->

<section id="about" class="py-24 bg-gradient-to-b from-blue-50 to-sky-100">

<div class="max-w-7xl mx-auto px-8 grid lg:grid-cols-2 gap-16 items-center">

<div class="flex justify-center">

<div class="bg-gradient-to-br from-purple-200 to-pink-200 p-3 rounded-[40px] shadow-2xl">

<img
src="{{ asset('assets/photo/nisa1.png') }}"
alt="Tentang ANNISA"
class="w-[450px] rounded-[35px]">

</div>

</div>

<div>

<span class="px-5 py-2 rounded-full bg-pink-100 text-pink-600 font-semibold">

Tentang Kami

</span>

<h2 class="mt-6 text-5xl font-bold text-purple-700">

Belajar Menjahit Bersama ANNISA

</h2>

<p class="mt-8 text-lg leading-9 text-gray-600">

ANNISA adalah tempat kursus menjahit yang membantu pemula maupun
yang ingin menjadi penjahit profesional.

Materi diajarkan mulai dari dasar hingga mahir dengan praktik
langsung bersama instruktur berpengalaman.

</p>

<div class="grid grid-cols-2 gap-6 mt-10">

<div class="bg-purple-50 rounded-3xl p-6 shadow">

<div class="text-4xl mb-4">

🧵

</div>

<h3 class="font-bold text-xl">

Belajar Dasar

</h3>

<p class="text-gray-500 mt-3">

Mengenal mesin jahit,
alat jahit,
dan teknik dasar menjahit.

</p>

</div>

<div class="bg-pink-50 rounded-3xl p-6 shadow">

<div class="text-4xl mb-4">

👗

</div>

<h3 class="font-bold text-xl">

Membuat Busana

</h3>

<p class="text-gray-500 mt-3">

Belajar membuat rok,
gamis,
blouse,
hingga kebaya.

</p>

</div>

<div class="bg-purple-50 rounded-3xl p-6 shadow">

<div class="text-4xl mb-4">

📐

</div>

<h3 class="font-bold text-xl">

Membuat Pola

</h3>

<p class="text-gray-500 mt-3">

Belajar membuat pola pakaian dari nol.

</p>

</div>

<div class="bg-pink-50 rounded-3xl p-6 shadow">

<div class="text-4xl mb-4">

🎓

</div>

<h3 class="font-bold text-xl">

Sertifikat

</h3>

<p class="text-gray-500 mt-3">

Mendapatkan sertifikat setelah menyelesaikan pelatihan.

</p>

</div>

</div>

</div>

</div>

</section>

<!-- ================= PROGRAM ================= -->

<section id="kelas" class="py-24 bg-gradient-to-b from-purple-50 via-pink-50 to-white">

    <div class="max-w-7xl mx-auto px-8">

        <div class="text-center">

            <span class="px-5 py-2 rounded-full bg-white shadow-lg text-pink-600 font-semibold">
                Program Kursus
            </span>

            <h2 class="mt-6 text-5xl font-bold text-purple-700">
                Pilih Kelas Favoritmu
            </h2>

            <p class="mt-6 text-gray-600 text-lg">
                Belajar menjahit bersama instruktur berpengalaman dengan metode praktik langsung.
            </p>

        </div>

        <div class="grid lg:grid-cols-3 gap-10 mt-16">

            <!-- Card 1 -->
            <div class="bg-white/80 backdrop-blur-lg rounded-[35px] p-10 border border-pink-100 shadow-2xl hover:-translate-y-3 hover:shadow-pink-300 transition-all duration-500">

                <div class="w-20 h-20 mx-auto rounded-full bg-purple-100 flex items-center justify-center text-5xl">
                    🪡
                </div>

                <h3 class="text-2xl font-bold text-center text-purple-700 mt-8">
                    Menjahit Dasar
                </h3>

                <p class="mt-5 text-center text-gray-600 leading-8">
                    Belajar mengenal mesin jahit, alat jahit, teknik dasar, hingga latihan membuat pola sederhana.
                </p>

                <div class="mt-8 flex justify-center">
                    <span class="px-5 py-2 rounded-full bg-purple-100 text-purple-700 font-semibold">
                        Cocok untuk Pemula
                    </span>
                </div>

            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-[35px] p-10 border-2 border-pink-300 shadow-2xl hover:-translate-y-3 hover:shadow-pink-400 transition-all duration-500">

                <div class="w-20 h-20 mx-auto rounded-full bg-pink-100 flex items-center justify-center text-5xl">
                    👗
                </div>

                <h3 class="text-2xl font-bold text-center text-pink-600 mt-8">
                    Fashion Wanita
                </h3>

                <p class="mt-5 text-center text-gray-600 leading-8">
                    Belajar membuat blouse, dress, rok, gamis hingga kebaya modern dengan teknik profesional.
                </p>

                <div class="mt-8 flex justify-center">
                    <span class="px-5 py-2 rounded-full bg-pink-100 text-pink-600 font-semibold">
                        ⭐ Kelas Favorit
                    </span>
                </div>

            </div>

            <!-- Card 3 -->
            <div class="bg-white/80 backdrop-blur-lg rounded-[35px] p-10 border border-purple-100 shadow-2xl hover:-translate-y-3 hover:shadow-purple-300 transition-all duration-500">

                <div class="w-20 h-20 mx-auto rounded-full bg-purple-100 flex items-center justify-center text-5xl">
                    🧥
                </div>

                <h3 class="text-2xl font-bold text-center text-purple-700 mt-8">
                    Fashion Pria
                </h3>

                <p class="mt-5 text-center text-gray-600 leading-8">
                    Belajar membuat kemeja, celana, jas, serta pakaian pria dengan hasil rapi dan berkualitas tinggi.
                </p>

                <div class="mt-8 flex justify-center">
                    <span class="px-5 py-2 rounded-full bg-purple-100 text-purple-700 font-semibold">
                        Tingkat Lanjut
                    </span>
                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= GALERI ================= -->

<section id="gallery" class="py-28 bg-gradient-to-b from-sky-50 via-blue-100 to-indigo-100">

    <div class="max-w-7xl mx-auto px-8">

        <div class="text-center">

            <span class="inline-block px-6 py-2 rounded-full bg-pink-100 text-pink-600 font-semibold shadow">
                ✨ Galeri Hasil Karya
            </span>

            <h2 class="mt-6 text-5xl font-extrabold text-purple-700">
                Hasil Jahitan Peserta ANNISA
            </h2>

            <p class="mt-5 text-lg text-gray-600 max-w-3xl mx-auto leading-8">
                Dokumentasi hasil belajar peserta Kursus Menjahit ANNISA.
                Semua karya dibuat melalui pembelajaran praktik secara langsung bersama instruktur profesional.
            </p>

        </div>

        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8 mt-20">

            <!-- FOTO 1 -->
            <div class="group overflow-hidden rounded-[35px] shadow-2xl bg-white">

                <img
                src="{{ asset('assets/photo/kebaya-brokat-pink.jpg') }}"
                class="w-full h-[350px] object-cover group-hover:scale-110 duration-700">

                <div class="p-6">

                    <h3 class="font-bold text-xl text-purple-700">
                        Kebaya Modern
                    </h3>

                    <p class="text-gray-500 mt-2">
                        Hasil karya peserta tingkat lanjutan.
                    </p>

                </div>

            </div>

            <!-- FOTO 2 -->
            <div class="group overflow-hidden rounded-[35px] shadow-2xl bg-white">

                <img
                src="{{ asset('assets/photo/nisa.jpg') }}"
                class="w-full h-[350px] object-cover group-hover:scale-110 duration-700">

                <div class="p-6">

                    <h3 class="font-bold text-xl text-pink-600">
                        Instruktur ANNISA
                    </h3>

                    <p class="text-gray-500 mt-2">
                        Membimbing peserta dari dasar hingga mahir.
                    </p>

                </div>

            </div>

            <!-- FOTO 3 -->
            <div class="group overflow-hidden rounded-[35px] shadow-2xl bg-white">

                <img
                src="{{ asset('assets/photo/dres fashion.png') }}"
                class="w-full h-[350px] object-cover group-hover:scale-110 duration-700">

                <div class="p-6">

                    <h3 class="font-bold text-xl text-purple-700">
                        Dress Fashion
                    </h3>

                    <p class="text-gray-500 mt-2">
                        Hasil praktik kelas fashion wanita.
                    </p>

                </div>

            </div>

            <!-- FOTO 4 -->
            <div class="group overflow-hidden rounded-[35px] shadow-2xl bg-white">

                <img
                src="{{ asset('assets/photo/seragam kerja.png') }}"
                class="w-full h-[350px] object-cover group-hover:scale-110 duration-700">

                <div class="p-6">

                    <h3 class="font-bold text-xl text-pink-600">
                        Seragam Kerja
                    </h3>

                    <p class="text-gray-500 mt-2">
                        Proyek akhir peserta kursus profesional.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<section id="pricing" class="py-28 bg-white">

    <div class="max-w-7xl mx-auto px-8">

        <div class="text-center">

            <span class="inline-block px-6 py-2 rounded-full bg-purple-100 text-purple-700 font-semibold shadow">
                💜 Paket Kursus
            </span>

            <h2 class="mt-6 text-5xl font-extrabold text-purple-700">
                Pilih Paket Belajar
            </h2>

            <p class="mt-5 text-lg text-gray-600 max-w-2xl mx-auto">
                Kami menyediakan beberapa pilihan paket belajar sesuai kebutuhan peserta.
            </p>

        </div>

        <div class="grid lg:grid-cols-3 gap-10 mt-20">

            <!-- BASIC -->
            <div class="bg-white rounded-[35px] shadow-2xl border border-pink-100 p-10 hover:-translate-y-3 duration-500">

                <div class="text-center">

                    <div class="text-6xl mb-6">🪡</div>

                    <h3 class="text-3xl font-bold text-purple-700">
                        Basic
                    </h3>

                    <p class="mt-3 text-gray-500">
                        Untuk Pemula
                    </p>

                    <h2 class="mt-8 text-5xl font-extrabold text-pink-500">
                        Rp500K
                    </h2>

                </div>

                <ul class="mt-10 space-y-4 text-gray-600">

                    <li>✔ Pengenalan Mesin Jahit</li>
                    <li>✔ Teknik Dasar Menjahit</li>
                    <li>✔ Membuat Pola Dasar</li>
                    <li>✔ Modul Pembelajaran</li>

                </ul>

                <button class="mt-10 w-full py-4 rounded-full bg-purple-700 text-white font-bold hover:bg-purple-800 duration-300">
                    Daftar Sekarang
                </button>

            </div>

            <!-- PREMIUM -->
            <div class="bg-gradient-to-b from-sky-600 via-indigo-600 to-purple-600 rounded-[35px] shadow-2xl p-10 text-white scale-105">

                <div class="text-center">

                    <span class="bg-white text-pink-600 px-4 py-2 rounded-full font-bold">
                        PALING FAVORIT
                    </span>

                    <div class="text-6xl mt-8">👗</div>

                    <h3 class="text-3xl font-bold mt-6">
                        Premium
                    </h3>

                    <p class="mt-3 text-purple-100">
                        Paling Banyak Dipilih
                    </p>

                    <h2 class="mt-8 text-5xl font-extrabold">
                        Rp1.000K
                    </h2>

                </div>

                <ul class="mt-10 space-y-4">

                    <li>✔ Semua Materi Basic</li>
                    <li>✔ Fashion Wanita</li>
                    <li>✔ Membuat Dress & Gamis</li>
                    <li>✔ Sertifikat</li>
                    <li>✔ Konsultasi Gratis</li>

                </ul>

                <button class="mt-10 w-full py-4 rounded-full bg-white text-pink-600 font-bold hover:scale-105 duration-300">
                    Pilih Paket
                </button>

            </div>

            <!-- PROFESSIONAL -->
            <div class="bg-white rounded-[35px] shadow-2xl border border-purple-100 p-10 hover:-translate-y-3 duration-500">

                <div class="text-center">

                    <div class="text-6xl mb-6">👑</div>

                    <h3 class="text-3xl font-bold text-purple-700">
                        Professional
                    </h3>

                    <p class="mt-3 text-gray-500">
                        Siap Membuka Usaha
                    </p>

                    <h2 class="mt-8 text-5xl font-extrabold text-pink-500">
                        Rp2.000K
                    </h2>

                </div>

                <ul class="mt-10 space-y-4 text-gray-600">

                    <li>✔ Semua Materi Premium</li>
                    <li>✔ Fashion Pria & Wanita</li>
                    <li>✔ Kebaya & Jas</li>
                    <li>✔ Business Class</li>
                    <li>✔ Sertifikat Resmi</li>
                    <li>✔ Pendampingan Usaha</li>

                </ul>

                <button class="mt-10 w-full py-4 rounded-full bg-pink-500 text-white font-bold hover:bg-pink-600 duration-300">
                    Daftar Sekarang
                </button>

            </div>

        </div>

    </div>

</section>

<!-- ================= WHY CHOOSE US ================= -->

<section class="py-24 bg-gradient-to-r from-purple-700 to-pink-500 text-white">

<div class="max-w-7xl mx-auto px-8">

<div class="text-center">

<h2 class="text-5xl font-bold">

Kenapa Memilih ANNISA?

</h2>

<p class="mt-6 text-purple-100">

Kami memberikan pengalaman belajar menjahit yang nyaman,
modern, dan mudah dipahami.

</p>

</div>

<div class="grid lg:grid-cols-4 gap-8 mt-16">

<div class="bg-white/10 rounded-[30px] p-8 backdrop-blur">

<div class="text-5xl">

👩‍🏫

</div>

<h3 class="mt-6 text-2xl font-bold">

Instruktur Ahli

</h3>

<p class="mt-4 text-purple-100">

Dipandu oleh instruktur yang berpengalaman di bidang tata busana.

</p>

</div>

<div class="bg-white/10 rounded-[30px] p-8 backdrop-blur">

<div class="text-5xl">

🧵

</div>

<h3 class="mt-6 text-2xl font-bold">

Praktik Langsung

</h3>

<p class="mt-4 text-purple-100">

Belajar dengan praktik sehingga lebih cepat memahami materi.

</p>

</div>

<div class="bg-white/10 rounded-[30px] p-8 backdrop-blur">

<div class="text-5xl">

📜

</div>

<h3 class="mt-6 text-2xl font-bold">

Sertifikat

</h3>

<p class="mt-4 text-purple-100">

Peserta mendapatkan sertifikat setelah menyelesaikan pelatihan.

</p>

</div>

<div class="bg-white/10 rounded-[30px] p-8 backdrop-blur">

<div class="text-5xl">

💼

</div>

<h3 class="mt-6 text-2xl font-bold">

Siap Usaha

</h3>

<p class="mt-4 text-purple-100">

Lulusan siap membuka jasa menjahit maupun butik sendiri.

</p>

</div>

</div>

</div>

</section>

<!-- ================= STATISTIK ================= -->

<section class="py-24 bg-gradient-to-b from-blue-50 to-sky-100">

<div class="max-w-7xl mx-auto px-8">

<div class="grid lg:grid-cols-4 gap-10 text-center">

<div>

<h2 class="text-6xl font-bold text-purple-700">

500+

</h2>

<p class="mt-4 text-gray-500">

Alumni

</p>

</div>

<div>

<h2 class="text-6xl font-bold text-pink-500">

20+

</h2>

<p class="mt-4 text-gray-500">

Program

</p>

</div>

<div>

<h2 class="text-6xl font-bold text-purple-700">

15+

</h2>

<p class="mt-4 text-gray-500">

Tahun Pengalaman

</p>

</div>

<div>

<h2 class="text-6xl font-bold text-pink-500">

100%

</h2>

<p class="mt-4 text-gray-500">

Praktik

</p>

</div>

</div>

</div>

</section>
<!-- ================= TESTIMONI ================= -->

<section class="py-24 bg-gradient-to-b from-blue-50 via-indigo-50 to-purple-100">

<div class="max-w-7xl mx-auto px-8">

<div class="text-center">

<span class="px-5 py-2 rounded-full bg-white shadow text-pink-600 font-semibold">

Testimoni

</span>

<h2 class="mt-6 text-5xl font-bold text-purple-700">

Apa Kata Alumni?

</h2>

<p class="mt-5 text-gray-600">

Peserta kami telah berhasil mengembangkan kemampuan menjahit hingga membuka usaha sendiri.

</p>

</div>

<div class="grid lg:grid-cols-3 gap-8 mt-16">

<div class="bg-white rounded-[30px] p-8 shadow-xl">

<div class="text-5xl mb-5">⭐⭐⭐⭐⭐</div>

<p class="text-gray-600">

"Saya awalnya tidak bisa menjahit sama sekali. Setelah belajar di ANNISA sekarang saya sudah menerima banyak pesanan jahitan."

</p>

<h3 class="mt-6 font-bold text-xl text-purple-700">

Siti Rahma

</h3>

</div>

<div class="bg-white rounded-[30px] p-8 shadow-xl">

<div class="text-5xl mb-5">⭐⭐⭐⭐⭐</div>

<p class="text-gray-600">

"Materinya sangat mudah dipahami dan instruktur sangat sabar membimbing."

</p>

<h3 class="mt-6 font-bold text-xl text-pink-600">

Nur Aisyah

</h3>

</div>

<div class="bg-white rounded-[30px] p-8 shadow-xl">

<div class="text-5xl mb-5">⭐⭐⭐⭐⭐</div>

<p class="text-gray-600">

"Sekarang saya sudah membuka usaha jahit sendiri dari rumah."

</p>

<h3 class="mt-6 font-bold text-xl text-purple-700">

Indah Putri

</h3>

</div>

</div>

</div>

</section>
<!-- ================= FAQ ================= -->

<section id="contact" class="py-24 bg-gradient-to-br from-blue-50 to-indigo-100">

<div class="max-w-5xl mx-auto px-8">

<div class="text-center">

<span class="inline-block px-6 py-2 rounded-full bg-purple-100 text-purple-700 font-semibold">
❓ FAQ
</span>

<h2 class="mt-6 text-5xl font-extrabold text-purple-700">
Pertanyaan yang Sering Diajukan
</h2>

<p class="mt-5 text-lg text-gray-600">
Berikut beberapa pertanyaan yang sering ditanyakan calon peserta.
</p>

</div>

<div class="mt-16 space-y-6">

<div class="bg-white rounded-3xl shadow-lg p-8">
<h3 class="text-2xl font-bold text-purple-700">
Apakah pemula bisa ikut?
</h3>

<p class="mt-4 text-gray-600 leading-8">
Tentu. Semua materi dimulai dari dasar sehingga cocok bagi peserta yang belum pernah menjahit.
</p>
</div>

<div class="bg-white rounded-3xl shadow-lg p-8">
<h3 class="text-2xl font-bold text-purple-700">
Apakah mendapatkan sertifikat?
</h3>

<p class="mt-4 text-gray-600 leading-8">
Ya. Peserta yang menyelesaikan pelatihan akan memperoleh sertifikat.
</p>
</div>

<div class="bg-white rounded-3xl shadow-lg p-8">
<h3 class="text-2xl font-bold text-purple-700">
Berapa lama masa belajar?
</h3>

<p class="mt-4 text-gray-600 leading-8">
Durasi belajar dapat dipilih mulai dari 1 bulan hingga 6 bulan sesuai paket yang diambil.
</p>
</div>

<div class="bg-white rounded-3xl shadow-lg p-8">
<h3 class="text-2xl font-bold text-purple-700">
Apakah bisa membuka usaha setelah lulus?
</h3>

<p class="mt-4 text-gray-600 leading-8">
Bisa. Kami juga memberikan pembelajaran mengenai cara memulai usaha jasa menjahit.
</p>
</div>

</div>

</div>

</section>
<!-- ================= PAKET KURSUS ================= -->

<section id="paket" class="py-28 bg-gradient-to-br from-sky-100 via-blue-50 to-indigo-100">

    <div class="max-w-7xl mx-auto px-8">

        <div class="text-center">

            <span class="inline-block px-6 py-2 rounded-full bg-white shadow text-pink-600 font-semibold">
                💜 Paket Kursus
            </span>

            <h2 class="mt-6 text-5xl font-extrabold text-purple-700">
                Pilih Paket Belajar
            </h2>

            <p class="mt-5 text-lg text-gray-600 max-w-3xl mx-auto leading-8">
                Kami menyediakan beberapa pilihan paket sesuai kebutuhan peserta,
                mulai dari pemula hingga kelas profesional.
            </p>

        </div>

        <div class="grid lg:grid-cols-3 gap-10 mt-20">

            <!-- Paket 1 -->
            <div class="bg-white rounded-[35px] shadow-2xl p-10 hover:-translate-y-3 duration-300">

                <div class="text-5xl mb-6">
                    🪡
                </div>

                <h3 class="text-3xl font-bold text-purple-700">
                    Paket Basic
                </h3>

                <p class="mt-4 text-gray-500">
                    Cocok untuk pemula yang ingin belajar menjahit dari nol.
                </p>

                <h2 class="mt-8 text-5xl font-extrabold text-pink-600">
                    Rp500K
                </h2>

                <p class="text-gray-500 mt-2">
                    / 1 Bulan
                </p>

                <ul class="mt-8 space-y-4 text-gray-600">
                    <li>✔ Mengenal Mesin Jahit</li>
                    <li>✔ Teknik Dasar Menjahit</li>
                    <li>✔ Membuat Pola Dasar</li>
                    <li>✔ Praktik Langsung</li>
                </ul>
                            </div>

            <!-- Paket 2 -->
            <div class="bg-gradient-to-br from-purple-700 to-pink-500 rounded-[35px] shadow-2xl p-10 text-white hover:-translate-y-3 duration-300 relative overflow-hidden">

                <div class="absolute top-5 right-5 bg-white text-pink-600 px-4 py-2 rounded-full text-sm font-bold">
                    Terfavorit
                </div>

                <div class="text-5xl mb-6">
                    👗
                </div>

                <h3 class="text-3xl font-bold">
                    Paket Premium
                </h3>

                <p class="mt-4 text-purple-100">
                    Belajar lengkap dari dasar hingga mampu membuat berbagai model pakaian.
                </p>

                <h2 class="mt-8 text-5xl font-extrabold">
                    Rp1.250K
                </h2>

                <p class="mt-2 text-purple-100">
                    / 3 Bulan
                </p>

                <ul class="mt-8 space-y-4">
                    <li>✔ Semua Materi Basic</li>
                    <li>✔ Membuat Dress & Gamis</li>
                    <li>✔ Membuat Kebaya</li>
                    <li>✔ Fashion Wanita</li>
                    <li>✔ Sertifikat</li>
                    <li>✔ Konsultasi Gratis</li>
                </ul>

                <a href="#contact"
                    class="mt-10 block text-center bg-white text-purple-700 font-bold py-4 rounded-full hover:scale-105 duration-300">
                    Daftar Sekarang
                </a>

            </div>

            <!-- Paket 3 -->
            <div class="bg-white rounded-[35px] shadow-2xl p-10 hover:-translate-y-3 duration-300">

                <div class="text-5xl mb-6">
                    👑
                </div>

                <h3 class="text-3xl font-bold text-purple-700">
                    Paket Profesional
                </h3>

                <p class="mt-4 text-gray-500">
                    Untuk peserta yang ingin membuka usaha butik atau jasa menjahit profesional.
                </p>

                <h2 class="mt-8 text-5xl font-extrabold text-pink-600">
                    Rp2.500K
                </h2>

                <p class="text-gray-500 mt-2">
                    / 6 Bulan
                </p>

                <ul class="mt-8 space-y-4 text-gray-600">
                    <li>✔ Semua Materi Premium</li>
                    <li>✔ Pola Profesional</li>
                    <li>✔ Jas & Seragam</li>
                    <li>✔ Business Coaching</li>
                    <li>✔ Sertifikat Profesional</li>
                    <li>✔ Pendampingan Usaha</li>
                </ul>

                <a href="#contact"
                    class="mt-10 block text-center bg-gradient-to-r from-purple-700 to-pink-500 text-white font-bold py-4 rounded-full hover:scale-105 duration-300">
                    Pilih Paket
                </a>

            </div>

                    </div>

    </div>

</section>

<!-- ================= TESTIMONI PREMIUM ================= -->

<section class="py-28 bg-gradient-to-br from-purple-700 via-purple-600 to-pink-500 text-white overflow-hidden relative">

    <div class="absolute -top-20 -left-20 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-20 -right-20 w-72 h-72 bg-pink-300/20 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-8 relative z-10">

        <div class="text-center">

            <span class="inline-block px-6 py-2 rounded-full bg-white/20 backdrop-blur text-white font-semibold">
                ❤️ Testimoni Alumni
            </span>

            <h2 class="mt-6 text-5xl font-extrabold">
                Mereka Sudah Berhasil
            </h2>

            <p class="mt-5 text-purple-100 text-lg max-w-3xl mx-auto">
                Banyak alumni ANNISA yang kini mampu menerima jasa jahit bahkan membuka usaha sendiri.
            </p>

        </div>

        <div class="grid lg:grid-cols-3 gap-10 mt-20">

            <div class="bg-white text-gray-700 rounded-[35px] p-8 shadow-2xl">

                <div class="text-4xl mb-4">
                    ⭐⭐⭐⭐⭐
                </div>

                <p class="leading-8">
                    "Awalnya saya tidak bisa menjahit sama sekali.
                    Setelah mengikuti Kursus Menjahit ANNISA,
                    sekarang saya sudah menerima pesanan jahitan dari rumah."
                </p>

                <div class="mt-8">

                    <h4 class="font-bold text-xl text-purple-700">
                        Siti Rahma
                    </h4>

                    <p class="text-gray-500">
                        Alumni 2025
                    </p>

                </div>

            </div>

            <div class="bg-white text-gray-700 rounded-[35px] p-8 shadow-2xl">

                <div class="text-4xl mb-4">
                    ⭐⭐⭐⭐⭐
                </div>

                <p class="leading-8">
                    "Instrukturnya sabar, materinya lengkap,
                    praktiknya sangat banyak sehingga cepat paham."
                </p>

                <div class="mt-8">

                    <h4 class="font-bold text-xl text-pink-600">
                        Nur Aisyah
                    </h4>

                    <p class="text-gray-500">
                        Alumni 2024
                    </p>

                </div>

            </div>

            <div class="bg-white text-gray-700 rounded-[35px] p-8 shadow-2xl">

                <div class="text-4xl mb-4">
                    ⭐⭐⭐⭐⭐
                </div>

                <p class="leading-8">
                    "Sekarang saya sudah memiliki butik kecil sendiri.
                    Terima kasih ANNISA atas ilmu yang diberikan."
                </p>

                <div class="mt-8">

                    <h4 class="font-bold text-xl text-purple-700">
                        Indah Putri
                    </h4>

                    <p class="text-gray-500">
                        Alumni 2023
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- ================= CONTACT ================= -->

<section id="contact" class="py-28 bg-gradient-to-b from-white via-pink-50 to-purple-50">

    <div class="max-w-7xl mx-auto px-8">

        <div class="text-center">

            <span class="inline-block px-6 py-2 rounded-full bg-pink-100 text-pink-600 font-semibold shadow">
                📞 Hubungi Kami
            </span>

            <h2 class="mt-6 text-5xl font-extrabold text-purple-700">
                Daftar Kursus Sekarang
            </h2>

            <p class="mt-5 text-lg text-gray-600 max-w-3xl mx-auto">
                Kami siap membantu Anda menjadi penjahit profesional.
                Silakan hubungi kami melalui formulir berikut.
            </p>

        </div>

        <div class="grid lg:grid-cols-2 gap-14 mt-20">

            <!-- KIRI -->

            <div class="space-y-8">

                <div class="bg-white rounded-[35px] shadow-xl p-8">

                    <h3 class="text-3xl font-bold text-purple-700">
                        Informasi Kursus
                    </h3>

                    <div class="mt-8 space-y-6">

                        <div>
                            <p class="text-gray-400">📍 Alamat</p>
                            <h4 class="font-bold text-xl">
                                Pekanbaru, Riau
                            </h4>
                        </div>

                        <div>
                            <p class="text-gray-400">📞 WhatsApp</p>
                            <h4 class="font-bold text-xl">
                                0812-3456-7890
                            </h4>
                        </div>

                        <div>
                            <p class="text-gray-400">📧 Email</p>
                            <h4 class="font-bold text-xl">
                                annisamenjahit@gmail.com
                            </h4>
                        </div>

                        <div>
                            <p class="text-gray-400">🕒 Jam Operasional</p>
                            <h4 class="font-bold text-xl">
                                Senin - Sabtu
                                <br>
                                08.00 - 17.00 WIB
                            </h4>
                        </div>

                    </div>

                </div>

            </div>

            <!-- KANAN -->

            <div class="bg-white rounded-[40px] shadow-2xl p-10">

                <h3 class="text-3xl font-bold text-purple-700 mb-8">
                    Formulir Pendaftaran
                </h3>

                <form>

                    <input
                        type="text"
                        placeholder="Nama Lengkap"
                        class="w-full mb-5 p-5 rounded-2xl border border-pink-200 focus:border-purple-500 outline-none">

                    <input
                        type="text"
                        placeholder="Nomor WhatsApp"
                        class="w-full mb-5 p-5 rounded-2xl border border-pink-200 focus:border-purple-500 outline-none">

                    <input
                        type="email"
                        placeholder="Email"
                        class="w-full mb-5 p-5 rounded-2xl border border-pink-200 focus:border-purple-500 outline-none">

                    <textarea
                        rows="5"
                        placeholder="Pesan"
                        class="w-full p-5 rounded-2xl border border-pink-200 focus:border-purple-500 outline-none resize-none"></textarea>

                    <button
                        class="mt-8 w-full py-5 rounded-full bg-gradient-to-r from-purple-700 to-pink-500 text-white font-bold text-lg hover:scale-105 duration-300">

                        Daftar Sekarang

                    </button>

                </form>

            </div>

        </div>

    </div>

</section>
<!-- ================= FOOTER ================= -->

<footer class="bg-gradient-to-r from-purple-900 via-purple-800 to-pink-700 text-white relative overflow-hidden">

    <!-- Background Blur -->
    <div class="absolute -top-20 -left-20 w-80 h-80 bg-pink-400 opacity-20 blur-[150px] rounded-full"></div>

    <div class="absolute -bottom-20 -right-20 w-80 h-80 bg-purple-300 opacity-20 blur-[150px] rounded-full"></div>

    <div class="max-w-7xl mx-auto px-8 py-24 relative z-10">

        <div class="grid lg:grid-cols-4 gap-14">

            <!-- Logo -->
            <div>

                <h2 class="text-4xl font-extrabold">
                    ANNISA
                </h2>

                <p class="mt-6 leading-8 text-purple-100">

                    Kursus Menjahit ANNISA merupakan tempat belajar
                    menjahit dari tingkat dasar hingga profesional
                    dengan metode praktik yang mudah dipahami.

                </p>

            </div>

            <!-- Menu -->

            <div>

                <h3 class="text-2xl font-bold">
                    Menu
                </h3>

                <ul class="space-y-4 mt-8 text-purple-100">

                    <li><a href="#">Home</a></li>

                    <li><a href="#about">Tentang</a></li>

                    <li><a href="#kelas">Program</a></li>

                    <li><a href="#gallery">Galeri</a></li>

                    <li><a href="#contact">Kontak</a></li>

                </ul>

            </div>

            <!-- Program -->

            <div>

                <h3 class="text-2xl font-bold">
                    Program
                </h3>

                <ul class="space-y-4 mt-8 text-purple-100">

                    <li>Menjahit Dasar</li>

                    <li>Fashion Wanita</li>

                    <li>Fashion Pria</li>

                    <li>Membuat Pola</li>

                    <li>Kelas Profesional</li>

                </ul>

            </div>

            <!-- Kontak -->

            <div>

                <h3 class="text-2xl font-bold">
                    Hubungi Kami
                </h3>

                <div class="space-y-5 mt-8 text-purple-100">

                    <p>📍 Pekanbaru, Riau</p>

                    <p>📞 0812-3456-7890</p>

                    <p>✉ annisamenjahit@gmail.com</p>

                </div>

                <div class="flex gap-4 mt-8">

                    <div class="w-12 h-12 rounded-full bg-white/20 flex justify-center items-center text-xl hover:bg-white/30 duration-300">
                        📘
                    </div>

                    <div class="w-12 h-12 rounded-full bg-white/20 flex justify-center items-center text-xl hover:bg-white/30 duration-300">
                        📷
                    </div>

                    <div class="w-12 h-12 rounded-full bg-white/20 flex justify-center items-center text-xl hover:bg-white/30 duration-300">
                        💬
                    </div>

                </div>

            </div>

        </div>

        <div class="border-t border-white/20 mt-20 pt-8 text-center text-purple-100">

            © 2026 Kursus Menjahit ANNISA • Dibuat menggunakan Laravel & Tailwind CSS

        </div>

    </div>

</footer>

<!-- BACK TO TOP -->

<button
id="scrollTop"
onclick="window.scrollTo({top:0,behavior:'smooth'})"
class="fixed bottom-8 right-8 w-14 h-14 rounded-full bg-gradient-to-r from-purple-600 to-pink-500 text-white shadow-xl hidden">

↑

</button>

<!-- SCRIPT -->

<script>

const topButton=document.getElementById("scrollTop");

window.addEventListener("scroll",()=>{

if(window.scrollY>300){

topButton.classList.remove("hidden");

}else{

topButton.classList.add("hidden");

}

});

const observer=new IntersectionObserver((entries)=>{

entries.forEach((entry)=>{

if(entry.isIntersecting){

entry.target.classList.remove("opacity-0","translate-y-10");

entry.target.classList.add("opacity-100","translate-y-0");

}

});

});

document.querySelectorAll("section").forEach((section)=>{

section.classList.add(

"opacity-0",

"translate-y-10",

"transition",

"duration-700"

);

observer.observe(section);

});

</script>

</body>

</html>