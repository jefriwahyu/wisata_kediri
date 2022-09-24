<!doctype html>

<html>
    <head>
        <title>Wisata Kediri</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>

        <!-- membuat menu navigasi untuk menuju ke halaman yang yang ingin di tuju -->
        <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #5CA23F;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="color: white;">WISATA KEDIRI</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 800px;">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tempat Wisata</a>
                            <ul class="dropdown-menu" >
                                <li><a class="dropdown-item" href="#waterpark">Kediri Water Park</a></li>
                                <li><a class="dropdown-item" href="#goa">Goa Selomangleng</a></li>
                                <li><a class="dropdown-item" href="#museum">Museum Fotografi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#tiket">Harga Tiket</a>
                        </li>
                </div>
            </div>
        </nav>

        <!-- menampilkan gambar wisata dengan carousel -->
        <div class="container">
            <br>
            <div id="carouselExampleCaptions" class="carousel slide"  data-bs-ride="false" >
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner shadow" style="border-radius: 10px;">
                    <div class="carousel-item active">
                        <img src="images/kediri waterpark.png" class="d-block w-100" alt="kediriwaterpark" width="500px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Kediri Water Park</h5>
                            <p>Wisata Kolam Renang Terbesar di Jawa Timur</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/selomangleng.jpg" class="d-block w-100" alt="selomangleng" width="500px" style="margin-bottom: -39px;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Goa Selomangleng</h5>
                            <p>Tempat Wisata yang Sangat Bersejarah di Kota Kediri</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/museum-fotografi.jpg" class="d-block w-100" alt="museum" width="500px" style="margin-bottom: -155px;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Museum Fotografi</h5>
                            <p>Banyak Sekali Hasil Karya Fotografi yang Indah di Meseum Fotografi Kediri</p>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    <br>
                </div>
            </div>
        </div>
        <br><br>

            <!-- Section detail tempat wisata -->
            <!-- menampilkan video profil yang di embed dari youtube -->
            <section style="background-color: #E6F3D0;">
                <br><br>
                <div style="border-radius: 20px; background-color: #5CA23F;color: white;margin: 0px 500px;">
                    <h3 class="text-center">TEMPAT WISATA</h3>
                </div>
                <br><br>
                <div style="margin: auto" id="waterpark">
                    <div style="margin: 0 30px;">
                       <h4>Kediri Water Park</h4>
                        <br>
                        <div class="text-center">
                            <iframe width="1200" height="500" style="border-radius: 10px;" src="https://www.youtube.com/embed/Sp6frkUXtxU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <br><br>
                        <p>Kediri Water Park merupakan wisata dengan fasilitas yang sangat lengkap dan juga merupakan kolam renang terbesar di jawa timur. Banyak sekali orang yang datang kesana setiap bulannya. Dengan fasilitas yang sangat lengkap menjadi membuat para pengunjung menjadi nyaman dan juga menjadi lebih menikmati wisata disana.</p>
                    </div>
                </div>
                <br><br>
                <div style="margin: auto;" id="goa">
                    <div style="margin: 0 30px;">
                        <h4>Goa Selomangleng</h4> <br>
                        <div class="text-center">
                            <iframe width="1200" height="500" style="border-radius: 10px;" src="https://www.youtube.com/embed/e2PGel48w3s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <br><br>
                        <p>Goa Selomangleng merupakan tempat yang berhubungan dengan kisah terbentuknya Kota Kediri, dimana goa selomangleng digunakan untuk bertapa oleh seorang yang sakti mandraguna. Dan mitosnya di goa tersebut dapat menembus langsung ke pantai selatan. Tapi sekarang goa selomangleng merupakan tempat wisata yang sangat di sukai juga oleh masyarakat Kota Kediri. Tempatnya yang sangat sejuk dan juga sangat bagus untuk bersantai. </p>   
                    </div>
                </div>
                <br><br>
                <div style="margin: auto" id="museum">
                    <div style="margin: 0 30px;">
                        <h4 >Museum Fotografi</h4><br>
                        <div class="text-center">
                            <iframe width="1200" height="500" style="border-radius: 10px;" src="https://www.youtube.com/embed/v1t4AlvHw00" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <br><br>
                        <p>Museum yang sangat di sukai masyarakat di Kota Kediri ini merupakan museum yang sangat bersejarah. Banyak sekali foto-foto jaman dulu yang di abadikan dan di pajang disini. Khususnya foto jaman dahulu di Kota Kediri.</p> 
                    </div>
                </div>
                <br><br>
            </section>
            
            <!-- section menampilkan nama wisata, alamat wisata, jadwal buka wisata, dan harga tiket dengan tabel-->
            <section class="container" id="tiket">
                <br>
                <div class="text-center shadow-sm" style="border-radius: 20px; background-color: #5CA23F;color: white;margin: 0px 450px;">
                    <h3>HARGA TIKET</h3>
                </div>
                <br>
                <div>
                    <table class="table table-striped text-center border border-3 shadow">
                        <thead class="table-success">
                            <tr>
                                <th>Nama Wisata</th>
                                <th>Lokasi</th>
                                <th>Jadwal</th>
                                <th>Harga Tiket</th>
                                <th>Harga Tiket Anak</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kediri Water Park</td>
                                <td>Jalan Raya Pagung, Desa Pagung, Kediri, Jawa Timur, Indonesia, 64161</td>
                                <td>09.00 - 17.00</td>
                                <td>Rp. 50.000</td>
                                <td>Rp. 25.000</td>
                            </tr>
                            <tr>
                                <td>Goa Selomangleng</td>
                                <td>Jl. Selomangleng, Pojok, Kec. Mojoroto, Kota Kediri, Jawa Timur 64115</td>
                                <td>08.00 - 15.00</td>
                                <td>Rp. 20.000</td>
                                <td>Rp. 10.000</td>
                            </tr>
                            <tr>
                                <td>Museum Fotografi</td>
                                <td>Jl. Kapten Tendean No.60/160, Ngronggo, Kec. Kota, Kota Kediri, Jawa Timur 64127</td>
                                <td>09.00 - 16.30</td>
                                <td>Rp. 30.000</td>
                                <td>Rp. 15.000</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>

                <!-- button untuk menuju ke halaman form pemesanan tiket wisata -->
                <div class="text-center">
                    <button type="button" class="btn btn-success"><a href="form_pemesanan.php" style="text-decoration: none; color: white;">Pesan Tiket Sekarang</a></button>
                </div>
                <br><br>
            </section>
    <script src="js/bootstrap.bundle.min.js"></script>
    </body>
    <!-- footer -->
    <footer>
      <div class="text-center text-light" style="background-color: #5CA23F; ">
        <span>Created By <a href="" style="text-decoration: none; color: white;">Jefri Wahyu</a> | &#169; 2022 All Rights Reserved</span>
      </div>
    </footer>
</html>