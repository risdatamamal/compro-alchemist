@extends('layouts.muda-indonesia.admin')

@section('title')
    Update Social Media
@endsection

@section('content')
    <!-- Section Content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Social Media</h2>
                <p class="dashboard-subtitle">
                    Update Social Media Content
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
                                <form action="{{ route('update-social-media-muda-indonesia', $socialMedia->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Facebook</label>
                                                <input type="text"
                                                    class="form-control @error('facebook') is-invalid @enderror"
                                                    name="facebook" required placeholder="https://www.facebook.com/yourname"
                                                    value="{{ $socialMedia->facebook }}" />
                                                @error('facebook')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Twitter</label>
                                                <input type="text"
                                                    class="form-control @error('twitter') is-invalid @enderror"
                                                    name="twitter" required placeholder="https://twitter.com/yourname"
                                                    value="{{ $socialMedia->twitter }}" />
                                                @error('twitter')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Linkedin</label>
                                                <input type="text"
                                                    class="form-control @error('linkedin') is-invalid @enderror"
                                                    name="linkedin" required
                                                    placeholder="https://www.linkedin.com/company/yourname"
                                                    value="{{ $socialMedia->linkedin }}" />
                                                @error('linkedin')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Instagram</label>
                                                <input type="text"
                                                    class="form-control @error('instagram') is-invalid @enderror"
                                                    name="instagram" required
                                                    placeholder="https://www.instagram.com/yourname"
                                                    value="{{ $socialMedia->instagram }}" />
                                                @error('instagram')
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
    <script>
        CKEDITOR.replace('address');
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endpush
