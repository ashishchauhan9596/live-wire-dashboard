@extends('layouts.dashboardLayout')

@section('title', 'Dashboard')

@section('content')
    @hasanyrole('SuperAdmin|Admin')
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Users</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">100</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Authors</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">50</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endhasanyrole
    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#profileForm" class="d-block card-header py-3" data-toggle="collapse" role="button"
                    aria-expanded="true" aria-controls="profileForm">
                    <h6 class="m-0 font-weight-bold text-primary">Profile Form</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="profileForm">
                    <div class="card-body">
                        <form method="POST" action="#" class="user">
                            @csrf
                            <div class="form-group">
                                <input id="cell" aria-describedby="cell" placeholder="Cell" type="text"
                                    class="form-control form-control-user" name="cell" value="" required autofocus>
                            </div>
                            <div class="form-group">
                                <input id="mailingAddress" aria-describedby="mailingAddress" placeholder="Mailing Address"
                                    type="text" class="form-control form-control-user" name="mailingAddress" value=""
                                    required autofocus>
                            </div>
                            <div class="form-group">
                                <input id="mailingStreet" aria-describedby="mailingStreet" placeholder="Mailing Street"
                                    type="text" class="form-control form-control-user" name="mailingStreet" value=""
                                    required autofocus>
                            </div>
                            <button class="btn btn-primary btn-user btn-block">
                                Update Profile
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-6 mb-4">
            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#bookForm" class="d-block card-header py-3" data-toggle="collapse" role="button"
                    aria-expanded="true" aria-controls="bookForm">
                    <h6 class="m-0 font-weight-bold text-primary">Book Form</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="bookForm">
                    <div class="card-body">
                        <form method="POST" action="#" class="user">
                            @csrf
                            <div class="form-group">
                                <input id="bookName" aria-describedby="bookName" placeholder="Book Name" type="text"
                                    class="form-control form-control-user" name="bookName" value="" required autofocus>
                            </div>
                            <div class="form-group">
                                <input id="authorBio" aria-describedby="authorBio" placeholder="Author Bio" type="text"
                                    class="form-control form-control-user" name="authorBio" value="" required autofocus>
                            </div>
                            <div class="form-group">
                                <input id="authorTagline" aria-describedby="authorTagline" placeholder="Author Tagline"
                                    type="text" class="form-control form-control-user" name="authorTagline" value=""
                                    required autofocus>
                            </div>
                            <button class="btn btn-primary btn-user btn-block">
                                Add Book Details
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
