<?php
/*
Template Name: Home Page
*/

get_header(); 

if ( is_user_logged_in() ) { ?>
    
<style>
    .fixed-header #ast-desktop-header{
        top:32px !important;
    }
</style>
    
<?php  } ?>

<section class="home-banner-part py-5" style="background: radial-gradient(circle, rgba(114,20,140,0.26719191094406514) 15%, rgba(238,34,150,0.17755605660232843) 100%);">
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-12 col-lg-6 my-auto">
                    <h5 class="upper lf-700 t-primary f-n">Mirror Rise</h5>
                    <h1 class="f-2 lf-700 t-secondary">Restart your career  to be more <span class="lf-700 t-primary">Successful<span></h1>
                    <p class="lf-600 t-secondary f-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium orci sit amet mi ullamcorper egestas. Sed non mattis metus. Integer vel lorem tincidunt.</p>

                    <div class="d-flex align-items-center mt-5">
                    <a href="" class="btn get-started-btn-outline py-3 px-5 lf-700 f-6  me-3">Book Now</a>
                    <a href="" class="btn get-started-btn py-3 px-5 lf-700 f-6 ">Contact Me</a>
                    </div>
            </div>

            <div class="col-12 col-lg-6 my-auto">
                <div>
                    <img class="img-fluid " src="<?=get_stylesheet_directory_uri() . '/assets/images/coaching directivo.jpeg'?>" alt="undraw_educator_re_ju47">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- About Us -->
<section class="about-us py-5 reveal">
    <div class="container py-5">
        <div class="row">

            <div class="col-12 col-lg-6 my-auto p-5">
                <div>
                    <img class="img-fluid rounded" src="<?=get_stylesheet_directory_uri() . '/assets/images/aboutus.jpg'?>" alt="undraw_educator_re_ju47">
                </div>
            </div>

            <div class="col-12 col-lg-6 p-5">
                    <h5 class="upper lf-700 t-primary f-n">Mirror Rise</h5>
                    <h3 class="f-3 lf-700 t-secondary">About Us</h3>
                    <p class="lf-600 t-secondary f-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>

                    <div class="d-flex align-items-center mt-5">
                        <a href="" class="btn get-started-btn-outline py-3 px-5 lf-700 f-6  me-3">More about me</a>
                    </div>
            </div>
        </div>
    </div>
</section>

<!-- home-helpful  -->
<section class="home-helpful py-5 reveal" style="background-color:#f9f9f9;">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-2"></div>
            <div class="col-12 col-lg-8 text-center">
                <h3 class="f-3 lf-700 t-secondary">For Whom I B1an Be Helpful</h3>
                <h5 class="upper lf-700 t-primary f-n">OUR OUTSTANDING Features</h5>
            </div>
            <div class="col-12 col-lg-2"></div>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-lg-3">
                <div class="card p-5 d-flex flex-column justify-content-center h-100">
                    <h3 class="lf-700 f-6 t-primary">For Women</h3>
                    <p class="lf-600 f-6 t-secondary">Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus.</p>
                </div>
            </div>

            <div class="col-12 col-lg-3">
                <div class="card p-5 d-flex flex-column justify-content-center h-100">
                    <h3 class="lf-700 f-6 t-primary">For Men</h3>
                    <p class="lf-600 f-6 t-secondary">Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus.</p>
                </div>
            </div>

            <div class="col-12 col-lg-3">
                <div class="card p-5 d-flex flex-column justify-content-center h-100">
                    <h3 class="lf-700 f-6 t-primary">For Couples</h3>
                    <p class="lf-600 f-6 t-secondary">Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus.</p>
                </div>
            </div>

            <div class="col-12 col-lg-3">
                <div class="card p-5 d-flex flex-column justify-content-center h-100">
                    <h3 class="lf-700 f-6 t-primary">For Businessperson</h3>
                    <p class="lf-600 f-6 t-secondary">Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus.</p>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 text-center">
                    <a href="" class="btn get-started-btn-outline py-3 px-5 lf-700 f-6  me-3">Book Now</a>
            </div>
        </div>
    </div>
</section>

