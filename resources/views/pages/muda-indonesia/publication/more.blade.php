@extends('layouts.muda-indonesia.app')

@section('title')
    Publication - Alchemist Muda Indonesia
@endsection

@section('content')
    <section class="pb_section_navbar bg-dark">
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
                <div class="card shadow mx-2 mb-4" style="width: 18rem">
                    <img src="{{ asset('assets/images/1900x1200_img_7.jpg') }}" class="card-img-top" alt="Thumbnail" />
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-4">Judul</h5>
                        <p class="card-subtitle">Description</p>
                    </div>
                    <div class="d-flex flex-row justify-content-between mb-3">
                        <div class="p-3 card-subtitle">Jan 20, 2023</div>
                        <a href="#" class="card-link p-2">Read more</a>
                    </div>
                </div>
                <div class="card shadow mx-2 mb-4" style="width: 18rem">
                    <img src="{{ asset('assets/images/1900x1200_img_7.jpg') }}" class="card-img-top" alt="Thumbnail" />
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-4">Judul</h5>
                        <p class="card-subtitle">Description</p>
                    </div>
                    <div class="d-flex flex-row justify-content-between mb-3">
                        <div class="p-3 card-subtitle">Jan 20, 2023</div>
                        <a href="#" class="card-link p-2">Read more</a>
                    </div>
                </div>
                <div class="card shadow mx-2 mb-4" style="width: 18rem">
                    <img src="{{ asset('assets/images/1900x1200_img_7.jpg') }}" class="card-img-top" alt="Thumbnail" />
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-4">Judul</h5>
                        <p class="card-subtitle">Description</p>
                    </div>
                    <div class="d-flex flex-row justify-content-between mb-3">
                        <div class="p-3 card-subtitle">Jan 20, 2023</div>
                        <a href="#" class="card-link p-2">Read more</a>
                    </div>
                </div>
                <div class="card shadow mx-2 mb-4" style="width: 18rem">
                    <img src="{{ asset('assets/images/1900x1200_img_7.jpg') }}" class="card-img-top" alt="Thumbnail" />
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-4">Judul</h5>
                        <p class="card-subtitle">Description</p>
                    </div>
                    <div class="d-flex flex-row justify-content-between mb-3">
                        <div class="p-3 card-subtitle">Jan 20, 2023</div>
                        <a href="#" class="card-link p-2">Read more</a>
                    </div>
                </div>
                <div class="card shadow mx-2 mb-4" style="width: 18rem">
                    <img src="{{ asset('assets/images/1900x1200_img_7.jpg') }}" class="card-img-top" alt="Thumbnail" />
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-4">Judul</h5>
                        <p class="card-subtitle">Description</p>
                    </div>
                    <div class="d-flex flex-row justify-content-between mb-3">
                        <div class="p-3 card-subtitle">Jan 20, 2023</div>
                        <a href="#" class="card-link p-2">Read more</a>
                    </div>
                </div>
                <div class="card shadow mx-2 mb-4" style="width: 18rem">
                    <img src="{{ asset('assets/images/1900x1200_img_7.jpg') }}" class="card-img-top" alt="Thumbnail" />
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-4">Judul</h5>
                        <p class="card-subtitle">Description</p>
                    </div>
                    <div class="d-flex flex-row justify-content-between mb-3">
                        <div class="p-3 card-subtitle">Jan 20, 2023</div>
                        <a href="#" class="card-link p-2">Read more</a>
                    </div>
                </div>

                {{-- @forelse ($publications as $publication)
                    <div class="card shadow mx-2 mb-4" style="width: 18rem">
                        <img src="{{ Storage::url($publication->thumbnail) }}" class="card-img-top" alt="Thumbnail" />
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $publication->title }}</h5>
                            <p class="card-subtitle">{!! Str::limit($publication->content, 150) !!}</p>
                        </div>
                        <div class="d-flex flex-row justify-content-between mb-3">
                            <div class="p-3 card-subtitle">{{ $publication->updated_at->format('M d Y') }}</div>
                            <a href="{{ route('details-publication', $publication->slug) }}" class="card-link p-2">Read more</a>
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
                @endforelse --}}
            </div>
        </div>
    </section>
@endsection
