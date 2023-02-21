@extends('layouts.admin')

@section('title')
    Create List Publication
@endsection

@section('content')
    <!-- Section Content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Publication</h2>
                <p class="dashboard-subtitle">Create New List Publication</p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-12">
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
                                <form action="{{ route('store-publication') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control" name="title"
                                                    placeholder="Title of your Publication" required />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="desc" id="desc"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select name="category" class="select2 form-control" required>
                                                    <option selected disabled>Select Category</option>
                                                    <option value="article"
                                                        {{ old('category') == 'article' ? 'selected' : '' }}>Article
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Image</label>
                                                <p>*Note: Dimension 1080x1080 pixel</p>
                                                <img id="image-preview" class="d-block mb-2 img-fluid" src="#"
                                                    alt="Preview" />
                                                <input type="file" class="form-control" id="image_url" name="image_url"
                                                    accept="image/*" onchange="previewImage()" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Video (Optional)</label>
                                                <p>*Note: Dimension 1080x1080 pixel and type file mp4</p>
                                                <video class="d-block mb-2 img-fluid" style="display:none" alt="Preview" controls autoplay>
                                                    Your browser does not support the video tag.
                                                </video>
                                                <input type="file" class="form-control" id="video_url" name="video_url"
                                                    accept="video/*" onchange="previewVideo()" />
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="id" name="publication_id"
                                            required value=1 hidden />
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
    <script>
        function previewVideo() {
            let file = event.target.files[0];
            let blobURL = URL.createObjectURL(file);
            document.querySelector("video").style.display = 'block';
            document.querySelector("video").src = blobURL;
        }
    </script>
@endpush
