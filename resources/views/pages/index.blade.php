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

    <section class="pb_section pb_section_v1" data-section="about" id="section-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 pr-md-5 pr-sm-0">
                    <h2 class="mt-0 heading-border-top mb-3 font-weight-normal">{{ $about->title }}</h2>
                    <p>{!! $about->desc !!}</p>
                </div>
                <div class="col-lg-7">
                    <div class="images right">
                        <img class="img1 img-fluid"
                            src="{{ $about->image_url == null ? 'assets/images/600x450_img_2.jpg' : 'storage/' . $about->image_url }}"
                            alt="Images 1">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="pb_section bg-light" data-section="our-service" id="section-our-service">
        <div class="container">
            <div class="row justify-content-md-center text-center mb-5">
                <div class="col-lg-7">
                    <h2 class="mt-0 heading-border-top font-weight-normal">{{ $ourService->title }}</h2>
                    <p>{!! $ourService->desc !!}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="images right">
                        <img class="img1 img-fluid"
                            src="{{ $ourService->image_url == null ? 'assets/images/600x450_img_2.jpg' : 'storage/' . $ourService->image_url }}"
                            alt="Images Our Service">
                    </div>
                </div>
                <div class="col-lg-5 pl-md-5 pl-sm-0">
                    <div id="exampleAccordion" class="pb_accordion" data-children=".item">
                        @forelse ($listOurService as $ourService)
                            <div class="item">
                                <a data-toggle="collapse" data-parent="#exampleAccordion"
                                    href="#exampleAccordion{{ $ourService->id }}" aria-expanded="true"
                                    aria-controls="exampleAccordion{{ $ourService->id }}"
                                    class="pb_font-18">{{ $ourService->title }}</a>
                                <div id="exampleAccordion{{ $ourService->id }}"
                                    class="collapse {{ $ourService->id == 1 ? 'show' : '' }}" role="tabpanel">
                                    <p>{!! $ourService->desc !!}</p>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                                No List Our Service Found
                            </div>
                        @endforelse
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="pb_section" data-section="experiences" id="section-experiences">
        <div class="container">
            <div class="row justify-content-md-center text-center mb-5">
                <div class="col-lg-7">
                    <h2 class="mt-0 heading-border-top font-weight-normal">{{ $experience->title }}</h2>
                    <p>{!! $experience->desc !!}</p>
                </div>
            </div>
            <div class="multiple-items pb_slide_v1">
                @forelse ($listExperiences as $experience)
                    <div>
                        <a href="{{ $experience->link }}" class="link-block">
                            <img src="{{ Storage::url($experience->image_url) }}" alt="Experiences" class="img-fluid">
                            <div class="slide-text">
                                <h2>{{ $experience->name }}</h2>
                                <p>Read More</p>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                        No List Experience Found
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="pb_section pb_bg-half" data-section="practicing-areas" id="section-practicing-areas">
        <div class="container">
            <div class="row justify-content-md-center text-center mb-5">
                <div class="col-lg-7">
                    <h2 class="mt-0 heading-border-top font-weight-normal">{{ $practicingarea->title }}</h2>
                    <p>{!! $practicingarea->desc !!}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="single-item pb_slide_v2">
                        {{-- Forelse --}}
                        @forelse ($listPracticingArea as $listPracticing)
                            <div>
                                <div class="d-lg-flex d-md-block slide_content">
                                    <div class="pb_content-media"
                                        style="background-image: url({{ Storage::url($listPracticing->image_url) }});">
                                    </div>
                                    <div class="slide_content-text text-center">
                                        <h3 class="font-weight-normal mt-0 mb-4">{{ $listPracticing->title }}</h3>
                                        <p>{!! $listPracticing->desc !!}</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                                No List Practicing Area Found
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb_section bg-light" data-section="attorneys" id="section-attorneys">
        <div class="container">
            <div class="row justify-content-md-center text-center mb-5">
                <div class="col-lg-7">
                    <h2 class="mt-0 heading-border-top light font-weight-normal">{{ $attorneys->title }}</h2>
                    <p>{!! $attorneys->desc !!}</p>
                </div>
            </div>
            <div class="multiple-items pb_slide_v1">
                {{-- Forelse --}}
                @forelse ($listAttorney as $attorney)
                    <div class="col-md">
                        <div class="card text-center pb_card_v1 mb-4">
                            <img class="card-img-top rounded-circle w-50 mx-auto"
                                src="{{ Storage::url($attorney->image_url) }}" alt="Attorney Image">
                            <div class="card-body">
                                <h4 class="card-title mt-0 mb-2">{{ $attorney->name }}</h4>
                                <h6 class="card-subtitle mb-2">{{ $attorney->position }}</h6>
                                <p><a href="#">Read Full Bio</a></p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                        No List Attorney Found
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="pb_section" data-section="contact" id="section-contact">
        <div class="container">
            <div class="row justify-content-md-center text-center mb-5">
                <div class="col-lg-7">
                    <h2 class="mt-0 heading-border-top font-weight-normal">{{ $contacts->title }}</h2>
                    <p>{!! $contacts->desc !!}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg">
                    <div class="media pb_media_v1 mb-5">
                        <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="mt-0 pb_font-17">Email</h3>
                            <a class="text-dark" href="mailto:{{ $contacts->email }}">
                                <p class="pb_font-14">{{ $contacts->email }}</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="media pb_media_v1 mb-5">
                        <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="mt-0 pb_font-17">Phone</h3>
                            <a class="text-dark" href="tel:+{{ $contacts->phone }}">
                                <p class="pb_font-14">+{{ $contacts->phone }}</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="media pb_media_v1 mb-5">
                        <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary">
                            <i class="fa fa-whatsapp"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="mt-0 pb_font-17">Whatsapp</h3>
                            <a class="text-dark" href="https://wa.me/+{{ $contacts->whatsapp }}">
                                <p class="pb_font-14">+{{ $contacts->whatsapp }}</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="media pb_media_v1 mb-5">
                        <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="mt-0 pb_font-17">Address</h3>
                            <p class="pb_font-14">{!! $contacts->address !!}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