<!-- Home Services -->
<section class="home-services py-5 reveal">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-2"></div>
            <div class="col-12 col-lg-8 text-center">
                <h3 class="f-3 lf-700 t-secondary">I Can Help You In Different Situations</h3>
                <h5 class="upper lf-700 t-primary f-n">FOLLOWING SERVICES</h5>
            </div>
            <div class="col-12 col-lg-2"></div>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-lg-1"></div>
            <div class="col-12 col-lg-10">
                <div class="row">
                    <div class="col-12 col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="img-box">
                                <img class='img-fluid h-100 w-100' src="<?=get_stylesheet_directory_uri() . '/assets/images/01.jpg'?>" alt="Confidence coaching">
                            </div>
                            <div class="heading bg-primary-1 p-3 d-flex justify-content-center align-items-center">
                                <h3 class="lf-700 f-6 upper mb-0 text-light">Confidence coaching</h3>
                            </div>
                            <div class="content p-4 d-flex flex-column justify-content-center align-items-center text-center">
                                <p class="lf-600 f-n t-secondary">A lack of self-confidence can hold you back from the quality of life and opportunity you really deserve. It can stop you making positive changes in your life because you are afraid...</p>
                                <a href="" class="btn get-started-btn-outline py-1 px-4 lf-700 f-6 "><span>Read More </span> <span class="ms-2 icon t-primary"><i class="bi bi-arrow-right"></i></span></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="img-box">
                                <img class='img-fluid h-100 w-100' src="<?=get_stylesheet_directory_uri() . '/assets/images/02.jpg'?>" alt="Confidence coaching">
                            </div>
                            <div class="heading bg-primary-1 p-3 d-flex justify-content-center align-items-center">
                                <h3 class="lf-700 f-6 upper mb-0 text-light">Increasing welfare</h3>
                            </div>
                            <div class="content p-4 d-flex flex-column justify-content-center align-items-center text-center">
                                <p class="lf-600 f-n t-secondary">To some extent all arguments here have validity. Benefits can play a role in preventing unnecessary poverty, especially during a recession, when people lose jobs through no fault of their own...</p>
                                <a href="" class="btn get-started-btn-outline py-1 px-4 lf-700 f-6 "><span>Read More </span> <span class="ms-2 icon t-primary"><i class="bi bi-arrow-right"></i></span></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="img-box">
                                <img class='img-fluid h-100 w-100' src="<?=get_stylesheet_directory_uri() . '/assets/images/03.jpg'?>" alt="People and Relationships">
                            </div>
                            <div class="heading bg-primary-1 p-3 d-flex justify-content-center align-items-center">
                                <h3 class="lf-700 f-6 upper mb-0 text-light">People and Relationships</h3>
                            </div>
                            <div class="content p-4 d-flex flex-column justify-content-center align-items-center text-center">
                                <p class="lf-600 f-n t-secondary">We 19re most attracted to people who aren 19t needy. Thus, one of the key elements to being successful and attracting the best people and opportunities is to identify 14and then...</p>
                                <a href="" class="btn get-started-btn-outline py-1 px-4 lf-700 f-6 "><span>Read More </span> <span class="ms-2 icon t-primary"><i class="bi bi-arrow-right"></i></span></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="img-box">
                                <img class='img-fluid h-100 w-100' src="<?=get_stylesheet_directory_uri() . '/assets/images/04.jpg'?>" alt="Mental Care">
                            </div>
                            <div class="heading bg-primary-1 p-3 d-flex justify-content-center align-items-center">
                                <h3 class="lf-700 f-6 upper mb-0 text-light">Mental Care</h3>
                            </div>
                            <div class="content p-4 d-flex flex-column justify-content-center align-items-center text-center">
                                <p class="lf-600 f-n t-secondary">With the growing health and wellness industry, it 19s now very easy to find information on and offline, but much of this is conflicting. While many people will be able to make healthy...</p>
                                <a href="" class="btn get-started-btn-outline py-1 px-4 lf-700 f-6 "><span>Read More </span> <span class="ms-2 icon t-primary"><i class="bi bi-arrow-right"></i></span></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="img-box">
                                <img class='img-fluid h-100 w-100' src="<?=get_stylesheet_directory_uri() . '/assets/images/05.jpg'?>" alt="Physical care">
                            </div>
                            <div class="heading bg-primary-1 p-3 d-flex justify-content-center align-items-center">
                                <h3 class="lf-700 f-6 upper mb-0 text-light">Physical care</h3>
                            </div>
                            <div class="content p-4 d-flex flex-column justify-content-center align-items-center text-center">
                                <p class="lf-600 f-n t-secondary">With the growing health and wellness industry, it 19s now very easy to find information on and offline, but much of this is conflicting. While many people will be able to make healthy...</p>
                                <a href="" class="btn get-started-btn-outline py-1 px-4 lf-700 f-6 "><span>Read More </span> <span class="ms-2 icon t-primary"><i class="bi bi-arrow-right"></i></span></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="img-box">
                                <img class='img-fluid h-100 w-100' src="<?=get_stylesheet_directory_uri() . '/assets/images/06.jpg'?>" alt="Personal Growth">
                            </div>
                            <div class="heading bg-primary-1 p-3 d-flex justify-content-center align-items-center">
                                <h3 class="lf-700 f-6 upper mb-0 text-light">Personal Growth</h3>
                            </div>
                            <div class="content p-4 d-flex flex-column justify-content-center align-items-center text-center">
                                <p class="lf-600 f-n t-secondary">It seems that everyone I meet these days wants to be a life coach. 1cMy passion is to help people find their passion. 1d 1cMy purpose is to help people find their purpose. 1d I hear this at many...</p>
                                <a href="" class="btn get-started-btn-outline py-1 px-4 lf-700 f-6 "><span>Read More </span> <span class="ms-2 icon t-primary"><i class="bi bi-arrow-right"></i></span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-1"></div>
        </div>
       
    </div>
