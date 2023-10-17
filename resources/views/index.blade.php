<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Luna Massage</title>

    <!-- Additional CSS Files -->
    {{-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css"> -->
    <link rel="stylesheet" href="assets/css/templatemo-breezed.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="assets/css/testimoni.css">
    <link rel="stylesheet" href="assets/css/table.css">

    <script src="https://kit.fontawesome.com/08b1925417.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            Luna Massage
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                            <li class="scroll-to-section"><a href="#projects">Gallery</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="assets/images/slide-01.jpg" alt="">
                    <div class="text-content">
                        <h3>Welcome Luna Massage</h3>
                        <h5>Feel The Experience of Unforgettable Massage</h5>
                        <a href="#about" class="main-stroked-button">Our Service</a>
                        <a href="https://wa.me/6287761466144/?text=Hey My name is ... I want to book your massage service, i will come at ..."
                            class="main-filled-button">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img-fill">
                    <img src="assets/images/slide-02.jpg" alt="">
                    <div class="text-content">
                        <h3>Welcome Luna Massage</h3>
                        <h5>Try Unforgettable Massage From Home</h5>
                        <a href="https://wa.me/6287761466144/?text=Hey My name is ... I want to book your massage service, i will come at ..."
                            class="main-filled-button">
                            Try our home service
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-down scroll-to-section"><a href="#about"><i class="fa fa-arrow-down"></i></a></div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Layanan Kami</h6>
                            <br>
                            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam dolor culpa vitae omnis
                                veniam sequi eos possimus esse earum incidunt molestias blanditiis, minus iste
                                doloremque
                                iusto eum asperiores facere natus maxime nam reiciendis aperiam. In provident libero
                                dolorem
                                ab!</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-text-content">
                        <h3>Our Service Location:</h3>
                        <ul>
                            <li>Nusa Dua</li>
                            <li>Jimbaran</li>
                            <li>Uluwatu</li>
                            <li>Pecatu</li>
                            <li>Seminyak</li>
                            <li>Canggu</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/features-icon-2.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Balinese Massage</h4>
                            <p>Balinese Massage is a traditional form of massage therapy that originates from Bali, an
                                Indonesian island known for its rich cultural heritage and wellness practices. This type
                                of massage is deeply rooted in Balinese traditional medicine and incorporates various
                                techniques to promote relaxation, relieve stress, and improve overall well-being.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/features-icon-2.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Aromatherapy</h4>
                            <p>Aromatherapy Massage is a form of massage therapy that combines traditional massage
                                techniques with the use of essential oils derived from plants. The practice aims to
                                enhance the overall massage experience by promoting relaxation, emotional well-being,
                                and even physical healing through the inhalation and absorption of aromatic oils.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/features-icon-2.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Deep Tissue Massage</h4>
                            <p>Deep Tissue Massage is a type of massage therapy that focuses on addressing deeper layers
                                of muscles and connective tissue in the body. This massage technique aims to release
                                tension, alleviate chronic pain, and improve mobility by applying firm pressure and slow
                                strokes to targeted areas. It is often sought after by individuals with chronic pain,
                                injuries, or those who prefer a more intense massage experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/features-icon-2.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Pregnant Massage</h4>
                            <p>Prenatal Massage, also known as Pregnancy Massage, is a specialized type of massage
                                therapy designed to support pregnant individuals during their pregnancy journey. It
                                focuses on addressing the unique physical and emotional needs that arise during
                                pregnancy and can help relieve discomfort, reduce stress, and promote overall
                                well-being.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/features-icon-2.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Stone Massage</h4>
                            <p>Stone Massage, also known as Hot Stone Massage, is a therapeutic massage technique that
                                involves the use of heated stones to enhance the massage experience and promote
                                relaxation, stress relief, and overall well-being. This type of massage incorporates
                                both traditional massage techniques and the application of warm or hot stones to the
                                body</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/features-icon-2.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Foot Massage</h4>
                            <p>Foot Massage, also known as Foot Reflexology or Foot Reflex Zone Therapy, is a
                                therapeutic practice that involves applying pressure to specific points on the feet.
                                This type of massage is based on the theory that different areas on the feet correspond
                                to various organs and systems within the body. By stimulating these reflex points, foot
                                massage aims to promote relaxation, balance the body's energy, and support overall
                                well-being.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/features-icon-2.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Body Scrub & Body Polish</h4>
                            <p>Body Scrub and Body Polish are spa treatments that focus on exfoliating and rejuvenating
                                the skin, leaving it smoother, softer, and more radiant. These treatments involve the
                                use of various exfoliating agents and moisturizing products to remove dead skin cells
                                and promote healthy skin renewal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="subscribe">
        <div class="container">
            <div class="row">
                <section id="testim" class="testim">
                    <div class="wrap">
                        <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                        <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                        <ul id="testim-dots" class="dots">
                            @foreach ($data as $d)
                                <li class="dot active"></li>
                            @endforeach
                        </ul>
                        <div id="testim-content" class="cont">
                            {{-- @dd($data) --}}
                            @foreach ($data as $review)
                                <div class="active">
                                    <div class="img"><img src="/{{ $review->img }}" alt=""></div>
                                    <div></div>
                                    <h2>{{ $review->nama }}</h2>
                                    <p>{{ $review->review }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                <!-- Button trigger modal -->
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col col-md-auto">
                            <button type="button" class="btn btn-info " data-bs-toggle="modal"
                                data-bs-target="#exampleModal" style="color: white;">
                                Write a Review
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Review</h1>
                                <button button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row needs-validation" action="/submit" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Name</label>
                                            <input type="Text" name="nama"
                                                class="form-control border @error('nama') 
                                            is-invalid                                        
                                        @enderror"
                                                id="nama" placeholder="Name" style="color: black"
                                                value="{{ old('nama') }}">
                                            @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="review" class="form-label">Your Review</label>
                                            <textarea
                                                class="form-control @error('review')
                                            is-invalid
                                        @enderror"
                                                name="review" id="review" rows="3">{{ old('review') }}</textarea>
                                            @error('review')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="img" class="form-label">Upload Your Image</label>
                                            <input
                                                class="form-control border @error('img')
                                            is-invalid
                                        @enderror"
                                                type="file" name="img" id="img" style="color: black;">
                                            @error('img')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <div class="form-text">
                                                Max Size of image 1 Mb.
                                            </div>
                                        </div>
                                        <input type="hidden" id="status" name="status" value=1>
                                        <div class="col-12">
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    <!-- ***** Projects Area Starts ***** -->
    <section class="section" id="projects">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="section-heading">
                        <h6>Our Gallery</h6>
                        <h2>Some of our Service</h2>
                    </div>
                    <div class="filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".des">Photos</li>
                            <li data-filter=".dev">Videos</li>
                            <!-- <li data-filter=".gra">Graphics</li>
                            <li data-filter=".tsh">Artworks</li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="filters-content">
                        <div class="row grid">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
                                <div class="item">
                                    <a href="assets/images/project-big-item-01.jpg" data-lightbox="image-1"
                                        data-title="Our Projects"><img src="assets/images/project-big-item-01.jpg"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
                                <div class="item">
                                    <a href="assets/images/project-big-item-02.jpg" data-lightbox="image-1"
                                        data-title="Our Projects"><img src="assets/images/project-big-item-02.jpg"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
                                <div class="item">
                                    <a href="assets/images/project-big-item-03.jpg" data-lightbox="image-1"
                                        data-title="Our Projects"><img src="assets/images/project-big-item-03.jpg"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
                                <div class="item">
                                    <a href="assets/images/project-big-item-04.jpg" data-lightbox="image-1"
                                        data-title="Our Projects"><img src="assets/images/project-big-item-04.jpg"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
                                <div class="item">
                                    <a href="assets/images/project-big-item-05.jpg" data-lightbox="image-1"
                                        data-title="Our Projects"><img src="assets/images/project-big-item-05.jpg"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dev">
                                <div class="item">
                                    <a href="assets/images/01.mp4" data-lightbox="image-1"
                                        data-title="Our Projects"><img src="assets/images/project-big-item-06.jpg"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Projects Area Ends ***** -->


    <!-- ***** Contact Us Area Starts ***** -->
    <!-- <section class="section" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Feel free to keep in touch with us!</h2>
                        </div>
                        <ul class="contact-info">
                            <li><img src="assets/images/contact-info-01.png" alt="">010-020-0860</li>
                            <li><img src="assets/images/contact-info-02.png" alt="">info@company.com</li>
                            <li><img src="assets/images/contact-info-03.png" alt="">www.company.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="get">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name *" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="phone" type="text" id="phone" placeholder="Your Phone" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="email" id="email" placeholder="Your Email *" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Send Message Now <i class="fa fa-arrow-right"></i></button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ***** Contact Us Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <div class="left-text-content">
                        <p>Copyright &copy; 2023 all.
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <div class="right-text-content">
                        <ul class="social-icons">
                            <li>
                                <p>Follow Us</p>
                            </li>
                            <li><a rel="nofollow" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a rel="nofollow" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a rel="nofollow" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a rel="nofollow" href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/testimoni.js"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
    <script src="https://use.fontawesome.com/1744f3f671.js"></script>

</body>

</html>
