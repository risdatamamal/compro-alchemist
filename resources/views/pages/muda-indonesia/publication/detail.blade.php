@extends('layouts.muda-indonesia.app')

@section('title')
    Judul
@endsection

@section('content')
    <section class="pb_section_navbar bg-dark">
    </section>

    <section class="pb_section">
        <div class="container">
            <div class="row justify-content-md-center text-center mb-5">
                <div class="col-lg-7">
                    <h2 class="mt-0 heading-border-top font-weight-normal">{{ $publication->title }}</h2>
                    <p>{{ ucfirst($publication->category) }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <img src="{{ Storage::url($publication->image_url) }}" class="img-fluid" alt="Images" />
                    <h3 class="mt-5">{{ $publication->title }}</h3>
                    <p>{{ $publication->created_at->format('M d, Y') }}</p>
                    @if ($publication->video_url != null)
                        <video controls autoplay class="w-100" name="media">
                            <source src="https://mdbootstrap.com/img/video/animation-intro.mp4" type="video/mp4" />
                        </video>
                    @endif
                    <p>
                        {!! $publication->desc !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