</section>


<!-- benefits -->
 <section class="home-benefits py-5 reveal" style="background-color:#f9f9f9;">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-5 my-auto">
                <h3 class="f-3 lf-700 t-primary upper">life coaching benefits</h3>
                <p class="lf-600 f-6 t-secondary mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium orci sit amet mi ullamcorper egestas. Sed non mattis metus.</p>
                <a href="" class="btn get-started-btn-outline py-3 px-5 lf-700 f-6  mt-2">Learn More</a>
            </div>

            <div class="col-12 col-lg-7">
                <div class="row px-5">
                    <div class="col-12 col-lg-6 ">
                        <div class="card p-3">
                            <div class="icon-text d-flex align-items-center">
                                <span class="icon f-5 t-primary me-2"><i class="bi bi-check-circle-fill"></i></span>
                                <h3 class="lf-700 f-6 upper t-secondary mb-0">Conquer Your Fears</h3>
                            </div>
                            <div class="content mt-3">
                                <p class="lf-600 f-n t-secondary">You need guts in order to make it very far as a solopreneur. So, if you 19re fearful in any way, you 19re going to hold yourself back.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card p-3">
                            <div class="icon-text d-flex align-items-center">
                                <span class="icon f-5 t-primary me-2"><i class="bi bi-check-circle-fill"></i></span>
                                <h3 class="lf-700 f-6 upper t-secondary mb-0">Unbiased Input</h3>
                            </div>
                            <div class="content mt-2">
                                <p class="lf-600 f-n t-secondary">Friends and family can be a great source of support, but sometimes unbiased input can make a big difference to your perspective and help you.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="card p-3">
                            <div class="icon-text d-flex align-items-center">
                                <span class="icon f-5 t-primary me-2"><i class="bi bi-check-circle-fill"></i></span>
                                <h3 class="lf-700 f-6 upper t-secondary mb-0">Personal Development</h3>
                            </div>
                            <div class="content mt-2">
                                <p class="lf-600 f-n t-secondary">Life coaching can be challenging and hard work, though also rewarding and fun. You will be looking at yourself honestly.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="card p-3">
                            <div class="icon-text d-flex align-items-center">
                                <span class="icon f-5 t-primary me-2"><i class="bi bi-check-circle-fill"></i></span>
                                <h3 class="lf-700 f-6 upper t-secondary mb-0">Accountability</h3>
                            </div>
                            <div class="content mt-2">
                                <p class="lf-600 f-n t-secondary">Accountability is a powerful tool for creating change. When engaged in the life coaching process, you will work with me, your coach to create goals.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
 </section>


