@extends('layouts.admin')

@section('title')
    Edit List Attorney
@endsection

@section('content')
    <!-- Section Content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Attorney</h2>
                <p class="dashboard-subtitle">
                    Edit "{{ $item->name }}" Attorney
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
                        <form action="{{ route('update-list-attorney', $item->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Name of your Attorney" value="{{ $item->name }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Position</label>
                                                <input type="text" class="form-control" name="position"
                                                    placeholder="Position of your Attorney" value="{{ $item->position }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="desc" id="desc">{!! $item->desc !!}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Image</label>
                                                <p>*Note: Dimension 450x450 pixel</p>
                                                <img id="image-preview" class="d-block mb-2 img-fluid"
                                                    src="{{ Storage::url($item->image_url) }}" alt="Preview" />
                                                <input type="file" class="form-control" id="image_url" name="image_url"
                                                    onchange="previewImage()" />
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
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('desc');
    </script>
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
