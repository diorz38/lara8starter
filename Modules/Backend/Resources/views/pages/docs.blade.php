@extends('backend::layouts.master')

@push('page-script')

@endpush

@section('content')

<div class="content-wrapper">
        <div class="col-12 col-md-10 offset-md-1">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="font-weight-bold mb-0">Lara8starter</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 grid-margin" id="doc-intro">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-4 mt-4">Readme</h3>
                        <p>Lara8starter is Laravel Admin Starter that made for make quick start laravel web application.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="font-weight-bold mb-0">Template RoyalUI Dashboard</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 grid-margin" id="doc-intro">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-4 mt-4">Intro</h3>
                        <p>RoyalUI Admin adalah template HTML responsif yang didasarkan pada kerangka CSS Bootstrap 4 dan dibangun dengan Sass. Kompiler Sass membuatnya lebih mudah untuk dikodekan dan disesuaikan. Jika Anda tidak terbiasa dengan Bootstrap atau Sass, kunjungi situs web mereka dan baca dokumentasi. Semua komponen Bootstrap telah dimodifikasi agar sesuai dengan gaya RoyalUI Admin dan memberikan tampilan yang konsisten di seluruh template.</p>
                        <p>Sebelum Anda mulai bekerja dengan template, kami sarankan Anda membuka halaman-halaman yang dibundel dengan tema. Sebagian besar halaman contoh template berisi tip cepat tentang cara membuat atau menggunakan komponen yang dapat sangat membantu saat Anda perlu membuat sesuatu dengan cepat.</p>
                        <p class="d-inline"><strong>Catatan</strong>: Kami mencoba sebaik mungkin untuk mendokumentasikan cara menggunakan template. Jika Anda merasa ada yang kurang dari dokumentasi, jangan ragu untuk memberi tahu kami. Jika Anda memiliki pertanyaan atau masalah tentang tema ini, silakan kirim email kepada kami di <a class="d-inline text-info" href="mailto:info@bootstrapdash.com">info@bootstrapdash.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-12 grid-margin" id="doc-started">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-4">Getting started</h3>
                        <p>Anda dapat langsung menggunakan versi template yang telah dikompilasi dan siap digunakan. Tetapi jika Anda berencana untuk menyesuaikan template secara ekstensif, template memungkinkan Anda untuk melakukannya.

                            Dalam file <b>RoyalUI-Free-Bootstrap-Admin-Template-master.zip</b> Anda akan menemukan direktori dan file berikut, yang secara logis mengelompokkan aset umum dan menyediakan variasi yang dikompilasi dan dikecilkan:</p>
                        <pre>
RoyalUI/
├── template/
├── css/
├── fonts/
├── images/
├── js/
├── pages/
├── partials/
├── index.html
├── scss/
├── vendors/
├── gulpfile.js
├── package.json
├── documentation/
├── CHANGELOG.md
                        </pre>
                        <p class="mt-1">Catatan: Ekstrak file zip tersebut dan lakukan modifikasi sesuai kebutuhan anda. Setelah selesai modifikasi copy-paste isi direktori 'template' ke dalam direktori <i>public/theme</i></p>
                        <div class="alert alert-success mt-4 d-flex align-items-center" role="alert">
                            <i class="ti-info-alt mr-4"></i>
                            <p>Kami telah menggabungkan file vendor yang diperlukan untuk tujuan demo ke dalam folder 'vendor',
                                Anda mungkin tidak membutuhkan semua vendor tersebut atau mungkin perlu menambahkan lebih banyak vendor di
                                aplikasi. Jika Anda ingin membuat perubahan pada file paket vendor, Anda bisa
                                baik mengubah jalur src untuk tugas terkait di file gulpfile.js dan menjalankan
                                tugas <code> bundleVendors </code> untuk membangun kembali file vendor atau mengedit file
                                folder vendor.</p>
                        </div>
                        <hr class="mt-5">
                        <h4 class="mt-4">Instalasi</h4>
                        <p class = "mb-0">
                            Anda perlu menginstal file paket / Dependensi untuk proyek ini jika Anda ingin menyesuaikan
                            Itu. Untuk melakukannya, Anda harus memiliki <span class = "font-weight-bold"> node dan npm </span>
                            terpasang di komputer Anda.
                        </p>
                        <p class = "mb-0"> Panduan penginstalan node dapat ditemukan <a
                                href = "https://nodejs.org/en/"> di sini </a>. Karena npm dibundel dengan node, file
                            instalasi npm tidak diperlukan. </p>
                        <p>
                            Jika Anda telah menginstalnya, buka saja folder root dan jalankan perintah berikut di
                            prompt perintah atau terminal Anda (untuk pengguna mac).
                        </p>
                        <pre class = "shell-mode"> npm install </pre>
                        <p class = "mt-4">
                            Ini akan menginstal dependensi dev di <span
                                class = "font-weight-bold"> node_modules </span> di direktori root Anda.
                        </p>
                        <p class = "mt-2">
                            Kemudian Anda perlu memasang <span class = "font-weight-bold"> Gulp </span>. Kami menggunakan
                            Gulp task manager untuk proses pengembangan. Gulp akan mengawasi perubahan pada SCSS
                            file dan secara otomatis mengkompilasi file ke CSS.
                        </p>
                        <p> Memulai Gulp cukup sederhana. <a href = "https://gulpjs.com/"
                                situs target = "_ blank"> Gulp </a> adalah tempat yang tepat untuk mendapatkan informasi tentang cara memasang Gulp
                            jika Anda membutuhkan informasi lebih lanjut. Anda harus menginstal Gulp-cli di mesin Anda menggunakan
                            perintah di bawah ini. </p>
                        <pre class = "shell-mode"> npm install -g gulp-cli </pre>
                        <p class = "mt-4"> Ini menginstal Gulp-cli secara global ke mesin Anda. Hal lain agar Gulp
                            bisa dijalankan adalah file gulpfile.js. Dalam file ini, Anda dapat
                            mengatur semua tugas gulp yang akan Anda jalankan. </p>
                        <p> Jangan khawatir. Kami memiliki file ini telah dibuat untuk Anda! </p>
                        <p> Untuk menjalankan proyek ini dalam mode pengembangan, masukkan perintah berikut di bawah ini.
                            Mode ini memungkinkan sinksonisasi tampilan secara otomatis setiap kali anda menyimpan perubahan file SCSS, file SCSS akan
                            dikompilasi untuk membuat file CSS. </p>
                        <pre class = "shell-mode"> gulp serve </pre>
                        <div class="alert alert-warning mt-4" role="alert">
                            <i class="ti-info-alt-outline"></i>Penting untuk menjalankan perintah <code> gulp serve </code> dari direktori tempat gulpfile.js berada.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
