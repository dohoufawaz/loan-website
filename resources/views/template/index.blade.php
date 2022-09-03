@extends('layouts.main')

@section('content')
<main>
    
    <!-- slider Area Start-->
    <div class="slider-area slider-height" data-background="assets/img/hero/h1_hero.jpg">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="container py-sm-5 ">
        @if(session('status'))
        <div class="alert alert-success " role="alert">
            {{ session('status') }}
        </div>
        @endif
    </div>
            <!-- Single Slider -->
            <div class="single-slider">
                <div class="slider-cap-wrapper">
                    <div class="hero__caption">
                        <p data-animation="fadeInLeft" data-delay=".2s">Achieve your financial goal</p>
                        <h1 data-animation="fadeInLeft" data-delay=".5s">Small Business Loans For Daily Expenses.</h1>
                        <!-- Hero Btn -->
                        <a href="{{route('apply')}}" class="btn hero-btn" data-animation="fadeInLeft" data-delay=".8s">Apply for Loan</a>
                    </div>
                    <div class="hero__img">
                        <img src="assets/img/hero/hero_img2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- slider-footer Start -->
        <div class="slider-footer section-bg d-none d-sm-block">
            <div class="footer-wrapper">
                <!-- single -->
                <div class="single-caption">
                    <div class="single-img">
                        <img src="assets/img/hero/hero_footer.png" alt="">
                    </div>
                </div>
                <!-- single -->
                <div class="single-caption">
                    <div class="caption-icon">
                        <span class="flaticon-clock"></span>
                    </div>
                    <div class="caption">
                        <p>Quick & Easy Loan</p>
                        <p>Approvals</p>
                    </div>
                </div>
                <!-- single -->
                <div class="single-caption">
                    <div class="caption-icon">
                        <span class="flaticon-like"></span>
                    </div>
                    <div class="caption">
                        <p>Quick & Easy Loan</p>
                        <p>Approvals</p>
                    </div>
                </div>
                <!-- single -->
                <div class="single-caption">
                    <div class="caption-icon">
                        <span class="flaticon-money"></span>
                    </div>
                    <div class="caption">
                        <p>Quick & Easy Loan</p>
                        <p>Approvals</p>
                    </div>
                </div>
              
            </div>
        </div>
        <!-- slider-footer End -->

    </div>
    <!-- slider Area End-->
    <!-- About Law Start-->
    <div class="about-low-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <span>About Our Company</span>
                            <h2>Building a Brighter financial Future & Good Support.</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, oeiusmod tempor incididunt ut labore et dolore magna aliqua. Ut eniminixm, quis nostrud exercitation ullamco laboris nisi ut aliquip exeaoauat. Duis aute irure dolor in reprehe.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, oeiusmod tempor incididunt ut labore et dolore magna aliq.</p>
                        <a href="{{route('apply')}}" class="btn">Apply for Loan</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <div class="about-font-img d-none d-lg-block">
                            <img src="assets/img/gallery/about2.png" alt="">
                        </div>
                        <div class="about-back-img ">
                            <img src="assets/img/gallery/about1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Law End-->
    <!-- Services Area Start -->
    <div class="services-area pt-150 pb-150" data-background="assets/img/gallery/section_bg02.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <span>Services that we are providing</span>
                        <h2>High Performance Services For All Industries.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-work"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Business Loan</a></h5>
                            <p>Consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-loan"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Commercial Loans</a></h5>
                            <p>Consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-loan-1"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Construction Loans</a></h5>
                            <p>Consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-like"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Business Loan</a></h5>
                            <p>Consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore</p>
                        </div>
                    </div>
                </div>

             </div>
        </div>
    </div>
    <!-- Services Area End -->
    <!-- Support Company Start-->
    <div class="support-company-area section-padding3 fix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="support-location-img mb-50">
                        <img src="assets/img/gallery/single2.jpg" alt="">
                        <div class="support-img-cap">
                            <span>Since 1992</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="right-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle">
                            <span>Why Choose Our Company</span>
                            <h2>We Promise Sustainable  Future For You.</h2>
                        </div>
                        <div class="support-caption">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                            <div class="select-suport-items">
                                <label class="single-items">Aorem ipsum dgolor sitnfd amet dfgbn fbsdg
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="single-items">Consectetur adipisicing bfnelit, sedb dvbnfo
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="single-items">Eiusmod tempor incididunt vmgldupout labore
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="single-items">Admkde mibvnim veniam, quivds cnostrud.
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Support Company End-->
    <!-- Application Area Start -->
  
    <!-- Application Area End -->
    <!--Team Ara Start -->
    <div class="team-area section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <span>Our Loan Section Team Mambers</span>
                        <h2>Take a look to our professional team members.</h2>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="assets/img/gallery/home_blog1.png" alt="">
                            <!-- Blog Social -->
                            <div class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                            </div>
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">Bruce Roberts</a></h3>
                            <p>Volunteer leader</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="assets/img/gallery/home_blog2.png" alt="">
                            <!-- Blog Social -->
                            <div class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                            </div>
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">Bruce Roberts</a></h3>
                            <p>Volunteer leader</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="assets/img/gallery/home_blog3.png" alt="">
                            <!-- Blog Social -->
                            <div class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                            </div>
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">Bruce Roberts</a></h3>
                            <p>Volunteer leader</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="assets/img/gallery/home_blog4.png" alt="">
                            <!-- Blog Social -->
                            <div class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                            </div>
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">Bruce Roberts</a></h3>
                            <p>Volunteer leader</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Ara End -->
    <!-- Testimonial Start -->
    <div class="testimonial-area t-bg testimonial-padding">
        <div class="container ">
           <div class="row d-flex justify-content-center">
                <div class="col-xl-11 col-lg-11 col-md-9">
                    <div class="h1-testimonial-active">
                        <!-- Single Testimonial -->
                       
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                             <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <img src="assets/img/gallery/testimonial.png" alt="">
                                    <p>Logisti Group is a representative logistics operator providing full range of ser
                                        of customs clearance and transportation worl.</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <img src="assets/img/testmonial/Homepage_testi.png" alt="">
                                    </div>
                                   <div class="founder-text">
                                        <span>Jessya Inn</span>
                                        <p>Co Founder</p>
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
    <!-- Blog Ara Start -->
    <div class="home-blog-area section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <span>News form our latest blog</span>
                        <h2>News from around the world selected by us.</h2>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <!-- single-david -->
                    <div class="single-blogs mb-30">
                        <div class="blog-images">
                            <img src="assets/img/gallery/blog1.png" alt="">
                        </div>
                        <div class="blog-captions">
                            <span>January 28, 2020</span>
                            <h2><a href="blog_details.html">The advent of pesticides brought 
                                in its benefits and pitfalls.</a></h2>
                            <p>October 6, a2020by Steve</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <!-- single-david -->
                    <div class="single-blogs mb-30">
                        <div class="blog-images">
                            <img src="assets/img/gallery/blog2.png" alt="">
                        </div>
                        <div class="blog-captions">
                            <span>January 28, 2020</span>
                            <h2><a href="blog_details.html">The advent of pesticides brought 
                                in its benefits and pitfalls.</a></h2>
                            <p>October 6, a2020by Steve</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Ara End -->

</main>
@endsection