<!-- Testimonials -->
<section class="home-testimonial py-5 reveal">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-2"></div>
            <div class="col-12 col-lg-8 text-center">
                <h3 class="f-3 lf-700 t-secondary">Testimonials</h3>
                <h5 class="upper lf-700 t-primary f-n">our Awesome clients</h5>
            </div>
            <div class="col-12 col-lg-2"></div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <div class="owl-carousel owl-theme">
                    <div class="item py-4 px-3">
                        <div class="card p-4">
                            <div class="content">
                                <p class="t-secondary lf-600 f-6">Phasellus pretium orci sit amet mi ullamcorper egestas. Sed non mattis metus. Integer vel lorem tincidunt, pharetra eros nec, posuere odio. Nullam eget bibendum sem, venenatis lacinia justo.</p>
                            </div>
                            <div class="author d-flex align-items-center mt-4">
                                <div class="img-box">
                                    <img class="img-fluid me-3" src="<?=get_stylesheet_directory_uri() . '/assets/images/cl-01.jpg'?>" alt="John Doe">
                                </div>
                                <div class="name">
                                    <h3 class="lf-700 f-6 upper t-primary mb-0">John Doe</h3>
                                    <p class="t-secondary lf-600 f-n mb-0">Ceo & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item py-4 px-3">
                        <div class="card p-4">
                            <div class="content">
                                <p class="t-secondary lf-600 f-6">Phasellus pretium orci sit amet mi ullamcorper egestas. Sed non mattis metus. Integer vel lorem tincidunt, pharetra eros nec, posuere odio. Nullam eget bibendum sem, venenatis lacinia justo.</p>
                            </div>
                            <div class="author d-flex align-items-center mt-4">
                                <div class="img-box">
                                    <img class="img-fluid me-3" src="<?=get_stylesheet_directory_uri() . '/assets/images/cl-02.jpg'?>" alt="John Doe">
                                </div>
                                <div class="name">
                                    <h3 class="lf-700 f-6 upper t-primary mb-0">John Doe</h3>
                                    <p class="t-secondary lf-600 f-n mb-0">Ceo & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item py-4 px-3">
                        <div class="card p-4">
                            <div class="content">
                                <p class="t-secondary lf-600 f-6">Phasellus pretium orci sit amet mi ullamcorper egestas. Sed non mattis metus. Integer vel lorem tincidunt, pharetra eros nec, posuere odio. Nullam eget bibendum sem, venenatis lacinia justo.</p>
                            </div>
                            <div class="author d-flex align-items-center mt-4">
                                <div class="img-box">
                                    <img class="img-fluid me-3" src="<?=get_stylesheet_directory_uri() . '/assets/images/cl-04.jpg'?>" alt="John Doe">
                                </div>
                                <div class="name">
                                    <h3 class="lf-700 f-6 upper t-primary mb-0">John Doe</h3>
                                    <p class="t-secondary lf-600 f-n mb-0">Ceo & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item py-4 px-3">
                        <div class="card p-4">
                            <div class="content">
                                <p class="t-secondary lf-600 f-6">Phasellus pretium orci sit amet mi ullamcorper egestas. Sed non mattis metus. Integer vel lorem tincidunt, pharetra eros nec, posuere odio. Nullam eget bibendum sem, venenatis lacinia justo.</p>
                            </div>
                            <div class="author d-flex align-items-center mt-4">
                                <div class="img-box">
                                    <img class="img-fluid me-3" src="<?=get_stylesheet_directory_uri() . '/assets/images/cl-05.jpg'?>" alt="John Doe">
                                </div>
                                <div class="name">
                                    <h3 class="lf-700 f-6 upper t-primary mb-0">John Doe</h3>
                                    <p class="t-secondary lf-600 f-n mb-0">Ceo & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Discover -->
<section class="home-discover py-5 reveal" style="background-color:#f9f9f9;">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-2"></div>
            <div class="col-12 col-lg-8 text-center">
                <h3 class="f-3 lf-700 t-secondary">Discover The Secret Of Happy Life</h3>
                <p class="lf-600 f-6 t-secondary">Nam non euismod ante. Proin consequat sem quis massa rhoncus, vel convallis eros tincidunt.
                Phasellus pretium orci sit amet mi ullamcorper egestas.</p>

                <a href="" class="btn get-started-btn py-3 px-5 mt-5 lf-700 f-6 ">Contact Me</a>
            </div>
            <div class="col-12 col-lg-2"></div>
        </div>
    </div>
