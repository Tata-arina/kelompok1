@extends('admin.mainappss')
@section('title')
    dashboard
@endsection
@section('content')
    <!-- beranda -->
    <section id="Beranda">
        <div class="container-fluid" id="baground">
            <div class="container text-center" style="margin-top: 70px;" id="pembuka">
                <h1 class="text-warning fw-bold">PENERIMAAN PESERTA DIDIK BARU <br> SMA NEGERI 19 PALEMBANG 2023/2024 <br>
                    Registrasi Online melalui</h1>
                <a href="portal"><button type="button" class="btn btn-secondary m-3">Portal Simbels</button></a>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="sidebar">
            <div class="widget">
                <div class="jdl-widget">
                    <h5>Kepala Sekolah</h5>
                </div>
                <div class="isi-widget">
                    <img src="image/kepalasekolah.png" width="210vh">
                </div>
            </div>

            <div class="widget">
                <div class="jdl-widget">
                    <h5>Jam Sekarang</h5>
                </div>
                <div class="isi-widget">
                    <iframe scrolling="no" frameborder="no" clocktype="html5"
                        style="overflow:hiddenborder:0;margin:5;padding:7;width:210px;height:100px;"src="https://www.clocklink.com/html5embed.php?clock=042&timezone=JOG&color=red&size=356&Title=&Message=&Target=&From=2023,1,1,0,0,0&Color=red"></iframe>
                </div>
            </div>

            <div class="widget">
                <div class="jdl-widget">
                    <h5>Video Klip</h5>
                </div>
                <div class="isi-widget">
                    <video width="210px" controls>
                        <source src="image/videosma19.mp4">
                    </video>
                </div>
            </div>

            <div class="widget">
                <div class="jdl-widget">
                    <h5>Kelender</h5>
                </div>
                <div class="isi-widget">
                    <img src="image/kelender19.jpeg" width="100%" alt="kelender">
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 18px;">
        <h3 class="h3 text-center">Sejarah Sma Negeri 19 Palembang</h3>
        <p style="text-align: justify">SMA Negeri (SMAN) 19 Palembang merupakan sebuah Sekolah Menengah Atas Negeri yang
            terletak di kota Palembang, Sumatra Selatan, Indonesia. Sekolah ini merupakan salah satu sekolah unggulan dan
            favorit di kota Palembang khususnya untuk wilayah Seberang Ulu. Sama dengan SMA pada umumnya di Indonesia, masa
            pendidikan ditempuh dalam waktu tiga tahun pelajaran, mulai dari Kelas X sampai Kelas XII. Sejak berdirinya
            tahun 2000 sekolah ini mampu bersaing dari segi prestasi dan kualitas dengan sekolah menengah atas lainnya. Hal
            ini juga ditunjang dengan fasilitas dan sumberdaya yang baik. SMAN 19 Palembang diresmikan pada hari Senin 7
            Februari 2000 dan di resmikan oleh Gubenur Sumatra Selatan yaitu Rosihan Arsyad. Saat ini SMA Negeri 19
            Palembang adalah satu-satu nya SMA yang terakreditasi A untuk di kawasan Seberang Ulu 1 Palembang. Sebelum
            berada di kawasan Jakabaring, sekolah ini awalnya menumpang di SMP Negeri 31 Palembang untuk kegiatan belajar
            mengajar. SMA Negeri 19 Palembang pertama kali dipimpin oleh Bapak Drs.Somat, seorang sarjana lulusan Fakultas
            Keguruan dan Ilmu Pendidikan Universitas Sriwijaya tahun 1990. Pendukung pelaksanaan program kegiatan belajar
            mengajar diperkuat dengan sistem akumulasi poin pelanggaran yang dilakukan oleh siswa. Dengan program-program
            eksklusif tersebut, belum 1 tahun usianya, berbagai julukan dialamatkan ke sekolah ini. "Sekolah Favorit" (versi
            media massa), MT (majelis taklim), "Percontohan" (versi Bapak Drs. Subardi, Kabid Dikmenum saat itu). Bahkan tak
            tanggung program MT yang dikembangkan di Simbel's ini langsung diresmikan oleh Wali kota Palembang saat itu, H.
            Husni pada tahun 2000. Saat itu Simbel's merupakan satu-satu-nya sekolah yang memiliki kegiatan penerbitan LD
            (Lembar Dakwah) yang rutin terbit setiap minggu sekali.</p>


        <h3>Fasilitas</h3>
        <p style="text-align: justify">Saat ini SMA Negeri 19 Palembang memiliki beberapa fasilitas antara lain sebagai
            berikut: <br>
            • Ruang Kelas <br>
            • Perpustakaan <br>
            • Laboratorium Kimia <br>
            • Laboratorium Komputer <br>
            • Musholla Al Hijrah <br>
            • Ruang Guru dan Ruang Rapat <br>
            • Ruang Tata Usaha <br>
            • Ruang Kepala Sekolah <br>
            • Ruang Bimbingan Konseling <br>
            • Ruang UKS <br>
            • Lapangan Futsal dan Lapangan Voli <br>
            • Lapangan Upacara Bendera <br>
            • Kantin <br>
            • Lahan Parkir
        </p>

        <h3>Ekstrakulikuler</h3>
        <p style=" display: flex; text-align: justify">
            • Organisasi Siswa Intra Sekolah (OSIS) <br>
            • Kerohanian Islam (ROHIS) <br>
            • Majalah Sekolah <br>
            • Pasukan Pengibar Bendera/Paskibra SMAN 19 (Passimbels) <br>
            • Pramuka <br>
            • English Conversation Club <br>
            • Patroli Keamanan Sekolah <br>
            • Palang Merah Remaja <br>
            • Olahraga ( Futsal, Basket, Voli, dan Tenis) <br>
            • Seni (Vocal, Tari dan Lukis) <br>
        </p>
    </div>

    <table class="table table-hover table-secondary shadow-lg"></table>
@endsection
