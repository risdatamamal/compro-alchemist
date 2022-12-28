@extends('layouts.admin')

@section('title')
    Edit List Client
@endsection

@section('content')
    <!-- Section Content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Client</h2>
                <p class="dashboard-subtitle">
                    Edit "{{ $item->name }}" Client
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
                        <form action="{{ route('update-client', $item->id) }}" method="POST"
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
                                                    placeholder="Name of your Client" value="{{ $item->name }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Link</label>
                                                <input type="text" class="form-control" name="link"
                                                    placeholder="https://www.yourclient.com" value="{{ $item->link }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Icon</label>
                                                <p>*Note: Dimension 1900x1200 pixel</p>
                                                <img id="image-preview" class="d-block mb-2 img-fluid" src="{{ Storage::url($item->image_url) }}"
                                                    alt="Preview" />
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
