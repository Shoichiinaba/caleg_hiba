<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hiba Al Kanzu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/golkar.png" rel="icon" type="image/png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-black navbar-light fixed-top shadow py-lg-0 px-4 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h3 class="text-secondary fw-bold m-0">GOLKAR</h3>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">Profil</a>
                <a href="#skill" class="nav-item nav-link">Visi Misi</a>
                <a href="#service" class="nav-item nav-link">Program Kerja</a>
            </div>
            <a href="index.php" class="navbar-brand bg-secondary py-3 px-4 mx-3 d-none d-lg-block">
                <h2 class="text-primary fw-bold m-0"> <img src="img/golkar.png" rel="icon" type="image/png"
                        style="width: 35px; height: 38px; padding-bottom: 7px;" /> Golkar</h2>
            </a>
            <div class="navbar-nav me-auto py-0">
                <a href="#project" class="nav-item nav-link">Gallery</a>
                <a href="#testimonial" class="nav-item nav-link">Dukungan</a>
                <a href="#team" class="nav-item nav-link">Artikel</a>
                <a href="#contact" class="nav-item nav-link">Ruang Aspirasi</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-light my-6 mt-0 mb-0" id="home">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 py-6 pb-0 pt-lg-0">
                    <h2 class=" mb-0"><b>Caleg DPRD Kabupaten KLATEN</b></h2>
                    <h1 class="display-3 mb-3 txt-hib"><strong>Hibba Al Kanzu, SE.</strong></h1>
                    <h2 class="typed-text-output d-inline"></h2>
                    <div class="typed-text d-none">DAPIL 4 KABUPATEN KLATEN</div>
                    <br>
                    <div>
                        <h5>Juwiring, Wonosari, Delanggu, Ceper</h5>
                    </div>
                    <div class="d-flex align-items-center pt-5">
                        <a href="" class="btn btn-secondary py-1 px-4 me-5 ">
                            <i class="text-dark">
                                Hibba Al Kanzu
                                <p>Nomer Urut</p>
                            </i>
                            <p style="position: relative; display: inline-block;">
                                <span
                                    style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -1%); border-radius: 50%; width: 100px; height: 100px; background-color: white;"></span>
                                <h1 class="display-2" style="position: relative;z-index: 0;margin: -2px;bottom: 15px;">
                                    03</h1>
                            </p>
                        </a>
                        <button type="button" class="btn-play btn-secondary" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="ms-4 mb-0 d-none d-sm-block ">Play Video</h5>
                    </div>
                </div>
                <div class="col-lg-6 .img-hib">
                    <img class="img-hib" src="img/hiba_profil.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-xxl py-6 pb-2" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5 style="margin-left: 32px;">Nomer Urut</h5>
                    <div class="d-flex align-items-center mb-5">
                        <div class="years flex-shrink-0 text-center me-4">
                            <h3 class="display-1 mb-0" style="color: orange;">03</h3>
                        </div>
                        <h3 class="lh-base mb-0"><strong>Siap Berjuang </strong> demi Aspirasi Masyarakat Kabupaten
                            Klaten</h3>
                    </div>
                    <p class="mb-4 mt-1">Hiba Al Kanzu dengan latar belakang sebagai seorang pengusaha, beliau sangat
                        peduli kepada rakyat kecil yang masih hidup
                        dengan gaji dibawah UMR. Motivasi ini yang mendorong Hiba Al Kanzu untuk memperjuangkan
                        permasalahan ini di kantor dewan rakyat.</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="mb-3"><i class="fa fa-circle text-secondary me-3"></i>Berakhlak dan Santun</p>
                            <p class="mb-3"><i class="fa fa-circle text-secondary me-3"></i>Empati Pada Rakyat</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-3"><i class="fa fa-circle text-secondary me-3"></i>Pengabdian pada Rakyat</p>
                            <p class="mb-3"><i class="fa fa-circle text-secondary me-3"></i>Perjuangkan hak rakyat kecil
                                dan UMKM</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <img class="img-fluid rounded" src="img/Panel_1.png" alt="">
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid rounded" src="img/Panel_2.png" alt="">
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <h5 class="border-end pe-3 me-3 mb-0">Program Prioritas</h5>
                        <h2 class="text-secondary fw-bold mb-0" data-toggle="counter-up"><strong>4</strong></h2>
                    </div>
                    <p class="mb-4">Membangun bersama untuk kesejahteraan dan kemajuan Indonesia</p>
                    <div class="d-flex align-items-center mb-3">
                        <h5 class="border-end pe-3 me-3 mb-0">Total Kunjungan</h5>
                        <h2 class="text-secondary fw-bold mb-0" data-toggle="counter-up">2776</h2>
                    </div>
                    <p class="mb-0"></p>
                </div>
            </div>
        </div>
    </div>
    <hr class="mx-auto" width="90%">
    <!-- About End -->

    <!-- visi misi Start -->
    <div class=" container-xxl py-6 pb-2 pt-2" id="skill">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-2">Visi Misi</h1>
                </div>
                <div class="col-lg-6 wow fadeInUp border-end" data-wow-delay="0.1s">
                    <!-- desktop -->
                    <div class="d-md-block d-none">
                        <div class="row align-items-center">
                            <div class="col-3 rounded-3">
                                <img class=" img-fluid rounded" src="img/Visi.png" alt=""
                                    style="width: 90%; max-width: 90px;">
                            </div>
                            <div class="col-1" style="margin: -65px; padding: -65px;">
                            </div>
                            <div class="col-8">
                                <p class=" mb-0">“Turut Membentuk Indonesia yang Adil Makmur dan Sejahtera Setara
                                    Semuanya”
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- akhir desktop -->
                    <!-- mobile -->
                    <div class="d-md-none">
                        <div class="row align-items-center">
                            <div class="col-3 rounded-3">
                                <img class=" img-fluid rounded" src="img/Visi.png" alt=""
                                    style="width: 90%; max-width: 90px;">
                            </div>
                            <div class="col-1" style="margin: -30px; padding: -100px;;">
                            </div>
                            <div class="col-8">
                                <p class=" mb-0">“Turut Membentuk Indonesia yang Adil Makmur dan Sejahtera Setara
                                    Semuanya”
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- akhir mobile -->
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row align-items-center">
                        <!-- dekstop -->
                        <div class="d-md-block d-none">
                            <div class="row align-items-center">
                                <div class="col-3 rounded-3">
                                    <img class=" img-fluid rounded" src="img/Misi.png" alt=""
                                        style="width: 90%; max-width: 90px;">
                                </div>
                                <div class="col-1" style="margin: -65px; padding: -65px;">
                                </div>
                                <div class="col-8">
                                    <p class="mb-1">Membuat Perekonomian Kerakyatan.</p>
                                    <p class="mb-1">Kesehatan Merata Bagi semua rakyat yang ada.</p>
                                    <p class="mb-1">Pendidikan Mudah diakses dari manapun dan oleh siapapun</p>
                                </div>
                            </div>
                        </div>
                        <!-- akhir dekstop -->

                        <!-- mobile -->
                        <div class="d-md-none">
                            <div class="row align-items-center">
                                <div class="col-3 rounded-3">
                                    <img class=" img-fluid rounded" src="img/Misi.png" alt=""
                                        style="width: 90%; max-width: 90px;">
                                </div>
                                <div class="col-1" style="margin: -30px; padding: -100px;">
                                </div>
                                <div class="col-8">
                                    <p class="mb-2">Membuat Perekonomian Kerakyatan.</p>
                                    <p class="mb-2">Kesehatan Merata Bagi semua rakyat yang ada.</p>
                                    <p class="mb-2">Pendidikan Mudah diakses dari manapun dan oleh siapapun</p>
                                </div>
                            </div>
                        </div>
                        <!-- akhir mobile -->
                    </div>
                </div>
            </div>
        </div>
        <!-- visi misi End -->

        <!-- Program kerja -->
        <div class="container-fluid bg-light my-5 py-3" id="service">
            <div class="container">
                <div class="row g-3 mb-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-6">
                        <h1 class="display-5 mb-0">Program Kerja</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mt-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card p-3 bg-ffc448">
                            <div class="d-md-none">
                                <div class="row align-items-center">
                                    <div class="col-4 rounded-5">
                                        <figure class="zoom-effect">
                                            <img src="img/Pendidikan.png" class="card-img-top" alt="GEMA HIDUP">
                                        </figure>
                                    </div>
                                    <div class="col-8">
                                        <h5 class="mt-4 text-black">Pendidikan Unggul</h5>
                                        <i class="text-black">
                                            Program GEMA HIDUP bertujuan untuk memupuk kemandirian dan keberdayaan
                                            generasi
                                            muda
                                            melalui pendidikan.</i>
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-block d-none">
                                <figure class="zoom-effect">
                                    <img src="img/Pendidikan.png" class="card-img-top" alt="GEMA HIDUP">
                                </figure>
                                <h5 class="mt-4 text-black">Pendidikan Unggul</h5>
                                Program GEMA HIDUP bertujuan untuk memupuk kemandirian dan keberdayaan generasi
                                muda
                                melalui pendidikan.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card p-3 bg-ffc448">
                            <div class="d-md-none">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <figure class="zoom-effect">
                                            <img src="img/Kesehatan.png" class="card-img-top"
                                                alt="Sehat Bersama Rakyat (SBR)">
                                        </figure>
                                    </div>
                                    <div class="col-8">
                                        <h6 class="text-black">Kualitas Kesehatan Meningkat</h6>
                                        Program kesehatan masyarakat yang fokus pada pencegahan penyakit dan peningkatan
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-block d-none">
                                <figure class="zoom-effect">
                                    <img src="img/Kesehatan.png" class="card-img-top" alt="Sehat Bersama Rakyat (SBR)">
                                </figure>
                                <h5 class="mt-4 text-black">Kualitas Kesehatan Meningkat</h5>
                                Program kesehatan masyarakat yang fokus pada pencegahan penyakit dan peningkatan
                                kesehatan.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card p-3 bg-ffc448">
                            <div class="d-md-none">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <figure class="zoom-effect">
                                            <img src="img/Pasar.png" class="card-img-top"
                                                alt="PROLINS (Program Lingkungan Sehat)">
                                        </figure>
                                    </div>
                                    <div class="col-8">
                                        <h6 class="text-black">UMKM Berkembang</h6>
                                        PROLINS adalah program yang bertujuan untuk menciptakan lingkungan yang bersih,
                                        sehat
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-block d-none">
                                <figure class="zoom-effect">
                                    <img src="img/Pasar.png" class="card-img-top"
                                        alt="PROLINS (Program Lingkungan Sehat)">
                                </figure>
                                <h5 class="mt-4 text-black">UMKM Berkembang</h5>
                                PROLINS adalah program yang bertujuan untuk menciptakan lingkungan yang bersih, sehat,
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card p-3 bg-ffc448">
                            <div class="d-md-none">
                                <div class="row align-items-center">
                                    <div class="col-4 rounded-3">
                                        <figure class="zoom-effect">
                                            <img src="img/Pertanian.png" class="card-img-top"
                                                alt="UMKM Berdaya Saing (UBS)">
                                        </figure>
                                    </div>
                                    <div class="col-8">
                                        <h6 class="text-black">Pertanian Unggul</h6>
                                        Program yang akan membantu meningkatkan daya saing UMKM melalui pelatihan dan
                                        pemberian
                                        modal usaha
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-block d-none">
                                <figure class="zoom-effect">
                                    <img src="img/Pertanian.png" class="card-img-top" alt="UMKM Berdaya Saing (UBS)">
                                </figure>
                                <h5 class="mt-4 text-black">Pertanian Unggul</h5>
                                Program yang akan membantu meningkatkan daya saing UMKM melalui pelatihan dan pemberian
                                modal
                                usaha,...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- akhir program kerja -->

        <!-- Projects Start -->
        <div class="container-xxl py-3 pt-4" id="project">
            <div class="container">
                <div class="row g-3 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-6">
                        <h1 class="display-5 mb-0">Gallery</h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <ul class="list-inline mx-n3 mb-0" id="portfolio-flters">
                            <li class="mx-3 active" data-filter="*">All Gallery</li>
                            <li class="mx-3" data-filter=".first">Gallery A</li>
                            <li class="mx-3" data-filter=".second">Gallery B</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-4 col-md-6 portfolio-item first">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="img/gallery/1.jpg" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1"
                                    href="img/gallery/1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="img/gallery/2.jpg" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1"
                                    href="img/gallery/2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="img/gallery/3.jpg" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1"
                                    href="img/gallery/3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="img/gallery/4.jpg" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1"
                                    href="img/gallery/4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="img/gallery/5.jpg" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1"
                                    href="img/gallery/5.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="img/gallery/6.jpg" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1"
                                    href="img/gallery/6.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Projects End -->

        <!-- Testimonial Start -->
        <div class="container-fluid bg-light py-3 my-3" id="testimonial">
            <div class="container-fluid py-3">
                <h1 class="display-5 text-start mb-5 wow fadeInUp" data-wow-delay="0.1s">Dukungan</h1>
                <div class="row justify-content-center">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="owl-carousel testimonial-carousel">
                            <div class="row">
                                <div class="col-md-6 testimonial-item">
                                    <div class="card p-3 mb-2 bg-ffc448">
                                        <div class="row">
                                            <div class="col-md-4 mt-4 pl-1 pr-1">
                                                <img class="img-fluid rounded-circle border border-white p-1 mx-auto"
                                                    src="img/fau.jpg" alt="">
                                            </div>
                                            <div class="col-1" style="margin: -45px; padding: -45px;">
                                            </div>
                                            <div class="col-md-7">
                                                <img class="img-fluid mb-2" src="img/Petik.png" alt=""
                                                    style="max-height: 20px; width: auto;">
                                                <p class="fs-9 fst-italic">Kami boleh diberikan janji, tapi bukti harus
                                                    ditepati nggih. Matursuwun.</p>
                                                <h5 class="text-center"><b>"Fauzan"</b></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 testimonial-item">
                                    <div class="card p-3 bg-ffc448">
                                        <div class="row">
                                            <div class="col-md-4 mt-4 pl-1 pr-1">
                                                <img class="img-fluid rounded-circle border border-white p-1 mx-auto"
                                                    src="img/ags.jpg" alt="">
                                            </div>
                                            <div class="col-1" style="margin: -45px; padding: -45px;">
                                            </div>
                                            <div class="col-md-7">
                                                <img class="img-fluid mb-2" src="img/Petik.png" alt=""
                                                    style="max-height: 20px; width: auto;">
                                                <p class="fs-9 fst-italic">Jadi DPRD Yang amanah ya , saya percaya pak
                                                    Hibba bisa memberikan kontribusi baik di tempat kami,</p>
                                                <h5 class="text-center"><b>"Agus"</b></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 testimonial-item">
                                    <div class="card p-3 mb-2 bg-ffc448">
                                        <div class="row">
                                            <div class="col-md-4 mt-4 pl-1 pr-1">
                                                <img class="img-fluid rounded-circle border border-white p-1 mx-auto"
                                                    src="img/testimonial-1.png" alt="">
                                            </div>
                                            <div class="col-1" style="margin: -45px; padding: -45px;">
                                            </div>
                                            <div class="col-md-7">
                                                <img class="img-fluid mb-2" src="img/Petik.png" alt=""
                                                    style="max-height: 20px; width: auto;">
                                                <p class="fs-9 fst-italic">Kami boleh diberikan janji, tapi bukti harus
                                                    ditepati nggih. Matursuwun.</p>
                                                <h5 class="text-center"><b>"Oktadha"</b></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 testimonial-item">
                                    <div class="card p-3 bg-ffc448">
                                        <div class="row">
                                            <div class="col-md-4 mt-4 pl-1 pr-1">
                                                <img class="img-fluid rounded-circle border border-white p-1 mx-auto"
                                                    src="img/umr.jpg" alt="">
                                            </div>
                                            <div class="col-1" style="margin: -45px; padding: -45px;">
                                            </div>
                                            <div class="col-md-7">
                                                <img class="img-fluid mb-2" src="img/Petik.png" alt=""
                                                    style="max-height: 20px; width: auto;">
                                                <p class="fs-9 fst-italic">Semoga dia bisa buktikan janjinya dan bawa
                                                    perubahan positif buat daerah kita.</p>
                                                <h5 class="text-center"><b>"Umar"</b></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 testimonial-item">
                                    <div class="card mb-2 p-3 bg-ffc448">
                                        <div class="row">
                                            <div class="col-md-4 mt-4 pl-1 pr-1">
                                                <img class="img-fluid rounded-circle border border-white p-1 mx-auto"
                                                    src="img/rio.jpg" alt="">
                                            </div>
                                            <div class="col-1" style="margin: -45px; padding: -45px;">
                                            </div>
                                            <div class="col-md-7">
                                                <img class="img-fluid mb-2" src="img/Petik.png" alt=""
                                                    style="max-height: 20px; width: auto;">
                                                <p class="fs-9 fst-italic"> Kami boleh diberikan janji, tapi bukti harus
                                                    ditepati nggih. Matursuwun.</p>
                                                <h5 class="text-center"><b>"Ryo"</b></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 testimonial-item">
                                    <div class="card p-3 bg-ffc448">
                                        <div class="row">
                                            <div class="col-md-4 mt-4 pl-1 pr-1">
                                                <img class="img-fluid rounded-circle border border-white p-1 mx-auto"
                                                    src="img/prs.jpg" alt="">
                                            </div>
                                            <div class="col-1" style="margin: -45px; padding: -45px;">
                                            </div>
                                            <div class="col-md-7">
                                                <img class="img-fluid mb-2" src="img/Petik.png" alt=""
                                                    style="max-height: 20px; width: auto;">
                                                <p class="fs-9 fst-italic">Bismillah bisa memberikan perubahan di tempat
                                                    kami. Lanjutkan Pak. !</p>
                                                <h5 class="text-center"><b>"Prast"</b></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Team Start -->
        <div class="container-xxl py-6 pb-5" id="team">
            <div class="container">
                <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-6">
                        <h1 class="display-5 mb-0">Artikel</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="text-black mb-4" data-aos="fade-up">VIDEO TERBARU</h5>
                        <div class="team-item position-relative mb-3 img-thumbnail img-fluid">
                            <div class="ratio ratio-16x9 fadeInUp" width="640" height="400" data-wow-delay="0.4s">
                                <iframe src="https://www.youtube.com/embed/5_SwYoPl0Ts"
                                    title="Progres pembangunan GKC dari tanah lapang sampai jadi perumahan yang nyaman #rumahsubsidi #jualrumah"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="team-text bg-white rounded-end p-4">
                                <div>
                                    <h5>Griya Kanzu Caruban</h5>
                                    <span>Progres pembangunan GKC dari tanah lapang sampai jadi perumahan yang nyaman
                                        #rumahsubsidi #jualrumah"</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h5 class="text-black mb-4" data-aos="fade-up">BERITA TERBARU</h5>
                        <div class="team-item position-relative mb-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="image-overlay"></div>
                            <div class="image-label">
                                <h5>Rabu, 12 Juli 2023</h5>
                            </div>
                            <img class="img-thumbnail img-fluid"
                                src="https://democaleg43.nyaleg.id/dirmember/00000001/democaleg43/galeri-151-2.jpg"
                                alt="">
                            <a href="artikel2.php">
                                <div class="team-text bg-white rounded-end p-4">
                                    <div>
                                        <h5>Rabu, 12 Juli 2023 10:40 WIB</h5>
                                        <span>Aksi Peduli Lingkungan di Pantai bersama Kaum Muda</span>
                                    </div>
                                    <i class="fa fa-arrow-right fa-2x text-primary"></i>
                                </div>
                            </a>
                        </div>
                        <div class="team-item position-relative wow fadeInUp" data-wow-delay="0.3s">
                            <div class="image-overlay"></div>
                            <div class="image-label">
                                <h5>Rabu, 12 Juli 2023</h5>
                            </div>
                            <img class="img-thumbnail img-fluid"
                                src="https://democaleg43.nyaleg.id/dirmember/00000001/democaleg43/galeri-151-3.jpg"
                                alt="">
                            <a href="artikel1.php">
                                <div class="team-text bg-white rounded-end p-4">
                                    <div>
                                        <h5>Rabu, 12 Juli 2023 10:40 WIB</h5>
                                        <span>Bertani Semangka</span>
                                    </div>
                                    <i class="fa fa-arrow-right fa-2x text-primary"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Contact Start -->
        <div class="container-xxl pb-1" id="contact">
            <div class="container pb-1 py-5">
                <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-6">
                        <h1 class="display-5 mb-0">Ruang Aspirasi</h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <!-- <a class="btn btn-secondary py-3 px-5" href="">Say Hello</a> -->
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-hib" src="img/aspirasi.png" alt="" style="margin: -25px; padding: -25px;">
                    </div>
                    <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <p class="mb-0">Tulis Aspirasimu .</p>
                        <p class="mb-4">Aspirasi anda sangat berarti bagi kami dan Kabupaten klaten .</p>
                        <form id="emailForm" method="post" action="send-email.php">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Nama">
                                        <label for="name">Nama</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" name="subject"
                                            placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message"
                                            name="message" style="height: 100px"></textarea>
                                        <label for="message">Masukkan Aspirasi Anda</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-secondary py-3 px-5" type="submit">Kirim Aspirasi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Map Start -->
        <!-- desktop -->
        <div class="d-md-block d-none">
            <div class="card p-3 mb-3 mt-1 bg-ffc448 rounded-10">
                <div class="row align-items-center p-0 m-0">
                    <div class="col-6">
                        <div class="container-sm p-0 m-0 px-0 wow fadeInUp" data-wow-delay="0.1s">
                            <p class="mb-2">My office:</p>
                            <h3 class="fw-bold">Kec. Juwiring, Wonosari, Delanggu, Ceper</h3>
                            <hr class="w-100">
                            <p class="mb-2">Call me:</p>
                            <h3 class="fw-bold">+62 8767 6789 652</h3>
                            <hr class="w-100">
                            <p class="mb-2">Mail me:</p>
                            <h3 class="fw-bold">hibba@teman-hibba.com</h3>
                        </div>
                    </div>
                    <div class="col-1" style="margin: -3px; padding: -3px;">
                    </div>
                    <div class="col-5 ">
                        <div class="container-sm p-0 m-0 px-0 wow fadeInUp" data-wow-delay="0.1s">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.321183447426!2d110.75041547333399!3d-7.648570075663974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a3f03bc557ac3%3A0x899ae1d2aeff350d!2sGriya%20Kanzu%20Klaten!5e0!3m2!1sid!2sid!4v1693024981386!5m2!1sid!2sid"
                                frameborder="0" style="width: 100%; height: 270px; border:0; border-radius: 15px;"
                                allowfullscreen="" aria-hidden="false" tabindex="0">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- akhir dekstop -->
        <!-- mobile -->
        <div class="d-md-none">
            <div class="card p-3 mb-3 mt-1 bg-ffc448 rounded-10">
                <div class="row align-items-center">
                    <div class="col-12 pt-3">
                        <div class="container-sm p-0 m-0 px-0 wow fadeInUp" data-wow-delay="0.1s">
                            <p class="mb-2">My office:</p>
                            <h3 class="fw-bold">Kec. Juwiring, Wonosari, Delanggu, Ceper</h3>
                            <hr class="w-100">
                            <p class="mb-2">Call me:</p>
                            <h3 class="fw-bold">+62 8767 6789 652</h3>
                            <hr class="w-100">
                            <p class="mb-2">Mail me:</p>
                            <h3 class="fw-bold">hibba@teman-hibba.com</h3>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="container-sm p-0 m-0 px-0 wow fadeInUp" data-wow-delay="0.1s">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.321183447426!2d110.75041547333399!3d-7.648570075663974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a3f03bc557ac3%3A0x899ae1d2aeff350d!2sGriya%20Kanzu%20Klaten!5e0!3m2!1sid!2sid!4v1693024981386!5m2!1sid!2sid"
                                frameborder="0" style="width: 100%; height: 270px; border:0; border-radius: 15px;"
                                allowfullscreen="" aria-hidden="false" tabindex="0">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- akhir mobile -->
        <!-- Map End -->

        <!-- Copyright Start -->
        <div class="container-fluid bg-dark text-white py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom text-secondary" href="#">teman-hibba.com</a>, All Right
                        Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <a class="border-bottom text-secondary"> DAPIL 4 KABUPATEN KLATEN</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>