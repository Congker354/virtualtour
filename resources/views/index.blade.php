<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PPM AFM VIRTUAL TOUR</title>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"  crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css"/>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
      <script src="index.js"></script>
      <audio autoplay id="audio">
         <source src="music/sabilulungan.mp3" type="audio/mpeg">
      </audio>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
         crossorigin="anonymous" referrerpolicy="no-referrer" />
   </head>
   <title>Virtual Tour Yayasan Al Faqih Mandiri</title>
   <body>
      <div id="infoModal" class="modal" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Information</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <p>Yayasan Al Faqih Mandiri (AFM) adalah asrama bagi para mahasiswa/i untuk menimba ilmu agama.</p>
                  <p>Asrama ini memiliki visi, yaitu mencetak mahasiswa yang profesional religius.</p>
               </div>
            </div>
         </div>
      </div>
      <div id="mapModal" class="modal" tabindex="-1" role="dialog">
         <div class="modal-dialog modal-lg"  role="document">
            <div class="modal-content" style="height:500px;">
               <div class="modal-header">
                  <h5 class="modal-title">Maps</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2460800380745!2d106.8305253159053!3d-6.362189364012387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed00cea6f0a5%3A0x1b817da416ece8e7!2sAl%20Faqih%20Islamic%20Boarding%20School%20Depok%20(LDII)!5e0!3m2!1sen!2sid!4v1658849323011!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
            </div>
         </div>
      </div>
      <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
         <div class="container">
            <img src="img/logo-afm6.png" alt="logo" style="width: 44px; height:44px;">
            <a class="navbar-brand" href="#"><strong>
            PPM Al Faqih Mandiri
            </a></strong>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
               <div class="navbar-nav">
                  <a class="nav-link active" href="#">Home<span class="sr-only">(current)</span></a>
                  <a class="nav-link" href="javascript: scroll('About');">About</a>
                  <a class="nav-link" href="Javascript: scroll('Team');">Team</a>
                  <a class="nav-link" href="Javascript: scroll('Contact');">Contact Us</a>
               </div>
            </div>
         </div>
      </nav>
      <div id="panorama">
         <div id="controls">
            <div class="ctrl" id="sound">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16">
                  <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/>
                  <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/>
                  <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/>
               </svg>
            </div>
            <div class="ctrl" id="information">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
               </svg>
            </div>
            <div class="ctrl" id="mapbutton">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
               </svg>
            </div>
         </div>
      </div>
      <!-- <div class="jumbotron">
         <h1 class="display-4 text-center">PONDOK PESANTREN MAHASISWA<P>AL-FAQIH MANDIRI</P></h1>
         <p class="lead text-center">Mencetak generasi muda mahasiswa yang profesional religius</p>                
         </div> -->
      <hr>
      <h3 class="text-center" id="About">ABOUT</h3>
      <hr>
      <div class="container">
         <div class="row text-justify">
            <div class="col-md-4 p-4">
               <img src="img/home-banner-1.jpg" alt="kreatif" style="width: 400px; height:200px;"> 
            </div>
            <div class="col-md-4 p-4">
               <img src="img/maps-afm.png" alt="kreatif" style="width: 400px; height:200px;"> 
            </div>
            <div class="col-md-4 p-4">
               <img src="img/pengurus2.JPG" alt="kreatif" style="width: 400px; height:200px;"> 
            </div>
         </div>
         <div class="row text-justify">
            <div class="col-md-4 p-4">
               <p>
               <h4>Apa itu PPM AFM ?</h4>
               Pondok pesantren mahasiswa Al-Faqih Mandiri Depok yaitu pondok pesantren yang 
               diperuntukkan khusus untuk mahasiswa seluruh Indonesia yang sedang menempuh kuliah di 
               depok dan sekitarnya.</p>
            </div>
            <div class="col-md-4 p-4">
               <p>
               <h4>Dimana alamatnya ?</h4>
               Lokasi Pondok pesantren mahasiwa Al Faqih Mandiri sangat strategis, kami berada tepat di 
               jantung kota Depok, yaitu di Jalan Sawo No 33B RT.03 RW.07 Kel. Pondok Cina Kec. Beji 
               Kota Depok. PPM AFM juga sangat dekat dengan Universitas Indonesia serta kampus lainnya, 
               dan lokasi kami sangat mudah dijangkau dengan transportasi umum karena dekat dengan 
               stasiun dan jalan raya.</p>
            </div>
            <div class="col-md-4 p-4">
               <p>
               <h4>Kapan PPM AFM Diresmikan ?</h4>
               PPM AFM di resmikan pada tanggal 16 Agustus 2013
               </p>
            </div>
         </div>
      </div>
      <hr>
      <h3 class="text-center" id="Team">TEAM</h3>
      <hr>
      <div class="container">
         <div class="row text-justify">
            <div class="col-md-4 p-4">
               <h4>Kreatif</h4>
               <img src="img/kreatif.JPG" alt="kreatif" style="width: 400px; height:300px;">
               <h5>Visi</h5>
               <P>Terwujudnya diisi keluara kreatif yang berkontribusi aktif dalam mewujudkan linkungan PPM AFM yang :</P>
               <p>1. Memiliki citra yang baik dan berintegritas</p>
               <p>2. Suportif terhadap perkembangan setiap warga PPM AFM</p>
               <h5>Misi</h5>
               <p>1. Menciptakan sistem kerja divisi yang kolaboratif dan menjadikannya wadah pengembanan diri bagi santri PPM AFM (termasuk stakeholder divisi didalamnya).</p>
               <p>2. Turut berperan aktif didalam mempromosikan PPM AFM baik secara internal maupun eksternal</p>
               <p>3. Berkontribusi dalam mewujudkan linkunagn PPM AFM yang nyaman, rukun, kompak, dan juga bersahaja</p>
            </div>
            <div class="col-md-4 p-4">
               <h4>Kurikulum</h4>
               <img src="img/kurkul.JPG" alt="kurikulum" style="width: 400px; height:300px;">    
               <h5>Visi</h5>
               <p>Membantu para santri mencapai targetnya selama 3 tahun di PPM AFM</p>
               <h5>Misi</h5>
               <p>1. Mendistribusikan materi selama 3 tahun</p>
               <p>2. Mendukung dan memfasilitasi kegiatan belajar mengajar di PPM AFM</p>
            </div>
            <div class="col-md-4 p-4">
               <h4>Ubank</h4>
               <img src="img/ubank.JPG" alt="ubank" style="width: 400px; height:300px;">
               <h5>Visi dan Misi</h5>
               <P>1. Memberdayakan dan menggerakan potensi mahasiswa di bidang kewirausahaan</P>
               <p>2. Mengembangkan kegiatan usaha dan kegiatan kewirausahaan dalam rangka pembenahan ekonomi</p>
            </div>
            <div class="col-md-4 p-4">
               <h4>Kesiswaan</h4>
               <img src="img/kesiswaan.JPG" alt="kesiswaan" style="width: 400px; height:300px;">
               <h5>Visi</h5>
               <p>Menjadi representasi santri yang ideal serta menjadi agen aktif dalam mensukseskan pembinaan professional religius di PPM AFM</p>
               <h5>Misi</h5>
               <p>1. Menjadi pemimpin yang bertanggung jawab bagi para santri PPM AFM</p>
               <p>2. Menjadi pengawas kinerja KOAS dan Divisi PPM AFM</p>
            </div>
            <div class="col-md-4 p-4">
               <h4>Keputrian</h4>
               <img src="img/keputrian1.JPG" alt="keputrian" style="width: 400px; height:300px;">
               <h5>Visi dan Misi</h5>
               <p>1. Melaksanakan kegiatan yang bertujuan untuk mengembangkan keterampilan serta menambah wawasan santriwati PPM AFM</p>
               <p>2. Menjadi rekan santriwati dan berusaha membantu santriwati dalam menghadapi kesulitan</p>
            </div>
            <div class="col-md-4 p-4">
               <h4>Sarana dan Prasarana</h4>
               <img src="img/sarpras.JPG" alt="sarpras" style="width: 400px; height:300px;">
               <h5>Visi dan Misi</h5>
               <p>1. Mencatat perlengkapan barang/alat investasi</p>
               <p>2. Membuat tanda (kode) pada barang/alat</p>
               <p>3. Melaporkan barang/alat setiap bulannya</p>
            </div>
            <div class="col-md-4 p-4">
               <h4>Kesehatan</h4>
               <img src="img/divkes.JPG" alt="divkes" style="width: 400px; height:300px;">
               <h5>Visi dan Misi</h5>
               <p>1. Menjadi perantara dalam menjaga kesehatan warga PPM AFM</p>
               <p>2. Menjaga ketersediaan obat-obatan PPM AFM</p>
            </div>
            <div class="col-md-4 p-4">
               <h4>Rumah Tangga</h4>
               <img src="img/timtam.JPG" alt="timtam" style="width: 400px; height:300px;">
               <h5>Visi dan Misi</h5>
               <p>1. Menyediakan fasilitas untuk tamu dengan baik</p>
               <p>2. Melayani tamu yang datang ke PPM AFM sebagaimana mestinya</p>
               <p></p>
            </div>
            <div class="col-md-4 p-4">
               <h4>PSDM</h4>
               <img src="img/psdm.JPG" alt="psdm" style="width: 400px; height:300px;">
               <h5>Visi</h5>
               <p>PSDM (Pengembangan Sumber Daya Muslim) sebagai badan penunjang yang profesional, berkelanjutan dan juga progresif untuk generasi penerus yang madani</p>
               <h5>Misi</h5>
               <p>1. Karakter PSDM yang profesional berarti progres yang dilakukan oleh PSDM harus terlaksanakan dengan rapih, terorganisasi, dan terencana dengan baik</p>
               <p>2. Berkesinambungan dan terus menerus berusaha mewujudkan hasil akhir yang dituju</p>
               <p>3. Memiliki target yang akan dilakukan secara bertahap dengan adanya tujuan atau arah yang jelas berdasarkan evaluasi yang dilakukan secara berkala</p>
            </div>
            <div class="col-md-4 p-4">
               <h4>Keuangan</h4>
               <img src="img/keuangan.JPG" alt="keuangan" style="width: 400px; height:300px;">
               <h5>Visi dan Misi</h5>
               <p>1. Menghimpun dana Biaya Operasional Pondok (BOP) dari tiap santri</p>
               <p>2. Bertanggung jawab dalam mengelola, mencatat, dan membuat laporan pemasukan dan pengeluaran dana BOP</p>
               <p>3. Bertanggung jawab dalam pembayaran seluruh operasional PPM</p>
               <p>4. Bertanggung jawab dalam menghimpun, mencatat dan melaporkan dana isrun dari tiap santri</p>
            </div>
            <div class="col-md-4 p-4">
               <h4>Sekretariat</h4>
               <img src="img/sekre.JPG" alt="sekre" style="width: 400px; height:300px;">
               <h5>Visi dan Misi</h5>
               <p>Mendukung program kerja dan kegiatan, melancarkan administrasi dan juga 
                  bidang kerja kesekretariatan sangat banyak, 
                  baik yang bersifat rutin dikerjakan setiap hari maupun 
                  pekerjaan yang bersifat insidental
               </p>
            </div>
            <div class="col-md-4 p-4">
               <h4>Humas</h4>
               <img src="img/humas.JPG" alt="humas" style="width: 400px; height:300px;">
               <h5>Visi dan Misi</h5>
               <p>Mengatur alur informasi yang 
                  berkaitan dengan PPM AFM baik 
                  yang bersifat kedalam ataupun 
                  keluar
               </p>
            </div>
            <div class="col-md-4 p-4">
               <h4>Fundrishing</h4>
               <img src="img/fr.JPG" alt="fr" style="width: 400px; height:300px;">
               <h5>Visi dan Misi</h5>
               <p>Membantu kebutuhan keuangan dan infrastruktur PPM AFM dengan dana usaha</p>
            </div>
            <div class="col-md-4 p-4">
               <h4>Mechanical Engineering</h4>
               <img src="img/me.JPG" alt="me" style="width: 400px; height:300px;">
               <h5>Visi</h5>
               <p>Mensejahterakan Seluruh warga PPM AFM dalam konteks fasilitas penunjang kenyamanan</p>
               <h5>Misi</h5>
               <p>1. Membangun dan menyediakan fasilitas dengan baik</p>
               <p>2. Melakukan pengecekan secara rutin disemua lini, guna mencegah terjadinya kerusakan dan memperpanjang jangka waktu penggunaan</p>
            </div>
            <div class="col-md-4 p-4">
               <h4>Pamong</h4>
               <img src="img/pamong.JPG" alt="pamong" style="width: 400px; height:300px;">
               <h5>Visi Misi</h5>
               <p>1. Menjadi asisten dan pengajar pengganti ketika guru berhalangan</p>
               <p>2. Mengarahkan dan menegur santri yang belum menjalankan peraturan dan kegiatan di PPM AFM</p>
               <p>3. Merekap data santri setiap minggunya</p>
            </div>
         </div>
      </div>
      <div class="text-light bg-dark">
         <hr>
         <h3 class="text-center" id="Contact">Contact Us</h3>
         <hr>
         <div class="container">
            <div class="row">
              <div class="col" style="background-color: dark;">
               <h5>Instagram</h5>
               <p>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                     <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                  </svg>
                  @ppm.afm 
               </p>
               <p>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                     <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                  </svg>
                  @psb.afm
               </p>
               <p>
               </div>
               <div class="col" style="background-color: dark;">
                  <h5>Twitter</h5>
                  </p>
                  <p>
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                     </svg>
                     @PPM_AFM
                  </p>
                  <p>
               </div>
               <div class="col" style="background-color: dark;">
                  <h5>Whatsapp</h5>
                  </p>
                  <p>
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                     </svg>
                     +62 822-9200-1653 (Indra)
                  </p>
                  <p>
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                     </svg>
                     +62 812-1285-4345 (Ghulam)
                  </p>
                  <p>
               </div>
               <div class="col" style="background-color: dark;">
                  <h5>Youtube</h5>
                  </p>
                  <p>
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                     </svg>
                     PPM Al-Faqih Mandiri
                  </p>
               </div>
            </div>
            <!-- //class row-->          
            <div class="mt-5 text-center">
               <img src="img/logo-text-afm-putih.png" alt="logo" style="width: 140px; height:32px;">
               <p>Copyright 2022 - Said Arina Hendra</p>
               <p></p>
            </div>
         </div>
      </div>
      <!-- Optional JavaScript; choose one of the two! -->
      <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
         <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
         -->
      <script>
         function scroll(scrollId){
           var getMeTo = document.getElementById(scrollId);
          getMeTo.scrollIntoView({behavior: 'smooth'}, false);
         }
      </script>
   </body>
</html>