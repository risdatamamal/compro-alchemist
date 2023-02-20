@extends('layouts.app')

@section('title')
    Alchemist Law Office
@endsection

@section('content')
    <section class="pb_cover_v1 text-left cover-bg-black cover-bg-opacity-4"
        style="background-image: {{ $header->bg_url == null ? 'url(' . asset('assets/images/1900x1200_img_7.jpg') . ')' : 'url(storage/' . $header->bg_url . ')' }}"
        id="section-home">
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-md-6  order-md-1">
                    <h2 class="heading mb-3">{{ $header->title }}</h2>
                    <p class="my-5 text-white">{{ $header->subtitle }}</p>
                    <p>
                        <a href="#section-contact" role="button"
                            class="btn smoothscroll pb_outline-light btn-xl pb_font-13 p-4 rounded-pill pb_letter-spacing-2">{{ $header->button }}</a>
                    </p>
                    {{-- <div class="sub-heading">

                    </div> --}}
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
                    <div class="images left">
                        <img class="img1 img-fluid"
                            src="{{ $about->image_url == null ? 'assets/images/600x450_img_2.jpg' : 'storage/' . $about->image_url }}"
                            alt="Images 1">
                        <img class="img2" src="assets/images/800x500_img_1.jpg" alt="Images 2">
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
                        <img class="img2" src="assets/images/800x500_img_1.jpg" alt="Images 2">
                    </div>
                </div>
                <div class="col-lg-5 pl-md-5 pl-sm-0">
                    <div id="exampleAccordion" class="pb_accordion" data-children=".item">
                        @forelse ($listOurService as $ourListService)
                            <div class="item">
                                <a data-toggle="collapse" data-parent="#exampleAccordion"
                                    href="#exampleAccordion{{ $ourListService->id }}" aria-expanded="true"
                                    aria-controls="exampleAccordion{{ $ourListService->id }}"
                                    class="pb_font-18">{{ $ourListService->title }}</a>
                                <div id="exampleAccordion{{ $ourListService->id }}"
                                    class="collapse {{ $ourListService->id == 1 ? 'show' : '' }}" role="tabpanel">
                                    <p>{!! $ourListService->desc !!}</p>
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
        </div>
        <div class="multiple-items pb_slide_v1">
            @forelse ($listExperiences as $experience)
                <div>
                    <a type="button" class="link-block" data-toggle="modal"
                        data-target="#modalExperience{{ $experience->id }}">
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
        @foreach ($listExperiences as $experience)
            <!-- Modal -->
            <div class="modal fade" id="modalExperience{{ $experience->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Detail Experience</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <h4>{{ $experience->name }}</h4>
                            {!! $experience->desc !!}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
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
                    <h2 class="mt-0 heading-border-top font-weight-normal">{{ $attorney->title }}</h2>
                    <p>{!! $attorney->desc !!}</p>
                </div>
            </div>
            <div class="multiple-items pb_slide_v2">
                {{-- Forelse --}}
                @forelse ($listAttorney as $attorney)
                    <div class="col-md">
                        <div class="card text-center pb_card_v1 mb-4">
                            <img class="card-img-top rounded-circle w-50 mx-auto"
                                src="{{ Storage::url($attorney->image_url) }}" alt="Attorney Image">
                            <div class="card-body">
                                <h4 class="card-title mt-0 mb-2">{{ $attorney->name }}</h4>
                                <h6 class="card-subtitle mb-2">{{ $attorney->position }}</h6>
                                <!-- Button trigger modal -->
                                <p><button type="button" class="btn btn-link" data-toggle="modal"
                                        data-target="#modalAttorney{{ $attorney->id }}">
                                        Read Full Bio
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                        No List Attorney Found
                    </div>
                @endforelse
            </div>
            @foreach ($listAttorney as $attorney)
                <!-- Modal -->
                <div class="modal fade" id="modalAttorney{{ $attorney->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Detail Attorney</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <img class="card-img-top rounded-circle w-50 mx-auto mt-4"
                                src="{{ Storage::url($attorney->image_url) }}" alt="Attorney Image">
                            <div class="modal-body text-center">
                                <h4>{{ $attorney->name }}</h4>
                                <h6>{{ $attorney->position }}</h6>
                                {!! $attorney->desc !!}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="pb_section publication" data-section="publication" id="section-publication">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-md-center text-center mb-5">
                <div class="col-lg-7">
                    <h2 class="mt-0 heading-border-top font-weight-normal">{{ $publication->title }}</h2>
                    <p>{!! $publication->desc !!}</p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 justify-content-center gap-5 mb-5">
                @forelse ($listPublication as $publication)
                    <div class="card shadow mx-2 mb-4" style="width: 18rem">
                        <img src="{{ Storage::url($publication->image_url) }}" class="card-img-top" alt="Thumbnail" />
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $publication->title }}</h5>
                            <p class="card-subtitle">{!! Str::limit($publication->desc, 150) !!}</p>
                        </div>
                        <div class="d-flex flex-row justify-content-between mb-3">
                            <div class="p-3 card-subtitle">{{ $publication->created_at->format('M d, Y') }}</div>
                            <a href="{{ route('detail-publication', [$publication->category, $publication->slug]) }}" class="card-link p-2">Read more</a>
                        </div>
                    </div>
                @empty
                    <div class="container">
                        <div class="row justify-content-center mt-5">
                            <div class="card o-hidden border-0 shadow-lg my-5 p-2" style="border-radius: 20px;">
                                <div class="card-body">
                                    <div class="mb-1 text-center">
                                        <h3>{{ __('No publications available!') }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
            @if (count($listPublication) >= 6)
                <div class="d-flex flex-row justify-content-center mb-3">
                    <a href="{{ route('more-publication') }}" class="btn btn-primary rounded-pill">
                        See more <i class="fa fa-arrow-down"></i>
                    </a>
                </div>
            @endif
        </div>
    </section>

    <section class="pb_section" data-section="contact" id="section-contact">
        <div class="container">
            <div class="row justify-content-md-center text-center mb-5">
                <div class="col-lg-7">
                    <h2 class="mt-0 heading-border-top font-weight-normal">{{ $contact->title }}</h2>
                    <p>{!! $contact->desc !!}</p>
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
                            <a class="text-dark" href="mailto:{{ $contact->email }}">
                                <p class="pb_font-14">{{ $contact->email }}</p>
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
                            <a class="text-dark" href="tel:+{{ $contact->phone }}">
                                <p class="pb_font-14">+{{ $contact->phone }}</p>
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
                            <a class="text-dark" href="https://wa.me/+{{ $contact->whatsapp }}">
                                <p class="pb_font-14">+{{ $contact->whatsapp }}</p>
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
                            <p class="pb_font-14">{!! $contact->address !!}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
