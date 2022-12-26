@extends('layouts.app')

@section('title')
    Home - Alchemist Law Office
@endsection

@section('content')
    <section class="pb_cover_v1 text-left cover-bg-black cover-bg-opacity-4"
        style="background-image: {{ $header->bg_url == null ? 'url(assets/images/1900x1200_img_7.jpg)' : 'url(storage/' . $header->bg_url . ')' }}"
        id="section-home">
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-md-6  order-md-1">

                    <h2 class="heading mb-3">{{ $header->title }}</h2>
                    <div class="sub-heading">
                        <p class="mb-5">{{ $header->subtitle }}</p>
                        <p><a href="#section-contact" role="button"
                                class="btn smoothscroll pb_outline-light btn-xl pb_font-13 p-4 rounded-pill pb_letter-spacing-2">{{ $header->button }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->


    <section class="pb_section pb_section_v1" data-section="about" id="section-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 pr-md-5 pr-sm-0">
                    <h2 class="mt-0 heading-border-top mb-3 font-weight-normal">{{ $about->title }}</h2>
                    <p>{!! $about->desc !!}</p>
                </div>
                <div class="col-lg-7">
                    <div class="images">
                        <iframe width="600" height="450" src="{{ $about->video_url }}" title="Video About Us"
                            frameborder="10"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
                        {{-- <img class="img1 img-fluid" src="assets/images/600x450_img_2.jpg"
                            alt="Images 1"> --}}
                        {{-- <img class="img2" src="assets/images/800x500_img_1.jpg" alt="Images 2"> --}}
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="pb_section bg-light" data-section="our-services" id="section-our-services">
        <div class="container">
            <div class="row justify-content-md-center text-center mb-5">
                <div class="col-lg-7">
                    <h2 class="mt-0 heading-border-top font-weight-normal">Our Services</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                        a large language ocean.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg">

                    <div class="media pb_media_v1 mb-5">
                        <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i
                                class="flaticon flaticon-jury"></i></div>
                        <div class="media-body">
                            <h3 class="mt-0 pb_font-17">Group of Lawyers</h3>
                            <p class="pb_font-14">Far far away, behind the word mountains, far from the countries
                                Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg">
                    <div class="media pb_media_v1 mb-5">
                        <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i
                                class="flaticon flaticon-law"></i></div>
                        <div class="media-body">
                            <h3 class="mt-0 pb_font-17">No One is Above The Law</h3>
                            <p class="pb_font-14">Separated they live in Bookmarksgrove right at the coast of the
                                Semantics, a large language ocean.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="media pb_media_v1 mb-5">
                        <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i
                                class="flaticon flaticon-courthouse"></i></div>
                        <div class="media-body">
                            <h3 class="mt-0 pb_font-17">Hall of Justice</h3>
                            <p class="pb_font-14">It is a paradisematic country, in which roasted parts of sentences
                                fly into your mouth decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col-lg">

                    <div class="media pb_media_v1 mb-5">
                        <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i
                                class="flaticon flaticon-jury"></i></div>
                        <div class="media-body">
                            <h3 class="mt-0 pb_font-17">Family Law</h3>
                            <p class="pb_font-14">Far far away, behind the word mountains, far from the countries
                                Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg">
                    <div class="media pb_media_v1 mb-5">
                        <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i
                                class="flaticon flaticon-courthouse"></i></div>
                        <div class="media-body">
                            <h3 class="mt-0 pb_font-17">No One is Above The Law</h3>
                            <p class="pb_font-14">Separated they live in Bookmarksgrove right at the coast of the
                                Semantics, a large language ocean.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="media pb_media_v1 mb-5">

                        <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i
                                class="flaticon flaticon-law"></i></div>
                        <div class="media-body">
                            <h3 class="mt-0 pb_font-17">Hall of Justice</h3>
                            <p class="pb_font-14">It is a paradisematic country, in which roasted parts of sentences
                                fly into your mouth decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="pb_sm_py_cover text-center cover-bg-black cover-bg-opacity-4"
        style="background-image: url(assets/images/1900x1200_img_3.jpg)">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-md-12">
                    <h2 class="heading mb-3">Free Consultation</h2>
                    <p class="sub-heading mb-5 pb_color-light-opacity-8">Far far away, behind the word mountains, far
                        from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p><a href="#section-contact" role="button"
                            class="btn smoothscroll pb_outline-light p-3 rounded-0 pb_font-13 pb_letter-spacing-2">Get
                            Started</a></p>
                </div>
            </div>

        </div>
    </section> --}}
    <!-- END section -->

    <section class="pb_section" data-section="why-us" id="section-why-us">
        <div class="container">
            <div class="row justify-content-md-center text-center mb-5">
                <div class="col-lg-7">
                    <h2 class="mt-0 heading-border-top font-weight-normal">Why Us</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                        a large language ocean.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="images right">
                        <img class="img1 img-fluid" src="assets/images/600x450_img_2.jpg"
                            alt="free Template by uicookies.com">
                        <img class="img2" src="assets/images/800x500_img_1.jpg" alt="free Template by uicookies.com">
                    </div>
                </div>
                <div class="col-lg-5 pl-md-5 pl-sm-0">
                    <div id="exampleAccordion" class="pb_accordion" data-children=".item">
                        <div class="item">
                            <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion1"
                                aria-expanded="true" aria-controls="exampleAccordion1" class="pb_font-18">Property
                                &amp; Business Law</a>
                            <div id="exampleAccordion1" class="collapse show" role="tabpanel">
                                <p>Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right
                                    at the coast of the Semantics, a large language ocean.</p>
                            </div>
                        </div>
                        <div class="item">
                            <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion2"
                                aria-expanded="false" aria-controls="exampleAccordion2" class="pb_font-18">Famimly
                                Law</a>
                            <div id="exampleAccordion2" class="collapse" role="tabpanel">
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                    into your mouth.</p>
                            </div>
                        </div>
                        <div class="item">
                            <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion3"
                                aria-expanded="false" aria-controls="exampleAccordion3" class="pb_font-18">Commercial
                                Litigation</a>
                            <div id="exampleAccordion3" class="collapse" role="tabpanel">
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic life One day however a small line of blind text by the name of Lorem
                                    Ipsum decided to leave for the far World of Grammar.</p>
                            </div>
                        </div>
                        <div class="item">
                            <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion4"
                                aria-expanded="false" aria-controls="exampleAccordion4" class="pb_font-18">Injury
                                Compensation</a>
                            <div id="exampleAccordion4" class="collapse" role="tabpanel">
                                <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas,
                                    wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.
                                    She packed her seven versalia, put her initial into the belt and made herself on the
                                    way.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="pb_section">
        <div class="multiple-items pb_slide_v1">
            <div>
                <a href="#" class="link-block">
                    <img src="assets/images/1900x1200_img_4.jpg" alt="" class="img-fluid">
                    <div class="slide-text">
                        <h2>Criminal Law</h2>
                        <p>Read More</p>
                    </div>
                </a>
            </div>
            <div>
                <a href="#" class="link-block">
                    <img src="assets/images/1900x1200_img_2.jpg" alt="" class="img-fluid">
                    <div class="slide-text">
                        <h2>Migration Law</h2>
                        <span>Read More</span>
                    </div>
                </a>
            </div>
            <div>
                <a href="#" class="link-block">
                    <img src="assets/images/1900x1200_img_3.jpg" alt="" class="img-fluid">
                    <div class="slide-text">
                        <h2>Civil Rights</h2>
                        <span>Read More</span>
                    </div>
                </a>
            </div>
            <div>
                <a href="#" class="link-block">
                    <img src="assets/images/1900x1200_img_4.jpg" alt="" class="img-fluid">
                    <div class="slide-text">
                        <h2>Property Law</h2>
                        <span>Read More</span>
                    </div>
                </a>
            </div>
            <div>
                <a href="#" class="link-block">
                    <img src="assets/images/1900x1200_img_1.jpg" alt="" class="img-fluid">
                    <div class="slide-text">
                        <h2>Civil Rights</h2>
                        <span>Read More</span>
                    </div>
                </a>
            </div>
            <div>
                <a href="#" class="link-block">
                    <img src="assets/images/1900x1200_img_2.jpg" alt="" class="img-fluid">
                    <div class="slide-text">
                        <h2>State Laws</h2>
                        <span>Read More</span>
                    </div>
                </a>
            </div>
            <div>
                <a href="#" class="link-block">
                    <img src="assets/images/1900x1200_img_3.jpg" alt="" class="img-fluid">
                    <div class="slide-text">
                        <h2>Immigration Laws</h2>
                        <span>Read More</span>
                    </div>
                </a>
            </div>
        </div>

    </section>
    <!-- END section -->


    <section class="pb_section pb_bg-half" data-section="practicing-areas" id="section-practicing-areas">
        <div class="container">
            <div class="row justify-content-md-center text-center mb-5">
                <div class="col-lg-7">
                    <h2 class="mt-0 heading-border-top font-weight-normal">Practicing Areas</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                        a large language ocean.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="single-item pb_slide_v2">
                        <div>
                            <div class="d-lg-flex d-md-block slide_content">
                                <div class="pb_content-media"
                                    style="background-image: url(assets/images/1900x1200_img_4.jpg);"></div>
                                <div class="slide_content-text text-center">
                                    <div class="pb_icon_v1"><i class="flaticon text-primary flaticon-handcuffs"></i>
                                    </div>
                                    <h3 class="font-weight-normal mt-0 mb-4">Criminal Law</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                                        right at the coast of the Semantics, a large language ocean.</p>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary
                                        regelialia. It is a paradisematic country, in which roasted parts of sentences
                                        fly into your mouth.</p>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                        almost unorthographic life One day however a small line of blind text by the
                                        name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="d-lg-flex d-md-block slide_content">
                                <div class="pb_content-media"
                                    style="background-image: url(assets/images/1900x1200_img_2.jpg);"></div>
                                <div class="slide_content-text text-center">
                                    <div class="pb_icon_v1"><i class="flaticon text-primary flaticon-wallet"></i>
                                    </div>
                                    <h3 class="font-weight-normal mt-0 mb-4">Financial Law</h3>
                                    <p>The Big Oxmox advised her not to do so, because there were thousands of bad
                                        Commas, wild Question Marks and devious Semikoli, but the Little Blind Text
                                        didn’t listen. She packed her seven versalia, put her initial into the belt and
                                        made herself on the way.</p>

                                    <p>When she reached the first hills of the Italic Mountains, she had a last view
                                        back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet
                                        Village and the subline of her own road, the Line Lane. Pityful a rethoric
                                        question ran over her cheek, then she continued her way.</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="d-lg-flex d-md-block slide_content">
                                <div class="pb_content-media"
                                    style="background-image: url(assets/images/1900x1200_img_3.jpg);"></div>
                                <div class="slide_content-text text-center">
                                    <div class="pb_icon_v1"><i
                                            class="flaticon text-primary flaticon-computer-security"></i></div>
                                    <h3 class="font-weight-normal mt-0 mb-4">Cyber Crime Law</h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                                        large language ocean.</p>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary
                                        regelialia. And if she hasn’t been rewritten, then they are still using her.</p>
                                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it
                                        came from it would have been rewritten a thousand times and everything that was
                                        left from its origin would be the word "and" and the Little Blind Text should
                                        turn around and return to its own, safe country. But nothing the copy said could
                                        convince her and so it didn’t take long until a few insidious Copy Writers
                                        ambushed her, made her drunk with Longe and Parole and dragged her into their
                                        agency, where they abused her for their.</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="d-lg-flex d-md-block slide_content">
                                <div class="pb_content-media"
                                    style="background-image: url(assets/images/1900x1200_img_4.jpg);"></div>
                                <div class="slide_content-text text-center">
                                    <div class="pb_icon_v1"><i class="flaticon text-primary flaticon-courthouse"></i>
                                    </div>
                                    <h3 class="font-weight-normal mt-0 mb-4">Real Estate Law</h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                                        large language ocean.</p>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary
                                        regelialia. And if she hasn’t been rewritten, then they are still using her.
                                        Original article: Web Designer Notebook | Text from Dummy Text Generator</p>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary
                                        regelialia. And if she hasn’t been rewritten, then they are still using her.</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="d-lg-flex d-md-block slide_content">
                                <div class="pb_content-media"
                                    style="background-image: url(assets/images/1900x1200_img_4.jpg);"></div>
                                <div class="slide_content-text text-center">
                                    <div class="pb_icon_v1"><i class="flaticon text-primary flaticon-jury"></i></div>
                                    <h3 class="font-weight-normal mt-0 mb-4">Family Law</h3>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary
                                        regelialia. It is a paradisematic country, in which roasted parts of sentences
                                        fly into your mouth.</p>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                        almost unorthographic life One day however a small line of blind text by the
                                        name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary
                                        regelialia. And if she hasn’t been rewritten, then they are still using her.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="pb_section bg-light bg-image with-overlay" data-section="attorneys" id="section-attorneys"
        style="background-image: url(assets/images/1900x1200_img_2.jpg)">
        <div class="container">
            <div class="row justify-content-md-center text-center mb-5">
                <div class="col-lg-7">
                    <h2 class="mt-0 heading-border-top light font-weight-normal text-white">Attorneys</h2>
                    <p class="text-white">Far far away, behind the word mountains, far from the countries Vokalia and
                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                        coast of the Semantics, a large language ocean.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="card text-center pb_card_v1 mb-4">
                        <img class="card-img-top rounded-circle w-50 mx-auto" src="assets/images/square_img_5.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title mt-0 mb-2">Richard Wilson</h4>
                            <h6 class="card-subtitle mb-2">Family Lawyer</h6>
                            <p><a href="#">Read Full Bio</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card text-center pb_card_v1 mb-4">
                        <img class="card-img-top rounded-circle w-50 mx-auto" src="assets/images/square_img_5.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title mt-0 mb-2">Steve White</h4>
                            <h6 class="card-subtitle mb-2">Financial Lawyer</h6>
                            <p><a href="#">Read Full Bio</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card text-center pb_card_v1 mb-4">
                        <img class="card-img-top rounded-circle w-50 mx-auto" src="assets/images/square_img_5.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title mt-0 mb-2">Ryan David</h4>
                            <h6 class="card-subtitle mb-2">Business Lawyer</h6>
                            <p><a href="#">Read Full Bio</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb_section" data-section="contact" id="section-contact">
        <div class="container">

            <div class="row justify-content-md-center text-center mb-5">
                <div class="col-lg-7">
                    <h2 class="mt-0 heading-border-top font-weight-normal">Get In Touch</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                        a large language ocean.</p>
                </div>
            </div>


            <div class="row">
                <div class="col-md-8 pr-md-5 pr-sm-0 mb-4">
                    <form action="#">
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control p-3 rounded-0" id="name">
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control p-3 rounded-0" id="email">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea cols="30" rows="10" class="form-control p-3 rounded-0" id="message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn pb_outline-dark pb_font-13 pb_letter-spacing-2 p-3 rounded-0"
                                value="Send Message">
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <ul class="pb_contact_details_v1">
                        <li>
                            <span class="text-uppercase">Email</span>
                            probootstrap@gmail.com
                        </li>
                        <li>
                            <span class="text-uppercase">Phone</span>
                            +30 976 1382 9921
                        </li>
                        <li>
                            <span class="text-uppercase">Fax</span>
                            +30 976 1382 9922
                        </li>
                        <li>
                            <span class="text-uppercase">Address</span>
                            San Francisco, CA <br>
                            4th Floor8 Lower <br>
                            San Francisco street, M1 50F
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- END section -->
@endsection