@extends('layouts.dashboardLayout')

@section('title', 'Profile')

@section('content')
    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-12 mb-4">

            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#profileForm" class="d-block card-header py-3" data-toggle="collapse" role="button"
                    aria-expanded="true" aria-controls="profileForm">
                    <h6 class="m-0 font-weight-bold text-primary">Profile Details</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="profileForm">
                    <div class="card-body">
                        <form method="POST" action="#" class="user">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <input id="name" aria-describedby="name" placeholder="Name" type="text"
                                        class="form-control form-control-user" name="name" value="{{ $data->name }}"
                                        required autofocus>
                                </div>
                                <div class="col-sm-4">
                                    <input id="middleName" aria-describedby="middleName" placeholder="Middle Name"
                                        type="text" class="form-control form-control-user" name="middleName"
                                        value="{{ $data->middle_name }}">
                                </div>
                                <div class="col-sm-4">
                                    <input id="lastName" aria-describedby="lastName" placeholder="Last Name" type="text"
                                        class="form-control form-control-user" name="lastName"
                                        value="{{ $data->last_name }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input id="email" type="email" aria-describedby="email" placeholder="Email"
                                        class="form-control form-control-user" name="email" value="{{ $data->email }}"
                                        required readonly>
                                </div>
                                <div class="col-sm-6">
                                    <input id="cell" aria-describedby="cell" placeholder="Cell" type="text"
                                        class="form-control form-control-user" name="cell" value="{{ $data->cell }}"
                                        required>
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input id="mailingAddress" aria-describedby="mailingAddress"
                                        placeholder="Mailing Address" type="text" class="form-control form-control-user"
                                        name="mailingAddress" value="{{ $data->mailing_address_street }}" required>
                                </div>
                                <div class=" col-sm-6">
                                    <input id="mailingAptOrUnit" aria-describedby="mailingAptOrUnit"
                                        placeholder="Mailing APT or Unit" type="text" class="form-control form-control-user"
                                        name="mailingAptOrUnit" value="{{ $data->mailing_address_apt_or_unit }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <input id="mailingState" aria-describedby="mailingState" placeholder="Mailing State"
                                        type="text" class="form-control form-control-user" name="mailingState"
                                        value="{{ $data->mailing_address_state }}" required autofocus>
                                </div>
                                <div class="col-sm-4">
                                    <input id="mailingCity" aria-describedby="mailingCity" placeholder="Mailing City"
                                        type="text" class="form-control form-control-user" name="mailingCity"
                                        value="{{ $data->mailing_address_city }}">
                                </div>
                                <div class="col-sm-4">
                                    <input id="mailingZip" aria-describedby="mailingZip" placeholder="Mailing Zip"
                                        type="text" class="form-control form-control-user" name="mailingZip"
                                        value="{{ $data->mailing_address_zip }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input id="shippingAddress" aria-describedby="shippingAddress"
                                        placeholder="Shipping Address" type="text" class="form-control form-control-user"
                                        name="shippingAddress" value="{{ $data->shipping_address_street }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <input id="shippingState" aria-describedby="shippingState" placeholder="Shipping State"
                                        type="text" class="form-control form-control-user" name="shippingState"
                                        value="{{ $data->shipping_address_state }}" required autofocus>
                                </div>
                                <div class="col-sm-4">
                                    <input id="shippingCity" aria-describedby="shippingCity" placeholder="Shipping City"
                                        type="text" class="form-control form-control-user" name="shippingCity"
                                        value="{{ $data->shipping_address_city }}">
                                </div>
                                <div class="col-sm-4">
                                    <input id="shippingZip" aria-describedby="shippingZip" placeholder="Shipping Zip"
                                        type="text" class="form-control form-control-user" name="shippingZip"
                                        value="{{ $data->shipping_address_zip }}" required>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button class="btn btn-primary btn-user">
                                    Update Profile
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
