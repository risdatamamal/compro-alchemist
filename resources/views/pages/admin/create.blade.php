@extends('layouts.admin')

@section('title')
    Create Admin
@endsection

@section('content')
    <!-- Section Content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Admin</h2>
            <p class="dashboard-subtitle">Create New Admin</p>
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
                            <form action="{{ route('admin.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Admin Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Enter your name" required />
                                          </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Admin Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="Enter your email" required />
                                          </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Admin Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Enter your password" required />
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
