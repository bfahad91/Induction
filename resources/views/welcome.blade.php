<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{env('APP_NAME','OGRA : Induction')}}</title>
    <link rel="stylesheet" href="{{ asset('css/front/w3.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('css/front/style.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('css/front/animate.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('css/front/menuzord.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('css/front/responsive.css') }}">

    <script type="2069742d15aaf9931ee54bd3-text/javascript">
        BASEPATH = "https://most.gov.pk/"
    </script>

    <script src="https://cdn.tiny.cloud/1/4zccr78cmk4w0klm5rnuh0hjix96l43bkhtq8ctv5qz05451/tinymce/5/tinymce.min.js"
        referrerpolicy="origin" type="2069742d15aaf9931ee54bd3-text/javascript"></script>
    <script async src='/cdn-cgi/challenge-platform/h/b/scripts/invisible.js'></script>
</head>

<body>

    <body class="fade-in one">
        {{-- <header>
            <div class="container">
                <ul class="language-list">
                    <li><a href="https://ogra.org.pk/lang/en">English</a></li>
                    <li><a href="https://ogra.org.pk/lang/ur">اردو</a></li>
                </ul>

            </div>
        </header> --}}
        <nav id="menuzord" class="menuzord menuzord-responsive">
            <ul class="menuzord-menu scrollable">
                <li class="brand">
                    <a href="/"><img style="width: 60%" src="{{ asset('images/most_logo.png') }}" alt="most_logo">
                    </a>
                </li>
                {{-- <li class="home">
                    <a href="/">Home
                    </a>
                </li>


                <li class="contact">
                    <a href="https://most.gov.pk/contact-us">Contact Us <span></span>
                    </a>
                </li> --}}
                <li class="scrollable-fix"></li>
            </ul>
        </nav>
        <article id="inner-banner" class="about">
            <div class="inner-banner-bg"></div>
            <div class="container">
                <h2>Careers/Opportunities</h2>
            </div>
        </article>
        <article id="inner-page">
            <div class="container">
                <aside class="left-side">
                    <h2>Careers/Opportunities</h2>
                    <ul class="left-menu-accor">
                    </ul>
                    <div class="side-quotes">
                        <h2>Quotes</h2>
                        <p><span class="space">&nbsp;</span>
                            We should have a State in which we could live and breathe as free men and which we could
                            develop according to our own lights and culture and where principles of Islamic social
                            justice could find free play -- Muhammad Ali Jinnah (25 Dec 1876 – 11 Sep 1948)
                        </p>
                    </div>
                </aside>
                <section class="inner-content">

                    <div>
                    </div>

                    <div class="content-head">
                        <h2 class="page-content-title">
                            Careers/Opportunities
                        </h2>
                    </div>
                    <div id="about">
                    </div>
                    <div class="content-hold">
                        <ul class="download-list">
                            <div class="global-accordian">
                                <a class="global-accordian-btn price">Application Form</a>
                                <div class="accor-cont-drop">
                                    <ul class="download-list">
                                        @forelse ($ads as $ad)
                                            <li>
                                                <div class="dowload-title">
                                                    <p class="fj-title">{{ $ad->title }}</p>
                                                    <a href="{{ route('front.post.apply', $ad) }}"
                                                        class="job-btn"><span>Apply Now</span></a>
                                                </div>
                                                <a href="{{ $ad->adImg }}" target="blank" class="download-pdf"><img
                                                        src="https://ogra.org.pk/public/assets/front/images/pdf.png"
                                                        alt=""></a>
                                            </li>
                                        @empty

                                        @endforelse

                                        <li>
                                            <div class="dowload-title">
                                                <p class="fj-title">Application Form</p>
                                                {{-- <a href="https://ogra.org.pk/application-form"
                                                    class="job-btn"><span>Apply Now</span></a> --}}
                                            </div>
                                            <a href="https://ogra.org.pk/download/3750" class="download-pdf"><img
                                                    src="https://ogra.org.pk/public/assets/front/images/pdf.png"
                                                    alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </ul>
                        <div class="pagination-hold">
                            <div class="pagination-holder">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 text-left">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="" style="margin-top:340px;" align="center">
                    </div>
                </section>
            </div>
        </article>
        <input type="hidden" id="cart-ajax-token" value="6yreXeKe8CW8KHwLkfOwta8b2jvukFXl7x2n9tPH">
        <footer style="background-color: black">
            <div class="container" style="padding-left: 15%">
                <p style="color:white; ">Copyright © 2011 - 2020 Ministry of Science and Technology, Government of Pakistan.</p>
                <p style="color:white; margin-top: 10px">1-Constitution Avenue, G-5/2 ,Islamabad.</p>
                <p style="color:white; margin-top: 10px">Designed by: COMSATS Software Solutions.</p>
                <br>
                <br><br>
            </div>
        </footer>
    </body>

</html>
<script src="https://ogra.org.pk/public/assets/front/js/jquery-1.11.1.min.js"
type="2069742d15aaf9931ee54bd3-text/javascript"></script>
<script src="https://ogra.org.pk/public/assets/front/js/bjqs-1.3.min.js"
type="2069742d15aaf9931ee54bd3-text/javascript"></script>
<script src="https://ogra.org.pk/public/assets/front/js/menuzord.js" type="2069742d15aaf9931ee54bd3-text/javascript">
</script>
<script src="https://ogra.org.pk/public/assets/front/js/vTicker.js" type="2069742d15aaf9931ee54bd3-text/javascript">
</script>
<script src="https://ogra.org.pk/public/assets/front/js/custom.js" type="2069742d15aaf9931ee54bd3-text/javascript">
</script>
<script type="2069742d15aaf9931ee54bd3-text/javascript">
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 5000); // Change image every 5 seconds
    }
</script>
<script type="2069742d15aaf9931ee54bd3-text/javascript">
    var myIndex2 = 0;
    carousel2();

    function carousel2() {
        var i;
        var x = document.getElementsByClassName("mySlides2");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex2++;
        if (myIndex2 > x.length) {
            myIndex2 = 1
        }
        x[myIndex2 - 1].style.display = "block";
        setTimeout(carousel2, 5000); // Change image every 5 seconds
    }
</script>
</body>

</html>
