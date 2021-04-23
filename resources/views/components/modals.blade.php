<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Add New System User Modal-->
<div class="modal fade" id="addNewSystemUser" tabindex="-1" role="dialog" aria-labelledby="addNewSystemUserLabel"
    aria-hidden="true">
    <div class="modal-dialog  modal-lg  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewSystemUserLabel">System User Details</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" class="user" action="{{ route('addNewSystemUser') }}">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="role" value="Admin">
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <input type="text" name="name"
                                class="form-control form-control-user  @error('name') is-invalid @enderror"
                                value="{{ old('name') }}" id="systemUserFirstName" placeholder="First Name" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="middleName" class="form-control form-control-user"
                                value="{{ old('middleName') }}" id="systemUserMiddleName" placeholder="Middle Name">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="lastName"
                                class="form-control form-control-user  @error('lastName') is-invalid @enderror"
                                value="{{ old('lastName') }}" id="systemUserLastName" placeholder="Last Name"
                                required>
                            @error('lastName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <input id="email" type="email"
                            class="form-control form-control-user @error('email') is-invalid @enderror" name="email"
                            value="" placeholder="Email Address" autocomplete="email" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-success" type="submit"> Save User </button>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add New Author Modal-->
<div class="modal fade" id="addNewAuthor" tabindex="-1" role="dialog" aria-labelledby="addNewAuthorLabel"
    aria-hidden="true">
    <div class="modal-dialog  modal-lg  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewAuthorLabel">Author Details</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" class="user" action="#">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="role" value="Author">
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="systemUserFirstName"
                                placeholder="First Name" required>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-user" id="systemUserMiddleName"
                                placeholder="Middle Name">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-user" id="systemUserLastName"
                                placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input id="email" type="email" class="form-control form-control-user" name="email" value=""
                            placeholder="Email Address" required autocomplete="email">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-success" type="submit"> Save Author </button>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
