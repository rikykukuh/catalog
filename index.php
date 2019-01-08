<?php require_once './includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href='img/logo vk.png' rel='shortcut icon'>
    <title>Victory Kids</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

    <!-- Font Awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="img/VKLOGO.png" height="40" width="50"></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Produk</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#baru">Produk Baru</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#gallery">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Selamat Datang di Victory Kids Wear</div>

                <div class="intro-heading">Grosir dan Partai Baju anak <br> Baju Branded Merk Import & Eksport</div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Produk</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/baju1.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Kaos Anak Laki-Laki</h4>
                        <p class="text-muted">Kaos Anak</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/perempuan1.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Kaos Anak Perempuan</h4>
                        <p class="text-muted">Kaos Anak</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/dress1.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Dress</h4>
                        <p class="text-muted">Dress Anak</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/celana4.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Celana Anak</h4>
                        <p class="text-muted">Celana Anak</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/kemeja1.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Kemeja</h4>
                        <p class="text-muted">Kemeja Anak</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/rok1.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Rok anak</h4>
                        <p class="text-muted">rok anak</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal7" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/jaket1.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Jaket</h4>
                        <p class="text-muted">Jaket</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New Product -->
    <section id="baru" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Produk Baru</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>

                <!-- PAGINATION -->
            <?php

                // Cek apakah terdapat data pada page URL
                $page = (isset($_GET['page'])) ? $_GET['page'] : 1;

                $limit = 8; // Jumlah data per halamanya

                // Buat query untuk menampilkan data ke berapa yang akan ditampilkan pada tabel yang ada di database
                $limit_start = ($page - 1) * $limit;

                // Buat query untuk menampilkan data siswa sesuai limit yang ditentukan
                $abd = mysql_query("SELECT * FROM barang LIMIT ".$limit_start.",".$limit);

                $no = $limit_start + 1; // Untuk penomoran tabel
                while ($data = mysql_fetch_array($abd)) { // Ambil semua data dari hasil eksekusi $sql
                ?>

                    <!-- Coba -->
                    <div class="col-md-3 top_brand_left-1">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="img/offer.png" alt=" " class="img-responsive">
                                </div>

                                <!-- Dicoba -->
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a ><img title=" " alt=" " src="<?php echo $data['Gambar']; ?>"></a>
                                                <p><?php echo $data['Nama']; ?></p>
                                                <p><?php echo $data['ID']; ?></p>
                                                <p><?php echo $no; ?></p>

                                            </div>
                                            <div class="snipcart-details top_brand_home_details">
                                                <form action="detail.php?id=<?php echo $data['ID'];?>" method="post">
                                                    <fieldset>

                                                        <input type="submit" name="submit" value="detail" class="button">
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                                <!-- END -->

                            </div>
                        </div>
                        <br>
                    </div>

                <?php

                $no++; // Tambah 1 setiap kali looping
                }
                ?>
    <!-- END -->
    <ul class="pagination">
            <!-- LINK FIRST AND PREV -->
            <?php
            if ($page == 1) { // Jika page adalah pake ke 1, maka disable link PREV
            ?>
                <li class="disabled"><a href="#">First</a></li>
                <li class="disabled"><a href="#">&laquo;</a></li>
            <?php
            } else { // Jika buka page ke 1
                $link_prev = ($page > 1) ? $page - 1 : 1;
            ?>
                <li><a href="index.php?page=1">First</a></li>
                <li><a href="index.php?page=<?php echo $link_prev; ?>/#baru">&laquo;</a></li>
            <?php
            }
            ?>

            <!-- LINK NUMBER -->
            <?php
            // Buat query untuk menghitung semua jumlah data
            $abc= mysql_query("SELECT COUNT(*) AS jumlah FROM barang");
            $get_jumlah = mysql_fetch_array($abc);

            $jumlah_page = ceil($get_jumlah['jumlah'] / $limit); // Hitung jumlah halamanya
            $jumlah_number = 3; // Tentukan jumlah link number sebelum dan sesudah page yang aktif
            $start_number = ($page > $jumlah_number) ? $page - $jumlah_number : 1; // Untuk awal link member
            $end_number = ($page < ($jumlah_page - $jumlah_number)) ? $page + $jumlah_number : $jumlah_page; // Untuk akhir link number

            for ($i = $start_number; $i <= $end_number; $i++) {
                $link_active = ($page == $i) ? 'class="active"' : '';
            ?>
                <li <?php echo $link_active; ?>><a href="index.php?page=<?php echo $i; ?>/#baru"><?php echo $i; ?></a></li>
            <?php
            }
            ?>

            <!-- LINK NEXT AND LAST -->
            <?php
            // Jika page sama dengan jumlah page, maka disable link NEXT nya
            // Artinya page tersebut adalah page terakhir
            if ($page == $jumlah_page) { // Jika page terakhir
            ?>
                <li class="disabled"><a href="#">&raquo;</a></li>
                <li class="disabled"><a href="#">Last</a></li>
            <?php
            } else { // Jika bukan page terakhir
                $link_next = ($page < $jumlah_page) ? $page + 1 : $jumlah_page;
            ?>
                <li><a href="index.php?page=<?php echo $link_next; ?>">&raquo;</a></li>
                <li><a href="index.php?page=<?php echo $jumlah_page; ?>">Last</a></li>
            <?php
            }
            ?>
        </ul>
            </div>

    </div>
    </section>

    <!-- Section Gallery -->
    <section id="gallery" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Gallery</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <img src="img/portfolio/testi1.jpg" class="img-responsive" alt="">
                    <div class="portfolio-caption">
                        <center><h5>Testimonial - 1</h5></center>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <img src="img/portfolio/testi2.jpg" class="img-responsive" alt="">
                    <div class="portfolio-caption">
                        <center><h5>Testimonial - 2</h5></center>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <img src="img/portfolio/testi3.jpg" class="img-responsive" alt="">
                    <div class="portfolio-caption">
                        <center><h5>Testimonial - 3</h5></center>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <img src="img/portfolio/testi4.jpg" class="img-responsive" alt="">
                    <div class="portfolio-caption">
                        <center><h5>Testimonial - 4</h5></center>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <img src="img/portfolio/testi8.jpg" class="img-responsive" alt="">
                    <div class="portfolio-caption">
                        <center><h5>Testimonial - 5</h5></center>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <img src="img/portfolio/testi5.jpg" class="img-responsive" alt="">
                    <div class="portfolio-caption">
                        <center><h5>Testimonial - 6</h5></center>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <img src="img/portfolio/testi15.jpg" class="img-responsive" alt="">
                    <div class="portfolio-caption">
                        <center><h5>Testimonial - 7</h5></center>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <img src="img/portfolio/testi20.jpg" class="img-responsive" alt="">
                    <div class="portfolio-caption">
                        <center><h5>Testimonial - 8</h5></center>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <img src="img/portfolio/testi12.jpg" class="img-responsive" alt="">
                    <div class="portfolio-caption">
                        <center><h5>Testimonial - 9</h5></center>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row" >
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <div align="justify">
                        Kami Victory Kids wear distributor baju anak branded khusus pembelian grosir & partai,,,<br><br>

                        Maaf sist,gan kami hanya melayanin grosir & partai... Kami tidak melayanin satuan,ritel...<br><br>

                        Kami menyediakan baju anak branded dengan berbagai merek export import.. OSHKOSH, NEXT,GUESS,ZARA, GAP KIDS, BABY GAP, PUMPKINS, PATCH, URBAN, MCARE, DISNEY, KHQ, CIRCO, GYMBOREE, OLD NAVY, JUMPING BEANS, FADED GLORY, WONDERKIDS, FISHER PRICE, CARTER'S, KID'S GET, BABY MILO DLL...<br><br>

                        Syarat dan ketentuan order : <br><br>

                        Minimal order perlusin grosir min order perlusin itu per item contoh per item itu seandainya sista minat dengan produk barang saya d ats itu d sebut per item bukan yang minimal order perlusin campur-campur... Untuk soal size motif warna mix gak bisa d pilih satu persatu konsep saya grosir bukan ritel untuk harga yg saya tawarkan harga grosir<br><br>

                        Minimal order partai per item minimal 100pcs per item bukan yang 100pcs campur-campur,,, untuk harga partai tentu jelas lebih murah dari pengambilan grosir<br><br>

                        Bagi anda yang minat / serius order bisa hub :<br><br>

                        Pin BBM : D78CF35A ( fast respon ) <br><br>

                        WA : 0897-2331-237 ( fast respon )<br><br>

                        FB : Sanif azies<br><br>

                        Shopee : https://shopee.co.id/azis.sanif<br><br>

                        Grup FB : suplayer baju branded anak & distributor gudang grosir pakaian baju anak branded<br><br>

                        Halaman FB Victory Kids baju branded & distributor gudang grosir pakaian anak branded<br><br>

                        Web : Victorykids.store

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <br>
                    <br>
                </div>
            </div>
            <div id = "teks1">
                <h4>
                <img src ="img/portfolio/whatsapp.png" height="50" width="50">
                +62 897 - 2331 - 237 (Victory Kids)<br><br><br>
                <img src="img/portfolio/bbm.png" height="50" width="50">
                &nbsp;5AA830CA (Victory Kids) <br><br><br>
                <img src="img/portfolio/phone2.png" height="50" width="50">
                &nbsp;+62 897 - 2331 - 237 (Victory Kids)<br><br><br>
                <img src="img/portfolio/Gmail-Logo.png" height="40" width="60">
                azis.sanif@gmail.com (Sanif Aziz)
                </h4>
            </div>


        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Nabila Kids 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <!--<li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>-->
                        <li><a href="https://www.facebook.com/groups/426451037558401/?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->
    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Baju Anak Laki-Laki</h2>
                                <br><br>
                                <div>
                                <img class="img-responsive img-centered" src="img/portfolio/baju1.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/baju2.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/laki1_1.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/laki2.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/laki3_1.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/laki4.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/laki5.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/laki6.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/laki7.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/laki8.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/laki9.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/laki10.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/laki11.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/laki12.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/laki13.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/laki14.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/laki15.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/laki16.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/laki17.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/laki18.jpg" alt="">
                                </div>

                                <p>
                                    Date: Agustus 2016<br>
                                    Category: Kaos Anak
                                </p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Tutup Gambar</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Kaos Anak Perempuan</h2>
                                <br><br>
                                <p class="item-intro text-muted"></p>
                                <img class="img-responsive img-centered" src="img/portfolio/perempuan1.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/kaos perempuan.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/perempuan2.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/perempuan3.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/perempuan4.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/perempuan5.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/perempuan6.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/perempuan7.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/perempuan8.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/perempuan9.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/perempuan10.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/perempuan11.jpg" alt="">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Tutup Gambar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Dress</h2>
                                <br><br>
                                <img class="img-responsive img-centered" src="img/portfolio/dress1.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/dress2.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/dress3.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/dress4.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/dress5.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/dress6.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/dress7.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/dress8.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/dress9.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/dress10.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/dress11.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/dress12.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/dress13.jpg" alt="">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Tutup Gambar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Celana Anak Laki-Laki</h2>
                                <br><br>
                                <img class="img-responsive img-centered" src="img/portfolio/celana_anak.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/celana_anak2.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/celana1.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/celana2.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/celana3.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/celana4.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/celana5.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/celana6.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/celana7.jpg" alt="">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Tutup Gambar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Kemeja Anak</h2>
                                <br><br>
                                <img class="img-responsive img-centered" src="img/portfolio/kemeja1.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/kemeja2.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/kemeja3.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/kemeja4.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/kemeja5.jpg" alt="">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Tutup Gambar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Rok Anak</h2>
                                <br><br>
                                <img class="img-responsive img-centered" src="img/portfolio/rok1.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/rok2.jpg" alt="">
                                <img class="img-responsive img-centered" src="img/portfolio/rok3.jpg" alt="">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Tutup Gambar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Jaket</h2>
                                <br><br>
                                <img class="img-responsive img-centered" src="img/portfolio/jaket1.jpg" alt=""><br>
                                <img class="img-responsive img-centered" src="img/portfolio/jaket2.jpg" alt=""><br>
                                <img class="img-responsive img-centered" src="img/portfolio/jaket3.jpg" alt=""><br>
                                <img class="img-responsive img-centered" src="img/portfolio/jaket4_1.jpg" alt=""><br>
                                <img class="img-responsive img-centered" src="img/portfolio/jaket5_1.jpg" alt=""><br>
                                <img class="img-responsive img-centered" src="img/portfolio/jaket6.jpg" alt=""><br>
                                <img src="img/portfolio/jaket2.jpg">
                                <br>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Tutup Gambar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