</section>

<!-- Blogs -->
<section class="home-blog py-5 reveal">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-2"></div>
            <div class="col-12 col-lg-8 text-center">
                <h3 class="f-3 lf-700 t-secondary">From Our Blog</h3>
                <h5 class="upper lf-700 t-primary f-n">Latest news</h5>
            </div>
            <div class="col-12 col-lg-2"></div>
        </div>

        <div class="row mt-5">
            <div class="col-12 col-lg-6">
                <div class="h-100 w-100 d-flex justify-content-start align-items-end img-box" 
                style="background-image:url(<?=get_stylesheet_directory_uri() . '/assets/images/blog-07.jpg'?>);background-size:cover;">
                    <div class="overlay"></div>
                    <div class="content w-100 h-100 p-4">
                        <div class="h-100 d-flex justify-content-start align-items-end">
                            <div>
                                <div class="category d-flex justify-content-start align-items-center">
                                    <span class="lf-600 f-n t-light me-5"><i class="bi bi-clock"></i>&nbsp; 21 Jan, 2018</span>
                                    <span class="lf-600 f-n t-light me-5"><i class="bi bi-chat"></i>&nbsp; 23 Comments</span>
                                </div>
                                <h3 class="lf-700 f-5 upper t-light mt-1">WHAT'S MY PURPOSE IN LIFE?</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="d-flex align-items-center mb-3">
                    <div class="img-box me-4">
                        <img class="img-fluid" style="width:180px;height:120px;border-radius:10px;" src="<?=get_stylesheet_directory_uri() . '/assets/images/blog-02.jpg'?>" alt="">
                    </div>
                    <div class="content">
                        <div >
                            <div class="category d-flex justify-content-start align-items-center">
                                <span class="lf-600 f-7 t-secondary me-3"><i class="bi bi-clock"></i>&nbsp; 21 Jan, 2018</span>
                                <span class="lf-600 f-7 t-secondary me-3"><i class="bi bi-chat"></i>&nbsp; 23 Comments</span>
                            </div>
                            <h3 class="lf-700 f-n upper t-primary mt-1">MAKE YOUR GOALS INEVITABLE</h3>
                            <p class="lf-600 f-6-5 t-secondary">Pellentesque suscipit tincidunt suscipit. Nullam vestibulum...</p>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <div class="img-box me-4">
                        <img class="img-fluid" style="width:180px;height:120px;border-radius:10px;" src="<?=get_stylesheet_directory_uri() . '/assets/images/blog-03.jpg'?>" alt="">
                    </div>
                    <div class="content">
                        <div >
                            <div class="category d-flex justify-content-start align-items-center">
                                <span class="lf-600 f-7 t-secondary me-3"><i class="bi bi-clock"></i>&nbsp; 21 Jan, 2018</span>
                                <span class="lf-600 f-7 t-secondary me-3"><i class="bi bi-chat"></i>&nbsp; 23 Comments</span>
                            </div>
                            <h3 class="lf-700 f-n upper t-primary mt-1">LIVE THE LIFE YOU IMAGINED</h3>
                            <p class="lf-600 f-6-5 t-secondary">Pellentesque suscipit tincidunt suscipit. Nullam vestibulum...</p>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <div class="img-box me-4">
                        <img class="img-fluid" style="width:180px;height:120px;border-radius:10px;" src="<?=get_stylesheet_directory_uri() . '/assets/images/blog-04.jpg'?>" alt="">
                    </div>
                    <div class="content">
                        <div >
                            <div class="category d-flex justify-content-start align-items-center">
                                <span class="lf-600 f-7 t-secondary me-3"><i class="bi bi-clock"></i>&nbsp; 21 Jan, 2018</span>
                                <span class="lf-600 f-7 t-secondary me-3"><i class="bi bi-chat"></i>&nbsp; 23 Comments</span>
                            </div>
                            <h3 class="lf-700 f-n upper t-primary mt-1">YOUR GUIDE TO MOVING BEYOND 1cI CAN 19T 1d</h3>
                            <p class="lf-600 f-6-5 t-secondary">Pellentesque suscipit tincidunt suscipit. Nullam vestibulum...</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
