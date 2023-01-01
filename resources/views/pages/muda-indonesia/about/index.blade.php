@extends('layouts.muda-indonesia.admin')

@section('title')
    Update About
@endsection

@section('content')
    <!-- Section Content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">About</h2>
                <p class="dashboard-subtitle">
                    Update About Content
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('update-about-muda-indonesia', $about->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text"
                                                    class="form-control @error('title') is-invalid @enderror" name="title"
                                                    required placeholder="Title on header" value="{{ $about->title }}" />
                                                @error('title')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea type="text" class="form-control @error('desc') is-invalid @enderror" id="desc" name="desc"
                                                    value="{{ old('desc') }}" required>{!! $about->desc !!}</textarea>
                                                @error('desc')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group mb-4">
                                                <label>Image</label>
                                                <p>*Note: Dimension 600x450 pixel</p>
                                                <img id="image-preview" class="d-block mb-2 img-fluid"
                                                    src="{{ $about->image_url == null ? '/assets/images/600x450_img_2.jpg' : Storage::url($about->image_url) }}"
                                                    alt="Preview" />
                                                <input type="file"
                                                    class="form-control @error('image_url') is-invalid @enderror"
                                                    id="image_url" name="image_url" onchange="previewImage()" />
                                                @error('image_url')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-right">
                                            <button type="submit" class="btn btn-success px-5">
                                                Save Now
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('desc');
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
    @push('addon-script')
        <script>
            function previewImage() {
                const imageUrl = document.querySelector('#image_url')
                const imagePreview = document.querySelector('#image-preview')
                const imageFile = new FileReader()
                imageFile.readAsDataURL(imageUrl.files[0])
                imageFile.onload = (e) => (imagePreview.src = e.target.result)
            }
        </script>
    @endpush
@endpush
