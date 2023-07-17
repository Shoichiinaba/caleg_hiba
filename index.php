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
                <a href="#service" class="nav-item nav-link">Program Kerja</a>
                <a href="#project" class="nav-item nav-link">Gallery</a>
            </div>
            <a href="index.php" class="navbar-brand bg-secondary py-3 px-4 mx-3 d-none d-lg-block">
                <h2 class="text-primary fw-bold m-0"> <img src="img/golkar.png" rel="icon" type="image/png"
                        style="width: 35px; height: 38px; padding-bottom: 7px;" /> Golkar</h2>
            </a>
            <div class="navbar-nav me-auto py-0">
                <a href="#testimonial" class="nav-item nav-link">Testimoni</a>
                <a href="#skill" class="nav-item nav-link">Visi Misi</a>
                <a href="#team" class="nav-item nav-link">Artikel</a>
                <a href="#contact" class="nav-item nav-link">Dukungan</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-light my-6 mt-0" id="home">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 py-6 pb-0 pt-lg-0">
                    <h1 class=" mb-0"><b>Saya</b></h1>
                    <h1 class="display-3 mb-3"><strong>Hiba</strong> Al Kanzu</h1>
                    <h2 class="typed-text-output d-inline"></h2>
                    <div class="typed-text d-none">Kader DPRD Klaten Dari Partai GOLKAR</div>
                    <div class="d-flex align-items-center pt-5">
                        <a href="" class="btn btn-secondary py-1 px-4 me-5 ">
                            <i class="text-dark">
                                Hiba Al Kanzu
                                <p>Nomer Urut</p>
                            </i>
                            <p style="position: relative; display: inline-block;">
                                <span
                                    style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -1%); border-radius: 50%; width: 100px; height: 100px; background-color: white;"></span>
                                <h1 class="display-2" style="position: relative;z-index: 0;margin: -2px;bottom: 15px;">
                                    04</h1>
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
                    <img class="img-hib" src="img/Hiba1.png" alt="">
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
    <div class="container-xxl py-6" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5 style="margin-left: 32px;">Nomer Urut</h5>
                    <div class="d-flex align-items-center mb-5">
                        <div class="years flex-shrink-0 text-center me-4">
                            <h3 class="display-1 mb-0" style="color: orange;">04</h3>
                        </div>
                        <h3 class="lh-base mb-0"><strong>Siap Berjuang </strong> demi Aspirasi Masyarakat Sukoharjo</h3>
                    </div>
                    <p class="mb-4 mt-1">Hiba Al Kanzu lahir dan besar di Kota Ungaran Kab. Semarang, dengan latar
                        belakang sebagai seorang pengusaha, beliau sangat peduli kepada rakyat kecil yang masih hidup
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
                    <a class="btn btn-secondary mt-3 rounded" href="">Read More</a>
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
                        <h2 class="text-secondary fw-bold mb-0" data-toggle="counter-up"><strong>4404</strong></h2>
                    </div>
                    <p class="mb-4">Membangun bersama untuk kesejahteraan dan kemajuan Indonesia</p>
                    <div class="d-flex align-items-center mb-3">
                        <h5 class="border-end pe-3 me-3 mb-0">Agenda</h5>
                        <h2 class="text-secondary fw-bold mb-0" data-toggle="counter-up">4404</h2>
                    </div>
                    <p class="mb-0"></p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

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
                                    <h6 class="text-black">Sehat Bersama Rakyat</h6>
                                    Program kesehatan masyarakat yang fokus pada pencegahan penyakit dan peningkatan
                                    kesehatan melalui e...
                                </div>
                            </div>
                        </div>
                        <div class="d-md-block d-none">
                            <figure class="zoom-effect">
                                <img src="img/Kesehatan.png" class="card-img-top" alt="Sehat Bersama Rakyat (SBR)">
                            </figure>
                            <h5 class="mt-4 text-black">Sehat Bersama Rakyat</h5>
                            Program kesehatan masyarakat yang fokus pada pencegahan penyakit dan peningkatan
                            kesehatan
                            melalui e...
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
                                    <h6 class="text-black">UMKM Go Nasional</h6>
                                    PROLINS adalah program yang bertujuan untuk menciptakan lingkungan yang bersih,
                                    sehat,
                                    dan nyaman ba...
                                </div>
                            </div>
                        </div>
                        <div class="d-md-block d-none">
                            <figure class="zoom-effect">
                                <img src="img/Pasar.png" class="card-img-top" alt="PROLINS (Program Lingkungan Sehat)">
                            </figure>
                            <h5 class="mt-4 text-black">UMKM Go Nasional</h5>
                            PROLINS adalah program yang bertujuan untuk menciptakan lingkungan yang bersih, sehat,
                            dan
                            nyaman ba...
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
                                    <h6 class="text-black">Pertanian</h6>
                                    Program yang akan membantu meningkatkan daya saing UMKM melalui pelatihan dan
                                    pemberian
                                    modal usaha,...
                                </div>
                            </div>
                        </div>
                        <div class="d-md-block d-none">
                            <figure class="zoom-effect">
                                <img src="img/Pertanian.png" class="card-img-top" alt="UMKM Berdaya Saing (UBS)">
                            </figure>
                            <h5 class="mt-4 text-black">Pertanian</h5>
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
                        <img class="img-fluid" src="img/project-1.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-1.jpg"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/project-2.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-2.jpg"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/project-3.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-3.jpg"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/project-4.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-4.jpg"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/project-5.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-5.jpg"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/project-6.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-6.jpg"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
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
            <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Testimonial</h1>
            <div class="row justify-content-center">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-left h-100">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.1s" src="img/testimonial-1.png" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.3s" src="img/testimonial-2.jpg" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.5s" src="img/testimonial-3.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto"
                                    src="img/testimonial-1.png" alt="">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-5 fst-italic">Aku pilih dia karena dia punya integritas yang ngga diragukan
                                lagi, komitmennya bagus, dan dia juga punya gaya kepemimpinan yang keren. Jadi, semoga
                                ada perubahan yang positif kalau dia jadi wakil kita!</p>
                            <hr class="w-25 mx-auto">
                            <h5>Oktadha</h5>
                            <span>Hebat</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto"
                                    src="img/testimonial-2.jpg" alt="">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-5 fst-italic">Saya mendukung Demo Caleg 43 jadi anggota legislatif karena lihat
                                hasil kerja beliau yang sepertinya mengutamakan kepentingan masyarakat. Semoga dia bisa
                                buktikan janjinya dan bawa perubahan positif buat daerah kita. Saya yakin Demo Caleg 43
                                bisa dipercaya dan diandalkan buat mewakili aspirasi kita sebagai rakyat.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Agus</h5>
                            <span>Mantap</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto"
                                    src="img/testimonial-3.png" alt="">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-5 fst-italic">Abis tau sama Demo Caleg 04 dan liat prestasinya, aku mantep
                                banget dan yakin kalo dia nih caleg yang peduli sama rakyat dan siap berjuang buat kita
                                semua. Aku dukung dia karena yakin kualitas kepemimpinannya oke, komitmen dan
                                integritasnya juga tinggi. Mudah-mudahan bisa bawa perubahan positif buat daerah kita
                                deh!</p>
                            <hr class="w-25 mx-auto">
                            <h5>Sandi</h5>
                            <span>Lanjutkan</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-right h-100">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.1s" src="img/testimonial-1.png" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.3s" src="img/testimonial-2.jpg" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.5s" src="img/testimonial-3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Expertise Start -->
    <div class="container-xxl py-6 pb-5" id="skill">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-5">Visi & Misi</h1>
                    <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum
                        amet diam ipsum clita dolor duo clita sit.</p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <ul class="nav nav-pills rounded border border-2 border-secondary mb-5">
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5 active" data-bs-toggle="pill"
                                href="#tab-1">Visi</button>
                        </li>
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5" data-bs-toggle="pill" href="#tab-2">Misi</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-12">
                                    <h5>VISI </h5>
                                    <hr class="text-primary my-2">
                                    <p class=" mb-0">“MEWUJUDKAN DEWAN PERWAKILAN RAKYAT DAERAH KLATEN SEBAGAI
                                        LEMBAGA LEGISLATIF YANG KUAT, MERAKYAT, DINAMIS DAN TRANSPARAN DALAM
                                        MEMPERJUANGKAN ASPIRASI RAKYAT GUNA MENCAPAI KLATEN MAJU BERBASIS PERTANIAN”
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-12">
                                    <h5>MISI</h5>
                                    <hr class="text-primary my-2">
                                    <P> MENINGKATKAN KUALITAS, KAPABILITAS DAN KAPASITAS ANGGOTA DEWAN PERWAKILAN RAKYAT
                                        DAERAH KOTA KLETEN</p>
                                    <P> MENINGKATKAN OPTIMALISASI FUNGSI LEGISLASI, PENGANGGARAN DAN PENGAWASAN;</p>
                                    <P> MENIGKATKAN PARTISIPASI MASYARAKAT DALAM PENGAMBILAN KEBIJAKAN-KEBIJAKAN PUBLIK;
                                    </p>
                                    <P> MENINGKATKNYA PARTISIPASI DAN PENGAWASAN MASYARAKAT TERHADAP KINERJA DEWAN
                                        PERWAKILAN</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Expertise End -->

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
                            src="https://democaleg43.nyaleg.id/dirmember/00000001/democaleg43/galeri-151-2.jpg" alt="">
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
                            src="https://democaleg43.nyaleg.id/dirmember/00000001/democaleg43/galeri-151-3.jpg" alt="">
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
    <div class="container-xxl pb-5" id="contact">
        <div class="container py-5">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Dukung kami</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-secondary py-3 px-5" href="">Say Hello</a>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-2">My office:</p>
                    <h3 class="fw-bold">Mapagan, Jawa Tengah, indonesia</h3>
                    <hr class="w-100">
                    <p class="mb-2">Call me:</p>
                    <h3 class="fw-bold">+62 8767 6789 652</h3>
                    <hr class="w-100">
                    <p class="mb-2">Mail me:</p>
                    <h3 class="fw-bold">hiba@kanpa.co.id</h3>
                    <hr class="w-100">
                    <p class="mb-2">Follow me:</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-secondary me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-secondary me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-secondary me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-secondary me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-0">Tulis Dukunganmu .</p>
                    <p class="mb-4">Dukungan anda sangat berarti bagi kami dan kota klaten .</p>
                    <form id="emailForm" method="post" action="send-email.php">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama">
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
                                    <label for="message">Masukkan Pesan Dukungan Anda</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-secondary py-3 px-5" type="submit">Kirim Dukungan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Map Start -->
    <div class="container-xxl pt-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container-xxl pt-5 px-0">
            <div class="bg-dark">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.0907201097357!2d110.39826681509645!3d-7.115485094861684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7089a95628a559%3A0x2f5966fe8e2eb5eb!2sPT%20Kanpa%20(%20Kanzu%20Permai%20Abadi%20)!5e0!3m2!1sid!2sid!4v1672375026580!5m2!1sid!2sid"
                    frameborder="0" style="width: 100%; height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </div>
    <!-- Map End -->


    <!-- Copyright Start -->
    <div class="container-fluid bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom text-secondary" href="#">Hiba.kanpa.co.id</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a class="border-bottom text-secondary"> Caleg No 04 Dari Partai Golkar</a>
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