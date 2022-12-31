@extends('layouts.admin')

@section('title')
    Update Header
@endsection

@section('content')
    <!-- Section Content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Header</h2>
                <p class="dashboard-subtitle">
                    Update Header Content
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
                                <form action="{{ route('update-header', $header->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text"
                                                    class="form-control @error('title') is-invalid @enderror" name="title"
                                                    required placeholder="Title on header" value="{{ $header->title }}" />
                                                @error('title')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Subtitle</label>
                                                <input type="text"
                                                    class="form-control @error('subtitle') is-invalid @enderror"
                                                    name="subtitle" required placeholder="Description on header"
                                                    value="{{ $header->subtitle }}" />
                                                @error('subtitle')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group mb-4">
                                                <label>Text on Button</label>
                                                <input type="text"
                                                    class="form-control @error('button') is-invalid @enderror"
                                                    name="button" required placeholder="Example: FREE CONSULTATION"
                                                    value="{{ $header->button }}" />
                                                @error('button')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group mb-4">
                                                <label>Background</label>
                                                <p>*Note: Dimension 1900x1200 pixel</p>
                                                <img id="image-preview" class="d-block mb-2 img-fluid"
                                                    src="{{ $header->bg_url == null ? '/assets/images/1900x1200_img_7.jpg' : Storage::url($header->bg_url) }}"
                                                    alt="Preview" />
                                                <input type="file"
                                                    class="form-control @error('bg_url') is-invalid @enderror"
                                                    id="bg_url" name="bg_url" onchange="previewImage()" />
                                                @error('bg_url')
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
    <script>
        function previewImage() {
            const bgUrl = document.querySelector('#bg_url')
            const imagePreview = document.querySelector('#image-preview')
            const imageFile = new FileReader()
            imageFile.readAsDataURL(bgUrl.files[0])
            imageFile.onload = (e) => (imagePreview.src = e.target.result)
        }
    </script>
@endpush
