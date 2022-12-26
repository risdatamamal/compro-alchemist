@extends('layouts.admin')

@section('title')
    Update Header
@endsection

@section('content')
    <!-- Section Content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Admin</h2>
                <p class="dashboard-subtitle">
                    Update Header Content
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('update-header', $header->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control" name="title" required
                                                    placeholder="Title on header" value="{{ $header->title }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Subtitle</label>
                                                <input type="text" class="form-control" name="subtitle" required
                                                    placeholder="Description on header" value="{{ $header->subtitle }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Text on Button</label>
                                                <input type="text" class="form-control" name="button" required
                                                    placeholder="Example: FREE CONSULTATION" value="{{ $header->button }}" />
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
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
